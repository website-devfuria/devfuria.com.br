---
layout:      grid12-article
title:       WSGI Servindo páginas web (html)
description: 
---


Neste artigo vamos configurar o Apache para executarmos script Python utilizando o WSGI.

Não é necessário, mas seria bom se você entendesse bem o que é o [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/) e
tivesse experiência prévia sobre [como configurar Virtual Hosts no Apache](/misc/apache-virtual-host/).

O objetivo e acessarmos o endereço `www.foo.local/wsgi-bin` e  encontramos o resultado de nossos script em CGI na pasta
`/pasta/de/projetos/foo/wsgi-bin/`.



Instalando  o WSGI
---

Esta receita de instalação foi testada em um Linux Debian (whezzy)

Atualize seu sistema.

    apt-get update
    apt-get upgrade

Você precisará ter o [Apache devidamente instalado].

    apt-get install apache2

Antes de instalar o __mod_wsgi__, instale as ferramenteas de setup do Phyton.

    apt-get install python-setuptools

Agora, basta instalar o __mod_wsgi__.

    apt-get install libapache2-mod-wsgi


Configurando o Apache
---

Nossa estrutura de arquivos será parecida com a seguinte.

    /projetos/
        /foo/
            /cgi-bin/
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

Na pasta `/etc/apache2/sites-available` crie um arquivo denominado `foo.local` e insira o Virtual Host apresentado acima.

Terceiro, habilite o Virtual Host com o comando `a2ensite`:

```linux-config
# vá até a pasta `sites-available`
cd /etc/apache2/sites-available

# habilite o virtual host
a2ensite teste-wsgi
```
   
Quarto e último, reinicie o Apache para que as alterações tenha efeito.

Você precisa habilitar o Virtual Host e reiniciar o Apache para que as alterações tenha efeito.

Infelizmente, a configuração pode não ser tão simples assim, veja as matérias abaixo para entender melhor o que você 
deve fazer para configurar corretamente.

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)




Exemplo de arquivo WSGI em Python
---

Abaixo vemos um exemplo básico de script WSGI feito em Python.

Crie um arquivo denominado `primeiro-exemplo.py` na pasta `/pasta/de/projetos/foo/wsgi-bin/` e acesse a URL 
`www.foo.local/wsgi-bin/primeiro-exemplo.py`


```python
def application(environ, start_response):
    status = '200 OK'
    output = 'Hello World!'

    response_headers = [('Content-type', 'text/plain'),
                        ('Content-Length', str(len(output)))]
    start_response(status, response_headers)

    return [output]
```


Referências
---

- [code.google.com - modwsgi](https://code.google.com/p/modwsgi/ "link-externo")
