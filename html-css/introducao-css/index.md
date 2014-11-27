---
layout:      grid93-article
title:       Introdução ao CSS
description: Artigo introdutório sobre CSS - Cascading Style Sheet
menu:        html-artigos-intro
---

Para estilizar o HTML devemos utilizar a CSS.

CSS - Cascading Style Sheet (Folha de Estilo em Cascata) determina a estilização do conteúdo.

Folha de estilo é um mecanismo simples para adicionar estilos aos documentos web, por exemplo: fontes, 
conteúdos, espaçamentos, etc...

A CSS é uma realidade incontestável para quem desenvolve aplicações web. Não dá para caminhar sem ela, na verdade não dá
nem para sair do lugar. Quero dizer que é preciso aprender CSS para poder desenvolver bem, ou você domina ela ou ela te domina.
Não precisa ser ninja em CSS, mas quanto mais conhecimento você acomular sobre CSS (e HTML também) melhor e mais produtivo
será seu dia a dia como desenvolvedor.

Para o leitor ter uma idéia do poder da CSS dê uma olha no trabalho da [www.csszengarden.com](http://www.csszengarden.com/ "link-externo")

Nesta altura, a __separação das obrigações__ de cada tecnologia deve estar bem claro em sua mente:

- O HTML define a estrutura do documento e
- O CSS define a estilização

Apesar de a sintaxe CSS ser mutio simples, uma única folha de estilos pode conter teoricamente infinita informações de
apresentações. Essa informação é organizada em uma sequência de __instruções__, cada uma esécificando uma __regra__ (
por vezes chamado de conjunto de regras ou __ruleset__). Uma regra típica contém um bloco de declaração, que contém dentro
de si uma série de __declarações__ (compostas de pares `propriedade: valor` e um __seletor__.

A CSS é composta pelo que se chama de "regras de estilização"(rule-sets), um exemplo de regra seria: 

![Figura ilustrando uma rouler set](css-syntax01.png "Figura ilustrando uma rouler set")

A regra CSS pode conter várias declarações separadas por ponto e vírgula, como no exemplo abaixo:

{% highlight css %}
/* CSS também possuem comentários e você deve utilizá-los */
p {
    font-size: 12px;
    color: green;
}
{% endhighlight %}

A letra `p` é o __seletor__, é o alvo da regra CSS.

Entre as chaves `{}`, neste exemplo, há duas propriedades: `font-size` e `color` sendo `12px` e `green` seus respectivos valores.


Unindo o CSS ao HTML
---

Há 3 formas de unir o CSS ao HTML: inline, embed e linked.

O exemplo abaixo ilustra a forma inline.

{% highlight html %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Seu primeiro HTML</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p style="font-size: 12px; color: green;">Aqui é onde as coisas acontecem, o corpo de seu HTML</p>
    </body>
</html>{% endhighlight %}

O exemplo abaixo ilustra a forma embeded.

{% highlight html %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Seu primeiro HTML</title>
        <meta charset="utf-8">
        <style type="text/css" media="all">
        p {
            font-size: 12px;
            color: green;
        }
        </style>
    </head>
    <body>
        <p>Aqui é onde as coisas acontecem, o corpo de seu HTML</p>
    </body>
</html>{% endhighlight %}

O exemplo abaixo ilustra a forma linked.

{% highlight html %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Seu primeiro HTML</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilos.css" media="all" />
    </head>
    <body>
        <p>Aqui é onde as coisas acontecem, o corpo de seu HTML</p>
    </body>
</html>
{% endhighlight %}

Eis o arquivo que compõem a folha de estilo `estilo.css`.

{% highlight css %}
/* Folha de estilo: estilo.css */
p {
    font-size: 12px;
    color: green;
}
{% endhighlight %}


Veja a próxima matéria
---

- [Unindo o CSS ao HTML](/html-css/unindo-css-html/)