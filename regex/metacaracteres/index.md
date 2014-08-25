---
layout: materia
title:  Expressões Regulares - metacaracteres
---

Metacaracter ponto .
---

O ponto casa com qualquer coisa.

O ponto é um curinga para casar um caractere

A expressão `e.tendido` casa com `estendido`, `extendido`, `eztendido` e etc...

![Figura ilustrando o metacaracter ponto](../metacaracter-ponto/regex-entendido.png "Expresão regular: metacaracter ponto")

Veja mais sobre o [metacaracter ponto](../metacaracter-ponto/)



Metacaracter lista [ ]
---

A lista casa com quem ela conhece e tem suas próprias regras.

A expressão `[tT]eclado` casa com `teclado` e `Teclado`.

![Figura ilustrando o metacaracter lista](../metacaracter-lista/regex-teclado.png "Expresão regular: metacaracter lista")

Veja mais sobre o [metacaracter lista](../metacaracter-lista/)



Metacaracter lista negada [^]
---

Ela casará com qualquer coisa fora os componentes listados.

Exemplo, a expressão regular `[^0-9]` casa com qualquer coisa menos os números.

![Figura ilustrando o metacaracter lista](../metacaracter-lista-negada/regex-neg0-9.png "Expresão regular: metacaracter lista")

Veja mais sobre o [metacaracter lista negada](../metacaracter-lista-negada/)


Metacaracter opcional ?
---

O opcional é um quantificador indica que pode ter ou não a ocorrência da entidade anterior, pois ele a repete 0 ou 1 vez.

A exressão `fala[r!]?` casa com `fala`, `fala!` e `falar`.

![Figura ilustrando o metacaracter opcional](../metacaracter-opcional/regex-fala.png "Expresão regular: metacaracter opcional")

Veja mais sobre o [metacaracter opcional](../metacaracter-opcional/)





Metacaracter *	asterisco
---



Metacaracter +	mais
---



Metacaracter {}	chaves
---



Metacaracter ^	circunflexo
---


Metacaracter $	cifrão
---



Metacaracter \b	borda
---




Metacaracter \	escape
---



Metacaracter |	ou
---



Metacaracter ()	grupo
---



Metacaracter \1	retrovisor
---

