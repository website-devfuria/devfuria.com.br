---
layout:      grid12-article
title:       Iniciando em JavaScript
description: Primeiros passos com a linguagem JavaScript
---

Este é um pequeno artigo sobre como iniciar sua experiência com a linguagem __JavaScript__. Ele á bastante prático e 
direto, o objeto é você entrar rapidamente em ação. Mas talvez você precise de mais detalhes de como 
[iniciar os estudos com JavaScript (artigo de Vitor Britto)](http://www.vitorbritto.com.br/blog/iniciando-os-estudos-com-javascript/ "link-externo")
Eu pressuponho que você sabe [o que é JavaScript](/javascript/o-que-e-javascript/).

Veremos neste artigo:

- [Como executar o JavaScript](#como-executar-o-javascript)
- [Cada um no seu quadrado (separando as obrigações)](#cada-um-no-seu-quadrado-separando-as-obrigaes)
- [Aonde colocar o Javascript ?](#aonde-colocar-o-javascript-)


### Como executar o JavaScript

Você pode executar JavaScript do lado do cliente (__front end__) em um navegador web, dê preferência ao 
[FireFox](https://www.mozilla.org/pt-BR/firefox/new/ "link-externo") ou ao
[Google Chrome](https://www.google.com.br/chrome/browser/desktop/index.html "link-externo").

Também pode-rá executá-lo do lado do servidor (__back end__) em linha de comando através do 
[node.js](/javascript/node.js/).

Neste primeiro exemplo, vamos executá-lo no navegador (lado cliente).

Crie um arquivo de texto simples, salve com o nome `index.html` e insira nele o seguinte código:

{% highlight javascript %}
var foo = "Eu sou javascript";
alert(foo);
{% endhighlight %}

Abra o arquivo em um navegador qualquer.


### Cada um no seu quadrado (separando as obrigações)

Antes de começar a escrever em JavaScript é bom saber separar as obrigações de seu código.

O __JavaScript__ será encarregado do comportamento da página, da interação com o usuário, dos eventos possíveis (click, 
duplo click, teclado, movimentação do mouse, e etc...), de tudo aquilo que pode beneficiar a interface do sistema.

O __CSS__ se encarrega-rá da apresentação da página. Pensou em estilizar, formatar, desenhar, cuidar da aparência, 
layout, conteudos, fontes, bordas, espaçamento, disposição dos elementos ...pensou em CSS. Ele cuidará da embalagem, da
roupagem que sua página web irá vestir.

Sobrou para o __HTML__ deixar claro qual é o conteúdo. HTML marca o conteúdo, em outras palavras: "tudo que é necessário
para ler e entender o conteúdo de sua página web. O código HTML deve fazer o máximo para transmitir o significado
(ou semântica) do conteúdo". O HTML descreve o conteúdo da página, a isso chamamos de __marcação semântica__.

Organizando o raciocínio, temos:

- conteúdo (HTML),
- apresentação (CSS)
- comportamento (JavaScript).




### Aonde colocar o Javascript ?

O ideal é escrevermos o código JavaScript em um arquivo texto com extensão `.js` e incluí-lo no arquivo HTML dessa forma:

{% highlight html %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hello, World!</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="codigo.js"></script>
    </head>
    <body>
        ...
    </body>
</html>
{% endhighlight %}

As abordagem acima sofre de um pequeno inconveniente: a ordem em que o arquivo é lido e executado pelo browser. Os 
navegadores executam arquivos JavaScript assim que o código é baixado e depois continua a reenderizar o HTML restante. 
Isso significa que se o seu código depender do HTML, e acredite vai depender, ele não conseguirá executar corretamente.

Atualmente há algumas saídas para este problema, a abordagem mais utilizada é a boa e velha dica: coloque o script no 
final do HTML !!!, pronto resolvido. Isso garante que seu JavaScript será executado após todo o HTML ter sido carregado
 e de quebra sua página obtém um ganho de performance. Em outra matéria, falarei mais sobre essa questão. Por hora,
vejamos como ficou nosso HTML:


{% highlight html %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hello, World!</title>
        <meta charset="utf-8">
    </head>
    <body>
        ...
    <script type="text/javascript" src="codigo.js"></script>
    </body>
</html>
{% endhighlight %}

Colocamos o código JavaScript no final do HTML.


Leia em seguida
---

Que tal dar um olhada na [sintaxe de JavaScript](/javascript/sintaxe-basica/)?

