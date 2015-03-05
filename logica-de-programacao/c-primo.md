---
layout:      grid93-article
title:       "Número primo "
description: Exercício de lógica de programação para descobrir se um número é primo.
menu:        logica-exerc-nivel-03
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para identificar se um número é primo.

Lembre-se que número primo, é um número natural, maior que 1, apenas divisível por si próprio e pela unidade.


__Comentários__: 

+ Os problemas (e as soluções) envolvendo os números primos são fascinantes e não é objetivo deste artigo
esgotar o assunto, muito pelo contrário, o objetivo é simplesmente ser a porta de entrada, o primeiro degrau.

+ Outro ponto a comentar é a questão dos testes, você verá que é difícil determinar o quanto de testes seriam suficientes
para garantir o correto funcionamento do algoritmo.


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


```python
def ehPrimo(num):
	quantDivisores = 0
	i = 1
	while i <= num:
		if num % i == 0 :
			quantDivisores = quantDivisores + 1
		i = i + 1

	if quantDivisores == 2:
		return True
	else:
		return False
```

Você pode alterar o laço `while` por um laço `for`, veja exemplo abaixo.

```python
def ehPrimo(num):
	quantDivisores = 0
	i = 1
    for i in range(1, num + 1):
    	...
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

- [wiki.python.org.br/DeterminandoPrimos](http://wiki.python.org.br/DeterminandoPrimos "link-externo")

