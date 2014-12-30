---
layout:      grid93-article
title:       HTML & CSS - Div e Span 
description:
menu:        html-elementos  
---


A tag `div` é um elemento do tipo __container__ que acomoda outras tag's, é um divisor de espaços.

Um elemento que pode ajudar a adicionar estrutura a um documento é um elemento `div`. Muitas pessoas acreditam
equivocadamente que um elemento `div` não tem nenhum significado semântico. Mas, na verdade, significa __divisão__ e
fornece uma maneira de dividir um documento em áreas sigficativas.

```html
<div>

</div>
```

Embora divs posssam ser utilizados para agrupar elementos no nível de bloco, spans podem ser utilizados para agrupar ou
identificar elementos inline.

Para entender melhor essa questão dos elementos de bloco ou inline leia a matéria
[Elementos in-line e elementos block-level](/html-css/elementos-inline-block-level/).

A tag `span` acomoda pequenos trechos de texto.

```html
<span>um pequeno texto</span>
```


Apesar de, aparentemente, não fazerem nada, ambas as tag's são muito utilizadas. 

A utilização visa sofrer alguma estilização posterior, com ajuda do CSS.


Estilizando
---

As __span__ são muito úteis para destacar textos, veja:

<div data-height="116" data-theme-id="2897" data-slug-hash="vELQMK" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/vELQMK/'>Simple span</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>

Quando falamos de divs, a primeira coisa que nos vem a mente é o [boxmodel](). Se você ainda não o conhece, talvez a
imagem abaixo possa esclarecer.

![box model css](box-model.png "box model css")

As divs representam papel importante na definição de [layout CSS](). Abaixo, vemos um exemplo de layout CSS.

![layout CSS](divs-layout-diagrama.gif "layout CSS")


Centralizar divs é sempre uma dúvida para quem está começando, uma forma de fazer isso é configurar as margens para 
tamanho automático `margin: auto`.

<div data-height="225" data-theme-id="2897" data-slug-hash="ByjGGR" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/ByjGGR/'>Centralizando divs</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>

