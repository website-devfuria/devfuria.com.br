---
layout:      grid93-article
title:       Python - Laços de repetição
description: O básico sobre laços de repetição em Python
menu:        python-basico
---

### for

Para percorrer sequências previamente conhecidas utilize o laço `for`.

O que é mesmo uma sequência? 

Sequências são coleções ordenadas embutidas: strings, [listas](/python/listas/), tuplas e buffers.

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

Se for necessário um índice numérico, utilize a função interna [enumerate](/python/built-in/enumerate).

```python
for key, value in enumerate(["p", "y", "t", "h", "o", "n"]):
    print key, value

"""
0 p
1 y
2 t
3 h
4 o
5 n
"""
```

Podemos utilizar o laço `for` com outras funções como por exemplo o [range]()

```python
for i in range(5):
    print(i)

"""
0
1
2
3
4
"""
```



### while

Um laço simples com `while`.

```python
count = 0
while count <= 5:
    print(count)
    count += 1

# 0 1 2 3 4 5
```

Exemplo com `break`.

```python
count = 0
while count <= 5:
    print(count)
    count += 1
    if count > 3: break

# 0 1 2 3
```



### continue e break

Para __iniciar__ imediatamente a próxima volta do loop, use o comando `continue`.

Para __encerrar__ imediatamente o loop, use o comando `break`




### for-else ? while-else ?

Esquisito, rsss! Mas é isso mesmo.

Em Python podemos colocar um `else` no laço de repetição e que será executado no final da iteração.

```python

#
# while
#
count = 0
while count <= 5:
    print(count)
    count += 1
else:
    print('após iteração')

#
# for
#
for i in range(5):
    print(i)
else:
    print('após iteração')
```


Fonte
---

- [Slide 50 de "Python: apresentando a sintaxe" (Luciano Ramalho)](https://github.com/pythonprobr/pypratico/raw/master/academia/py_sintaxe.pdf "link-externo")
