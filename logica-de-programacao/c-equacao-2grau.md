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




Linguagem C
---



```c
#include <math.h>
#include <stdio.h>
#include <assert.h>

// Retorna o valor de delta
int delta(int a, int b, int c) {

    // Aqui entra a lógica do programa.

}

// Retorna o valor da primeira raiz
int raiz1(int a, int b, int c) {

    // Aqui entra a lógica do programa.

}

// Retorna o valor da segunda raiz
int raiz2(int a, int b, int c) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    int a, b, c;

    a = 1; b = 0; c = -16;
    assert(64 == delta(a, b, c));
    assert(4 == raiz1(a, b, c));
    assert(-4 == raiz2(a, b, c));
    
    return 0;
}
```  
      

### Solução na linguagem C

```c
#include <math.h>
#include <stdio.h>
#include <assert.h>

// Retorna o valor de delta
int delta(int a, int b, int c) {
    return b * b -4 * a * c;
}

// Retorna o valor da primeira raiz
int raiz1(int a, int b, int c) {
    return (-b + sqrt(delta(a, b, c))) / 2 * a;
}

// Retorna o valor da segunda raiz
int raiz2(int a, int b, int c) {
    return (-b - sqrt(delta(a, b, c))) / 2 * a;
}

//
// Testes
//
int main() {

    int a, b, c;

    a = 1; b = 0; c = -16;
    assert(64 == delta(a, b, c));
    assert(4 == raiz1(a, b, c));
    assert(-4 == raiz2(a, b, c));
    
    return 0;
}
``` 



Linguagem Python
---

```python
# -*- coding: utf-8 -*-
import math

#
# Retorna o valor de delta
#
def delta(a, b, c):
    pass

#
# Retorna o valor da primeira raiz
#
def raiz1(a, b, c):
    pass

#
# Retorna o valor da segunda raiz
#
def raiz2(a, b, c):
    pass

#
# Testes
#
a = 1
b = 0
c = -16

assert 64 == delta(a, b, c)
assert  4 == raiz1(a, b, c)
assert -4 == raiz2(a, b, c)
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-
import math

#
# Retorna o valor de delta
#
def delta(a, b, c):
    return b * b -4 * a * c

#
# Retorna o valor da primeira raiz
#
def raiz1(a, b, c):
    return (-b + math.sqrt(delta(a, b, c))) / 2 * a

#
# Retorna o valor da segunda raiz
#
def raiz2(a, b, c):
    return (-b - math.sqrt(delta(a, b, c))) / 2 * a

#
# Testes
#
a = 1
b = 0
c = -16

assert 64 == delta(a, b, c)
assert  4 == raiz1(a, b, c)
assert -4 == raiz2(a, b, c)
```       