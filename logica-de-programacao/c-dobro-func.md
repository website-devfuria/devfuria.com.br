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

__Comentários__: Este é o primeiro exercício envolvendo o conceito de funções, nós já resolvemos esse problema sem o uso
de funções. Acredito que a partir deste exercício a questão dos testes unitários comecem a fazer mais sentido, pois a
menor unidade cabível de ser testada é um pequena função.



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