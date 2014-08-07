---
layout:      materia
title:       "'Rodando os testes' ou 'compilando e executando', socorro ?"
description: Entendendo como o assert nos ajudará.
---

Estamos no curso de lógica de programação aliada a prática do __TDD__.

__TDD__ é o ato de escrever testes unitários antes de codificar. É muito mais do que isso, mas por enquanto essa idéia basta.

Ao juntar as duas coisas (lógica de programação e TDD) eu inseri um "complicador": os testes unitários.

A evolução mais corriqueira na vida de um programador é a seguinte sequência:

1. Lógica de programação
2. Programação orientada a objeto
3. Testes unitários (incluindo um framework de testes)
4. TDD

Como ensinar lógica de programação e __TDD__ sem antes ensinar programação orientada a objetos, framework de testes,
testes unitários?

Eu tentei simplificar utilizando a função "assert()". A consequencia é que o significado de "rodar os testes" passa a ser
"compile e execute". Isso devido ao funcionamento da função `assert()`. E a confusão em torno disso pode nos atrapalhar.



### Na vida real

Eu escrevo testes com ajuda de um framework, normalmente baseado no [xUnit](http://en.wikipedia.org/wiki/XUnit "link-externo").

Eu "rodo os testes" através do framework, é ele quem me diz se o código está ou não funcionando.

O código produzido é inteiramente orientado a objetos. Pois a menor unidade é um método. E esse método está detro de
uma classe.


### Em nosso caso

Vamos utilizar a função `assert()` para simular testes unitários, inclusive o framework (coitado do assert).

A função `assert()` não me obriga a criar um método, logo poderemos fazer isso dentro do bloco da função principal `main` 
(nas linguagens c e c++).



### Então não confunda as coisas

Em nosso caso, "rodar os testes" significa compilar (sem erros) e executar o programa.

Se o `assert()` funcionar (a expressão for verdadeira), os testes passaram.

Se o `assert()` falhar (a expressão for falsa), os testes também falharam.


Exemplo (true)
---

O código abaixo compila corretamente e ao ser executado ele "não faz nada", fica em silêncio (a expressão testada pelo
 __assert()__ é verdadeira).

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int main (){

    int  dobro;
    dobro = 2 * 50;// dobro será 100

    // Simulando o  teste
    assert(100 == dobro);

    return 0;
}
{% endhighlight %}

Rodando os testes...

    gcc seucodigo.c -o seuprograma.run
    ./seuprograma.run


__Testes passando (bandeira verde)__



Exemplo (false)
---

O código abaixo também compilará, mas ao executar ele será interrompido pela função `assert()`.


{% highlight c %}
#include <stdio.h>
#include <assert.h>

int main (){

    int  dobro;
    dobro = 3 * 50;// negativo dobro será 150

    // Simulando o  teste
    assert(100 == dobro);

    return 0;
}
{% endhighlight %}

Rodando os testes...

    gcc seucodigo.c -o seuprograma.run
    ./seuprograma.run
    executavel.run: foo.c:11: main: Assertion `100 == dobro' failed.
    Aborted

__Testes falhando (bandeira vermelha)__




Resumindo
---

Um código na __linguagem c__ nada mais é do que um arquivo de texto.

Se esse arquivo de texto chamar-se, por exemplo, "seucodigo.c", então:


__Compilando:__

    gcc seucodigo.c -o seuprograma.run

__Executando (rodando os testes):__

    ./seuprograma.run

Se o `assert()` ficar em silêncio, testes passando (green).

Se o `assert()` gritar, testes falhando (red).