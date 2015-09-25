#include <stdio.h>
#include <assert.h>

int fatorial(int n) {
    if(n <= 1)
        return 1;
    else
        return ( n * fatorial(n-1) );
}

int main() {
    assert(1 == fatorial(0));
    assert(1 == fatorial(1));
    assert(2 == fatorial(2));
    assert(6 == fatorial(3));
    assert(6 == fatorial(3));
    assert(24 == fatorial(4));
    assert(120 == fatorial(5));
    assert(720 == fatorial(6));

    return 0;
}