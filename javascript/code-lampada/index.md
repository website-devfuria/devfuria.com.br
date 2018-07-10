---
title:       Code - A lâmpada
description: Código em JavaScript que acende e apaga uma lâmpada
capitulo:    "javascript-artigos"
ordem:       5
---

Nesta matéria utilizarei o código que faz a uma lâmpada acender e apagar.

Clique nas abas para visualizar as partes separadamente: HTML, JS e resultado.

<div data-height="266" data-theme-id="2897" data-slug-hash="zFGvl" data-default-tab="js" data-user="flaviomicheletti" class='codepen'><pre><code>var element = document.getElementById(&#39;myimage&#39;);
element.onclick = function() {
    if (element.src.match(&quot;lampada-on&quot;)) {
        element.src=&quot;http://www.devfuria.com.br/javascript/code-lampada/lampada-off.gif&quot;;
    } else {
        element.src=&quot;http://www.devfuria.com.br/javascript/code-lampada/lampada-on.gif&quot;;
    }
};</code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/zFGvl/'>a lâmpada</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>

A lógica do programa é bem simples, utilizamos 2 imagens:

![Imagem](lampada-off.gif)
![Imagem](lampada-on.gif)

Analisando o caminho do arquivo podemos descobrir se ela está ou ligado.

Invertemos o estado alterando o caminho, hora para acessa ("lampada-on"), hora para apagada ("lampada-off").

Faremos isso a cada click na tag `<img>`.

    se (o caminho da imagem contiver o pedaço de string "lampada-on") então
        desligue a lâmpada
    se não
        ligue a lâmpada





Explicando o código
---

Precisamos buscar o elemento `img` para podermos manipulá-lo. Fazemos isso utilizando a função
[getElementById()](/javascript/dom-getelementbyid/). Ela buscará um elemento HTML na árvore [DOM](/javascript/dom/) que
contenha o atributo `id='myimage'`

```javascript
var element = document.getElementById('myimage');
```

Esperamos que nosso HTML tenha uma (única) tag `<img>` com o atributo `id` definido. O atributo `scr` indica o local
onde encontra-se a imagem e o atributo `alt` é uma boa prática, ele será exibido caso não encontre o arquivo da imagem
definido no atributo `src`.

```html
<img id="myimage" scr="local-da-imagem" alt="texto-alternativo" />
```

Com o elemento devidamente capturado e atribuído a variável `element`, devemos ligar (anexar) nossa função ao evento click.

```javascript
element.onclick = function() {
    //
    // faz alguma coisa!
    //
};
```

Em outras palavras, a cada clique no elemento HTML capturado será disparado uma função previamente atribuída.

No JavaScript é muito comum colocarmos uma função dentro de uma variável e executarmos a função referenciando-se a
variável, essa técnica chama-se [funções anônimas](/javascript/funcoes-anonimas/), veja:

```javascript
var minha_funcao = function(a, b) {return a + b};
```

Agora nos deparamos com o conteúdo de nossa função, ela deve refletir nossa lógica.

Para saber se a lâmpada está ligada utilizamos a função [string.match()](/javascript/string-match/), o trecho
`string` é representado pelo *source* da imagem (`element.scr`).

A linha do if está "dizendo" o seguinte: "Se a lâmpada estiver ligada...".

```javascript
if (element.src.match("lampada-on")) {
    //
    // desligar
    //
} else {
    //
    // ligar
    //
}
```

Ligar e desligar é fácil, basta substituir o atributo `scr` pelo caminho da imagem correspondente.


```javascript
// ligar
element.src="caminho/para/imagem/lampada-on.gif";

// desligar
element.src="caminho/para/imagem/lampada-off.gif";
```



Veja o código funcionando em sua máquina
---

Para executar o exemplo em sem computador clone o repositório do
[GitHub](https://github.com/devfuria/javascript-exemplos)
ou simplesmente faça o [download](https://github.com/devfuria/javascript-exemplos/archive/master.zip) do repositório.

Navegue até a pasta `javascript-exemplos/lampada/` e abra o arquivo `index.html` em seu navegador.




Seu feedback é importante!
---

Este pequeno código tem o objetivo de motivar o leitor no estudo da linguagem JavaScript.

- Ele foi suficientemente simples para seu entendimento?
- Ou foi tão simples que ficou até entediante?
- Faltou alguma explicação?
- Você pode tirar suas duvidas nos comentários abaixo.

Veja esse e outros códigos no .
