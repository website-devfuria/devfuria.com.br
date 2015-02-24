---
layout:      grid93-article
title:       "Número primo "
description: Exercício de lógica de programação para descobrir se um número é primo.
menu:        logica-exerc-nivel-03
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para identificar se um número é primo.

Saiba que: número primo, é um número natural, maior que 1, apenas divisível por si próprio e pela unidade.



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Função que descobre se o número é ou não primo.
// 
// Retorna:
//   0 para false (composto)
//   1 para true  (primo)
//
int ehPrimo(int num) {

    // Aqui entra a lógica do programa.

}

//
// Função que descobre se dois números possuem divisão exata.
// 
// Retorna:
//   0 para false
//   1 para true
//
int ehDivisaoExata(int dividendo, int divisor) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){
    
    assert(1 == ehDivisaoExata(3, 1));
    assert(0 == ehDivisaoExata(3, 2));
    assert(1 == ehDivisaoExata(3, 3));

    assert(1 == ehPrimo(2));
    assert(1 == ehPrimo(3));
    assert(0 == ehPrimo(4));
    assert(1 == ehPrimo(5));
    assert(0 == ehPrimo(6));
    assert(1 == ehPrimo(7));
    assert(0 == ehPrimo(9));
    assert(0 == ehPrimo(10));
    assert(1 == ehPrimo(11));
    assert(0 == ehPrimo(12));
    assert(1 == ehPrimo(13));

    return 0;
}
```


### Solução na linguagem C

```c
//
// Função que descobre se o número é ou não primo.
// 
// Retorna:
//   0 para false (composto)
//   1 para true  (primo)
//
int ehPrimo(int num) {
    int i, quantDivisores = 0;
    
    for(i = 1; i <= num; i++) {
        if (ehDivisaoExata(num, i)) {
            quantDivisores++;
        }
    }
    
    if (quantDivisores == 2) {
        return 1;
    } else {
        return 0;
    }
}

//
// Função que descobre se dois números possuem divisão exata.
// 
// Retorna:
//   0 para false
//   1 para true
//
int ehDivisaoExata(int dividendo, int divisor) {
    return (dividendo % divisor) == 0;
}
```