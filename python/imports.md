---
layout:      grid12-article
title:       Importando módulos<br />no Python (imports)
description: Artigo que esclarece o funcionamento do comando<br />imports da linguagem Python
---

Este artigo é mais um passo (longe de ser o último) no sentido de esclarecer como podemos importar módulos na 
linguagem Python. Veremos como importar um módulo em sua totalidade e parcialmente, além de ilustrar que também podemos
fazer isso com simples scripts Python, uma vez que um script Python na verdade é (também) um módulo.

Quem inicia seus estudos em Python estará mais preocupado com o funcionamento do `imports` do que com o conceito de 
módulos e pacotes, porém alerto para o fato de que também é importante saber, talvez em um segundo momento, os conceitos 
de [módulos e pacotes](/python/modulos-pacotes).



### import package

Para importar um módulo utilizamos o `import`.

```python
import math
print(math.sqrt(25))
```

O código acima importará todos os módulos de `math`, para importar apenas o necessário utilizamos `from`.



### from package import item

O código abaixo importará o módulo `sqrt` do pacote `math`.

```python
from math import sqrt
print(sqrt(25))
```

Observe que ao utilizar `from package import item`, o item pode ser um subpacote, submódulo, classe, função ou variável.

O comando `import` primeiro testa se o item está definido no pacote, senão assume que é um módulo e tenta carregá-lo. 
Se falhar em encontrar o módulo uma exceção `ImportError` é lançada (documentação Python).



### from package import *

No terminal, para diminuir a digitação, costuma-se importar todas as funções de `math` dessa forma:

```python
from math import *
```

Em geral, a prática do `import *` de um módulo ou pacote é desaprovada, uma vez que muitas vezes dificulta a leitura do 
código. O uso no terminal, com dito, é muito comum.




### import item.subitem.subsubitem

Em uma construção como `import item.subitem.subsubitem`, cada item, com exceção do último, deve ser um pacote.
O último pode ser também um pacote ou módulo, mas nunca uma classe, função ou variável contida em um módulo.




Serve também para seus arquivos
---

Ao nos deparamos pela primeira vez com o comando `import`, a impressão que temos é que ele funciona apenas para os módulos
embutidos da linguagem Python, mas não é bem assim, veja o que a documentação diz "Quando um módulo chamado `math` é 
importado, o interpretador procura um módulo embutido com este nome. Se não existe, procura um arquivo chamado `math.py` 
em uma lista de diretórios incluídos na variável `sys.path`."

Sem entrar em detalhes da variável `sys.path` e da variável de ambiente `PYTHONPATH`, irei mostrar um exemplo do 
framework [Flask](/python/flask/), temos dois arquivos `myapp.py` e `wsgi.py`:

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

```python
#
# Conteudo do arquivo `wsgi.py`
#
import sys

sys.path.insert(0, "/projetos/flask-test")

from myapp import app as application
```

Neste momento, esqueça o funcionamento dos scripts, foque sua atenção para a última linha do arquivo `wsgi.py`:

    from myapp import app as application

Ela está dizendo "do arquivo `myapp.py` importe a variável `app` com o apelido `application`".



A tabela de símbolos e a função dir()
---

Em qualquer um dos casos visto acima podemos lançar mão da função `dir()` para descobrirmos o que exatamente foi 
importado para o seu script.

A função embutida __dir()__ é usada para se descobrir quais nomes são definidos por um módulo, ela devolve a tabela
de símbolos (uma lista ordenada de strings).

Uma __tabela de símbolos__ é um dicionário de dados que cada módulo possui, onde são armazenadas todas as variáveis, 
funções e classes definidas neste módulo.

Como exemplo, no terminal, temos...

    $ python3
    >>> dir()
    ['__builtins__', '__doc__', '__name__', '__package__']




Leia também
---

Talvez agora você queira dar uma olhada no seguinte artigo:


- [Módulos e Pacotes em Python](/python/modulos-pacotes/)
