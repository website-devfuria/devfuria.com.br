---
layout:      materia-html-elem
title:       HTML - Parágrafos e imagens 
description: 
---

A tag `p` é muito comum, ela representa um parágrafo e, obviamente, acomoda textos.

{% highlight html %}
<p>Isto é um parágrafo</p>
{% endhighlight %}


A tag `img` representa uma imagem. A propriedade `src` diz aonde a imagem se encontra gravada (no hard disk).

Já a propriedade `alt` é um texto alternativo que será exibido caso o caminho para a imagem seja inválido.

{% highlight html %}
<img src="imagem.png" alt="texto alternativo" />
{% endhighlight %}

Abaixo, apresento as duas tag's juntas para ilustrar como elas (podem) interagem.

{% highlight html %}
<p>
    Este parágrafo contém uma imagem
    <img src="imagem.png" alt="texto alternativo" />
</p>
{% endhighlight %}

As duas tag's sozinhas não fazem muita coisa, mas se adicionarmos ao tempero a propriedade CSS __float__ a brincadeira 
ficará mais interessante.

Podemos dizer para a imagem flutuar à equerda, então o texto fluirá para o lado inverso (direita), veja o código e o 
resultado abaixo.

Obs: eu coloquei `5px` de margem só para melhorar um pouco.

<div data-height="432" data-theme-id="2897" data-slug-hash="eIJDv" data-default-tab="null" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/eIJDv/'>Tom jobim - float left</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>

Ou podemos dizer para a imagem flutuar à direita e então o texto fluirá a esquerda, vejao resultado:

<div data-height="430" data-theme-id="2897" data-slug-hash="fIqtC" data-default-tab="null" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/fIqtC/'>Tom jobim - float right</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>
