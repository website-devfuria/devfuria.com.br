---
layout:      materia-fork
title:       Python - O básico da sintaxe
description: Um guia rápido e básico da linguagem Python.
---

Este é um pequeno guia sobre a sintaxe de Python.

Recomendado para quem nunca viu Python.



Variáveis
---

Uma variável não pode ser utilizada em uma expressão sem ter sido inicializada

Não existe “criação automática” de variáveis

Exemplo de atribuição:

{% highlight python %}reais = euros * taxa{% endhighlight %}

As variáveis `euros` e  `taxa` devem ser inicializadas, se não o erro `name 'euros' is not defined` será exibido.



Saídas
---

Saída simples.

{% highlight python %}print "Welcome to Python!"{% endhighlight %}

Saída mais elaborada.

{% highlight python %}
string_1 = "Camelot"
string_2 = "place"
print "Let's not go to %s. 'Tis a silly %s." % (string_1, string_2)
{% endhighlight %}



Entradas
---

{% highlight python %}
name  = raw_input("What is your name?")
quest = raw_input("What is your quest?")
color = raw_input("What is your favorite color?")

print "Ah, so your name is %s, your quest is %s, " \
"and your favorite color is %s." % (name, quest, color)
{% endhighlight %}


Endentação
---

Em Python devemos endentar corretamente o código fonte.

Abaixo vemos um código endentado de forma errada:

{% highlight python %}
def spam():
eggs = 12
return eggs

print spam()
{% endhighlight %}

Abaixo, vemos o mesmo código corrigido:

{% highlight python %}
def spam():
    eggs = 12
    return eggs

print spam()
{% endhighlight %}


### Blocos

Todos os comandos que aceitam blocos:

+ if/elif/else
+ for/else
+ while/else
+ def
+ try/except  /finally/else
+ class
+ with

Se o bloco tem apenas um comando, pode-se escrever tudo em uma linha:

{% highlight python %}if n < 0: print 'Valor inválido'{% endhighlight %}



Comentários
---

Em linha.

{% highlight python %}
# comentário de linha
""" Esse é de bloco mas está em uma linha só """
{% endhighlight %}

Em bloco.

{% highlight python %}
"""
comentários
comentários
comentários
"""
{% endhighlight %}

Aspas simples também funciona.

{% highlight python %}
'''
this is
a multi-line
comment, i am handy for commenting out whole
chunks of code very fast
'''
{% endhighlight %}



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

Se, por exemplo, você digitar no console `dict` ele retornará:

{% highlight python %}<type 'dict'>{% endhighlight %}


A função `type()` mostra o tipo do dado, veja alguns exemplos.

{% highlight python %}
type("text")        # <type 'text'>
type(1)             # <type 'int'>
type(0.99)          # <type 'float'>
{% endhighlight %}

Também é possível elaborar as seguintes expressões.

{% highlight python %}
type(1) == int      # True
type(0.99) == float # True
{% endhighlight %}



Números
---

Python possui `+ - * /`, nem precisava falar!. 

Mas talvez você se pergunte como calcular uma potência.

{% highlight python %}10 ** 2 # print 100{% endhighlight %}

...ou o resto da divisão com o operador módulo `%`.

{% highlight python %}
3 % 2 = 1
5 % 2 = 1
{% endhighlight %}

Veja também algumas funções matemáticas:

{% highlight python %}
max(5, 6, 7) # 7
min(5, 6, 7) # 5
abs(-1)      # 1
{% endhighlight %}


Para trabalhar com números randômicos será preciso importar o módulo `random`.

{% highlight python %}
import random
random.randint(1, 10)
{% endhighlight %}

O código acima irá gerar números randômicos entre 1 e 10 (incluindo o 1 e o 10).



Strings
---

Concatenamos strings com o sinal `+`.

{% highlight python %}"Spam " + "and" + " eggs"{% endhighlight %}

Quando concatenamos com um número, precisamos fazer a conversão.

{% highlight python %}"The value of pi is around " + str(3.14){% endhighlight %}

