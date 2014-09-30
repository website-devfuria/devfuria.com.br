---
layout:      grid12-article
title:       "O dobro de um número qualquer (funções) - linguagem c"
description: Exercício de lógica de programação resolvido onde o objetivo é criar uma função para calcular o dobro de um número qualquer.
---

Faça uma função para calcular o dobro de um número qualquer.



Solução passo a passo
---

Podemos criar uma função que aceite um número como parâmetro e retorne o dobro deste núemro, certo?

    dobro(5)

O retorno da função seria `10`. Já podemos escrever o teste:

	assert(10 == dobro(5));

Se compilarmos neste instante, veremos o compilador reclamar que `dobro()` não foi definida.

Então vamos definí-la. Criamos a função vazia, sem nada, só o corpo dela.

    int dobro(int num) {
    }

Agora o programa compila... mas não passa no teste.

A solução é bem simples, mas vamos aproveitar para entender melhor esse tal de __TDD__?

O __TDD__ diz que devemos saber dar passos pequenos.

Não quer dizer que devemos dar passos pequenos sempre, mas quando a solução está obscura é bom poder dar passos
pequenos.

É o que vamos fazer agora. Ao invés de "jogar" o resultado (que é bem óbvio) vamos dar passos pequenos.

Então me responda, __qual é o menor passo para ver o teste passar__?

O teste espera um `10`. Essa é a resposta.

    int dobro(int num) {
        return 10;
    }

Agora os testes passam, mas precisamos retirar essa redundância (temos dois 10's).

Então escrevemos (sempre em passos pequenos):

    int dobro(int num) {
        return 2 * 5;
    }

Os testes passam? Sim? Ótimo.

Agora o resultado ficou mais que óbvio. Trocaremos o número 5 pela variável `num`.

    int dobro(int num) {
        return 2 * num;
    }

Execute os testes (compile e rode o programa). Eles passaram? Deveriam ter passado.


### O que o TDD nos ensinou ?

1. Que podemos, quando nos sentirmos inseguros, dar passos pequeninos em direção ao resultado esperado.

2. Não é preciso pensar tanto na codificação, mas sim trabalhar em um processo de __tentativa e erro__.


### Para finalizar

Acho o teste `assert(10 == dobro(5));` suficiente para expressar o que o código deve fazer.

Mas nada no impede de inserirmos um outro teste, de forma a não restar dúvidas quanto ao devido funcionamento do código.

	assert(10 == dobro(5));
	assert(12 == dobro(6));


Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

/**
 * Função que retorna o dobro de um número qualquer
 */
int dobro(int num) {
    return 2 * num;
}

int main (){
	assert(10 == dobro(5));
	assert(12 == dobro(6));
	return 0;
}
{% endhighlight %}




