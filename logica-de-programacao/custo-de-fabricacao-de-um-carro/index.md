---
title:       Custo de fabricação de um carro
description: Exercício de lógica de programação resolvido para descobrir o custo final de um carro.
capitulo:    logica-nivel-1
ordem:       2
---



Exercício de lógica de programação
---

O custo de um carro novo ao consumidor é obtido com a seguinte fórmula:

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

//
// Retorna o custo final da fabricação de um carro
//
float custoFinal() {
    return 0;
}

//
// Teste
//
int main() {

    assert(17300.0f == custoFinal(10000));

    return 0;

}
```

### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Retorna o custo final da fabricação de um carro
//
float custoFinal(int custoFabrica) {
    float custoDistribuidor = custoFabrica * 0.28f;
    float custoImpostos     = custoFabrica * 0.45f;
    return custoFabrica + custoDistribuidor + custoImpostos;
}

//
// Teste
//
int main() {

    assert(17300.0f == custoFinal(10000));

    return 0;

}
```


Linguagem Python
---

+ [Aula #10b - Custo de um carro (passo 1)](https://youtu.be/vxSavEbacFE)
+ [Aula #10c - Custo de um carro (passo 2)](https://youtu.be/NoXGWVmt6w4)
+ [Aula #10d - Custo de um carro (passo 3)](https://youtu.be/nAVlUE_bn0U)
+ [Aula #10e - Custo de um carro (passo 4)](https://youtu.be/eR8LQgcktag)

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Retorna o custo final da fabricação de um carro
#
def custoFinal():
    pass

#
# Teste
#
assert 17300 == custoFinal(10000), "'custoFinal' deve ser igual a 17300"
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Retorna o custo final da fabricação de um carro
#
def custoFinal(custoFabrica):
    custoDistribuidor = custoFabrica * 0.28
    custoImpostos     = custoFabrica * 0.45
    return custoFabrica + custoDistribuidor + custoImpostos


#
# Teste
#
assert 17300 == custoFinal(10000), "'custoFinal' deve ser igual a 17300"
```



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Retorna o custo final da fabricação de um carro
//
var custoFinal = function() {
    return 0;
}

//
// Seu teste
//
try {
    assert.equal(17300, custoFinal(10000));
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Retorna o custo final da fabricação de um carro
//
var custoFinal = function(custoFabrica) {
    var custoDistribuidor = custoFabrica * 0.28;
    var custoImpostos     = custoFabrica * 0.45;

    return custoFabrica + custoDistribuidor + custoImpostos;
}

//
// Seu teste
//
try {
    assert.equal(17300, custoFinal(10000));
} catch(e) {
    console.log(e);
}
```

