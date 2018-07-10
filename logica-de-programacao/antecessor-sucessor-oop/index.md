---
title:       Antecessor e sucessor de um número qualquer (OOP)
description: Exercício de lógica de programação resolvido cujo objetivo é encontrar o sucessor e antecessor de um número qualquer.
capitulo:    logica-nivel-5
ordem:       3
---



Exercício de lógica de programação
---

Seu objetivo é construir uma classe denominada `Calc` com duas funções.

A primeira função mostrará o antecessor de um número qualquer.

A segunda função mostrará o sucessor de um número qualquer.

<iframe width="560" height="315" src="https://www.youtube.com/embed/ZxAHPKIKxKc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C++
---

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

        //
        // sua lógica
        //

    }

    // retorna o sucessor de um número
    int sucessor(int num) {

        //
        // sua lógica
        //

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


### Solução na linguagem C++

```c
//
// Classe Calc
//
class Calc {
public:

    // retorna o antecessor de um número
    int antecessor(int num) {
        // sua lógica
        return num - 1;

    }

    // retorna o sucessor de um número
    int sucessor(int num) {
        // sua lógica
        return num + 1;

    }
};
```


Linguagem JavaScript
---

Em JavaScript eu resolvi utilizar a notação de [objeto literal](/javascript/refs/objeto-literal).

O que isso significa? Significa que não iremos instanciar classe alguma, repare que temos um objeto literal e não uma
"classe literal".

```javascript
var assert = require('assert');

//
// Um objeto literal
//
var Calc = {

    // Método
    antecessor: function(num){

        //
        // sua lógica
        //

    }, // reparou na vírgula ?

    // Método
    sucessor: function(num){

        //
        // sua lógica
        //

    }
}

try {

    assert.equal(9, Calc.antecessor(10));
    assert.equal(11, Calc.sucessor(10));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript

```javascript
//
// Um objeto literal
//
var Calc = {

    // Método
    antecessor: function(num){

        //
        // sua lógica
        //
        return num - 1;

    }, // reparou na vírgula ?

    // Método
    sucessor: function(num){

        //
        // sua lógica
        //
        return num + 1;

    }
}
```



Linguagem Python
---

Em Python eu farei um paralelo, procurarei não instanciar a classe. Será possível? Sim, pois em Python temos:

- os atributos do objeto e
- os atributos da classe.

Em nosso exemplo, estamos utilizando os atributos da classe, isso se assemelha um pouco as variáveis estáticas em outras
linguagens, mas não o são. Variáveis estáticas em Python tomam outro caminho.

```python
# -*- coding: utf-8 -*-

class Calc(object):

    def antecessor(num):
        return num - 1

    def sucessor(num):
        return num + 1

assert 9 == Calc.antecessor(10)
assert 11 == Calc.sucessor(10)
```


