---
title:       Conversor Celsius/Fahrenheit
description: Exercício de lógica de programação para converter celsius em fahrenheit e vice versa.
capitulo:    logica-nivel-2
ordem:       6
---



Exercício de lógica de programação
---

Crie duas funções para conversão de temperaturas.

Uma converterá celsius em fahrenheit e a outra fará o inverso.

Saiba que 100c é igual a 212f, veja fórmula:

       C          F - 32
    -------  =  ---------
       5            9


<iframe width="560" height="315" src="https://www.youtube.com/embed/8N4LedUPqyY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C
---



```c
#include <stdio.h>
#include <assert.h>

//
// Converte fahrenheit em celsius
//
int toCelsius(int fahrenheit) {

    // Aqui entra a lógica do programa.

}

//
// Converte celsius em fahrenheit
//
int toFahrenheit(int celsius) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    int celsius    = 100;
    int fahrenheit = 212;

    assert(celsius == toCelsius(fahrenheit));
    assert(fahrenheit == toFahrenheit(celsius));

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Converte fahrenheit em celsius
//
int toCelsius(int fahrenheit) {
    return 5 * (fahrenheit - 32) / 9;
}

//
// Converte celsius em fahrenheit
//
int toFahrenheit(int celsius) {
    return celsius / 5 * 9 + 32;
}

//
// Testes
//
int main (){

    int celsius    = 100;
    int fahrenheit = 212;

    assert(celsius == toCelsius(fahrenheit));
    assert(fahrenheit == toFahrenheit(celsius));

    return 0;
}
```



Linguagem Python
---

```python
# -*- coding: utf-8 -*-

#
# Converte fahrenheit em celsius
#
def toCelsius(fahrenheit):
    pass

#
# Converte celsius em fahrenheit
#
def toFahrenheit(celsius):
    pass

#
# Testes
#
celsius    = 100
fahrenheit = 212

assert celsius == toCelsius(fahrenheit)
assert fahrenheit == toFahrenheit(celsius)
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

#
# Converte fahrenheit em celsius
#
def toCelsius(fahrenheit):
    return 5 * (fahrenheit - 32) / 9;

#
# Converte celsius em fahrenheit
#
def toFahrenheit(celsius):
    return celsius / 5 * 9 + 32;

#
# Testes
#
celsius    = 100
fahrenheit = 212

assert celsius == toCelsius(fahrenheit)
assert fahrenheit == toFahrenheit(celsius)
```




Linguagem JavaScript (Node.js)
---



```javascript
var assert = require('assert');


//
// Converte fahrenheit em celsius
//
function toCelsius(fahrenheit){

    // Aqui entra a lógica do programa.

}

//
// Converte celsius em fahrenheit
//
function toFahrenheit(celsius) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
try {
    var celsius    = 100
    var fahrenheit = 212

    assert.equal(celsius, toCelsius(fahrenheit), "msg");
    assert.equal(fahrenheit, toFahrenheit(celsius), "msg");
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');


//
// Converte fahrenheit em celsius
//
function toCelsius(fahrenheit){
    return 5 * (fahrenheit - 32) / 9;
}

//
// Converte celsius em fahrenheit
//
function toFahrenheit(celsius) {
    return celsius / 5 * 9 + 32;
}

//
// Testes
//
try {
    var celsius    = 100
    var fahrenheit = 212

    assert.equal(celsius, toCelsius(fahrenheit), "msg");
    assert.equal(fahrenheit, toFahrenheit(celsius), "msg");
} catch(e) {
    console.log(e);
}
```

