---
layout:      grid93-article
title:       "Contar string "
description: Exercício de lógica de programação para contar a quantidade de caracteres de uma string qualquer.
menu:        logica-exerc-nivel-04s
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para contar a quantidade de caracteres que ela contem.



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Função para contar caracteres de determinada string
//
int contaChar(char str[]) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    char ola[] = "palavra";
    assert(7 == contaChar(ola));

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// função para contar caracteres de determinada string
//
int contaChar(char str[]) {
    int i = 0;

    do {
        ++i;
    } while (str[i] != 0);

    return i;
}

//
// Início do programa
// e seus testes.
int main() {
    char ola[] = "palavra";
    assert(7 == contaChar(ola));
    return 0;
}
```

### Desafio na linguagem C

As funções abaixo também funcionam, porém a implementação é um pouco diferente. 

Seu desafio é entender os seguintes códigos.

    int contaChar(const char *str) {
        int i = 0;
        for (; str[i] != 0; ++i);
        return i;
    }

A solução abaixo é do professor da [USP Paulo Feofiloff](http://www.ime.usp.br/~pf/algoritmos/aulas/bubi2.html "link-externo").

    unsigned int strlen( string s) {
       int i;
       for (i = 0; s[i] != '\0'; ++i) ;
       return i;
    }
