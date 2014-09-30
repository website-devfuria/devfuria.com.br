---
layout:      grid12-article
title:       "Contar vogais - linguagem c"
description: Exercício de lógica de programação para contar a quantidade de vogais de uma string.
---

Faça um programa que descubra a quantidade de vogais de uma determinada string.



Passo a passo
---

Primeiro o teste:

    int main() {
        char plavra[] = "abecedario";
        assert(6 == contaVogais(plavra));
        return 0;
    }


Faça o teste compilar.

    int contaVogais(char palavra[]) {
        int numVogais = 0;
        return numVogais;
    }


Agora, implemente até que o teste passe.


Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int contaVogais(char palavra[]) {
    char vogais[] = "aeiouAEIOU";
    int numVogais = 0, i, j;

    for (i = 0; palavra[i] != '\0'; i++) {
        for (j = 0; vogais[j] != '\0'; j++) {
            if (vogais[j] == palavra[i]) {
                numVogais++;
                break;
            }
        }
    }

    return numVogais;
}

int main() {
    char plavra[] = "abecedario";
    assert(6 == contaVogais(plavra));
    return 0;
}
{% endhighlight %}

<hr>
Fonte: [http://www.ime.usp.br/~pf/algoritmos/aulas/string.html](http://www.ime.usp.br/~pf/algoritmos/aulas/string.html "link-externo")