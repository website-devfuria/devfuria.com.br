---
layout:      grid93-article
title:       Descobrir os dias de 'n' meses
description: Exercício de lógica de programação para descobrir os dias de n meses.
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Considerando que todos os meses tenham 30 dias, calcular o total de dias de n meses.



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int nMeses, dias;

    //
    // Sua lógica
    //



    //
    // Seu teste
    //
    assert(210 == dias);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int nMeses, dias;

    //
    // Sua lógica
    //
    nMeses = 7;
    dias = nMeses * 30;

    //
    // Seu teste
    //
    assert(210 == dias);

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
nMeses = 7
dias   = 0

#
# Sua lógica
#




#
# Seu teste
#
assert 210 == dias
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
nMeses = 7
dias   = 0

#
# Sua lógica
#
dias = nMeses * 30

#
# Seu teste
#
assert 210 == dias
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Variáveis
//
var nMeses, dias;

//
// Sua lógica
//




//
// Seu teste
//
try {
    assert.equal(210, dias, "deve retornar a total de dias");
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
var nMeses, dias;

//
// Sua lógica
//
nMeses = 7;
dias = nMeses * 30;

//
// Seu teste
//
try {
    assert.equal(210, dias, "deve retornar a total de dias");
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}