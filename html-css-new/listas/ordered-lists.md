---
layout:      basico3
title:       Lista - ordered lists
description:
---

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="../">index</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" >ol</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../unordered-lists/">ul</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../definition-lists/">dt</a>
  </li>
</ul>

O exemplo abaixo...

```html
<ol>
  <li>Chop potatoes into quarters</li>
  <li>Simmer in salted water for 15-20 minutes until tender</li>
  <li>Heat milk, butter and nutmeg</li>
  <li>Drain potatoes and mash</li>
  <li>Mix in the milk mixture</li>
</ol>
```

..gerará o seguinte resultado:

<ol>
  <li>Chop potatoes into quarters</li>
  <li>Simmer in salted water for 15-20 minutes until tender</li>
  <li>Heat milk, butter and nutmeg</li>
  <li>Drain potatoes and mash</li>
  <li>Mix in the milk mixture</li>
</ol>


## reversed

Com o atributo __reverse__ é possível inverter a ordem da numeração de uma lista ordenada.

```html
<ol reversed>
```

...resultará em:

<ol reversed>
  <li>Chop potatoes into quarters</li>
  <li>Simmer in salted water for 15-20 minutes until tender</li>
  <li>Heat milk, butter and nutmeg</li>
  <li>Drain potatoes and mash</li>
  <li>Mix in the milk mixture</li>
</ol>


## start

Com o atributo __start__ é possível atribuir um número para o item inicial.

```html
<ol start="10">
```

...resultará em:

<ol start="10">
  <li>Chop potatoes into quarters</li>
  <li>Simmer in salted water for 15-20 minutes until tender</li>
  <li>Heat milk, butter and nutmeg</li>
  <li>Drain potatoes and mash</li>
  <li>Mix in the milk mixture</li>
</ol>


## value

Através do atributo __value__ é possível impor um valor de numeração a um item de uma lista ordenada.

```html
<li value="3">
```

...resultará em:

<ol>
  <li>total de votos 123</li>
  <li>total de votos 99</li>
  <li>total de votos 63</li>
  <li value="3">total de votos 63</li>
  <li>total de votos 41</li>

</ol>