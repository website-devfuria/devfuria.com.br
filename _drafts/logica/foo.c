// Crie um algoritimo para copiar um vetor. Utilize laço de repetição.

// gcc foo.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main() {
    int i,
        vetor1[3] = {10, 20, 30},
        vetor2[3];

    for(i = 0; i < 3; i++) {
        vetor2[i] = vetor1[i];
    }
    
    assert(vetor2[0] == 10);
    assert(vetor2[1] == 20);
    assert(vetor2[2] == 30);

    return 0;
}

/*

vetor2[0] = vetor1[0];
vetor2[1] = vetor1[1];
vetor2[2] = vetor1[2];

*/