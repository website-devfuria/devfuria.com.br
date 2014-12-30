---
layout:      grid12-article
title:       "Antecessor e sucessor de um número qualquer - linguagem c++"
description: Exercício de lógica de programação resolvido cujo objetivo é, com o auxílio de classes, encontrar o sucessor e antecessor de um número qualquer.
---

Seu objetivo é construir uma classe denominada `Calc` com duas funções.

A primeira função mostrará o antecessor de um número qualquer.

A segunda função mostrará o sucessocer de um número qualquer.




Solução passo a passo
---


Nós já resolvemos esse problema de forma estruturada em outra matéria (linguagem c).

Agora teremos a chance de resolvê-lo no âmbito do OOP (programação orienteda a objetos).

Primeiro, que tal fazer-mos o código compilar?

    class Calc {
    public:
    };


    int main() {
        return 0;
    }

Escrevemos o primeiro teste.

    void testAntecessor() {
        Calc c;
        assert(9 == c.antecessor(10));
    }

Chamamos o teste na função `main`.

    int main() {
        testAntecessor();
        return 0;
    }

Sabemos que o programa compila mas o teste não passa.

Aqui começa o nosso trabalho (de lógica).

Vamos fazer o teste passar

    class Calc {
    public:
        int antecessor(int num) {
            return num - 1;
        }
    };

Teste passando (green). Então, pode "atacar" a segunda função.

Acredito que você poderá fazer isso sozinho(a). Boa sorte.



Código completo
---

```c
#include <iostream>
#include <assert.h>

class Calc {
public:
    int antecessor(int num) {
        return num - 1;
    }
    int sucessor(int num) {
        return num + 1;
    }
};

void testAntecessor() {
    Calc c;
    assert(9 == c.antecessor(10));
}
void testSucessor() {
    Calc c;
    assert(11 == c.sucessor(10));
}

int main() {
    testAntecessor();
    testSucessor();
    return 0;
}
```