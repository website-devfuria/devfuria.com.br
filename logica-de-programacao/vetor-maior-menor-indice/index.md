---
title:       Maior e menor índice do vetor
description: Exercício de lógica de programação para descobrir o índice do maior e o menor valor do vetor.
capitulo:    logica-nivel-4-vetores
ordem:       4
---



Exercício de lógica de programação
---

Dado um vetor qualquer sem valores repetidos, descubra qual é o índice do maior valor e o índice do menor valor.

Repare que eu quero o índice e não o valor daquele índice.

<iframe width="560" height="315" src="https://www.youtube.com/embed/J3nBdKtXdEE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C
---

Utilize vetores e o laço "do-while".

```c
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5], i = 0, iMaior = 0, iMenor = 0;


    // Aqui entra a lógica do programa.




    // teste do maior índice
    assert(3 == iMaior);

    // teste do menor índice
    assert(2 == iMenor);

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5], i = 0, iMaior = 0, iMenor = 0;

    vetor[0] = 6;
    vetor[1] = 10;
    vetor[2] = 4;
    vetor[3] = 21;
    vetor[4] = 9;

    do {

        // descobre o maior índice
        if (vetor[i] > vetor[iMaior]) {
            iMaior = i;
        }

        // descobre o menor índice
        if (vetor[i] < vetor[iMenor]) {
            iMenor = i;
        }

        i++;

    } while (i < 5);

    // teste do maior índice
    assert(3 == iMaior);

    // teste do menor índice
    assert(2 == iMenor);

    return 0;
}
```




Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

lista  = [6, 10, 4, 21, 9]
iMaior = 0
iMenor = 0

#
# Sua lógica
#




#
# Testes
#
assert iMaior == 3
assert iMenor == 2
```


### Solução na linguagem Python

Em Python não temos o laço `do...while`, então vamos utilizar o que temos.

```python
# -*- coding: utf-8 -*-

lista  = [6, 10, 4, 21, 9]
iMaior = 0
iMenor = 0

i = 0
while i < len(lista):

    if lista[i] > lista[iMaior]:
        iMaior = i

    if lista[i] < lista[iMenor]:
        iMenor = i

    i = i + 1

#
# Testes
#
assert iMaior == 3
assert iMenor == 2
```

Podemos deixar o código mais pythonico utilizando a função `enumarete`.

```python
# -*- coding: utf-8 -*-

lista  = [6, 10, 4, 21, 9]
iMaior = 0
iMenor = 0

for index, item in enumerate(lista):

    if lista[index] > lista[iMaior]:
        iMaior = index

    if lista[index] < lista[iMenor]:
        iMenor = index

#
# Testes
#
assert iMaior == 3
assert iMenor == 2
```



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

var arr    = [6, 10, 4, 21, 9],
    iMaior = 0,
    iMenor = 0,
    i =0;

//
// Sua lógica
//





//
// Seu teste
//
try {

    assert.equal(3, iMaior);
    assert.equal(2, iMenor);

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

var arr    = [6, 10, 4, 21, 9],
    iMaior = 0,
    iMenor = 0,
    i =0;

//
// Sua lógica
//
for(i = 0; i < arr.length; i++) {
    if (arr[i] > arr[iMaior]) {
        iMaior = i;
    }

    if (arr[i] < arr[iMenor]) {
       iMenor = i;
    }
}

//
// Seu teste
//
try {

    assert.equal(3, iMaior);
    assert.equal(2, iMenor);

} catch(e) {
    console.log(e);
}
```

