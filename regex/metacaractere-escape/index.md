---
title:       "Metacaractere escape \\"
description: 
capitulo:    er-metacaracteres
ordem:       11
---

O metacaractere escape \ permite o uso do valor literal determinado símbolo que coincide com um metacaratere existente.

Em outras palavras, imagine que você precise casar o termo "meio*maluco", você precisa daquele asterisco no meio do 
termo.

A expressão `meio\*maluco` casa com o termo exato `meio\*maluco`.

Podemos escapar os metacaracteres para que seu valor literal passe a valer.

    \. \[ \] \? \+ \{ \} \^ \$

O escape pode escapar a si próprio `\\`.

Lembrando que escapar um circunflexo (`^`) ou cifrão (`$`) somente é necessário caso eles estejam em suas posições
especiais.