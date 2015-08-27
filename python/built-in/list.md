---
layout:      grid12-article
title:       Python - Função interna list()
description: Exemplos práticos sobre a função interna list()
---

A função interna `list` é a representação do tipo lista, é a classe `list` e muito útil quando queremos converter outras
sequências (iterables) em lista. Veja algumas conversões.

Podemos converte uma string em uma lista.

```python
>>> list("foo")
['f', 'o', 'o']
```

Podemos converte tuplas em lista.

```python
>>> list((1, 2, 3))
[1, 2, 3]
```

O retorno da função `range()` não é uma lista e sim uma sequência do tipo range. 

```python
>>> type(range(0, 10, 2))
<class 'range'>
```

Para transformar essa sequência em uma lista utilizamos a função `list()`.

```python
>>> list(range(0, 10, 2))
[0, 2, 4, 6, 8]
```

{% include /menus/python-built-in.html %}