#include <stdio.h>
#include <assert.h>

int main (){

	float a, b;

	a         = 9.0;
	b         = 80.0;
    assert( a / b == 9.0 / 80.0 );
	// mensagem de erro:
	// main: Assertion `a / b == 9.0 / 80.0' failed

	return 0;
}
// Estou compilando em um linux (centOS) com gcc desta forma:
// gcc fonte.c -o executavel.run
