---
layout:      materia
title:       JavaScript
description: Tudo o que você precisa saber sobre javascript a apartir do zero
---


"Javascript (às vezes chamado apenas de JS) é uma linguagem de programação, leve, interpretada, orientada a objetos, 
baseada em protótipos e em first-class functions (funções de primeira classe), mais conhecida como a linguagem de 
script da Web. Também utilizada em vários outros ambientes como __node.js__ e __Apache CouchDB__.".
(Mozilla Fundation)

JavaScript é uma linguagem orientada a objetos. Isso significa que, em vez de ter funções definidas globalmente para
operar em valores de vários tipos, os próprios tipos definem __métodos__ para trabalhar com valores. Para classificar
os elementos de um array `a`, por exemplo, não passamos `a` para uma função `sort()`. 
(Flanagan, pag 29 - JavaScript, o guia definitivo)

Em vez disso, chamamos o método `sort()` de `a`: 

{% highlight javascript %}
    a.sort() // A versão orientada a objetos de "sort(a)"
{% endhighlight %}


Leia mais sobre [o que é JavaScript](./o-que-e-javascript/).



Onde executar (rodar) JavaScript
---

Você pode executar JavaScript em um navegador web, dê preferência ao [FireFox](https://www.mozilla.org/pt-BR/firefox/new/ "link-externo").

Mas também pode executá-lo em linha de comando através do [node.js](http://nodejs.org/ "link-externo").



Como começar
---

Conheca [o básico da sintaxe de JavaScript](./sintaxe-basica/) através deste artigo.

Há ainda a opção de começar pelo [codeacademy](http://www.codecademy.com/en/tracks/javascript "link-externo").



Canvas
---

O Canvas é um elemento da especificação [HTML5](http://www.w3.org/TR/html5/ "link-externo").

Obviamente, junto com o elemento, temos a API Canvas (funções que manipulam o elemento canvas).

O Canvas é uma tela de bitmap que você pode desenhar e dar animação para o que quiser.

[Aprenda mais sobre o canvas](/javascript/canvas/ "link-externo").


Site Oficial
---

- [Mozzila - JavaScript](https://developer.mozilla.org/en-US/learn/javascript "link-externo")




Livros sobre JavaScript
---

Para quem nunca viu Javacript, aconselho o livro da dupla Kevin Yank e Cameron Adams __Simple JavaScript__.
Ele cumpre o que promete __"tudo o que você precisa saber sobre javascript a apartir do zero"__.

Apesar do livro ser um pouco velho (foi lançado em 2007) ele ainda é muito útil. Isso porque os autores se preocuparam
em cobrir o essencial do JavaScript.

A didática é excelente, o comprometimento com a qualidade é sem igual.

!["Livro Só Javascript"](livro-simple-js.jpg "Livro Só Javascript")

Leia mais sobre [Livros sobre JavaScript](./livros-javascript/).
