---
title:       Somando números (recursão)
description: faça um algoritmo que some os dígitos de 1 até n
capitulo:    logica-nivel-6
ordem:       2
---



Exercício de lógica de programação
---

Utilizando o conceito de recursão, faça um algoritmo que some os dígitos de 1 até n, por exemplo:

    add(5) = 15 = 1 + 2 + 3 + 4 + 5
    add(4) = 10 = 1 + 2 + 3 + 4
    add(3) =  6 = 1 + 2 + 3


__Comentários__:

Já vimos no artigo anterior uma introdução sobre a recursividade (algoritmos de recursão).

Este exercício se parece com a sequência de Fibonacci, parece mas não é, cuidado para não confundir.


Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

int add(int n) {
    //
    // Aqui entra a sua lógica
    //
}

void main() {
    assert(0 == add(0));
    assert(1 == add(1));
    assert(3 == add(2));
    assert(6 == add(3));
    assert(10 == add(4));
    assert(15 == add(5));
    assert(21 == add(6));
}
```


### 1 Solução na linguagem C

Esta solução é muito parecida com o Fatorial (próximo exercício), a diferença é que somamos os números
(ao invês de multiplicar).

```c
int add(int n) {
    int sum;

    if (n == 0)
        return 0;
    else
        sum = n + add(n - 1);

    return (sum);
}
```

### 2 Solução na linguagem C

```c
//
// https://pt.wikihow.com/Somar-os-N%C3%BAmeros-Inteiros-de-1-at%C3%A9-N
//
int add(int n) {
    return (n * (n + 1)) / 2;
}
```

### 3 Solução na linguagem C

```c
//
// https://youtu.be/YEeYk9uEqEI
//
int add(int n) {
    if (n == 0)
        return 0;
    else
        return n + add(n - 1);
}
```

### 4 Solução na linguagem C

Pensando na solução anterior (3), será que dá para inverter o if ?

```c
int add(int n) {
    if (n != 0)
        return n + add(n-1);
    else
        return 0;
}
```


