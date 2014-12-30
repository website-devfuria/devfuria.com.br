---
layout:      grid12-article
title:       "Triângulo - linguagem c++"
description: Exercício de lógica de programação com OOP e TDD - triângulos.
---

Dados 3 valores quaisquer (a, b e c) representando as medidas dos lados de um triângulo,
faça um algorítimo para descobrir se formam ou não um triângulo.

Saiba que para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados.

Utilize programação orientada a objetos.

Obs: no final do exercício há um complemento, vale apena ver.

Solução passo a passo
---

OK, meu objetivo é criar uma função para determinar se é os dados compõem ou não um triângulo.

Minha classe se chamara `triangulo` e minha função será `ehTriangulo()`.

Se a função vai dizer sim ou não, então ela poderá retornar um tipo "booleano".

Vejamos o teste.

    Triangulo tri;
    tri.a = 3;
    tri.b = 4;
    tri.c = 5;
    assert(tri.ehTriangulo());

Esse teste deve retornar um valor verdadeiro, pois os valores obedecem a regra: __o valor de cada lado deve ser menor 
que a soma dos outros 2 lados__.

Vamos criar a estrutura primeiro.

    class Triangulo {
    public:
        int a, b, c;

        bool ehTriangulo() {
        }
    };

    void testEhTriangulo() {

        Triangulo tri;
        tri.a = 3;
        tri.b = 4;
        tri.c = 5;
        assert(tri.ehTriangulo());
    }

    int main() {
        testEhTriangulo();
        return 0;
    }

O código compila mas o teste não passa (red).

Agora é só implementar o método `ehTriangulo`



Código completo
---

```c
#include <iostream>
#include <assert.h>

class Triangulo {
public:
    int a, b, c;

    bool ehTriangulo() {
        if (a < (b + c)) {
            if (b < (a + c)) {
                if (c < (a + b)) {
                    return true;
                }
            }
        }
    }
};

void testEhTriangulo() {

    Triangulo tri;
    tri.a = 3;
    tri.b = 4;
    tri.c = 5;
    assert(tri.ehTriangulo());
}

int main() {
    testEhTriangulo();
    return 0;
}
```


Um mês depois...
---

Seu chefe olha para você e diz que "o programa __também__ deverá informar se os valores formam um triângulo equilátero, 
isósceles ou escaleno" e entrega a você as seguintes regras:

- Triângulo Equilátero: três lados iguais;
- Triângulo Isósceles: quaisquer dois lados iguais;
- Triângulo Escaleno: três lados diferentes; 

OK, vamos alterar a classe `Triangulo` para acomodar as novas funcionalidades.

Mas lembre-se que se passaram um mês e como sua equipe é grande, estamos preocupado se alguém mexeu no seu código.

Você poderia olhar os logs do sistema de versionamento, mas de qualquer forma fica a pergunta: "será que o código ainda está
funcioando? Será que ninguém o quebrou?".

Pergunte para os testes! Como? Rode os testes, se eles passarem (green) seu sistema funciona e você poderá trabalhar
tranquilamente.

Uma lição importante de __TDD__ (ou talvez testes unitários): antes de mexer no código rode os testes.

Crie este hábito.


__Testes rodando, vamos trabalhar.__

Olhando o teste já escrito, eu percebo que os valores compõem um triangulo escaleno. Escrevo um novo teste.

    void testEhEscaleno() {

        Triangulo tri;
        tri.a = 3;
        tri.b = 4;
        tri.c = 5;
        assert(tri.ehEscaleno());
    }

    int main() {
        testEhTriangulo();
        testEhEscaleno();
        return 0;
    }

Sei que o código não compila, façamos compilar.

    ...
    bool ehEscaleno() {
    }


Se você executar o programa do jeito que está, veremos o teste passar quando não deveria passar, afinal a função `ehEscaleno`
não retorna nada.

Ops... retorna sim e o valor está sendo considerado como verdadeiro. Isso é sinal de que:

1. Nosso famingerado `assert()` está nos deixando na mão.
2. Precisaremos, em breve, descobrir um bom framework de testes.
3. Nosso conhecimento sobre a linguagem não parece muito bom.

As 3 afirmações acima, são verdadeiras. Mas pensando que nosso objetivo primário é __lógica de programação__ e não
conhecer a fundo os detalhes da linguagem __c__/__c++__, seguiremos em frente apesar do incômodo.

Vamos dar um pequeno passo (baby step).

    ...
    bool ehEscaleno() {
        return true;
    }

