---
layout:      materia
title:       Django e mysql
description: 
---

Você deve criar o banco de dados antes.

alterar... /mysite/settings.py

    DATABASES = {
        'default': {
            'ENGINE': 'django.db.backends.mysql',
            'NAME': 'mydatabase',
            'USER': 'mydatabaseuser',
            'PASSWORD': 'mypassword',
            'HOST': '127.0.0.1'
        }
    }


Valide os models (inclue o arquivo setings, uma vez que ele vai precisar para testar os models)

	python manage.py validate

Se passaram, sincronize com o DB.

	python manage.py syncdb
	
O comando acima irá criar as tabelas básicas para o Django funcionar e também perguntará se deseja criar a conta do 
"super usuário" (você poderá fazer isso outra hora).

Como teste final rode o servidor `python manage.py runserver`.




Error loading MySQLdb module: No module named MySQLdb
===

Se estiver criando um projeto __Django__ e configurando ele para trabalhar com
o __MySql__. Ao rodar o servidor com o comando `python manage.py runserver` e
receber a seguinte mensagem

        Error loading MySQLdb module: No module named MySQLdb

Tente instalar o pacote `MySQL-python` através do __PIP__, veja o comando:

	pip install MySQL-python

Um erro atrás do outro. No meu caso, a instalação reclamou do __mysql_config__.

        EnvironmentError: mysql_config not found

Corriga executando instalando o pacot __python-mysqldb__ pelo __apt-get__:

	apt-get install python-mysqldb

OK, aí tentei novamente instalar o __mysql_config__ `pip install MySQL-python` e... 
    
    Requirement already satisfied

Para fazer o teste final rode o servidor do Django `python manage.py runserver`.


