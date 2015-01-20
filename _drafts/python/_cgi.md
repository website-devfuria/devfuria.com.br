---
layout:       grid12-article
title:        Python, servindo páginas HTML com CGI
description:  
---









```python
#!/usr/bin/python

print 'Content-type: text/html'
print
print '<html>'
print '<head><title>CGI - python</title></head>'
print '<body><h1>CGI - python</h1>Seu CGI esta funcionando</body>'
print '</html>'
```



```python
#!/usr/bin/python
from wsgiref.handlers import CGIHandler

def app(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    return ['Hello World!\n']

CGIHandler().run(app)
```



http://klauslaube.com.br/2012/11/02/entendendo-o-cgi-fastcgi-e-wsgi.html
