---
layout:      grid93-article
title:       "Custo de fabricação de um carro "
description: Exercício de lógica de programação resolvido para descobrir o custo final de um carro.
menu:        logica-exerc-nivel-01
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

O custo de um carro novo ao consumidor é obtido com a seguinte fómula:
  
    custo final = custo de fábrica +
			     (custo de fábrica * percentual do distribuidor) +
			     (custo de fábrica * percentual de impostos)

Considerando os valores abaixo, faça um programa para calcular o custo de fabricação.
 
    Custo de fábrica = 10.000,00
    Percentual do distribuidor = 28%
    Percentual dos Impostos  = 45%


Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

int main() {

    // Variáveis
    float custoFabrica = 10000,
          custoDistribuidor,
          custoImpostos,
          custoFinal;

    //
    // Sua lógica entra aqui
    //



    //
    // Teste
    //
    assert(17300.0f == custoFinal);

    return 0;
    
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main() {

    // Variáveis
    float custoFabrica = 10000,
          custoDistribuidor,
          custoImpostos,
          custoFinal;

    //
    // Sua lógica entra aqui
    //
    custoDistribuidor = custoFabrica * 0.28f;
    custoImpostos     = custoFabrica * 0.45f;
    custoFinal        = custoFabrica + custoDistribuidor + custoImpostos;    

    //
    // Teste
    //
    assert(17300.0f == custoFinal);

    return 0;
    
}
```