---
title:       Python - O básico sobre string
description: O básico sobre strings em Python
menu:        python-basico
---

Em Python 3 tudo é objeto e uma string é do tipo `str`.

```python
type(s)
# <class 'str'>
```

Podemos acessar uma string pelo seu index.

```python
"python"[0] # 'p'
"python"[1] # 'y'
"python"[2] # 't'
"python"[3] # 'h'
"python"[4] # 'o'
"python"[5] # 'n'
```

Mas não podemos alterar seu valor atribuindo um valor através do índice.

```python
palavra = "foo"
palavra[1] = "r"
# TypeError: 'str' object does not support item assignment
```

String é um objeto iterável.

```python
for letter in "python":
    print letter

"""
p
y
t
h
o
n
"""
```


Podemos fatiar a string.

```python

#
# Nossa string
#
s = "flavio"

#
# Determinado comprimento
#
s[1:4] # 'lav'

#
# Do começo até i
#
s[0:3] # 'fla'
s[:3]  # 'fla'

#
# Acessando pelo final
#
s[-1] # 'o'
s[-2] # 'i'

#
# Acessando completamente
#
s     # 'flavio'
s[:]  # 'flavio'
s[0:] # 'flavio'
```

Leia mais sobre [fatiamento de sequências](../sequencias-fatiamento/ "Python - Sequências").


Concatenamos strings com o sinal `+`, exemplo: `"Spam " + "and" + " eggs"`

Quando concatenamos com um número, precisamos fazer a conversão, exexemplo: `"The value of pi is around " + str(3.14)`

Escapamos (scape) caracters com o sinal `\`, exemplo: `'There\'s a snake in my boot!'`


### Pesquisando a string

Podemos pesquisar um string com o operador `in`, exemplo

```python
"b" in "abc"     # True
"d" in "abc"     # False
"d" not in "abc" # True
"b" not in "abc" # False
```




Métodos comuns para strings
---

### Método len()

Mostra o tamanho da string

```python
s = "foo"
len(s)
# 3
```

### Método upper()

Caixa alta.

```python
"foo".upper() # FOO
```

### Método lower()

Caixa baixa.

```python
"ALFA".lower() # alfa
```


### Método str()

Converte em string.

```python
num = 123
type(num)      # <class 'int'>
type(str(num)) # <class 'str'>
```


### Método isalpha()

Retorna `False` se a string contiver algum caracter que não seja letras

```python
"abc".isalpha()  # True
"1fg".isalpha()  # False
"123".isalpha()  # False
"/+)".isalpha()  # False
```


### Método strip()

Retira espaços em branco no começo e no fim

```python
" sobrando espaços ".strip()      # 'sobrando espaços'
"  sobrando espaços   ".strip()   # 'sobrando espaços'
```


### Método join()

Junta cada item da string com um delimitador especificado.

É o inverso do `split()`.

```python
", ".join("abc")
# 'a, b, c'
```

Aceita listas.

```python
"-".join(['flavio', 'alxandre', 'micheletti'])
# 'flavio-alxandre-micheletti'
```


### Método split()

Separa uma string conforme um delimitador.

É o inverso do `join()`.

```python
s = 'n o m e'
s.split()      # ['n', 'o', 'm', 'e']
s.split(" ")   # ['n', 'o', 'm', 'e']
s.split("")    # ValueError: empty separator
```



Fonte
---

- [Python 3 » Documentation » The Python Standard Library » Text Processing Services »](https://docs.python.org/3.4/library/string.html "link-externo")
- [Developers Google Python Strings](https://developers.google.com/edu/python/strings "link-externo")