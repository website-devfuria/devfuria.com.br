---
layout:      grid93-article
title:       "Funções para as 4 operações artiméticas "
description: Escreva uma função para cada uma das quatro operações matemáticas simples.
menu:        logica-exerc-nivel-02
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Escreva uma função para cada uma das quatro operações matemáticas simples
(adição, subtrair, multiplicar e dividir).

      
  
Linguagem C
---



```c
#include <stdio.h>
#include <assert.h>


int somar(int num, int add) {

    // Aqui entra a lógica do programa.

}

int subtrair(int num, int sub) {

    // Aqui entra a lógica do programa.

}

int multiplicar(int num, int mult) {

    // Aqui entra a lógica do programa.

}

int dividir(int num, int divisor) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){
    
    int num = 10;
    
	assert(12 == somar(num, 2));
	assert(8 == subtrair(num, 2));
	assert(20 == multiplicar(num, 2));
	assert(5 == dividir(num, 2));
    
	return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

// as funções são tão pequenas e tão concisas que nem precisam de comentários

int somar(int num, int add) {
    return num + add;
}

int subtrair(int num, int sub) {
    return num - sub;
}

int multiplicar(int num, int mult) {
    return num * mult;
}

int dividir(int num, int divisor) {
    return num / divisor;
}

//
// Testes
//
int main (){
    
    int num = 10;
    
	assert(12 == somar(num, 2));
	assert(8 == subtrair(num, 2));
	assert(20 == multiplicar(num, 2));
	assert(5 == dividir(num, 2));
    
	return 0;
}
```    