---
title:       Votos em relação ao total de eleitores
description: Exercício de lógica de programação onde calculamos o percentual de votos em relação ao total de eleitores.
capitulo:    logica-nivel-5
ordem:       6
---



Exercício de lógica de programação
---

Considerando a tabela abaixo...

    total de eleitores = 1000
    válidos            = 800
    votos brancos      = 150
    nulos              = 50

Faça uma classe com 3 métodos que calculam...

- o percentual do votos válidos em relação ao total de eleitores,
- o percentual de brancos em relação ao total de eleitores
- o percentual de nulos em relação ao total de eleitores.

__Dica:__ "em relação ao total" significa que você deve dividir, por exemplo, "nulos" pelo total de eleitores, válidos
pelo total de eleitores, etc...

Utilize programação orientada a objetos.

<iframe width="560" height="315" src="https://www.youtube.com/embed/MxleeTzAMLY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

//
// Classe Votos
//
class Votos {
public:
    float total_eleitores,
          validos,
          brancos,
          nulos;

    Votos(int total){
        total_eleitores = total;
    }

    float percValidos() {
        return 0;
    }

    float percBrancos() {
        return 0;
    }

    float percNulos() {
        return 0;
    }
};


//
// Teste de unidade
//
void testVotos (){

    Votos votos(1000);
    votos.validos = 800;
    votos.brancos = 150;
    votos.nulos   = 50;

    assert(0.8f  == votos.percValidos());
    assert(0.15f == votos.percBrancos());
    assert(0.05f == votos.percNulos());

}

//
// Início do programa
//
int main() {
    // Chamamos o teste unitário
    testVotos();
    return 0;
}
```


### Solução na linguagem C

```c
//
// Classe Votos
//
class Votos {
public:
    float total_eleitores,
          validos,
          brancos,
          nulos;

    Votos(int total){
        total_eleitores = total;
    }

    float percValidos() {
        return validos / total_eleitores;
    }

    float percBrancos() {
        return brancos / total_eleitores;
    }

    float percNulos() {
        return nulos  / total_eleitores;
    }
};
```


Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Classe Votos
#
class Votos(object):

    def __init__(self, total_eleitores):
        self.total_eleitores = total_eleitores
        self.validos = 0;
        self.brancos = 0;
        self.nulos   = 0;

    def percValidos(self):
        pass

    def percBrancos(self):
        pass

    def percNulos(self):
        pass


#
# Testes
#
votos = Votos(1000)
votos.validos = 800;
votos.brancos = 150;
votos.nulos   = 50;

assert 0.8  == votos.percValidos(), "'percValidos' deve ser igual a 0.8"
assert 0.15 == votos.percBrancos(), "'percBrancos' deve ser igual a 0.15"
assert 0.05 == votos.percNulos(),   "percNulos deve ser igual a 0.05"
```


### Solução na linguagem Python


```python
#
# Classe Votos
#
class Votos(object):

    def __init__(self, total_eleitores):
        self.total_eleitores = total_eleitores
        self.validos = 0;
        self.brancos = 0;
        self.nulos   = 0;

    def percValidos(self):
        return self.validos / self.total_eleitores

    def percBrancos(self):
        return self.brancos / self.total_eleitores

    def percNulos(self):
        return self.nulos / self.total_eleitores
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

//
// Classe Votos
//
function Votos(total_eleitores) {
    this.total_eleitores = total_eleitores,
    this.validos = 0,
    this.brancos = 0,
    this.nulos   = 0;

    this.percValidos = function() {
        return 0;
    }

    this.percBrancos = function() {
        return 0;
    }

    this.percNulos = function() {
        return 0;
    }

}

//
// Testes
//
try {

    var votos = new Votos(1000);
    votos.validos = 800;
    votos.brancos = 150;
    votos.nulos   = 50;

    assert.equal(0.8,  votos.percValidos());
    assert.equal(0.15, votos.percBrancos());
    assert.equal(0.05, votos.percNulos());
} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
//
// Classe Votos
//
function Votos(total_eleitores) {
    this.total_eleitores = total_eleitores,
    this.validos = 0,
    this.brancos = 0,
    this.nulos   = 0;

    this.percValidos = function() {
        return this.validos / this.total_eleitores;
    }

    this.percBrancos = function() {
        return this.brancos / this.total_eleitores;
    }

    this.percNulos = function() {
        return this.nulos / this.total_eleitores;
    }

}
```
