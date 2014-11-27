---
layout:      grid93-article
title:       Seletores CSS 
description: 
menu:        html-artigos-intro
---



### Seletor tipo (tags)

É o seletor mais abrangente da CSS, ele casa com todos os elementos encontrados, exemplo:

{% highlight css %}
h1 {
    font-size: 20px;
}
p {
    font-size: 10px;
}
{% endhighlight %}

Os estilos acima irão refletir em todos o elementos `p` e `h1` da página.



### Agrupamento de seletores

Para aplicar uma regra CSS comum a vários seletores você pode agrupá-los.

Abaixo vemos um regra em comum.

{% highlight css %}
h1 {color: red;}
h2 {color: red;}
p {color: red;}
{% endhighlight %}

Aqui ela foi agrupada.

{% highlight css %}
h1, h2, p {color: red;}
{% endhighlight %}


### Seletor de classe

Seletores CSS não estão restritos às tags HTML, podemos aplicar o seletor ao atributo `class` de qualquer elemento HTML.
Se a intenção é aplicar a mesma regra CSS a diferentes elementos, você pode utilizar um __seletor de classe__,
veja exemplo:

{% highlight html %}
<p class="diferente">Este parágrafo sairá diferente por causa da estilização</p>
{% endhighlight %}

A CSS deve começar com um `.` (ponto) imediatamente seguido pelo nome da classe, veja:

{% highlight css %}
.diferente { 
    color: black;
}
{% endhighlight %}

O uso do seletor classe possibilita estilos diferentes para o mesmo tipo de elemento, exemplo:

{% highlight css %}
p {
    margin: 10px;
}
p.destaque { 
    font-weight: bold;
}
p.discreto { 
    color: gray;
}
{% endhighlight %}

É permitido declarar mais de um nome para a classe do mesmo elemento separando os nome por espaço, exemplo:

{% highlight html %}
<p class="destaque discreto">Este parágrafo sofrerá estilização de duas regras CSS</p>
{% endhighlight %}


### Seletor id

O identificador `id` pode ser aplicado a maioria dos elementos HTML só que ele deve ser único em sua página.

{% highlight html %}
<div id="main">...</div>
{% endhighlight %}

A CSS deve ser precedidada pelo sinal `#` e imdiatamente seguida pelo nome, veja:

{% highlight css %}
#main {
    ...
    ...
    ...
}
{% endhighlight %}