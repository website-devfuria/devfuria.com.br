// Faça um programa que mostra a média simples (aritmética) de 3 valores quaisquer.
// Utilize as variáveis "valor1", "valor2" e "valor3".
//
// gcc media-simples.c -o executavel.run
//
#include <stdio.h>
#include <assert.h>
#include <math.h>

int main (){

	int valor1, valor2, valor3;

	valor1 = 6;
	valor2 = 7;
	valor3 = 8;

	// Testes
	assert(7 == (valor1 + valor2 + valor3) / 3);

	return 0;
}
/*

	assert(7 == 6 + 7 + 8 / 3);
	falhou

--

	assert(7 == (6 + 7 + 8) / 3);

*/
