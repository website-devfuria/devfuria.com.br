---
layout:      grid12-article
title:       Módulos e Pacotes em Python
description: Artigo, com exemplo, ilustrando o funcionamento de módulos e pacotes em Python
---

Módulos e pacotes são conceitos básicos para se trabalhar com Python. Explico neste artigo, através de exemplos, o 
funcionamento dos módulos e pacote em Python. 

Iremos tratar apenas de casos aonde os módulos importados estavam no mesmo nível de diretório daqueles que os importavam. 
Em outros casos, precisamos entender como o interpretador Python busca por módulos em outros diretórios.

Começo fazendo uma breve explicação e parto direto para a prática, porém, ao final do artigo, você encontrará os
conceitos definidos com certa formalidade.


### Breve explicação de como a coisa toda funciona

- Um script Python é considerado como Módulo (veja o final do artigo uma definição mais formal)
- Um diretório (pasta) é indicado como pacote quando este conta com a presença do arquivo `__init__.py`
- Um pacote pode conter vários outros módulos, chamamos de submódulos.

Ao criarmos um pacote, além de organizarmos nosso programa, temos a possibilidade de importarmos os módulos de forma
bastante flexível. Seria legal você entender como se importa módulos e pacote em Python, para isso veja o artigo
[Importando módulos no Python](/python/imports/).


Um erro comum ao estudar o assunto é achar que a linguagem fará todo o serviço de identificação de módulos e submódulos.
Esperamos, ingenuamente, que o simples comando `import meu-pacote` vasculhasse o sistema de arquivos, encontrasse todos 
submódulos presentes no pacote, e os importassem. Isso pode demorar muito e a importação de submódulos pode ocasionar 
efeitos colaterais que somente deveriam ocorrer quando o submódulo é explicitamente importado.

A solução é o autor do pacote fornecer um índice explícito do pacote ficando a cargo do autor do pacote manter 
esta lista atualizada. Neste caso, o comando `import` pode ajudar pois ele usa a seguinte convenção: se o arquivo 
`__init__.py` do pacote define uma lista chamada `__all__`, então esta lista indica os nomes dos módulos a serem 
importados quando o comando `from pacote import *` é acionado. Vale ressaltar que isso é válido apenas no caso onde 
queremos importar todos os módulos.

Isso pode nos levar a outro engano: achar que após a utilização da diretiva `__all__` a linguagem então descobrirá todos
os módulos, submódulos e tudo mais que há... não é bem assim.

Para entender com precisão o funcionamento dos módulos aconselho ao caro leitor a abrir o terminal e examinar cada 
resultado apresentado..

Então vamos lá...



Exemplo
---


Crie a seguinte estrutura de arquivos.

    sound/
          __init__.py
          effects/
                  __init__.py
                  echo.py
                  surround.py
                  reverse.py
          filters/
                  __init__.py
                  equalizer.py
                  vocoder.py
                  karaoke.py


Todos os arquivos estão em branco.

Apenas o arquivo `sound/effects/echo.py` possui o seguinte conteúdo...

```python
# -*- coding: utf-8 -*-

def echofilter():
    print("OK, função 'echofilter()' executada!")
```

No terminal, tenha a certeza de estar um nível abaixo da pasta `sound`, ou seja, `../sound`. Caso contrário, os próximos
exemplos não terão o efeito esperado.

Vamos iniciar...

    $ cd caminho/para/sound/
    $ cd ../sound/
    # python
    >>>

Neste instante, se eu executar a função `dir`, terei o seguinte resultado...

    >>> dir()
    >>> ['__builtins__', '__doc__', '__name__', '__package__']



Para importar a função `echofilter()` do módulo `echo` podemos fazer de três formas diferentes...

1)

    >>> import sound.effects.echo
    >>> sound.effects.echo.echofilter()
    OK, função 'echofilter()' executada!


2)

    >>> from sound.effects import echo
    >>> echo.echofilter()
    OK, função 'echofilter()' executada!


3)

    >>> from sound.effects.echo import echofilter
    >>> echofilter()




### Cuidados...

Normalmente deduzimos, erroneamente, que podemos importar o módulo diretamente...

    >>> exit()
    $ python
    >>> import sound

Na verdade, podemos sim, se olharmos para a tabela de símbolos veremos:

    >>> dir()
    ['__builtins__', '__doc__', '__name__', '__package__', 'sound']

Olha o pacote alí no final, mas se executarmos...

    >>> sound.effects
    >>> sound.effects.echo
    >>> sound.effects.echo.echofilter()

...receberemos o seguinte erro `AttributeError: 'module' object has no attribute 'effects'`.

Isso porque não inicializamos o pacote, lembre-se que criamos o arquivo `__init__.py` totalmente vazio.

Poderíamos alterar o conteúdo do arquivo `sound/__init__.py` para:

    from effects import echo

Então reiniciamos...

    >>> exit()
    $ python
    >>> import sound
    >>> dir()
    ['__builtins__', '__doc__', '__name__', '__package__', 'sound']

