---
layout:      grid93-article
title:       Valor positivo ou negativo
description: Exercício de lógica de programação para descobrir se um número é positivo ou negativo.
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---
     
Crie uma função que descubra se um valor é positivo ou negativo (considere o valor zero como positivo)

        

Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

// Função que descobre se um número é positivo ou negativo
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
int ehPositivo(int numero) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    assert(ehPositivo(100) == 1);
    assert(ehPositivo(0) == 1);
    assert(ehPositivo(-100) == 0);

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

// Função que descobre se um número é positivo ou negativo
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
int ehPositivo(int numero) {
	if(numero >= 0) {
		return 1;
	} else {
		return 0;
	}
}

//
// Testes
//
int main (){

    assert(ehPositivo(100) == 1);
    assert(ehPositivo(0) == 1);
    assert(ehPositivo(-100) == 0);

    return 0;
}
```



Linguagem Python
---

```python
# -*- coding: utf-8 -*-

# Função que descobre se um número é positivo ou negativo
#
# retornará 1 caso positivo
# retornará 0 caso negativo
#
def ehPositivo(numero):
    pass


#
# Seus testes
#
assert ehPositivo(100) == 1
assert ehPositivo(0) == 1
assert ehPositivo(-100) == 0
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

# Função que descobre se um número é positivo ou negativo
#
# retornará 1 caso positivo
# retornará 0 caso negativo
#
def ehPositivo(numero):
	if numero >= 0:
		return 1
	else:
		return 0

#
# Seus testes
#
assert ehPositivo(100) == 1
assert ehPositivo(0) == 1
assert ehPositivo(-100) == 0
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

// Função que descobre se um número é positivo ou negativo
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
var ehPositivo = function(numero) {





}

//
// Testes
//
try {
    assert.equal(1, ehPositivo(100));
    assert.equal(1, ehPositivo(0));
    assert.equal(0, ehPositivo(-100));
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

// Função que descobre se um número é positivo ou negativo
//
// retornará 1 caso positivo
// retornará 0 caso negativo
//
var ehPositivo = function(numero) {
    if(numero >= 0) {
        return 1;
    } else {
        return 0;
    }
}

//
// Testes
//
try {
    assert.equal(1, ehPositivo(100));
    assert.equal(1, ehPositivo(0));
    assert.equal(0, ehPositivo(-100));
} catch(e) {
    console.log(e);
}
```

{% include /menus/logica-feedback.html %}