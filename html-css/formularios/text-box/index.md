---
layout:      grid93-article
title:       Textbox (input type=text)
description: Artigo a respeito do controle textbox (formulário web) - HTML e CSS
menu:        html-forms
---

A caixa de texto, de longe, é o controle mais utilizado.

Ele serve como entrada básica de texto ou números, na verdade de qualquer caracter.

{% highlight html %}<input type="text" name="user-name"/>{% endhighlight %}

Abaixo, um exemplo hipotético.

![Ilustração de uma textbox](input-text.jpg "Ilustração de uma textbox")


Estilizando
---

Abaixo temos alguns exemplos de estilização da textbox.


### Estilização simples:

![](textbox-exemplo01.png)

{% highlight css %}
input[type="text"] {
    background-color : #99FFCC;
    border: 1px solid #008000;
    width: 230px;
}
{% endhighlight %}



### Com borda pontilhada:

![](textbox-exemplo02.png)

{% highlight css %}
input[type="text"] {
    border: 2px dashed #D1C7AC;
    width: 230px;
}
{% endhighlight %}



### Imagem de background:

Este exemplo usa esta [imagem como background](textbox-background.png).

![](textbox-exemplo03.png)

{% highlight css %}
input[type="text"] {
    background-image: url('textbox-background.png');
    border: 1px solid #6297BC;
    width: 230px;
}
{% endhighlight %}



### Borda maior:

![](textbox-exemplo04.png)

{% highlight css %}
input[type="text"] {
    width: 230px;
    border: 1px solid #3366FF;
    border-left: 4px solid #3366FF;
}
{% endhighlight %}



### Bordas arredondadas:

![](textbox-exemplo05.png)

{% highlight css %}
input[type="text"] {
    border: 2px solid #456879;
    border-radius: 10px;
    height: 22px;
    width: 230px;
}
{% endhighlight %}



### Borda dupla:

![](textbox-exemplo06.png)

{% highlight css %}
input[type="text"] {
    border: 3px double #CCCCCC;
    width: 230px;
}
{% endhighlight %}



### Gradiente 1:

Este exemplo usa esta [imagem como background](textbox-gradient.png).

![](textbox-exemplo07.png)

{% highlight css %}
input[type="text"] {
    background-image:url('textbox-gradient.png');
    background-repeat:repeat-x;
    border:1px solid #d1c7ac;
    width: 230px;
    padding:3px;
    color:#959595;
}
{% endhighlight %}



### Gradiente 2:

Este exemplo aproveita a mesma [imagem do exemplo "Imagem de background"](textbox-background.png).

![](textbox-exemplo08.png)

{% highlight css %}
input[type="text"] {
    width: 232px;
    background: transparent url(''textbox-background.png'') no-repeat;
    color : #747862;
    height:27px;
    border:0;
    padding:4px 8px;
}
{% endhighlight %}



### Imagem dentro da textbox:

Este exemplo usa uma [imagem como background](textbox-search.png).

![](textbox-exemplo09.png)

{% highlight css %}
input[type="text"] {
    background:#FFFFFF url(textbox-search.png) no-repeat 4px 4px;
    padding:4px 4px 4px 22px;
    border:1px solid #CCCCCC;
    width:230px;
    height:25px;
}
{% endhighlight %}


<hr>
Fontes:

- [www.cssportal.com/form-elements/text-box](http://www.cssportal.com/form-elements/text-box.php "link-externo")
