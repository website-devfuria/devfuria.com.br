---
layout:      grid12-article
title:       Python - O básico da sintaxe
description: Um guia rápido e básico da linguagem Python.
---

Este é um pequeno guia sobre a sintaxe de Python.

Recomendado para quem está começando a aprender sobre Python ou para quem nunca viu Python.



Variáveis
---

Uma variável não pode ser utilizada em uma expressão sem ter sido inicializada

Não existe "criação automática" de variáveis.

Exemplo de atribuição:

```python
reais = euros * taxa
```

As variáveis `euros` e  `taxa` devem ser inicializadas, se não o erro `name 'euros' is not defined` será exibido.



Valor nulo (null)
---

Em Python, `None` equivale ao valor nulo (null).

Podemos iniciar as variáveis com o valor `None`.

```python
reais = None
```


Saídas
---

Saída simples válido para a versão 3 de Python.

```python
print("Welcome to Python!")
```

Saída mais elaborada.

```python
string_1 = "Camelot"
string_2 = "place"
print("Let's not go to %s. 'Tis a silly %s." % (string_1, string_2))
```

Veja na documentação oficial as 
[diferenças entre as versões 2 e 3](https://docs.python.org/3.0/whatsnew/3.0.html#print-is-a-function "link-externo").


Entradas
---

```python
name  = raw_input("What is your name?")
quest = raw_input("What is your quest?")
color = raw_input("What is your favorite color?")

print "Ah, so your name is %s, your quest is %s, " \
"and your favorite color is %s." % (name, quest, color)
```


Endentação
---

Python usa endentação como delimitação de bloco, portanto devemos endentar corretamente o código fonte.

Abaixo vemos um código endentado de forma errada:

```python
def spam():
eggs = 12
return eggs

print spam()
```

Abaixo, vemos o mesmo código corrigido:

```python
def spam():
    eggs = 12
    return eggs

print spam()
```


### Blocos

Como visto acima, Python usa endentação como delimitação de bloco.

Abaixo vemos os comandos que aceitam blocos:

+ if/elif/else
+ for/else
+ while/else
+ def
+ try/except  /finally/else
+ class
+ with

Se o bloco tem apenas um comando, pode-se escrever tudo em uma linha:

```python
if n < 0: print 'Valor inválido'
```



Comentários
---

Em linha.

```python
# comentário de linha
""" Esse é de bloco mas está em uma linha só """
```

Em bloco.

```python
"""
comentários
comentários
comentários
"""
```

Aspas simples também funciona.

```python
'''
this is
a multi-line
comment, i am handy for commenting out whole
chunks of code very fast
'''
```



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

```python
<type 'dict'>
```


A função `type()` mostra o tipo do dado, veja alguns exemplos.

```python
type("text")        # <type 'text'>
type(1)             # <type 'int'>
type(0.99)          # <type 'float'>
```

Também é possível elaborar as seguintes expressões.

```python
type(1) == int      # True
type(0.99) == float # True
```



Números
---

Python possui `+ - * /`, nem precisava falar!. 

Mas talvez você se pergunte como calcular uma potência.

```python
10 ** 2 # print 100
```

...ou o resto da divisão com o operador módulo `%`.

```python
3 % 2 = 1
5 % 2 = 1
```

Veja também algumas funções matemáticas:

```python
max(5, 6, 7) # 7
min(5, 6, 7) # 5
abs(-1)      # 1
```


Para trabalhar com números randômicos será preciso importar o módulo `random`.

```python
import random
random.randint(1, 10)
```

O código acima irá gerar números randômicos entre 1 e 10 (incluindo o 1 e o 10).



Strings
---

Concatenamos strings com o sinal `+`.

```python
"Spam " + "and" + " eggs"
```

Quando concatenamos com um número, precisamos fazer a conversão.

```python
"The value of pi is around " + str(3.14)
```

Escapamos (scape) caracters com o sinal `\`

```python
'There's a snake in my boot!'  # errado
'There\'s a snake in my boot!' # correto
```


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

```python
+---+---+---+---+---+---+
| p | y | t | h | o | n |
+---+---+---+---+---+---+
  0   1   2   3   4   5
```

```python
"python"[0] # 'p'
"python"[1] # 'y'
"python"[2] # 't'
"python"[3] # 'h'
"python"[4] # 'o'
"python"[5] # 'n'
```

Leia mais sobre [fatiamento de sequências](../sequencias-fatiamento/ "Python - Sequências").


### Percorrendo strings (string lopping)

```python
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
```



Controle de fluxo (condicionais)
---

```python
if expressao == True:
    print "true"
else:
    print "false"
```


```python
if answer > 5:
    return 1
elif answer < 5:
    return -1
else:
    return 0
```



Laços de repetição
---

### while

```python
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
```

Exemplo com __break__:

```python
count = 0
while True:
    print count
    count += 1
    if count >= 5:
        break

# 1 2 3 4 5
```



Funções
---

```python
def foo():
    return "retorno da função"

print foo() # retorno da função"
```

Outro exemplo

```python
def add_two(a, b):
    c = a + b
    return c
```

Leia mais sobre [funções](../functions/ "Python - funções(functions)").



Imports
---

Para importar um módulo utilizamos o `import`.

```python
import math
print math.sqrt(25)
```

O código acima importará todos os módulos de `math`, para importar apenas o necessário utilizamos `from`.

```python
from math import sqrt
```

Podemos importar todas as funções de `math` dessa forma:

```python
from math import *
```



Datas
---

```python
from datetime import datetime
now = datetime.now()
print now
print now.year
print now.month
print now.day
```

Para imprimir a data no formato brasileiro:

```python
print '%s/%s/%s' % (now.day, now.month, now.year)
```

Imprimindo as horas:

```python
print '%s:%s:%s' % (now.hour, now.minute, now.second)
```



Listas (lists)
---

```python
animals = ["pangolin", "cassowary", "sloth", "dog"];
animals[0]   # 'pangolin'
animals[1]   # 'cassowary'
animals[2]   # 'sloth'
animals[3]   # 'dog'
```

Ao acessar um índice inexistente recebemos um erro.

```python
animals[4]   # IndexError: list index out of range
```

A função `len()` retorna o tamanho da lista.

```python
len(animals) # 4
```

Leia mais sobre [listas](../listas/ "Python - listas(list)").


### range() 

A função `range()` retorna uma lista de inteiros. Seu conteúdo é definido pelos argumentos, veja:

- range(terminal)
- range(start, terminal)
- range(start, terminal, step_size)

Exemplos:

```python
range(4)
[0, 1, 2, 3]

range(2, 8)
[2, 3, 4, 5, 6, 7]

range(2, 13, 3)
[2, 5, 8, 11]
```


Percorrendo (lopping):

```python
for i in range(20):
    print i
```



Dicionários (dictionaries)
---

```python
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
```

Leia mais sobre [dicinonários](../dicionarios-dictionaries/ "Python - dicionários (dctionaries)").



Lambdas
---

Exemplo:

```python
g = lambda x: x * 2
print g(6) 
# 12
```

Para facilitar o entendimento, veja código abaixo, ele é similar.

```python
def f(x):
    return x * 2
print f(6)
# 12
```



OOP - Programação Orientada a Objetos
---

Uma classe consiste da palavra chave `class` seguida de seu nome e da classe herdada entre parênteses.

A palavra `pass` serve para criarmos um classe vazia.

Abaixo, criamos a classe vazia `Foo` que herda de `object`

```python
class Foo(object):
    pass
```

Abaixo, criamos a classe `Triangle` com um método construtor `__init__`

```python
class Triangle(object):
    def __init__(self, angle1, angle2, angle3):
        self.angle1 = angle1
        self.angle2 = angle2
        self.angle3 = angle3
```

Todo método deve aceitar como parâmetro a palavra `self`, que se refere ao próprio objeto.

Abaixo, criamos alguns métodos para nossa classe `Triangle`.

```python
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
```


### Instanciando

Abaixo vemos um exemplo simples de como utilizar (instanciar) uma classe em Python.

```python
class Animal(object):
    def __init__(self, name):
        self.name = name

zebra = Animal("Jeffrey")
print zebra.name
```


### Herança

Um exemplo simples.

```python
class Shape(object):
    def __init__(self, number_of_sides):
        self.number_of_sides = number_of_sides

class Triangle(Shape):
    def __init__(self, side1, side2, side3):
       self.side1 = side1
       self.side2 = side2
       self.side3 = side3
```


### Fontes

- [Python: apresentando a sintaxe (Luciano Ramalho)](https://github.com/pythonprobr/pypratico/raw/master/academia/py_sintaxe.pdf "link-externo")
- [Codeacademy - Python Glossary](http://www.codecademy.com/glossary/python "link-externo")
