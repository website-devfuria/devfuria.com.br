---
layout:      grid93-article
title:       "Função para somar vetor "
description: "Exercício de lógica de programação: criar função para somar vetor."
menu:        logica-exerc-nivel-04v
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Crie uma função que retorna a soma de um vetor qualquer




Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna a soma de dois vetores
//
int retSomaVetor(int vt[], int i) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {
    int vetor[4];

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 0;
    assert(60 == retSomaVetor(vetor, 4));

    vetor[0] = 10;
    vetor[1] = 20;
    vetor[2] = 30;
    vetor[3] = 40;
    assert(100 == retSomaVetor(vetor, 4));

    return 0;
}
```


### Solução na linguagem C

Na linguagem C tivemos que passar o tamanho do vetor na variável `i`. Isso significa que não há um métodos simples
que descubra o tamanho de um vetor, eu disse não há um __método simples__, obviamente que existe um jeito, mas não
tem nada de simples.

Se quer um desafio na linguagem C tente desenvolver um código que descubra qual é o tamanho do vetor.

```c
//
// Função que retorna a soma de dois vetores
//
int retSomaVetor(int vt[], int i) {
    int soma;
    
    while (i > 0) {
        soma += vt[i - 1];
        i--;
    }

    return soma;
}
```




Linguagem Python
---

Em Python, a escrita do teste é um tanto mais fácil.

```python
# -*- coding: utf-8 -*-

#
# Seu código
#
def somarLista(lista):
    pass

#
# Seu teste
#
lista = [10, 20, 30, 0]
assert 60 == somarLista(lista)
```


### Solução na linguagem Python

Repare que não precisamos passar o tamanho do vetor como fazemos na linguagem C.

```python
# -*- coding: utf-8 -*-

#
# Seu código
#
def somarLista(lista):
    soma = 0
    for n in lista:
        soma += n
    return soma

#
# Seu teste
#
lista = [10, 20, 30, 0]
assert 60 == somarLista(lista)
```

A esta altura é bom lembrar que, nem de longe, estamos dizendo que Python é melhor que C, isso é bobagem.

Esses exercícios com vetores são legais pois, estamos tendo a oportunidade de ver duas perspectivas diferentes: 
a de uma linguagem da baixo e a de uma linguagem de alto nível.
