---
title:       Introdução ao algoritmo de ordenação Bubble Sort
description: 
capitulo:    logica-nivel-7
ordem:       1
ogimage:     algoritmo-bubble-sort.png 
---

Imagine o seguinte vetor.

    v = {5, 3, 2, 4, 7, 1, 0, 6}

Faça um algoritmo que ordene o vetor acima.

É disso que este artigo trata, algoritmos de ordenação. 

Existem vários algoritmos para esse fim, neste artigo veremos o mais simples dele: __Bubble Sort__.

> O algoritmo de "ordenação bolha", ou "bubble sort", recebeu este nome pela imagem pitoresca usada para descrevê-lo: 
> os elementos maiores são mais leves, e sobem como bolhas até suas posições corretas.
>
> W. Celes e J. L. Rangel

O Bubble Sort vai ordenando de par em par. Ele pega os dois primeiros elementos e pergunta se o primeiro é maior que o
segundo. Se sim, os elementos são trocados (swap), se não, são mantidos. Vai repetindo o processo até o final do vetor.

Obviamente que ele não consegue ordenar todo o vetor em uma única rodada, ele terá que passar pelo vetor um certo
número de vezes.

De maneira mais formal podemos destacar:

1. Percorra o vetor inteiro comparando elementos adjacentes (dois a dois) 
2. Troque as posições dos elementos se eles estiverem fora de ordem 
3. Repita os dois passos acima (n - 1) vezes, onde n é igual ao tamanho do vetor

OK, vamos fazer um exemplo para facilitar o entendimento.

Voltemos ao nosso vetor. 

    5, 3, 2, 4, 7, 1, 0, 6

Sabemos que iremos repetir o vetor `n - 1` vezes. O tamanho do vetor é 8, logo iremos repetir 7 vezes o vetor (`8-1`).

Vamos chamar cada repetição de iteração.

Então, na __primeira iteração__, pegamos os dois primeiros valores e trocamos se estiverem fora de ordem.

    (5  3) 2  4  7  1  0  6   pegamos o primeiro par
     3--5  2  4  7  1  0  6   trocamos
     
     3 (5  2) 4  7  1  0  6   pegamos o próximo par
     3  2--5  4  7  1  0  6   trocamos

     3  2 (5  4) 7  1  0  6   pegamos o próximo par
     3  2  4--5  7  1  0  6   trocamos

     3  2  4 (5  7) 1  0  6   pegamos o próximo par
     3  2  4  5--7  1  0  6   mantemos <----

     3  2  4  5 (7  1) 0  6   pegamos o próximo par
     3  2  4  5  1--7  0  6   trocamos

     3  2  4  5  1 (7  0) 6   pegamos o próximo par
     3  2  4  5  1  0--7  6   trocamos

     3  2  4  5  1  0  (7  6) pegamos último par
     3  2  4  5  1  0   6  7  trocamos

Chegamos ao fim da primeira iteração e, como dito, não foi suficiente para ordenar o vetor.

Teremos que reiniciar, só que agora sabemos que, pelo menos, o último valor (`7`) já está em seu devido lugar

Então iremos marcá-lo e não precisaremos percorrer todo o vetor na segunda iteração.

     3  2  4  5  1  0   6  [7]

Esse detalhe é importante é fará toda a diferença no entendimento do algoritmo.

Veja o vídeo abaixo, ele ilustra o algoritmo Bubble Sort e eu utilizei os mesmos valores (de propósito) para facilitar
ainda mais o entendimento.

<iframe width="420" height="315" src="https://www.youtube.com/embed/llX2SpDkQDc" frameborder="0" allowfullscreen></iframe>

O próximo vídeo é mais um exemplo do algoritmo Bubble Sort só que há um detalhe importante.

Ele não marca os valores já ordenados, ou seja ele percorre o vetor completamente em cada iteração, o que pode ser 
considerado um desperdício. Mas veja o vídeo para entender a diferença.

<iframe width="420" height="315" src="https://www.youtube.com/embed/otqltM-ou0o" frameborder="0" allowfullscreen></iframe>

No artigo seguinte veremos 4 exemplos de implementação na linguagem C.

O primeiro exemplo ilustra o último vídeo, onde há o desperdício.

O segundo exemplo ilustra o vídeo anterior, onde não há o desperdício.



Análise assintótica
---

    n = vetor

Para cada elemento de `n`:

- na primeira iteração temos `n - 1`
- na segunda iteração temos `n - 2`
- na terceira iteração temos `n - 3`
- etc...

E em cada iteração temos `n - k` comparações.

![](bubble-sort.png)



Esboço da implementação
---

Aqui é um esboço pois no artigo seguinte veremos 4 exemplo em C.



```c
// Vamos ter que percorrer todo o vetor, logo:
for (k = 1; k < n; k++) {
    // Dentro de cada iteração
    // percorremos novamente o vetor
    // em busca dos pares
    for (j = 0; j < n - k; j++) {
        // Comparamos
        if (vetor[j] > vetor[j + 1]) {
            // swap (trocamos)
            aux          = vetor[j];
            vetor[j]     = vetor[j + 1];
            vetor[j + 1] = aux;
        }
```


Veja o [próximo artigo](/logica-de-programacao/exemplos-na-linguagem-c-do-algoritmo-bubble-sort/) 
para entramos nos detalhes das implementações.