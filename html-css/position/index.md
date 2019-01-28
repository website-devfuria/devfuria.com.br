---
layout:      basico3
title:       position
description:
capitulo:    "html-divs"
ordem:       0
---


![](positioned-elements-terminology.png)


A propriedade __position__ define duas coisas:

1. Como o elemento se comporta em relação aos seus ancestrais na hierarquia, e
2. como seus descendentes poderão se comportar em relação a ele.

Ela aceita os seguintes valores:

- `position: static;`
- `position: relative;`
- `position: absolute;`
- `position: fixed;`



## static

Esse é o valor padrão dos elementos HTML, o elemento seguirá seu fluxo normal que é o de manter sua posição atual no
fluxo da página.

Importante dizer que as propriedades `top`, `right`, `bottom` e `bottom` não se aplicam para elementos com posição `static`.



## relative

Gera um elemento posicionado de forma relativa em relação a sua própria posição normal. Mantém seu lugar em relação ao
fluxo do documento podendo ser deslocado com o uso das propriedades `top` e `left` (mesmo quando deslocado, o seu lugar
no fluxo do documento é preservado).

Exemplo, `left:20px` adiciona 20px à esquerda da posição normal do elemento, veja [demo](exemplo-relative.html).



## absolute


O elemento fica posicionado de forma absoluta em relação ao fluxo do documento, mas de forma relativa em relação ao seu
ancestral mais próximo que também se encontre posicionado ou em relação ao documento.

Ao contrário de um elemento com uma posição relativa, um elemento posicionado de forma absoluta não deixa espaço na
fluxo do documento.

Veja [demo](exemplo-absolute.html).



## fixed

Um elemento fixo (fixed) é posicionado relativamente ao "viewport", isso significa que ele sempre ficará no mesmo lugar
mesmo que haja rolagem na página. Assim como o relative, as propriedades `top`, `right`, `bottom` e `left` também são
utilizadas.

Para esses elementos as propriedades `top`, `right`, `bottom` e `left` são importantes pois são elas que irão definar a
localização do referido elemento;

Veja artigo completo com exemplos sobre [posicionamento-fixo](../posicionamento-fixo/).
