---
layout:      materia
title:       "MMC mínimo múltiplo comum - linguagem c"
description: Exercício de lógica de programação ara descubrir o MMC (mínimo múltiplo comum).
---

Faça um programa para calcular o MMC (mínimo múltiplo comum) entre dois números.

Primeira solução
---

Se calcularmos o __MDC__ poderemos utilizar a propriedade:

"Sejam __a__ e __b__ dois ou mais números naturais não nulos temos que MMC(a, b) . MDC(a, b) = a . b."

Invertendo as contas, temos MMC = a . b / MDC


{% highlight c %}
#include <stdio.h>
#include <assert.h>

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

int main() {

    // 2 * 2 * 3 * 5 = 60
    assert(60 == mmc(12, 20));

    return 0;
}



Segunda solução
---



{% endhighlight %}
{% highlight c %}
#include <stdio.h>
#include <assert.h>

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

int main() {

    // 2 * 2 * 3 * 5 = 60
    assert(60 == mmc(12, 20));

    return 0;
}
{% endhighlight %}