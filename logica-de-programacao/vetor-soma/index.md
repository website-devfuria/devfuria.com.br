---
title:       Algoritmo para somar vetor
description: Exercício de lógica de programação onde criaremos uma função para somar um vetor.
capitulo:    logica-nivel-4-vetores
ordem:       2
---



Exercício de lógica de programação
---

Crie uma função que retorna a soma de um vetor qualquer

<iframe width="560" height="315" src="https://www.youtube.com/embed/aBysSOQdL2k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


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
    int soma = 0;

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

E em JavaScript, com seria?



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Seu código
//
var somarLista = function(lista){




}

//
// Seu teste
//
try {

    lista = [10, 20, 30, 0]
    assert.equal(60, somarLista(lista));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Seu código
//
var somarLista = function(lista){
    var soma = 0;
    for (chave in lista) {
        soma += lista[chave]
    }
    return soma;
}

//
// Seu teste
//
try {

    lista = [10, 20, 30, 0]
    assert.equal(60, somarLista(lista));

} catch(e) {
    console.log(e);
}
```


### Outra solução na linguagem JavaScript (Node.js)

A solução acima equipara-se a solução do Python. Estamos utilizando o laço "for-in", porém esse tipo de laço foi
introduzido na linguagem posteriormente, ou seja, como nós resolveríamos o problema (no passado)? Usando um laço "for"
convencional e também da propriedade `length` de nosso array.

```javascript
var assert = require('assert');

//
// Seu código
//
var somarLista = function(lista){
    var soma = 0;
    for(var i = 0; i < lista.length; i++){
        soma += lista[i];
    }
    return soma;
}
//
// Seu teste
//
try {

    lista = [10, 20, 30, 0]
    assert.equal(60, somarLista(lista));

} catch(e) {
    console.log(e);
}
```

