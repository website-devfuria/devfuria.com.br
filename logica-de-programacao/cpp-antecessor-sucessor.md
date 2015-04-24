---
layout:      grid93-article
title:       "Antecessor e sucessor de um número qualquer (OOP)"
description: Exercício de lógica de programação resolvido cujo objetivo é, com o auxílio de classes, encontrar o sucessor e antecessor de um número qualquer.
menu:        logica-exerc-oop-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Seu objetivo é construir uma classe denominada `Calc` com duas funções.

A primeira função mostrará o antecessor de um número qualquer.

A segunda função mostrará o sucessor de um número qualquer.


Linguagem C
---

```c
#include <iostream>
#include <assert.h>

//
// Classe Calc
//
class Calc {
    //
    // seu código
    //
};

//
// Testes unitários...
//
void testAntecessor() {
    Calc c;
    assert(9 == c.antecessor(10));
}

void testSucessor() {
    Calc c;
    assert(11 == c.sucessor(10));
}
// ...fim dos testes.

//
// Início do programa
//
int main() {
    testAntecessor();
    testSucessor();
    return 0;
}
```


### Solução na linguagem C

```c
#include <iostream>
#include <assert.h>

//
// Classe Calc
//
class Calc {
public:
    
    // retorna o antecessor de um número
    int antecessor(int num) {
        return num - 1;
    }

    // retorna o sucessor de um número
    int sucessor(int num) {
        return num + 1;
    }
};

//
// Testes unitários...
//
void testAntecessor() {
    Calc c;
    assert(9 == c.antecessor(10));
}

void testSucessor() {
    Calc c;
    assert(11 == c.sucessor(10));
}
// ...fim dos testes.

//
// Início do programa
//
int main() {
    testAntecessor();
    testSucessor();
    return 0;
}
```