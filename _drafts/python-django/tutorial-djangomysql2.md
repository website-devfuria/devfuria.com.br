---
layout: grid12-article
title: DJANGO
---

Debian

    apt-get install python-mysqldb

HedHat

    yum install MySQL-python

http://stackoverflow.com/questions/2952187/getting-error-loading-mysqldb-module-no-module-named-mysqldb-have-tried-pre





http://stackoverflow.com/questions/12684357/python-manage-py-syncdb-not-working-correctly

CREATE DATABASE database_name;

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql', 
        'NAME': 'Database_name',                 
        'USER': 'root',                    
        'PASSWORD': 'root',                
        'HOST': '',                     
        'PORT': '3306',                  
    }
}