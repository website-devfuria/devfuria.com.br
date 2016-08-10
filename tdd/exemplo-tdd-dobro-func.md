---
layout:      grid93-article
title:       "Simples exemplo de TDD  O dobro de um número qualquer (funções)"
description: Exemplo básico de TDD onde iremos desenvolver uma função para calcular o dobro de um número qualquer.
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Este é o segundo exercício de TDD, seria bom se você já tivesse lido o exemplo anterior.

Neste exercício iremos desenvolver uma função para calcular o dobro de um número qualquer. 

Utilizando-se funções, os nossos exemplos começam a fazer mais sentido, pois o teste unitário refere-se a uma unidade 
(como o nome sugere) e essa unidade é a nossa função.

Vamos dar uma olhada no código anterior.

```python
# Um número arbitrário
num   = 5

# Seu código
dobro = 2 * num

# Seu teste
assert 10 == dobro
```

A primeira pergunta é o código acima funciona? Não, não olhe para o código, execute e veja se o teste falha. Se não
falharem, então seu código funciona.

Teste unitários nos dá uma segurança em relação ao código, concorda?

Agora sim, se olhar para o código, verá que ele não faz nada de mais, é pouco útil. O próximo passo seria arrastar a
parte lógica para dentro de uma função. Uma função nada mais é que "código para depois".

Vamos alterar o código! Não, não, não... não devemos alterar o código se não tivermos um teste falhando.

Então vamos reescrever o teste, que tal...

    assert 10 == dobro(num)

Ele vai dar um erro estranho `TypeError: 'int' object is not callable`, é porque estamos atibuindo um valor numérico
para variável `dobro` e depois estamos evocado-a como uma função. Então vamos comentar a linha de atribuição.

    # Seu código
    # dobro = 2 * num


Se executarmos neste instante, veremos o script reclamar que `dobro()` não foi definida.

Então vamos defini-la. Criamos a função vazia, sem nada, só o corpo dela.

    def dobro(num):
        pass

Agora o programa não passa no teste. Lembre-se: teste falhando sinal de progresso.

A solução é bem simples, mas vamos aproveitar para entender melhor esse tal de __TDD__?

O __TDD__ diz que devemos saber dar passos pequenos. Não quer dizer que devemos dar passos pequenos sempre, mas quando 
a solução está obscura é bom poder (e saber) dar passos pequenos.

É o que vamos fazer agora, ao invés de "jogar" o resultado (que é bem óbvio) vamos dar passos pequenos.

Então me responda, __qual é o menor passo para ver o teste passar__?

O teste espera um `10`, essa é a resposta.

    def dobro(num):
        return 10

Agora os testes passam, mas precisamos retirar essa redundância (temos dois 10's, um no teste e outro no código), 
então escrevemos:

    def dobro(num):
        return 10 * 2

Os testes passam? Sim? Ótimo.

Agora o resultado ficou mais que óbvio, trocaremos o número 10 pela variável `num`.

    def dobro(num):
        return num * 2

Execute os testes, eles passaram?



### Código completo


```python
# -*- coding: utf-8 -*-

#
# Um número arbitrário
#
num = 5

#
# Seu código
#
def dobro(num):
    return num * 2

#
# Seu teste
#
assert 10 == dobro(5)
```


O que aprendemos com o TDD?

1. Não é preciso pensar tanto na codificação, mas sim trabalhar em um processo de __tentativa e erro__.

2. Que podemos, quando nos sentirmos inseguros, dar passos pequeninos em direção ao resultado esperado.

3. Não mexa no código sem antes ter um teste falhando (ele é seu guia).

4. Um teste falhando é sinal de progresso.




Próximo exemplo
---

- [Simples exemplo de TDD - O dobro de um número qualquer (OOP)](/tdd/exemplo-tdd-dobro-oop/)
