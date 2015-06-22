---
layout:      grid12-article
title:       Codificando caracteres<br />no início do script Python
description: As primeiras linhas de um script Python<br />especificam explicitamente qual a<br />codificação de caracteres utilizada em nosso script.
---

Se você está começando a aprender Python, deve ter notado que no início dos scripts temos uma linha semelhante a esta...

    # -*- coding: utf-8 -*-

Isto significa que estamos especificando explicitamente qual a codificação de caracteres utilizada em nosso script.

Isso ocorrerá porque utilizamos caracteres acentuados em nosso comentários e strings, e o interpretador precisa saber 
qual o código de caracteres a ser usado.

Se colocarmos um caracter acentuado no script receberemos o seguinte erro.

    DeprecationWarning: Non-ASCII character ‘\xe1′ in file foo.py on line 3




### ISO-8859-1

Segundo [Marinho](http://codare.net/2007/01/02/python-declarar-a-codificacao-dos-fontes-encoding/ "link-externo"), a 
codificação ASCII é o padrão para códigos fonte, então é preciso avisar o Python que seus fontes usam outra. Para o 
português é ISO-8859-1, ou seu similar mais curto latin-1. Basta colocar um comentário especial na primeira ou segunda 
linha do código:

    # -*- coding: latin-1 -*-



### Simplificando

Podemos simplificar retirando os `-*-`.

    # coding: utf-8
ou 

    # coding: latin-1


### Fontes:

- [Python brasil - Módulos e Pacotes](http://wiki.python.org.br/ModulosPacotes "link-externo")
- [codare - Declarar a codificação dos fontes (encoding)](http://codare.net/2007/01/02/python-declarar-a-codificacao-dos-fontes-encoding/ "link-externo")


Você encontrará mais detalhes na documentação [pep-0263](https://www.python.org/dev/peps/pep-0263/ "link-externo")