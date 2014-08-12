---
layout:      materia
title:       "Contar string - linguagem c"
description: Exercício de lógica de programação para contar a quantidade de caracteres de uma string qualquer.
---

Faça um programa para contar a quantidade de caracteres que ela contêm.



Passo a passo
---

Primeiro o teste:

    int main() {
        char ola[] = "palavra";
        assert(7 == contaChar(ola));
        return 0;
    }

Faça o teste compilar.

    int contaChar(char str[]) {
        return 0;
    }

Agora implemente até que o teste passe.


Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int contaChar(char str[]) {
    int i = 0;

    do {
        ++i;
    } while (str[i] != 0);

    return i;
}

int main() {
    char ola[] = "palavra";
    assert(7 == contaChar(ola));
    return 0;
}
{% endhighlight %}


Desafio
---

A função abaixo também funciona, porém a implementação é um pouco diferente.

O desafio é entender o que está acontecendo.

    int contaChar(const char *str) {
        int i = 0;
        for (; str[i] != 0; ++i);
        return i;
    }

