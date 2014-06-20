// Considerando que todos os meses tenham 30 dias, calcular o total de dias de n meses, 
//
// gcc dia-n-meses.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main (){

	int nMeses, dias;

	nMeses = 7;
	dias = 30 * nMeses;
	
    assert(210 == dias);

	return 0;
}



