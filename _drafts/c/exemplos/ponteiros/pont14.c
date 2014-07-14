//
// gcc foo-01.c -o executavel.run
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

int dobro(int *num) {
    return 2 * (*num);
}

int main (){
    
    int n = 5;

	assert(10 == dobro(&n));
	return 0;
}