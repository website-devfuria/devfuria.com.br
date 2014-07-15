// gcc foo.c -o executavel.run
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