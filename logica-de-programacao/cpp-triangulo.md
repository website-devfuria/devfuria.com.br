---
layout:      grid93-article
title:       "Triângulo "
description: Exercício de lógica de programação com OOP e TDD - triângulos.
menu:        logica-exerc-oop-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Dados 3 valores quaisquer (a, b e c) representando as medidas dos lados de um triângulo,
faça um algorítimo para descobrir se formam ou não um triângulo.

Saiba que para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados.

Utilize programação orientada a objetos.



Linguagem C
---

```c
#include <iostream>
#include <assert.h>

//
// Classe Triângulo
//
class Triangulo {
    //
    // seu código
    //
};

//
// Teste unitário
//
void testEhTriangulo() {

    Triangulo tri;
    tri.a = 3;
    tri.b = 4;
    tri.c = 5;
    assert(tri.ehTriangulo());
}

//
// Início do programa
//
int main() {
    testEhTriangulo();
    return 0;
}
```

### Solução na linguagem C

```c
#include <iostream>
#include <assert.h>

//
// Classe Triângulo
//
class Triangulo {
public:
    int a, b, c;

    //
    // Verifica se as medidas compõem ou não um triângulo
    //
    bool ehTriangulo() {
        if (a < (b + c)) {
            if (b < (a + c)) {
                if (c < (a + b)) {
                    return true;
                }
            }
        }
    }
};

//
// Teste unitário
//
void testEhTriangulo() {
    Triangulo tri;
    tri.a = 3;
    tri.b = 4;
    tri.c = 5;
    assert(tri.ehTriangulo());
}

//
// Início do programa
//
int main() {
    testEhTriangulo();
    return 0;
}
```