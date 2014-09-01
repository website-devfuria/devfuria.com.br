---
layout:      materia
title:       Django tutorial parte 1
description: 
---


### Criando o projeto

Vá para sua pasta de "projetos" e crie um novo projeto Django digitando no terminal:

    django-admin.py startproject mysite

Entre no diretório /mysite (`cd /mysite`) e inicie o servidor para que você possa ver o resultado.

    python manage.py runserver

Pelo navegador web acesse  [http://127.0.0.1:8000/](http://127.0.0.1:8000/ "link-externo") ou
[http://localhost:8000/](http://localhost:8000/ "link-externo")

Você deve estar recebendo a seguinte mensagem __Congratulations on your first Django-powered page__.



### Configurando o DB

Edite o arquivo `mysite/settings.py`

    DATABASES = {
        'default': {
            'ENGINE': 'django.db.backends.sqlite3',
            'NAME': 'mydatabase',
        }
    }

Rode o comando `python manage.py syncdb` para sincronizar o banco de dados com a aplicação Django.

Ele irá criar as tabelas necessárias e aproveita para instalar o usuário "super":

    You just installed Django's auth system, which means you don't have any superusers defined.
    Would you like to create one now? (yes/no):

Se você responder que sim, anote os dados pois precisaremos dele lá na frente.



### Criando o módulo Polls

Iremos criar um módulo chamado __Polls__, dentro do diretório `/mysite` rode o comando `python manage.py startapp polls`.

Sua estrutura de pastas deve ser como abaixo.

    mysite/
        mysite/
        polls/



### Alterando o model do módulo Polls

Abra o arquivo `polls/models.py` e substitua o conteúdo por:

    from django.db import models

    class Poll(models.Model):
        question = models.CharField(max_length=200)
        pub_date = models.DateTimeField('date published')

    class Choice(models.Model):
        poll = models.ForeignKey(Poll)
        choice_text = models.CharField(max_length=200)
        votes = models.IntegerField(default=0)

Para ativar o model ainda é preciso editar o arquivo `mysite/mysite/settings.py`.

Procure pelo trecho abaixo e altere acrescentando o módulo Polls a variável `INSTALLED_APPS`.

    INSTALLED_APPS = (
        'django.contrib.admin',
        'django.contrib.auth',
        'django.contrib.contenttypes',
        'django.contrib.sessions',
        'django.contrib.messages',
        'django.contrib.staticfiles',
        'polls',
    )

Crie os comandos SQL relativo ao módulo executando `python manage.py sql polls`. Será exibido algo muito próximo disso:

    BEGIN;
    CREATE TABLE "polls_poll" (
        "id" integer NOT NULL PRIMARY KEY,
        "question" varchar(200) NOT NULL,
        "pub_date" datetime NOT NULL
    )
    ;
    CREATE TABLE "polls_choice" (
        "id" integer NOT NULL PRIMARY KEY,
        "poll_id" integer NOT NULL REFERENCES "polls_poll" ("id"),
        "choice_text" varchar(200) NOT NULL,
        "votes" integer NOT NULL
    )
    ;

    COMMIT;

Novamente precisaremos sincronizar o DB, execute `python manage.py syncdb`.

Agora chegou a hora de testar a shell interativa.

