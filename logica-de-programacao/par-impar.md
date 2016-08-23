---
title:       Valor par ou ímpar
description: Exercício de lógica de programação para descobrir se um número é par ou ímpar.
serie:       Lógica Nível 2
ordem:       2
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---
     
Crie uma função que descubra se um valor é par ou ímpar.

        

Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

// Função que descobre se um número é par ou ímpar
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
int ehPar(int numero) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    assert(ehPar(8) == 0);
    assert(ehPar(7) == 1);
    assert(ehPar(0) == 0);

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

// Função que descobre se um número é par ou ímpar
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
int ehPar(int numero) {
    return numero % 2;
}

//
// Testes
//
int main (){

    assert(ehPar(8) == 0);
    assert(ehPar(7) == 1);
    assert(ehPar(0) == 0);

    return 0;
}
```

Linguagem Python
---

```python
# -*- coding: utf-8 -*-

# Função que descobre se um número é par ou ímpar
#
# retornará 1 caso positivo
# retornará 0 caso negativo
#
def ehPar(numero):
	pass

#
# Testes
#
assert ehPar(8) == 0
assert ehPar(7) == 1
assert ehPar(0) == 0
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

# Função que descobre se um número é par ou ímpar
#
# retornará 1 caso positivo
# retornará 0 caso negativo
#
def ehPar(numero):
	return numero % 2

#
# Testes
#
assert ehPar(8) == 0
assert ehPar(7) == 1
assert ehPar(0) == 0
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

// Função que descobre se um número é par ou ímpar
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
var ehPar = function(numero) {



}

//
// Testes
//
try {
    assert.equal(0, ehPar(8));
    assert.equal(1, ehPar(7));
    assert.equal(0, ehPar(0));
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

// Função que descobre se um número é par ou ímpar
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
var ehPar = function(numero) {
    return numero % 2;
}

//
// Testes
//
try {
    assert.equal(0, ehPar(8));
    assert.equal(1, ehPar(7));
    assert.equal(0, ehPar(0));
} catch(e) {
    console.log(e);
}

``` 


{% include /menus/logica-feedback.html %}