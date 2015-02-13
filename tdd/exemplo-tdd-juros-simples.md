---
layout:      grid93-article
title:       "Simples exemplo de TDD - Juros simples"
description: "Neste artigo, apoiados pelo TDD, criaremos um pequeno programa para calcular o juros simples"
menu:        tdd-exemplos-simples-c
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Neste artigo, apoiados pelo TDD, criaremos um pequeno programa para calcular o juros simples na linguagem C.

O juros simples é obtido através da seguinte fórmula.

    J = C.i.n

Onde:

    J = juros,
    C = capital,
    i = taxa de empréstimo
    n = períodos

Vamos imaginar o seguinte cenário: um empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.


Escreva um teste.

	float juros;
	
	juros = 16000.0f * 0.04f * 4;

	assert(2560 == juros);


O __TDD__ nos ensina a dar passos pequenos, mas não é proibido dar um salto maior. Então vamos subistituir
os valores pelas devidas variáveis.

	float juros, capital, taxa;
	int n_periodos;	
	
	capital    = 16000;
	taxa       = 0.04;
	n_periodos = 4;
	
	juros = capital * taxa * n_periodos;

Rode os testes (compile e execute).



Código completo
---

```c
#include <stdio.h>
#include <assert.h>

int main (){

	float juros, capital, taxa;
	int n_periodos;	
	
	capital    = 16000;
	taxa       = 0.04;
	n_periodos = 4;
	
	juros = capital * taxa * n_periodos;

	assert(2560 == juros);
	return 0;
}
```


Próximo exemplo
---

- [Simples exemplo de TDD - Reajustando o salário](/tdd/exemplo-tdd-salario-reajuste/)
