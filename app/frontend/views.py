from ast import keyword
from calendar import c
from itertools import count
from unicodedata import category
from django.shortcuts import redirect, render
from rest_framework.response import Response
from rest_framework.views import APIView
from datetime import datetime
# from app.frontend.api import Api
from bs4 import BeautifulSoup
from markdown import markdown
import readtime
from django.db.models import Q
import random
from .models import Articles, Categories
# from .api import Api


# This is the view that you imported in the frontend/urls.py
def indexView(request, id=None, name=None, *args, **kwargs):
    if request.path == '/':
        title = 'Meranda | Articles'
        description = 'Meranda provides a collection of articles'
        keywords = 'articles, healthy, healthy'
        return render(request, "v1/index.html", {'title': title, 'description': description, 'keywords': keywords})
    elif request.path == '/search' or request.path == '/search/':
        title = 'Meranda | Search for ' + request.GET.get('q')
        description = 'Meranda provides a collection of articles'
        keywords = 'articles, healthy, healthy'
        return render(request, "v1/index.html", {'title': title, 'description': description, 'keywords': keywords})
    elif 'read' in request.path:
        article = Articles.objects.filter(
            id=id
        ).values()
        
        if len(article) > 0:
            title = 'Meranda | ' + article[0]['title']
            description = article[0]['description']
            keywords = article[0]['keywords']
            
        else:
            title = 'Meranda | Article was not found'
            
            description = ''
            keywords = ''
        return render(request, "v1/index.html", {'title': title, 'description': description, 'keywords': keywords})
    elif 'category' in request.path:
        category_name = Categories.objects.filter(
            id=id
        ).values()
        
        if len(category_name) > 0:
            title = 'Meranda | Article of ' + category_name[0]['name']
        else:
            title = 'Meranda | Category was not found'
            
        description = 'Meranda provides a collection of articles'
        keywords = 'articles, healthy, healthy'
        
        return render(request, "v1/index.html", {'title': title, 'description': description, 'keywords': keywords})
# api
class SearchApiView(APIView):
    def get(self, request, query=None, *args, **kwargs):
        if query is not None:
            articles = Articles.objects.all().filter(
                Q(text_content__contains=query) | Q(title__contains=query) | Q(description__contains=query) | Q(keywords__contains=query) | Q(text_content__contains=query.capitalize()) | Q(title__contains=query.capitalize()) | Q(description__contains=query.capitalize()) | Q(keywords__contains=query.capitalize())
            ).values()
            
            for article in articles:
                article['text_content'] = ''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True))
                article['category_name'] = Categories.objects.filter(
                    id=article['category_id']
                ).values()[0]['name']
                result = readtime.of_text(''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True)))
                article['readtime'] = result.seconds // 60
            
            articles_new_list = []
            articles = list(articles)
            
            for article in articles:
                category = article['category_id']
                category_ = Categories.objects.filter(id=category).values()[0]
                
                if category_['active'] == True:
                    articles_new_list.append(article)
                
            
            return Response({'results': {'articles': list(articles_new_list)}})
        else:
            articles = Articles.objects.all().values()
            
            for article in articles:
                article['text_content'] = ''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True))
                article['category_name'] = Categories.objects.filter(
                    id=article['category_id']
                ).values()[0]['name']
                result = readtime.of_text(''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True)))
                article['readtime'] = result.seconds // 60
                
            articles_new_list = []
            articles = list(articles)
            
            for article in articles:
                category = article['category_id']
                category_ = Categories.objects.filter(id=category).values()[0]
                
                if category_['active'] == True:
                    articles_new_list.append(article)
                
            return Response({'results': {'articles': list(articles_new_list)}})

