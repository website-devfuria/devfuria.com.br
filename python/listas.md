---
layout:      grid93-article
title:       Python - O básico de listas
description: O básico de lista em Python
menu:        python-artigos
---

Abaixo temos um exemplo de uma lista:

```python
animals = ["pangolin", "cassowary", "sloth", "dog"];
animals[0]   # 'pangolin'
animals[1]   # 'cassowary'
animals[2]   # 'sloth'
animals[3]   # 'dog'
```

Contamos o índice da lista a partir do zero, veja:

```python
+-------------+-------------+-------------+-------------+-------------+
| "pangolin"  | "cassowary" |   "sloth"   |    "dog"    |lanca um erro|
+-------------+-------------+-------------+-------------+-------------+
      0              1             2              3            4
```

Ao acessar um índice inexistente recebemos um erro.

```python
animals[4]   # IndexError: list index out of range
```

Podemos fatiar (leia-se acessar) um lista de diversas formas, veja a matéria sobre
[fatiamento de sequencias](../sequencias-fatiamento/ "Python - Sequencias").



### Percorrendo a lista (list looping)

Abaixo vemos um exemplo de como percorrer um lista na sua forma mas simples.

```python
myList = [1, 2, 3, 4]
for number in myList:
    print number * 2
# 2
# 4
# 6
# 8
```

Abaixo incrementamos a implementação com a função interna [enumarate()](https://docs.python.org/3.4/library/functions.html#enumerate "link-externo").
ela irá numerar a lista.

```python
choices = ['pizza', 'pasta', 'salad', 'nachos']

print 'Your choices are:'
for index, item in enumerate(choices):
    print index, item

"""
Your choices are:
0 pizza
1 pasta
2 salad
3 nachos
"""
```

Abaixo incrementamos o exemplo utilizando a função interna [zip()](https://docs.python.org/3.4/library/functions.html#zip "link-externo"),
ela casa (agrega) as duas listas.

```python
list_a = [6, 7, 8, 9]
list_b = [1, 2, 3, 4, 5]

for x in zip(list_a, list_b):
    print(x)
"""
(6, 1)
(7, 2)
(8, 3)
(9, 4)
"""
```




### Juntando listas (join lists)

```python
m = [1, 2, 3]
n = [4, 5, 6]
o = m + n
print(o) # [1, 2, 3, 4, 5, 6]

o += [7, 8, 9]
print(o) # [1, 2, 3, 4, 5, 6, 7, 8, 9]
```



Funções nativas para listas
---

### append()

```python
nums = ["um"]
print(nums) # ['um']

nums.append("dois")
nums.append("tres")
nums.append("quatro")
print(nums) # ['um', 'dois', 'tres', 'quatro']
```


### index()

```python
animals = ["ant", "bat", "cat"]
print animals.index("bat") # 1
```


### insert()

```python
animals = ["ant", "bat", "cat"]
animals.insert(1, "dog")
print(animals) # ["ant", "dog", "bat", "cat"]
```


### remove()

Remove através do valor
```python
animals = ["ant", "bat", "cat"]
animals.remove("ant")
print(animals) # ["bat", "cat"]
```


### pop()

Remove através do índice (retorna o valor removido).

```python
animals = ["ant", "bat", "cat"]
animals.pop(0) # 'ant'
print(animals) # ["bat", "cat"]
```

Semelhante a utilização de `del()`:

```python
animals = ["ant", "bat", "cat"]
del(animals[0])
print(animals) # ["bat", "cat"]
```


### sort()

```python
lista = ["c", "b", "a"]
print(lista) # ['c', 'b', 'a']

lista.sort()
print(lista) # ['a', 'b', 'c']
```

Para ordenar uma lista também é possível utilizar a função interna
[sorted()](https://docs.python.org/3.4/library/functions.html#sorted "link-externo"), exemplo:

```python
sorted([5, 2, 3, 1, 4]) # [1, 2, 3, 4, 5]
```

Uma observação importante é que a função `sort()` não retorna a lista, então...

```python
lista = ["c", "b", "a"]
print(lista.sort()) # None
```

... já a função `sorted()` retorna a lista:
```python
lista = ["c", "b", "a"]
print(sorted(lista)) # ['a', 'b', 'c']
```

