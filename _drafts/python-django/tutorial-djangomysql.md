

alterar... /mysite/settings.py

    DATABASES = {
        'default': {
            'ENGINE': 'django.db.backends.postgresql_psycopg2',
            'NAME': 'mydatabase',
            'USER': 'mydatabaseuser',
            'PASSWORD': 'mypassword',
            'HOST': '127.0.0.1'
        }
    }

    python manage.py runserver

        Error loading MySQLdb module: No module named MySQLdb

    pip install MySQL-python

        EnvironmentError: mysql_config not found

    apt-get install python-mysqldb

    pip install MySQL-python (já não é mais necessário)

        Requirement already satisfied

    python manage.py runserver ( só para testar)
