from django.contrib import admin
from django.contrib import messages
from django.utils.translation import ngettext
# language_detector
from language_detector import detect_language
# datetime
from datetime import datetime
from datetime import date
from time import sleep
# text formaters
from bs4 import BeautifulSoup
from markdown import markdown
import uuid
# threading
import threading
# models
from .models import Categories, Queries, Articles, SearchCreaditionals, SearchCreaditionalsRequests, User
# core moduls
from .includes import articlescraper, imagesearch, articletranslator, paraphraser
import os
from django.core.files import File
from urllib.parse import urlparse
import urllib
import urllib.request
from app.settings import *
from django.core.files.temp import NamedTemporaryFile
from django.utils.html import mark_safe

class BackgroundTaskThread(threading.Thread):
    def __init__(self, function, args, schedule=0):
        threading.Thread.__init__(self, target=function, args=list(args)), self.start()

def paraphrase_articles(queryset):
    for query in queryset:
        query_set_data = query
        
        language = detect_language(query_set_data.text_content)
        
        LANGUAGES = [
            ('af', 'Afrikaans'),
            ('ar', 'Arabic'),
            ('ar', 'Algerian Arabic'),
            ('ast', 'Asturian'),
            ('az', 'Azerbaijani'),
            ('bg', 'Bulgarian'),
            ('be', 'Belarusian'),
            ('bn', 'Bengali'),
            ('br', 'Breton'),
            ('bs', 'Bosnian'),
            ('ca', 'Catalan'),
            ('cs', 'Czech'),
            ('cy', 'Welsh'),
            ('da', 'Danish'),
            ('de', 'German'),
            ('dsb', 'Lower Sorbian'),
            ('el', 'Greek'),
            ('en', 'English'),
            ('en-au', 'Australian English'),
            ('en-gb', 'British English'),
            ('eo', 'Esperanto'),
            ('es', 'Spanish'),
            ('es-ar', 'Argentinian Spanish'),
            ('es-co', 'Colombian Spanish'),
            ('es-mx', 'Mexican Spanish'),
            ('es-ni', 'Nicaraguan Spanish'),
            ('es-ve', 'Venezuelan Spanish'),
            ('et', 'Estonian'),
            ('eu', 'Basque'),
            ('fa', 'Persian'),
            ('fi', 'Finnish'),
            ('fr', 'French'),
            ('fy', 'Frisian'),
            ('ga', 'Irish'),
            ('gd', 'Scottish Gaelic'),
            ('gl', 'Galician'),
            ('he', 'Hebrew'),
            ('hi', 'Hindi'),
            ('hr', 'Croatian'),
            ('hsb', 'Upper Sorbian'),
            ('hu', 'Hungarian'),
            ('hy', 'Armenian'),
            ('ia', 'Interlingua'),
            ('id', 'Indonesian'),
            ('ig', 'Igbo'),
            ('io', 'Ido'),
            ('is', 'Icelandic'),
            ('it', 'Italian'),
            ('ja', 'Japanese'),
            ('ka', 'Georgian'),
            ('kab', 'Kabyle'),
            ('kk', 'Kazakh'),
            ('km', 'Khmer'),
            ('kn', 'Kannada'),
            ('ko', 'Korean'),
            ('ky', 'Kyrgyz'),
            ('lb', 'Luxembourgish'),
            ('lt', 'Lithuanian'),
            ('lv', 'Latvian'),
            ('mk', 'Macedonian'),
            ('ml', 'Malayalam'),
            ('mn', 'Mongolian'),
            ('mr', 'Marathi'),
            ('ms', 'Malay'),
            ('my', 'Burmese'),
            ('nb', 'Norwegian Bokmål'),
            ('ne', 'Nepali'),
            ('nl', 'Dutch'),
            ('nn', 'Norwegian Nynorsk'),
            ('os', 'Ossetic'),
            ('pa', 'Punjabi'),
            ('pl', 'Polish'),
            ('pt', 'Portuguese'),
            ('pt-br', 'Brazilian Portuguese'),
            ('ro', 'Romanian'),
            ('ru', 'Russian'),
            ('sk', 'Slovak'),
            ('sl', 'Slovenian'),
            ('sq', 'Albanian'),
            ('sr', 'Serbian'),
            ('sr-latn', 'Serbian Latin'),
            ('sv', 'Swedish'),
            ('sw', 'Swahili'),
            ('ta', 'Tamil'),
            ('te', 'Telugu'),
            ('tg', 'Tajik'),
            ('th', 'Thai'),
            ('tk', 'Turkmen'),
            ('tr', 'Turkish'),
            ('tt', 'Tatar'),
            ('udm', 'Udmurt'),
            ('uk', 'Ukrainian'),
            ('ur', 'Urdu'),
            ('uz', 'Uzbek'),
            ('vi', 'Vietnamese'),
            ('zh', 'China'),
        ]

        translate_to = None

        for lang in LANGUAGES:
            if language == lang[1]:
                translate_to = lang[0]
                break
        
        text_content = articletranslator.ArticleTranslator(query_set_data.text_content, dest='en').translated_text
        unique_text  = paraphraser.SpinRewriter(text_content).response
        unique_text  = articletranslator.ArticleTranslator(unique_text, dest=translate_to).translated_text
        
        # if successfuly paraphraded
        if unique_text != query_set_data.text_content:
            query.text_content = unique_text
            query.completed = True
            query.save()

