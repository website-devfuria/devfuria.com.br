---
layout:      artigo+toc
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

Também podemos inicializar mais de uma variável dessa forma...

```python
>>> a, b = 10, 20
>>> a
10
>>> b
20
```


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
[diferenças entre as versões 2 e 3](https://docs.python.org/3.0/whatsnew/3.0.html#print-is-a-function).


Entradas
---

```python
name  = input("What is your name?")
quest = input("What is your quest?")
color = input("What is your favorite color?")

print("Ah, so your name is %s, your quest is %s, " \
"and your favorite color is %s." % (name, quest, color) )
```


Endentação
---

Python usa endentação como delimitação de bloco, portanto devemos endentar corretamente o código fonte.

Abaixo vemos um código endentado de forma errada:

```python
def spam():
eggs = 12
return eggs

print(spam())
```

Abaixo, vemos o mesmo código corrigido:

```python
def spam():
    eggs = 12
    return eggs

print(spam())
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
if n < 0: print('Valor inválido')
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
<class 'dict'>
```

A função `type()` mostra o tipo do dado, veja alguns exemplos.

```python
type("text")        # <class 'str'>
type(1)             # <class 'int'>
type(0.99)          # <class 'float'>
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
10 ** 2 # print(100)
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

Leia mais sobre [fatiamento de sequências](/python/sequencias-fatiamento/ "Python - Sequências").


### Percorrendo strings (string lopping)

```python
for letter in "python":
    print(letter)

"""
p
y
t
h
o
n
"""
```

Leia mais sobre [strings](/python/strings/ "Python - Strings").


Controle de fluxo (condicionais)
---

```python
if expressao == True:
    print("true")
else:
    print("false")
```

```python
if answer > 5:
    return 1
elif answer < 5:
    return -1
else:
    return 0
```

Leia mais sobre [estruturas condicionais](/python/estruturas-condicionais/ "Python - Estruturas- Condicionais").



Laços de repetição
---

Exemplo com `for`...

```python
lista = ["p", "y", "t", "h", "o", "n"]
for item in lista:
    print item
"""
p
y
t
h
o
n
"""
```

Exempo com `while`...

```python
count = 0
while count <= 5:
    print(count)
    count += 1
# 0 1 2 3 4 5

```

Leia mais sobre [laços de repetição](/python/lacos-de-repeticao/ "Python - Laços de repetição").




Funções
---

```python
def foo():
    return "retorno da função"

print(foo()) # "retorno da função"
```

Outro exemplo

```python
def add_two(a, b):
    c = a + b
    return c
```

Leia mais sobre [funções](/python/functions/ "Python - funções(functions)").



Imports
---

Para importar um módulo utilizamos o `import`.

```python
import math
print(math.sqrt(25))
```

O código acima importará todos os módulos de `math`, para importar apenas o necessário utilizamos `from`.

```python
from math import sqrt
```

No terminal, para diminuir a digitação, costuma-se importar todas as funções de `math` dessa forma:

```python
from math import *
```

Em geral, a prática do `import *` de um módulo ou pacote é desaprovada, uma vez que muitas vezes dificulta a leitura do
código.

Leia mais sobre [imports](/python/imports/ "Importando módulos no Python (imports)").



Datas
---

```python
from datetime import datetime
now = datetime.now()
print(now)
print(now.year)
print(now.month)
print(now.day)
```

Para imprimir a data no formato brasileiro:

```python
print('%s/%s/%s' % (now.day, now.month, now.year))
```

Imprimindo as horas:

```python
print('%s:%s:%s' % (now.hour, now.minute, now.second))
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

Leia mais sobre [listas](/python/listas/ "Python - listas(list)").


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
    print(i)
```



Dicionários (dictionaries)
---

```python
people = {
    "name": "joao",
    "age": 39,
    "skylls": ['python', 'ruby', 'php']
}

print(people['name'])
print(people['age'])
print(people['skylls'])

"""
joao
40
['python', 'ruby', 'php']
"""
```

Leia mais sobre [dicinonários](/python/dicionarios-dictionaries/ "Python - dicionários (dctionaries)").



Lambdas
---

Exemplo:

```python
g = lambda x: x * 2
print(g(6))
# 12
```

Para facilitar o entendimento, veja código abaixo, ele é similar.

```python
def f(x):
    return x * 2
print(f(6))
# 12
```



OOP - Programação Orientada a Objetos
---

Abaixo vemos um exemplo de classe em Python.

```python
class Triangle(object):

    def __init__(self, angle1, angle2, angle3):
        self.angle1 = angle1
        self.angle2 = angle2
        self.angle3 = angle3

    def sum_triangle(self):
        return self.angle1 + self.angle2 + self.angle3

    def check_angles(self):
        if(self.triangle() == 180):
            return True
        else:
            return False
```

Abaixo vemos um exemplo simples de como __instanciar__ uma classe em Python.

```python
figure = Triangle(30, 40, 50)
```

Leia mais sobre [Programação Orientada a Objetos](/python/programacao-orientada-objetos/ "Programação Orientada a Objetos em Python").



Fontes
---

- [Python: apresentando a sintaxe (Luciano Ramalho)](https://github.com/pythonprobr/pypratico/raw/master/academia/py_sintaxe.pdf)
- [Codeacademy - Python Glossary](http://www.codecademy.com/glossary/python)
