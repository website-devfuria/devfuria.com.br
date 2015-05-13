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

Eu imagino que você encontrou uma solução diferente da mostrada abaixo.

O desafio é realizar o teste de mesa do código abaixo e entender o seu funcionamento.

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



Linguagem JavaScript
---

Abaixo nosso código inicial escrito em JavaScript, utilize ele para resolver o problema.

```javascript
var assert = require('assert');

var reverseString = function(s) {




}


//
// Seu teste
//
try {
    assert.equal("lamina", reverseString("animal"));
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript

Se quisermos imitar o Python podemos fazer...

```javascript
var reverseString = function(text) {
    var l = text.split('');
    l.reverse();
    return l.join('');
}
```

A mesmíssima coisa só que de forma mais sucinta...

```javascript
var reverseString = function(text) {
    return text.split('').reverse().join('');
}
```


Mas também podemos fazer um laço "negativo"...

```javascript
var reverseString = function(text) {
    var backward = [];
    for (var i = text.length - 1, j = 0; i >= 0; i--, j++)
        backward[j] = text[i];
    return backward.join('');
}
```

[Fonte das soluções em JavaScript](http://eddmann.com/posts/ten-ways-to-reverse-a-string-in-javascript/ "link-externo")




{% include /menus/logica-feedback.html %}