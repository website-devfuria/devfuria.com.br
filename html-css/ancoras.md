---
layout:      grid93-article
title:       HTML - Âncoras (links)
description:
menu:        html-elementos 
---

Sem links a web não faria sentido.

São eles que permitem que você siga um rastro de informações de uma página web à próxima e de uma idéia à outra, 
independente do local em que se encontra o servidor do site.

{% highlight html %}
<a href="pagina-ao-clicar.html">Isto é um link</a>
{% endhighlight %}

O link possui a propriedade `href` (hypertext reference) que nada mais é do que o alvo que será alcançado quando
clicarmos no link.

Esse alvo pode ser uma outra página html ou um script de servidor em php, por exemplo.

Pode até apontar para uma imagem ou outro arquivo qualquer (e então o navegador perguntará se o usuário quer fazer o
download ou abrí-lo com algum programa).

O alvo pode estar em um nível hierárquico diferente, para baixo ou para cima.

Trata-se do __endereço relativo__. Vamos para baixo, de pasta em pasta, com o símbolo `../` exemplo:

{% highlight html %}
<a href="../../../pagina-ao-clicar.html">Isto é um link 3 pastas abaixo</a>
{% endhighlight %}

E para cima, com o nome da pasta, exemplo:

{% highlight html %}
<a href="pasta/pasta/pasta/pagina-ao-clicar.html">Isto é um link três pastas acima</a>
{% endhighlight %}

Na __URL__ da âncora também podemos passar parâmetros com um par de valor, onde o primeiro valor é o nome da variável e
o segundo é o valor dessa variável (mas isso nos veremos mais afundo quando estivermos estudando uma linguagem 
"do lado do servidor"), exemplo:

{% highlight html %}
<a href="script.php?varA=valor1&varB=valor2">Isto é um link com dois parâmetros</a>
{% endhighlight %}


Estilizando
---

O link pode sofrer estilizações interessantes. É muito comum estilizar o link como se fosse um botão e há também um efeito
que é acionado quando passamos o mouse por cima: é o __hover__ (por cima, pairar). Para isso utilizamos pseudoclasses
em CSS, boa hora para você entender comom fucionam.

- O seletor de pseudoclasse `:link` afeta links que não foram visitados
- O seletor de pseudoclasse `:visited` afeta links visitados
- O seletor de pseudoclasse `:hover` afeta links quando o mouse é posicionado sobre
- O seletor de pseudoclasse `:active` afeta links quando ele é ativado (clique e segure)


O mais comum é desativar o sublihado e reativá-los quando o mouse é posicionado sobre eles, veja a CSS:

{% highlight css %}
a:link, a:visited {text-decoration: none}
a:hover, a:active {text-decoration: underline}
{% endhighlight %}


Você pode querer transformar seu link em um botão. Para tal, configure a propriedade `display` como `block`.

{% highlight css %}
a {
  display: block;
  width: 6em;
  padding: 0.2em;
  line-height: 1.4;
  background-color: #94B8E9;
  border: 1px solid black;
  color: #000;
  text-decoration: none;
  text-align: center;
}
{% endhighlight %}

<div data-height="280" data-theme-id="2897" data-slug-hash="raVQKX" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/raVQKX/'>raVQKX</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>