def translate_articles(queryset):
    for query in queryset:
        query_set_data = query
        
        text         = query_set_data.text_content
        title        = query_set_data.title
        description  = query_set_data.description
        query_target = query_set_data.query
        translate_to = query_target.translate_to
        
        translated = {
            'title': articletranslator.ArticleTranslator(title, dest=translate_to).translated_text,
            'description': articletranslator.ArticleTranslator(description, dest=translate_to).translated_text,
            'text': articletranslator.ArticleTranslator(text, dest=translate_to).translated_text,
        }
        
        query.text_content = translated['text']
        query.description  = translated['description']
        query.title        = translated['title']
        
        query.save()

def scrap_articles_by_searchquery(queryset):
    for query in queryset:
        query_set_data = query
        
        # search properties(keys)
        if '\n' in query_set_data.keys:
            keywords = ' '.join(query_set_data.keys.split('\n'))
        else:
            keywords = ' ' + query_set_data.keys
        
        # search properties
        location   = query_set_data.location
        query_text = query_set_data.text + keywords
        limit      = int(query_set_data.limit)
        language   = query_set_data.translate_to
        
        # scraper
        scraper    = articlescraper.ArticleParserSystem(search_query=query_text, limit=limit, lang=language, gl=location)
        error      = scraper.has_error
        results    = scraper.system_results
        count      = len(results)
        
        if error is False:
            for index, article in enumerate(results):
                # if all articles was received
                if index == count:
                    queryset.update(status='not_running') 
                
                # article data
                title        = article['title']
                descriprion  = article['description']
                keywords     = article['keywords']
                summary      = article['summary']
                publish_date = article['publish_date']
                folder       = uuid.uuid4().hex
                top_image    = imagesearch.ImageSearch(title, folder=folder, limit=10).get_relative_path()
                name         = urlparse(top_image).path.split('/')[-1]
                category     = query_set_data.category
                author       = query_set_data.author   
                
                Articles.objects.create(
                    author       = author,
                    title        = title,
                    keywords     = keywords,
                    description  = descriprion,
                    query        = query,
                    category     = category,
                    text_content = summary,
                    date_created = publish_date,
                    top_image    = f'frontend/static/uploads/{folder}/{name}'
                )

        queryset.update(status='not_running') 
                

@admin.action(description='Запустить выбранные критерии для парсинга')
def run_parser(self, request, queryset):
    updated = queryset.update(status='running')
    
    self.message_user(request, ngettext(
        '%d критерия добавлена в обработку на получения статей',
        '%d критерии добавлены в обработку на получения статей',
        updated
    ) % updated , messages.SUCCESS)
    
    BackgroundTaskThread(scrap_articles_by_searchquery, args={queryset})

@admin.action(description='Перевести выбранные статьи')
def translate(self, request, queryset):
    updated = len(queryset)
    self.message_user(request, ngettext(
        '%d статья добавлена в обработку на перевод',
        '%d статьи добавлена в обработку на перевод',
        updated,
    ) % updated, messages.SUCCESS)
    
    BackgroundTaskThread(translate_articles, args={queryset})

@admin.action(description='Уникализировать выбранные статьи')
def unique(self, request, queryset):
    updated = len(queryset)
    self.message_user(request, ngettext(
        '%d статья добавлена в обработку на уникализацию',
        '%d статьи добавлена в обработку на уникализацию',
        updated,
    ) % updated, messages.SUCCESS)
    
    BackgroundTaskThread(paraphrase_articles, args={queryset})

