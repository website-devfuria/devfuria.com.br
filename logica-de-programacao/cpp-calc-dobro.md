---
layout:      grid12-article
title:       "O dobro de um número qualquer - linguagem c++"
description: Exercício de lógica de programação resolvido. O objetivo é criar uma classe para calcular o dobro de um número qualquer.
---

Seu objetivo é fazer uma classe denominada `Calc` com um método que retorne o dobro de um número.


Solução passo a passo
---


Começamos sempre com o teste.

Vamos combinar de colocar o prefixo `test` antes do nome da função.

    void testDobro() {
        Calc c;
        assert(10 == c.dobro(5));
    }

Adequemos o corpo do programa para executar o teste.

    int main() {
        testDobro();
        return 0;
    }

__Pausa...__

O `main` está fazendo o papel do "framework de teste".

Quero dizer que ao executar o programa, na verdade estaremos executando os testes.

Na vida real é extamente o inverso. Rodamos os testes... e os testes é quem executam o programa.

Mas ainda estamos simulando o mundo de "framework de testes". Entenda que esse é um código com fins didáticos.

Nem de longe é um código profissional.

__Continuando...__

Temos o teste e temos a função `main` chamando esse teste.

Mas ao compilar ele (o compilador) nos devolve a seguinte informação.

    ‘Calc’ was not declared in this scope
    ...
    ...

Vamos fazer o sistema compilar.

    class Calc {
    public:
        int dobro(int num) {
        }
    }

Agora ele compila, mas ao rodar o programa o teste falha.

    void testDobro(): Assertion `10 == c.dobro(5)' failed

Progresso! Agora precisamos codificar o mínimo para o teste passar.

É aqui que entra o seu trabalho. Aqui que entra a lógica de seu programa.

Que tal isso?

    class Calc {
    public:
        int dobro(int num) {
            return num * 2;
        }
    };



Código completo
---

{% highlight c %}
#include <iostream>
#include <assert.h>

// Sua classe ...
class Calc {
public:
    int dobro(int num) {
        return num * 2;
    }
};

// Seu teste ..
void testDobro() {
    Calc c;
    assert(10 == c.dobro(5));
}

int main() {
    testDobro();
    return 0;
}
{% endhighlight %}


Experimente escrever outras asserções, por exemplo:

    void testDobro() {
        Calc c;
        assert(10 == c.dobro(5));
        assert(20 == c.dobro(10));
        assert(50 == c.dobro(25));
    }


