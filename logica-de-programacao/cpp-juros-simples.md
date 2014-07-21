---
layout:      materia
title:       "Juros simples - linguagem c++"
description: Exercício de lógica de programação com OOP e TDD - como calcular o juros simples.
---

Calcular o juros simples produzido pelo empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.

    J = C.i.n

Onde:

    J = juros,
    C = capital,
    i = taxa de empréstimo e
    n = períodos.

Utilize orientação a objetos para resolver o problema.



Solução passo a passo
---



Começando pelo teste.

    void testJurosSimples() {

        Juros juros;

        juros.capital = 16000;
        juros.taxa = 0.04;
        juros.periodo = 4;

        assert(2560 == juros.simples());
    }

    int main() {
        testJurosSimples();
        return 0;
    }

O código não compila pois não temos a classe `Juros` nem o método `simples()`, muito menos as propriedades.

Vamos fazer o código compilar.


    class Juros {
    public:
        float capital, taxa;
        int periodo;

        int simples() {
        }
    };

Agora é so implementar a lógica da função `simples`.

    int simples() {
        return capital * taxa * periodo;
    }


Código completo
---

{% highlight c %}
#include <iostream>
#include <assert.h>

class Juros {
public:
    float capital, taxa;
    int periodo;

    // J = c . i . n
    int simples() {
        return capital * taxa * periodo;
    }
};

void testJurosSimples() {

    Juros juros;

    juros.capital = 16000;
    juros.taxa = 0.04;
    juros.periodo = 4;

    assert(2560 == juros.simples());
}

int main() {
    testJurosSimples();
    return 0;
}
{% endhighlight %}