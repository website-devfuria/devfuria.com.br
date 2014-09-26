---
layout:      grid-9-3
title:       HTML - Listas 
description:
menu:        html-elementos  
---

As listas ajudam a organizar o conteúdo, mas fazem muito mais do que isso. 

Elas são utilizadas principalmente para __criar menus__ (com a ajuda da CSS, é claro). Esses menus podem ser verticais
(que é a disposição natural das listas) ou podem ser horizontais.

O efeito horizontal é produzido com o auxílio da __propriedade float (CSS)__. Essa propriedade, quando utilizada sabiamente,
produz resultados interessantes. Ela faz os elementos flutuarem para a direita ou para a esquerda. Voltaremos a falar sobre
o float em breve.

A tag `ul` é um container que comporta os itens da lista: as tag's `li`. Em outras palavras, o `ul` é a lista e os `li`
são os itens.

`ul` significa "unordened list" (lista não ordenada): 

{% highlight html %}
<ul>
    <li></li>
    <li></li>
    <li></li>
</ul>
{% endhighlight %}

Há também a lista `ol` (ordened list) que é a lista ordenada:

{% highlight html %}
<ol>
    <li></li>
    <li></li>
    <li></li>
</ol>
{% endhighlight %}
