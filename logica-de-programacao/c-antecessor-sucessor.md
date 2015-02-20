---
layout:      grid93-article
title:       "Antecessor e sucessor de um número qualquer "
description: Exercício de lógica de programação resolvido onde o objetivo é calcular o sucessor e o antecessor de um número qualquer.
menu:        logica-exerc-nivel-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.



Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

int main (){

    int numero, antecessor, sucessor;

    //
    // Sua lógica (seu código)
    //



    // Seu teste
    assert(9 == antecessor);
    assert(11 == sucessor);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int numero, antecessor, sucessor;

    //
    // Sua lógica (seu código)
    //
    numero     = 10;
    antecessor = numero - 1;
    sucessor   = numero + 1;

    // Seu teste
    assert(9 == antecessor);
    assert(11 == sucessor);

    return 0;
}
```