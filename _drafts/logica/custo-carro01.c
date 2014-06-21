// O custo final de um carro é obtido com a soma do custo de fábrica mais o custo
// do distribuidor mais o custo dos impostos. O custo do distribuidor é igual
// ao custo de fábrica * percentual do distribuidor. O custo dos impostos é igual
// ao custo de fábrica * percentual de impostos.
// 
// Considerando os valores abaixo, faça um programa para calcular o custo final.
// 
// Custo de fábrica = 10.000,00
// Percentual do distribuidor = 28%
// Impostos  = 45%
//
// gcc custo-carro01.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main (){

	float custoFabrica = 10000,
		  custoDistribuidor,
		  custoImpostos,
		  custoFinal;

	custoImpostos     = custoFabrica * 0.45f;
	custoDistribuidor = custoFabrica * 0.28f;
	custoFinal        = custoFabrica + custoDistribuidor + custoImpostos;

	// 4.500
	assert(custoFabrica * 0.45f == custoImpostos);

	// 2.800
	assert(custoFabrica * 0.28f == custoDistribuidor);

	// 10.000 + 2.800 + 4.500
	assert(17300.0f == custoFinal);

	return 0;
}
/*
1
	float custoFinal;

	custoFinal = 17300;

	// 10.000 + (10.000 * 0.28) + (10.000 * 0.45%)
	// 10.000 + 2.800 + 4.500
	// 17.300
	assert(17300.0f == custoFinal);


2
	custoFinal = 10000.0f + 2800.0f + 4500.0f;

3
	float custoFabrica = 10000,
		  custoFinal;

	custoFinal = custoFabrica + 2800.0f + 4500.0f;

4
	assert(2800.0f == custoDistribuidor);

5
	custoDistribuidor = (10000.0f * 0.28f);

6
	custoDistribuidor = (custoFabrica * 0.28f);
	custoFinal = custoFabrica + (custoFabrica * 0.28f) + 4500.0f;
7
	custoDistribuidor = (custoFabrica * 0.28f);
	custoFinal = custoFabrica + custoDistribuidor + 4500.0f;

8
	assert(4500.0f == custoImpostos);

9
	custoImpostos = (10000 * 0.45f);

10
	float custoFabrica = 10000,
		  custoDistribuidor,
		  custoImpostos,
		  custoFinal;

	custoImpostos = custoFabrica * 0.45f;
	custoDistribuidor = custoFabrica * 0.28f;
	custoFinal = custoFabrica + custoDistribuidor + custoImpostos;

	// 10.000 * 0.45%
	assert(4500.0f == custoImpostos);

	// 10.000 * 0.28
	assert(2800.0f == custoDistribuidor);

	// 10.000 + 2.800 + 4.500
	assert(17300.0f == custoFinal);
11
	float custoFabrica = 10000,
		  custoDistribuidor,
		  custoImpostos,
		  custoFinal;

	custoImpostos     = custoFabrica * 0.45f;
	custoDistribuidor = custoFabrica * 0.28f;
	custoFinal        = custoFabrica + custoDistribuidor + custoImpostos;

	// 4.500
	assert(custoFabrica * 0.45f == custoImpostos);

	// 2.800
	assert(custoFabrica * 0.28f == custoDistribuidor);

	// 10.000 + 2.800 + 4.500
	assert(17300.0f == custoFinal);



*/