@admin.register(Categories)
class CategoriesAdmin(admin.ModelAdmin):
    CONTENT_HELP_TEXT = ' '.join(
        [
            '<p>Обратите внимание:</p>',
            '<p> - Если не укзана <strong>использовать эту категорию на сайте</strong>, она не будет отображаться на сайте</p>',
            '<p> - Указаное <strong>имя категории</strong> не будет переводится и бдует использоваться в первоначальном виде</p>',
        ]
    )
    
    list_display  = ('get_id', 'get_name', 'get_author', 'get_date', 'is_active')
    list_filter   = ('active', 'date_created', 'author')
    search_fields = ['name']
    ordering      = ['id']
    fieldsets     = (
        ('Основная информация', {
            'fields': ('name', 'active'),
            'description': '<div class="help">%s</div>' % CONTENT_HELP_TEXT,
        }),
    )
    
    # fields name
    Categories._meta.get_field('name').verbose_name         = 'Имя категории'
    Categories._meta.get_field('active').verbose_name       = 'Использовать эту категорию на сайте'
    Categories._meta.get_field('author').verbose_name       = 'Автор категории'
    Categories._meta.get_field('date_created').verbose_name = 'Дата создания'
    
    def save_model(self, request, obj, form, change):
        if getattr(obj, 'author', None) is None:
            obj.author = request.user
        obj.save()
        
    def add_view(self, request, form_url='', extra_context=None):
        extra_context = {
            'title': 'Добавить новую категорию'
        }
        
        return super().add_view(request, form_url, extra_context=extra_context)
    
    def change_view(self, request, object_id, form_url='', extra_context=None):
        extra = {
            'title': 'Отредактировать категорию'
        }
        
        return super().change_view(request, object_id, form_url, extra_context=extra)
    
    # Columns
    @admin.display(ordering='id', description='#')
    def get_id(self, obj):
        objects = Categories.objects.all()
        index = 0
        
        for i, record in enumerate(objects):
            if record == obj:
                index = (i + 1)
        
        return index
    
    @admin.display(ordering='id', description='Имя категории')
    def get_name(self, obj):
        return obj.name
    
    @admin.display(ordering='author', description='Автор категории')
    def get_author(self, obj):
        return obj.author
    
    @admin.display(ordering='date_created', description='Дата создания')
    def get_date(self, obj):
        return obj.date_created
    
    @admin.display(ordering='active', description='Категория активна')
    def is_active(self, obj):
        return obj.active
    
    is_active.boolean = True

