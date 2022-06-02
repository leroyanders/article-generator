from googleapiclient.discovery import build
import googleapiclient.errors
from datetime import datetime
from frontend.models import SearchCreaditionals, SearchCreaditionalsRequests
import random
import requests
import shutil
import uuid
import logging
import os
from urllib.parse import urlparse
from app.settings import *
# http client configuration
user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36'

# logging configuration
logging.basicConfig(format='%(levelname)s:%(message)s', level=logging.DEBUG)

import urllib.parse
import urllib.request
urljoin = urllib.parse.urljoin
urlretrieve = urllib.request.urlretrieve
quote = urllib.parse.quote

# configure headers
opener = urllib.request.build_opener()
opener.addheaders = [('User-agent', user_agent)]
urllib.request.install_opener(opener)


def google_search(search_term, key, cse, **kwargs):
    service = build(
        "customsearch", 
        "v1", 
        developerKey = key
    )
    res = service.cse().list(
        q = search_term, 
        num = 10, 
        cx = cse,
        searchType = 'image',
        imgSize = 'HUGE',
        rights = 'commercial',
        **kwargs
    ).execute()
    
    return res

class ImageSearch:
    def __init__(self, search_term, folder=uuid.uuid4().hex, limit=10, **kwargs):
        self.search_results = []
        self.folder = folder
        self.key = None
        self.cse = None
        self.queries_limit = 0
        self.start_index = 1
        self.has_error = False
        self.limit = limit
        self.search_step(search_term, **kwargs)
    
    def unlock(self):
        limited_creditionals = SearchCreaditionals.objects.filter(
            limit=True,
        )

        for limited in limited_creditionals:
            if str(limited.limit_date) != datetime.today().strftime('%Y-%m-%d'):
                
                this = SearchCreaditionals.objects.get(cse=limited.cse)
                this.limit = False
                this.save()
    
    def search_step(self, search_term, start=1, **kwargs):
        self.unlock()
        self.creditionals = SearchCreaditionals.objects.filter(
            limit=False
        )
        
        for item in self.creditionals:
            cse = item.cse
            key = item.api_key
            
            # get all google search accounts
            request_count = len(SearchCreaditionalsRequests.objects.filter(
                cse=cse,
                date_created=datetime.today().strftime('%Y-%m-%d')
            ))
            
            # if account is not used before and has day limit
            if request_count < 100:
                try:
                    self.search = google_search(search_term, key=key, cse=cse, start=start, **kwargs)
                    
                    if 'items' in self.search:
                        for result_item in self.search['items']:
                            if len(self.search_results) < self.limit:
                                self.search_results.append(result_item['link'])
                            else:
                                break
                        
                        # create request record for this search
                        SearchCreaditionalsRequests.objects.create(
                            cse=cse,
                            date_created=datetime.today().strftime('%Y-%m-%d')
                        )
                        
                        if 'nextPage' in self.search['queries']:
                            self.start_index = self.search['queries']['nextPage'][0]['startIndex']
                            
                            if int(self.search['queries']['nextPage'][0]['totalResults']) > self.limit:
                                # if we have less than limit is setting
                                if len(self.search_results) < self.limit:
                                    self.search_step(search_term, start=self.start_index)
                    else:
                        self.has_error = True
                    
                    # we found creditionals, stopping
                    break
                    
                except googleapiclient.errors.HttpError as ex:
                    if ex.status_code == 429:
                        record = SearchCreaditionals.objects.get(cse=cse)
                        record.limit = True
                        record.limit_date = datetime.today().strftime('%Y-%m-%d')
                        
                        # save the record as limited
                        record.save()
    def fix_url(self, url):
        return quote(url, safe="%/:=&?~#+!$,;'@()*[]")
    
    def download_image(self, image_url, dest_dir, image_filename):
        image_url = self.fix_url(image_url)

        try:
            logging.info("downloading image %s" % image_url)
            
            tmp_file_name, headers = urlretrieve(image_url)
            content_type = headers.get("Content-Type")

            if content_type == 'image/jpeg' or content_type == 'image/jpg':
                ext = 'jpg'
            elif content_type == 'image/png':
                ext = 'png'
            elif content_type == 'image/gif':
                ext = 'gif'
            elif content_type == 'image/webp':
                ext = 'webp'
            else:
                logging.warning("unknown image content type %s" % content_type)
                return

            if not os.path.exists(dest_dir):
                os.mkdir(dest_dir)
            
            image_path = os.path.join(dest_dir, image_filename + f'.{ext}')
            shutil.move(tmp_file_name, image_path)
        except Exception as e:
            logging.warning("Image download error. %s" % e)
                      
    def get_relative_path(self):
        for image in self.search_results:
            name = urlparse(image).path.split('/')[-1]
            self.download_image(image, f'{BASE_DIR}/frontend/static/uploads/{self.folder}', uuid.uuid4().hex)
            
            logging.info(f'Image {image} downloaded to static/uploads/{self.folder}')
        
        return random.choice(os.listdir(f'{BASE_DIR}/frontend/static/uploads/{self.folder}'))