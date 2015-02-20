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

__Dica:__ "em relação ao total" significa que você deve dividir pelo total de eleitores.




Linguagem C
---


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
    // Teste
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
    // Teste
    //
	assert(0.8f == percValidos);
	assert(0.15f == percBrancos);
	assert(0.05f == percNulos);

	return 0;
}
```