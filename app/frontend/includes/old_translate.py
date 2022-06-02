from cgitb import small
import sys
import re
import ssl
import html
import urllib.request
import urllib.parse
import time
from nltk import tokenize

# user agent
agent = {'User-Agent': "Mozilla/4.0 (\compatible;\MSIE 6.0;\Windows NT 5.1;\SV1;\.NET CLR 1.1.4322;\.NET CLR 2.0.50727;\.NET CLR 3.0.04506.30\)"}
# dissable ssl verify
ssl._create_default_https_context = ssl._create_unverified_context

def unescape(text):
    return (html.unescape(text))
def translate(to_translate, to_language='auto', from_language='auto'):
    from langdetect import detect
    import urllib.request
    import urllib

    detect_lang = detect(to_translate[:70])
    # general link to request
    base_link = 'http://translate.google.com/m?tl=%s&sl=%s&q=%s'
    # prepare link to request
    to_translate = urllib.parse.quote(to_translate)
    # print(to_translate)
    # link
    link = base_link % (to_language, from_language, to_translate)
    # request
    request = urllib.request.Request(link, headers=agent)
    
    try:
        # do request
        raw_data = urllib.request.urlopen(request, timeout=10).read()
        # decode response
        data = raw_data.decode("utf-8")
        # regexp
        expr = r'(?s)class="(?:t0|result-container)">(.*?)<'
        # results
        re_result = re.findall(expr, data)
        # response result
        if (len(re_result) == 0):
            result = ''
        else:
            result = unescape(re_result[0])
        return (result)
    except (urllib.error.HTTPError, urllib.error.URLError) as error:
        return False
    else:
        pass

class Translate:
    def __init__(self, text=None, translate_to='en'):
        import json
        # Opening JSON file
        f = open('./app/static/languages.json')
        # translation
        self.response = translate(text, translate_to)
        # version
        self.version = 1.04
        # languages
        self.languages = json.load(f)
class TranslateArticle:
    def __init__(self, text, translate_to):
        def article(text, translate_to):
            
            parts = tokenize.sent_tokenize(text)
            new_text = ''

            for part in parts:
                copyright = re.search(r'((http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?((\/|,)).*?$)', str(part))
                # if no copyrights
                if copyright != None:
                    continue
                
                new_text += part
            
            text = new_text

            try:
                if len(text) > 5000:
                    list_of_lines = []
                    max_length = 5000

                    while len(text) > max_length:
                        line_length = text[:max_length].rfind('.')
                        list_of_lines.append(text[:line_length])
                        text = text[line_length + 1:]

                    list_of_lines.append(text)
                    translation = ''
                    
                    for line in list_of_lines:
                        translation += Translate(line, translate_to).response

                    return translation
                else:
                    parts = (tokenize.sent_tokenize(text))
                    text_ = ''

                    for part in parts:
                        copyright = re.search(r'((http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?((\/|,)).*?$)', str(part))
                        
                        if copyright != None:
                            continue
                        
                        text_ += part
                    
                    translation = Translate(text_, translate_to).response
                    return translation
            except Exception:
                # wait 3 seconds before
                time.sleep(3)

                if len(text) > 5000:
                    list_of_lines = []
                    max_length = 5000

                    while len(text) > max_length:
                        line_length = text[:max_length].rfind('.')
                        list_of_lines.append(text[:line_length])
                        text = text[line_length + 1:]

                    list_of_lines.append(text)
                    translation = ''
                    
                    for line in list_of_lines:
                        translation += Translate(line, translate_to).response

                    return translation
                else:
                    parts = (tokenize.sent_tokenize(text))
                    text_ = ''

                    for part in parts:
                        copyright = re.search(r'((http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?((\/|,)).*?$)', str(part))
                        
                        if copyright != None:
                            continue
                        
                        text_ += part
                    
                    translation = Translate(text_, translate_to).response
                    return translation

        # article
        self.translate_article = article(text, translate_to)