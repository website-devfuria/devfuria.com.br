---
title:       Concatenar duas strings
description: Exercício de lógica de programação para concatenar duas strings.
capitulo:    logica-nivel-4-strings
ordem:       4
---



Exercício de lógica de programação
---

Faça um programa para concatenar duas strings.



Linguagem C
---

Para facilitar a escrita dos testes vamos incluir a biblioteca `string.h`.

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
//
// Primeira solução
//
void concatenar(char s1[], char s2[]) {
    int i, j;

    // Olha que laço for maroto!!!
    // Com ele eu vou pegar o tamanho da primeira string...
    // descomente o `printf` para ver o tamnho da primeira string.
    for (i = 0; s1[i] != '\0'; ++i);
    // printf("%d \n", i);

    for (j = 0; s2[j] != '\0'; ++j, ++i) {
        s1[i] = s2[j];
    }
    s1[i] = '\0';
}
```


### Segunda solução

```c
//
// Segunda solução (versão ponteiros)
//
char* concatenar(char *s1, char *s2) {
    int i, j;

    for (i = 0; s1[i] != '\0'; ++i);
    for (j = 0; s2[j] != '\0'; ++j, ++i) {
        s1[i] = s2[j];
    }
    s1[i] = '\0';
    return s1;
}
```


### Terceira solução

```c
//
// Terceira solução
//
void concatenar(char s[], char t[]) {
    int i = 0, j = 0;

    while (s[i] != '\0') {
        i++;
    }

    while ((s[i++] = t[j++]) != '\0');
}
```


### Quarta solução

```c
//
// Quarta solução
//
void concatenar(char s1[], char s2[]) {
    int i, j;

    i = strlen(s1);

    for (j = 0; s2[j] != 0; i++, j++) {
        s1[i] = s2[j];
    }

    s1[i] = 0;
}
```


### Quinta solução

Esta solução utiliza-se de ponteiros.

```c
//
// Quinta solução
//
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



### Sexta solução

Esta solução é ótima pois, ela aproveita que incluímos a biblioteca `string.h` e utiliza uma função pronta para resolver
este problema.

```c
//
// Sexta solução
//
void concatenar(char str1[], char str2[]) {
    strcat(str1, str2);
}

```




Linguagem Python
---

Como já era de se esperar, em toda linguagem de alto nível, será extremamente simples concatenar duas strings.

Executando Python no terminal...

```python
>>> "abc" + "defg"
'abcdefg'
```



Linguagem JavaScript
---

Idem...

```javascript
> "abc" + "defg"
'abcdefg'
```


