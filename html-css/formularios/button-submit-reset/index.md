---
layout:      grid93-article
title:       Botões (button, submit e reset)
description: 
menu:        html-forms
---

Um botão simples (button) precisa de um código javascipt para funcionar.

O botão abaixo precisaria de um código [JS](/javascript/) para realizar a submissão da página.

{% highlight html %}
<input type="button" value="Enviar formulário" />
{% endhighlight %}

O botão submit "já vem pré programado" para realizar o __submit__, ou seja, não precisaremos "codar" em [JS](/javascript/).

{% highlight html %}
<input type="submit" value="Enviar formulário" />
{% endhighlight %}

O botão reset já não se usa mais. Ele limpa as entradas do campos e, como o __botão submit__, ele já vem pré programado.

{% highlight html %}
<input type="reset" value="Apagar formulário" />
{% endhighlight %}

Visualmente eles são muito parecidos, mas "por de baixo do pano" são bem diferentes.

Repare que a propriedade `value` de ambos os botões servem como uma estampa.

![Ilustração de um campo de button, submit e reset](buttons.jpg "Ilustração de um campo de button, submit e reset")

