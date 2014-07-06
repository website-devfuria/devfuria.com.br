// Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.
//
// gcc antecessor-sucessor.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main (){

	int numero,
        antecessor, sucessor;

	numero = 10;
	antecessor = numero - 1;
	sucessor   = numero + 1;

    assert(9 == antecessor);
    assert(11 == sucessor);

	return 0;
}
/*

1
    assert(9 == antecessor);
    assert(11 == sucessor);

2
	int antecessor, sucessor;


    assert(9 == antecessor);
    assert(11 == sucessor);

3
	int antecessor, sucessor;

	antecessor = 9;
	sucessor = 11;

    assert(9 == antecessor);
    assert(11 == sucessor);


*/
