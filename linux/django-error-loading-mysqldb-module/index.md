---
title:       "Django, resolvendo o erro 'Error loading MySQLdb module: No module named MySQLdb'"
description: "Aprenda a resolve o erro 'Error loading MySQLdb module' no Django"
capitulo:    linux-artigos
ordem:
---

Este artigo demonstra como resolver o erro `Error loading MySQLdb module: No module named MySQLdb`. Importante destacar
a minha distribuição Linux: __Debian Wheezy__, logo essa receita é válida apenas para o Wheezy.

Quando experimentamos o Django 1.6 com Python 2.7 tudo funciona perfeitamente. Agora, quando queremos dar um salto para
Python 3x, as coisas podem se complicar um pouco. Este é o problema, o módulo __MySQLdb__ não foi devidamente migrado
para Python 3.

Estou no Django tentando rodar o servidor com o comando `python3 manage.py runserver`.

A mensagem de erro que eu recebo é:

    Error loading MySQLdb module: No module named MySQLdb



Reproduzindo o erro
---

Primeiro, instale o [pip](/linux/instalando-pip/).

    apt-get install python3-pip

Instale os pacotes abaixo...

    libpython3.2 python3-dev python3-pip python3-pkg-resources python3-setuptools python3.2-dev


Segundo, instale o Django 1.7.

    pip-3.2 install Django==1.7

Testando...

    python3 -c "import django; print(django.get_version())"
    1.7


Terceiro, experimente o Django.

    django-admin.py startproject mysite
    cd mysite

Alterei o arquivo `sttings.py`:

    DATABASES = {
        'default': {
            'ENGINE': 'django.db.backends.mysql',
            'NAME': 'mysite',
            'USER': 'root',
            'PASSWORD': '1234',
            'HOST': '127.0.0.1'
        }
    }

Ao executar `python3 manage.py runserver` recebo o erro:

    Error loading MySQLdb module: No module named MySQLdb

Se executo com python 2 (`python manage.py runserver`) ele funciona, quer dizer módulo MySQL-python já está instalado
só não está instalado para Python 3.

Como instalar para Python 3 ? A solução parece ser a resposta para essa pergunta, mas não é!

Veja a solução que eu encontrei...




Solução
---

1. Desinstalei o pip.
2. Desinstalei o python 3.
3. Reiniciei a máquina.
4. Instalei o python 3 via apt-get, logo em seguida o pip tb via apt-get.
5. Instalei o virtualenv  `pip install virtualenv`.
Criei e ativei um "projeto" (ambiente) com o virtualenv
6. Instalei o django através do pip `pip install Django==1.7`
7. Em outro terminal, como root, instalei o __pymysql__ `pip install pymysql`
8. Criei o projeto Django normalmente `django-admin.py startproject mysite`.
9. Alterei o arquivo `__init__.py` inclui as linhas:

    import pymysql
    pymysql.install_as_MySQLdb()

Dentro do virtualenv  está funcionando o runserver, syncdb e migrate.
Apenas o manage.py validate que retorna:

    System check identified no issues (0 silenced)

Comento isso porque fora do virtualenv, ao executar `python3 manage.py runserver` ele para na mesma mensagem.



Receitas que não funcionaram
---

### Instalar o python2-mysql-conector

Foi sugerido que eu instalasse os pacotes __python3-mysql.connector__ do link

https://packages.debian.org/search?keywords=python3-mysql.connector

Eu baixei tanto a versão testing com a unstable e nenhuma das duas consegui instalar.

1. fiz o downloading e dei permissão de execução
2. executei dpkg -i nome-do-pacote
3. apareceu am seguinte msg de erro:

     dpkg -i python3-mysql.connector_1.2.3-2_all.deb

    A seleccionar pacote anteriormente não seleccionado python3-mysql.connector.
    (Lendo banco de dados ... 181790 ficheiros e directórios actualmente instalados.)
    Desempacotando python3-mysql.connector (de python3-mysql.connector_1.2.3-2_all.deb) ...
    dpkg: problemas com dependências impedem a configuração de python3-mysql.connector:
     python3-mysql.connector depende de python3:any (>= 3.3.2-2~).

    dpkg: erro ao processar python3-mysql.connector (--install):
     problemas de dependência - deixando desconfigurado
    Erros foram encontrados durante o processamento de:
     python3-mysql.connector


### Instalar os driver do MySQL segundo a doc do Django


