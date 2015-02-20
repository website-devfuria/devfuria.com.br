---
layout:      grid93-article
title:       "Comparar duas strings "
description: Exercício de lógica de programação para comparar duas strings.
menu:        logica-exerc-nivel-04s
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---


Faça um programa para comparar se duas strings são iguais.



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Fun.ão que compara se duas string são iguais
//
int compararStrings(char str1[], char str2[]) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    char ola[]  = "ola";
    char ola2[] = "ola";
    assert(1 == compararStrings(ola, ola2));

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Fun.ão que compara se duas string são iguais
//
int compararStrings(char str1[], char str2[]) {
    int i = 0;

    do {
        if(str1[i] != str2[i]) {
            return 2;
        }
        i++;
    } while(str1[i] != 0); 
    
    return 1;
}

//
// Testes
//
int main() {

    char ola[]  = "ola";
    char ola2[] = "ola";
    assert(1 == compararStrings(ola, ola2));

    return 0;
}
```


Desafio
---

A função abaixo também funciona, porém a implementação dela é bem diferente.

O desafio é entender o que está acontecendo.


    int compararStrings(char str1[], char str2[]) {
        int i = 0;

        for (i = 0; str1[i] == str2[i]; i++) {
            if (str1[i] == 0) {
                return 1;
            }
        }

        return 2;
    }