@admin.register(Queries)
class QueriesAdmin(admin.ModelAdmin):
    CONTENT_HELP_TEXT = ' '.join(
        [
            '<p><strong>Операторы для более точного поиска:</strong></p><br>',
            '<p><strong>intitle:текст</strong> - искать содержащие в заголовке текст</p>',
            '<p><strong>inurl:текст</strong> - искать содержащие в ссылке текст</p>',
            '<p><strong>intext:текст</strong> - искать содержащие в тексте слова</p>',
            '<p><strong>filetype:текст</strong> - искать содержащие типы(PDF, DOC, XLS, PPT, и TXT.)</p>',
        ]
    )
    
    list_display  = ('get_id', 'get_text', 'get_category', 'get_keys', 'get_translate_articles', 'get_location', 'get_date', 'get_author', 'get_articles_count', 'get_limit', 'get_status')
    list_filter   = ('location', 'date_created', 'author', 'category', 'status')
    search_fields = ['text', 'location']
    ordering      = ['id']
    actions       = [run_parser]
    fieldsets     = (
        ('Текст запроса', {
            'fields': ('text',),
        }),
        ('SEO и прочее', {
           'fields': ('keys',), 
           'description': '<div class="help">%s</div>' % CONTENT_HELP_TEXT,
        }),
        ('Локализация и категория', {
            'fields': ('category', ('translate_to', 'location', 'limit'))
        }),
    )
    
     # fields name
    Queries._meta.get_field('text').verbose_name         = 'Запрос для поисковика'
    Queries._meta.get_field('keys').verbose_name         = 'Ключи (параметры с новой строки)'
    Queries._meta.get_field('category').verbose_name     = 'Категория'
    Queries._meta.get_field('translate_to').verbose_name = 'Язык для переводчика'
    Queries._meta.get_field('location').verbose_name     = 'Геолокация для поисковика'
    Queries._meta.get_field('limit').verbose_name        = 'Лимит на обработку'
    Queries._meta.get_field('date_created').verbose_name = 'Дата создания'
    Queries._meta.get_field('author').verbose_name       = 'Автор критерия'
    Queries._meta.get_field('status').verbose_name       = 'Статус обработчика'
    
    
    def save_model(self, request, obj, form, change):
        if getattr(obj, 'author', None) is None:
            obj.author = request.user
        obj.save()
        
    def add_view(self, request, form_url='', extra_context=None):
        extra_context = {
            'title': 'Добавить новую критерию'
        }
        
        return super().add_view(request, form_url, extra_context=extra_context)
    
    def change_view(self, request, object_id, form_url='', extra_context=None):
        extra = {
            'title': 'Отредактировать критерию'
        }
        
        return super().change_view(request, object_id, form_url, extra_context=extra)
        
    @admin.display(ordering='text', description='Запрос')
    def get_text(self, obj):
        return obj.text
    
    @admin.display(ordering='id', description='#')
    def get_id(self, obj):
        objects = Queries.objects.all()
        index = 0
        
        for i, record in enumerate(objects):
            if record == obj:
                index = (i + 1)
        
        return index
    
    @admin.display(ordering='author', description='Автор запроса')
    def get_author(self, obj):
        return obj.author
    
    @admin.display(ordering='keys', description='Ключи SEO')
    def get_keys(self, obj):
        return obj.keys
    
    @admin.display(ordering='translate_to', description='Переводить полученные статьи на:')
    def get_translate_articles(self, obj):
        if obj.translate_to != '2':
            return obj.translate_to.upper()
        else:
            return ' - (по умолчанию EN)'
    
    @admin.display(ordering='location', description='Локация для поиска')
    def get_location(self, obj):
        if obj.location == '*':
            return 'Поиск по всем ГЕО'
        return obj.location.upper()
    
    @admin.display(ordering='date_created', description='Дата создания')
    def get_date(self, obj):
        return obj.date_created
    
    @admin.display(ordering='category', description='Категория')
    def get_category(self, obj):
        return obj.category
    
    @admin.display(ordering='category', description='Количество статей')
    def get_articles_count(self, obj):
        def _title(_str):
            _str = str(_str)
            
            if _str.endswith('0'):
                return 'статей'
            elif _str.endswith('1'):
                return 'статья'
            elif _str.endswith('3'):
                return 'статьи'
            elif _str.endswith('4'):
                return 'статьи'
            elif _str.endswith('6'):
                return 'статей'
            elif _str.endswith('7'):
                return 'статей'
            elif _str.endswith('8'):
                return 'статей'
            elif _str.endswith('9'):
                return 'статей'
            elif _str.endswith('11'):
                return 'статей'
            elif _str.endswith('12'):
                return 'статей'
            elif _str.endswith('13'):
                return 'статей'
            elif _str.endswith('14'):
                return 'статей'
            elif _str.endswith('15'):
                return 'статей'
            else:
                return 'статей'

        
        return str(len(Articles.objects.filter(query=obj.id))) + ' ' + _title(str(len(Articles.objects.filter(query=obj.id))))
    
    @admin.display(ordering='status', description='В процессе')
    def get_status(self, obj):
        if obj.status == 'not_running':
            return False
        return True
    
    @admin.display(ordering='limit', description='Лимит на количество')
    def get_limit(self, obj):
        return obj.limit + ' ' + 'статей'
    
    get_status.boolean = True
    

