---
layout:      grid12-article
title:       "Função para somar vetor - linguagem c"
description: "Exercício de lógica de programação: criar função para somar vetor."
---


Crie uma função que retorna a soma de um vetor qualquer



Solução passo a passo
---

Inicie pelo teste. Você consegue imaginar uma forma fácil de resolver o problema? 

Eu não, então vou começar de forma bem simples. Só com a estrutura do código.

    #include <stdio.h>
    #include <assert.h>

    int retSomaVetor() {
        return 0;
    }

    int main() {
        assert(0 == retSomaVetor());
        return 0;
    }


OK, agora a "coisa" começa a tomar forma. Já consigo imaginar um teste falhando.

    int vetor[3];

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;

    assert(60 == retSomaVetor(vetor));


Corriga a função para aceitar o vetor como parâmetro e aproveite para fazer ela passar no teste  (retornando 60).

    int retSomaVetor(int vt[]) {
        return 60;
    }

Testes passando. Qual é o menor passo que você consegue visualizar?

    int retSomaVetor(int vt[]) {
        int soma = 0;

        soma = 60;

        return soma;
    }

Ótimo!

No lugar de `soma = 60` deveremos trabalhar para que a função descubra a soma de um vetor qualquer.

    int retSomaVetor(int vt[]) {
        int soma = 0, i = 3;

        while (i > 0) {
            soma += vt[i - 1];
            i--;
        }

        return soma;
    }

A variável `i` representa o tamanho do vetor.

Os testes estão passando, mas há um problema. O tamanho do vetor está dentro da função, fixo. Quer dizer que se passarmos
um vetor de outro tamanho, a função não mais funcionará.

Antes de corrigir, precisamos escrever um teste que falhe, que sinalize as alterações.

    int main() {
        int vetor[4];

        vetor[0] = 10;
        vetor[1] = 20;
        vetor[2] = 30;
        vetor[3] = 0;
        assert(60 == retSomaVetor(vetor));

        vetor[0] = 10;
        vetor[1] = 20;
        vetor[2] = 30;
        vetor[3] = 40;
        assert(100 == retSomaVetor(vetor));

        return 0;
    }

Testes falhando, sinal de progresso!

Agora refatoramos para ver os testes passarem novamente.

Precisamos passar o tamanho do vetor na chamada da função:

    int main() {
        int vetor[4];

        ...
        assert(60 == retSomaVetor(vetor, 4));

        ...
        assert(100 == retSomaVetor(vetor, 4));

        return 0;
    }

E corrigir a função para:

    int retSomaVetor(int vt[], int i) {
        int soma;

        while (i > 0) {
            soma += vt[i - 1];
            i--;
        }

        return soma;
    }



Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int retSomaVetor(int vt[], int i) {
    int soma;
    
    while (i > 0) {
        soma += vt[i - 1];
        i--;
    }

    return soma;
}

int main() {
    int vetor[4];

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 0;
    assert(60 == retSomaVetor(vetor, 4));

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 40;
    assert(100 == retSomaVetor(vetor, 4));

    return 0;
}
{% endhighlight %}