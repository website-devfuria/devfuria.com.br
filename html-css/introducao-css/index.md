---
layout:      grid12-article
title:       Introdução ao CSS
description: Artigo introdutorio sobre CSS - Cascading Style Sheet
---

CSS (Cascading Style Sheet) determina a estilização do contéudo.

> Folha de estilo em cascata é um mecanismo simples para adicionar estilos ( por exemplo: fontes, conteudos, espaçamentos)
> aos documentos web.
>
> Fonte: [W3C](http://www.w3.org/Style/CSS/ "link-externo")

Com a CSS é possível estilizar páginas HTML e assim, separar as obrigações de cada tecnologia:

- O HTML define a estrutura do documento e
- O CSS define a estilização

A CSS é composta pelo que se chama de "regras de estilização"(rule-sets), um exemplo de regra seria: 

    todo parágrafo deve ter
        o tamanho da fonte em 12 e
        sua cor deve ser um tom de cinza meio escuro

O tamanho da fonte precisa de uma unidade de medida. As três unidades mais utilizadas são:

- px pixel
- em relativo ao tamanho da fonte
- % porcentage

Agora vamos acertar nosso exemplo.

    todo parágrafo deve ter
        o tamanho da fonte em 12px
        sua cor deve ser um tom de cinza meio escuro

As cores, normalmente, são representadas pela combinação das cores primárias. Dizemos ao navegador o quanto queremos de
vermelho, verde e azul e assim vamos montando todas as outras cores (esquema RGB - red, green e blue). Os valores possíveis
estão entre 0(zero) e 255, onde 0 significa que não temos nada do tom desejado e 255 significa que temos o máximo do tom desejado.

Exemplo, a forma RGB `rgb(255, 0, 0)` é igual a forma hexadecimal ``#FF0000, ambas representam a cor vermelha.

Em nosso exemplo, precisamos de "tom de cinza meio escuro", no caso `#767676`:

    todo parágrafo deve ter
        o tamanho da fonte em 12px
        sua cor deve ser #767676

Abreviando um pouco a regra acima:

    todo parágrafo
        tamanho da fonte: 12px
        cor: #767676

Agora é só traduzir para CSS, veja:

{% highlight html %}
p {
    font-size: 12px;
    color: #767676;
}
{% endhighlight %}


A letra `p` é o __seletor__, é o alvo da regra CSS.

Entre as chaves `{}`, neste exemplo, há duas propriedades: `font-size` e `color`. `12px` e `#767676` são seus respectivos valores.

A regra CSS pode conter várias declarações separadas por ponto e vírgula.

Se uma imagem vale por mil palavras, vou lhe mandar 4 imagens, espero que valham 4 mil palavras...


![Figura ilustrando uma rouler set](css-syntax01.png "Figura ilustrando uma rouler set")

![Figura ilustrando uma rouler set](css-syntax02.png "Figura ilustrando uma rouler set")

![Figura ilustrando uma rouler set](css-syntax03.png "Figura ilustrando uma rouler set")

![Figura ilustrando uma rouler set](css-syntax04.png "Figura ilustrando uma rouler set")

A CSS é uma realidade incontestável para quem desenvolve aplicações web. Não dá para caminhar sem ela, na verdade não dá
nem para sair do lugar. Quero dizer que é preciso aprender CSS para poder desenvolver bem, ou você domina ela ou ela te domina.
Não precisa ser ninja em CSS, mas quanto mais conhecimento você acomular sobre CSS (e HTML também) melhor e mais produtivo
será seu dia a dia como desenvolvedor.

Para o leitor ter uma idéia do poder da CSS dê uma olha nos seguintes trabalhos:

[http://www.csszengarden.com/](http://www.csszengarden.com/ "link-externo")

[http://meyerweb.com/eric/css/edge/](http://meyerweb.com/eric/css/edge/ "link-externo")
