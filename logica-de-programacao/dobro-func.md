---
title:       O dobro de um número qualquer  (versão utilizando funções)
description: Exercício de lógica de programação resolvido onde o objetivo é criar uma função para calcular o dobro de um número qualquer.
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}


Exercício de lógica de programação
---

Faça uma função para calcular o dobro de um número qualquer.

__Comentários__: Este é o primeiro exercício envolvendo o conceito de funções, nós já resolvemos esse problema sem o uso
de funções. Acredito que a partir deste exercício a questão dos testes unitários comecem a fazer mais sentido, pois a
menor unidade cabível de ser testada é uma pequena função.



Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o dobro de um número qualquer
//
int dobro(int num) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

	assert(10 == dobro(5));
	assert(12 == dobro(6));

	return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o dobro de um número qualquer
//
int dobro(int num) {
    return 2 * num;
}

//
// Testes
//
int main (){

	assert(10 == dobro(5));
	assert(12 == dobro(6));

	return 0;
}
```


Linguagem Python
---

```python
# -*- coding: utf-8 -*-

#
# Função que retorna o dobro de um número qualquer
#
def dobro(num):
	pass

#
# Seus testes
#
assert 10 == dobro(5), "o dobro de 5 deve ser 10"
```



### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

#
# Função que retorna o dobro de um número qualquer
#
def dobro(num):
	return num * 2

#
# Seus testes
#
assert 10 == dobro(5), "o dobro de 5 deve ser 10"
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Função que retorna o dobro de um número qualquer
//
var dobro = function(num) {


}

//
// Testes
//
try {
    assert.equal(10, dobro(5));
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função que retorna o dobro de um número qualquer
//
var dobro = function(num) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
try {
    assert.equal(10, dobro(5));
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}