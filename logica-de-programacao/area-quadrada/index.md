---
title:       Área quadrada
description: Sabendo que a área quadrada é dada pela multiplicação dos lados, escreva um algoritmo que mostre a área quadrada de um espaço qualquer
capitulo:    logica-nivel-0
ordem:       2
---


Exercício de lógica de programação
---

Sabendo que a área quadrada é dada pela multiplicação dos lados, escreva um algoritmo que mostre a área quadrada de
um espaço qualquer.

Exemplo:

* A área de 3x9 é igual a 27
* 3 . 9 = 27



Linguagem C
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/SZqKDfdfTf4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o valor da área
//
int area(int lado1, int lado2) {


}

//
// testes
//
int main (){
    assert(27 == area(3, 9));
    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o valor da área
//
int area(int lado1, int lado2) {
    return lado1 * lado2;
}

//
// testes
//
int main (){
    assert(27 == area(3, 9));
    return 0;
}
```


Linguagem Python
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/bdV-9Ndk4ME" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Função que retorna o valor da área
#
def area(lado1, lado2):
    pass



#
# Seu teste
#
assert 27 == area(3, 9)
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Função que retorna o valor da área
#
def area(lado1, lado2):
    return lado1 * lado2

#
# Seu teste
#
assert 27 == area(3, 9)
```



Linguagem JavaScript (Node.js)
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/bKdBeuSmryo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.

```javascript
var assert = require('assert');

//
// Função que retorna o valor da área
//
var area = function (lado1, lado2) {
    return 0;
}

//
// Seu teste
//
try {
    assert.equal(27, area(3, 9), "deve retornar o área");
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função que retorna o valor da área
//
var area = function (lado1, lado2) {
    return lado1 * lado2;
}

//
// Seu teste
//
try {
    assert.equal(27, area(3, 9), "deve retornar o área");
} catch(e) {
    console.log(e);
}
```

