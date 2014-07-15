---
layout:      materia
title:       "Área quadrada - linguagem c"
description: Exercício de lógica de programação resolvido onde o objetivo é encontrar a área quadrada.
---

__Sabendo que a área quadrada é dada pela multiplicação dos lados, escreva um algoritmo que mostre a área quadrada de
um espaço qualquer.__

Exemplo:

* A área de 3x9 é igual a 27
* 3 . 9 = 27


Solução passo a passo
---

O enunciado já nos deu a solução. Então vamos começar pelo teste.

    assert(27 == 3 * 9);

Nosso código compila e o teste passa (green).

Mas nosso trabalho ainda não acabou. Sabemos que `3` e `9` deveriam ser variáveis, logo:

	int lado1, lado2;

	lado1 = 3;
	lado2 = 9;

    assert(27 == lado1 * lado2);

Rode o teste (compile e execute o programa). Eles devem passar (green).

Para o código ficar mais significativo vamos fazer uma alteração. Isso que nós vamos fazer chama-se __refatoração__.

Pense comigo, `lado1 * lado2` é o resultado da área. Então vamos utilizar uma variável para armazenar a área.

Mas atenção: __antes de mudar o código, mudamos primeiro o teste__. Lembre-se que estamos praticando o __TDD__ (além da lógica).

Primeiro, acertamos o teste.

    assert(27 == area);

Pronto. O código não compila, sabemos disso. Então vamos fazer o mínimo para ele rodar.

	int lado1, lado2, area;

	lado1 = 3;
	lado2 = 9;
	area = lado1 * lado2;

Após compilar, execute para rodar o teste e ver se está tudo funcioando.



Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int main (){

    int lado1, lado2, area;

    // Valores arbitrários
    lado1 = 3;
    lado2 = 9;

    // Sua lógica (seu código)
    area  = lado1 * lado2;

    // Seu teste
    assert(27 == area);

    return 0;
}
{% endhighlight %}