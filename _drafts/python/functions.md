---
layout:      materia
title:       Python - funções
description: Python - funções
---


Exemplo de funções.

    def foo():
        return "retorno da função"

    print foo() "retorno da função"


Outro exemplo.

    def add_two(a, b):
        c = a + b
        return c

Exemplo anterior simplificado

    def add_two(a, b):
        return a + b


### Argumentos da função

    def biggest_number(*args):
        print max(args)
        return max(args)

    def smallest_number(*args):
        print min(args)
        return min(args)

    biggest_number(-10, -5, 5, 10)
    smallest_number(-10, -5, 5, 10)

