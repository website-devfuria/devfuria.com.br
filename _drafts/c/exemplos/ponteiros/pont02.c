//
// gcc foo-01.c -o executavel.run
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

int main(void) {

    int *p;
    int c = 10;
    int d;
    
    p = &c;
    d = *p;

    printf(" %d ", d); // 10
    return 0;
}