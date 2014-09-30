---
layout:      grid12-article
title:       "Inverter string - linguagem c"
description: Exercício de lógica de programação para inverter uma string.
---

Faça um programa que inverta uma string, exemplo: "animal" em "lamina".


Passo a passo
---

Primeiro o teste:

    int main() {
        assert(strcmp("animal", str) == 0);
        return (0);
    }


Faça o teste compilar.

    int main() {
        char str[] = "lamina";
        assert(strcmp("animal", str) == 0);
        return (0);
    }

Agora, implemente até que o teste passe.


Código completo
---

{% highlight c %}
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

    assert(strcmp("animal", str) == 0);
    return (0);
}
{% endhighlight %}