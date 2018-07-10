---
title:       Valor par ou ímpar
description: Exercício de lógica de programação para descobrir se um número é par ou ímpar.
capitulo:    logica-nivel-2
ordem:       2
---



Exercício de lógica de programação
---

Crie uma função que descubra se um valor é par ou ímpar.

Neste exercício nós utilizarmos o operador módulo `%`.

A operação módulo encontra o resto da divisão de um número por outro.

Dados dois números a (o dividendo) e b o divisor, a modulo b (a mod b) é o resto da divisão de a por b.

Por exemplo, 7 mod 3 seria 1, enquanto 9 mod 3 seria 0.

Portanto sua função deve...

- retornar 1 ou mais caso negativo (é ímpar) e
- retornar 0 caso positivo (é par)

<iframe width="560" height="315" src="https://www.youtube.com/embed/zqo-GvxbVQg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

//
// Função que descobre se um número é par ou ímpar
//
int ehPar(int numero) {

}

//
// Testes
//
int main (){

    assert(ehPar(8) == 1);
    assert(ehPar(7) == 0);
    assert(ehPar(0) == 1);

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que descobre se um número é par ou ímpar
//
int ehPar(int numero) {
    if (numero % 2 == 0) {
        return 1;
    } else {
        return 0;
    }
}

//
// Testes
//
int main (){

    assert(ehPar(8) == 1);
    assert(ehPar(7) == 0);
    assert(ehPar(0) == 1);

    return 0;
}
```

Linguagem Python
---

```python
# -*- coding: utf-8 -*-

#
# Função que descobre se um número é par ou ímpar
#
def ehPar(numero):
    pass

#
# Testes
#
assert ehPar(8)
assert not ehPar(7)
assert ehPar(0)
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

#
# Função que descobre se um número é par ou ímpar
#
def ehPar(numero):
    if numero % 2 == 0:
        return True
    else:
        return False

#
# Testes
#
assert ehPar(8)
assert not ehPar(7)
assert ehPar(0)
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Função que descobre se um número é par ou ímpar
//
var ehPar = function(numero) {

}

//
// Testes
//
try {
    assert.ok(ehPar(8));
    assert.ok(!ehPar(7));
    assert.ok(ehPar(0));
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função que descobre se um número é par ou ímpar
//
var ehPar = function(numero) {
    if (numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

//
// Testes
//
try {
    assert.ok(ehPar(8));
    assert.ok(!ehPar(7));
    assert.ok(ehPar(0));
} catch(e) {
    console.log(e);
}
```


