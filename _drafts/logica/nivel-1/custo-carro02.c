// O custo de um carro novo ao consumidor é obtido com a seguinte fómula:
//  
// custo final = custo de fábrica +
//			     custo de fábrica * percentual do distribuidor +
//			     custo de fábrica * percentual de impostos
//
// Considerando os valores abaixo, faça um programa para calcular o custo final.
// 
// Custo de fábrica = 10.000,00
// Percentual do distribuidor = 28%
// Impostos  = 45%
//
// gcc custo-carro02.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main (){

	float custoFabrica,
		  custoDistribuidor,
		  custoImpostos;

	custoFabrica      = 10000.00;
	custoDistribuidor = custoFabrica * 0.28;
	custoImpostos     = custoFabrica * 0.45;

	assert(10000.0f  == custoFabrica);
	assert(2800.00f  == custoDistribuidor);
	assert(4500.00f  == custoImpostos);
	assert(17300.00f == custoFabrica + custoDistribuidor + custoImpostos);

	return 0;
}
/*

1

	assert(10000.0f  == custoFabrica);
	assert(2800.00f  == custoFabrica * custoDistribuidor);
	assert(4500.00f  == custoFabrica * custoImpostos);

2
	//assert(10000.0f  == custoFabrica);
	//assert(2800.00f  == custoFabrica * custoDistribuidor;
	//assert(4500.00f  == custoFabrica * custoImpostos);
3

	float custoFabrica;

	custoFabrica = 10000.00;

	assert(10000.0f  == custoFabrica);
	//assert(280.00f   == custoFabrica * custoDistribuidor);
	//assert(450.00f   == custoFabrica * custoImpostos);


4

	float custoFabrica,
		  custoDistribuidor;

	custoFabrica      = 10000.00;
	custoDistribuidor = 0.28;

	assert(10000.0f  == custoFabrica);
	assert(2800.00f  == custoFabrica * custoDistribuidor);
	//assert(4500.00f   == custoFabrica * custoImpostos);

5

	float custoFabrica,
		  custoDistribuidor,
		  custoImpostos;

	custoFabrica      = 10000.00;
	custoDistribuidor = 0.28;
	custoImpostos     = 0.45;

	assert(10000.0f  == custoFabrica);
	assert(2800.00f  == custoFabrica * custoDistribuidor);
	assert(4500.00f  == custoFabrica * custoImpostos);


6

	float custoFabrica,
		  custoDistribuidor,
		  custoImpostos;

	custoFabrica      = 10000.00;
	custoDistribuidor = 0.28;
	custoImpostos     = 0.45;

	assert(10000.0f  == custoFabrica);
	assert(2800.00f  == custoFabrica * custoDistribuidor);
	assert(4500.00f  == custoFabrica * custoImpostos);
	assert(17300.00f == custoFabrica + (custoFabrica * custoDistribuidor) + (custoFabrica * custoImpostos));
*/
