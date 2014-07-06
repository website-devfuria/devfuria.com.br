// Escreva um algoritmo para carregar um vetor com os números de 1 (inclusive) a
// 10 (inclusive) em ordem crescente.
//
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5];
    int i;

    for (i = 0; i < 5; i++) {
        vetor[i] = i + 1;
    }

    assert(1 == vetor[0]);
    assert(2 == vetor[1]);
    assert(3 == vetor[2]);
    assert(4 == vetor[3]);
    assert(5 == vetor[4]);
    return 0;
}

/*
1. Desafio:

Os códigos abaixo trazem o mesmo resultado do código do exercício.
Faça o teste de mesa de cada um deles para entender o porque são equivalentes.

for (i = 1; i < 6; i++) {
    vetor[i-1] = i;
}

for (i = 5; i > 0; i--) {
    vetor[i-1] = i;
}

for (i = 4; i > -1; i--) {
    vetor[i] = i + 1;
}

 * 
2. Desafio:
Transcrever tudo para while

while(i < 5){
    vetor[i] = i + 1;
    i++;
}
*/