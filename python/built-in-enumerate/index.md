---
title:       Python - Função interna enumarate()
description: Exemplos práticos sobre a função interna enumarate()
capitulo:    python-built-in
ordem:       2
---

A função `enumarate()` retorna um objeto iterável.

```python
>>> seasons = ['Spring', 'Summer', 'Fall', 'Winter']
>>> enumerate(seasons)
<enumerate object at 0x7fb6d35f4ea0>
```

Se aplicarmos outra função interna [list](/python/built-in/list/), obteremos o seguinte resultado...

```python
>>> list(enumerate(seasons))
[(0, 'Spring'),
 (1, 'Summer'),
 (2, 'Fall'),
 (3, 'Winter')]
```

Obs: o terminal do Python não apresenta os dados formatados como exibido acima, eu que ajeitei para facilitar a
visualização.

Também podemos definir o início do índice.

```python
>>> list(enumerate(seasons, start=1))
[(1, 'Spring'),
 (2, 'Summer'),
 (3, 'Fall'),
 (4, 'Winter')]
```

Aparentemente você deve estar se perguntado: "onde eu utilizo isso? Parece meio inútil."

Pelo contrário! É muito útil, vejamos um exemplo.

Imagine que você irá percorrer a seguinte lista.

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

Se você precisa-se, além do valores, das chaves (key) de cada valor, como faria para resolver isso?

Com a função `enumarate()`, é claro!

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


