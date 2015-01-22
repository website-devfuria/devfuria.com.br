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

Em breve!




Configurando o Apache
---


    127.0.0.1   www.foo.local


```linux-config
<VirtualHost *:80>
    ServerName www.foo.local

    WSGIDaemonProcess testando-wsgi threads=5
    WSGIScriptAlias /wsgi-bin /pasta/de/projetos/foo/wsgi.py

    <Directory /pasta/de/projetos/foo/>
        WSGIProcessGroup testando-wsgi
        WSGIApplicationGroup %{GLOBAL}
        WSGIScriptReloading On
        Order deny,allow
        Allow from all
    </Directory>
</VirtualHost>
```

Você precisa habilitar o Virtual Host e reiniciar o Apache para que as alterações tenha efeito.

Infelizmente, a configuração pode não ser tão simples assim, veja as matérias abaixo para entender melhor o que você 
deve fazer para configurar corretamente.

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)


Exemplos de arquivo WSGI em Python
---

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
