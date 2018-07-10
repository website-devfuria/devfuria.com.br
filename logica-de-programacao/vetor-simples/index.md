---
title:       Algoritmo para carregar um vetor
description: Exercício de lógica de programação que ajuda a desenvolver os diversos tipos de laços.
capitulo:    logica-nivel-4-vetores
ordem:       1
---



Exercício de lógica de programação
---

Escreva um algoritmo para carregar um vetor com os números de 1 (inclusive) a 5 (inclusive) em ordem crescente.

**Comentários:** Este é o primeiro exercício envolvendo vetores e começamos a notar a grande diferença entre uma
linguagem de alto nível e uma de baixo nível. Obviamente que "nível" refere-se a distancia do hardware ou a proximidade
com o "humano", não tem nada a ver com qualidade, ok?

<iframe width="560" height="315" src="https://www.youtube.com/embed/xrC2BRFEzI4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5];
    int i;

    // Aqui entra a lógica do programa.




    //
    // Testes
    //
    assert(1 == vetor[0]);
    assert(2 == vetor[1]);
    assert(3 == vetor[2]);
    assert(4 == vetor[3]);
    assert(5 == vetor[4]);
    return 0;
}

```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main() {
    int vetor[5];
    int i;

    // Aqui entra a lógica do programa.
    for (i = 0; i < 5; i++) {
        vetor[i] = i + 1;
    }

    //
    // Testes
    //
    assert(1 == vetor[0]);
    assert(2 == vetor[1]);
    assert(3 == vetor[2]);
    assert(4 == vetor[3]);
    assert(5 == vetor[4]);
    return 0;
}

```

### Desafios na linguagem C

**1)** Os códigos abaixo trazem o mesmo resultado do código do exercício acima.
Faça o teste de mesa de cada um deles para entender o porque são equivalentes.

```c
for (i = 1; i < 6; i++) {
    vetor[i-1] = i;
}
```

```c
for (i = 5; i > 0; i--) {
    vetor[i-1] = i;
}
```

```c
for (i = 4; i > -1; i--) {
    vetor[i] = i + 1;
}
```


**2)** Transcrever tudo para while, exemplo:

```c
while(i < 5){
    vetor[i] = i + 1;
    i++;
}
```

Boa sorte!





Linguagem Python
---

Linguagens de alto nível como Python, por exemplo, se saem muito bem quando se trata de vetores. Acho que, na linguagem
Python,  o mais próximo do conceito de vetor são as __listas__. Ao contrário de C, em Python os vetores (as listas) são
dinâmicas, ou seja, não precisamos definir um tamanho fixo.

Para resolver o problema proposto nem precisamos de um laço de repetição, veja o código abaixo.

```python
# -*- coding: utf-8 -*-

vetor =  [1, 2, 3, 4, 5]

#
# Teste
#
assert 1 == vetor[0]
assert 2 == vetor[1]
assert 3 == vetor[2]
assert 4 == vetor[3]
assert 5 == vetor[4]
```

Mas caso você esteja pensado como seria o código fazendo uso de um laço, então veja o código seguinte.


```python
# -*- coding: utf-8 -*-

vetor =  []

for n in range(5):
    vetor.append(n + 1)

#
# Testes
#
assert 1 == vetor[0]
assert 2 == vetor[1]
assert 3 == vetor[2]
assert 4 == vetor[3]
assert 5 == vetor[4]
```

Para saber mais sobre [listas](/python/listas/) lei o artigo na seção __Python__.




Linguagem JavaScript (Node.js)
---

Em JavaScript também não precisamos de muito para criarmos um vetor.


```javascript
var assert = require('assert');

var vetor = [1, 2, 3, 4, 5]

//
// Testes
//
try {

    assert.equal(1, vetor[0]);
    assert.equal(2, vetor[1]);
    assert.equal(3, vetor[2]);
    assert.equal(4, vetor[3]);
    assert.equal(5, vetor[4]);

} catch(e) {
    console.log(e);
}
```

E também podemos criar o vetor com um laço de repetição, veja...

```javascript
var assert = require('assert');


var i, vetor = [];

for(i = 1; i < 6; i++ ){
    vetor.push(i)
}

//
// Testes
//
try {

    assert.equal(1, vetor[0]);
    assert.equal(2, vetor[1]);
    assert.equal(3, vetor[2]);
    assert.equal(4, vetor[3]);
    assert.equal(5, vetor[4]);

} catch(e) {
    console.log(e);
}
```

Obs: O conceito de vetor em JavaScript resume-se em um array, ou seja, um vetor é equivalente a um array unidimensional.
