from re import L
from tkinter import N
from googletrans import Translator
from nltk import tokenize
import readtime

"""
    # time to read
    * .of_text() - text
    * .of_markdown() - markdown
    * .of_html() - html
    
    # example
    * result = readtime.of_text('Lorem ipsum dolor sit amet, consectet')
    * print(result.seconds // 60) f.e. 5 minutes
"""

class ArticleTranslator:
    def __init__(self, text_, src=None, dest='en'):     
        # tokenize source and assign translator
        self.translated_text = ''
        self.token = tokenize.sent_tokenize(text_)
        self.translator = Translator()
        
        # limits and offsets
        list_of_lines = []
        max_length = 15000

        if len(text_) > max_length:
            # split the text into lines
            while len(text_) > max_length:
                line_length = text_[:max_length].rfind('.')                
                list_of_lines.append(text_[:line_length])
                text_ = text_[line_length + 1:]
                
            # translate per text
            for line in list_of_lines:
                if src is None:
                    self.translated_text += self.translator.translate(line, dest=dest).text
                else:
                    self.translated_text += self.translator.translate(line, dest=dest, src=src).text
        else:
            if src is None:
                self.translated_text += self.translator.translate(text_, dest=dest).text
            else:
                self.translated_text += self.translator.translate(text_, dest=dest, src=src).text