E experimentamos...

    >>> sound.effects
    AttributeError: 'module' object has no attribute 'effects'

    >>> sound.effects.echo
    AttributeError: 'module' object has no attribute 'effects'
    
    >>> sound.effects.echo.echofilter()
    OK, função 'echofilter()' executada!

Reparou que apenas a última linha funcionou? De qualquer forma, este não é um caminho aconselhável e, na verdade, é até
desencorajado.



### O ideal é utilizarmos a diretiva __all__


Ao invés de importamos os módulos devemos utilizar a diretiva `__all__` com a lista de pacotes e/ou módulos. Dessa forma,
ao importar o pacote todo (`from package import *`) ele saberá quais módulos devem ser importados.

Altere o conteúdo do arquivo `sound/__init__.py` para:

    __all__ = ['effects', 'filters']

Altere também o conteúdo do arquivo `sound/effects/__init__.py` para

    __all__ = ['echo']

Reiniciando...

    >>> exit()
    $ python
    >>> from sound.effects import *
    >>> dir()
    ['__builtins__', '__doc__', '__name__', '__package__', 'echo']
    >>> echo.echofilter()
    OK, função 'echofilter()' executada!


Observação: novamente podemos ser induzido ao erro se tirarmos conclusões precipitadas. Imaginamos que o comando...

    >>> from sound import *

... deva surtir o mesmo efeito, mas não surte. Ele importa `effects` e `filters` mas nada do módulo `echo`






Conceitos
---


### Módulos

Um script Python é um módulo, na documentação encontramos "Um módulo é um arquivo Python contendo definições e instruções.
O nome do arquivo é o módulo com o sufixo `.py` adicionado. Dentro de um módulo, o nome do módulo (como uma string) está
disponível na variável global `__name__`".

Tenha em mente o seguinte...

- Um módulo é um arquivo Python contendo definições e sentenças.
- Módulos são arquivos de código Python cuja interface pode ser importada por outros módulos
- Todos os arquivos com código Python são módulos, mesmo que não sejam importados


### Pacotes

Um pacote é uma coleção de módulos.

Quando nossos módulos aumentam de tamanho, podemos dividí-los em pacotes, segundo o tutorial do Python "O uso de pacotes
permite aos autores de grupos de módulos (como NumPy ou PIL) não terem que se preocupar com colisão entre os nomes de
seus módulos e os nomes de módulos de outros autores."

Se você leu com atenção, o texto refere-se a "colisão de nomes", ou seja, estamos tratrando do conceito de
__names spaces__ (espaço de nomes). Ainda na documentação "Pacotes são uma maneira de estruturar espaços de nomes para
módulos Python utilizando a sintaxe de 'nomes pontuados' (dotted names)".

Tenha em mente o seguinte...

- Módulos são estruturados em arquivos, enquanto que, pacotes são estruturados em pastas.
- Todos os pacotes devem conter um arquivo __init__.py

Os arquivos `__init__.py` são arquivos especiais e servem para que o interpretador possa identificar quais diretórios
são pacotes e quais não são.

> Os arquivos `__init__.py` são necessários para que Python trate os diretórios como pacotes; isso foi feito para evitar
> que diretórios com nomes comuns, como string, inadvertidamente ocultassem módulos válidos que ocorram depois no caminho
> de busca. No caso mais simples, `__init__.py` pode ser um arquivo vazio. Porém, ele pode conter código de inicialização
> para o pacote ou definir a variável `__all__`. (documentação Python)


### Tabela de símbolos

Para entender por completo os conceitos módulo e pacote devemos compreender o conceito de tabelas de símbolos existente
em Python.

Uma __tabela de símbolos__ é um dicionário de dados que cada módulo possui, onde são armazenadas todas as variáveis,
funções e classes definidas neste módulo.

Para acessarmos a tabela de símbolos utilizamos a função `dir()`.

A função embutida __dir()__ é usada para se descobrir quais nomes são definidos por um módulo, ela devolve a tabela
de símbolos (uma lista ordenada de strings).

No terminal, se executarmos `dir()` veremos uma lista de nomes de todos os símbolos da tabela do módulo atual.

    $ python
    >>> dir()
    ['__builtins__', '__doc__', '__name__']

Se importamos por exemplo o módulo `math` teremos um novo símbolo em nossa tabela.

    >>> import math
    >>> dir()
    ['__builtins__', '__doc__', '__name__', 'math']


Sabemos que é possível importar apenas a função `sqrt()` de math, por exemplo, então...

    >>> exit()
    $ python
    >>> from math import sqrt
    >>> dir()
    ['__builtins__', '__doc__', '__name__', 'sqrt']



Fontes
---

- [Doc Python traduzido pela oficinna Turing](http://turing.com.br/pydoc/2.7/tutorial/modules.html "link-externo")
- [PythonBrasil - Modulos e Pacotes](http://wiki.python.org.br/ModulosPacotes "link-externo")
