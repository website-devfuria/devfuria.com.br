---
layout:      grid93-article
title:       Reajustando o salário
description: Exercício de lógica de programação. Calcular o reajuste do salário.
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um algoritmo que calcule o reajuste de um salário, utilize os seguintes dados:

    salário  = 1.000,00
    reajuste = 15%, 



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.


```c
#include <stdio.h>
#include <assert.h>

int main (){

    // Para escrever o pequeno teste precisamos da variável `reajusteValor`.
    // Declare aqui as variáveis que você utilizar.
    float reajusteValor;

    // Aqui entra a lógica do programa.
    reajusteValor = 0;

    // Este é o nosso teste.
    // Sabemos que 1000 * 0.15 = 150, logo
    // a variável `reajusteValor` deve ter o valor igual a 150.
    assert(150.0f == reajusteValor);

    return 0;
}
```

### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    // Para escrever o pequeno teste precisamos da variável `reajusteValor`.
    // Declare aqui as variáveis que você utilizar.
    float salario, reajustePorc, reajusteValor;

    // Aqui entra a lógica do programa.
    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    // Este é o nosso teste.
    // Sabemos que 1000 * 0.15 = 150, logo
    // a variável `reajusteValor` deve ter o valor igual a 150.
    assert(150.0f == reajusteValor);

    return 0;
}
```



Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

# Aqui entra a lógica do programa.
reajusteValor = 0;

# Este é o nosso teste.
# Sabemos que 1000 * 0.15 = 150, logo...
assert 150 == reajusteValor, 'reajusteValor deve ser igual a 150'
```

### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

# Aqui entra a lógica do programa.
salario       = 1000;
reajustePorc  = 0.15;
reajusteValor = salario * reajustePorc;

# Este é o nosso teste.
# Sabemos que 1000 * 0.15 = 150, logo...
assert 150 == reajusteValor, 'reajusteValor deve ser igual a 150'
```



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

// Para escrever o pequeno teste precisamos da variável `reajusteValor`.
// Declare aqui as variáveis que você utilizar.
var salario, reajustePorc, reajusteValor;

// Aqui entra a lógica do programa.
salario       = 1000;
reajustePorc  = 0.15;
reajusteValor = salario * reajustePorc;

// Este é o nosso teste.
// Sabemos que 1000 * 0.15 = 150, logo
// a variável `reajusteValor` deve ter o valor igual a 150.
try {
    assert.equal(150, reajusteValor);
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

// Para escrever o pequeno teste precisamos da variável `reajusteValor`.
// Declare aqui as variáveis que você utilizar.
var salario, reajustePorc, reajusteValor;

// Aqui entra a lógica do programa.
salario       = 1000;
reajustePorc  = 0.15;
reajusteValor = salario * reajustePorc;

// Este é o nosso teste.
// Sabemos que 1000 * 0.15 = 150, logo
// a variável `reajusteValor` deve ter o valor igual a 150.
try {
    assert.equal(150, reajusteValor);
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}