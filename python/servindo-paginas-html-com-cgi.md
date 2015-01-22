---
layout:       grid12-article
title:        Python, servindo páginas HTML com CGI
description:  
---

Gerar páginas web com Python é uma das primeiras perguntas que fazemos quando iniciamos os estudos em Python.

Para que páginas web sejam servidas por scripts Python devemos ter o servidor web devidamente configurado e também 
precisaremos entender os diferentes protocolos que fazem a ponte entre os scrips Python e o servidor we. Pois, o servidor
web, sozinho, não saberá como fazer a ligação entre a requisição e a linguagem Python.

Neste artigo utilizaremos o Apache como servidor web e vamos cobrir o protocolo CGI.

Mostrarei como fazer a configuração do Apache, mas o ideal é que você saiba o que é o __arquivo /etc/hosts__ e também 
o que é como configurar uma __Virtual Host__.

O objetivo e acessarmos o endereço `www.foo.local/cgi-bin` e  encontramos o resultado de nossos script em CGI na pasta
`/pasta/de/projetos/foo/cgi-bin/`.


Configurando o Apache
---

Organizando o raciocínio, nosso objeto compreende:

- acessar no navegador `www.foo.local/cgi-bin` e
- encontramos o resultado de nossos script em CGI na pasta `/pasta/de/projetos/foo/cgi-bin/`.

Vamos incluir a seguinte linha no arquivo `/etc/hots`:

    127.0.0.1 www.foo.local

Vamos criar o seguinte Virtual Host:

```linux-config
<VirtualHost *:80>
    ServerName www.foo.local
    DocumentRoot /pasta/de/projetos/foo

    ScriptAlias /cgi-bin /pasta/de/projetos/foo/cgi-bin/
    <Directory "/pasta/de/projetos/foo/cgi-bin">
        AllowOverride None
        Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
        AddHandler cgi-script .pl .py .bin .sh
        Order allow,deny
        Allow from all
    </Directory>
 
</VirtualHost>
```

Você precisa habilitar o Virtual Host e reiniciar o Apche para que as alterações tenha efeito.

Infelizmente, a configuração pode não ser tão simples assim, veja as matérias abaixo para entender melhor o que você 
deve fazer para configurar corretamente.

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)
- [CGI Servindo páginas web (html)](/misc/cgi-common-gateway-interface/)



Exemplos de arquivos CGI em Python
---

Abaixo vemos um exemplo básico de script CGI feito em Python.

```python
#!/usr/bin/python

print 'Content-type: text/html'
print
print '<html>'
print '<head><title>CGI - python</title></head>'
print '<body><h1>CGI - python</h1>Seu CGI esta funcionando</body>'
print '</html>'
```

O exemplo a seguit utiliza o módulo __CGIHandler__.

```python
#!/usr/bin/python
from wsgiref.handlers import CGIHandler

def app(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    return ['Hello World!\n']

CGIHandler().run(app)
```
