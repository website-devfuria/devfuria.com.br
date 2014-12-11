---
layout:      grid12-article
title:       Tratando Eventos (de navegadores)
description: Trabalhando com eventos no JavaScript
---

Isto é um rascunho...

Eventos são ações geradas pelo navegador Web quando acontece algu interessante no documento, no próprio navegador ou em
algum elemento ou objeto associado a ele. São ocorrências a respeito das quais seu programa vai ser notificado pelo 
navegador. (David Flanagan em seu livro "JavaScript: O guia definitivo", capítulo 17)

Há os mais variados tipos de eventos:

- __click__, quando clicamos sobre o elemento
- __dbclick__, duplo clique
- __onchange__, quando algo é alterado
- etc...

Veja os [eventos](http://www.w3.org/TR/1998/REC-html40-19980424/interact/scripts.html#h-18.2.3 "link-externo")
que foram especificados na HTML4 (ainda na 4).

Antigamente, atribuíamos o evento diretamente no elemento HTML como no exemplo abaixo.

{% highlight html %}
<button id="btn" onclick="clickMe();">Clique aqui!</button>
{% endhighlight %}

Isso ainda funciona, mas não é um boa prática. Veja o que __Stefanov__ nos diz sobre o assunto: "Você pode adicionar um
atributo `onclick` inline e isso funcionará em todos os navegadores, mas violará a separação de interesses e a melhoria 
progressiva. Portanto, você deve se esforçar por anexar o 'listener' no JavaScript, fora de qualquer marcação.".

A solução proposta pelo Flanagam é a seguinte:

{% highlight javascript %}
var e = document.getElementById('btn');

e.onclick = function () {
    console.log("você clicou no botão");
}
{% endhighlight %}

O HTML não mais precisará da propriedade `onclick=""`.

Notamos o esforço para anexar a função ao evento sem apelar para ajuda do HTML, mas essa ainda não é o ideal, essa forma
é condizente com a especificação do DOM 1. Já a especificação do DOM 2 trouxe os __receptores de eventos__, essa é a forma
ideal, veja exemplo:

{% highlight javascript %}
var e = document.getElementById('btn');
var foo = function () {
    console.log("você clicou no botão");
}

e.addEventListener('click', foo, false);
{% endhighlight %}

<!--
http://eloquentjavascript.net/1st_edition/chapter13.html
-->