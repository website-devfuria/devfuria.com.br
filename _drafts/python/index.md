---
layout:      materia
title:       Python
description: Python
---

Título: Descubra a sintaxe de Python (colocar menu esquerdo)

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

<hr>
    total = 1.099
    print "O total é: " + str(total)
    # O total é: 1.099

<hr>
    r = "vermelho"
    g = "verde"
    b = "azul"
    print "as cores básicas são: ", r, g, b
    # as cores básicas são:  vermelho verde azul



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


### Percorrendo strings (string lopping)

    for letter in "python":
        print letter
    # p
    # y
    # t
    # h
    # o
    # n


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


Laços de repetição
---

### while

    count = 0
    while count <= 5:
        print "Hello, I am a while and count is", count
        count += 1
    
    """
    Hello, I am a while and count is 0
    Hello, I am a while and count is 1
    Hello, I am a while and count is 2
    Hello, I am a while and count is 3
    Hello, I am a while and count is 4
    Hello, I am a while and count is 5
    """

Exemplo com __break__:

    count = 0
    while True:
        print count
        count += 1
        if count >= 5:
            break

    # 1 2 3 4 5


Funções
---

    def foo():
        return "retorno da função"

    print foo() "retorno da função"

<hr>
    def add_two(a, b):
      c = a + b
      return c

<hr>
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


Números randômicos
---

    import random
    random.randint(1, 10)


Funções  internas (built-in functions)
---

    max(5, 6, 7) # 7

    min(5, 6, 7) # 5

    abs(-1) # 1

    type("text") # <type 'text'>

    type(1)      # <type 'int'>

    type(0.99)   # <type 'float'>

    type(1) == int      # True

    type(0.99) == float # True




range() 
--- 

The range() function returns a list of integers, the sequence of which is defined by the arguments passed to it.
Syntax

    argument variations:
    range(terminal)
    range(start, terminal)
    range(start, terminal, step_size)

    Example

    range(4)
    [0, 1, 2, 3]

    range(2, 8)
    [2, 3, 4, 5, 6, 7]

    range(2, 13, 3)
    [2, 5, 8, 11]

### lopping

    for i in range(20):
        print i




Listas (lists)
---

    animals = ["pangolin", "cassowary", "sloth", "dog"];

    len(animals) # 4

    animals[0] # 'pangolin'
    animals[1] # 'cassowary'
    animals[2] # 'sloth'
    animals[3] # 'dog'
    animals[4] # IndexError: list index out of range

### Slicing

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[0:0] # ''
    p[0:1] # 'p'
    p[0:2] # 'py'
    p[0:3] # 'pyt'
    p[0:4] # 'pyth'
    p[0:5] # 'pytho'
    p[0:6] # 'python'

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[:0] # ''
    p[:1] # 'p'
    p[:2] # 'py'
    p[:3] # 'pyt'
    p[:4] # 'pyth'
    p[:5] # 'pytho'
    p[:6] # 'python'

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[0:0] # ''
    p[0:1] # 'p'
    p[1:2] # 'y'
    p[2:3] # 't'
    p[3:4] # 'h'
    p[4:5] # 'o'
    p[5:6] # 'n'
    p[6:6] # ''

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    p[:]  # 'python'
    p[1:] # 'ython'
    p[2:] # 'thon'
    p[3:] # 'hon'
    p[4:] # 'on'
    p[5:] # 'n'
    p[6:] # ''

<hr>
    p = ["p", "y", "t", "h", "o", "n"] 
    (p == p[0:6]) # True
    (p == p[:6])  # True
    (p == p[:])   # True



### append()

    nums = ["um"]
    print nums # ['um']
    
    nums.append("dois")
    nums.append("tres")
    nums.append("quatro")
    print  nums # ['um', 'dois', 'tres', 'quatro']


### index()

    animals = ["ant", "bat", "cat"]
    print animals.index("bat") # 1


### insert()

    animals = ["ant", "bat", "cat"]
    animals.insert(1, "dog")
    print animals # ["ant", "dog", "bat", "cat"]


### remove()

Remove através do valor

    animals = ["ant", "bat", "cat"]
    animals.remove("ant")
    print animals # ["bat", "cat"]


### pop()

Remove através do índice (retorna o valor removido).

    animals = ["ant", "bat", "cat"]
    animals.pop(0)
    # 'ant'
    print animals # ["bat", "cat"]

Semelhante a utilização de `del()`:

    animals = ["ant", "bat", "cat"]
    del(animals[0])
    print animals # ["bat", "cat"]


### Juntando listas (join lists)

    m = [1, 2, 3]
    n = [4, 5, 6]
    o = m + n
    print o # [1, 2, 3, 4, 5, 6]

    o += [7, 8, 9]
    print o # [1, 2, 3, 4, 5, 6, 7, 8, 9]


### sort()

    lista = ["c", "b", "a"]
    print lista # ['c', 'b', 'a']

    lista.sort()
    print lista # ['a', 'b', 'c']


### Percorrendo a lista (list looping)

    myList = [1, 2, 3, 4]
    for number in myList:
        print number * 2
    # 2
    # 4
    # 6
    # 8

<hr>
    choices = ['pizza', 'pasta', 'salad', 'nachos']

    print 'Your choices are:'
    for index, item in enumerate(choices):
        print index + 1, item

    """
    Your choices are:
    1 pizza
    2 pasta
    3 salad
    4 nachos
    """

<hr>
    list_a = [3, 9, 17, 15, 19]
    list_b = [2, 4, 8, 10, 30, 40, 50, 60, 70, 80, 90]

    for a, b in zip(list_a, list_b):
        # Add your code here!
        if a > b:
            print a
        else:
            print b




Dicionários (dictionaries)
---

    people = {
        "name": "joao",
        "age": 39,
        "skylls": ['python', 'ruby', 'php']
    }

    print people['age']= 40

    print people['name']   # joao
    print people['age']    # 40
    print people['skylls'] # ['python', 'ruby', 'php']

<hr>
    dic = {} # Empty dictionary
    dic['hardware'] = "o que chutamos"
    dic['software'] = "o que xingamos"


### Percorrendo dicionários (dictionaries looping)

    webster = {
        "Aardvark" : "A star of a popular children's cartoon show.",
        "Baa" : "The sound a goat makes.",
        "Carpet": "Goes on the floor.",
        "Dab": "A small amount."
    }

    for word in webster:
        print webster[word]

    '''
    A star of a popular children's cartoon show.
    Goes on the floor.
    A small amount.
    The sound a goat makes.
    None
    '''

<hr>
    d = {'a': 'apple', 'b': 'berry', 'c': 'cherry'}

    for key in d:
        print key + " " + d[key]

    """
    a apple
    c cherry
    b berry
    """

Practice Makes Perfect