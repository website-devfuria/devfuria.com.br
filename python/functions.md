---
layout:      grid93-article
title:       Python - O básico de funções
description: O básico de funções em Python
menu:        python-artigos
---


Exemplo de funções.

```python
def foo():
    return "retorno da função"

print foo() # retorno da função
```

Outro exemplo

```python
def add_two(a, b):
    c = a + b
    return c
```

Exemplo anterior simplificado

```python
def add_two(a, b):
    return a + b
```


### Argumentos da função

```python
def biggest_number(*args):
    print max(args)
    return max(args)
```


```python
def smallest_number(*args):
    print min(args)
    return min(args)

biggest_number(-10, -5, 5, 10)
smallest_number(-10, -5, 5, 10)
```

