---
layout:      basico3
title:       display
description:
capitulo:    "html-estilos-basicos"
ordem:       0
---

A propriedade CSS __display__ permite que você defina a maneira como determinado elemento HTML deve ser renderizado.

Nós, inclusive, já vimos isso em algum lugar deste site (rsss). Estávamos estudando elementos __in-line__ e elementos
__block-level__.

![](css-display.png)



## Esses são os valores mais conhecidos e utilizados:

- `display: none;`
- `display: inline;`
- `display: block;`

Se você quiser entendê-los leia o artigo [Elementos in-line e elementos block-level](../elementos-inline-block-level/).



## Também conhecidos, porém menos utilizados:

- `display: list-item;`
- `display: inline-block;`



## Os da época em que se fazia layout através de tabelas:

- `display: table;`
- `display: table-cell;`
- `display: table-column;`
- `display: table-column-group;`
- `display: table-footer-group;`
- `display: table-header-group;`
- `display: table-row;`
- `display: table-row-group;`

Bom, não se fazem mas layout com tabelas, fazem ? Acho que não! Então deixa pra-lá!

Porém, ignorar tecnologias antigas (as vezes nem tão antiga assim) não é uma boa estratégia.

Dê uma olha nisso...

1. [display-table-anti-hero](https://colintoh.com/blog/display-table-anti-hero)
2. Se você analisar os exemplos do Bootstrap4, encontrará `display:table...alguma coisa`.

É meu amigo, usamos tabelas para layout em pleno 2018.

O que você pensa à respeito ?


## As últimas novidades:

- `display: flex;`
- `display: grid;`

Nem tão novo assim, mas igualmente importantes, procure no [índice](../) o capítulo sobre __Layouts__.

<!--
Nem tão novo assim, mas igualmente importantes, por isso há um capítulo dedicado a cada um deles.

Procure no [índice](../) os capítulos sobre __Flex Box__ e __Grid Layout__.
-->



## E, por fim, os valores  obscuros e experimentais:

- `display: run-in;`
- `display: ruby;`
- `display: contents;`

Se são obscuros e experimentais, nem vou comentar! Até porque, não entendo nada sobre eles (rsss).
