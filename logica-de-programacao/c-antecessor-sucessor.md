---
layout:      grid93-article
title:       "Antecessor e sucessor de um número qualquer <small>(linguagem C)</small>"
description: Exercício de lógica de programação resolvido onde o objetivo é calcular o sucessor e o antecessor de um número qualquer.
menu:        logica-exerc-nivel-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.



### Solução passo a passo

Se o número fosse o `10`, por exemplo, qual seria o próximo (sucessor) e o anterior (antecessor)?

Já consegue visualizar os testes?

Que tal isso...

    assert(9 == antecessor);
    assert(11 == sucessor);


Para compilar precisaremos declarar as variáveis.

	int antecessor, sucessor;

Mas os testes não passam (red). Aqui começa o nosso trabalho "real", é neste ponto que começamos a resolver, de fato,
o problema.

Vamos fazer os teste passarem.

	antecessor = 9;
	sucessor   = 11;

O objetivo é obter esse resultado de um número qualquer, certo?

Então, cadê esse "número qualquer"?

	int numero, antecessor, sucessor;

	numero     = 10;
	antecessor = 9;
	sucessor   = 11;

Mexemos no código, será que quebramos o progama? Rode o teste (compile e execute) e saberá.

A variável `numero` precisa interagir com as demais para termos o processamento esperado.

	numero     = 10;
	antecessor = numero - 1;
	sucessor   = numero + 1;

Rode os testes. Passaram? Tudo verde? Sim? Seu trabalho acabou.


### Código completo

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int numero, antecessor, sucessor;

    // Um número arbitrário
    numero     = 10;

    // Sua lógica (seu código)
    antecessor = numero - 1;
    sucessor   = numero + 1;

    // Seu teste
    assert(9 == antecessor);
    assert(11 == sucessor);

    return 0;
}
```