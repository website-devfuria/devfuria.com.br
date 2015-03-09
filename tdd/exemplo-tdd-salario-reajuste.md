---
layout:      grid93-article
title:       "Simples exemplo de TDD - Reajustando o salário"
description: Exemplo, na linguagem C, desenvolvido com o apoio de TDD para calcular o reajusta de um salário qualquer
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Nosso objetivo é escrever um pequeno programa, na linguaggem C, que calcule o reajuste de um salário.

Como exemplo, sendo o salário de 1.000,00 e o reajuste de 15%, nosso programa deve calcular o valor do reajuste. 

Comece escrevendo o teste, quer dizer, comece dizem como o programa deve funcionar.

    //
    // Teste
    //
    assert(150.0f == 1000.0f * 0.15f);


Que tal substituirmo os valores por variáveis?

    float salario, reajustePorc, reajusteValor;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    //
    // Teste
    //
    assert(150.0f == reajusteValor);

Testes passando, trabalho acabado. A primeira versão do nosso programa deve ser parecido com o código abaixo.

```c
/*
Pequeno código, com fins didático, que calcula o reajuste de um salário.
versão 1.0
*/
#include <stdio.h>
#include <assert.h>

int main (){

    float salario, reajustePorc, reajusteValor;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    //
    // Teste
    //
    assert(150.0f == reajusteValor);

    return 0;
}
```


### Primeira alteração


Após demonstrar o programa ao seu cliente, ele lhe diz que não era exatamente este o comportamento esperado.O ideal
seria que o reajuste fosse somado ao salário, poupando-lhe o trabalho de realizar essa soma manualmente.

OK, vamos alterar o código, mas não sem antes escrever um teste...


    assert(1150.0f == salarioReajustado);

...e ver ele falhar.

    Assertion `1150.0f == salarioReajustado' failed

Não esqueça de declarar a variável `salarioReajustado`, se não o programa nem compila. 

Continuando, já temos um teste, mas ele falha (red). Aproveito para lançar mão de um pequeno truque de cálculo. Somando 
1 a porcentagem obtemos o montante sem precisar somá-lo posteriormente. Em outras palavras, é mais prático fazer 
`1000 * 1.15` do que `(1000 * 0.15) + 1000`.

    salarioReajustado = salario * (1 + reajustePorc);

Atualizando o nosso código teremos...

```c
/*
Pequeno código, com fins didático, que calcula o reajuste de um salário.
versão 2.0
*/
#include <stdio.h>
#include <assert.h>

int main (){

    float salario, reajustePorc, reajusteValor, salarioReajustado;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    salarioReajustado = salario * (1 + reajustePorc);

    //
    // Testes
    //
    assert(150.0f == reajusteValor);
    assert(1150.0f == salarioReajustado);

    return 0;
}
```

### Segunda alteração

Os testes passaram, porém o código ficou um pouco complicado ou talvez menos legível. Me refiro a este trecho...

    salarioReajustado = salario * (1 + reajustePorc);

Na verdade o código está bem simples, mas vamos imaginar que você, assim como eu, ficou "tentado" a simplificar o código.
Vamos chamar essa "simplificação" de refatoração. Porém, __antes de alterar o código rode os testes__ para saber se está 
tudo ok.

Vamos alterar a linha acima para...

    salarioReajustado = salario + reajusteValor;

Como saber se seu código funciona? Rode os testes! Seu código deve ser parecido com o mostrado abaixo.



```c
/*
Pequeno código, com fins didático, que calcula o reajuste de um salário.
versão 3.0
*/
#include <stdio.h>
#include <assert.h>

int main (){

    float salario, reajustePorc, reajusteValor, salarioReajustado;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    salarioReajustado = salario + reajusteValor;

    //
    // Testes
    //
    assert(150.0f == reajusteValor);
    assert(1150.0f == salarioReajustado);

    return 0;
}
```


Próximo exemplo
---

- [Simples exemplo de TDD - Votos em relação ao total de eleitores](/tdd/exemplo-tdd-eleitores/)
