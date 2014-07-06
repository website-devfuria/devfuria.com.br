// Escreva um algoritmo para carregar um vetor com os números de 1 (inclusive) a
// 10 (inclusive) em ordem crescente.
//
// gcc foo-01.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5];
    int i;

    while(i < 5){
        vetor[i] = i + 1;
        i++;
    }

    assert(1 == vetor[0]);
    assert(2 == vetor[1]);
    assert(3 == vetor[2]);
    assert(4 == vetor[3]);
    assert(5 == vetor[4]);
    return 0;
}