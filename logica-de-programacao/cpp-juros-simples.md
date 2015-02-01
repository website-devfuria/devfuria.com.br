---
layout:      grid93-article
title:       "Juros simples (linguagem C++)"
description: Exercício de lógica de programação com OOP e TDD - como calcular o juros simples.
menu:        logica-exerc-oop-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para calcular o juros simples segundo a fórmula abaixo.

    J = C.i.n

Onde:

    J = juros,
    C = capital,
    i = taxa de empréstimo
    n = períodos

Vamos imaginar o seguinte cenário: um empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.

Utilize orientação a objetos para resolver o problema.

Já temos o teste escrito, você deve implementar a classe `Juros`.

```c
#include <iostream>
#include <assert.h>

//
// Classe Juros
//
class Juros {
    //
    // seu código
    //
};

//
// Teste Unitário
//
void testJurosSimples() {

    Juros juros;

    juros.capital = 16000;
    juros.taxa = 0.04;
    juros.periodo = 4;

    assert(2560 == juros.simples());
}

//
// Seu programa começa aqui
//
int main() {
	// Chamamos o teste unitário
    testJurosSimples();
    return 0;
}
```





Exercício resolvido
---

```c
#include <iostream>
#include <assert.h>

//
// Classe Juros
//
class Juros {
public:
    float capital, taxa;
    int periodo;

    // Função que retorna o juros simples
    // J = c . i . n
    int simples() {
        return capital * taxa * periodo;
    }
};

//
// Teste Unitário
//
void testJurosSimples() {

    Juros juros;

    juros.capital = 16000;
    juros.taxa = 0.04;
    juros.periodo = 4;

    assert(2560 == juros.simples());
}

//
// Seu programa começa aqui
//
int main() {
	// Chamamos o teste unitário
    testJurosSimples();
    return 0;
}
```