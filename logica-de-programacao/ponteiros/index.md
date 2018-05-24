---
title:       Ponteiros
description: Exercício de lógica  envolvendo ponteiros
capitulo:    logica-nivel-8
ordem:       1
---

Este é o primeiro exercício envolvendo ponteiros da linguagem C.

Será necessário que você tenha os conceitos básico sobre o que é um ponteiro.

Mas se não tiver, tubo bem, isto ajudará:

Para declarar um ponteiro utilizamos operador `*`.

Para acessarmos o endereço de uma variável utilizamos o operador `&`.

- &lowast; para ponteiros
- & para endereço

Eu separei o exercício em duas partes...



Primeira parte (sem ponteiros)
---

Veja com atenção o código abaixo:

```c
#include <stdio.h>
#include <assert.h>

void main() {

    int x, y;

    x = 10;
    y = x;
    x = 20;

    assert(x == 20);
    assert(y == 10);
}
```

No código acima sabemos que `x == 20` e que `y == 10`, ok.

Seu desafio é me dizer por que `x` é igual a `20` e por que `y` é igual a `10`.

Vou lhe dar uma ajudar...

`x` e `y` são do tipo inteiro (`int`),

```c
int x, y;
```

A variável `x` contém o valor `10`.

```c
x = 10;
```

E aqui está a pegadinha.

```c
y = x;
```

O que é passado (atribuído) para a variável `y`?

Bom, alguma coisa de `x` é atribuído a `y`, e esse "alguma coisa" seria o *valor* ou a *referência* de `x`?


Se olharmos para dentro da variável `y` o que veremos?

Sabemos que é o valor `10`, pois o código mostrado (lá em cima) já nos diz isso.

E, por tanto, passamos para `y`...  o valor de `x`.

Pronto, respondido!




Segunda parte (com ponteiros)
---

Agora vamos ao segundo exemplo.

```c
#include <stdio.h>
#include <assert.h>

main() {

    int x, *y;

    x = 10;
    y = &x;
    x = 20;

    assert(x == 20);
    assert(*y == 20);
    return 0;
}
```

E agora, por que `x` é igual a `20` e por que `y` também é igual a `20`?

Vamos lá...

`x` e `y` ambas são do tipo inteiro, porém `y` agora é um ponteiro e não mais uma simples variável.

```c
int x, *y;
```

Isso significa que `x` aloca um espaço na memória e guardará nesse espaço valores inteiros.

Por outro lado, `*y` não alocou espaço algum (ainda não, pois não foi inicializado) e, ao invés de valores, será armazenado
o endereço da memória.

Continuando, inicializamos a variável `x` com o valor `10`.

```c
x = 10;
```

E, agora sim, inicializamos o ponteiro `y` com o endereço da variável `x`.

```c
y = &x;
```

Com isso já podemos concluir o seguinte:

    printf("%d", x);  // mostrará o valor de x
    printf("%d", &x); // mostrará o endereço de x

Mas voltando ao nosso pequeno trecho de código `y = &x`, atribuímos a `y` o endereço de `x`.

Podemos dizer, em outras palavras, que `y` está *amarrado* em `x`, pois se mudarmos o valor de `x`, o valor de `y` também
será alterado. Quer dizer, `y` é um ponteiro para a variável `x`.

Obs: A utilidade de ponteiros não é ficar apontando para outras variáveis. Estamos estudando um exemplo "bobo" que tem
como objetivo ser apenas didático.

Se continuarmos a ler o código...

```c
x = 10; // x é igual a 10
y = &x; // y aponta para x
x = 20; // x, agora, contém 20
```

Qualquer alteração em `x` refletirá em `y`.




Concluindo
---

A idéia essencial é que um ponteiro, diferentemente de uma variável comum, armazena os endereço de memória.

Veja também a principal diferença entre os dois exemplos:

No primeiro exemplo `y` recebe o valor de `x` (por valor).

```c
y = x;
```

Neste caso, alterar o valor de `x` não influencia `y`.

No segundo exemplo `y` recebe o endereço de `x` (por referência):

```c
y = &x;
```

Neste caso, `y` aponta para `x` e o que estiver em `x`, obviamente, estará em `y`.

Talvez esse seja o seu primeiro passo no entendimento de ponteiros da linguagem C, por tanto eu procurei extrair os
elementos mais simples do assunto __ponteiros__ para não "travarmos" no entendimento. Obviamente não terminamos aqui,
ainda há muita coisa para aprendermos sobre ponteiros.

Que tal vermos como eles agem sobre uma função?

Vá para a próxima matéria!

