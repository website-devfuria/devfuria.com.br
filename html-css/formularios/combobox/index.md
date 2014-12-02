---
layout:      grid93-article
title:       Caixa de seleção (combo box)
description: Artigo a respeito do controle combobox. select (formulário web) - HTML e CSS
menu:        html-forms
---

A caixa de seleção, vulgo __combobox__ é um controle parecido com um "menu de opções", veja a imagem abaixo.

![Ilustração de um campo combobox ](select.gif "Ilustração de um campo combobox")

A tag para este controle é a `select`.

{% highlight html %}
<select>
...
</select>
{% endhighlight %}

Os opções (que vão dentro da tag `select`) utilizam a tag `option`:

{% highlight html %}<option>Usa</option>{% endhighlight %}

Dessa forma, "options" mais "select", temos __o controle combobox__:

{% highlight html %}
<select id=cbPais>
    <option>Select Country</option>
    <option>Usa</option>
    <option>Canada</option>
    <option>Mexico</option>
</select>
{% endhighlight %}




Como funcionam as comboboxes ?
---

Se, por exemplo, o usuário clicar na opção "Canada" será enviado para o servidor o __par/valor__ `cboPais=Canada`.
Quando não definimos a propriedade `value` o valor passa a ser o texto contido entre as tags options.

{% highlight html %}
<select id=cbPais>
    <option>Select Country</option>
    <option>Usa</option>
    <option>Canada</option>
    <option>Mexico</option>
</select>
{% endhighlight %}


De forma mais comum, utilizamos a propriedade `value` em cada tag `option`, veja:

{% highlight html %}
<select id=cbPais>
    <option value="" >Select Country</option>
    <option value="usa" >Usa</option>
    <option value="ca" >Canada</option>
    <option value="me" >Mexico</option>
</select>
{% endhighlight %}

Dessa forma, quando o usuário clicar novamente na opção "Canada" será enviado o __par/valor__ `cboPais=ca`.

Repare que em nosso exemplo a __primeira opção__ era "Select Country", isso ajuda a experiência do usuário, pois ele
verá um instrução na combo e saberá que deve selecionar alguma coisa, veja a combo abaixo:

![](select-country.png)

Ainda pensando na experiência do usuário, também poderíamos colocar o primeiro valor "em branco", exemplo:

{% highlight html %}
<select id=cbPais>
    <option value="" ></option>
    <option value="usa" >Usa</option>
    <option value="ca" >Canada</option>
    <option value="me" >Mexico</option>
</select>
{% endhighlight %}

O usuário vendo que o controle está em branco (não selecionado) intuirá que precisa selecionar alguma coisa.

![](option-branco.png)

Para selecionarmos uma opção utilizamos a propriedade `selected="selected"` na tag `option` que desejamos que seja selecionada.

{% highlight html %}
<select id=cbPais>
    <option value="" ></option>
    <option value="usa" >Usa</option>
    <option value="ca" selected="selected" >Canada</option>
    <option value="me" >Mexico</option>
</select>
{% endhighlight %}


Estilizando
---