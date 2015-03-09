---
layout:      grid93-article
title:       "Simples exemplo de TDD - Descobrir os dias de 'n' meses"
description:  descobrir os dias de n meses.
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Aliados a técnica de TDD (Test Driven Development) iremos desenvolver um pequeno programa para calcular o total de dias 
de n meses, considerando que todos os meses tenham 30 dias, .

Precisamos de um exemplo, que tal `7 meses * 30 dias = 210 dias` ?

Ok, iniciamos pelo teste.

    assert(210 = 7 * 30)

Se `7 * 30` representa os dias (nosso resultado final) então é exatamente isso o que vou fazer, criar a variável `dias`.

    int dias;

    dias = 7 * 30;

    assert(210 = dias)

Mas o `7` deveria ser "n meses", então lá vai mais uma variável.

    int dias, nMeses;

    nMeses = 7;

    dias = nMeses * 30;

Rode o teste (compile e execute). Se passarem, nosso trabalhou acabou.



### Código completo

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int nMeses, dias;

    // Valor arbitrário
    nMeses = 7;

    // Sua lógica
    dias = nMeses * 30;

    // Seu teste
    assert(210 == dias);

    return 0;
}
```



Próximo exemplo
---

- [Simples exemplo de TDD - Trocar o valor de duas variáveis](/tdd/exemplo-tdd-duas-variaveis/)
