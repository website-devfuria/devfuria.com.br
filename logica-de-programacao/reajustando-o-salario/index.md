---
title:       Reajustando o salário
description: Exercício de lógica de programação para calcular o reajuste do salário
capitulo:    logica-nivel-1
ordem:       4
---



Exercício de lógica de programação
---

Faça um algoritmo que calcule o reajuste de um salário, utilize os seguintes dados:

    salário  = 1.000,00
    reajuste = 15%,

<iframe width="560" height="315" src="https://www.youtube.com/embed/rT1K6Bwpnl8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.


```c
#include <stdio.h>
#include <assert.h>

//
// Reajusta o salário
//
float reajustar_salario() {
    return 0;
}

int main (){
    // Este é o nosso teste.
    // Sabemos que 1000 * 0.15 = 150, logo
    // a função `reajustar_salario` deve retornar valor igual a 150.
    assert(150.0f == reajustar_salario(1000, 0.15));

    return 0;
}
```

### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Reajusta o salário
//
float reajustar_salario(float salario, float reajuste) {
    return salario * reajuste;
}

int main (){
    // Este é o nosso teste.
    // Sabemos que 1000 * 0.15 = 150, logo
    // a função `reajustar_salario` deve retornar valor igual a 150.
    assert(150.0f == reajustar_salario(1000, 0.15));

    return 0;
}
```



Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Reajusta o salário
#
def reajustar_salario():
    pass

# Este é o nosso teste.
# Sabemos que 1000 * 0.15 = 150, logo...
assert 150 == reajustar_salario(1000, 0.15), 'reajustar_salario deve retornar 150'
```

### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Reajusta o salário
#
def reajustar_salario(salario, reajuste):
    return salario * reajuste;

# Este é o nosso teste.
# Sabemos que 1000 * 0.15 = 150, logo...
assert 150 == reajustar_salario(1000, 0.15), 'reajustar_salario deve retornar 150'
```



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Reajusta o salário
//
var reajustar_salario = function(salario, reajuste) {
    return 0;
}


// Este é o nosso teste.
// Sabemos que 1000 * 0.15 = 150, logo
// a função `reajustar_salario` deve ter o valor igual a 150.
try {
    assert.equal(150, reajustar_salario(1000, 0.15));
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Reajusta o salário
//
var reajustar_salario = function(salario, reajuste) {
    return salario * reajuste;
}


// Este é o nosso teste.
// Sabemos que 1000 * 0.15 = 150, logo
// a função `reajustar_salario` deve ter o valor igual a 150.
try {
    assert.equal(150, reajustar_salario(1000, 0.15));
} catch(e) {
    console.log(e);
}
```

