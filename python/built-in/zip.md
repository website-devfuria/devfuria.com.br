---
layout:      grid12-article
title:       Python - Função interna zip()
description: Exemplos práticos sobre a função interna zip()
---

> Esta função retorna uma lista de tuplas, onde a i-ésima tupla contém o i-ésimo elemento de cada um dos argumentos.
>
> (documentação Python)

Não entendeu nada?

Tudo bem, eu também não. É melhor vermos os exemplos.

```python
>>> x = [1, 2, 3]
>>> y = [4, 5, 6]
>>> for t in zip(x, y):
...   print(t)
... 
(1, 4)
(2, 5)
(3, 6)
```

A função retorna uma sequência de tuplas.

Na verdade se olharmos para a função veremos que ela aponta para o objeto instanciado, veja abaixo.

```python
>>>zip(x, y)
<zip object at 0x7faded7b3608>
```

Para vermos a lista devemos passá-la para a função interna [list()](/python/built-in/list).

```python
>>> list(zip(x, y))
[(1, 4), (2, 5), (3, 6)]
```


### Exemplo de uso

Imagine que você queira inverter os valores e chaves de um dicionário.

Você tem um dicionário com os valores de ações e seus preços como o exemplo abaixo.

```python
prices = {
    'ACME': 45.23,
    'AAPL': 612.78,
    'IBM': 205.55,
    'HPQ': 37.20,
    'FB': 10.75,
}
```

Para inverter o dicionário acima fazemos...

```python
>>> prices_invertido = list(zip(prices.values(), prices.keys()))
>>> for t in prices_invertido:
...   print(t)
... 
(45.23, 'ACME')
(205.55, 'IBM')
(37.2, 'HPQ')
(10.75, 'FB')
(612.78, 'AAPL')
>>> 
```

Mas repare que o retorno é uma lista (e não um dicionário).

```python
>>> list(zip(prices.values(), prices.keys()))
[(45.23, 'ACME'), (205.55, 'IBM'), (37.2, 'HPQ'), (10.75, 'FB'), (612.78, 'AAPL')]
```


### Outros detalhes

Lista de tamanhos diferentes serão equiparadas e a diferença entre elas será desconsiderado.

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


{% include /menus/python-built-in-index.html %}