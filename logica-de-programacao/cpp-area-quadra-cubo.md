---
layout:      grid12-article
title:       Área quadrada e área cúbica - linguagem c++"
description: Exercício de lógica de programação resolvido cujo objetivo é, com o auxílio de classes, encontrar a área quadra e cúbica.
---

Seu objetivo é construir uma classe denominada `Area` que calcule tanto a área quadrada (primeiro método) como a
área cúbica (segundo método).


Solução passo a passo
---

Ok, vamos dividir para conquistar. Ataquemos a primeira função, a área quadrada.

Começamos pelo teste.

    void testAreaQuadrada() {
        Area area;

        area.lado1 = 3;
        area.lado2 = 9;
        assert(27 == area.quadrada());
    }

O código não compila porque não temos nem a classe e nem o método. Então vamos lá.

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

Nosso mantra: um teste falhando é sinal de progresso.

Podemos escrever o mínimo de código para o teste passar.

    int quadrada() {
        return lado1 * lado2;
    }

Agora o teste passa (green). Primeira função concluída.

Vamos para a segunda? O cubo.

Escrevemos o teste.

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



Código completo
---

{% highlight c %}
#include <iostream>
#include <assert.h>

class Area {
public:
    int lado1, lado2, lado3;
    
    int quadrada() {
        return lado1 * lado2;
    }
    int cubica() {
        return lado1 * lado2 * lado3;
    }
};

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

int main() {
    testAreaQuadrada();
    testAreaCubica();
    return 0;
}
{% endhighlight %}

