from itertools import count
from re import S
from urllib import request
from django.contrib import admin
from django.urls import path, include
from django.conf.urls import include
from django.conf import settings
from django.conf.urls.static import static
from django.contrib.auth.models import User
from rest_framework import routers, serializers, viewsets
from frontend.views import CategoriesApiView, CategoriesFeedApiView, ArticleApiView, ArticlesPopularApiView, CategoryArticlesApiView, SearchApiView
from frontend.views import ArticlesApiView


# admin settings
admin.site.site_header = "Meranda Parser"
admin.site.site_title = "Meranda Parser"
admin.site.index_title = "Добро пожаловать в настройки парсера"

urlpatterns = [
    # template
    path('', include('frontend.routes')),
    path('read/<int:id>/', include('frontend.routes')),
    path('category/<int:id>/', include('frontend.routes')),
    path('category/<str:name>/', include('frontend.routes')),
    path('search/', include('frontend.routes')),
    path('', include('frontend.routes')),
    path('read/<int:id>', include('frontend.routes')),
    path('category/<int:id>', include('frontend.routes')),
    path('category/<str:name>', include('frontend.routes')),
    path('search', include('frontend.routes')),
    
    # admin
    path('app/', include('frontend.routes')),
    path('grappelli/', include('grappelli.urls')), # grappelli URLS
    path('cp/', admin.site.urls),
    path('cp', admin.site.urls),
    path('mdeditor/', include('mdeditor.urls')),
    
    # api
    path('api-auth/', include('rest_framework.urls', namespace='rest_framework')),
    path('api/v1/articles/', ArticlesApiView.as_view()),
    path('api/v1/articles/<int:count>/', ArticlesApiView.as_view()),
    path('api/v1/article/<int:article_id>/', ArticleApiView.as_view()),
    path('api/v1/articles/popular/<int:count>/', ArticlesPopularApiView.as_view()),
    path('api/v1/categories/', CategoriesApiView.as_view()),
    path('api/v1/articles/feed/<int:count>/', CategoriesFeedApiView.as_view()),
    path('api/v1/category/<int:id>/', CategoryArticlesApiView.as_view()),
    path('api/v1/search/', SearchApiView.as_view()),
    path('api/v1/search/<str:query>/', SearchApiView.as_view()),
    
    path('api/v1/articles', ArticlesApiView.as_view()),
    path('api/v1/articles/<int:count>', ArticlesApiView.as_view()),
    path('api/v1/article/<int:article_id>', ArticleApiView.as_view()),
    path('api/v1/articles/popular/<int:count>', ArticlesPopularApiView.as_view()),
    path('api/v1/categories', CategoriesApiView.as_view()),
    path('api/v1/articles/feed/<int:count>', CategoriesFeedApiView.as_view()),
    path('api/v1/category/<int:id>', CategoryArticlesApiView.as_view()),
    path('api/v1/search', SearchApiView.as_view()),
    path('api/v1/search/<str:query>', SearchApiView.as_view()),
]

urlpatterns += static(settings.UPLOAD_URL, document_root=settings.UPLOAD_ROOT)