---
title:       Juros simples
description: Exercício de lógica de programação para calcular o juros simples.
capitulo:    logica-nivel-1
ordem:       3
---


Exercício de lógica de programação
---

Faça um programa para calcular o juros simples segundo a fórmula abaixo.

    J = C.i.n

Onde:

    J = juros,
    C = capital,
    i = taxa de empréstimo
    n = períodos

Vamos imaginar o seguinte cenário: um empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.

<iframe width="560" height="315" src="https://www.youtube.com/embed/OepIEvKrBMk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

//
// Calcula o juros simples
//
float juros_simples() {
    return 0;
}

int main (){
    // Este é o nosso teste.
    // Sabemos que 16000 * 0.04 * 4 = 2560, logo
    // a variável `juros` deve ter o valor igual a 2560.
    assert(2560 == juros_simples(16000, 0.04, 4));
    return 0;
}
```

### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Calcula o juros simples
//
float juros_simples(float capital, float taxa, int n_periodos) {
    return capital * taxa * n_periodos;
}

int main (){
    // Este é o nosso teste.
    // Sabemos que 16000 * 0.04 * 4 = 2560, logo
    // a variável `juros` deve ter o valor igual a 2560.
    assert(2560 == juros_simples(16000, 0.04, 4));
    return 0;
}
```


Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Calcula o juros simples
#
def juros_simples():
    pass

# Este é o nosso teste.
# Sabemos que 16000 * 0.04 * 4 = 2560, logo...
assert 2560 == juros_simples(16000, 0.04, 4), "juros deve ser igual a 2560"
```

### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Calcula o juros simples
#
def juros_simples(capital, taxa, n_periodos):
    return capital * taxa * n_periodos;

# Este é o nosso teste.
# Sabemos que 16000 * 0.04 * 4 = 2560, logo...
assert 2560 == juros_simples(16000, 0.04, 4), "juros deve ser igual a 2560"
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Calcula o juros simples
//
var juros_simples = function() {
    return 0;
}

// Este é o nosso teste.
// Sabemos que 16000 * 0.04 * 4 = 2560, logo
// a variável `juros` deve ter o valor igual a 2560.
try {
    assert.equal(2560, juros_simples(16000, 0.04, 4));
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Calcula o juros simples
//
var juros_simples = function(capital, taxa, n_periodos) {
    return capital * taxa * n_periodos;
}

// Este é o nosso teste.
// Sabemos que 16000 * 0.04 * 4 = 2560, logo
// a variável `juros` deve ter o valor igual a 2560.
try {
    assert.equal(2560, juros_simples(16000, 0.04, 4));
} catch(e) {
    console.log(e);
}
```

