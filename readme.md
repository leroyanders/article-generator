# Python article crawler and React Blog Generator.
*This project was created with Django, Google API and SpinRewriter Api. Provides you to crawle aricles via Google Search API, tranlate them and unique by SpinRewriter.*

# Create new environment folder and activate it
``` 
$ python3 -m venv <name> && source <name>/bin/activate 
```

After that install all dependencies
``` 
$ pip install -r requirements.txt 
```

# Installation
1. Firstly you must edit app settings and database setting in *app/app/settings.py*

```python
  DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': '<database_name>',
        'USER': '<database_username>',
        'PASSWORD': '<your_password>',
        'HOST': '<database_hostname>',
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

``` 
$ python manage.py createsuperuser 
```

- set email or username
- set password


3. Manage React template:

Go to template folder 
``` 
$ cd ./frontend 
```
Run command below:
``` 
$ yarn install 
```

# Run application
> Make sure you in main folder and run:

``` 
$ python manage.py runserver 
```

> open browser by default: localhost:8000
