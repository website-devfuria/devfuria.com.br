---
layout:      grid93-article
title:       JavaScript - getElementById()
description: Referência prática da função getElementById() - JavaScript
menu:        javascript-refs
---


Ela busca e retorna o elemento através de seu identificador, a propriedade `id=""`.

{% highlight html %}
<p>
    <a id="sirius" href="sirius.html">Journey to the stars</a>
</p>
{% endhighlight %}

{% highlight javascript %}
var elementRef = document.getElementById("sirius");
{% endhighlight %}


Value
---

Pensando em um controle HTML do tipo textbox, password ou uma textarea.

Poderemos utilizar a propriedade `value`, ela refere-se ao valor do campo.

Recuperando o valor:

    var elem = document.getElementById("nome-identificador");
    console.log(elem.value);

Alterando o valor:

    var elem = document.getElementById("nome-identificador");
    elem.value = "outro texto qualquer";

Alterando de forma mais sucinta:

    document.getElementById("nome-identificador").value = "outro texto qualquer";



<hr/>
Fonte

- Manual do JS (MDN) falando sobre a função [getElementById()](https://developer.mozilla.org/en-US/docs/Web/API/document.getElementById "link-externo")

<!--
Veja pág 88, capitulo 5 do livro JS Anthology
-->