class CategoryArticlesApiView(APIView):
    def get(self, request, id=None, *args, **kwargs):
        if id is not None:
            category = Categories.objects.filter(
                id=id
            ).values()
            articles = Articles.objects.filter(
                category=id
            ).all().values()
            
            for category_ in category:
                category_['articles'] = list(articles)
            
            for article in category_['articles']:
                article['text_content'] = ''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True))
                article['category_name'] = Categories.objects.filter(
                    id=article['category_id']
                ).values()[0]['name']
                result = readtime.of_text(''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True)))
                article['readtime'] = result.seconds // 60
            
            
            return Response({'category': list(category)[0]})

class CategoriesApiView(APIView):
    def get(self, request, *args, **kwargs):
        list_ = Categories.objects.filter(
            active=True,
        ).all().values()
        
        return Response({'categories': list(list_)})

class CategoriesFeedApiView(APIView):
    def get(self, request, count=3):
        categories = Categories.objects.filter(
            active=True,
        ).all().values()
        
        categories = list(categories)
        
        for category_ in categories:
            category_['articles'] = list(Articles.objects.filter(
                category=category_['id']
            ).values()[:count])
            
            for article in category_['articles']:
                article['text_content'] = ''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True))
                article['category_name'] = Categories.objects.filter(
                    id=article['category_id']
                ).values()[0]['name']
                result = readtime.of_text(''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True)))
                article['readtime'] = result.seconds // 60
        
        return Response({'categories': list(categories)})

class ArticlesPopularApiView(APIView):
    def get(self, request, count=None):
        if count is not None:
            article_data = Articles.objects.all().values()
            articles = []
            
            while len(articles) < count:
                random_ = random.choice(article_data)
                if random_ not in articles:
                    articles.append(random_)
                
            for article in articles:
                article['text_content'] = ''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True))
                article['category_name'] = Categories.objects.filter(
                    id=article['category_id']
                ).values()[0]['name']
                result = readtime.of_text(''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True)))
                article['readtime'] = result.seconds // 60
            
            return Response({'articles': list(articles)})

class ArticleApiView(APIView):
    def get(self, request, article_id=None):
        if article_id is not None:
            article_data = Articles.objects.filter(id=article_id).values()
            
            if len(article_data) == 1:
                article_data[0]['text_content'] = markdown(article_data[0]['text_content'])
                article_data[0]['category_name'] = Categories.objects.filter(
                    id=article_data[0]['category_id']
                ).values()[0]['name']
                result = readtime.of_text(''.join(BeautifulSoup(markdown(article_data[0]['text_content']), features="lxml").findAll(text=True)))
                article_data[0]['readtime'] = result.seconds // 60
            
                active = Categories.objects.filter(id=article_data[0]['category_id']).values()[0]['active']
                
                if active is not True:
                    article_data = []
                
                return Response({'data': list(article_data)})
            
            
            return Response({'status': 'error', 'message':'Article not found'})

class ArticlesApiView(APIView):
    def get(self, request, count=None):      
        active_categories = Categories.objects.filter(~Q(active=True)).values('id')
        categories_ = []
        article_ = []
        
        for cat_ in active_categories:
            categories_.append(cat_['id'])
        
        lst = Articles.objects.all().values()
        lst = list(lst)
        categories_ = list(categories_)
        
        for article in lst:
            article['text_content'] = ''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True))
            article['category_name'] = Categories.objects.filter(
                id=article['category_id']
            ).values()[0]['name']
            result = readtime.of_text(''.join(BeautifulSoup(markdown(article['text_content']), features="lxml").findAll(text=True)))
            article['readtime'] = result.seconds // 60
        
        for index, art in enumerate(lst):
            if int(art['category_id']) not in categories_:
                article_.append(art)
        
        if count is not None:
            article_ = article_[:count]
        
        return Response({'articles': list(article_)})
    
    def post(self, request, *args, **kwargs):
        post_new = Articles.objects.create(
            author_id = 1,
            title = request.data['title'],
            keywords = request.data['keywords'],
            id = 2,
            description = request.data['description'],
            query_id = 1,
            category_id = 1,
            top_image = '',
            text_content = request.data['content'],
            date_created = datetime.now()
        )
        
        return Response({'result': 'ok'})