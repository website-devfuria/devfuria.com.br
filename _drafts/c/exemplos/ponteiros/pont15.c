//
// gcc foo-01.c -o executavel.run
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

int dobro(int *num) {
    *num = 2 * (*num);
}

int main (){
    
    int n = 5;
    
    dobro(&n);
    
	assert(n == 10);
	return 0;
}