from rest_framework import serializers
from .models import Articles

class Api(serializers.ModelSerializer):
    class Meta:
        model = Articles
        fields = ('id', 'title', 'description', 'keywords', 'text_content', 'top_image', 'author', 'category_id', 'query_id')
        
        