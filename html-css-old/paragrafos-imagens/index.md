---
title:       HTML & CSS - Parágrafos e imagens 
description:
capitulo:    html-css-elementos
orem:        4
---

A tag `p` é muito comum, ela representa um parágrafo e, obviamente, acomoda textos.

```html
<p>Isto é um parágrafo</p>
```


A tag `img` representa uma imagem. A propriedade `src` diz aonde a imagem se encontra gravada (no hard disk).

Já a propriedade `alt` é um texto alternativo que será exibido caso o caminho para a imagem seja inválido.

```html
<img src="imagem.png" alt="texto alternativo" />
```

Abaixo, apresento as duas tag's juntas para ilustrar como elas (podem) interagem.

```html
<p>
    Este parágrafo contém uma imagem
    <img src="imagem.png" alt="texto alternativo" />
</p>
```




Estilizando
---

As duas tag's sozinhas não fazem muita coisa, mas se adicionarmos ao tempero a propriedade CSS [float](/html-css/float/)
a brincadeira ficará mais interessante.

Podemos dizer para a imagem flutuar à esquerda, então o texto fluirá para o lado inverso (direita), veja o código e o 
resultado abaixo.


<div data-height="428" data-theme-id="2897" data-slug-hash="eIJDv" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/eIJDv/'>Tom jobim - float left</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>


Ou podemos dizer para a imagem flutuar à direita e então o texto fluirá a esquerda, veja o resultado:

<div data-height="457" data-theme-id="2897" data-slug-hash="fIqtC" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/fIqtC/'>Tom jobim - float right</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>
