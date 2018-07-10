---
title:       Descobrir os dias de 'n' meses
description: Considerando que todos os meses tenham 30 dias, calcular o total de dias de n meses
capitulo:    logica-nivel-0
ordem:       5
---



Exercício de lógica de programação
---

Considerando que todos os meses tenham 30 dias, calcular o total de dias de n meses.



Linguagem C
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/38rowYJTz_U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o número de dias
//
int dias(int nMeses) {
    return 0;
}

//
// Seu teste
//
int main (){

    assert(210 == dias(7));

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o número de dias
//
int dias(int nMeses) {
    return nMeses * 30;
}

//
// Seu teste
//
int main (){

    assert(210 == dias(7));

    return 0;
}
```



Linguagem Python
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/eeDw18uIExQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Função que retorna o número de dias
#
def dias(n_meses):
    pass

#
# Seu teste
#
assert 210 == dias(7)
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Função que retorna o número de dias
#
def dias(n_meses):
    return n_meses * 30

#
# Seu teste
#
assert 210 == dias(7)
```


Linguagem JavaScript (Node.js)
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/fs3ygRM4wHA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Função que retorna o número de dias
//
var dias = function(n_meses) {
    return 0;
}

//
// Seu teste
//
try {
    assert.equal(210, dias(7), "deve retornar a total de dias");
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função que retorna o número de dias
//
var dias = function(n_meses) {
    return n_meses * 30;
}

//
// Seu teste
//
try {
    assert.equal(210, dias(7), "deve retornar a total de dias");
} catch(e) {
    console.log(e);
}
```

