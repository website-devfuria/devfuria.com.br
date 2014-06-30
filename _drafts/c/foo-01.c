//
// gcc foo-01.c -o executavel.run
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

int main(void) {

    int *num, *dobro;
    num   = (int *) malloc(4 * (sizeof (int)));
    dobro = (int *) malloc(4 * (sizeof (int)));
    
    *num = 5;
    *dobro = *num * 2;

    assert(10 == *dobro);
    return 0;
}