---
layout:      materia
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



### Controles básicos (input)

A tag `input` compõem a maioria dos controles básicos.

{% highlight html %}<input type="" name=""/>{% endhighlight %}

A propriedade `name` será associada ao valor do campo.

Se o propriedade `name` for, por exemplo, "idade" e o valor digitado pelo usuário for `36` os dados para o servidor serão:

{% highlight html %}idade=36{% endhighlight %}

Alterando-se a propriedade `type` podemos obter os seguintes controles:

<div class="list-group">
    <a href="/html-css/formularios/text-box/" class="list-group-item">Textbox - input type=text</a>
    <a href="/html-css/formularios/password/" class="list-group-item">Campos de senha - input type=password</a>
    <a href="/html-css/formularios/checkbox/" class="list-group-item">Caixa de checagem - input type=checkbox</a>
    <a href="/html-css/formularios/radio-buttons" class="list-group-item">Botões de opção - input type=radio</a>
    <a href="/html-css/formularios/button-submit-reset" class="list-group-item">Botões - button, submit e reset</a>
    <a href="/html-css/formularios/input-file/" class="list-group-item">Enviando arquivos - input type="file"</a>
</div>



### Controles básicos (não input)

Nesta categoria encontram-se os controles "combo box", "list box" e "text box multiline":

<div class="list-group">
    <a href="/html-css/formularios/combobox/" class="list-group-item">Caixa de seleção - combo box</a>
    <a href="/html-css/formularios/listbox/" class="list-group-item">Caixa de multipla seleção - List box</a>
    <a href="/html-css/formularios/text-area/" class="list-group-item">Text box multiline - text area</a>
</div>