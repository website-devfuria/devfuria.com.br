---
title:       Antecessor e sucessor de um número qualquer
description: Exercício de lógica de programação para calcular o sucessor e o antecessor de um número qualquer.
capitulo:    logica-nivel-0
ordem:       3
---


Exercício de lógica de programação
---

Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.



Linguagem C
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/XC1ciNZWtd8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int antecessor(int numero) {
    return 0;
}

int sucessor(int numero) {
    return 0;
}

int main (){

    //
    // Testes
    //
    assert(9 == antecessor(10));
    assert(11 == sucessor(10));

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int antecessor(int numero) {
    return numero - 1;
}

int sucessor(int numero) {
    return numero + 1;
}

int main (){

    //
    // Testes
    //
    assert(9 == antecessor(10));
    assert(11 == sucessor(10));

    return 0;
}
```


Linguagem Python
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/FTQYhHKK7QA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

def antecessor(numero):
    pass

def sucessor(numero):
    pass


#
# Testes
#
assert antecessor(10) == 9
assert sucessor(10) == 11
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

def antecessor(numero):
    return numero - 1

def sucessor(numero):
    return numero + 1


#
# Testes
#
assert antecessor(10) == 9
assert sucessor(10) == 11
```


Linguagem JavaScript (Node.js)
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/-RVvi1sYes4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

var antecessor = function(numero) {
    return 0;
}

var sucessor = function(numero) {
    return 0;
}


//
// Seu teste
//
try {
    assert.equal(9, antecessor(10), "deve retornar o antecessor");
    assert.equal(11, sucessor(10), "deve retornar o sucessor");
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

var antecessor = function(numero) {
    return numero - 1;
}

var sucessor = function(numero) {
    return numero + 1;
}


//
// Seu teste
//
try {
    assert.equal(9, antecessor(10), "deve retornar o antecessor");
    assert.equal(11, sucessor(10), "deve retornar o sucessor");
} catch(e) {
    console.log(e);
}

```

