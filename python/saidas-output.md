---
title:       Python - saídas (output)
description: O básico sobre saídas (output) em Python
---

Para exibirmos o resultado de nosso script utilizamos da função `print()`.

Na versão 2 do Python não era obrigatório o uso de parênteses como no exemplo abaixo.

```python
#
# Python 2
#
print "Welcome to Python!"
```

Já na versão 3 do Python o uso do parênteses é obrigatório, veja...

```python
#
# Python 3
#
print ("Welcome to Python!")
```

Podemos imprimir um inteiro diretamente.

```python
print (5)
```

Podemos realizar algum calculo.

```python
print (2 + 3)
```

Podemos fazer isso com variáveis.

```python
a = 2
b = 3
print ( a + b )
```

Podemos formatar a saída...

```python
>>> print("%.2f" % 5)
5.00
>>> print("%.5f" % 5)
5.00000
```

Podemos compor uma string...

```python
r = "vermelho"
g = "verde"
b = "azul"
print("As cores básicas são: %s, %s e %s" % (r, g, b))
# As cores básicas são: vermelho, verde e azul
```

### Documentação

- [docs.python.org/3.0/library/functions.html#print](https://docs.python.org/3.0/library/functions.html#print "link-externo")
- [docs.python.org/3.0/whatsnew/3.0.html#print-is-a-function](https://docs.python.org/3.0/whatsnew/3.0.html#print-is-a-function "link-externo")
- [docs.pythonsprints.com/python3_porting/py-porting.html#printing](http://docs.pythonsprints.com/python3_porting/py-porting.html#printing "link-externo")