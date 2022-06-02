from googleapiclient.discovery import build
import googleapiclient.errors
from datetime import datetime
from frontend.models import SearchCreaditionals, SearchCreaditionalsRequests

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
        filter = 1,
        **kwargs
    ).execute()
    
    return res

class SearchEngine:
    def __init__(self, search_term, limit=10, **kwargs):
        self.search_results = []
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
                                self.search_results.append(result_item)
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