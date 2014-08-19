---
layout:      materia-html-forms
title:       Formulários web
description: Tudo o que você precisa saber so bre Formulários Web.
---

Um __formulário web__ é a porta de entrada dos dados de sua aplicação.

É nele que seu usuário faz a entrada de dados.

Abaixo, temos um exemplo de formulário.

{% highlight html %}
    <form action="script-para-onde-envio-os-dados.php" method="post">
        <p>Name:  <input type="text" name="username" value="João da Silva" /></p>
        <p>Email: <input type="text" name="email"  value="joao@dasilva.com" /></p>
        <p><input type="submit" value="Submit me!" /></p>
    </form>
{% endhighlight %}

Leia mais sobre [formulário web](formularios-web/).




{% include lista-html-forms1-titulo.html %}

A tag `input` compõem a maioria dos controles básicos.

{% highlight html %}<input type="" name=""/>{% endhighlight %}

A propriedade `name` será associada ao valor do campo.

Se o propriedade `name` for, por exemplo, "idade" e o valor digitado pelo usuário for `36` os dados para o servidor serão:

{% highlight html %}idade=36{% endhighlight %}

Alterando-se a propriedade `type` podemos obter os seguintes controles:

{% include lista-html-forms1.html %}



{% include lista-html-forms2-titulo.html %}

Nesta categoria encontram-se os controles "combo box", "list box" e "text box multiline":

{% include lista-html-forms2.html %}