Pronto, a "coisa toda" volta a fazer sentido e podemos seguir com a implemetação da função.

    bool ehEscaleno() {
        if(a != b && a != c && b != c) {
            return true;
        } else {
            return false;
        }
    }

O escaleno foi fácil. Encorajado, corri para o isósceles... 

    class Triangulo {
    public:

        ...
        bool ehIsosceles() {
            return true;
        }

    };

    void testEhIsosceles() {

        Triangulo tri;

        tri.a = 3;
        tri.b = 3;
        tri.c = 5;
        assert(tri.ehIsosceles());

    }

    int main() {
        ...
        testEhIsosceles();
        return 0;
    }


Na hora de implementar a função... travei! Não consegui pensar em uma solução imediata para o problema. Olhando a regra:

- Triângulo Isósceles: quaisquer dois lados iguais;

Em minha mente, logo veio que eu teria que comparar os 3 lados com os próprios 3 lados.

Aí o  __TDD__ "entra como uma luva". Ao invés de pensar muito, posso fazer suposições e ver se elas se tornam verdadeiras.


        if(a == b) {
            return true;
        } else {
            return false;
        }

A primeira suposição passou. Então fiz mais uma, meu teste ficou assim...

    void testEhIsosceles() {

        Triangulo tri;

        tri.a = 3;
        tri.b = 3;
        tri.c = 5;
        assert(tri.ehIsosceles());

        tri.a = 3;
        tri.b = 5;
        tri.c = 3;
        assert(tri.ehIsosceles());

    }

O teste não passa (red). Sem pensar muito, experimentei o óbvio.

    bool ehIsosceles() {
        if(a == b) {
            return true;
        } else if(a == c) {
            return true;
        } else {
            return false;
        }
    }

OK, testes passando. Só me restava acrescentar mais uma asserção,

    tri.a = 5;
    tri.b = 3;
    tri.c = 3;
    assert(tri.ehIsosceles());

Com os testes no vermelho, tentei...

    bool ehIsosceles() {
        if(a == b) {
            return true;
        } else if(a == c) {
            return true;
        } else if(b == c) {
            return true;
        } else {
            return false;
        }
    }

E tudo passou (green).

Fui para o equilátero (3 lados iguais). 

Pô, esse é o inverso do escaleno. Darei uma passo grande, eis o teste:

    void testEhEquilatero() {

        Triangulo tri;
        tri.a = 4;
        tri.b = 4;
        tri.c = 4;
        assert(tri.ehEquilatero());
    }

    int main() {
        ...
        testEhEquilatero();
        return 0;
    }

...e a implementação:

    bool ehEquilatero() {
        if(a == b && a == c && b == c) {
            return true;
        } else {
            return false;
        }
    }  

Tudo passou!.


Código final
---

```c
#include <iostream>
#include <assert.h>

class Triangulo {
public:
    int a, b, c;

    bool ehTriangulo() {
        if (a < (b + c)) {
            if (b < (a + c)) {
                if (c < (a + b)) {
                    return true;
                }
            }
        }
    }
    
    bool ehEscaleno() {
        if(a != b && a != c && b != c) {
            return true;
        } else {
            return false;
        }
    }
    
    bool ehIsosceles() {
        if(a == b) {
            return true;
        } else if(a == c) {
            return true;
        } else if(b == c) {
            return true;
        } else {
            return false;
        }
    }
    
    bool ehEquilatero() {
        if(a == b && a == c && b == c) {
            return true;
        } else {
            return false;
        }
    }    
    
};

void testEhTriangulo() {

    Triangulo tri;
    tri.a = 3;
    tri.b = 4;
    tri.c = 5;
    assert(tri.ehTriangulo());
}

void testEhEscaleno() {

    Triangulo tri;
    tri.a = 3;
    tri.b = 4;
    tri.c = 5;
    assert(tri.ehEscaleno());
}

void testEhIsosceles() {

    Triangulo tri;
    
    tri.a = 3;
    tri.b = 3;
    tri.c = 5;
    assert(tri.ehIsosceles());
    
    tri.a = 3;
    tri.b = 5;
    tri.c = 3;
    assert(tri.ehIsosceles());
    
    tri.a = 5;
    tri.b = 3;
    tri.c = 3;
    assert(tri.ehIsosceles());
}

void testEhEquilatero() {

    Triangulo tri;
    tri.a = 4;
    tri.b = 4;
    tri.c = 4;
    assert(tri.ehEquilatero());
}

int main() {
    testEhTriangulo();
    testEhEscaleno();
    testEhIsosceles();
    testEhEquilatero();
    return 0;
}
```

Código limpo e funcionando.


Um mês depois
---


Chega! É brincadeira!