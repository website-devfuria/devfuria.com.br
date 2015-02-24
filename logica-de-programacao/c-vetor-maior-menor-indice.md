---
layout:      grid93-article
title:       "Maior e menor índice do vetor "
description: Exercício de lógica de programação para descobrir o índice do maior e o menor valor do vetor.
menu:        logica-exerc-nivel-04v
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Dado um vetor qualquer sem valores repetidos, descubra qual é o __índice do maior valor__ e o __índice do menor valor__.

Utilize vetores e o laço "do-while".



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main() {


    // Aqui entra a lógica do programa.


    //
    // teste do maior índice
    //
    assert(3 == iMaior);

    //
    // teste do menor índice
    //
    assert(2 == iMenor);

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5], i = 0, iMaior = 0, iMenor = 0;

    vetor[0] = 6;
    vetor[1] = 10;
    vetor[2] = 4;
    vetor[3] = 21;
    vetor[4] = 9;

    do {

        // descobre o maior índice
        if (vetor[i] > vetor[iMaior]) {
            iMaior = i;
        }

        // descobre o menor índice
        if (vetor[i] < vetor[iMenor]) {
            iMenor = i;
        }

        i++;

    } while (i < 5);

    //
    // teste do maior índice
    //
    assert(3 == iMaior);

    //
    // teste do menor índice
    //
    assert(2 == iMenor);

    return 0;
}
```
