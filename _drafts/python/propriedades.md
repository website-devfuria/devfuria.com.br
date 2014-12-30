---
layout:      grid12-article
title:       Python - propriedades
description: Python - propriedades
---


```python
class Car(object):
    estado = "desconhecido"
```

```python
porsche = Car()
ferrari = Car()
bmw = Car()
```

```python
porsche.estado = "usado"
ferrari.estado = "novo"
```

```python
print porsche.estado # usado
print ferrari.estado # novo
print bmw.estado     # desconhecido
```









