---
layout:      grid93-article
title:       "Inverter string "
description: Exercício de lógica de programação para inverter uma string.
menu:        logica-exerc-nivel-04s
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---


Faça um programa que inverta uma string, exemplo: "animal" em "lamina".


Linguagem C
---

```c
#include<stdio.h>
#include<string.h>
#include<assert.h>

int main() {

    // Aqui entra a lógica do programa.


    //
    // Teste
    //
    assert(strcmp("animal", str) == 0);

    return (0);
}
```


### Solução na linguagem C

```c
#include<stdio.h>
#include<string.h>
#include<assert.h>

int main() {

    char str[] = "lamina";
    char temp;
    int i, j;

    i = 0;
    j = strlen(str) - 1;

    while (i < j) {
        temp = str[i];
        str[i] = str[j];
        str[j] = temp;
        i++;
        j--;
    }


    //
    // Teste
    //
    assert(strcmp("animal", str) == 0);

    return (0);
}
```