---
layout:      materia
title:       Python
description: Python
---


Saídas
---

    print "Welcome to Python!"
    print ("Welcome to Python!")

<hr>
    name = "Mike"
    print "Hello %s" % (name)

<hr>
    string_1 = "Camelot"
    string_2 = "place"

    print "Let's not go to %s. 'Tis a silly %s." % (string_1, string_2)

<hr>
    t = 1.15
    print "%f" % t
    # 1.150000

<hr>
    total = 1.099
    print("%.2f" % total)
    # 1.10



Entradas
---


    name  = raw_input("What is your name?")
    quest = raw_input("What is your quest?")
    color = raw_input("What is your favorite color?")

    print "Ah, so your name is %s, your quest is %s, " \
    "and your favorite color is %s." % (name, quest, color)


Tipos
---

### Booleanos

    `True` ou `False`


Endentação
---

Em Python devemos endentar corretamente o código fonte. O interpretador depende da endentação.

Abaixo vemos um código endentado de forma errada:

    def spam():
    eggs = 12
    return eggs

    print spam()

Abaixo, vemos o mesmo código corrigido:

    def spam():
        eggs = 12
        return eggs

    print spam()


Comentários
---

Em linha.

    # comentário de linha

<hr>

    """ Esse é de bloco mas está em uma linha só """

Em bloco.

    """
    comentários
    comentários
    comentários
    """

Aspas simples também funciona.

    '''
    this is
    a multi-line
    comment, i am handy for commenting out whole
    chunks of code very fast
    '''


Operadores matemáticos
---

### Potência

    10 ** 2


### Módulo

    3 % 2 = 1
    5 % 2 = 1




Strings
---


### Concatenando

    "Spam " + "and" + " eggs" 
    "The value of pi is around " + str(3.14)



### Métodos básicos de string


<table>
    <tr>
        <th>função</th>
        <th>descrição</th>
    </tr>
<tr>
    <td>len()</td>
    <td>mostra o tamanho da string</td>
</tr>
<tr>
    <td>lower()</td>
    <td>caixa baixa</td>
</tr>
<tr>
    <td>upper()</td>
    <td>caixa alta</td>
</tr>
<tr>
    <td>str()</td>
    <td>converte em string</td>
</tr>
<tr>
    <td>isalpha()</td>
    <td>retorna False se a string contiver algum caracter que não seja letras</td>
</tr>
</table>



### Escapando caracteres (scape)

    'There's a snake in my boot!'

    'There\'s a snake in my boot!'



### Acessando pelo index

    +---+---+---+---+---+---+
    | p | y | t | h | o | n |
    +---+---+---+---+---+---+
      0   1   2   3   4   5

<hr>
    "python"[0] # 'p'
    "python"[1] # 'y'
    "python"[2] # 't'
    "python"[3] # 'h'
    "python"[4] # 'o'
    "python"[5] # 'n'

<hr>
    p = "python"
    p[0:0] # ''
    p[0:1] # 'p'
    p[0:2] # 'py'
    p[0:3] # 'pyt'
    p[0:4] # 'pyth'
    p[0:5] # 'pytho'
    p[0:6] # 'python'

<hr>
    p = "python"
    p[:0] # ''
    p[:1] # 'p'
    p[:2] # 'py'
    p[:3] # 'pyt'
    p[:4] # 'pyth'
    p[:5] # 'pytho'
    p[:6] # 'python'

<hr>
    p = "python"
    p[0:0] # ''
    p[0:1] # 'p'
    p[1:2] # 'y'
    p[2:3] # 't'
    p[3:4] # 'h'
    p[4:5] # 'o'
    p[5:6] # 'n'
    p[6:6] # ''

<hr>
    p = "python"
    p[:]  # 'python'
    p[1:] # 'ython'
    p[2:] # 'thon'
    p[3:] # 'hon'
    p[4:] # 'on'
    p[5:] # 'n'
    p[6:] # ''

<hr>
    p = "python"    
    (p == p[0:6]) # True
    (p == p[:6])  # True
    (p == p[:])   # True







Controle de fluxo (condicionais)
---


    if expressao == True:
        print "true"
    else:
        print "false"

<hr>

    if answer > 5:
        return 1
    elif answer < 5:          
        return -1
    else:
        return 0


Funções
---

    def foo():
        return "função em ação"

    print foo()


    def add_two(a, b):
      c = a + b
      return c

    def add_two(a, b):
      return a + b



Imports
---

    import math
    print math.sqrt(25)

<hr>
    from math import sqrt

<hr>
    from math import *


Datas
---


    from datetime import datetime

<hr>
    
    now = datetime.now()
    print now

<hr>

    now = datetime.now()
    print now.year
    print now.month
    print now.day

<hr>

    now = datetime.now()
    print '%s/%s/%s' % (now.month, now.day, now.year)



Functions 12/19