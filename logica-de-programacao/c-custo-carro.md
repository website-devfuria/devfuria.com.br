---
layout:      grid12-article
title:       "Custo de fabricação de um carro - linguagem c"
description: Exercício de lógica de programação resolvido para descobrir o custo final de um carro.
---

O custo de um carro novo ao consumidor é obtido com a seguinte fómula:
  
    custo final = custo de fábrica +
			     (custo de fábrica * percentual do distribuidor) +
			     (custo de fábrica * percentual de impostos)

Considerando os valores abaixo, faça um programa para calcular o custo de fabricação.
 
    Custo de fábrica = 10.000,00
    Percentual do distribuidor = 28%
    Percentual dos Impostos  = 45%


Solução passo a passo
---

Este exercício é ótimo para praticar __TDD__, pois o problema é grande mas o __TDD__ nos ensina que podemos dar passsos
pequenos quando nos sentimos "inseguro" quanto a solução do problema.

Outra coisa interessante sobre o __TDD__ é que ele nos ajuda a pensar menos. Ao invés do desenvolvedor ficar matutando 
sobre o problema,  ele poderá fazer algumas suposições e testar em seguida para ir aos poucos transformando as suposições
em afirmações.

É isso que nós vamos fazer... 

Minha primeira suposição será sobre o custo final (custo de fabricação). Traduzindo o enunciado em uma fórmula matemática
temos:

	10.000 + (10.000 * 0.28) + (10.000 * 0.45%)
	10.000 +      2.800      +       4.500
	17.300

Ok, descobrimos o valor final, agora já podemos escrever o primeiro teste:

	float custoFinal;

	custoFinal = 17300;

	assert(17300.0f == custoFinal);

Obs: Aquele discreto `f` é para enquadrar o número no tipo `float`, se não fizermos isso a linguagem irá arrendondar
o valor e então a expressão não mais será "true" (verdaderia).

Percebe como pegamos um grande problema e atacamos uma pequena parte sem pensar muito?

O próximo passo é utilizar nossa conta para substiruir os `17300`.

    custoFinal = 10000.0f + 2800.0f + 4500.0f;

Se você acompanhou os exercícios anteriores, sabe que precisamos rodar os testes de tempo e tempo.

E que "rodar os testes", em nosso caso, nada mais é do que compilar e executar o programa.

Então, faça isso quando achar necessário. Eu não vou mais ficar avisando, ok?

Continuando, agora podemos substituir os `10000.0f` pela variável `custoFabrica`.

	float custoFabrica = 10000, custoFinal;

	custoFinal = custoFabrica + 2800.0f + 4500.0f;

	assert(17300.0f == custoFinal);

Sabemos que temos ainda o custo do distribuidor e o custo dos impostos, podemos começar declarando as variáveis (lembra-se
de rodar os testes).

	float custoFabrica = 10000,
		  custoDistribuidor,
		  custoImpostos,
		  custoFinal;

Agora atribuímos os devidos valores a cada variável

	custoDistribuidor = 2800.0f;
	custoImpostos     = 4500.0f;

Em seguida, acertamos o calculo do `custo final.

	custoFinal = custoFabrica + custoDistribuidor + custoImpostos;  

OK, mas esses valores apareceram como mágica? Não, nos calculamos na mão. Entao vamos fazer o computador calcular para a gente.

	custoDistribuidor = 10000.0f * 0.28f;
	custoImpostos     = 10000.0f * 0.45f;

E já podemos, também, subistituir os `10000.0f` pela variável `custoFabrica`.

	custoDistribuidor = custoFabrica * 0.28f;
	custoImpostos     = custoFabrica * 0.45f;

Fim da linha, transformamos uma suposição em afirmação.


Código completo
---

```c
#include <stdio.h>
#include <assert.h>

int main() {
    
    float custoFabrica = 10000,
          custoDistribuidor,
          custoImpostos,
          custoFinal;

    custoDistribuidor = custoFabrica * 0.28f;
    custoImpostos     = custoFabrica * 0.45f;
    custoFinal        = custoFabrica + custoDistribuidor + custoImpostos;    

    assert(17300.0f == custoFinal);
    return 0;
    
}
```