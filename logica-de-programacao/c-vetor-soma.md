---
layout:      grid93-article
title:       "Função para somar vetor "
description: "Exercício de lógica de programação: criar função para somar vetor."
menu:        logica-exerc-nivel-04v
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Crie uma função que retorna a soma de um vetor qualquer




Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna a soma de dois vetores
//
int retSomaVetor(int vt[], int i) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {
    int vetor[4];

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 0;
    assert(60 == retSomaVetor(vetor, 4));

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 40;
    assert(100 == retSomaVetor(vetor, 4));

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna a soma de dois vetores
//
int retSomaVetor(int vt[], int i) {
    int soma;
    
    while (i > 0) {
        soma += vt[i - 1];
        i--;
    }

    return soma;
}

//
// Testes
//
int main() {
    int vetor[4];

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 0;
    assert(60 == retSomaVetor(vetor, 4));

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 40;
    assert(100 == retSomaVetor(vetor, 4));

    return 0;
}
```