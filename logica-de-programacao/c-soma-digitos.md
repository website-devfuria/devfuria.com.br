---
layout:      grid93-article
title:       "Somar dígitos <small>(linguagem C)</small>"
description: Exercício de lógica de programação para dígitos de um inteiro.
menu:        logica-exerc-nivel-03
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---
Faça um programa para somar os dígitos de um inteiro

Sem utilizar recursos de string, ou seja, trabalhe apenas com tipos numéricos.

### Código completo


```c
#include <stdio.h>
#include <assert.h>

int somarDigitos(int numero) {
    int soma = 0;

    while (numero != 0) {
        soma   += numero % 10;
        numero  = numero / 10;
    }
    
    return soma;
}

void main() {
    assert(6 == somarDigitos(2013));
    assert(15 == somarDigitos(456));
}
```