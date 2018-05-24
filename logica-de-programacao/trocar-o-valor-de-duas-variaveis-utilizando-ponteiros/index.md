---
title:       Trocar o valor de duas variáveis utilizando ponteiros
description: Criar uma função para trocar o valor de duas variáveis.
capitulo:    logica-nivel-8
ordem:       2
---


Nós já vimos este exercício lá no início deste curso, só que agora iremos utilizar ponteiros para resolver o problema.

Abaixo vemos uma réplica do exercício.

Repare que os testes (`assert`) estão dentro da função, de outra forma não funcionaria.

Precisamos deixar nossa função mais autônoma retirando os testes de dentro dela. A dificuldade, neste caso, é retornar
dois valores diferentes, como faríamos isso? Além disso, como passaríamos a variável e não o seu valor?

```c
#include <stdio.h>
#include <assert.h>

void troca (int a, int b) {
     int aux;

     aux = a;
     a   = b;
     b   = aux;

    assert(a == 555);
    assert(b == 999);
}

int main() {
    troca(999, 555);
    return 0;
}
```

Este é um bom execício para compreender a diferença entre o que é passar parâmetros por valores e por referência.

    por valor      = nossa função receberá os valores e
                     manipulá-los não interfere no conteúdo das variáveis originais.

    por referência = temos a referência daquela variável e, dessa forma,
                     alteramos o valor original da variável.

Veja abaixo nosso código alterado para se comportar exatamente como descrevemos.

```c
#include <stdio.h>
#include <assert.h>

void troca (int *a, int *b) {
     int aux;

     aux = *a;
     *a  = *b;
     *b  = aux;
}

int main() {
    int a = 999;
    int b = 555;

    troca(&a, &b);

    assert(a == 555);
    assert(b == 999);
    return 0;
}
```

O seu desafio é entender o funcionamento deste código.