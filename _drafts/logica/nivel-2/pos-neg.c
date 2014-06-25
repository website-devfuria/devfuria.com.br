// Descobrir se um valor é positivo ou negativo (considere o valor zero como positivo)
//
// gcc foo-01.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int ePositivo(int numero) {
    return numero % 2;
}

int main (){

	assert(ePositivo(8) == 0);
	assert(ePositivo(7) != 0);
	assert(ePositivo(0) == 0);

	return 0;
}
