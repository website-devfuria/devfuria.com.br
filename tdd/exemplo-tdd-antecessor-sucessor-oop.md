---
layout:      grid93-article
title:       "Simples exemplo de TDD - Antecessor e sucessor de um número qualquer (oop)"
description: Exemplo de TDD escrito na lingugam C++ onde devemos criar duas funções, uma para mostrar o sucessor de um número e a outra para mostrar o antecessor.
menu:        tdd-exemplos-simples-cpp
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Neste exercício de TDD  utilizaremos a __linguagem C++__ e programação orientada a objetos.

Seu objetivo é construir uma classe denominada `Calc` com duas funções.

A primeira função mostrará o antecessor de um número qualquer.

A segunda função mostrará o sucessor de um número qualquer.

Faremos uso de programação orientada a objetos, que tal começar pela classe?

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

Vamos fazer o teste passar.

    class Calc {
    public:
        int antecessor(int num) {
            return num - 1;
        }
    };

Teste passando (green), então, pode "atacar" a segunda função.

Acredito que você poderá fazer isso sozinho(a), boa sorte!



### Código completo

```c
#include <iostream>
#include <assert.h>

//
// Classe para abstrair cálculos matemáticos
//
class Calc {
public:
    int antecessor(int num) {
        return num - 1;
    }
    int sucessor(int num) {
        return num + 1;
    }
};

//
// Testes...
//
void testAntecessor() {
    Calc c;
    assert(9 == c.antecessor(10));
}

void testSucessor() {
    Calc c;
    assert(11 == c.sucessor(10));
}
// ...fim dos testes

//
// Início do programa
//
int main() {
    testAntecessor();
    testSucessor();
    return 0;
}
```


Próximo exemplo de TDD
---

- [Simples exemplo de TDD - Juros simples](/tdd/exemplo-tdd-juros-simples/)