---
title:       Maior que 10
description: Exercício de lógica de programação para descobrir se valor é maior ou menor que 10.
capitulo:    logica-nivel-2
ordem:       4
---


Exercício de lógica de programação
---

Crie uma função que descubra se um valor é maior ou menor que 10.

<iframe width="560" height="315" src="https://www.youtube.com/embed/OmAbfIa7IfI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

// Função que descobre se um número é ou não maior que 10
//
// retornará 1 caso seja maior
// retornará 0 caso seja menor
//
int ehMaiorQue10(int valorQualquer) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    assert(1 == ehMaiorQue10(17));
    assert(0 == ehMaiorQue10(9));

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

// Função que descobre se um número é ou não maior que 10
//
// retornará 1 caso seja maior
// retornará 0 caso seja menor
//
int ehMaiorQue10(int valorQualquer) {
    if (valorQualquer > 10) {
        return 1;
    } else {
        return 0;
    }
}

//
// Testes
//
int main (){

    assert(1 == ehMaiorQue10(17));
    assert(0 == ehMaiorQue10(9));

    return 0;
}
```



Linguagem Python
---

```python
# -*- coding: utf-8 -*-

# Função que descobre se um número é ou não maior que 10
#
# retornará 1 caso seja maior
# retornará 0 caso seja menor
#
def ehMaiorQue10(valorQualquer):
    pass

#
# Testes
#
assert 1 == ehMaiorQue10(17)
assert 0 == ehMaiorQue10(9)
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

# Função que descobre se um número é ou não maior que 10
#
# retornará 1 caso seja maior
# retornará 0 caso seja menor
#
def ehMaiorQue10(valorQualquer):
    if valorQualquer > 10:
        return 1
    else:
        return 0

#
# Testes
#
assert 1 == ehMaiorQue10(17)
assert 0 == ehMaiorQue10(9)
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

// Função que descobre se um número é ou não maior que 10
//
// retornará 1 caso seja maior
// retornará 0 caso seja menor
//
var ehMaiorQue10 = function(valorQualquer) {




}

//
// Testes
//
try {
    assert.equal(1, ehMaiorQue10(17));
    assert.equal(0, ehMaiorQue10(9));
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função que descobre se um número é ou não maior que 10
//
// retornará 1 caso seja maior
// retornará 0 caso seja menor
//
var ehMaiorQue10 = function(valorQualquer) {
    if (valorQualquer > 10) {
        return 1;
    } else {
        return 0;
    }
}

//
// Testes
//
try {
    assert.equal(1, ehMaiorQue10(17));
    assert.equal(0, ehMaiorQue10(9));
} catch(e) {
    console.log(e);
}

```

