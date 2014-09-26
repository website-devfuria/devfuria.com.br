---
layout:      grid-12
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

### Veja as matérias:

- [Referência da função preg_match_all()](/php/preg-match-all/ "Referência da função preg_match_all()")
- [O básico sobre a função preg match all](/php/preg-match-all-basico/ "O básico sobre a função preg match all")
- [O básico sobre a função preg match](/php/preg-match-basico/ "O básico sobre a função preg match")


Veja também
---

- [Manual PHP - PCRE](http://www.php.net/manual/pt_BR/book.pcre.php "link-externo")
- [Manual PHP - POSIX](http://www.php.net/manual/en/reference.pcre.pattern.posix.php "link-externo")