Escapamos (scape) caracters com o sinal `\`

{% highlight python %}
'There's a snake in my boot!'  # errado
'There\'s a snake in my boot!' # correto
{% endhighlight %}


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

Exemplo, `"flavio.upper()"` equivale a `FLAVIO`.


### Acessando pelo index

{% highlight python %}
+---+---+---+---+---+---+
| p | y | t | h | o | n |
+---+---+---+---+---+---+
  0   1   2   3   4   5
{% endhighlight %}

{% highlight python %}
"python"[0] # 'p'
"python"[1] # 'y'
"python"[2] # 't'
"python"[3] # 'h'
"python"[4] # 'o'
"python"[5] # 'n'
{% endhighlight %}

Leia mais sobre [fatimanento de sequencias](../sequencias-fatiamento/ "Python - Sequencias").


### Percorrendo strings (string lopping)

{% highlight python %}
for letter in "python":
    print letter

"""
p
y
t
h
o
n
"""
{% endhighlight %}



Controle de fluxo (condicionais)
---

{% highlight python %}
if expressao == True:
    print "true"
else:
    print "false"
{% endhighlight %}


{% highlight python %}
if answer > 5:
    return 1
elif answer < 5:
    return -1
else:
    return 0
{% endhighlight %}



Laços de repetição
---

### while

{% highlight python %}
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
{% endhighlight %}

Exemplo com __break__:

{% highlight python %}
count = 0
while True:
    print count
    count += 1
    if count >= 5:
        break

# 1 2 3 4 5
{% endhighlight %}



Funções
---

{% highlight python %}
def foo():
    return "retorno da função"

print foo() "retorno da função"
{% endhighlight %}

Outro exemplo

{% highlight python %}
def add_two(a, b):
    c = a + b
    return c
{% endhighlight %}

Leia mais sobre [funções](../functions/ "Python - funções(functions)").



Imports
---

Para importar um módulo utilizamos o `import`.

{% highlight python %}
import math
print math.sqrt(25)
{% endhighlight %}

O código acima importará todos os módulos de `math`, para importar apenas o necessário utilizamos `from`.

{% highlight python %}from math import sqrt{% endhighlight %}

Podemos importar todas as funções de `math` dessa forma:

{% highlight python %}
from math import *
{% endhighlight %}



Datas
---

{% highlight python %}
from datetime import datetime
now = datetime.now()
print now
print now.year
print now.month
print now.day
{% endhighlight %}

Para imprimir a data no formato brasileiro:

{% highlight python %}print '%s/%s/%s' % (now.day, now.month, now.year){% endhighlight %}

Imprimindo as horas:

{% highlight python %}print '%s:%s:%s' % (now.hour, now.minute, now.second){% endhighlight %}



Listas (lists)
---

{% highlight python %}
animals = ["pangolin", "cassowary", "sloth", "dog"];
animals[0]   # 'pangolin'
animals[1]   # 'cassowary'
animals[2]   # 'sloth'
animals[3]   # 'dog'
{% endhighlight %}

Ao acessar um índice inexistente recebemos um erro.

{% highlight python %}animals[4]   # IndexError: list index out of range{% endhighlight %}

A função `len()` retorna o tamanho da lista.

{% highlight python %}len(animals) # 4{% endhighlight %}

Leia mais sobre [listas](../listas/ "Python - listas(list)").


### range() 

A função `range()` retorna uma lista de inteiros. Seu conteúdo é definido pelos argumentos, veja:

- range(terminal)
- range(start, terminal)
- range(start, terminal, step_size)

Exemplos:

{% highlight python %}
range(4)
[0, 1, 2, 3]

range(2, 8)
[2, 3, 4, 5, 6, 7]

range(2, 13, 3)
[2, 5, 8, 11]
{% endhighlight %}


Percorrendo (lopping):

{% highlight python %}
for i in range(20):
    print i
{% endhighlight %}



Dicionários (dictionaries)
---

{% highlight python %}
people = {
    "name": "joao",
    "age": 39,
    "skylls": ['python', 'ruby', 'php']
}

print people['name']
print people['age']
print people['skylls']

"""
joao
40
['python', 'ruby', 'php']
"""
{% endhighlight %}

Leia mais sobre [dicinonários](../dicionarios-dictionaries/ "Python - dicionários (dctionaries)").



Lambdas
---

Exemplo:

{% highlight python %}
g = lambda x: x * 2
print g(6) 
# 12
{% endhighlight %}

Para facilitar o entendimento, veja código abaixo, ele é similar.

{% highlight python %}
def f(x):
    return x * 2
print f(6)
# 12
{% endhighlight %}



OOP - Programação Orientada a Objetos
---

Uma classe consiste da palavra chave `class` seguida de seu nome e da classe herdada entre parênteses.

A palavra `pass` serve para criarmos um classe vazia.

Abaixo, criamos a classe vazia `Foo` que herda de `object`

{% highlight python %}
class Foo(object):
    pass
{% endhighlight %}

Abaixo, criamos a classe `Triangle` com um método construtor `__init__`

{% highlight python %}
class Triangle(object):
    def __init__(self, angle1, angle2, angle3):
        self.angle1 = angle1
        self.angle2 = angle2
        self.angle3 = angle3
{% endhighlight %}

Todo método deve aceitar como parâmetro a palavra `self`, que se refere ao próprio objeto.

Abaixo, criamos mais métodos para nossa class `Triangle`.

{% highlight python %}
class Triangle(object):

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
{% endhighlight %}


### Instanciando

Abaixo vemos um exemplo de utilização da classe.

{% highlight python %}
class Animal(object):
    def __init__(self, name):
        self.name = name

zebra = Animal("Jeffrey")
print zebra.name
{% endhighlight %}


### Herança

Um exemplo simples.

{% highlight python %}
class Shape(object):
    def __init__(self, number_of_sides):
        self.number_of_sides = number_of_sides

class Triangle(Shape):
    def __init__(self, side1, side2, side3):
       self.side1 = side1
       self.side2 = side2
       self.side3 = side3
{% endhighlight %}


### Fontes

- [Python: apresentando a sintaxe (Luciano Ramalho)](https://github.com/pythonprobr/pypratico/raw/master/academia/py_sintaxe.pdf" link-externo")
- [Codeacademy - Python Glossary](http://www.codecademy.com/glossary/python" link-externo")
