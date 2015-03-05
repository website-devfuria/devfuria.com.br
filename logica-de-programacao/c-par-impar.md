---
layout:      grid93-article
title:       "Valor par ou ímpar"
description: Exercício de lógica de programação para descobrir se um número é par ou ímpar.
menu:        logica-exerc-nivel-02
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
    assert(ehPar(7) != 0);
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
    assert(ehPar(7) != 0);
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
assert ehPar(7) != 0
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
assert ehPar(7) != 0
assert ehPar(0) == 0
```