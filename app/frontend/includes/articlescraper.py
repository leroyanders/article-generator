import django
from bs4 import BeautifulSoup
from newspaper import Article
from goose3 import Goose
import requests
import trafilatura
import xml.etree.ElementTree as ET
from markdownify import markdownify
import datetime
import re
import os
import environ
from newspaper import fulltext

# environ
env = environ.Env()
# Take environment variables from .env.dev file
environ.Env.read_env(os.path.join(os.path.dirname(os.path.dirname(os.path.abspath(__file__))), '.env'))

# TODO:
from .imagesearch import ImageSearch as image
from .searchengine import SearchEngine as search
from .paraphraser import SpinRewriter as rewriter

class ArticleParser:
    def __init__(self, url):
        self.article_data = {}
        self.response_to_markdown = ''
        
        r = requests.get(url)

        headers = {'Content-Type': 'text/html'}
        self.response = requests.get(url, headers=headers)
        self.status_code = self.response.status_code
        
        if self.response.status_code == 200:
            # data by newspaper
            newspaper = Article(url)
            newspaper.download()
            newspaper.parse()
            newspaper.nlp()
            self.newspaper_summary = newspaper.text
            
            # newspaper publish data
            self.publish_date = newspaper.publish_date
            
            # if publish_date is None
            if self.publish_date is None:
                self.publish_date = datetime.datetime.now()
            
            # data by goose3
            article = Goose().extract(url=url)
            self.title = article.title
            self.description = article.meta_description
            self.keywords = article.meta_keywords
            self.top_image = newspaper.top_image
            self.goose_summary = article.cleaned_text
            
            # root article node (don't use this)
            root_node = article.top_node

            try:
                # trafilatura
                downloaded = trafilatura.fetch_url(url)
                xml_tree = trafilatura.extract(downloaded, output_format='xml', include_comments=False, include_images=True)
                root = ET.fromstring(xml_tree)
                
                for child in root[0]:
                    attibutes = child.attrib
                    tag = child.tag
                    
                    if tag == 'head':
                        self.response_to_markdown += '<' + attibutes['rend'] + '>' + child.text + '</' + attibutes['rend'] + '>'
                    elif tag == 'p':
                        self.response_to_markdown += '<p>' + child.text + '</p>'
                    if tag == 'list':
                        self.response_to_markdown += '<ul>'
                        
                        for list_item in child:
                            self.response_to_markdown += '<li>' + list_item[0].text + '</li>'
                            
                        self.response_to_markdown += '</ul>'
                    if tag == 'graphic':
                        self.response_to_markdown += '<img src="' + attibutes['src'] + '" alt="' + attibutes['alt'] + '" />'
                    
            except Exception:
                self.article_data = {
                    'status_code': self.status_code,
                    'message': 'Wrong url credentials. Please check your credentials and try again.'
                }
            
            self.article_data = {
                'title': self.title,
                'description': self.description,
                'keywords': self.keywords,
                'summary': markdownify(self.response_to_markdown, heading_style="ATX"),
                'publish_date': self.publish_date,
            }
            
            # if markdown less than newspaper summary
            if len(self.article_data['summary'].strip()) < len(self.newspaper_summary.strip()):
                self.article_data['summary'] = self.newspaper_summary
                
            # if markdown less than goose summary
            if len(self.article_data['summary'].strip()) < len(self.goose_summary.strip()):
                self.article_data['summary'] = self.goose_summary
            
            # change email address
            matches = re.findall(r'[\w.+-]+@[\w-]+\.[\w.-]+', self.article_data['summary'])
            
            for email in matches:
                self.article_data['summary'] = self.article_data['summary'].replace(email, env('EMAIL_ADRESS'))
        else:
            self.article_data = {
                'status_code': self.status_code,
                'message': 'Wrong url credentials. Please check your credentials and try again.'
            }


class ArticleParserSystem:
    def __init__(self, search_query, limit=10, lang='en', **kwargs):
        self.system_results = []
        self.has_error = False
        self.do_while_limit = False
        
        # blocked sites
        self.blocked_sites = [
            'www.facebook.com', 
            'www.youtube.com', 
            'www.twitter.com', 
            'www.quora.com', 
            'www.vectorstock.com'
        ]
        
        # if setted reach full limit
        if self.do_while_limit:
            if len(self.system_results) < limit:
                self.search_query_module = search(search_term=search_query, limit=limit, **kwargs)
                self.search_query = self.search_query_module.search_results
                self.has_error = self.search_query_module.has_error
                
                # if an error was not occurred
                if self.has_error is not True:
                    for website in self.search_query:
                        if 'og:type' in website['pagemap']['metatags'][0] and website['pagemap']['metatags'][0]['og:type'] == 'article':
                            # if site is in blacklist go next
                            if self.is_blocked(website['link']):
                                continue
                            
                            self.article_data = ArticleParser(website['link']).article_data                        
                            # if successful parsing result
                            if 'status_code' not in self.article_data:
                                self.system_results.append(self.article_data)
                else:
                    print(self.has_error)  
        
        else:
            self.search_query_module = search(search_term=search_query, limit=limit)
            self.search_query = self.search_query_module.search_results
            self.has_error = self.search_query_module.has_error
            
            # if an error was not occurred
            if self.has_error is not True:
                for website in self.search_query:
                    if 'og:type' in website['pagemap']['metatags'][0] and website['pagemap']['metatags'][0]['og:type'] == 'article':
                        # if site is in blacklist go next
                        if self.is_blocked(website['link']):
                            continue
                        
                        self.article_data = ArticleParser(website['link']).article_data                        
                        # if successful parsing result
                        if 'status_code' not in self.article_data:
                            self.system_results.append(self.article_data)
            else:
                print(self.has_error)           
                
    def is_blocked(self, url):
         for website in self.blocked_sites:
                if website in url:
                    return True
                return False

### TESTS ###
# print(ArticleParser('https://metro.co.uk/2016/01/09/10-texts-your-body-wants-to-send-to-you-when-youre-hungover-5612165/').article_data)