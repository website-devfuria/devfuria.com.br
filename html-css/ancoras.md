---
layout:      materia
title:       HTML - Âncoras (links)
description: 
---

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

O link pode sofrer estilizações interessantes. É muito comum estilizar o link como se fosse um botão e há também um efeito
que é acionado quando passamos o mouse por cima: é o __hover__ (por cima, pairar).

Para estilizar o "hover" utiliza-se de __pseudoclasses__, a regra CSS abaixo adiciona a cor vermelha a link apenas quando
passamos o mouse sobre ele.

{% highlight css %}
a:hover {background-color: red}
{% endhighlight %}
