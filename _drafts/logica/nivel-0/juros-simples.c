// Calcular o juros simples produzido pelo empréstimo de R$ 16.000,00 sobre a 
// taxa de 4% durante 4 meses.
//
// J = C.i.n, onde:
//
// J = juros,
// C = capital,
// i = taxa de empréstimo e
// n = períodos.
//                                            
// gcc juros-simples.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main (){

	float juros, capital, taxa;
	int n_periodos;	
	
	capital    = 16000;
	taxa       = 0.04;
	n_periodos = 4;
	
	juros = capital * taxa * n_periodos;

	assert(2560 == juros);
	return 0;
}
/*

1
	assert(2560 == 16000 * 0.04 * 4);

*/
