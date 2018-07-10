---
title:       Número primo
description: Exercício de lógica de programação para descobrir se um número é primo.
capitulo:    logica-nivel-3
ordem:       1
---



Exercício de lógica de programação
---

Faça um programa para identificar se um número é primo.

Lembre-se que número primo, é um número natural, maior que 1, apenas divisível por si próprio e pela unidade.


__Comentários__:

Os problemas (e as soluções) envolvendo os números primos são fascinantes e não é objetivo deste artigo
esgotar o assunto, muito pelo contrário, o objetivo é simplesmente ser a porta de entrada, o primeiro degrau.

Outro ponto a comentar é a questão dos testes, você verá que é difícil determinar o quanto de testes seriam suficientes
para garantir o correto funcionamento do algoritmo.

<iframe width="560" height="315" src="https://www.youtube.com/embed/LWdR-6JWR0o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

// Função que descobre se o número é ou não primo.
//
// Retorna:
//   0 para false (composto)
//   1 para true  (primo)
//
int ehPrimo(int num) {

    // Aqui entra a lógica do programa.

}

// Função que descobre se dois números possuem divisão exata.
//
// Retorna:
//   0 para false
//   1 para true
//
int ehDivisaoExata(int dividendo, int divisor) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    assert(1 == ehDivisaoExata(3, 1));
    assert(1 == ehDivisaoExata(3, 3));
    assert(0 == ehDivisaoExata(3, 2));

    assert(1 == ehPrimo(2));
    assert(1 == ehPrimo(3));
    assert(1 == ehPrimo(5));
    assert(1 == ehPrimo(7));
    assert(1 == ehPrimo(11));
    assert(1 == ehPrimo(13));

    assert(0 == ehPrimo(4));
    assert(0 == ehPrimo(6));
    assert(0 == ehPrimo(9));
    assert(0 == ehPrimo(10));
    assert(0 == ehPrimo(12));

    // E aí, vamos testar até aonde?
    // Difícil determinar até onde devem ir os testes
    // nestes casos.

    return 0;
}
```


### Solução na linguagem C

```c
// Função que descobre se o número é ou não primo.
//
// Retorna:
//   0 para false (composto)
//   1 para true  (primo)
//
int ehPrimo(int num) {
    int i, quantDivisores = 0;

    for(i = 1; i <= num; i++) {
        if (ehDivisaoExata(num, i)) {
            quantDivisores++;
        }
    }

    if (quantDivisores == 2) {
        return 1;
    } else {
        return 0;
    }
}

// Função que descobre se dois números possuem divisão exata.
//
// Retorna:
//   0 para false
//   1 para true
//
int ehDivisaoExata(int dividendo, int divisor) {
    return (dividendo % divisor) == 0;
}
```


### Desafios na linguagem C

Com o código abaixo chegamos no mesmo resultado (eu reduzi os testes).

Tente entendê-lo e faço o teste de mesa.

```c
#include <stdio.h>
#include <assert.h>

int ehPrimo(int num) {
    int i, count = 0;

    for (i = 2; i <= num / 2; i++) {
        if (num % i == 0) {
            count++;
            break;
        }
    }

    if (count == 0)
        return 1;
    else
        return 0;

}

int main() {
    assert(1 == ehPrimo(2));
    assert(1 == ehPrimo(3));
    assert(0 == ehPrimo(4));
    return 0;
}
```

O código abaixo é outro desafio, procure entender e faça o teste de mesa.

```c
#include <stdio.h>
#include <assert.h>

int ehPrimo(int num) {
    int y;
    for (y = 2; y <= num - 1; y++) {
        if (num % y == 0)
            return 0;
    }
    return 1;
}

int main() {
    assert(1 == ehPrimo(2));
    assert(1 == ehPrimo(3));
    return 0;
}
```



Linguagem Python
---

```python
# -*- coding: utf-8 -*-

#
# Função que descobre se o número é ou não primo.
#
def ehPrimo(num):
    pass

#
# Testes
#

assert ehPrimo(2)
assert ehPrimo(3)
assert ehPrimo(5)
assert ehPrimo(7)
assert ehPrimo(11)
assert ehPrimo(13)

