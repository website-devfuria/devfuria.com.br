---
layout:      grid93-article
title:       "Simples exemplo de TDD - Área quadrada (OOP)"
description: Este artigo é um exemplo de TDD escrito na linguagem C++ que tem como objetivo criar uma classe para representar a área (geometria)
menu:        tdd-exemplos-simples-cpp
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Seu objetivo é construir uma classe denominada `Area` que calcule tanto a área quadrada (primeiro método) como a
área cúbica (segundo método). Como o exemplo é na __linguagem C++__ faremos uso de programação orientada a objetos, 
obviamente.

Ok, vamos dividir para conquistar. Ataquemos a primeira função, a área quadrada.

Começamos pelo teste.

    void testAreaQuadrada() {
        Area area;

        area.lado1 = 3;
        area.lado2 = 9;
        assert(27 == area.quadrada());
    }

O código não compila porque não temos nem a classe e nem o método, então vamos lá.

    class Area {
    public:
        int lado1, lado2;

        int quadrada() {
        }
    };

Lembre-se de adequar o corpo do programa:

    int main() {
        testAreaQuadrada();
        return 0;
    }

Agora ele compila mas não passa nos teste (red).

Um dos mantras do TDD: __teste falhando é sinal de progresso__.

Podemos escrever o mínimo de código para o teste passar.

    int quadrada() {
        return lado1 * lado2;
    }

Agora o teste passa (green), primeira função concluída.

Vamos para a segunda, o cubo. Novamente, iniciamos escrevendo o teste.

    void testAreaCubica() {
        Area area;

        area.lado1 = 3;
        area.lado2 = 6;
        area.lado3 = 2;
        assert(36 == area.cubica());
    }

Adeque o corpo do programa:

    int main() {
        testAreaQuadrada();
        testAreaCubica();
        return 0;
    }

Compile... ops!

    ‘lado3’ was not declared in this scope

Esquecemos de declarar a terceira variável `lado3`.

    public:
        int lado1, lado2, lado3;

Agora vai! Compile e execute.

Vemos o teste falhar (red) e partimos para o esforço de vê-lo passar (green).
    
    int cubica() {
        return lado1 * lado2 * lado3;
    }

Tudo verde? Coisa linda.


### Código completo

```c
#include <iostream>
#include <assert.h>

//
// Classe para abstrair cálculos geométricos
// referente a área.
//
class Area {
public:
    int lado1, lado2, lado3;
    
    //
    // Retorna a área quadrada
    //
    int quadrada() {
        return lado1 * lado2;
    }

    //
    // Retorna a área cúbica
    //
    int cubica() {
        return lado1 * lado2 * lado3;
    }
};


//
// Testes...
//
void testAreaQuadrada() {
    Area area;
    
    area.lado1 = 3;
    area.lado2 = 9;
    assert(27 == area.quadrada());
}

void testAreaCubica() {
    Area area;
    
    area.lado1 = 3;
    area.lado2 = 6;
    area.lado3 = 2;
    assert(36 == area.cubica());
}
// ...fim dos testes

//
// Início do programa
//
int main() {
    testAreaQuadrada();
    testAreaCubica();
    return 0;
}
```



Próximo exemplo de TDD
---

- [Simples exemplo de TDD - Antecessor e sucessor de um número qualquer](/tdd/exemplo-tdd-antecessor-sucessor/)