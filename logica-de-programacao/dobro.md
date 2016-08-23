---
title:       O dobro de um número qualquer
description: Exercício de lógica de programação resolvido onde o objetivo é calcular o dobro de um número qualquer.
serie:       Lógica Nível 0
ordem:       1
---

{% include /alertas/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa que calcule o dobro de um número.

__Comentários:__ Este é o primeiro exercício de lógica que abre a série. Ele é muito fácil de resolver e tem como 
objetivo te ajudar na familiarização dos exercícios. Repare que temos um teste já escrito e para praticar basta codificar
até ver os testes passarem.


Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int num, dobro;

    //
    // Sua lógica (seu código)
    //


    //
    // Seu teste
    //
    assert(10 == dobro);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int num, dobro;

    //
    // Sua lógica (seu código)
    //
    num = 5;
    dobro = 2 * num;

    //
    // Seu teste
    //
    assert(10 == dobro);

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
num   = 5
dobro = None

#
# Sua lógica (seu código)
#




#
# Seu teste
#
assert 10 == dobro
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
num   = 5
dobro = None

#
# Sua lógica (seu código)
#
dobro = 2 * num

#
# Seu teste
#
assert 10 == dobro
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.

```javascript
var assert = require('assert');

//
// Variáveis
//
var num = 5;
var dobro = null;

//
// Sua lógica (seu código)
//



//
// Seu teste
//
try {
    assert.equal(10, dobro, "deve retornar o dobro");
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
var num = 5;
var dobro = null;

//
// Sua lógica (seu código)
//
dobro = 2 * 5;

//
// Seu teste
//
try {
    assert.equal(10, dobro, "deve retornar o dobro");
} catch(e) {
    console.log(e);
}
```

{% include /alertas/logica-feedback.html %}