#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

int main(void) {

    int *a, *b, *temp;
    
    a    = (int *) malloc(4 * (sizeof (int)));
    b    = (int *) malloc(4 * (sizeof (int)));    
    temp = (int *) malloc(4 * (sizeof (int)));    
    
    *a = 999;
    *b = 555;
    
    *temp = *a;
    *a = *b;
    *b = *temp;
            
    assert(*a == 555);
    assert(*b == 999);
    return 0;
}