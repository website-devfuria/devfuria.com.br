---
title:        Python, servindo páginas HTML com CGI
description:  Neste artigo escreveremos alguns scripts CGI em Ptyhon e veremos eles funcionando, através do navegador, como páginas HTML
---

__Como gerar páginas web com Python ?__ é uma das primeiras perguntas que fazemos quando iniciamos os estudos em Python.

Para que páginas web sejam servidas por scripts Python devemos ter o servidor web devidamente configurado e também 
precisaremos entender os diferentes protocolos que fazem a ponte entre os scrips Python e o Servidor Web. Pois, sozinho,
o servidor não saberá como fazer a ligação entre a requisição e a linguagem Python.

Neste artigo escreveremos alguns __scripts CGI em Ptyhon e veremos eles funcionando através do navegador__, utilizaremos o 
Apache como servidor web. Mostrarei como fazer a configuração do Apache, mas o ideal é que você saiba o que é o __arquivo /etc/hosts__ e também 
o que é como configurar uma __Virtual Host__. Outra coisa, meu sistema operacional é o Debian (Wheezy), se você estiver 
em um Linux da família HedHat, terá que adequar as configurações.

Neste exemplo, nosso objetivo será acessar o endereço `www.foo.local/cgi-bin` e  encontrar o resultado de nossos scripts
 CGI na pasta `/pasta/de/projetos/foo/cgi-bin/`.



Configurando o Apache
---

Organizando o raciocínio, nosso objetivo compreende:

- acessar `www.foo.local/cgi-bin` e
- executar os scripts da pasta `/pasta/de/projetos/foo/cgi-bin/`.

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

Na pasta `/etc/apache2/sites-available` crie um arquivo denominado `foo.local` e insira o Virtual Host apresentado acima.

Terceiro, habilite o Virtual Host com o comando `a2ensite`:

```linux-config
#
# Vá até a pasta `sites-available`
#
cd /etc/apache2/sites-available

#
# habilite o virtual host
#
a2ensite teste-wsgi
```
   
Quarto e último, reinicie o Apache para que as alterações tenha efeito.

Infelizmente, a configuração pode não ser tão simples assim. Se precisar de mais detalhes, veja as matérias abaixo para 
entender melhor o que você deve fazer para configurar o Apache corretamente.

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)
- [CGI Servindo páginas web (html)](/misc/cgi-common-gateway-interface/)



Exemplos de arquivos CGI em Python
---

Abaixo vemos um (primeiro) exemplo básico de script CGI feito em Python.

Crie um arquivo denominado `primeiro-exemplo.py` na pasta `/pasta/de/projetos/foo/cgi-bin/` e acesse a URL `www.foo.local/cgi-bin/primeiro-exemplo.py`

```python
#!/usr/bin/python

print 'Content-type: text/html'
print
print '<html>'
print '<head><title>CGI - python</title></head>'
print '<body><h1>CGI - python</h1>Seu CGI esta funcionando</body>'
print '</html>'
```

O (segundo) exemplo seguinte utiliza o módulo __CGIHandler__.

Crie um arquivo denominado `segundo-exemplo.py` na pasta `/pasta/de/projetos/foo/cgi-bin/` e acesse a URL 
`www.foo.local/cgi-bin/segundo-exemplo.py`

```python
#!/usr/bin/python
from wsgiref.handlers import CGIHandler

def app(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    return ['Hello World!\n']

CGIHandler().run(app)
```



Veja Também
---

Na seção Python (atual):

- [Python, servindo páginas HTML com WSGI](/python/servindo-paginas-html-com-wsgi/)

Na seção [Miscellaneous](/misc/):

- [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/)
- [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/)
- [CGI Servindo páginas web (html)](/misc/cgi-common-gateway-interface/)
