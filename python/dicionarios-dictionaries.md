---
title:       Python - O básico sobre dicionários
description: O básico sobre dicionários (Python)
---

Criando o dicionário;

```python
people = {
    "name": "joao",
    "age": 39,
    "skylls": ['python', 'ruby', 'php']
}
```

Atribuindo valores:

```python
print people['age']= 40
```

Acessando os dados:

```python
print people['name']
print people['age']
print people['skylls']

# joao
# 40
# ['python', 'ruby', 'php']
```

Dicionários também podem ser criados dinamicamente como no exemplo baixo.

```python
dic = {}
dic['name'] = "joao"
dic['age']  = "39"
```


### Percorrendo dicionários (dictionaries looping)

```python
d = {'a': 'apple', 'b': 'berry', 'c': 'cherry'}

for key in d:
    print key + " " + d[key]

"""
a apple
c cherry
b berry
"""
```

Abaixo, mais um exemplo.

```python
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
```



### Funções para dicionários

```python
my_dict = {
    "1": "a",
    "2": "b",
    "3": "c"
}

my_dict.items()  # dict_items([('1', 'a'), ('3', 'c'), ('2', 'b')])
my_dict.keys()   # dict_keys(['1', '3', '2'])
my_dict.values() # dict_values(['a', 'c', 'b'])
```