from cgitb import text
from tabnanny import verbose
from django.core.validators import MinValueValidator, MaxValueValidator
from django.db import models
from django.contrib.auth.models import User, Group
from django.conf import settings
from django.utils.html import mark_safe
from ckeditor.fields import RichTextField
from mdeditor.fields import MDTextField

class Categories(models.Model):
    name = models.CharField(default='', max_length=200)
    author = models.ForeignKey(User, on_delete=models.CASCADE, null=True, blank=True)
    id = models.AutoField(primary_key=True, db_column='id')
    date_created = models.DateTimeField(auto_now_add=True)
    active = models.BooleanField(default=True)
    
    def __str__(self):
        return self.name
    
    class Meta:
        verbose_name = "Категория"
        verbose_name_plural = "Категории"

class Queries(models.Model):
    WORLD = '*'
    LOCATIONS = [
        ('*', 'Все ГЕО'),
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
    STATUSES = [
        ('running', 'Running'),
        ('not_running', 'Not running'),
    ]
    LIMITS = [
        ('10', '10'),
        ('20', '20'),
        ('30', '30'),
        ('40', '40'),
        ('50', '50'),
        ('60', '60'),
        ('70', '70'),
        ('80', '80'),
        ('90', '90'),
        ('100', '100'),
    ]
    
    author = models.ForeignKey('auth.User', on_delete=models.CASCADE)
    text = models.CharField(default='', max_length=500)
    id = models.AutoField(primary_key=True, db_column='id')
    keys = models.TextField(default='')
    location = models.CharField(
        choices=LOCATIONS,
        default='*',
        max_length=100,
    )
    translate_to = models.CharField(
        choices=LANGUAGES,
        default='en',
        max_length=100,
    )
    category = models.ForeignKey(Categories, related_name='Add category to query+', blank=True, on_delete=models.CASCADE)
    date_created = models.DateTimeField(auto_now_add=True)
    status = models.CharField(
        choices=STATUSES,
        default='not_running',
        max_length=100,
    )
    limit = models.CharField(
        choices=LIMITS,
        default='10',
        max_length=100,
    )
    
    def __str__(self):
        return self.text
    
    class Meta:
        verbose_name = "Критерия для парсинга"
        verbose_name_plural = "Критерии для парсинга"
        
class Articles(models.Model):
    author = models.ForeignKey(User, on_delete=models.CASCADE)
    title = models.CharField(max_length=2000, default='')
    keywords = models.TextField(default='')
    id = models.AutoField(primary_key=True, db_column='id')
    description = models.TextField(default='')
    query = models.ForeignKey(Queries, related_name='Query', blank=True, on_delete=models.CASCADE)
    category = models.ForeignKey(Categories, related_name='Category', blank=True, on_delete=models.CASCADE)
    top_image = models.ImageField(upload_to='frontend/static/uploads', height_field=None, width_field=None, max_length=100, verbose_name='Article cover')
    text_content = MDTextField(blank=True, null=True)
    date_created = models.DateTimeField(auto_now_add=True)
    completed = models.BooleanField(default=False, verbose_name="Uniquied")
    
    def __str__(self):
        return self.title
    
    @property
    def get_category(self):
        return Categories.objects.filter(self=self.category)
    
    def image_tag(self):
        return mark_safe('<img src="/../%s" style="max-width:200px; max-height:200px" />' % (self.top_image))
    
    class Meta:
        verbose_name = "Статья"
        verbose_name_plural = "Статьи"

class SearchCreaditionalsRequests(models.Model):
    cse = models.TextField()
    date_created = models.DateField(auto_now_add=True)

class SearchCreaditionals(models.Model):
    email = models.EmailField(verbose_name='E-mail')
    password = models.CharField(verbose_name='Password', max_length=1000)
    cse = models.CharField(verbose_name='Google Search API(cse)', max_length=1000)
    api_key = models.CharField(verbose_name='Key', max_length=1000)
    limit = models.BooleanField(verbose_name='Limited', default=False)
    limit_date = models.TextField()
    
    def __str__(self):
        return self.email
    
    class Meta:
        verbose_name = "Google Search аккаунт"
        verbose_name_plural = "Google Search аккаунты"
