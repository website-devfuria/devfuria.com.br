---
layout:      grid93-article
title:       Caixa de checagem (input type=checkbox)
description: Artigo a respeito do controle checkbox (formulário web) - HTML e CSS
menu:        html-forms
---


As checkboxe's são como uma escolha booleana: true ou false, sim ou não.

{% highlight html %}
<input type="checkbox" name="company" />
{% endhighlight %}

Normalmente vem em grupo, como a imagem abaixo.

![Ilustração de um campo do tipo checkbox](input-check.png "Ilustração de um campo do tipo checkbox")

Ou sozinha como no exemplo seguinte.

![Ilustração de um campo do tipo checkbox](input-check2.jpg "Ilustração de um campo do tipo checkbox")




Como as checkboxes funcionam?
---

Para dizer qual a checkbox foi ticada (selecionada), usamos a propriedade `checked`.

{% highlight html %}
<input type="checkbox" name="company" checked/>
{% endhighlight %}

Mas a especificação diz que é para ser usado dessa forma:

{% highlight html %}
<input type="checkbox" name="company" checked="checked"/>
{% endhighlight %}

De qualquer forma, o navegador entenderá que a __checkbox__ deve ser assinalada. Uma coisa importante de se dizer é que
a propriedade `value` é inútil. Explico, se o controle for clicado, o valor que é enviado para o servidor é `value=on`
e se NÂO clicado, o valor é `value=off`, certo??? Errado, e isso é muito triste! Quando o controle não é clicado ele 
não envia nada, nada mesmo. Quando é clicado, ele envia o valor que você especificar na propriedade `value`.

Isso faz sentido para você? Pra mim não, mas tudo bem.



Estilizando
---

