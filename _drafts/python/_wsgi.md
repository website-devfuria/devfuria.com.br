---
layout:      grid12-article
title:       WSGI Servindo páginas web (html)
description: 
---




    127.0.0.1   www.testando-wsgi.dev


    <VirtualHost *:80>
        ServerName www.testando-wsgi.dev

        WSGIDaemonProcess testando-wsgi threads=5
        WSGIScriptAlias / /home/projetos/wsgi.py

        <Directory /home/projetos/>
            WSGIProcessGroup testando-wsgi
            WSGIApplicationGroup %{GLOBAL}
            WSGIScriptReloading On
            Order deny,allow
            Allow from all
        </Directory>
    </VirtualHost>


def application(environ, start_response):
    status = '200 OK'
    output = 'Hello World!'

    response_headers = [('Content-type', 'text/plain'),
                        ('Content-Length', str(len(output)))]
    start_response(status, response_headers)

    return [output]



https://code.google.com/p/modwsgi/wiki/QuickConfigurationGuide



Referências
---

- [code.google.com - modwsgi](https://code.google.com/p/modwsgi/ "link-externo")
