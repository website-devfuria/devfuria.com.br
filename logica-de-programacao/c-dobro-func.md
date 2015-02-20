---
layout:      grid93-article
title:       "O dobro de um número qualquer (funções) "
description: Exercício de lógica de programação resolvido onde o objetivo é criar uma função para calcular o dobro de um número qualquer.
menu:        logica-exerc-nivel-02
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---


Faça uma função para calcular o dobro de um número qualquer.


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