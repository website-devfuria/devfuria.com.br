---
layout:      grid93-article
title:       "Juros simples"
description: Exercício de lógica de programação em Python e C - como calcular o juros simples.
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}

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



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    // Para escrever o pequeno teste precisamos da variável `juros`.
    // Declare aqui as variáveis que você utilizar.
	float juros;
	

    // Aqui entra a lógica do programa.
	juros = 0;


    // Este é o nosso teste.
    // Sabemos que 16000 * 0.04 * 4 = 2560, logo
    // a variável `juros` deve ter o valor igual a 2560.
	assert(2560 == juros);
	return 0;
}
```

### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    // Para escrever o pequeno teste precisamos da variável `juros`.
    // Declare aqui as variáveis que você utilizar.
	float juros, capital, taxa;
	int n_periodos;	

    // Aqui entra a lógica do programa.
	capital    = 16000;
	taxa       = 0.04;
	n_periodos = 4;
	
	juros = capital * taxa * n_periodos;

    // Este é o nosso teste.
    // Sabemos que 16000 * 0.04 * 4 = 2560, logo
    // a variável `juros` deve ter o valor igual a 2560.
	assert(2560 == juros);
	return 0;
}
```


Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

# Aqui entra a lógica do programa.
juros = 0;

# Este é o nosso teste.
# Sabemos que 16000 * 0.04 * 4 = 2560, logo...
assert 2560 == juros, "juros deve ser igual a 2560"
```

### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

# Aqui entra a lógica do programa.
capital    = 16000;
taxa       = 0.04;
n_periodos = 4;

juros = capital * taxa * n_periodos;

# Este é o nosso teste.
# Sabemos que 16000 * 0.04 * 4 = 2560, logo...
assert 2560 == juros, "juros deve ser igual a 2560"
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

// Variáveis
var juros, capital, taxa, n_periodos; 

// Aqui entra a lógica do programa.






// Este é o nosso teste.
// Sabemos que 16000 * 0.04 * 4 = 2560, logo
// a variável `juros` deve ter o valor igual a 2560.
try {
    assert.equal(2560, juros);
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

// Variáveis
var juros, capital, taxa, n_periodos; 

// Aqui entra a lógica do programa.
capital    = 16000;
taxa       = 0.04;
n_periodos = 4;

juros = capital * taxa * n_periodos;

// Este é o nosso teste.
// Sabemos que 16000 * 0.04 * 4 = 2560, logo
// a variável `juros` deve ter o valor igual a 2560.
try {
    assert.equal(2560, juros);
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}