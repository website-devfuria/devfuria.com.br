---
layout:      grid93-article
title:       "Equação de 2 grau "
description: Exercício de lógica de programação - bhaskar.
menu:        logica-exerc-nivel-02
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Utilizando funções, faça um programa que calcule as raízes da equação do 2 grau conforme a fórmula de Bhaskar.

Lembrando:

    ax(2) + bx + c = 0

    delta = (Δ = b2 - 4.a.c)
    x1    = ( (-b + √Δ)/2a)
    x2    = ( (-b - √Δ)/2a)




### Solução passo a passo

O primeiro objeto é encontrar o __delta__. Que tal uma função para ele?

Não sem antes escrever o teste .

    int main() {

        int a, b, c;

        a = 1; b = 0; c = -16;
        assert(64 == delta(a, b, c));
    }


Eu utilizei os  valores abaixo, mas fique a vontade para utilizar outros valores.

    1x(2) + 0x -16 = 0

    delta =  64
    x1    =  4
    x2    = -4

Agora sim a função.

    int delta(int a, int b, int c) {
        return b * b -4 * a * c;
    }

Sabemos que a primeira raíz será `4`, então escrevemos o teste.

    assert(4 == raiz1(a, b, c));

E implementamos a função `raiz1`.

    int raiz1(int a, int b, int c) {
        return (-b + sqrt(delta(a, b, c))) / 2 * a;
    }

Eu estou utilizando a função interna `sqrt()` da linguagem __c__ para retornar a raiz quadrada. Para tal precisamos
incluir a biblio `math.h`.

    
    #include <math.h>

Agora a segunda raiz é com você.


### Código completo

```c
#include <math.h>
#include <stdio.h>
#include <assert.h>

int delta(int a, int b, int c) {
    return b * b -4 * a * c;
}

int raiz1(int a, int b, int c) {
    return (-b + sqrt(delta(a, b, c))) / 2 * a;
}

int raiz2(int a, int b, int c) {
    return (-b - sqrt(delta(a, b, c))) / 2 * a;
}

int main() {

    int a, b, c;

    a = 1; b = 0; c = -16;
    assert(64 == delta(a, b, c));
    assert(4 == raiz1(a, b, c));
    assert(-4 == raiz2(a, b, c));
    
    return 0;
}
```        