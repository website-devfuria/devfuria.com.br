// Sabendo que a área quadrada é dada pela multiplicacao dos lados, qual seria
// a área do seguinte espaço 10x5? Utilize as variaveis "lado1" e "lado2".
//
// gcc area-quadrada.c -o executavel.run
//
#include <stdio.h>
#include <assert.h>

int main (){


	int lado1, lado2;

	lado1 = 10;
	lado2 = 5;

	// Testes 
	assert(50 == lado1 * lado2);

	return 0;
}
/*

	// Testes 
	assert(50 == 10 * 5);

*/
