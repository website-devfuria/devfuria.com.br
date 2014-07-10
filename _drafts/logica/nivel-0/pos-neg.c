// Descobrir se um valor é positivo ou negativo (considere o valor zero como positivo)
//
// gcc pos-neg.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int ehPositivo(int numero) {
    return numero % 2;
}

int main (){

	assert(ehPositivo(8) == 0);
	assert(ehPositivo(7) != 0);
	assert(ehPositivo(0) == 0);

	return 0;
}
