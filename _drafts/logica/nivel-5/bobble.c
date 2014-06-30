//
// gcc bobble.c -o executavel.run
//
// http://www.ft.unicamp.br/liag/siteEd/definicao/bubble-sort.php
// http://en.wikipedia.org/wiki/Bubble_sort
//
// https://www.youtube.com/watch?v=otqltM-ou0o
// https://www.youtube.com/watch?v=P00xJgWzz2c&list=PLAB1DA9F452D9466C&index=1
// https://www.youtube.com/watch?v=llX2SpDkQDc

#include <stdio.h>
#include <assert.h>

void mostrarVetor(int vetor[]) {
    printf("\n");
    int i;
    for (i = 0; i < 5; i++) {
        printf(" %d ", vetor[i]);
    }
}

void bubbleSort1(int vetor[], int tamanho) {
    int a, b, swap;

    for (a = 0; a < (tamanho - 1); a++) {
        printf("(%d): ", a);
        for (b = 0; b < tamanho - a - 1; b++) {
            printf("%d, ", b);
            if (vetor[b] > vetor[b + 1]) {
                swap = vetor[b];
                vetor[b] = vetor[b + 1];
                vetor[b + 1] = swap;
            }
        }
    }
}

void bubbleSort2(int vetor[], int tamanho) {
    int a, b, swap;

    for (a = 1; a < tamanho; a++) {
        printf("(%d): ", a);
        for (b = 0; b < tamanho - 1; b++)
            printf("%d, ", b);
            if (vetor[b] > vetor[b + 1]) {
                swap = vetor[b];
                vetor[b] = vetor[b + 1];
                vetor[b + 1] = swap;
            }
    }

}

void bubbleSort3(int vetor[], int tamanho) {
    int a, b, swap;
    for (a = tamanho - 1; a > 0; a--) {
        printf("(%d): ", a);
        for (b = 0; b < a; b++) {
            printf("%d, ", b);
            if (vetor[b] > vetor[b + 1]) {
                swap = vetor[b];
                vetor[b] = vetor[b + 1];
                vetor[b + 1] = swap;
            }
        }
    }
}

int main() {

    int vetorFoo[6];

    vetorFoo[0] = 2;
    vetorFoo[1] = 4;
    vetorFoo[2] = 1;
    vetorFoo[3] = 6;
    vetorFoo[4] = 5;
    vetorFoo[5] = 3;
//    mostrarVetor(vetorFoo);
    bubbleSort3(vetorFoo, 5);
//    mostrarVetor(vetorFoo);
    printf("\n");

    return 0;
}