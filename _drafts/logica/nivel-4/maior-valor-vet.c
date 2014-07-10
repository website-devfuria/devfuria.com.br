// Dado um vetor qualquer sem valores repetidos, descubra qual é o índice de maior valor.
// Utilize vetores e o laço "do-while".
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5], i, iMaior;
    
    vetor[0] = 5;
    vetor[1] = 6;
    vetor[2] = 10;
    vetor[3] = 21;
    vetor[4] = 9;
    
    do {
        if (vetor[i] > vetor[iMaior]) {
            iMaior = i;
        }
        i++;
    } while (i < 5);
    
    assert(21 == vetor[3]);
    return 0;
}
/*
    int vetor[5];
    
    vetor[0] = 5;
    vetor[1] = 6;
    vetor[2] = 10;
    vetor[3] = 21;
    vetor[4] = 9;
    
    assert(21 == vetor[3]);
  
 */