---
layout:      grid93-article
title:       "Custo de fabricação de um carro "
description: Exercício de lógica de programação resolvido para descobrir o custo final de um carro.
menu:        logica-exercicios
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

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

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

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

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



Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
#
# Variáveis
#
custoFabrica 	  = 10000
custoDistribuidor = 0
custoImpostos 	  = 0
custoFinal 		  = 0

#
# Sua lógica entra aqui
#





#
# Teste
#
assert 17300 == custoFinal, "'custoFinal' deve ser igual a 17300";
```


### Solução na linguagem Python

```python
#
# Variáveis
#
custoFabrica 	  = 10000
custoDistribuidor = 0
custoImpostos 	  = 0
custoFinal 		  = 0

#
# Sua lógica entra aqui
#
custoDistribuidor = custoFabrica * 0.28;
custoImpostos     = custoFabrica * 0.45;
custoFinal        = custoFabrica + custoDistribuidor + custoImpostos;

#
# Teste
#
assert 17300 == custoFinal, "'custoFinal' deve ser igual a 17300";
```



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Variáveis
//
var custoFabrica = 10000,
    custoDistribuidor,
    custoImpostos,
    custoFinal;

//
// Sua lógica entra aqui
//




//
// Seu teste
//
try {
    assert.equal(17300, custoFinal);
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Variáveis
//
var custoFabrica = 10000,
    custoDistribuidor,
    custoImpostos,
    custoFinal;

//
// Sua lógica entra aqui
//
custoDistribuidor = custoFabrica * 0.28;
custoImpostos     = custoFabrica * 0.45;
custoFinal        = custoFabrica + custoDistribuidor + custoImpostos; 

//
// Seu teste
//
try {
    assert.equal(17300, custoFinal);
} catch(e) {
    console.log(e);
}

```

{% include /menus/logica-feedback.html %}