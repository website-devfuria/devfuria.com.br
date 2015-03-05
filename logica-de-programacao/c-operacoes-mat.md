---
layout:      grid93-article
title:       "Funções para as 4 operações artiméticas "
description: Escreva uma função para cada uma das quatro operações matemáticas simples.
menu:        logica-exerc-nivel-02
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Escreva uma função para cada uma das quatro operações matemáticas simples:

- adição,
- subtrair,
- multiplicar e
- dividir

      
  
Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>


int somar(int num, int add) {

    // Aqui entra a lógica do programa.

}

int subtrair(int num, int sub) {

    // Aqui entra a lógica do programa.

}

int multiplicar(int num, int mult) {

    // Aqui entra a lógica do programa.

}

int dividir(int num, int divisor) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){
    
    int num = 10;
    
	assert(12 == somar(num, 2));
	assert(8 == subtrair(num, 2));
	assert(20 == multiplicar(num, 2));
	assert(5 == dividir(num, 2));
    
	return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

// as funções são tão pequenas e tão concisas que nem precisam de comentários

int somar(int num, int add) {
    return num + add;
}

int subtrair(int num, int sub) {
    return num - sub;
}

int multiplicar(int num, int mult) {
    return num * mult;
}

int dividir(int num, int divisor) {
    return num / divisor;
}

//
// Testes
//
int main (){
    
    int num = 10;
    
	assert(12 == somar(num, 2));
	assert(8 == subtrair(num, 2));
	assert(20 == multiplicar(num, 2));
	assert(5 == dividir(num, 2));
    
	return 0;
}
```  



Linguagem Python
---

```python
# -*- coding: utf-8 -*-

# as funções são tão pequenas e tão concisas
# que nem precisam de comentários

def somar(num, add):
    pass

def subtrair(num, sub):
    pass

def multiplicar(num, mult):
    pass

def dividir(num, divisor):
    pass

#
# Testes
# 
assert 12 == somar(10, 2)
assert 8 == subtrair(10, 2)
assert 20 == multiplicar(10, 2)
assert 5 == dividir(10, 2)
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

# as funções são tão pequenas e tão concisas
# que nem precisam de comentários

def somar(num, add):
    return num + add

def subtrair(num, sub):
    return num - sub

def multiplicar(num, mult):
    return num * mult

def dividir(num, divisor):
    return num / divisor

#
# Testes
# 
assert 12 == somar(10, 2)
assert 8 == subtrair(10, 2)
assert 20 == multiplicar(10, 2)
assert 5 == dividir(10, 2)
```  



Linguagem Python
---

```python
# -*- coding: utf-8 -*-
import math

#
# Retorna o valor de delta
#
def delta(a, b, c):
    pass

#
# Retorna o valor de primeira raiz
#
def raiz1(a, b, c):
    pass

#
# Retorna o valor de segunda raiz
#
def raiz2(a, b, c):
    pass

#
# Testes
#
a = 1
b = 0
c = -16

assert 64 == delta(a, b, c)
assert  4 == raiz1(a, b, c)
assert -4 == raiz2(a, b, c)
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-
import math

#
# Retorna o valor de delta
#
def delta(a, b, c):
    return b * b -4 * a * c

#
# Retorna o valor de primeira raiz
#
def raiz1(a, b, c):
    return (-b + math.sqrt(delta(a, b, c))) / 2 * a

#
# Retorna o valor de segunda raiz
#
def raiz2(a, b, c):
    return (-b - math.sqrt(delta(a, b, c))) / 2 * a

#
# Testes
#
a = 1
b = 0
c = -16

assert 64 == delta(a, b, c)
assert  4 == raiz1(a, b, c)
assert -4 == raiz2(a, b, c)
```