assert not ehPrimo(4)
assert not ehPrimo(6)
assert not ehPrimo(8)
assert not ehPrimo(9)
assert not ehPrimo(10)
assert not ehPrimo(12)
```


### Solução na linguagem Python

Se quisermos imitar o que fizemos em C, aqui vai...

```python
def ehPrimo(num):
    divisores = 0
    i = 1
    while i <= num:
        if num % i == 0 :
            divisores = divisores + 1
        i = i + 1

    if divisores == 2:
        return True
    else:
        return False
```

Você pode alterar o laço `while` por um laço `for`, veja exemplo abaixo.

```python
    ...
    ...
    ...
    for i in range(1, num + 1):
        ...
        ...
        ...
```

Agora se quisermos partir para uma solução __um pouco mais__ pythonica, que tal...

```python
def ehPrimo(num):
    if num < 2:
        return False
    else:
        for n in range(2, num):
            if num % n == 0:
               return False
        return True
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

// Função que descobre se o número é ou não primo.
//
// Retorna:
//   0 para false (composto)
//   1 para true  (primo)
//
var ehPrimo = function(num) {
    return 0;
}

// Função que descobre se dois números possuem divisão exata.
//
// Retorna:
//   0 para false
//   1 para true
//
var ehDivisaoExata = function(dividendo, divisor) {
    return 0;
}


//
// Testes
//
try {

    assert.equal(1, ehDivisaoExata(3, 1));
    assert.equal(1, ehDivisaoExata(3, 3));
    assert.equal(0, ehDivisaoExata(3, 2));

    assert.equal(1, ehPrimo(2));
    assert.equal(1, ehPrimo(3));
    assert.equal(1, ehPrimo(5));
    assert.equal(1, ehPrimo(7));
    assert.equal(1, ehPrimo(11));
    assert.equal(1, ehPrimo(13));

    assert.equal(0, ehPrimo(4));
    assert.equal(0, ehPrimo(6));
    assert.equal(0, ehPrimo(9));
    assert.equal(0, ehPrimo(10));
    assert.equal(0, ehPrimo(12));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

// Função que descobre se o número é ou não primo.
//
// Retorna:
//   0 para false (composto)
//   1 para true  (primo)
//
var ehPrimo = function(num) {
    var i, quantDivisores = 0;

    for(i = 1; i <= num; i++) {
        if (ehDivisaoExata(num, i)) {
            quantDivisores++;
        }
    }

    if (quantDivisores == 2) {
        return 1;
    } else {
        return 0;
    }
}

// Função que descobre se dois números possuem divisão exata.
//
// Retorna:
//   0 para false
//   1 para true
//
var ehDivisaoExata = function(dividendo, divisor) {
    return (dividendo % divisor) == 0;
}


//
// Testes
//
try {

    assert.equal(1, ehDivisaoExata(3, 1));
    assert.equal(1, ehDivisaoExata(3, 3));
    assert.equal(0, ehDivisaoExata(3, 2));

    assert.equal(1, ehPrimo(2));
    assert.equal(1, ehPrimo(3));
    assert.equal(1, ehPrimo(5));
    assert.equal(1, ehPrimo(7));
    assert.equal(1, ehPrimo(11));
    assert.equal(1, ehPrimo(13));

    assert.equal(0, ehPrimo(4));
    assert.equal(0, ehPrimo(6));
    assert.equal(0, ehPrimo(9));
    assert.equal(0, ehPrimo(10));
    assert.equal(0, ehPrimo(12));

} catch(e) {
    console.log(e);
}
```




Não termina aqui
---

O universo dos números primos é algo muito interessante. Quem estudou um pouco sobre criptografia sabe dos desafios
envolvendo os números primos. Eles são utilizados, por exemplo, no algoritmo RSA. Acho que o maior desafio relacionado
aos números primos é a questão de performance, quando testamos com números grandes os problemas começam a aparecer.

Este primeiro exercício aqui proposto não deve ser o fim e sim o início dessa história, o nosso exemplo é excelente para
fins didáticos: ele é simples e objetivo. Mas está longe (bota longe nisso) de ser a melhor solução. Por outro lado,
avançar nesse sentido foge do escope deste artigo.

Para você entender melhor essa questão sugiro a leitura do seguinte artigo:

- [wiki.python.org.br/DeterminandoPrimos](http://wiki.python.org.br/DeterminandoPrimos)

