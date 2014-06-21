// Sendo o salário de 1.000,00 e o reajuste de 15%, faça um algoritmo que calcule
// o reajuste de um salário.
//
// gcc foo-01.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main (){

	float salario, reajustePorc, reajusteValor;
	
	salario = 1000;
	reajustePorc = 0.15;
	reajusteValor = salario * reajustePorc;

    assert(150.0f == reajusteValor);

	return 0;
}
/*


*/
