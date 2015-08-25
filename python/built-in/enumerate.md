---
layout:      grid12-article
title:       Python - Função interna enumarate
description: Exemplos práticos sobre a função interna enumarate
---

A função `enumarate()` retorna um objeto iterável.

```python
>>> seasons = ['Spring', 'Summer', 'Fall', 'Winter']
>>> enumerate(seasons)
<enumerate object at 0x7fb6d35f4ea0>
```

Se aplicarmos outra função interna [list](/python/built-in/list/) obteremos o seguinte resultado...

```python
>>> list(enumerate(seasons))
[(0, 'Spring'), (1, 'Summer'), (2, 'Fall'), (3, 'Winter')]
```
Podemos também definir o início do índice.

```python
>>> list(enumerate(seasons, start=1))
[(1, 'Spring'), (2, 'Summer'), (3, 'Fall'), (4, 'Winter')]
```

{% include /menus/python-built-in.html %}