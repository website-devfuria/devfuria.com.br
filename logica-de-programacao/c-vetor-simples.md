---
layout:      grid93-article
title:       "Vetor simples "
description: Exercício de lógica de programação envolvendo vetor e os diversos tipos de laços.
menu:        logica-exerc-nivel-04v
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Escreva um algoritmo para carregar um vetor com os números de 1 (inclusive) a 5 (inclusive) em ordem crescente.



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main() {


    // Aqui entra a lógica do programa.


    //
    // Testes
    //
    assert(1 == vetor[0]);
    assert(2 == vetor[1]);
    assert(3 == vetor[2]);
    assert(4 == vetor[3]);
    assert(5 == vetor[4]);
    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5];
    int i;

    for (i = 0; i < 5; i++) {
        vetor[i] = i + 1;
    }

    //
    // Testes
    //
    assert(1 == vetor[0]);
    assert(2 == vetor[1]);
    assert(3 == vetor[2]);
    assert(4 == vetor[3]);
    assert(5 == vetor[4]);
    return 0;
}
```

Desafios na linguagem C

### 1)

Os códigos abaixo trazem o mesmo resultado do código do exercício acima.
Faça o teste de mesa de cada um deles para entender o porque são equivalentes.

    for (i = 1; i < 6; i++) {
        vetor[i-1] = i;
    }

<hr>

    for (i = 5; i > 0; i--) {
        vetor[i-1] = i;
    }

<hr>

    for (i = 4; i > -1; i--) {
        vetor[i] = i + 1;
    }


### 2)

Transcrever tudo para while, exemplo:

    while(i < 5){
        vetor[i] = i + 1;
        i++;
    }

Boa sorte!