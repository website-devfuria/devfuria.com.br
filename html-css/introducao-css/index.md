---
layout:      grid12-article
title:       Introdução ao CSS
description: Artigo introdutório sobre CSS - Cascading Style Sheet
---

Para estilizar o HTML devemos utilizar a CSS.

CSS (Cascading Style Sheet) determina a estilização do conteúdo.

Folha de estilo em cascata é um mecanismo simples para adicionar estilos aos documentos web, por exemplo: fontes, 
conteúdos, espaçamentos, etc...

A __separação das obrigações__ de cada tecnologia deve estar bem claro em sua mente:

- O HTML define a estrutura do documento e
- O CSS define a estilização

A CSS é uma realidade incontestável para quem desenvolve aplicações web. Não dá para caminhar sem ela, na verdade não dá
nem para sair do lugar. Quero dizer que é preciso aprender CSS para poder desenvolver bem, ou você domina ela ou ela te domina.
Não precisa ser ninja em CSS, mas quanto mais conhecimento você acomular sobre CSS (e HTML também) melhor e mais produtivo
será seu dia a dia como desenvolvedor.

Para o leitor ter uma idéia do poder da CSS dê uma olha nos seguintes trabalhos:

[http://www.csszengarden.com/](http://www.csszengarden.com/ "link-externo")

[http://meyerweb.com/eric/css/edge/](http://meyerweb.com/eric/css/edge/ "link-externo")


Exemplos
---

A CSS é composta pelo que se chama de "regras de estilização"(rule-sets), um exemplo de regra seria: 

![Figura ilustrando uma rouler set](css-syntax01.png "Figura ilustrando uma rouler set")

A regra CSS pode conter várias declarações separadas por ponto e vírgula, como no exemplo abaixo:

{% highlight css %}
p {
    font-size: 12px;
    color: green;
}
{% endhighlight %}

A letra `p` é o __seletor__, é o alvo da regra CSS.

Entre as chaves `{}`, neste exemplo, há duas propriedades: `font-size` e `color` sendo `12px` e `green` seus respectivos valores.

Veja abaixo um exemplo completo.

<p data-height="435" data-theme-id="2897" data-slug-hash="OPVQPJ" data-default-tab="result" data-user="flaviomicheletti" class='codepen'>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/OPVQPJ/'>Some Example HTML and CSS</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
