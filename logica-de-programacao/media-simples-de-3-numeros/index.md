---
title:       Média simples de 3 números
description: Faça um programa que calcule a média simples (aritmética) de 3 valores quaisquer.
capitulo:    logica-nivel-0
ordem:       4
---


Exercício de lógica de programação
---

Faça um programa que calcule a média simples (aritmética) de 3 valores quaisquer.

Utilize as variáveis `valor1`, `valor2` e `valor3`.



Linguagem C
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/MJhCET-9pDk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int media(int valor1, int valor2, int valor3) {
    return 0;
}

//
// Seu teste
//
int main (){

    assert(7 == media(6, 7, 8));

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int media(int valor1, int valor2, int valor3) {
    return (valor1 + valor2 + valor3) / 3;
}

//
// Seu teste
//
int main (){

    assert(7 == media(6, 7, 8));

    return 0;
}
```


Linguagem Python
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/XDS0nwJRLX0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

def media(valor1, valor2, valor3):
    pass

#
# Seu teste
#
assert 7 == media(6, 7, 8)
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

def media(valor1, valor2, valor3):
    return (valor1 + valor2 + valor3) / 3

#
# Seu teste
#
assert 7 == media(6, 7, 8)
```



Linguagem JavaScript (Node.js)
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/02yw_2G-D-k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

var media = function(valor1, valor2, valor3) {
    return 0;
}

//
// Seu teste
//
try {
    assert.equal(7, media(6, 7, 8), "deve retornar a média");
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

var media = function(valor1, valor2, valor3) {
    return (valor1 + valor2 + valor3) / 3;
}

//
// Seu teste
//
try {
    assert.equal(7, media(6, 7, 8), "deve retornar a média");
} catch(e) {
    console.log(e);
}
```

