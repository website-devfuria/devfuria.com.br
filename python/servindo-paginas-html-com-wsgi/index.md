---
title:       Python, servindo páginas HTML com WSGI
description: Neste artigo veremos como executar script Python utilizando o WSGI.
---

Este artigo é um primeiro passo para quem quer testar e experimentar a especificação WSGI. Indicado para quem está querendo
entender como servir páginas HTML com Python. 

Iremos configurar o Apache para executarmos script Python utilizando o WSGI. Não é necessário, mas seria bom se você 
entendesse bem o que é o [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/) e tivesse experiência prévia sobre 
[como configurar Virtual Hosts no Apache](/misc/apache-virtual-host/).

O objetivo e acessarmos o endereço `www.foo.local/wsgi-bin` e  encontramos o resultado de nossos script em CGI na pasta
`/pasta/de/projetos/foo/wsgi-bin/`.


### O que é WSGI ?

WSGI é um acrônimo para __Web Server Gateway Interface__, trata-se de uma forma para servidores conversarem com frameworks,
e vice-versa.

!["wsgi"](diagrama-wsgi-servidor.png "wsgi")

### O que o WSGI NÂO é...

Não é mais um framework web em Python, nem é uma especificação enorme e assustadora que deve ser evitada a todo custo.

- - -
Fontes

- [slideshare.net/wsgi](http://www.slideshare.net/hdiogenes/wsgi-a-resposta-para-a-questo-definitiva-sobre-python-a-web-e-tudo-mais-368429 "link-externo")
- [code.google.com - modwsgi](https://code.google.com/p/modwsgi/ "link-externo")
- [wsgi.org/](http://wsgi.readthedocs.org/en/latest/ "link-externo")
- [PEP 333 (Python Enhancement proposal #333)](https://www.python.org/dev/peps/pep-0333/ "link-externo")



Instalando  o WSGI
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



Configurando o Apache
---

Nossa estrutura de arquivos será parecida com a seguinte.

    /projetos/
        /foo/
            /wsgi-bin/
                index.py

OK, primeiro, precisamos incluir a seguinte linha no arquivo `/etc/hots`:

    127.0.0.1 www.foo.local

Segundo, criaremos o seguinte Virtual Host:

```linux-config
<VirtualHost *:80>
    ServerName www.foo.local
    DocumentRoot /home/flavio/projetos/foo

    WSGIDaemonProcess testando-wsgi threads=5
    WSGIScriptAlias /wsgi-bin /home/flavio/projetos/foo/wsgi-bin/

    <Directory /home/flavio/projetos/foo>
        WSGIProcessGroup testando-wsgi
        WSGIApplicationGroup %{GLOBAL}
        WSGIScriptReloading On
        Order deny,allow
        Allow from all
    </Directory>
</VirtualHost>

```

Como dito, eu estou utilizando o Debian (whezzy) como sistema, se você estiver na família HedHat terá que adequar as 
configurações para sua distro.

Continuando, na pasta `/etc/apache2/sites-available` crie um arquivo denominado `foo.local` e insira o Virtual Host 
apresentado acima.

Terceiro, habilite o Virtual Host com o comando `a2ensite`:

```linux-config
#
# vá até a pasta `sites-available`
#
cd /etc/apache2/sites-available

#
# habilite o virtual host
#
a2ensite teste-wsgi
```
   
Quarto e último, reinicie o Apache para que as alterações tenha efeito (`service apache2 reload`).

Infelizmente, a configuração pode não ser tão simples assim, veja as matérias abaixo para entender, de forma detalhada,
o que você deve fazer para configurar corretamente o servidor web.

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)





Exemplos de arquivos WSGI escritos em Python
---

### Primeiro exemplo


Vamos começar com um exemplo bem simples.

```python
#!/usr/bin/python

print "Content-Type: text/plain"
print
print "hello world."
```

Crie um arquivo denominado `primeiro-exemplo.py` na pasta `/pasta/de/projetos/foo/wsgi-bin/` e acesse a URL 
`www.foo.local/wsgi-bin/primeiro-exemplo.py`. Porém, antes de testar no navegador, experimente executar o script no 
terminal `python primeiro-exemplo.py`

Se, no navegador, você se deparar com o erro __"Internal Server Error"__, experimente ver os logs do Apache executando
um dos comandos abaixo.

```linux-config
#
# família HedHat:
#
tail /var/log/httpd/error_log

#
# família Debian:
#
tail /var/log/apache2/error.log
```


### Segundo exemplo

Abaixo, vemos um segundo exemplo igualmente simples de script WSGI escrito em Python.

```python
def application(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    return ['Hello World!']
```

Crie um arquivo denominado `segundo-exemplo.py` na pasta `/pasta/de/projetos/foo/wsgi-bin/` e acesse a URL 
`www.foo.local/wsgi-bin/segundo-exemplo.py`.


### Terceiro exemplo

Aqui temos o terceiro exemplo de script WSGI escrito em Python.

Fizemos poucas alterações em relação ao segundo exemplo.

```python
def application(environ, start_response):
    status = '200 OK'
    output = 'Hello World!'

    response_headers = [('Content-type', 'text/plain'),
                        ('Content-Length', str(len(output)))]
    start_response(status, response_headers)

    return [output]
```

Crie um arquivo denominado `terceiro-exemplo.py` na pasta `/pasta/de/projetos/foo/wsgi-bin/` e acesse a URL 
`www.foo.local/wsgi-bin/terceiro-exemplo.py`.




Veja Também
---

Na seção Python (atual):

- [Python, servindo páginas HTML com CGI](/python/servindo-paginas-html-com-cgi/)

Na seção [Miscellaneous](/misc/):

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)
- [CGI Servindo páginas web (html)](/misc/cgi-common-gateway-interface/)
