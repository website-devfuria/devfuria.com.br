---
title:       Juros simples (OOP)
description: Exercício de lógica de programação (com testes unitários) para calcular o juros simples.
capitulo:    logica-nivel-5
ordem:       4
---



Exercício de lógica de programação
---

Faça um programa para calcular o juros simples segundo a fórmula abaixo.

    J = C.i.n

Onde:

    J = juros,
    C = capital,
    i = taxa de empréstimo
    n = períodos

Vamos imaginar o seguinte cenário: um empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.

Utilize orientação a objetos para resolver o problema.

Como nós já resolvemos este exercício na versão "estruturada" (não utilizamos nem ao menos as funções) eu resolvi
mostrar algumas particularidades das linguagens Python e JavaScript.

<iframe width="560" height="315" src="https://www.youtube.com/embed/fkJyYbaaD2g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C++
---

Em C++ já temos o teste escrito, você deve implementar a classe `Juros`.

```c
#include <iostream>
#include <assert.h>

//
// Classe Juros
//
class Juros {
    //
    // seu código
    //
};

//
// Teste Unitário
//
void testJurosSimples() {

    Juros juros;

    juros.capital = 16000;
    juros.taxa    = 0.04;
    juros.periodo = 4;

    assert(2560 == juros.simples());
}

//
// Início do programa
//
int main() {
    // Executando o teste unitário
    testJurosSimples();
    return 0;
}
```


### Solução na linguagem C++


```c
//
// Classe Juros
//
class Juros {
public:
    float capital, taxa;
    int periodo;

    // Função que retorna o juros simples
    // J = c . i . n
    int simples() {
        return capital * taxa * periodo;
    }
};
```



Linguagem JavaScript
---

Dessa vez vamos fazer algo bem arcaico, diga-se de passagem, vamos criar um variável e instanciar o tipo primitivo `Object`.
O exemplo é só para ilustrar como a programação orientada a objeto pode diferenciar e muito de uma linguagem para outra.

```javascript
var assert = require('assert');

//
// Criamos um objeto vazio a partir do tipo primitivo `Object`
//
var juros = new Object();

//
// Definimos um método para o objeto recém criado
//
juros.simples = function() {

    //
    // Aqui entra a sua lógica
    //

}

try {

    //
    // Teste
    //

    // Repare que NÂO instanciamos o objeto
    juros.capital = 16000;
    juros.taxa = 0.04;
    juros.periodo = 4;
    assert.equal(2560, juros.simples());

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript

```javascript
juros.simples = function() {
    return this.capital * this.taxa * this.periodo;
}
```



Linguagem Python
---

Eu deixei o Python por último para tentar fazer um paralelo com a linguagem JavaScript e, ao invés do exercício, vou
mostrar a resposta.

Para utilizarmos funções anônimas em Python devemos lançar mão da expressão `lambda`.

A sintaxe em JavaScript é um pouco mais intuitiva (minha opinião), por isso eu mostrei ela em primeiro lugar.

```python
#
# Definimos uma classe vazia (como em JS)
#
class Juros(object):
    pass


#
# Instanciamos a classe
#
juros = Juros()

#
# Definimos um método através do recurso `lambda`
#
juros.simples = lambda obj: obj.capital * obj.taxa * obj.periodo


#
# Teste
#
# Como em JS, também não instanciamos a classe
#
juros.capital = 16000
juros.taxa    = 0.04
juros.periodo = 4
assert 2560 == juros.simples(juros)
```

Se estiver com dificuldade de entender o que o código acima está realmente fazendo, veja o código abaixo, ele é equivalente.

```python
# -*- coding: utf-8 -*-

#
# Definimos uma classe vazia (como em JS)
#
class Juros(object):
    pass

#
# Atenção: este método não faz parte da classe acima...
#
def simples(obj):
    return obj.capital * obj.taxa * obj.periodo

#
# ... para tal, precisaremos instanciar a classe
# e atribuir a função ao método do objeto `juros`.
juros = Juros()
juros.simples = simples

#
# Teste
#
juros.capital = 16000
juros.taxa    = 0.04
juros.periodo = 4
assert 2560 == juros.simples(juros)
```

A solução apresentada tanto em JavaScript como em Python não são as mais indicadas, eu optei por elas porque o meu
objeto era ilustrarmos as particularidades de cada linguagem ao invés de simplesmente resolver o enunciado.



