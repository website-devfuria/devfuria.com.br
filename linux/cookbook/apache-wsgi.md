---
layout:      grid12-article
title:       Instalando o módulo WSGI 
description: Aprenda como instalar o módulo WSGI para servir páginas em HTML
---

### O que é WSGI ?

WSGI é um acrônimo para __Web Server Gateway Interface__, trata-se de uma forma para servidores conversarem com frameworks,
e vice-versa.

Leia mais em ...

- [code.google.com - modwsgi](https://code.google.com/p/modwsgi/ "link-externo")
- [wsgi.org/](http://wsgi.readthedocs.org/en/latest/ "link-externo")
- [PEP 333 (Python Enhancement proposal #333)](https://www.python.org/dev/peps/pep-0333/ "link-externo")



Instalando o WSGI no Debian (whezzy)
---

Esta receita de instalação foi testada em um Linux Debian (whezzy).

Primeiro vamos atualizar seu sistema.

    apt-get update
    apt-get upgrade

Você precisará ter o [Apache devidamente instalado](/linux/cookbook/apache-via-yum-apt-get/), mas caso queira fazer isso 
rapidamente, execute o comando abaixo.

    apt-get install apache2

Antes de instalar o __mod_wsgi__, instale a [biblioteca de desenvolvimento do Phyton](https://pythonhosted.org/setuptools/ "link-externo")
com o comando abaixo.

    apt-get install python-setuptools

Agora, basta instalar o __mod_wsgi__.

    apt-get install libapache2-mod-wsgi



Leia também
---

Se você quiser experimentar o WSGI com [Python](/python/) leia a matéria abaixo.

- [Python, servindo páginas HTML com WSGI](/python/servindo-paginas-html-com-wsgi/)

Antes de mexer como o WSGI talvez vocẽ queira entender melhor como criar e configurar Virutal Host no Apache, para tal
leia as matérias seguintes na seção [Miscellaneous](/misc/):

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)