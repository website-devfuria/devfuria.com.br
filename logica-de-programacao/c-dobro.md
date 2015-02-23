---
layout:      grid93-article
title:       "O dobro de um número qualquer "
description: Exercício de lógica de programação resolvido onde o objetivo é calcular o dobro de um número qualquer.
menu:        logica-exerc-nivel-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa que calcule o dobro de um número.



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int num, dobro;

    //
    // Sua lógica (seu código)
    //


    //
    // Seu teste
    //
    assert(10 == dobro);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int num, dobro;

    //
    // Sua lógica (seu código)
    //
    num = 5;
    dobro = 2 * num;

    //
    // Seu teste
    //
    assert(10 == dobro);

    return 0;
}
```

Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
num   = 5
dobro = None

#
# Sua lógica (seu código)
#




#
# Seu teste
#
assert 10 == dobro
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
num   = 5
dobro = None

#
# Sua lógica (seu código)
#
dobro = 2 * num

#
# Seu teste
#
assert 10 == dobro
```