---
layout:      materia
title:       "Maior e menor índice do vetor - linguagem c"
description: Exercício de lógica de programação para descobrir o índice do maior e o menor valor do vetor.
---

Dado um vetor qualquer sem valores repetidos, descubra qual é o índice do maior valor.

Utilize vetores e o laço "do-while".


### Código completo (maior valor)

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5], i = 0, iMaior;

    vetor[0] = 6;
    vetor[1] = 10;
    vetor[2] = 4;
    vetor[3] = 21;
    vetor[4] = 9;

    do {
        if (vetor[i] > vetor[iMaior]) {
            iMaior = i;
        }
        i++;
    } while (i < 5);

    assert(3 == iMaior);
    return 0;
}
{% endhighlight %}



Índice do menor valor
---

O problema é o mesmo, a diferênça é que vamos descobrir qual é o menor valor.

### Código completo (menor valor)

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5], i = 0, iMenor;

    vetor[0] = 6;
    vetor[1] = 10;
    vetor[2] = 4;
    vetor[3] = 21;
    vetor[4] = 9;

    do {
        if (vetor[i] < vetor[iMenor]) {
            iMenor = i;
        }
        i++;
    } while (i < 5);

    assert(2 == iMenor);
    return 0;
}
{% endhighlight %}
