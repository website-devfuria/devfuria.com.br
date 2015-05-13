---
layout:      grid93-article
title:       "Votos em relação ao total de eleitores "
description: Exercício de lógica de programação onde calculamos o porcentual de votos em relação ao total de eleitores.
menu:        logica-exerc-nivel-01
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Considerando a tabela abaixo...

    total de eleitores = 1000
    válidos            = 800
    votos brancos      = 150
    nulos              = 50

Calcular o percentual do votos válidos, brancos e nulos em relação ao total de eleitores.

__Dica:__ "em relação ao total" significa que você deve dividir, por exemplo, "nulos" pelo total de eleitores, válidos
pelo total de eleitores, etc...




Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    // Variáveis
	float totalEleitores = 1000,
		  validos = 800,
		  brancos = 150,
		  nulos = 50,
		  percValidos,
		  percBrancos,
		  percNulos;

    //
    // Sua lógica entra aqui
    //




    //
    // Testes
    //
	assert(0.8f == percValidos);
	assert(0.15f == percBrancos);
	assert(0.05f == percNulos);

	return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    // Variáveis
	float totalEleitores = 1000,
		  validos = 800,
		  brancos = 150,
		  nulos = 50,
		  percValidos,
		  percBrancos,
		  percNulos;

    //
    // Sua lógica entra aqui
    //
	percValidos = validos / totalEleitores;
	percBrancos = brancos / totalEleitores;
	percNulos   = nulos   / totalEleitores; 

    //
    // Testes
    //
	assert(0.8f == percValidos);
	assert(0.15f == percBrancos);
	assert(0.05f == percNulos);

	return 0;
}
```


Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Variáveis para acomodar os dados da
# nossa tabela
#
totalEleitores = 1000
validos 	   = 800
brancos 	   = 150
nulos 		   = 50

#
# Variáveis para acomodar a respostas (saídas) do programa
#
percValidos    = 0
percBrancos	   = 0
percNulos      = 0

#    
# Sua lógica entra aqui
#    
percValidos = validos / totalEleitores;
percBrancos = brancos / totalEleitores;
percNulos   = nulos   / totalEleitores; 

#
# Testes
#
assert 0.8  == percValidos, "'percValidos' deve ser igual a 0.8"
assert 0.15 == percBrancos, "'percBrancos' deve ser igual a 0.15"
assert 0.05 == percNulos, "percNulos deve ser igual a 0.05"
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

#
# Variáveis para acomodar os dados da
# nossa tabela
#
totalEleitores = 1000
validos 	   = 800
brancos 	   = 150
nulos 		   = 50

#
# Variáveis para acomodar a respostas (saídas) do programa
#
percValidos    = 0
percBrancos	   = 0
percNulos      = 0

#    
# Sua lógica entra aqui
#    
percValidos = validos / totalEleitores;
percBrancos = brancos / totalEleitores;
percNulos   = nulos   / totalEleitores; 

#
# Testes
#
assert 0.8  == percValidos, "'percValidos' deve ser igual a 0.8"
assert 0.15 == percBrancos, "'percBrancos' deve ser igual a 0.15"
assert 0.05 == percNulos, "percNulos deve ser igual a 0.05"
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

// Variáveis
var totalEleitores = 1000,
    validos = 800,
    brancos = 150,
    nulos = 50,
    percValidos,
    percBrancos,
    percNulos;

//
// Sua lógica entra aqui
//





//
// Testes
//
try {
    assert.equal(0.8, percValidos);
    assert.equal(0.15, percBrancos);
    assert.equal(0.05, percNulos);
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

// Variáveis
var totalEleitores = 1000,
    validos = 800,
    brancos = 150,
    nulos = 50,
    percValidos,
    percBrancos,
    percNulos;

//
// Sua lógica entra aqui
//
percValidos = validos / totalEleitores;
percBrancos = brancos / totalEleitores;
percNulos   = nulos   / totalEleitores; 

//
// Testes
//
try {
    assert.equal(0.8, percValidos);
    assert.equal(0.15, percBrancos);
    assert.equal(0.05, percNulos);
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}