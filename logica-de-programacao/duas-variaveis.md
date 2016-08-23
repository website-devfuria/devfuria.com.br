---
title:       Trocar o valor de duas variáveis
description: Exercício de lógica de programação para trocar o valor de duas variáveis.
serie:       Lógica Nível 0
ordem:       6
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Escreva um algoritmo que armazene o valor 999 na variável `a` e o valor 555 na variável `b`.

A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos
fazendo com que o valor que está em `a` passe para `b` e vice-versa.



Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int a, b, temp;

    //
    // Sua lógica
    //




    //
    // Testes
    //
    assert(a == 555);
    assert(b == 999);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int a, b, temp;

    //
    // Sua lógica
    //
    a = 999;
    b = 555;
    temp = a;	  // registramos o valor de 'a' em 'temp'
    a    = b;	  // sobrescrever 'a' com o valor de 'b'
    b    = temp;  // sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')


    //
    // Testes
    //
    assert(a == 555);
    assert(b == 999);

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
a = 999
b = 555

#
# Sua lógica
#




#
# Testes
#
assert a == 555
assert b == 999
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
a = 999
b = 555

#
# Sua lógica
#
temp = a  	  # registramos o valor de 'a' em 'temp'
a    = b	  # sobrescrever 'a' com o valor de 'b'
b    = temp   # sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')

#
# Testes
#
assert a == 555
assert b == 999
```



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Variáveis
//
var a, b, temp;

//
// Sua lógica
//





//
// Seu teste
//
try {
    assert.equal(555, a);
    assert.equal(999, b);
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Variáveis
//
var a, b, temp;

//
// Sua lógica
//
a    = 999;
b    = 555;
temp = a;     // registramos o valor de 'a' em 'temp'
a    = b;     // sobrescrever 'a' com o valor de 'b'
b    = temp;  // sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')

//
// Seu teste
//
try {
    assert.equal(555, a);
    assert.equal(999, b);
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}