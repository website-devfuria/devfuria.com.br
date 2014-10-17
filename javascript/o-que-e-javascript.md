---
layout:      grid12-article
title:       O que é JavaScript?
description: Introdução despretensiosa sobre a linguagem JavaScript.
---

JavaScript é a linguagem de programação que a [Netscape](http://pt.wikipedia.org/wiki/Netscape "link-externo") criou 
para dar vida (do lado do cliente - front end) em seu navegador. O nome tem uma sacada comercial, quiseram aproveitar o 
sucesso de [Java](http://www.oracle.com/br/technologies/java/overview/index.html "link-externo") e escolheram um nome similar.
O resultado é que até hoje (2014) há uma confusão enorme. __JavaScript não é Java__ (e vice e vesa). O pai dela chama-se
[Brendan Eich](http://en.wikipedia.org/wiki/Brendan_Eich "link-externo").

A Netscape foi vendida e deu lugar para a [fundação Mozila](https://www.mozilla.org/pt-BR/ "link-externo") tomar conta do
negócio e ela vem fazendo um ótimo trabalho.

A popularidade se deu pelo fato de que JavaScript fazia o que nenhuma outra linguagem fazia: transformar páginas __HTML__
estáticas em algo dinâmico sem ter que "viajar" até o servidor. Estamos falando do lado do cliente (front end).

Quem programa para a web, trabalha com uma linguagem do lado do servidor e conta sempre com o apoio de JavaScript. 

A empresa [ECMA](http://www.ecma-international.org/ "link-externo") resolveu padronizar a linguagem e criou o padrão
[ECMAscript](http://www.ecmascript.org/ "link-externo"), na verdade este é o nome oficial adotado para a linguagem, 
mas que não "cola" de jeito nenhum. 

Porque temos um padrão? Porque cada navegador implementa a linguagem de forma diferente, em outras palavras, escrever um
trecho de código JavaScript válido que funciona no Firefox, por exemplo, pode não funcionar no IE (sempre o IE!). 
Isso mesmo, JavaScript sofre do mesmo problema que o HTML e o CSS, cada navegador implementa ao seu sabor. 

> "Em teoria, a padronização obriga as empresas fabricantes de navegadores a implementarem no mínimo aquele conjunto de
> funcionalidades" 
> 
> (Edgar Damiani)

...por isso o padrão ECMA é tão importante.

O JavaScript já deixou de ser uma linguagem só front end, o [node.js](http://nodejs.org/ "link-externo") levou a linguagem
para o lado do servidor e está cada vez mais popular.

> "Parece algo que você pode dominar em uma tarde, JS parece simples, contudo, em seus 10 anos de história até aqui [a edição
> era de 2007], as melhores práticas de JS pareciam mudar com as estações.".
> 
> Kevin Yank e Cameron Adams (Simple JavaScript)


> "JavaScript (às vezes chamado apenas de JS) é uma linguagem de programação, leve, interpretada, orientada a objetos, 
> baseada em protótipos e em first-class functions (funções de primeira classe), mais conhecida como a linguagem de 
> script da Web. Também utilizada em vários outros ambientes como __node.js__ e __Apache CouchDB__.".
>
> Mozilla Fundation


### JS é realmente Orientado a Objetos ?

Segundo [Douglas Crockford's](http://www.crockford.com/ "link-externo") (o mago do JS):

> O JavaScript é orientado à objetos? Bem, ele contém objetos que podem conter dados e métodos que agem sobre esses 
> dados. Objetos podem conter outros objetos. O JavaScript não possui classes, mas possui construtores que são capazes 
> de fazer o que as classes fazem, incluindo agir como contêineres para classes de variáveis e métodos. Ele não possui 
> herança orientada a classe, mas tem herança orientada a protótipo.

JavaScript é uma linguagem orientada a objetos. Isso significa que, em vez de ter funções definidas globalmente para
operar em valores de vários tipos, os próprios tipos definem __métodos__ para trabalhar com valores. Para classificar
os elementos de um array `a`, por exemplo, não passamos `a` para uma função `sort()`. 
(Flanagan, pag 29 - JavaScript, o guia definitivo)

Em vez disso, chamamos o método `sort()` de `a`: 

{% highlight javascript %}
    a.sort() // A versão orientada a objetos de "sort(a)"
{% endhighlight %}


### JavaScript é seguro?

Vamos estender essa pergunta para: a linguagem de programação X é segura?

Nenhuma linguagem de programação é segura ou insegura, a pergunta correta seria:

O desenvolvedor programa de forma segura?

O que acontece com JS é que o código fica exposto a qualquer usuário, por isso, percebemos erroneamente, que JS é 
inseguro, mas isto não é verdade. Seguro ou inseguro, como já disse, é a forma como se programa.

Obviamente, tendo em vista que o código fica exposto, não criaremos nenhum __código sensível__ (um código que possa ser
explorado por um hacker causando danos a aplicação).



O primeiro script a gente nunca esquece
---

Crie um arquivo texto e salve com o nome `index.html`. Agora insira nele o seguinte código:

{% highlight javascript %}
var foo = "Eu sou javascript";
alert(foo);
{% endhighlight %}

Abra o arquivo em um navegador qualquer.

Agora, que tal descobrir o que você precisa para [iniciar em JavaScript](/javascript/iniciando-com-javascript/)?
