# Let's create your own ArticleGenerator site with unique posts and manage them(Django + React.JS)
*This project was created with Django, Google API and SpinRewriter Api. That project provides you to scrap aricles from sites via Google Search, provides you tranlate them and make unique by SpinRewriter.*

### ♻️ Create new environment folder and activate it
``` $ python3 -m venv environment && source environment/bin/activate ```

After that install all dependencies
``` $ pip install -r requirements.txt ```

## 🌱 Installation
1. Firstly you must edit app settings and database setting in *app/app/settings.py*

```
  DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'database_name',
        'USER': 'database_username',
        'PASSWORD': 'your_password',
        'HOST': 'database_hostname',
        'PORT': '3306',
    }
  }
```

- set databse host
- set databse username
- set database password
- set database name

After making changes run next command:
```
  $ cd app && python manage.py migrate
  $ python manage.py makemigrations frontend
  $ python manage.py migrate frontend
```
2. Next we need to create admin-user with next command:

``` $ python manage.py createsuperuser ```

- set email or username
- set password

## 🚀 There's we go!
``` python manage.py runserver ```

> open browser by default: localhost:8000

## Enjoy :)
