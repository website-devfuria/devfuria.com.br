---
title:       "'Rodando os testes'  ou 'compilando e executando',  socorro ?"
description: Entendendo como o assert nos ajudará.
capitulo:    c-intro
ordem:       4
---

Estamos na seção da linguagem C/C++ tentando entender o mínimo sobra a linguagem para poder realizar os exercícios
 de [lógica de programação (aliadas a testes unitários)](/logica-de-programacao/) propostos na mesma seção.

Se você leu as matérias anteriores deve estar um pouco confuso em relação ao processo, afinal de contas __estamos 
"rodando os testes" ou "compilando e executando"__?

É isso o que eu quero esclarecer.

Ao juntar as duas coisas (lógica de programação e testes unitários) eu inseri um "complicador": os próprios testes unitários.
Em outra palavras, testes unitários não é um assunto básico e, por tanto, me deparei com a seguinte questão:

Como ensinar lógica de programação juntamente com testes unitários sem antes ensinar programação orientada a objetos, 
framework de testes, e as questões relacionados ao universo de testes unitários?

Eu tentei simplificar utilizando a função "assert()". A consequencia é que, devido ao funcionamento da função `assert()`,
o significado de "rodar os testes" passa a ser "compile e execute" e a confusão em torno disso pode nos atrapalhar.

Vamos colocar os pingos nos is...



### Na vida real

Eu escrevo testes com ajuda de um framework, normalmente baseado no [xUnit](http://en.wikipedia.org/wiki/XUnit).

Eu "rodo os testes" através do framework, é ele quem me diz se o código está ou não funcionando.

O código produzido é inteiramente orientado a objetos. Pois a menor unidade é um método e esse método está dentro de
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

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int  dobro;
    dobro = 2 * 50;// dobro será 100

    // Simulando o  teste
    assert(100 == dobro);

    return 0;
}
```

Rodando os testes...

    gcc seucodigo.c -o seuprograma.run
    ./seuprograma.run


Testes passando (bandeira verde).



Exemplo (false)
---

O código abaixo também compilará, mas ao executar ele será interrompido pela função `assert()`.


```c
#include <stdio.h>
#include <assert.h>

int main (){

    int  dobro;
    dobro = 3 * 50;// negativo dobro será 150

    // Simulando o  teste
    assert(100 == dobro);

    return 0;
}
```

Rodando os testes...

    gcc seucodigo.c -o seuprograma.run
    ./seuprograma.run
    executavel.run: foo.c:11: main: Assertion `100 == dobro' failed.
    Aborted

Testes falhando (bandeira vermelha).




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



E agora?
---

Agora acredito que você está pronto para praticar os exercícios de lógica de programação aliados a prática de testes
unitários.

- [Lógica de programação aliada a testes unitários](/logica-de-programacao/)

 Bons estudos!