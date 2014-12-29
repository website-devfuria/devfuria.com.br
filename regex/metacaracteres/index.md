---
layout:      grid12-article
title:       Expressões Regulares - metacaracteres
description: Este artigo é um resumo dos metacaracteres das Expressões Regulares.
---

Este artigo é um resumo dos metacaracteres, você verá uma síntese de cada metacaracter e logo abaixo um link para 
aprofundar o assunto.



Metacaractere ponto .
---

O ponto casa com qualquer coisa.

O ponto é um curinga para casar um caractere

A expressão `e.tendido` casa com `estendido`, `extendido`, `eztendido` e etc...

![Figura ilustrando o metacaractere ponto](../metacaractere-ponto/regex-entendido.png "Expresão regular: metacaractere ponto")

Veja mais sobre o [metacaractere ponto](../metacaractere-ponto/)



Metacaractere lista [ ]
---

A lista casa com quem ela conhece e tem suas próprias regras.

A expressão `[tT]eclado` casa com `teclado` e `Teclado`.

![Figura ilustrando o metacaractere lista](../metacaractere-lista/regex-teclado.png "Expresão regular: metacaractere lista")

Veja mais sobre o [metacaractere lista](../metacaractere-lista/)



Metacaractere lista negada [^]
---

Ela casará com qualquer coisa fora os componentes listados.

Exemplo, a expressão regular `[^0-9]` casa com qualquer coisa menos os números.

![Figura ilustrando o metacaractere lista](../metacaractere-lista-negada/regex-neg0-9.png "Expresão regular: metacaractere lista")

Veja mais sobre o [metacaractere lista negada](../metacaractere-lista-negada/)



Metacaractere opcional ?
---

O quantificador opcional indica que pode ter ou não a ocorrência da entidade anterior, pois ele a repete 0 ou 1 vez.

A expressão `fala[r!]?` casa com `fala`, `fala!` e `falar`.

![Figura ilustrando o metacaractere opcional](../metacaractere-opcional/regex-fala.png "Expresão regular: metacaractere opcional")

Veja mais sobre o [metacaractere opcional](../metacaractere-opcional/)



Metacaractere *	asterisco
---

O asterisco repete em qualquer quantidade

A expressão `6*0` casa com `0`, `60`, `660`, `6660`, `6666666666660`.

![Figura ilustrando o metacaractere asterisco](../metacaractere-asterisco/regex-60.png "Expresão regular: metacaractere asterisco")

Veja mais sobre o [metacaractere asterisco](../metacaractere-asterisco/)



Metacaractere +	mais
---

O mais tem funcionamento idêntico ao do asterisco, a única diferença é que o mais não é opcional, então a entidade 
anterior deve casar pelo menos uma vez, e pode ter várias.

A expressão `6+0` casa com `60`, `660`, `6660`, `6666666666660`.

![Figura ilustrando o metacaractere mais](../metacaractere-mais/regex-60.png "Expresão regular: metacaractere mais")

Veja mais sobre o [metacaractere mais](../metacaractere-mais/)



Metacaractere {}	chaves
---

O quantificador chaves funciona como uma repetição mais controlada, onde `{n,m}` significa de `n` até `m` vezes.

A expressão `n{1,4}` casa "n", "nn", "nnn" e "nnnn" (exatamente isso; nem mais, nem menos).

![Figura ilustrando o metacaractere chaves](../metacaractere-chaves/regex-n14.png "Expresão regular: metacaractere chaves")

Veja mais sobre o [metacaractere chaves](../metacaractere-chaves/)



Metacaractere ^	circunflexo
---

O metacaractere circunflexo marca o começo de uma linha, serve para procurar no começo da linha.

A expressão `^[0-9]` casa com um número que estiver no começo da linha (linhas que começam com um número).

![Figura ilustrando o metacaractere circunflexo](regex-circun09.png "Expresão regular: metacaractere circunflexo")

Veja mais sobre o [metacaractere circunflexo ^](../metacaractere-circunflexo/)


Metacaractere $	cifrão
---

Em breve!


Metacaractere \b	borda
---

Em breve!


Metacaractere \	escape
---

Em breve!


Metacaractere |	ou
---

Em breve!


Metacaractere ()	grupo
---

Em breve!


Metacaractere \1	retrovisor
---

Em breve!
