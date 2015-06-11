---
layout:      grid12-article
title:       "DJANGO - Error loading MySQLdb module: No module named MySQLdb"
description: 
---


Se estiver criando um projeto __Django__ e configurando ele para trabalhar com o __MySql__. Ao rodar o servidor com o
comando `python manage.py runserver` e receber a seguinte mensagem:

        Error loading MySQLdb module: No module named MySQLdb

A primeira questão a ser resolvida é: qual versão de Python e Django você está utilizando?

- Django __1.6__ pode ser utilizado com __Python 2__
- Django __1.7__ deve ser utilizado com __Python 3__

A solução depende da versão.


Resolvendo "No module named MySQLdb" com Python 2
---

No Debian execute...

    apt-get install python-mysqldb

No CentOS (HedHat) execute...

    yum install MySQL-python

Para fazer o teste final rode o servidor do Django `python manage.py runserver`.


### Nota:

Tentei instalar o pacote `MySQL-python` através do __PIP__, veja o comando:

	pip install MySQL-python

Foi um  show de erros. No meu caso, a instalação reclamou do __mysql_config__.

        EnvironmentError: mysql_config not found

Corrigi executando instalando o pacote __python-mysqldb__ pelo __apt-get__ (como já mencionado na receita acima):

	apt-get install python-mysqldb

OK, aí tentei novamente instalar o __mysql_config__ `pip install MySQL-python` e... 
    
    Requirement already satisfied

Eu hein, vai entender!!!N




Resolvendo "No module named MySQLdb" com Python 3
---

Aqui é que mora o problema, pois eu acabei resolvendo com a ajuda do [virtualenv](), mas talvez você queira resolver
sem a ajuda dele. Se for o caso,  aconselho a tentar dessa forma (sem o __virtualenv__) e caso não consiga, tentar
com o __virtualenv__.


Você deve instalar o __PyMySQL__ com o __pip__ só que o __pip__ deve ser o da versão 3x.

Em outras palavras, o __pip__ deve ter sido instalado cpm __Python 3__ e agora ele deve apontar para o Python 3, caso 
contrário você não conseguirá resolver o problema.

Para descobrir as versões do __pip__ execute `ls -l /usr/local/bin/pip*`

Com os resultados obtidos experimente

    pip --version
    pip3 --version
    pip3.2 --version
    pip3.4 --version

No meu caso, digitnado `pip3.2 --version` eu visualizo...

    pip 1.5.6 from /usr/local/lib/python3.2/dist-packages (python 3.2)

Logo, eu tenho certeza de que `pip3.2` (no meu caso) está funcionado com __Python 3__.


Pronto, agora é só instalar o driver:

    pip3x install pymysql


Inclua no arquivo `mysite/mysite/__init__.py` as linhas abaixo:

    import pymysql
    pymysql.install_as_MySQLdb()


Para testar, tente iniciar o servidor `python manage.py runserver`.