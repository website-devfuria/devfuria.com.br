---
layout:      grid12-article
title:       "Votos em relação ao total de eleitores- linguagem c"
description: Exercício de lógica de programação onde calculamos o porcentual de votos em relação ao total de eleitores.
---

Considerando a tabela abaixo...

    total de eleitores = 1000
    válidos            = 800
    votos brancos      = 150
    nulos              = 50

Calcular o percentual do votos válidos, brancos e nulos em relação ao total de eleitores.

__Dica:__ "em relação ao total" significa que você deve dividir pelo total de eleitores.



Solução passo a passo
---

Vou começar com os votos válidos (800).

Sei que 800 / 1000 = 80%. Opâ, já posso escrever um teste.

Vamos subistituir os valores por variáveis.

	float totalEleitores = 1000,
		  validos = 800;

	assert(0.8f == validos / totalEleitores);

Sei também que o resultado de `validos / totalEleitores` deveriam estar em uma variável denominada, por exemplo, `percValidos`.

	float totalEleitores = 1000,
		  validos = 800,
		  percValidos;

	percValidos = validos / totalEleitores;

	assert(0.8f == percValidos);

Agora é só seguir essa mesma linha de raciocínio.

Boa sorte!


Código completo
---

```c
#include <stdio.h>
#include <assert.h>

int main (){

	float totalEleitores = 1000,
		  validos = 800,
		  brancos = 150,
		  nulos = 50,
		  percValidos,
		  percBrancos,
		  percNulos;

	percValidos = validos / totalEleitores;
	percBrancos = brancos / totalEleitores;
	percNulos   = nulos   / totalEleitores; 

	assert(0.8f == percValidos);
	assert(0.15f == percBrancos);
	assert(0.05f == percNulos);

	return 0;
}
```