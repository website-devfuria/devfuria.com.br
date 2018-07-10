---
title:       Exemplos na linguagem C do algoritmo Bubble Sort
description:
capitulo:    logica-nivel-7
ordem:       2
---

Ordenar um vetor é algo interessante.

Neste artigo eu mostro 4 exemplos escritos na linguagem C que ordenam um vetor através do já conhecido algoritmo
Bubble Sort.

Pressuponho que você conheça o algoritmo.


### Exemplo 1

```c
void bubble_sort (int vetor[], int n) {
    int k, j, aux;

    for (k = 1; k < n; k++) {
        printf("\n[%d] ", k);

        for (j = 0; j < n - 1; j++) {
            printf("%d, ", j);

            if (vetor[j] > vetor[j + 1]) {
                aux          = vetor[j];
                vetor[j]     = vetor[j + 1];
                vetor[j + 1] = aux;
            }
        }
    }
}
```

O algoritmo acima compila normalmente e até retorna o resultado esperado (um vetor ordenado) mas ele percorre o vetor
por completo mesmo quando ele já foi ordenado. Me refiro ao laço `for` mais interno.

Se você pedir para imprimir as variáveis de iteração `k` e `j` conforme exemplo abaixo...

```c
...
    for (k = 1; k < n; k++) {
        printf("\n[%d] ", k);
        for (j = 0; j < n - 1; j++) {
            printf("%d, ", j);
...
```

...você verá o seguinte resultado:

    [1] 0, 1, 2, 3, 4, 5, 6,
    [2] 0, 1, 2, 3, 4, 5, 6,
    [3] 0, 1, 2, 3, 4, 5, 6,
    [4] 0, 1, 2, 3, 4, 5, 6,
    [5] 0, 1, 2, 3, 4, 5, 6,
    [6] 0, 1, 2, 3, 4, 5, 6,
    [7] 0, 1, 2, 3, 4, 5, 6,


Vamos ao exemplo 2, pois ele esclarecerá as coisas.



### Exemplo 2

```c
void bubble_sort (int vetor[], int n) {
    int k, j, aux;

    for (k = 1; k < n; k++) {
        printf("\n[%d] ", k);

        for (j = 0; j < n - k; j++) {
            printf("%d, ", j);

            if (vetor[j] > vetor[j + 1]) {
                aux          = vetor[j];
                vetor[j]     = vetor[j + 1];
                vetor[j + 1] = aux;
            }
        }
    }
}
```

A diferença entre o primeiro exemplo é o laço `for` mais interno.

Ele não mais compara `n - 1` e sim `n - k`, ou seja, ele é mais econômico e reflete com fidelidade o algoritmo
Bubble Sort.

Se você imprimir os índices `k` e `j` verá algo semelhante ao exibido abaixo.

    [1] 0, 1, 2, 3, 4, 5, 6,
    [2] 0, 1, 2, 3, 4, 5,
    [3] 0, 1, 2, 3, 4,
    [4] 0, 1, 2, 3,
    [5] 0, 1, 2,
    [6] 0, 1,
    [7] 0,

Viu como que a cada iteração ele percorre o vetor parcialmente?



### Exemplo 3

Este terceiro exemplo difere do anterior apenas porque começamos o primeiro laço com o valor `0` (zero).

Isso implica em fazer a correção "menos um". O que antes era `k < n` agora ficou `k < n - 1`.

No laço mais interno (segundo laço) também precisamos corrigi com "menos um".

```c
void bubble_sort (int vetor[], int n) {
    int k, j, aux;

    for (k = 0; k < n - 1; k++) {
        printf("\n[%d] ", k);

        for (j = 0; j < n - k - 1; j++) {
            printf("%d, ", j);

            if (vetor[j] > vetor[j + 1]) {
                aux          = vetor[j];
                vetor[j]     = vetor[j + 1];
                vetor[j + 1] = aux;
            }
        }
    }
}
```

Apesar disso o algoritmo chega ao mesmo resultado, veja os índices impressos:

    [0] 0, 1, 2, 3, 4, 5, 6,
    [1] 0, 1, 2, 3, 4, 5,
    [2] 0, 1, 2, 3, 4,
    [3] 0, 1, 2, 3,
    [4] 0, 1, 2,
    [5] 0, 1,
    [6] 0,

Podemos considerar que o algoritmo ficou menos legível se comparamos com o exemplo 2, mas ele reflete mais fielmente a
teoria por trás do Bubble Sort que é mais ou menos isso:

O algoritmo (Bubble Sort) requer `n - 1` passagens para cada elemento de `n`.

Quer dizer que e o seu elemento for de tamanho 8 (como é o nosso caso) ele passará 7 vez (de 0 a 6).

E em cada passagem nos temos `n - k` comparações.

Só por isso eu apresentei a você este terceiro exemplo, para refletir em como o algorítmo pode traduzir a solução
refletindo (ou não) a teoria que o sustenta.


### Exemplo 4

Este quarto e último exemplo é para mostrar que o que é bom ainda pode ser melhorado.

O código abaixo, ainda chega no mesmo resultado, porém ele faz isso através de um laço decrescente.

Isso implica em trocar `for (k = 0; k < n - 1; k++) {` por `for (k = n - 1; k > 0; k++) {`.

E no segundo laço, simplificamos, `for (j = 0; j < n - k - 1; j++) {` por `for (j = 0; j < k; j++) {`.

```c
void bubble_sort (int vetor[], int n) {
    int k, j, aux;

    for (k = n - 1; k > 0; k--) {
        printf("\n[%d] ", k);

        for (j = 0; j < k; j++) {
            printf("%d, ", j);

            if (vetor[j] > vetor[j + 1]) {
                aux          = vetor[j];
                vetor[j]     = vetor[j + 1];
                vetor[j + 1] = aux;
            }
        }
    }
}
```

E para termos a certeza de que ele mantém o resultado esperado veja os índices:

    [7] 0, 1, 2, 3, 4, 5, 6,
    [6] 0, 1, 2, 3, 4, 5,
    [5] 0, 1, 2, 3, 4,
    [4] 0, 1, 2, 3,
    [3] 0, 1, 2,
    [2] 0, 1,
    [1] 0,
