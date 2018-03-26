---
title:       Python Flask Fazendo deploy com Apache
description: Aprendar a configurar o servidor Apache  com a aplicação Flask (Python)
capitulo:    python-flask
ordem:       2
---

Quando você construir uma aplicação em [Flask](/python/flask/), com certeza irá querer ver o resultado dela em um navegador.
Você pode fazer isso executando o servidor local do Flask, por exemplo:

    python myapp.py
    * Running on http://127.0.0.1:5000/

Mas você não pode, ou pelo menos não deveria, usar o servidor local para publicar sua aplicação. O correto é você integrar
o Flask a um servidor web ou a qualquer umas das opções que o framework nos permite. Esse processo de passar sua aplicação
do ambiente de desenvolvimento para o ambiente de produção é conhecido como __deploy__.

> Deployment ("implantação") é a fase do ciclo de vida de um software que corresponde à passagem do software para a produção.
>
> Fonte [wikipedia](http://pt.wikipedia.org/wiki/Implanta%C3%A7%C3%A3o_de_software "link-externo")

A [documentação do Flask](http://flask.pocoo.org/docs/0.10/deploying/#deployment "link-externo") nós dá algumas opções 
de deploy:

- mod_wsgi (Apache)
- Standalone WSGI Containers
- uWSGI
- FastCGI
- CGI

Neste artigo mostrarei como fazer o deploy do Flask com o Apache (utilizando o módulo __mod_wsgi__).

O exemplo consiste em definir uma URL para o projeto, por exemplo `www.flask-test.loc` e, após acessar a URL, ver o 
resultado "Hello World!". Você precisará ter o [módulo WSGI instalado](/linux/instalando-apache-wsgi/) além do próprio
[Apache](/linux/instalando-apache-via-yum-apt-get/).


A estrutura de arquivos
---

Vamos utilizar a  seguinte estrutura de arquivos.

    /projetos
        /flask-test
            myapp.py
            wsgi.py

Este exemplo se baseia no sistema Linux, logo, eu sugiro que o caminho `/projeto` seja na verdade algo parecido com isto:

    /home/seu-usuario/projetos
        /flask-test
            myapp.py
            wsgi.py

Por que? Porque  dessa forma você terá acesso indiscriminado a pasta de projetos, em outras palavras, se você realmente
colocar o exemplo na pasta `/projetos` você precisará ter acesso à ela como `root` ou dar permissões para seu usuário.
Você deve decidir onde colocar o exemplo deste tutorial.

Lembre-se de trocar o trecho `/seu-usuario/` por seu usuário de verdade.


Os arquivos
---

Nosso arquivo principal terá o mesmo conteúdo do exemplo "Hello World!" que eu demonstrei no artigo []() e que você
também encontra na documentação do Flask. A diferença é que agora o arquivo chama-se `myapp.py`.

```python
#
# Conteudo do arquivo `myapp.py`
#
from flask import Flask
app = Flask(__name__)

@app.route("/")
def hello():
    return "Hello World!"

if __name__ == "__main__":
    app.run()
```

Precisamos de um arquivo para fazer "a ligação", esse arquivo se chamará `wsgi.py` e seu conteúdo você confere logo
abaixo. Atente para o endereço após o trecho `sis.path.insert(0, `, ele deve apontar para a pasta de seu projeto.

```python
#
# Conteudo do arquivo `wsgi.py`
#
import sys

sys.path.insert(0, "/home/seu-usuario/projetos/flask-test")

from myapp import app as application
```

Lembre-se de testar os arquivos via terminal, comece pelo arquivo `myapp.py`, execute:

    python myapp.py

Se o arquivo estiver correto, ele acionará o servidor local do Flask e disponibilizará o endereço `http://127.0.0.1:5000/`.

Teste também o arquivo `wsgi.py`, execute:

    python wsgi.py

O terminal deve ficar em "silêncio", ou seja, não irá reclamar de nada.



Configurando o Virtual Host
---

Vamos colocar a mão no Apache, mas antes, vamos alterar o arquivo [hosts](/misc/arquivo-hosts/) para que ele faça o 
redirecionamento de `www.flask-test.loc` para o endereço `127.0.0.1`.

Acesse o arquivo hosts no endereço `/etc/hosts` e inclua o conteúdo abaixo.

    127.0.0.1 localhost
    127.0.0.1 www.flask-test.loc

Eu estou utilizando o exemplo `www.flask-test.loc`, mas você pode utilizar a URL que preferir. Apenas certifique-se de
replicá-la no arquivo de Virtual Host, falando nele...

Agora devemo criar um arquivo contendo as informações de nossa [Virtual Host](/misc/apache-virtual-host/).

Este exemplo é válido para o sistema __Debian__ e você terá que fazer as devidas adaptações para o sistema da famíla HedHat.

Na pasta `/etc/apache2/sites-available` crie um arquivo de texto simples denominado `flask` e insira o seguinte conteúdo.

```linux-config
<VirtualHost *:80>
    ServerName www.flask-test.loc

    WSGIDaemonProcess flaskTest threads=5
    WSGIScriptAlias / /home/seu-usuario/projetos/flask-test/wsgi.py

    <Directory /home/seu-usuario/projetos/flask-test/>
        WSGIProcessGroup flaskTest
        WSGIApplicationGroup %{GLOBAL}
        WSGIScriptReloading On
        Order deny,allow
        Allow from all
    </Directory>
</VirtualHost>
```

Cada arquivo na pasta acima mencionada refere-se a um Virtual Host, porém ainda não estão disponíveis. Para habilitar um 
Virtual Host siga os passos abaixo.

```linux-config
#
# Vá até a pasta `sites-available`
#
cd /etc/apache2/sites-available

#
# Habilite o Virtual Host recém criado
#
a2ensite flask

#
# Reinicie o Apache
#
service apache2 reload
```
    

Testando
---

Agora é hora de ver tudo funcionado.

Acesse o endereço `http://www.flask-test.loc/` segundo o nosso exemplo ou o endereço que você definiu e veja o
resultado esperado:

    Hello World!

Neste momento é comum aparecer o erro __"Internal Server Error"__, para solucionar o problema você deve tentar entender 
melhor o que está acontecendo, para isso veja o arquivo de log do Apache.


    tail /var/log/apache2/error.log

O comando acima deve lhe trazer mais informações sobre o erro que está acontecendo.



