// Dado um vetor qualquer sem valores repetidos, descubra qual é o índice de menor valor.
// Utilize vetores e o laço "do-while".
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5], i, iMenor;
    
    vetor[0] = 5;
    vetor[1] = 6;
    vetor[2] = 10;
    vetor[3] = 21;
    vetor[4] = 9;
    
    do {
        if (vetor[i] < vetor[iMenor]) {
            iMenor = i;
        }
        i++;
    } while (i < 5);
    
    assert(6 == vetor[1]);
    return 0;
}