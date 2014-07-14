//
// gcc foo-01.c -o executavel.run
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

void troca(int *x, int * y) {
    int aux;

    aux = *x;
    *x  = *y;
    *y  = aux;
}

main() {
    
    int a, b;
    a = 10;

    troca(&a, &b);
    printf(" a = %d , b = % d \n ", a, b); // a = 0, b = 10

}
