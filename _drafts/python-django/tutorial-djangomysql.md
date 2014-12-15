---
layout:      grid12-article
title:       Django e mysql
description: 
---

Você deve criar o banco de dados antes.

Altere o arquivo  `/mysite/settings.py` de...

    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': 'mydatabase',
    }

Para:

    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'nome-da-database',
        'USER': 'root',
        'PASSWORD': 'senha-do-root',
        'HOST': '127.0.0.1',
    }

Valide os models (inclua o arquivo setings, uma vez que ele vai precisar para testar os models)

	python manage.py validate

Neste momento pode ser que dê um erro "No module named MySQLdb", veja no final deste artigo como resolvê-lo.

Se passaram, sincronize com o DB.

	python manage.py syncdb
	
O comando acima irá criar as tabelas básicas para o Django funcionar e também perguntará se deseja criar a conta do 
"super usuário" (você poderá fazer isso outra hora).

Como teste final rode o servidor `python manage.py runserver`.




Error loading MySQLdb module: No module named MySQLdb
---

Se estiver criando um projeto __Django__ e configurando ele para trabalhar com o __MySql__. Ao rodar o servidor com o
comando `python manage.py runserver` e receber a seguinte mensagem:

        Error loading MySQLdb module: No module named MySQLdb

Você deve seguir este artigo [Resolvendo Error loading MySQLdb module: No module named MySQLdb]()


