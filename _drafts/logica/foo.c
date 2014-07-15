// gcc foo.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int dobro(int num) {
    return 2 * num;
}

int main (){
    
	assert(10 == dobro(5));
	assert(12 == dobro(6));
	return 0;
}