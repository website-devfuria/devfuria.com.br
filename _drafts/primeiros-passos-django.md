---
layout:      materia
title:       Django
description: 
---



    django-admin.py startproject mysite

entre no diretório /mysite

    python manage.py runserver



    DATABASES = {
        'default': {
            'ENGINE': 'django.db.backends.sqlite3',
            'NAME': 'mydatabase',
        }
    }


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


    python manage.py syncdb


    You just installed Django's auth system, which means you don't have any superusers defined.
    Would you like to create one now? (yes/no):



alterar...   polls/models.py

    class Poll(models.Model):
        question = models.CharField(max_length=200)
        pub_date = models.DateTimeField('date published')

    class Choice(models.Model):
        poll = models.ForeignKey(Poll)
        choice = models.CharField(max_length=200)
        votes = models.IntegerField()


alterar... /mysite/settings.py

    INSTALLED_APPS = (
        'django.contrib.auth',
        'django.contrib.contenttypes',
        'django.contrib.sessions',
        'django.contrib.sites',
        'polls'
    )

    python manage.py sql polls


    BEGIN;
    CREATE TABLE `polls_poll` (
        `id` integer AUTO_INCREMENT NOT NULL PRIMARY KEY,
        `question` varchar(200) NOT NULL,
        `pub_date` datetime NOT NULL
    )
    ;
    CREATE TABLE `polls_choice` (
        `id` integer AUTO_INCREMENT NOT NULL PRIMARY KEY,
        `poll_id` integer NOT NULL,
        `choice` varchar(200) NOT NULL,
        `votes` integer NOT NULL
    )
    ;
    ALTER TABLE `polls_choice` ADD CONSTRAINT `poll_id_refs_id_3aa09835` FOREIGN KEY (`poll_id`) REFERENCES `polls_poll` (`id`);

    COMMIT;

    python manage.py syncdb


shell interativa 

    python manage.py shell