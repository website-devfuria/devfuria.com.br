// Sabendo que a área quadrada é dada pela multiplicacao, escreva um algoritmo
// que mostre a área quadrada de um espaço qualquer.
//
// gcc area-quadra2.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main (){

	int lado1, lado2, area;
	
	lado1 = 3;
	lado2 = 9;
	area = lado1 * lado2;

    assert(27 == area);

	return 0;
}
/*


1
    assert(27 == 3 * 9);

2
	int lado1, lado2;
	
	lado1 = 3;
	lado2 = 9;

    assert(27 == lado1 * lado2);




*/
