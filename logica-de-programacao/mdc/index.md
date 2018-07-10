---
title:       MDC máximo divisor comum
description: Exercício de lógica de programação  para descobrir o MDC (máximo divisor comum).
capitulo:    logica-nivel-3
ordem:       3
---


Exercício de lógica de programação
---

Faça um programa para calcular o MDC (máximo divisor comum) entre dois números.

Aconselho a utilizar o __método de divisões sucessivas__, pois você verá que a forma como costumamos resolver problemas
matemáticos na mão nem sempre é o melhor caminho quando estamos codificando.

<iframe width="560" height="315" src="https://www.youtube.com/embed/lRg8adJf13Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Função mdc
//
int mdc(int num1, int num2) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    assert(3 == mdc(24, 9));
    assert(10 == mdc(30, 20));

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função mdc
//
int mdc(int num1, int num2) {

    int resto;

    do {
        resto = num1 % num2;

        num1 = num2;
        num2 = resto;

    } while (resto != 0);

    return num1;
}

//
// Testes
//
int main() {

    assert(3 == mdc(24, 9));
    assert(10 == mdc(30, 20));

    return 0;
}
```



Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Função que calcula o MDC entre dois números
#
def mdc(num1, num2):
    pass

#
# Testes
#
assert 3 == mdc(24, 9)
assert 10 == mdc(30, 20)
```


### Solução na linguagem Python

A única observação sobre a solução em Python é que não temos na linguagem o laço __do-while__. Então temos que mudar
um pouco a solução.

```python
# -*- coding: utf-8 -*-

#
# Função que calcula o MDC entre dois números
#
def mdc(num1, num2):
    resto = None
    while resto is not 0:
        resto = num1 % num2
        num1  = num2
        num2  = resto

    return num1


#
# Testes
#
assert 3 == mdc(24, 9)
assert 10 == mdc(30, 20)
```



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Função mdc
//
var mdc = function(num1, num2) {



}

//
// Testes
//
try {

    assert.equal(3, mdc(24, 9));
    assert.equal(10, mdc(30, 20));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função mdc
//
var mdc = function(num1, num2) {

    var resto;

    do {
        resto = num1 % num2;

        num1 = num2;
        num2 = resto;

    } while (resto != 0);

    return num1;
}

//
// Testes
//
try {

    assert.equal(3, mdc(24, 9));
    assert.equal(10, mdc(30, 20));

} catch(e) {
    console.log(e);
}
```

