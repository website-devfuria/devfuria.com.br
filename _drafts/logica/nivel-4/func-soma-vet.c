// Crie uma função que retorna a soma de um vetor qualquer.
#include <stdio.h>
#include <assert.h>

int retSomaVetor(int vt[], int i) {
    int soma;
    
    while (i > 0) {
        soma += vt[i - 1];
        i--;
    }
    return soma;
}

int main() {
    int vetor[3], tamanho = 3;

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    assert(60 == retSomaVetor(vetor, tamanho));

    return 0;
}