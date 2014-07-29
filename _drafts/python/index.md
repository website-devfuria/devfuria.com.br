---
layout:      materia
title:       Python
description: Python
---

Título: Descubra a sintaxe de Python (colocar menu esquerdo)


Variáveis
---

Uma variável não pode ser utilizada em uma expressão sem ter sido inicializada

Não existe “criação automática” de variáveis

### Atribuição

    reais = euros * taxa



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


Tipos de dados básicos
---

<table>
    <tr>
        <th class="text-right">Números: </th>
        <td>int, long, float, complex</td>
    </tr>
    <tr>
        <th class="text-right">Strings: </th>
        <td>str e unicode</td>
    </tr>
    <tr>
        <th class="text-right">Listas e tuplas: </th>
        <td>list, tuple</td>
    </tr>
    <tr>
        <th class="text-right">Dicionários: </th>
        <td>dict</td>
    </tr>
    <tr>
        <th class="text-right">Arquivos: </th>
        <td>file</td>
    </tr>
    <tr>
        <th class="text-right">Booleanos: </th>
        <td>bool (True, False)</td>
    </tr>
    <tr>
        <th class="text-right">Conjuntos: </th>
        <td>set, frozenset</td>
    </tr>
    <tr>
        <th class="text-right">None: </th>
        <td></td>
    </tr>
</table>


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



Listas (lists)
---

    animals = ["pangolin", "cassowary", "sloth", "dog"];

    len(animals) # 4

    animals[0] # 'pangolin'
    animals[1] # 'cassowary'
    animals[2] # 'sloth'
    animals[3] # 'dog'
    animals[4] # IndexError: list index out of range

<div class="list-group">
    <a href="../listas/" class="list-group-item">Leia mais sobre Listas (lists)</a>
</div>


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



Dicionários (dictionaries)
---

    people = {
        "name": "joao",
        "age": 39,
        "skylls": ['python', 'ruby', 'php']
    }

    print people['age']= 40

    print people['name']
    print people['age']
    print people['skylls']

    # joao
    # 40
    # ['python', 'ruby', 'php']


<div class="list-group">
    <a href="../dicionarios-dictionaries/" class="list-group-item">Leia mais sobre Dicionários (dictionaries)</a>
</div>



Lambdas
---

Advanced Topics in Python 12/18



OOP - Programação Orientada a Objetos
---



    class Foo(object):
        pass

<hr>
    class Triangle(object):
        def __init__(self, angle1, angle2, angle3):
            self.angle1 = angle1
            self.angle2 = angle2
            self.angle3 = angle3


<hr>
    class Triangle(object):

        number_of_sides = 3

        def __init__(self, angle1, angle2, angle3):
            self.angle1 = angle1
            self.angle2 = angle2
            self.angle3 = angle3

        def soma_triangulo(self):
            return self.angle1 + self.angle2 + self.angle3

        def check_angles(self):
            if(self.soma_triangulo() == 180):
                return True
            else:
                return False


<hr>
    class Animal(object):
        def __init__(self, name):
            self.name = name

    zebra = Animal("Jeffrey")
    print zebra.name


<hr>
    class Animal(object):
        """Makes cute animals."""
        is_alive = True
        def __init__(self, name, age):
            self.name = name
            self.age = age
        # Add your method here!
        def description(self):
            print self.name
            print self.age

    hippo = Animal("me", 999);
    hippo.description()



### Herança

    class Shape(object):
        """Makes shapes!"""
        def __init__(self, number_of_sides):
            self.number_of_sides = number_of_sides

    # Add your Triangle class below!
    class Triangle(Shape):
        def __init__(self, side1, side2, side3):
           self.side1 = side1
           self.side2 = side2
           self.side3 = side3


Blocos
---


Todos os comandos que aceitam blocos:

+ if/elif/else
+ for/else
+ while/else
+ def
+ try/except  /finally/else
+ class
+ with

Se o bloco tem apenas um comando, pode-se escrever tudo em uma linha:

    if n < 0: print 'Valor inválido'




<hr>
### Fontes

- [Python:apresentando a sintaxe (Luciano Ramalho, PDF de slides)](https://github.com/pythonprobr/pypratico/raw/master/academia/py_sintaxe.pdf"link-externo")
- []("link-externo")