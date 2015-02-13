---
layout:      grid93-article
title:       "Simples exemplo de TDD - O dobro de um número qualquer "
description: Este artigo é um exemplo de TDD escrito na linguagem C++ onde nosso objetivo é criar uma pequena classe, portanto faremos uso de OOP, contendo um único método que nos informe o dobro de um número qualquer
menu:        tdd-exemplos-simples-cpp
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Este primeiro exercício é um quebra gelo, a lógica é muito simples (o dobro de um número). O objetivo deste artigo é
dar o primeiro passo em relação as Classes (programação orientada a objetos) na __linguagem C++__ e também demonstrar 
como faremos os testes utilizando a instrução `assert()`.

Sua tarefa é fazer uma classe denominada `Calc` com um método que retorne o dobro de um número.

Começamos sempre com o teste, vamos combinar de colocar o prefixo `test` antes do nome da função.

    void testDobro() {
        Calc c;
        assert(10 == c.dobro(5));
    }

Adequamos o corpo do programa para executar o teste.

    int main() {
        testDobro();
        return 0;
    }

__Pausa...__

O `main` está fazendo o papel do "framework de teste".

Quero dizer que ao executar o programa, na verdade estaremos executando os testes.

Na vida real é exatamente o inverso, rodamos os testes... e os testes é quem executam o programa.

Mas ainda estamos simulando o mundo de "framework de testes", entenda que esse é um código com fins didáticos, ou seja,
nem de longe é um código profissional pronto para ser utilizado em produção.

__Continuando...__

Temos o teste e temos a função `main` chamando esse teste, mas ao compilar ele (o compilador) nos devolve a seguinte
informação.

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

É aqui que entra o seu trabalho, aqui que entra a lógica de seu programa.

Que tal isso?

    class Calc {
    public:
        int dobro(int num) {
            return num * 2;
        }
    };

Veja o código completo abaixo.

```c
#include <iostream>
#include <assert.h>

//
// Classe para abstrair cálculos matemáticos
//
class Calc {
public:
    int dobro(int num) {
        return num * 2;
    }
};

//
// Testes...
//
void testDobro() {
    Calc c;
    assert(10 == c.dobro(5));
}

//
// Início do programa
//
int main() {
    testDobro();
    return 0;
}
```


Experimente escrever outras asserções, por exemplo:

    void testDobro() {
        Calc c;
        assert(10 == c.dobro(5));
        assert(20 == c.dobro(10));
        assert(50 == c.dobro(25));
    }




Próximo exemplo de TDD
---

- [Simples exemplo de TDD - Área quadrada e área cúbica](/tdd/exemplo-tdd-area-quadra-cubo/)