---
title:       MMC mínimo múltiplo comum
description: Exercício de lógica de programação para descobrir o MMC (mínimo múltiplo comum).
capitulo:    logica-nivel-3
ordem:       4
---



## Exercício de lógica de programação

Faça um programa para calcular o MMC (mínimo múltiplo comum) entre dois números.



## Linguagem C

Se calcularmos o __MDC__ poderemos utilizar a propriedade:

"Sejam __a__ e __b__ dois ou mais números naturais não nulos temos que MMC(a, b) . MDC(a, b) = a . b."

Invertendo as contas, temos MMC = a . b / MDC


```c
#include <stdio.h>
#include <assert.h>

//
// Função mmc
//
int mmc(int num1, int num2) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    // 2 * 2 * 3 * 5 = 60
    assert(60 == mmc(12, 20));

    return 0;
}
```


### Primeira solução na linguagem C

```c
//
// Função mmc
//
int mmc(int num1, int num2) {

    int resto, a, b;

    a = num1;
    b = num2;

    do {
        resto = a % b;

        a = b;
        b = resto;

    } while (resto != 0);

    return ( num1 * num2) / a;
}
```


### Segunda solução na linguagem C

Sempre há mais de uma solução para um mesmo problema. O desafio é realizar o teste de mesa e procurar entender o
funcionamento do código.

```c
//
// Função mmc
//
int mmc(int num1, int num2) {

    int mmc, aux, i;

    for (i = 2; i <= num2; i++) {
        aux = num1 * i;
        if ((aux % num2) == 0) {
            mmc = aux;
            i = num2 + 1;
        }
    }
    return mmc;
}
```



## Linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Função mmc
#
def mmc(num1, num2):
    pass

#
# Teste
#
# 2 * 2 * 3 * 5 = 60
assert 60 == mmc(12, 20)
```


### Solução na linguagem Python

Segue o mesmo raciocínio, primeiro extraímos o MDC e depois aplicamos a fórmula `MMC = a . b / MDC`

"Sejam __a__ e __b__ dois ou mais números naturais não nulos temos que MMC(a, b) . MDC(a, b) = a . b."


```python
# -*- coding: utf-8 -*-

#
# Função mmc
#
def mmc(num1, num2):
    a = num1
    b = num2

    resto = None
    while resto is not 0:
        resto = a % b
        a  = b
        b  = resto

    return (num1 * num2) / a

#
# Teste
#
# 2 * 2 * 3 * 5 = 60
assert 60 == mmc(12, 20)
```




## Linguagem JavaScript (Node.js)

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Função mmc
//
var mmc = function(num1, num2) {


}


//
// Testes
//
try {

    // 2 * 2 * 3 * 5 = 60
    assert.equal(60, mmc(12, 20));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função mmc
//
var mmc = function(num1, num2) {
    var resto, a, b;

    a = num1;
    b = num2;

    do {
        resto = a % b;

        a = b;
        b = resto;

    } while (resto != 0);

    return (num1 * num2) / a;
}


//
// Testes
//
try {

    // 2 * 2 * 3 * 5 = 60
    assert.equal(60, mmc(12, 20));

} catch(e) {
    console.log(e);
}
```
