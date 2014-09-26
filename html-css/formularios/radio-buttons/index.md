---
layout:      grid-9-3
title:       Botões de opção (input type=radio)
description: 
menu:        html-forms
---

Os __radio buttons__ são como uma opção entre, no mínimo, duas.

No exemplo abaixo eu coloquei três radios para fazer mais sentido.

{% highlight html %}
<input type="radio" name="band-rock" value="beatles"/>
<input type="radio" name="band-rock" value="led-zeppelin"/>
<input type="radio" name="band-rock" value="pink-floyd"/>

{% endhighlight %}
Repare que a propriedade `name` é igual para o mesmo grupo de opções e que a propriedade `value` deve ser definida pelo
programador.

Veja um conjunto de radios como exemplo.

![Ilustração de um campo radio button](input-radio.jpg "Ilustração de um campo radio button")

Para exibir o controle radio selecionado, usamos a propriedade `checked`.

{% highlight html %}
<input type="radio" name="company" checked="checked"/>
{% endhighlight %}

O botão radio sofre do mesmo problema que o botão [checkbox](../checkbox), quando __não clicado__ ele nada enviará para o servidor.

Mas o problema pode ser amenizado, uma vez que você pode definir um valor na hora de carregar o formulário. Quero dizer que
ele virá selecionado, ou seja, não haverá controle "não ticado".