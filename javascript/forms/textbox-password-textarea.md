---
layout:      grid93-article
title:       Manipulando os controles text, password e textarea com JavaScript
description: Aprendendo como os campos textbox, password e textarea funcionam com o Javascript
menu:        javascript-forms
---


Nesta matéria veremos como o JavaScript pode trabalhar com os controles:

- input=text
- input=password
- textarea

Escolhi esses controles pois são bastantes semelhantes quanto ao seu funcionamento.

Vamos utilizar o mesmo formulário que "pegamos emprestado" do livro do Andy Budd (Criando Páginas Web com CSS).

Clique na aba [HTML](/html-css/) para entender melhor sobre formulário web

<div data-height="542" data-theme-id="2897" data-slug-hash="hAKpl" data-default-tab="null" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/hAKpl'>simple-html</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>


Em [PHP](/php/) podemos enviar e receber os dados do formulário, também podemos carregar o formulário. Quer dizer, podemos abrir 
o formulário com dados pré carregados.

Em JavaScript poderemos fazer as mesmas requisições que o [PHP](/php/), utilizando um negócio chamado XMLHttpRequest (vulgo AJAX),
Haaaa mas não vamos falar sobre AJAX, é um pouco cedo. Por enquanto vamos fazer coisas mais simples.

Então, o que faremos em JavaScript?

Que tratamento daremos ao pequeno formulário do Andy Budd?

Que tal começarmos referenciando o botão submit?

{% highlight javascript %}
    document.getElementById("btnSubmit")
{% endhighlight %}

Não se esqueça que você precisará do id, por tanto, altere o [HTML](/html-css/) incluindo a propriedade id.

{% highlight javascript %}
...
<input type="submit" id="btnSubmit" value="Submit!" />
...
{% endhighlight %}


A propriedade `id` está para o JavaScript assim como a propriedade `name` está para o [PHP](/php/).

Profundo isso! rssss

Falando sério, para referenciarmos os controles ou qualquer elemento [HTML](/html-css/) precisamos que eles tenha a
propriedade id "setada". Ok, isso não é via de regra e não é mesmo. Podemos encontrar (referenciar) os elementos 
através dos nomes das tags, através de outras propriedades, pelo posicionamento na árvore [DOM](/javascript/dom/) e etc...
Mas o básico é referenciar pelo __id__.


Agora, vamos atribuir uma função anônima para o evento [onclick](/javascript/refs/onclick/) de nosso controle.

{% highlight javascript %}
document.getElementById("btnSubmit").onclick = function() {
}
{% endhighlight %}


Lembra que o botão do tipo submit (`<input type="submit"`) dispara o evento submit do formulário web?

Atribuir uma função ao evento __onclick__ não anulará a ação padrão, então precisaremos mudar nosso [HTML](/html-css/) mais uma vez.
O botão passa a ser do tipo "button", veja:

{% highlight javascript %}
...
<input type="button" id="btnSubmit" value="Submit!" />
...
{% endhighlight %}

Nossa função fará o óbvio, buscará os controles e mostrará no console do FireBug seus valores, veja como ficou:


{% highlight javascript %}
document.getElementById("btnSubmit").onclick = function() {

    var txtAutor   = document.getElementById("author");
    var txtEmail   = document.getElementById("email");
    var txtPass    = document.getElementById("pass");
    var txtComents = document.getElementById("text");

    console.log(txtAutor.value);
    console.log(txtEmail.value);
    console.log(txtPass.value);
    console.log(txtComents.value);

    // código para efetuar o submit (provavelmente AJAX)
}
{% endhighlight %}