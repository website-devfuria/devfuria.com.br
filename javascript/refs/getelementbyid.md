---
layout:      grid93-article
title:       JavaScript - getElementById()
description: Referência prática da função getElementById() - JavaScript
menu:        javascript-refs
---


> Qualquer elemento HTML pode ter um atributo `id`. O valor desse atributo deve ser único dentro do documento - dois
> elementos no mesmo documento não podem ter a mesma identificação. Você pode selecionar um elemento com base nessa
> identificação exclusiva com o método `getElementById()` do objeto __document__.
> 
> David Flanagan em seu livro “JavaScript: O guia definitivo” pág. 354


{% highlight html %}
<p>
    <a id="sirius" href="sirius.html">Journey to the stars</a>
</p>
{% endhighlight %}

A função busca e retorna o elemento através de seu identificador, a propriedade `id`.

{% highlight javascript %}
var elementRef = document.getElementById("sirius");
{% endhighlight %}


Utilizando a p ropriedade value
---

Pensando em um controle HTML do tipo __textbox__, __password__ ou uma __textarea__, poderemos utilizar a propriedade 
`value`, ela refere-se ao valor do campo.

{% highlight javascript %}
var elem = document.getElementById("nome-identificador");

// Recuperando o valor:
console.log(elem.value);

// Alterando o valor:
elem.value = "outro texto qualquer";
{% endhighlight %}

Se não houver a necessidade de utiliar uma variável poderemos , então, acessar a propriedade diretamente, veja exemplo:

{% highlight javascript %}
document.getElementById("nome-identificador").value = "outro texto qualquer";
{% endhighlight %}

<hr/>
Fonte

- Manual do JS (MDN) falando sobre a função [getElementById()](https://developer.mozilla.org/en-US/docs/Web/API/document.getElementById "link-externo")

<!--
Incrementar matéria com a função da página 355 (flanagan)
Veja pág 88, capitulo 5 do livro JS Anthology
-->