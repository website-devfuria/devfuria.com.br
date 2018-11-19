---
layout:      basico3
title:       Propriedades para fontes
description:
capitulo:    "html-tipografia"
ordem:       10
disqus:      true
---


## font-style

Define se a fonte é normal, itálico ou oblíquo.

- `font-style: normal;`
- `font-style: italic;`
- `font-style: oblique;`

<p style="font-style: normal">texto normal</p>
<p style="font-style: italic">texto itálico</p>
<p style="font-style: oblique">texto oblíquo</p>

[mozilla.org/docs/Web/CSS/font-style](https://developer.mozilla.org/pt-BR/docs/Web/CSS/font-style)




## font-variant

Define as variantes entre normal ou small-caps.

Uma fonte small-caps é aquela que usa letras maiúsculas de tamanhos reduzidos.

- `font-variant: normal;`
- `font-variant: small-caps;`

<p style="font-variant: normal;">Isto é um texto normal</p>
<p style="font-variant: small-caps;">Isto é um texto small-caps</p>

[mozilla.org/docs/Web/CSS/font-variant](https://developer.mozilla.org/pt-BR/docs/Web/CSS/font-variant)




## font-weight

Ao pé da letra "weight" é peso (intensidade), então seria o peso da fonte. Mas, no contexto, significa o quão negrito
uma fonte deve ser renderizada.

- `normal`  = Peso normal, o mesmo que 400.
- `bold`    = Peso negrito, o mesmo que 700.
- `lighter` = Um peso de fonte mais claro que o elemento pai.
- `bolder`  = Um peso de fonte mais escuro que o elemento pai.
- `100-900` =  Pesos numéricos para fontes que oferecem mais que normal e negrito.

[mozilla.org/docs/Web/CSS/font-weight](https://developer.mozilla.org/pt-BR/docs/Web/CSS/font-weight)


## font-size

Define o tamanho da fonte.

Você pode utilizar medidas absolutas ou relativas.

- `font-size: [px, em, rem, %]`

[mozilla.org/docs/Web/CSS/font-size](https://developer.mozilla.org/pt-BR/docs/Web/CSS/font-size)



## font-family

Define a família de fontes a ser utilizada.

As cincos [fontes seguras](../font-family-seguras/) (as mais básicas) são: serif, sans-serif, monospace, cursive e fantasy.



## font-stretch

Esta propriedade serve para esticar e encolher texto.

- `font-stretch: condensed;`
- `font-stretch: normal;`
- `font-stretch: expanded;`

[mozilla.org/docs/Web/CSS/font-stretch](https://developer.mozilla.org/en-US/docs/Web/CSS/font-stretch)