---
layout:      grid93-article
title:       Somando números<br />(recursão)
description: faça um algoritmo que some os dígitos de 1 até n
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}


Exercício de lógica de programação
---

Utilizando o conceito de recursão, faça um algoritmo que some os dígitos de 1 até n, por exemplo:

    add(5) = 15 = 1 + 2 + 3 + 4 + 5
    add(4) = 10 = 1 + 2 + 3 + 4
    add(3) =  6 = 1 + 2 + 3
    

__Comentários__: 

Já vimos no artigo anterior uma introdução sobre a recursividade (algoritmos de recursão).

Este exercício se parece com a sequência de Fibonacci, parece mas não é! Cuidado para não confundir.


Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

int add(int m) {
    //
    // Aqui entra a sua lógica
    //
}

void main() {
    int sum;
    assert(1 == add(1));
    assert(3 == add(2));
    assert(6 == add(3));
    assert(10 == add(4));
    assert(15 == add(5));
    assert(21 == add(6));
}
```


### Solução na linguagem C

```c
int add(int m) {
    int sum;
    if (m == 1)
        return 1;
    else
        sum = m + add(m - 1);
    return (sum);
}
```