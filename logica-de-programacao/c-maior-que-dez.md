---
layout:      grid93-article
title:       "Maior que 10 "
description: Exercício de lógica de programação para descobrir se valor é maior ou menor que 10.
menu:        logica-exerc-nivel-02
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---
        
Crie uma função que descubra se um valor é maior ou menor que 10.



Linguagem C
---



```c
#include <stdio.h>
#include <assert.h>

//
// Função que descobre se um número é ou não maior que 10
//
// retornará 1 caso seja maior
// retornará 0 caso seja menor
//
int ehMaiorQue10(int valorQualquer) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    assert(1 == ehMaiorQue10(17));
    assert(0 == ehMaiorQue10(9));

    return 0;
}
```  
      

### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que descobre se um número é ou não maior que 10
//
// retornará 1 caso seja maior
// retornará 0 caso seja menor
//
int ehMaiorQue10(int valorQualquer) {
    if (valorQualquer > 10) {
        return 1;
    } else {
        return 0;
    }
}

//
// Testes
//
int main (){

    assert(1 == ehMaiorQue10(17));
    assert(0 == ehMaiorQue10(9));

    return 0;
}
```        