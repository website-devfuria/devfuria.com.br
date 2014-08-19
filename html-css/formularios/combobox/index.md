---
layout:      materia
title:       Caixa de seleção (combo box)
description: 
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

Se, por exemplo, o usuário clicar na opção "Canada" será enviado para o servidor o __par/valor__ `cboPais=Canada`.
O valor assumiu o texto contido entre as tags options.

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

Repare que em nosso exemplo a __primeira opção__ era "Select Country". Isso ajuda a experiência do usuário.

Nesse sentido, também podemos colocar um valor "em branco", exemplo:

{% highlight html %}
<select id=cbPais>
    <option value="" ></option>
    <option value="usa" >Usa</option>
    <option value="ca" >Canada</option>
    <option value="me" >Mexico</option>
</select>
{% endhighlight %}

Para selecionarmos uma opção utilizamos a propriedade `selected="selected"` na tag `option` que desejamos que seja selecionada.

{% highlight html %}
<select id=cbPais>
    <option value="" ></option>
    <option value="usa" >Usa</option>
    <option value="ca" selected="selected" >Canada</option>
    <option value="me" >Mexico</option>
</select>
{% endhighlight %}