---
layout:      grid93-article
title:       "Contar vogais "
description: Exercício de lógica de programação para contar a quantidade de vogais de uma string.
menu:        logica-exerc-nivel-04s
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---


Faça um programa que descubra a quantidade de vogais de uma determinada string.



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Função para contar quantidade de vogais de determinada string
//
int contaVogais(char palavra[]) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    char plavra[] = "abecedario";
    assert(6 == contaVogais(plavra));

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função para contar quantidade de vogais de determinada string
//
int contaVogais(char palavra[]) {
    char vogais[] = "aeiouAEIOU";
    int numVogais = 0, i, j;

    for (i = 0; palavra[i] != '\0'; i++) {
        for (j = 0; vogais[j] != '\0'; j++) {
            if (vogais[j] == palavra[i]) {
                numVogais++;
                break;
            }
        }
    }

    return numVogais;
}

//
// Testes
//
int main() {

    char plavra[] = "abecedario";
    assert(6 == contaVogais(plavra));

    return 0;
}
```

<hr>
Fonte: [http://www.ime.usp.br/~pf/algoritmos/aulas/string.html](http://www.ime.usp.br/~pf/algoritmos/aulas/string.html "link-externo")