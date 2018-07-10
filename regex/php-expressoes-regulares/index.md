---
layout:      artigo
title:       Expressões Regulares em PHP
description: Expressões Regulares em PHP
---

Em PHP temos os dois mudos: PCRE e POSIX.

As funções da versão POSIX estão depreciadas na versão 5.3 do PHP.

A versão PREC é a mais atual.

Segundo o Marinho, as funções PCRE são mais rápidas que as POSIX e para funcionarem o PHP deverá ser compilado com
suporte a biblioteca PCRE.

Em PHP as expressão regulares devem ser tratadas como strings entre aspas, exemplo:

    '/sua expressão regular/'

As funções POSIX são derivadas de `ereg()`.

As funções do PREC são derivadas de `preg_macth()`.

Leia mais na [categoria PHP](/php/#cap-tulo-7-express-es-regulares)



## Referência

- [Manual PHP - PCRE](http://www.php.net/manual/pt_BR/book.pcre.php)
- [Manual PHP - POSIX](http://www.php.net/manual/en/reference.pcre.pattern.posix.php)


