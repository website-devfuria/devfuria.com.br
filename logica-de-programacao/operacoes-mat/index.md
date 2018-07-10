---
title:       Funções para as 4 operações aritméticas
description: Escreva uma função para cada uma das quatro operações matemáticas simples.
capitulo:    logica-nivel-1
ordem:       0
---



Exercício de lógica de programação
---

Escreva uma função para cada uma das quatro operações matemáticas simples:

- adição,
- subtração,
- multiplicação e
- dividisão



Linguagem C
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/AAil6y5n0Q0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

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

<iframe width="560" height="315" src="https://www.youtube.com/embed/Sgy6VlavxQw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

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


Linguagem JavaScript (Node.js)
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/hz-Js_zoFeQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Funções...
//

var somar = function(num, add) {

}

var subtrair = function(num, sub) {

}

var multiplicar = function(num, mult) {

}

var dividir = function(num, divisor) {

}

//
// Testes
//
try {
    var num = 10;

    assert.equal(12, somar(num, 2));
    assert.equal(8, subtrair(num, 2));
    assert.equal(20, multiplicar(num, 2));
    assert.equal(5, dividir(num, 2));
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Funções...
//

var somar = function(num, add) {
    return num + add;
}

var subtrair = function(num, sub) {
    return num - sub;
}

var multiplicar = function(num, mult) {
    return num * mult;
}

var dividir = function(num, divisor) {
    return num / divisor;
}

//
// Testes
//
try {
    var num = 10;

    assert.equal(12, somar(num, 2));
    assert.equal(8, subtrair(num, 2));
    assert.equal(20, multiplicar(num, 2));
    assert.equal(5, dividir(num, 2));
} catch(e) {
    console.log(e);
}

```

