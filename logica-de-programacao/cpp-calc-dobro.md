---
layout:      grid93-article
title:       "O dobro de um número qualquer (OOP) "
description: Exercício de lógica de programação resolvido onde o objetivo é criar uma classe para calcular o dobro de um número qualquer.
menu:        logica-exerc-oop-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Seu objetivo é fazer uma classe denominada `Calc` com um método que retorne o dobro de um número.


Linguagem C++
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


### Solução na linguagem C++

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




Linguagem JavaScript
---

Em JavaScript, até especificação ECMAscript 5, não temos classe. Mas as funções podem representar uma classe, é 
exatamente o que estamos fazendo abaixo.


```javascript
var assert = require('assert');

//
// Está é nossa classe
//
function Calc(){

    //
    // Este é o método da classe
    //
    this.dobro = function(){
    
        //
        // aqui entra a sua lógica
        //

    }

};

try {

    var calc = new Calc();
    assert.equal(10, calc.dobro(5));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript

```javascript
var assert = require('assert');

// Nossa classe
function Calc(){

    // Nosso método
    this.dobro = function(num){
        return num * 2;
    }

};

try {

    var calc = new Calc();
    assert.equal(10, calc.dobro(5));

} catch(e) {
    console.log(e);
}
```