@admin.register(Articles)
class ArticlesAdmin(admin.ModelAdmin):
    class Media:
        css = {
            'all': ('css/articles.css',)
        }
    
    CONTENT_HELP_TEXT = ' '.join(
        [
            '<p>Чтобы узнать возможности форматирования перейдите по ссылке:</p>', 
            '<p><a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">A quick reference to the Markdown syntax.</a></p>'
        ]
    )
    
    list_display  = ('get_id', 'get_title', 'get_description', 'get_query', 'get_keywords', 'get_category', 'get_content', 'get_image', 'get_date', 'article_language', 'completed')
    list_filter   = ('date_created', 'category', 'completed')
    search_fields = ['title']
    ordering      = ['id']
    actions       = [translate, unique]
    fieldsets     = (
        ('Основная информация', {
            'fields': ('title', 'description', 'top_image', 'keywords'),
        }),
        ('Запрос и категория', {
            'fields': ('query', 'category')
        }),
        ('Текст статьи', {
            'classes': ('wide'),
            'fields': ('text_content',),
            'description': '<div class="help">%s</div>' % CONTENT_HELP_TEXT,
        })
    )
    
    # fields name
    Articles._meta.get_field('title').verbose_name        = 'Заголовок'
    Articles._meta.get_field('description').verbose_name  = 'Описание'
    Articles._meta.get_field('query').verbose_name        = 'Запрос'
    Articles._meta.get_field('category').verbose_name     = 'Категория'
    Articles._meta.get_field('text_content').verbose_name = 'Текст статьи'
    Articles._meta.get_field('top_image').verbose_name    = 'Обложка статьи'
    Articles._meta.get_field('date_created').verbose_name = 'Дата создания'
    Articles._meta.get_field('keywords').verbose_name     = 'Ключевые слова'
    
    def save_model(self, request, obj, form, change):
        if getattr(obj, 'author', None) is None:
            obj.author = request.user
        obj.save()
     
    def add_view(self, request, form_url='', extra_context=None):
        extra_context = {
            'title': 'Добавить новую статью'
        }
        
        return super().add_view(request, form_url, extra_context=extra_context)
    
    def change_view(self, request, object_id, form_url='', extra_context=None):
        extra = {
            'title': 'Отредактировать статью'
        }
        
        return super().change_view(request, object_id, form_url, extra_context=extra)
    
    # Columns
    @admin.display(ordering='id', description='#')
    def get_id(self, obj):
        objects = Articles.objects.all()
        index = 0
        
        for i, record in enumerate(objects):
            if record == obj:
                index = (i + 1)
        
        return index
    
    @admin.display(ordering='title', description='Заголовок')
    def get_title(self, obj):
        return obj.title
    
    @admin.display(ordering='description', description='Описание')
    def get_description(self, obj):
        return obj.description
    
    @admin.display(ordering='query', description='Запрос')
    def get_query(self, obj):
        return obj.query
    
    @admin.display(ordering='keywords', description='Ключевые слова')
    def get_keywords(self, obj):
        return obj.keywords
    
    @admin.display(ordering='category', description='Категория')
    def get_category(self, obj):
        return obj.category
    
    @admin.display(ordering='top_image', description='Обложка статьи')
    def get_image(self, obj):
        return mark_safe('<img src="/../%s" style="max-width:200px; max-height:200px" />' % (obj.top_image))
    
    @admin.display(ordering='text_content', description='Текст статьи')
    def get_content(self, obj):
        markdown_to_text = ''.join(BeautifulSoup(markdown(obj.text_content), features="lxml").findAll(text=True))
        
        if len(markdown_to_text) > 1000:
            return markdown_to_text[:1000] + '...'
        return markdown_to_text
    
    @admin.display(ordering='date_created', description='Дата создания')
    def get_date(self, obj):
        return obj.date_created
    
    @admin.display(ordering='completed', description='Уникализировано')
    def get_completed(self, obj):
        return obj.completed
    
    @admin.display(description='Язык статьи')
    def article_language(self, obj):
        return detect_language(obj.title)
    
@admin.register(SearchCreaditionals)
class SearchCreaditionalsAdmin(admin.ModelAdmin):
    # Form options
    list_display  = ('get_id', 'cse', 'api_key', 'email', 'password', 'get_count', 'get_limit')
    list_filter   = ('limit', 'email')
    search_fields = ['cse', 'api_key', 'email']
    ordering      = ['id']
    exclude       = ['num_requests']
    fieldsets     = (
        ('Данные для доступа в учетную запись', {
            'fields': ('email', 'password'),
        }),
        ('Реквизиты для API', {
            'fields': ('cse', 'api_key')
        })
    )
    
    def save_model(self, request, obj, form, change):
        if getattr(obj, 'limit_date', None) is None:
            obj.limit_date = date.fromisoformat('2000-01-01')
        obj.save()
    
    # Columns
    @admin.display(ordering='id', description='#')
    def get_id(self, obj):
        objects = SearchCreaditionals.objects.all()
        index = 0
        
        for i, record in enumerate(objects):
            if record == obj:
                index = (i + 1)
        
        return index
    
    @admin.display(ordering='get_count', description='Количество запросов за сегодня')
    def get_count(self, obj):        
        count = SearchCreaditionalsRequests.objects.filter(
            cse=obj.cse,
            date_created=datetime.today().strftime('%Y-%m-%d')
        )
        
        return str(len(count)) + ' запрос(-ов)'
    
    @admin.display(ordering='limit', description='Лимит на сегодня')
    def get_limit(self, obj):        
        return obj.limit
    
    get_limit.boolean = True