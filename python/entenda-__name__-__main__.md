---
layout:      grid12-article
title:       Entenda o __name__ == "__main__"
description: Este artigo é para quem está começando em Python e ainda não entendeu o funcionamento de __name__ == '__main__'
---

Quem está começando a aprender Python pode ter dificuldade em entender o que significa o trecho 
`if __name__ == '__main__':`, este artigo tenta explicar isso da forma mais simples possível. Faço apenas uma observação
antes de começarmos: facilita o entendimento se você souber o conceito de [módulos e pacotes](/python/modulos-pacotes) 
na linguagem Python.

Vamos começar com o exemplo abaixo...

```python

"""Módulo principal.
"""

import strformat

def main():
    """Função principal da aplicação.
    """
    print strformat.frmt_bytes(502356)
    print strformat.strip_html("<b>Texto</b>")

if __name__ == "__main__":
    main()
```

> Existem algumas situações aonde queremos que nosso código seja executado apenas sob condições especiais, é o caso dos 
> módulos principais. Só queremos que nossa função `main()` seja executada se o módulo for o principal. Caso ele tenha 
> sido importado, a aplicação só deverá ser executada se `main()` for chamado explicitamente.
>
> Fonte Python brasil - Módulos e Pacotes

Confuso? Também acho, então vamos tentar algo mais simples...

Seu script escrito em Python pode ser executado, por exemplo, na linha de comando e também pode ser importado como um
módulo. Não se preocupe se você não tem certeza do que é exatamente um módulo, saiba apenas que seu singelo script 
também é considerado um módulo e, portanto, ele poderá ser importado por outros scripts Python.

Temos dois casos, duas situações. Uma quando executamos seu script diretamente e outra quando importamos seu script
para "dentro" de nosso script.

Se você quisesse diferenciar essas duas situações, poderia perguntar "quem está executando o código ?", é isso o que
`__name__ == "__main__"` está fazendo, diferenciando os dois casos.


Vamos a um pequeno exemplo. Imagine que você possui um arquivo denominado `foo.py` e, dentro dele, o seguinte conteúdo:

```python
#
# Script foo.py
#
print(__name__)
```

Ao executar o script no terminal, descobrimos o valor de `__name__`:

    $ python foo.py 
    __main__


Se importamos o script como um módulo, veremos que o valor de `__name__` foi modificado:

    >>> import foo  
    foo

Vejamos um outro exemplo.

Agora elaboramos uma tomada de decisão com a estrutura __if__.

```python
#
# Script foo.py
#
if __name__ == '__main__':
    print('me executou pelo terminal')
else:
    print('me executou como um módulo')
```

Ao executar pelo terminal....

    $ python foo.py 
    me executou pelo terminal

Ao executar como módulo (importando-o)...

    >>> import foo
    me executou como um módulo


Agora sim, se voltarmos ao texto "lá em cima", percebemos que:

- temos o módulo principal `_name__ == "__main__"` e
- temos o módulo secundário(?) `_name__ not "__main__"`

Tenha em mente...

```python
# -*- coding: utf-8 -*-


""" Código do módulo principal
"""


if __name__ == '__main__':
    """ Código do módulo secundário
    """    

```



Exemplo
---

Abaixo temos um exemplo do "hello world" do framework [Flask](/python/flask/).

```python
from flask import Flask
app = Flask(__name__)

@app.route("/")
def hello():
    return "Hello World!"

if __name__ == "__main__":
    app.run()
```

O mais importante do script é a variável `app` (segunda linha) que contém a sua aplicação [Flask](/python/flask/).

Se executarmos o script via terminal, a última linha `app.run()` será executada e nossa aplicação será inicializada.

Em outro momento, poderemos importar este script para outros scripts e, neste caso, não queremos que a aplicação seja inicializada
"automaticamente".



Fontes
---

- [Python Help - Por que __name__ == “__main__” ?](https://pythonhelp.wordpress.com/2012/06/15/por-que-__name__-__main__/ "link-externo")
- [Python Brasil - Módulos e Pacotes](http://wiki.python.org.br/ModulosPacotes "link-externo")
