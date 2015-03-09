---
layout:      grid93-article
title:       "Simples exemplo de TDD - Área quadrada"
description: Neste exemplo de Test Driven Development (na linguagem C) iremos encontrar desenvolver um pequeno algoritmo para descobrir área quadrada.
menu:        tdd-exemplos-simples-c
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Nosso objetivo é escrever um algoritmo que mostre a área quadrada de um espaço qualquer.

Exemplo:

* A área de 3x9 é igual a 27
* 3 . 9 = 27

Vamos começar pelo teste.

    assert 27 == 3 * 9
    
Nosso código compila (é interpretado) e o teste passa (green).

Mas nosso trabalho ainda não acabou. Sabemos que `3` e `9` deveriam ser variáveis, logo:

    lado1 = 3
    lado2 = 9

    assert 27 == lado1 * lado2

Executando o script percebemos que os testes continuam passando (green).

Para o código ficar mais significativo vamos fazer uma alteração.

Pense comigo, `lado1 * lado2` é o resultado da área, então vamos utilizar uma variável para armazenar a área.

Mas atenção: __antes de mudar o código, mudamos primeiro o teste__.

    assert 27 == area

Em seguida, fazemos o mínimo para ele rodar.

    lado1 = 3
    lado2 = 9

    area  = lado1 * lado2

    assert 27 == lado1 * lado2

Após compilar, execute para rodar o teste e ver se está tudo funcionando.



### Código completo

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
lado1 = 3
lado2 = 9

#
# Sua lógica (seu código)
#
area  = lado1 * lado2

#
# Seu teste
#
assert 27 == area
```


Próximo exemplo
---

- [Simples exemplo de TDD - Antecessor e sucessor de um número qualquer](/tdd/exemplo-tdd-antecessor-sucessor/)
