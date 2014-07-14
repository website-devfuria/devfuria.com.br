// gcc foo.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main() {

    int num, dobro;
    
    num   = 5;
    dobro = 2 * num;
    assert(10 == dobro);

    return 0;
}