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



Linguagem Python
---

E aí, será que em Ptyhon existe alguma função mágica para invertermos uma string?

Em quanto você procura na Internet a solução (rssss) segue aqui o esqueleto para você praticar lógica...

```python
# -*- coding: utf-8 -*-

#
# Seu código
#
def reverseString(text):
    pass

#
# Seu teste
#
palavra = "animal"
assert "lamina" == reverseString(palavra)
```



### Solução na linguagem Python


```python
def reverseString(text):
    l = list(text)
    l.reverse()
    return ''.join(l)
```

Se você pesquisar na Internet verá soluções variantes como as propostas a baixo.

```python
def reverseString(text):
    return ''.join(reversed(text))
```

```python
def reverseString(text):
    return text[::-1]
```

Que tal pesquisar outras soluções?