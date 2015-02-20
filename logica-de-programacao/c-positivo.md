---
layout:      grid93-article
title:       "Valor positivo ou negativo"
description: Exercício de lógica de programação para descobrir se um número é positivo ou negativo.
menu:        logica-exerc-nivel-02
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

    assert(ehPositivo(8) == 0);
    assert(ehPositivo(7) != 0);
    assert(ehPositivo(0) == 0);

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
    return numero % 2;
}

//
// Testes
//
int main (){

    assert(ehPositivo(8) == 0);
    assert(ehPositivo(7) != 0);
    assert(ehPositivo(0) == 0);

    return 0;
}
```