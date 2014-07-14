//
// gcc equacao-2-grau.c -o executavel.run
#include <math.h>
#include <stdio.h>
#include <assert.h>

int delta(int a, int b, int c) {
    return b*b -4 * a * c;
}
int raiz1(int a, int b, int c) {
    return (-b + sqrt(delta(a, b, c))) / 2 * a;
}
int raiz2(int a, int b, int c) {
    return (-b - sqrt(delta(a, b, c))) / 2 * a;
}

int main() {

    int a, b, c;

    a = 1; b = 0; c = -16;
    assert(64 == delta(a, b, c));
    assert(4 == raiz1(a, b, c));
    assert(-4 == raiz2(a, b, c));
    
    a = 1; b = 11; c = 0;
    assert(121 == delta(a, b, c));
    assert(0 == raiz1(a, b, c));
    assert(-11 == raiz2(a, b, c));

    return 0;
}
