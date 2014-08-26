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

O quantificador opcional indica que pode ter ou não a ocorrência da entidade anterior, pois ele a repete 0 ou 1 vez.

A expressão `fala[r!]?` casa com `fala`, `fala!` e `falar`.

![Figura ilustrando o metacaracter opcional](../metacaracter-opcional/regex-fala.png "Expresão regular: metacaracter opcional")

Veja mais sobre o [metacaracter opcional](../metacaracter-opcional/)



Metacaracter *	asterisco
---

O asterisco repete em qualquer quantidade

A expressão `6*0` casa com `0`, `60`, `660`, `6660`, `6666666666660`.

![Figura ilustrando o metacaracter asterisco](../metacaracter-asterisco/regex-60.png "Expresão regular: metacaracter asterisco")

Veja mais sobre o [metacaracter asterisco](../metacaracter-asterisco/)



Metacaracter +	mais
---

O mais tem funcionamento idêntico ao do asterisco, a única diferença é que o mais não é opcional, então a entidade 
anterior deve casar pelo menos uma vez, e pode ter várias.

A expressão `6+0` casa com `60`, `660`, `6660`, `6666666666660`.

![Figura ilustrando o metacaracter mais](../metacaracter-mais/regex-60.png "Expresão regular: metacaracter mais")

Veja mais sobre o [metacaracter mais](../metacaracter-mais/)



Metacaracter {}	chaves
---

O quantificador chaves funciona como uma repetição mais controlada, onde `{n,m}` significa de `n` até `m` vezes.

A expressão `n{1,4}` casa "n", "nn", "nnn" e "nnnn" (exatamente isso; nem mais, nem menos).

![Figura ilustrando o metacaracter chaves](../metacaracter-chaves/regex-n14.png "Expresão regular: metacaracter chaves")

Veja mais sobre o [metacaracter chaves](../metacaracter-chaves/)



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

