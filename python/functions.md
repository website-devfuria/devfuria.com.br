---
layout:      grid93-article
title:       Python - O básico de funções
description: O básico de funções em Python
menu:        python-basico
---


A palavra `def` define o início da função

Juntamente com a palavra `pass` podemos criar uma função que não faz absolutamente nada.

```python
def foo():
    pass
```
O comando `return` interrompe a execução da função e define o retorno

Exemplo de funções.

```python
def foo():
    return "retorno da função"
```

A funções aceitam Doc Strings, strings que estão associadas a uma estrutura do Python e são colocadas dentro do corpo 
da função, geralmenteno começo. O objetivo das Doc Strings é servir de documentação para aquela estrutura.
(Borges, Python Para desenvolvedores, pag. 52)

```python
def foo():
    """ Exemplo de Doc strings
    """
    return "retorno da função"
```

Os argumentos definidos na assinatura da função são obrigatórios, veja o exemplo abaixo.

```python
def juntar(parte1, parte2):
    return parte1 + " " + parte2
```

Podemos passar argumentos posicionados, a ordem é importante.

```python
juntar("Hello", "world")
```

Ou podemos passar os nomes das variáveis junto com os valores, dessa forma a ordem não importa.

```python
juntar(parte2="world", parte1=""Hello)
```

Podemos utilizar valores padrão (default, lê-se 'dêfú').

```python
def juntar(parte1='Hello', parte2='world'):
    return parte1 + " " + parte2
```

E então, chamamos podemos chamar nossa função sem parâmetro algum.

```python
juntar()
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

