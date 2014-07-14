//
// gcc foo-01.c -o executavel.run
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

int main(void) {

    float *p;
    float c = 15;
    
    p = &c;
    *p = *p + 1;
    
    printf(" %f ", c); // 16
    return 0;
}