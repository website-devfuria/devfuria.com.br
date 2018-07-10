---
title:       Contar vogais
description: Exercício de lógica de programação para contar a quantidade de vogais de uma string.
capitulo:    logica-nivel-4-strings
ordem:       2
---



Exercício de lógica de programação
---

Faça um programa que descubra a quantidade de vogais de uma determinada string.

<iframe width="560" height="315" src="https://www.youtube.com/embed/GDLXhYbN50w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

//
// Função para contar quantidade de vogais de determinada string
//
int contarVogais(char palavra[]) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    char palavra[] = "abecedario";
    assert(6 == contarVogais(palavra));

    return 0;
}
```


### Solução na linguagem C

Em C temos que perguntar se determinado caracter está contido dentro do vetor pesquisado. Fazemos isso, com um aninhamento
de laços de repetição, ou melhor, com um laço dentro de outro.

O código de solução (mostrado abaixo) se parece em muito com o código do problema de
[vetor com valores repetidos](/logica-de-programacao/vetor-valores-repetidos/).

```c
#include <stdio.h>
#include <assert.h>

//
// Função para contar quantidade de vogais de determinada string
//
int contarVogais(char palavra[]) {
    char vogais[] = "aeiouAEIOU";
    int numVogais = 0, i, j;

    for (i = 0; palavra[i] != '\0'; i++) {
        for (j = 0; vogais[j] != '\0'; j++) {
            if (vogais[j] == palavra[i]) {
                numVogais++;
                break;
            }
        }
    }

    return numVogais;
}

//
// Testes
//
int main() {

    char palavra[] = "abecedario";
    assert(6 == contarVogais(palavra));

    return 0;
}
```

- - -
Fonte: [http://www.ime.usp.br/~pf/algoritmos/aulas/string.html](http://www.ime.usp.br/~pf/algoritmos/aulas/string.html)





Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

# Função que descobre a quantidade de vogais
# de uma determinada string
def contarVogais():
    pass

#
# Teste
#
palavra = "abecedario";
assert 6 == contarVogais(palavra)
```


### Solução na linguagem Python

Brincando no terminal, podemos fazer uso do operador `in` e confirmamos o seguinte...

```python
>>> vogais = "aeiou"
>>> "a" in vogais
True
>>> "b" in vogais
False
>>> "c" in vogais
False
```

E a solução não demora para chegar...

```python
# -*- coding: utf-8 -*-

# Função que descobre a quantidade de vogais
# de uma determinada string
def contarVogais(palavra):
    vogais = "aeiou"
    totalVogal = 0

    for letra in palavra:
        if letra in vogais:
            totalVogal += 1

    return totalVogal

#
# Teste
#
palavra = "abecedario";
assert 6 == contarVogais(palavra)
```

### Estendendo a solução

Nessa mesma linha de raciocínio, podemos estender nossa solução para contar, além da vogais, as consoantes.

A solução seria algo algo parecido com isto....

```python
if letra in vogais:
  print "Vogal"
elif letra.isalpha():
  print "Consoante"
else:
  print "Não é uma letra"
```



Linguagem JavaScript
---

Abaixo nosso código inicial escrito em JavaScript, utilize ele para resolver o problema.

```javascript
var assert = require('assert');

var contarVogais = function(palavra) {





}


//
// Seu teste
//
try {
    assert.equal(6, contarVogais("abecedario"));
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript

```javascript
var assert = require('assert');

var contarVogais = function(palavra) {
    var totalVogal = 0;
    var vogais = ['a', 'e', 'i', 'o', 'u'];
    var i;

    for (i = 0; i < palavra.length; i++ ) {
        if(vogais.indexOf(palavra[i]) != -1) {
            totalVogal++;
        }
    }

    return totalVogal;
}


//
// Seu teste
//
try {
    assert.equal(6, contarVogais("abecedario"));
} catch(e) {
    console.log(e);
}

```

