---
layout:      grid93-article
title:       "Área quadrada "
description: Exercício de lógica de programação resolvido onde o objetivo é encontrar a área quadrada.
menu:        logica-exerc-nivel-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Sabendo que a área quadrada é dada pela multiplicação dos lados, escreva um algoritmo que mostre a área quadrada de
um espaço qualquer.

Exemplo:

* A área de 3x9 é igual a 27
* 3 . 9 = 27



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int lado1, lado2, area;

    //
    // Sua lógica (seu código)
    //



    // Seu teste
    assert(27 == area);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int lado1, lado2, area;

    //
    // Sua lógica (seu código)
    //
    lado1 = 3;
    lado2 = 9;
    area  = lado1 * lado2;

    // Seu teste
    assert(27 == area);

    return 0;
}
```