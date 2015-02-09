---
layout:      grid93-article
title:       "Número primo "
description: Exercício de lógica de programação para descobrir se um número é primo.
menu:        logica-exerc-nivel-03
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para identificar se um número é primo.

Saiba que: número primo, é um número natural, maior que 1, apenas divisível por si próprio e pela unidade.



### Solução passo a passo

Existem n formas para encontrar um número primo. Vou utilizar a forma mais simples de todas.

De posse de uma tabela de números primos, idealizei a base:

    int ehPrimo(int num) {
        return 1;
    }

    int main (){
        assert(1 == ehPrimo(2));
        return 0;
    }

O código compila e passa no teste. Acrescentei:

    assert(1 == ehPrimo(3));

O teste ainda passa, continuei...

    assert(0 == ehPrimo(4));

Testes falhando... sinal de progresso.

Agora podemos implementar a lógica até que nossos testes passem.

A forma mais simples para encontrar um número primo é percorrer (laço de repetição) o número e checar em cada interação
se o número é divisivel. Quer dizer, estamos procurando a quantidade de divisores e sabemos que para ser um número primo
precisa ser 2 (ele mesmo e a unidade).

    int ehPrimo(int num) {
        int i, quantDivisores = 0;

        for(i = 1; i <= num; i++) {
            // testa divisão exata
            if (num % i) == 0) {
                quantDivisores++;
            }
        }

        if (quantDivisores == 2) {
            return 1;
        } else {
            return 0;
        }
    }

OK testes passando mas que tal testarmos mais números?

    assert(1 == ehPrimo(2));
    assert(1 == ehPrimo(3));
    assert(0 == ehPrimo(4));
    assert(1 == ehPrimo(5));
    assert(0 == ehPrimo(6));
    assert(1 == ehPrimo(7));
    assert(0 == ehPrimo(9));
    assert(0 == ehPrimo(10));
    assert(1 == ehPrimo(11));
    assert(0 == ehPrimo(12));
    assert(1 == ehPrimo(13));

Todos os testes passaram.

Poderíamos dar por encerrado o problema, mas eu visualizo pelo menos um ponto que merece uma __refatoração__.
O `if` que testa se a divisão é ou não exata.

Eu gostaria de fazer uma função para realizar esse trabalho. Talvez a gente consiga um código mais legível.

Podemos testar se o resto da divisão de `3` por `1` é verdadeiro (utilizamos 1 como sendo verdadeiro).

    assert(1 == ehDivisaoExata(3, 1));

O teste nem compila, então...

    int ehDivisaoExata(int dividendo, int divisor) {
        return 1;
    }

Agora compila e também passa (green). Vamos escrever um teste para vê-lo falhar, o resto de `3` dividido por `2` 
é `1`. Nossa função deve retornar falso (utilizamos 0 como sendo falso).

    assert(0 == ehDivisaoExata(3, 2));

Testes falhando. Podemos trabalhar.

Na verdade, já resolvemos o problema na função `ehPrimo()` com a seguinte linha `(num % i) == 0)`. Nem precisaremos
pensar muito.

    int ehDivisaoExata(int dividendo, int divisor) {
        return (dividendo % divisor) == 0;
    }

Testes passando. Mas veio a dúvida, será que `3` dividio por `3` dá exato? Mentalmente sabemos que sim, mas será que
nosso código corresponde ao osso raciocínio?

Perguntaremos para o teste, acrescente mais este:

    assert(1 == ehDivisaoExata(3, 3));

Aqui passou! Não se esqueça dos comentários.


### Código completo

```c
#include <stdio.h>
#include <assert.h>

/**
 * Função que descobre se o número é ou não primo.
 * 
 * Retorna:
 *   0 para false (composto)
 *   1 para true  (primo)
 */
int ehPrimo(int num) {
    int i, quantDivisores = 0;
    
    for(i = 1; i <= num; i++) {
        if (ehDivisaoExata(num, i)) {
            quantDivisores++;
        }
    }
    
    if (quantDivisores == 2) {
        return 1;
    } else {
        return 0;
    }
}

/**
 * Função que descobre se dois números possuem divisão exata.
 * 
 * Retorna:
 *   0 para false
 *   1 para true
 */
int ehDivisaoExata(int dividendo, int divisor) {
    return (dividendo % divisor) == 0;
}

int main (){
    
    assert(1 == ehDivisaoExata(3, 1));
    assert(0 == ehDivisaoExata(3, 2));
    assert(1 == ehDivisaoExata(3, 3));

    assert(1 == ehPrimo(2));
    assert(1 == ehPrimo(3));
    assert(0 == ehPrimo(4));
    assert(1 == ehPrimo(5));
    assert(0 == ehPrimo(6));
    assert(1 == ehPrimo(7));
    assert(0 == ehPrimo(9));
    assert(0 == ehPrimo(10));
    assert(1 == ehPrimo(11));
    assert(0 == ehPrimo(12));
    assert(1 == ehPrimo(13));
    return 0;
}
```