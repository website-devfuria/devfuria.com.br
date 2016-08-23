---
title:       Antecessor e sucessor de um número qualquer
description: Exercício de lógica de programação resolvido onde o objetivo é calcular o sucessor e o antecessor de um número qualquer.
serie:       Lógica Nível 0
ordem:       3
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int numero, antecessor, sucessor;

    //
    // Sua lógica (seu código)
    //



    //
    // Testes
    //
    assert(9 == antecessor);
    assert(11 == sucessor);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int numero, antecessor, sucessor;

    //
    // Sua lógica (seu código)
    //
    numero     = 10;
    antecessor = numero - 1;
    sucessor   = numero + 1;

    //
    // Testes
    //
    assert(9 == antecessor);
    assert(11 == sucessor);

    return 0;
}
```


Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
numero     = 10;
antecessor = 0;
sucessor   = 0;

#
# Sua lógica (seu código)
#




#
# Testes
#
assert antecessor == 9
assert sucessor == 11
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
numero     = 10;
antecessor = 0;
sucessor   = 0;

#
# Sua lógica (seu código)
#
antecessor = numero - 1;
sucessor   = numero + 1;

#
# Testes
#
assert antecessor == 9
assert sucessor == 11
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Variáveis
//
var numero, antecessor, sucessor;

//
// Sua lógica (seu código)
//





//
// Seu teste
//
try {
    assert.equal(9, antecessor, "deve retornar o antecessor");
    assert.equal(11, sucessor, "deve retornar o sucessor");
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Variáveis
//
var numero, antecessor, sucessor;

//
// Sua lógica (seu código)
//
numero     = 10;
antecessor = numero - 1;
sucessor   = numero + 1;

//
// Seu teste
//
try {
    assert.equal(9, antecessor, "deve retornar o antecessor");
    assert.equal(11, sucessor, "deve retornar o sucessor");
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}