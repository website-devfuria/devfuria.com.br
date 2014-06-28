//
// gcc foo-01.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int retornaVetor() {
    int foo[2];
    
    foo[0] = 1;
    foo[1] = 2;
    foo[2] = 3;
    return foo;
}


int main (){

    //assert(1 == retornaVetor());

	return 0;
}