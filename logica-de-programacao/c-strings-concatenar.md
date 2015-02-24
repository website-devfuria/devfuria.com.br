---
layout:      grid93-article
title:       "Concatenar duas strings "
description: Exercício de lógica de programação para concatenar duas strings.
menu:        logica-exerc-nivel-04s
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---


Faça um programa para concatenar duas strings.



Linguagem C
---


Começamos pelo teste...

```c
#include<stdio.h>
#include<string.h>
#include<assert.h>

int concatenar(char s1[], char s2[]) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    char str1[] = "abc";
    char str2[] = "defg";

    concatenar(str1, str2);

    assert(strcmp("abcdefg", str1) == 0);    

    return (0);
}
```


### Primeira solução

```c
int concatenar(char s1[], char s2[]) {
    int i, j;

    for (i = 0; s1[i] != '\0'; ++i);
    for (j = 0; s2[j] != '\0'; ++j, ++i) {
        s1[i] = s2[j];
    }
}
```


### Segunda solução

```c
void concatenar(char s[], char t[]) {
    int i = 0, j = 0;

    while (s[i] != '\0') {
        i++;
    }

    while ((s[i++] = t[j++]) != '\0');
}
```


### Terceira solução

```c
void concatenar(char s1[], char s2[]) {
    int i, j;

    i = strlen(s1);

    for (j = 0; s2[j] != ""; i++, j++) {
        s1[i] = s2[j];
    }

    s1[i] = "";
}
```


### Quarta solução

```c
void concatenar(char *original, char *add) {
    while (*original)
        original++;

    while (*add) {
        *original = *add;
        add++;
        original++;
    }
    *original = '\0';
}
```


### Quinta solução

```c
void concatenar(char str1[], char str2[]) {
    strcat(str1, str2);
}
```