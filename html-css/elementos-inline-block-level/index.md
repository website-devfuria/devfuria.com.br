---
title:       Elementos in-line e elementos block-level
description: Entenda a diferênça e como são renderizados os elementos HTML do tipo inline e block level.
---

![Figura ilustrando elementos htmtl do tipo inline e block level](inline-blocklevel-b.jpeg "Figura ilustrando elementos htmtl do tipo inline e block level")

O objetivo da matéria é entender as diferênças entre os dois tipos essenciais de tags:  __in-line__ e de __block-level__.

A diferênça básica é que o browser acomoda os elementos de __bloco__ um abaixo do outro e os __inline__ à esquerda
um ao lado do outro.

![Figura ilustrando elementos htmtl do tipo inline e block level](inline-blocklevel-a.jpeg "Figura ilustrando elementos htmtl do tipo inline e block level")



Abaixo vemos um HTML com alguns elementos (tags) tanto __inline__ como __block level__.

Clique na aba __result__ para ver como eles são renderizados.


<div data-height="470" data-theme-id="2897" data-slug-hash="EiqIm" data-default-tab="html" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/EiqIm'>Elementos in-line e elementos block-level</a>
by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>


Abaixo vemos alguns elementos básicos do tipo __block-level__:

- div
- h1, h2, h3
- p
- ul, ol
- table
- form
- fildset
- hr

... e alguns elementos __in-line__:

- span
- a
- img
- td
- label
- input
- select
- textarea


Há ainda um terceiro tipo de elemento: o __inline-block__ que nada mais é do que um elemento de bloco acomodado como um
elemento inline.

A CSS pode alterar o tipo do elemento. Com a propriedade `display` é possível utilizar os três valores:

1. `lock`
2. `inline`
3. `inline-block`

A tag `div` é __block-level__, mas se aplicarmos o valor `inline` a propriedade `display` ela começará a se comportar como
uma tag inline. Exemplo:

    div {
        display: inline;
    }

O inverso também é verdadeiro.

A tag `span` é __inline__, mas se aplicarmos o valor `block` a propriedade `display` ela se comportará como uma tag block-level.
Exemplo:

    span {
        display: block;
    }
