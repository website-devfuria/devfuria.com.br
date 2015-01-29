---
layout:      grid93-article
title:       "Média simples de 3 números <small>(linguagem C)</small>"
description: Exercício de lógica de programação resolvido onde o objetivo é calcular a média simples.
menu:        logica-exerc-nivel-01
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa que calcule a média simples (aritmética) de 3 valores quaisquer.

Utilize as variáveis `valor1`, `valor2` e `valor3`.



### Solução passo a passo

Precisamos de um resultado para escrevermos o teste: `7 = (6 + 7 + 8) / 3`. Este serve.

Em nosso exemplo, já sabemos a média, é `7`. Então, podemos escreve o teste.

	assert(7 == media);

Vamos dar dois passos. Para compilar, precisamos declarar a variável `media` e para passar no teste precisaremos atribuir
o valor `7` a ela.

    int media;
    media = 7;

Código compilando e passando no teste (green).

Não sei você, mas eu estou com vontade de trocar o `7` pelo calculo.

    media = (6 + 7 + 8) / 3;

Rodamos o teste (compile e execute). Se bandeira verde, seguimos em frente.

O resultado final está ficando claro. Podemos trocar os valores por variáveis.

	int valor1, valor2, valor3, media;

	valor1 = 6;
	valor2 = 7;
	valor3 = 8;
    
    media = (valor1 + valor2 + valor3) / 3;

Mexeu no código? Então rode o teste (compile e execute).
    
Se tiver passando (green), chegamos ao final.


### Código completo

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int valor1, valor2, valor3, media;

    // Valores arbitrários    
    valor1 = 6;
    valor2 = 7;
    valor3 = 8;

    // Seu código
    media = (valor1 + valor2 + valor3) / 3;

    // Seu teste
    assert(7 == media);

    return 0;
}
```



