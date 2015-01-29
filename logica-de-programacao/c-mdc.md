---
layout:      grid93-article
title:       "MDC máximo divisor comum <small>(linguagem C)</small>"
description: Exercício de lógica de programação ara descubrir o MDC (máximo divisor comum).
menu:        logica-exerc-nivel-03
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para calcular o MDC (máximo divisor comum) entre dois números.

Utilize o método de divisões sucessivas.


### Código completo

```c
#include <stdio.h>
#include <assert.h>

int mdc(int num1, int num2) {

    int resto;

    do {
        resto = num1 % num2;

        num1 = num2;
        num2 = resto;

    } while (resto != 0);

    return num1;
}

int main() {
    assert(3 == mdc(24, 9));
    assert(10 == mdc(30, 20));
    return 0;
}
```