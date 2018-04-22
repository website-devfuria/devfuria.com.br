---
title:       Introdução ao algoritmo de ordenação Insertion Sort
description:
capitulo:    logica-nivel-7
ordem:       3
---

Este artigo trata do algoritmo de ordenação __Insertion Sort__.

Vamos utilizar o mesmo vetor de exemplo do artigo anterior.

    v = {5, 3, 2, 4, 7, 1, 0, 6}

O nosso objetivo é fazer um algoritmo que ordene o vetor acima.

O Insertion Sort começa a trabalhar com o segundo valor do vetor e vai jogando ele para a esquerda (início do vetor).
Ele percorre todo o vetor um única vez, porém para fazer o movimento descrito (jogar para o início) ele utiliza-se de
outro laço interno. O esquema seria mais ou menos isso...

    // o primeiro laço percorre o vetor completamente
    for()
        // o segundo laço percorre o vetor para trás
        // empurrando o número para o início do vetor
        while

Vamos ver um passo a passo. Com dito, iniciamos a trabalhar com o segundo valor do vetor, ou seja, o de índice `1`,
no caso o valor `3`.

     5 [3] 2  4  7  1  0  6
    (5  3) 2  4  7  1  0  6   comparamos com o valor anterior
     3--5  2  4  7  1  0  6   trocamos

Na segunda iteração pegamos o próximo valor (`2`) e vamos comparando para trás, quero dizer, vamos comparando com os
valores anteriores.

     3  5 [2] 4  7  1  0  6
     3 (5  2) 4  7  1  0  6   comparamos com o valor anterior
     3  2--5  4  7  1  0  6   trocamos
    (3  2) 5  4  7  1  0  6   comparamos com o valor anterior
     2--3  5  4  7  1  0  6   trocamos

Na terceira iteração pegamos o valor `4` e, novamente, comparamos com os valores anteriores.

     2  3  5 [4] 7  1  0  6
     2  3 (5  4) 7  1  0  6   comparamos com o valor anterior
     2  3  4--5  7  1  0  6   trocamos
     2 (3  4) 5  7  1  0  6   comparamos com o valor anterior

Na quarta iteração é bem rápida pois o valor que pegamos (`7`) acabamos não trocando e isto significa que podemos seguir
em frente.

     2  3  4  5 [7] 1  0  6
     2  3  4 (5  7) 1  0  6   não trocamos

Na quinta iteração dá um certo trabalho pois pegamos o `1` e temos que levá-lo até o início do vetor.

     2  3  4  5  7 [1] 0  6
     2  3  4  5 (7  1) 0  6   comparamos com o valor anterior
     2  3  4  5  1--7  0  6   trocamos
     2  3  4 (5  1) 7  0  6   pegamos o par anterior
     2  3  4  1--5  7  0  6   trocamos
     2  3 (4  1) 5  7  0  6   pegamos o par anterior
     2  3  1--4  5  7  0  6   trocamos
     2 (3  1) 4  5  7  0  6   pegamos o par anterior
     2  1--3  4  5  7  0  6   trocamos
    (2  1) 3  4  5  7  0  6   pegamos o par anterior
     1--2  3  4  5  7  0  6   trocamos

Na sexta iteração mais um pouco de trabalho, temos que levar o `0` (zero) até o início do vetor.

     1  2  3  4  5  7 [0] 6
     1  2  3  4  5 (7  0) 6   comparamos com o valor anterior
     1  2  3  4  5  0--7  6   trocamos
     1  2  3  4 (5  0) 7  6   pegamos o par anterior
     1  2  3  4  0--5  7  6   trocamos
     1  2  3 (4  0) 5  7  6   pegamos o par anterior
     1  2  3  0--4  5  7  6   trocamos
     1  2 (3  0) 4  5  7  6   pegamos o par anterior
     1  2  0--3  4  5  7  6   trocamos
     1 (2  0) 3  4  5  7  6   pegamos o par anterior
     1  0--2  3  4  5  7  6   trocamos
     (1 0) 2  3  4  5  7  6   pegamos o par anterior
     0--1  2  3  4  5  7  6   trocamos

Na sétima e última iteração realizamos apenas uma troca.

     0  1  2  3  4  5  7 [6]
     0  1  2  3  4  5 (7  6)  comparamos com o valor anterior
     0  1  2  3  4  5  6--7   trocamos
     0  1  2  3  4 (5  6) 7   não trocamos


Se preferir, veja o vídeo abaixo para entender melhor o exemplo acima.

Obs: Eu utilizo os mesmos valores do vídeo.

<iframe width="420" height="315" src="https://www.youtube.com/embed/-Z00it6Nkz8" frameborder="0" allowfullscreen></iframe>

Segue o exemplo na linguagem C:

```c
   int k, j, aux;

   for (k = 1; k <= n - 1; k++){
      printf("\n[%d] ", k);

      aux = vetor[k];
      j = k - 1;
      while (j >= 0 && aux < vetor[j]) {
         printf("%d, ", j);

         vetor[j+1] = vetor[j];
         j--;
      }

      vetor[j+1] = aux;
   }
```

Se olharmos os índices do vetor teremos o seguinte resultado:

    [1] 0,
    [2] 1, 0,
    [3] 2,
    [4]
    [5] 4, 3, 2, 1, 0,
    [6] 5, 4, 3, 2, 1, 0,
    [7] 6,

Pode parecer estranho à primeira vista, mas olhando com cuidado você verá que os índices referem-se a quantidade de
trocas em cada iteração.

Na 4 iteração, por exemplo, não houve troca alguma.
