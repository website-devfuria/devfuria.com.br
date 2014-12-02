---
layout:      grid93-article
title:       HTML - Tabelas 
description:
menu:        html-elementos  
---


As tabelas acomodam dados tabulares.

Isso parece óbvio, mas não foi assim no começo da internet. Pela falta de recursos apropriados e pela instabilidade 
advinda dos navegadores, muitos desenvolvedores utilizavam-se de tabelas para fazer o layout da página. Isso é uma 
prática condenável e seu remédio chama-se __tableless__, que nada mais é do que um conceito (ou talvez um princípio)
onde evita-se utilizar a tabela em algo que não seja dados tabulares.

Uma tabela contém linhas `tr` e campos `td`.

Ás vezes podem conter as tag's `thead`, `tbody` e `tfoot` que representam o cabeçalho, o corpo e o rodapé da tabela,
respectivamente.

Quando temos campos do cabeçalho (dentro da tag `thead`) utilizamos a tag `th` no lugar da `td`, pois essa representa
melhor o cabeçalho.

{% highlight html %}
<table>

    <thead>
        <tr>
            <th>campo 1</th>
            <th>campo 2</th>
            <th>campo 3</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>dado 1</td>
            <td>dado 2</td>
            <td>dado 3</td>
        </tr>
        <tr>
            <td>dado 1</td>
            <td>dado 2</td>
            <td>dado 3</td>
        </tr>
        <tr>
            <td>dado 1</td>
            <td>dado 2</td>
            <td>dado 3</td>
        </tr>

    </tbody>

    <tfoot>
        Este é o rodapé
    </tfoot>

</table>
{% endhighlight %}



Estilizando
---

<p data-height="460" data-theme-id="2897" data-slug-hash="ZYbaQj" data-default-tab="result" data-user="flaviomicheletti" class='codepen'>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/ZYbaQj/'>ZYbaQj</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>