Na [documentação do Django](https://docs.djangoproject.com/en/1.7/ref/databases/#mysql-db-api-drivers) ele sugere 2 links:

- https://pypi.python.org/pypi/MySQL-python/1.2.4
- http://dev.mysql.com/downloads/connector/python

No segundo link eu baixei o pacote para Debian e tentei instalar.
Não obtive mensagem de erro, mas parece que não surtiu efeito algum.

    dpkg -i mysql-connector-python_1.2.3-1debian6.0_all.deb
    A seleccionar pacote anteriormente não seleccionado mysql-connector-python.
    (Lendo banco de dados ... 181790 ficheiros e directórios actualmente instalados.)
    Desempacotando mysql-connector-python (de mysql-connector-python_1.2.3-1debian6.0_all.deb) ...
    Configurando mysql-connector-python (1.2.3-1)

Obs: O pacote é para Debian 6, eu estou no Debian 7.



### Comandos que não surtiram efeito

Nenhum dos comandos abaixo surtiram efeito, porém eu separei em dois grupos:

Os que pelo menos rodaram...

    apt-get install python3-setuptools
    pip3 install pymysql3
    apt-get install python-dev libmysqlclient-dev
    pip3 install --user https://dev.mysql.com/get/Downloads/Connector-Python/mysql-connector-python-1.1.6.tar.gz
    pip install mysqlclient  // sem pip3


E os que nem sequer rodaram...

    pip3 install mysqlclient
    pip3.3 install --user https://github.com/davispuh/MySQL-for-Python-3/archive/1.0.tar.gz
    apt-get install python-configparser



### Instalar o  PyMySQL


Fui aconselhado a instalar o PyMySQL, segui as instruções do repo https://github.com/PyMySQL/PyMySQL

Tentei as versões: `0.5`, `0.6` e por último `0.6.2`, o erro eu apresento abaixo:

    Processing PyMySQL-0.6.2-py3.2.egg
    creating /usr/local/lib/python3.2/dist-packages/PyMySQL-0.6.2-py3.2.egg
    Extracting PyMySQL-0.6.2-py3.2.egg to /usr/local/lib/python3.2/dist-packages
      File "/usr/local/lib/python3.2/dist-packages/PyMySQL-0.6.2-py3.2.egg/pymysql/tests/test_issues.py", line 113
        c.execute("insert into issue15 (t) values (%s)", (u'\xe4\xf6\xfc',))
                                                                        ^
    SyntaxError: invalid syntax

      File "/usr/local/lib/python3.2/dist-packages/PyMySQL-0.6.2-py3.2.egg/pymysql/tests/test_basic.py", line 21
        v = (True, -3, 123456789012, 5.7, "hello'\" world", u"Espa\xc3\xb1ol", "binary\x00data".encode(conn.charset), datetime.date(1988,2,2), datetime.datetime.now(), datetime.timedelta(5,6), datetime.time(16,32), time.localtime())
                                                                            ^
    SyntaxError: invalid syntax

    Removing PyMySQL 0.6 from easy-install.pth file
    Adding PyMySQL 0.6.2 to easy-install.pth file

    Installed /usr/local/lib/python3.2/dist-packages/PyMySQL-0.6.2-py3.2.egg
    Processing dependencies for PyMySQL==0.6.2
    Finished processing dependencies for PyMySQL==0.6.2


### Instalar o drive MySQLdb do repo farcepest

Além de arriscado não deu certo...


Clone o repositório https://github.com/farcepest/MySQLdb1 mas não o __master__ e sim o branch __MySQLdb-1.3__.

    cd MySQL-python-XXXXX
    python3 setup.py build
    python3 setup.py install

Comigo parou no __build__, deu o erro:

      File "/tmp/MySQLdb1/setup_posix.py", line 2, in <module>
        from ConfigParser import SafeConfigParser
    ImportError: No module named ConfigParser

OK, entrei no arquivo `setup_posix.py` na linha 2 e troquei `from ConfigParser` para `from configparser`.

Executei novamente...

    python3 setup.py build
    python3 setup.py install

Tudo OK, 1/2 caminho andado.

Agora, `python3 manage.py validate` funciona, mas `python3 manage.py runserver` reclama do modulo __six__:

        from six import configparser
    ImportError: cannot import name configparser

Beleza! Queria instalar o __six__ através do __easy_install__, mas eu não tinha o easy_install, tive que instalá-lo primeiro (`wget https://bootstrap.pypa.io/ez_setup.py -O - | python3`).

Com o easy_instalado tentei `easy_install six`. Legal, instalou o six!

Corri para tentar o `python3 manage.py runserver` mas agora o erro é outro:

      File "/usr/local/lib/python3.2/dist-packages/MySQL_python-1.3.0a1-py3.2-linux-x86_64.egg/MySQLdb/connections.py", line 235, in __init__
        self.encoders[types.StringType] = string_literal
    AttributeError: 'module' object has no attribute 'StringType'






Agradecimentos
---

Agradeço a pessoal do grupo [Google - Django Brasil](https://groups.google.com/forum/#!msg/django-brasil/Z8GqDpOVWh4/nuTV-p6Wo3IJ) pela ajuda, leia o tópico.

