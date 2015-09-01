---
layout:      grid12-article
title:       yield
description: 
---


O __yield__ só pode ser usado dentro de uma função.

    >>> yield
      File "<stdin>", line 1
    SyntaxError: 'yield' outside function

Dentro de uma função ele funciona mais ou menos como um `return`, com a diferença que ele retorna um __generator__.

    >>> def foo():
    ...   yield
    ... 
    >>> 
    >>> foo()
    <generator object foo at 0x7fd1434a88b8>

Na primeira vez que a função for rodada, ela vai rodar do começo e parar até tocar no primeiro yield. 

Após tocar no primeiro yield, ela vai continuar do ponto que foi parado até achar o próximo yield. 

Quando não for achado um yield, a exceção StopIteration é lançada.

    >>> def foo():
    ...   yield 10
    ...   yield 20
    ... 
    >>> g = foo()
    >>> next(g)
    10
    >>> next(g)
    20
    >>> next(g)
    Traceback (most recent call last):
      File "<stdin>", line 1, in <module>
    StopIteration

O código da função não é executado quando utilizamos o yield dentro dela. POr exemplo, podemos chamar a função acima 
quantas vezes quisermos, um generator será o retorno da função.

    >>> foo()
    <generator object foo at 0x7fbcb4143948>
    >>> foo()
    <generator object foo at 0x7fbcb4143990>
    >>> 

Para o código ser executado precisamos utilizar a função __next()__ ou usar um laço for no objeto. Como já utilizamos o
next vou exemplificar com o laço for. Repare que o laço termina corretamente, sem a exceção `StopIteration`.

    >>> generator = foo()
    >>> for x in generator:
    ...   x
    ... 
    100
    200

    