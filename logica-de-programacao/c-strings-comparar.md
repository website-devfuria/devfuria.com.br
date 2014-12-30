---
layout:      grid12-article
title:       "Comparar duas strings - linguagem c"
description: Exercício de lógica de programação para comparar duas strings.
---

Faça um programa para comparar se duas strings são iguas.



Passo a passo
---

Começamos pelo teste.

    char ola[]  = "ola";
    char ola2[] = "ola";

    assert(1 == compararStrings(ola, ola2));

Agora fazemos o código compilar com o mínimo para passar no teste.

    int compararStrings(char str1[], char str2[]) {
        return 1;
    }

Então alteramos até encontrar o resultado esperado.



Código completo
---

```c
#include <stdio.h>
#include <assert.h>

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


