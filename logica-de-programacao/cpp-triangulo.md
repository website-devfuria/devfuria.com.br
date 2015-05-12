---
layout:      grid93-article
title:       "Triângulo "
description: Exercício de lógica de programação (com testes unitários e OOP) para descobrir se os lados informados formam ou não um triângulo.
menu:        logica-exerc-oop-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Dados 3 valores quaisquer (a, b e c) representando as medidas dos lados de um triângulo,
faça um algoritmo para descobrir se formam ou não um triângulo.

Saiba que para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados.

Utilize programação orientada a objetos.



Linguagem C++
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

### Solução na linguagem C++

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



Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

Você deve focar a solução do problema na função `validarForma()`.

```python
# -*- coding: utf-8 -*-

class Triangulo(object):

    def __init__(self, a, b, c):
        self.a = a
        self.b = b
        self.c = c

    def validarForma(self):
        pass


# Caso positivo
triangulo = Triangulo(3, 4, 5)
assert triangulo.validarForma(), "a=3, b=4, e c=5 devem formar um triângulo, a função retorna true"

# Caso negativo
triangulo = Triangulo(1, 4, 5)
assert not triangulo.validarForma(), "se as medidas não formam um triângulo, a função retorna false"
```


### Solução na linguagem Python

```python
def validarForma(self):
    if (self.a < (self.b + self.c)):
        if (self.b < (self.a + self.c)):
            if (self.c < (self.a + self.b)):
                return True

    return False
```




Linguagem JavaScript
---

Em JavaScript eu resolvi utilizar a notação de [objeto literal](/javascript/refs/objeto-literal).

O que isso significa? Significa que não iremos instanciar classe alguma, repare que temos um objeto literal e não uma
"classe literal".

Abaixo nosso código inicial escrito em JavaScript, utilize ele para resolver o problema.

```javascript
var assert = require('assert');

var Triangulo = {

    //
    // Aqui entra a lógica de seu programa!
    //

};

try {

    // Caso positivo
    Triangulo.a = 3;
    Triangulo.b = 4;
    Triangulo.c = 5;
    assert.equal(true, Triangulo.validarForma(), "a=3, b=4, e c=5 devem formam um triângulo, a função retorna true");

    // Caso negativo
    Triangulo.a = 1;
    Triangulo.b = 4;
    Triangulo.c = 5;
    assert.equal(false, Triangulo.validarForma(), "se as medidas não formam um triângulo, a função retorna false");

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript

```javascript
var Triangulo = {
    a: 0,
    b: 0,
    c: 0,
    validarForma: function() {
        if (this.a < (this.b + this.c)) {
            if (this.b < (this.a + this.c)) {
                if (this.c < (this.a + this.b)) {
                    return true;
                }
            }
        }
        return false;
    }
};
```