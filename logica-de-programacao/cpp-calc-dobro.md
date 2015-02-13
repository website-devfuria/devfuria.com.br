---
layout:      grid93-article
title:       "O dobro de um número qualquer "
description: Exercício de lógica de programação resolvido onde o objetivo é criar uma classe para calcular o dobro de um número qualquer.
menu:        logica-exerc-oop-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Seu objetivo é fazer uma classe denominada `Calc` com um método que retorne o dobro de um número.


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
// Teste unitário
//
void testDobro() {
    Calc c;
    assert(10 == c.dobro(5));
}

//
// Início do programa
//
int main() {
    testDobro();
    return 0;
}
```


### Solução na linguaem C

```c
#include <iostream>
#include <assert.h>

//
// Classe Calc
//
class Calc {
public:
    int dobro(int num) {
        return num * 2;
    }
};

//
// Teste unitário
//
void testDobro() {
    Calc c;
    assert(10 == c.dobro(5));
}

//
// Início do programa
//
int main() {
    testDobro();
    return 0;
}
```


Experimente escrever outras asserções, por exemplo:

    void testDobro() {
        Calc c;
        assert(10 == c.dobro(5));
        assert(20 == c.dobro(10));
        assert(50 == c.dobro(25));
    }


