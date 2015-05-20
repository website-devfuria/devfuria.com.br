---
layout:      grid93-article
title:       "O dobro de um número qualquer (OOP) "
description: Exercício de lógica de programação resolvido onde o objetivo é criar uma classe para calcular o dobro de um número qualquer.
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Seu objetivo é fazer uma classe denominada `Calc` com um método que retorne o dobro de um número.

Este exercício nós já fizemos a versão estruturada e a versão utilizando funções, além disso a solução é estupidamente
simples. Como é o primeiro exercício envolvendo programação orientada a objetos e, diga-se de passagem, é aqui que os
testes unitários começam a fazer mais sentido, eu suponho que você tenho o mínimo conhecimentos sobre OOP.

Para quem vem acompanhando os exercícios devemos reparar é que antes utilizávamos o compilador `gcc` (linguagem C) e 
iremos utilizar o compilador g++ (linugagem C++).



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



Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Classe
#
class Calc(object):
    def dobro(self, num):
        pass


#
# Teste
#
calc = Calc()
assert 10 == calc.dobro(5)
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Classe
#
class Calc(object):
    def dobro(self, num):
        return num * 2


#
# Teste
#
calc = Calc()
assert 10 == calc.dobro(5)
```



Linguagem JavaScript
---

Em JavaScript não temos classe (até a especificação ECMAscript 5). Porém as funções podem representar uma classe e é 
exatamente isso o que estamos fazendo abaixo.


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

A versõa ES6 (EcmaSCript 6) já contempla a utilização de classes para JavaScript, poderíamos resolver o exercício já
com os novos recurso da linguagem, mas por um bom tempo (escrevo este artigo em maio/2015) veremos a forma abaixo como
a solução mais comumente encontrada.

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

{% include /menus/logica-feedback.html %}