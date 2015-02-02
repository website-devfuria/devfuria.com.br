---
layout:      grid93-article
title:       "Juros simples"
description: Exercício de lógica de programação em Python e C - como calcular o juros simples.
menu:        logica-exerc-nivel-01
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
    // Estamos atribuindo um valor arbitrário a variável `juros`,
    // você deve fazer o programa calcular o juros.
	juros = 2560;


    // Este é o nosso teste.
    // Sabemos que 16000 * 0.04 * 4 = 2650, logo
    // a variável `juros` deve ter o valor igual a 2650.
	assert(2560 == juros);
	return 0;
}
```

### Exercício resolvido

```c
#include <stdio.h>
#include <assert.h>

int main (){

    // Para escrever o pequeno teste precisamos da variável `juros`.
    // Declare aqui as variáveis que você utilizar.
	float juros, capital, taxa;
	int n_periodos;	

    // Aqui entra a lógica do programa.
    // Estamos atribuindo um valor arbitrário a variável `juros`,
    // você deve fazer o programa calcular o juros.
	capital    = 16000;
	taxa       = 0.04;
	n_periodos = 4;
	
	juros = capital * taxa * n_periodos;

    // Este é o nosso teste.
    // Sabemos que 16000 * 0.04 * 4 = 2650, logo
    // a variável `juros` deve ter o valor igual a 2650.
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
# Estamos atribuindo um valor arbitrário a variável `juros`,
# você deve fazer o programa calcular o juros.
juros = 2560;

# Este é o nosso teste.
# Sabemos que 16000 * 0.04 * 4 = 2650, logo
# a variável `juros` deve ter o valor igual a 2650.
assert 2560 == juros, "juros deve ser igual a 2560"
```

### Exercício resolvido

```python
# -*- coding: utf-8 -*-

# Aqui entra a lógica do programa.
# Estamos atribuindo um valor arbitrário a variável `juros`,
# você deve fazer o programa calcular o juros.
capital    = 16000;
taxa       = 0.04;
n_periodos = 4;

juros = capital * taxa * n_periodos;

# Este é o nosso teste.
# Sabemos que 16000 * 0.04 * 4 = 2650, logo
# a variável `juros` deve ter o valor igual a 2650.
assert 2560 == juros, "juros deve ser igual a 2560"
```