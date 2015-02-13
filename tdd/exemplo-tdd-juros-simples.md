---
layout:      grid93-article
title:       "Simples exemplo de TDD - Juros simples"
description: Pequeno exemplo de TDD na linguagem C++ utilizando-se de programação orientada a objeto para criar uma classe com um método que retorne o juros simnples.
menu:        tdd-exemplos-simples-cpp
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Neste artigo iremos construir um pequeno código na __linguagem C++__ utilizando, obviamente, a técnica de programação orientada a objetos.

Nosso objetivo definir uma classe para calcular o juros simples segundo a fórmula abaixo.

    J = C.i.n

Onde:

    J = juros,
    C = capital,
    i = taxa de empréstimo
    n = períodos

Vamos imaginar o seguinte cenário: um empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.

Utilize orientação a objetos para resolver o problema.

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



### Código final

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
// Início do programa
//
int main() {
	// Chamamos o teste unitário
    testJurosSimples();
    return 0;
}
```


Próximo exemplo de TDD
---

- [Simples exemplo de TDD - Triângulo](/tdd/exemplo-tdd-triangulo/)