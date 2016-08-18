---
title:       Entenda a função assert()
description: Aprenda como utilizar a função assert() na linguagem C
---


A função `assert()` testa se uma expressão é true (verdadeira).

Ao executar seu programa, se a expressão for verdadeira (true), o `assert` se mantém silencioso, quer dizer, ele nada acusa.

Mas se ao executar o programa e a expressão for falsa (false), o `assert` gritará interrompendo a execução do programa.

Para utilizarmos o __assert__ em nosso código é preciso utilizar o cabeçalho __assert.h__.

    #include <assert.h>


Exemplo (true)
---

Este código compilará e executará sem problemas (silenciosamente).

    #include <stdio.h>
    #include <assert.h>

    int main(int argc, char const *argv[])
    {
        assert(1 == 1);
        return 0;
    }



Exemplo (false)
---

Este código compilará mas será interrompido na execução, pois a expressão `1 == 2` é falsa.

    #include <stdio.h>
    #include <assert.h>

    int main(int argc, char const *argv[])
    {
        assert(1 == 2);
        return 0;
    }



Desabilitar o assert
---


É possível desabilitar o __assert__ sem mexer no código.

Utilize a diretiva  `#define DEBUG`.

O exemplo anterior "false" funcionará corretamente (silenciosamente), veja:

    #include <stdio.h>
    #include <assert.h>

    #define DEBUG

    int main(int argc, char const *argv[])
    {
        assert(1 == 2);
        return 0;
    }

É como se a linha `assert(1 == 2);` não estivesse ali, ela é ignorada.


Importante
---

O `assert()` não é para ser utilizado em seus programas reais. A não ser que você tenha outra razão para utilizá-lo.

Nesse curso de lógica, utilizaremos ele com frequência. A razão é porque ele nos ajuda a simular um teste unitário, mas
apenas isso, para __simular um teste unitário__.

Ao laborar o curso, eu procurava o forma mais simples de fazer um teste sem complicar as coisas, essa forma foi através
do `assert()`.

Não vá pensar que é para utilizar o `assert()` a "torto e direito", vamos utilizá-lo apenas em quanto ele for útil
para o aprendizado de lógica de programação juntamente com testes unitários.




Leia agora
---

- ['Rodando os testes' ou 'compilando e executando', socorro ?](/c/rodando-os-testes/)
