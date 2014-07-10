//
// gcc foo-01.c -o executavel.run
#include <stdlib.h>
#include <stdio.h>
#include <assert.h>

void adicionaX1(int x, int b) {
    b = b + x;
}

void adicionaX2(int x, int *b) {
    *b = *b + x;
}

int main(void) {
    int a = 0;

    adicionaX1(10, a);
    printf(" a = % d\n", a); // 0

    adicionaX2(10, &a);
    printf(" a = % d\n", a); // 10

    return 0;
}