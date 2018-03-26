---
title:       Convertendo listas em strings
description: Aprenda a converter listas em strings (Python)
capitulo:    python-artigos
ordem:       1
---


Para converter um lista em strings...

```python
>>> list = ['primeiro', 'segundo', 'terceiro']
>>> ', '.join(list)
'primeiro, segundo, terceiro'
```

Se você quiser converter um lista de inteiros em um string separadas por vírgula, você pode converter a lista em string...

```python
>>> list = [10, 20, 30]
>>> str(list)
'[10, 20, 30]'
```

.. e retirar os colchetes assim...

```python
>>> str(list).strip('[]')
'10, 20, 30'
```

...ou assim:

```python
>>> str(list)[1:-1]
'10, 20, 30'
```

Agora imagine que você queira transforma a lista em uma string separadas por traços (`-`) ao invés de vírgulas.

Para isso utilize a função interna (bulti in) `map()`.

```python
>>> '-'.join(map(str, list))
'10-20-30'
```
