// Escreva um algoritmo que armazene o valor 999 em uma variável A e o valor 555 em uma variável B.
// A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos fazendo com que o
// valor que está em A passe para B e vice-versa. 
//
// gcc duas-variaveis.c -o executavel.run
//
#include <stdio.h>
#include <assert.h>
#include <math.h>

int main (){


	int a, b, temp;

	a = 999;
	b = 555;

	temp = a;	// registramos o valor de 'a' em 'temp'
	a = b;		// sobrescrever 'a' com o valor de 'b'
	b = temp;	// sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')


	// Testes 
	assert(a == 555);
	assert(b == 999);

	return 0;
}

/*
1
	assert(a == 555);
	assert(b == 999);

2
	int a, b;

	a = 999;
	b = 555;

	assert(a == 555);
	assert(b == 999);
*/
