---
layout:      basico3
title:       Flutuando divs
description:
capitulo:    "html-divs"
ordem:       0
---

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="">index</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="float-none/">float: none</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="float-left/">float: left</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="float-right/">float: right</a>
  </li>
</ul>

Flutuar é um conceito meio estranho de se explicar.

Com a propripedade css `float` podemos flutar elementos para a direita (right) e para a esquerda (left).

Também podemos anular a flutuação aplicando `none` a propriedade.

    float: right | left | none

Em nosso exemplo iremos utilizar 3 divs...

<pre>
&lt;div&gt;1&lt;/div&gt;
&lt;div&gt;2&lt;/div&gt;
&lt;div&gt;3&lt;/div&gt;
</pre>

Vamos definir uma estilização inicial para podermos ver com clareza nossas div´s.

- Vamos dar uma cor bem chamativa com `background-color`.
- Precisamos dar um tamanho para nossas divs: 100px de altura (line-height) e 100px de largura (width).
- Para definir a altura eu poderia usar apenas `height`, mas `line-height` ajuda a centralizar o texto na vertical.
- Para  centralizar o texto na horizontal utilizo `text-align: center`.
- E para fechar, definimos uma margem de `5px` em todos os lados

<pre>
div {
  background-color: red;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 5px;
}
</pre>


## float: none

O nosso ponto de partida será as coisas em seu estado natural.

O "float none" anula a flutuação, em nosso exemplo é como se não tivéssemos feito nada.

Acesse, através do menu, o exemplo de "float none" para ver nosso estado inicial.


## float: left

Ao incluir a propriedade `float: left` no fim de nossa classe (logo abaixo de `margin: 5px`) aplicamos a flutuação a
esquerda.

Parece que transformamos as divs (que são naturalmente do tipo block) em tipo inline. Mas não foi isso o que conteceu.

Quando você acessar, através do menu,  o exemplo de "float left" eu gostaria que você diminuísse a tela de seu navegador
e visse como se comportam nossas div´s.


## float: right

Agora você verá as div´s, como um ímam, se deslocando para a direita da tela.

O interessante é ver a ordem em que ela foi empilhada.

Acesse o exemplo e veja o que aconteceu.


