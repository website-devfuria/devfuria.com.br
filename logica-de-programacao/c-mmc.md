---
layout:      grid93-article
title:       "MMC mínimo múltiplo comum "
description: Exercício de lógica de programação ara descubrir o MMC (mínimo múltiplo comum).
menu:        logica-exerc-nivel-03
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para calcular o MMC (mínimo múltiplo comum) entre dois números.



Linguagem C
---

### Primeira solução

Se calcularmos o __MDC__ poderemos utilizar a propriedade:

"Sejam __a__ e __b__ dois ou mais números naturais não nulos temos que MMC(a, b) . MDC(a, b) = a . b."

Invertendo as contas, temos MMC = a . b / MDC


```c
#include <stdio.h>
#include <assert.h>

//
// Função mmc
//
int mmc(int num1, int num2) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    // 2 * 2 * 3 * 5 = 60
    assert(60 == mmc(12, 20));

    return 0;
}
```


### Primeira solução na linguagem C

```c
//
// Função mmc
//
int mmc(int num1, int num2) {

    int resto, a, b;

    a = num1;
    b = num2;

    do {
        resto = a % b;

        a = b;
        b = resto;

    } while (resto != 0);

    return ( num1 * num2) / a;
}
```


### Segunda solução na linguagem C

```c
//
// FUnção mmc
//
int mmc(int num1, int num2) {

    int mmc, aux, i;

    for (i = 2; i <= num2; i++) {
        aux = num1 * i;
        if ((aux % num2) == 0) {
            mmc = aux;
            i = num2 + 1;
        }
    }
    return mmc;
}
```