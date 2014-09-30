---
layout:      grid12-article
title:       "Somar dígitos - linguagem c"
description: Exercício de lógica de programação para dígitos de um inteiro.
---

Faça um programa para somar os dígitos de um inteiro

Sem utilizar recursos de string, ou seja, trabalhe apenas com tipos numéricos.


{% highlight c %}
#include <stdio.h>
#include <assert.h>

int somarDigitos(int numero) {
    int soma = 0;

    while (numero != 0) {
        soma   += numero % 10;
        numero  = numero / 10;
    }
    
    return soma;
}

void main() {
    assert(6 == somarDigitos(2013));
    assert(15 == somarDigitos(456));
}
{% endhighlight %}