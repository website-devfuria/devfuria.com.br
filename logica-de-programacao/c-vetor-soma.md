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

Em Python facilita até a escrita do teste.

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