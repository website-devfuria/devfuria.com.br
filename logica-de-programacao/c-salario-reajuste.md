---
layout:      grid93-article
title:       "Reajustando o salário <small>(linguagem C)</small>"
description: Exercício de lógica de programação - calcular o reajuste do salário.
menu:        logica-exerc-nivel-01
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Sendo o salário de 1.000,00 e o reajuste de 15%, faça um algoritmo que calcule o reajuste de um salário.



### Solução passo a passo

Escreva o teste.

    float reajusteValor;

    reajusteValor = 1000.0f * 0.15f;

    assert(150.0f == reajusteValor);


Substituímos os valores por variáveis.

    float salario, reajustePorc, reajusteValor;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

Testes passando, trabalho acabado. 



### Código quase final

```c
#include <stdio.h>
#include <assert.h>

int main (){

    float salario, reajustePorc, reajusteValor;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    assert(150.0f == reajusteValor);

    return 0;
}
```


Bom, pelo menos até o seu chefe chegar e dizer que não era exatamente este o comportamento esperado.

Ele queria que o reajuste fosse somado ao salário, poupando-lhe o trabalho de realizer essa soma manualmente.

OK, vamos alterar o código. Mas não sem antes escrever um teste...

    assert(1150.0f == salarioReajustado);

...e ver ele falhar.

    Assertion `1150.0f == salarioReajustado' failed

Não esqueça de declarar a variável `salarioReajustado`, se não o programa nem compila.

    float salario, reajustePorc, reajusteValor, salarioReajustado;

A medida que evoluírmos, eu não irei mais dar essas dicas, você deve ir se virando sozinho(a).

Continuando, já temos um teste. Mas ele falha (red).

Como você faria ele passar? Aposto que dessa forma:

    salarioReajustado = salario + reajusteValor;

Eu não faria isso! Porque? Por que eu sou um cara que trabalhei um tempo em departamento financeiro, tesourarias e
minha cabeça também é financeira.

Eu sei que para simplificar a conta, somamos 1 a porcentagem obtendo, dessa forma o montante (sem precisar somá-lo posteriormente).

Na calculadora (eu usei muito viu!) é mais prático 1000 * 1.15 do que (1000 * 0.15) + 1000.

Só que eu não pesei nisso tudo, eu simplesmente programei, e meu código ficou assim.

    salarioReajustado = salario * (1 + reajustePorc);

Os testes passaram, porém...


### Código complicado

```c
#include <stdio.h>
#include <assert.h>

int main (){

    float salario, reajustePorc, reajusteValor, salarioReajustado;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    salarioReajustado = salario * (1 + reajustePorc);// aqui está a complicação

    assert(150.0f == reajusteValor);
    assert(1150.0f == salarioReajustado);

    return 0;
}
```


Algum tempo depois você foi contratado(a) para trabalhar com a gente e se deparou com o nosso código.

Imaginando que sua "mente não é financeira", você olha para o código e se pergunta "Quem escreveu esta porcaria?".

Você olha para os dois lados e aproveitando que ninguém está vendo, resolve melhorar esse código.

Poderíamos chamar essa "melhoria" de refatoração.

__Antes de alterar o código rode os testes__ para saber se está tudo ok.

Tudo ok? Sim? Então lá vai você e...

    salarioReajustado = salario + reajusteValor;

Mas como saber se seu código funciona? Rode os testes.

Ufa, agora sim fim da linha.


### Código refatorado

```c
#include <stdio.h>
#include <assert.h>

int main (){

    float salario, reajustePorc, reajusteValor, salarioReajustado;

    salario       = 1000;
    reajustePorc  = 0.15;
    reajusteValor = salario * reajustePorc;

    salarioReajustado = salario + reajusteValor;

    assert(150.0f == reajusteValor);
    assert(1150.0f == salarioReajustado);

    return 0;
}
```