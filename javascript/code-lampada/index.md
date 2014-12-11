---
layout:      grid12-article
title:       Code - A lâmpada
description: Código em JavaScript que acende e apaga uma lâmpada (princípio de animações com JS)!
---

Nesta matéria utilizarei o código que faz a uma lâmpada acender e apagar.

Clique nas abas para visualizar as partes separadamente: HTML, JS e resultado.

<div data-height="266" data-theme-id="2897" data-slug-hash="zFGvl" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/zFGvl/'>a lâmpada</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>

Veja o código no [GitHub](https://github.com/devfuria/javascript-exemplos/tree/master/lampada "link-externo").



Explicando o código
---

### getElementById()

Uma coisa que fazemos com muita frequência em JS é referenciar (ou talvez a palavra mais adequada seja buscar) elementos
HTML. Estamos buscando um elemento na árvore [DOM (Document Object Model)](/javascript/dom/) e é exatamente isso o que estamos fazendo
com o a [função getElementById()](/javascript/refs/getelementbyid).

Ela buscará um elemento HTML através da propriedade `id` desse elemento, ou seja, é necessário ter o elemento HTML para
que a função funcione corretamente.

Se a função encontrar o elemento procurado, ela retornará esse elemento. Atribuímos o resultado a uma variável para 
podermos manipular essa variável. 

Caso o elemento HTML não exista, a função não dispara erro algum, ela é silenciosa. Ela apenas retornará `null`, esse 
será o valor que atribuiremos a variável `elemento`. Quando usamos o método `onclick` o JavaScript dispara o erro:

    TypeError: element is null

É como se estivéssemos tentando fazer algo do tipo:

    var element = document.getElementById('nome-que-nao-existe');
    null.onclick = ...

E se tivéssemos vários elementos com o mesmo id? O id é um identificador único e seu valor não deve ser repetido.

O objeto `document` antes da função faz parte do DOM, ele representa o documento ativo, antes dele (um nível acima) 
temos o [objeto window](/javascript/objeto-global/) e o correto era escrever assim:

    window.document.getElementById();

...mas isso é verboso demais e o objeto window pode ser suprimido.



### onclick

Já ouviu falar em eventos? Isso mesmo [onclick](https://developer.mozilla.org/en-US/docs/Web/API/GlobalEventHandlers.onclick "link-externo")
nada mais é do que o evento "click".

Mas de quem é esse evento? Os [eventos são atribuído aos elementos](/javascript/tratando-eventos/), em nosso exemplo 
atribuímos o evento __onclick__ a tag `img`.

    element.onclick = ...aqui entra uma função!!!

Ao clicarmos na imagem disparamos o evento.



### function

Uma função é uma função (momento KISS).

Mas ela pode ser atribuída a uma variável? Pode... seja bem vindo ao mundo do JavaScript (rs).

Uma [função em JavaScript](/javascript/refs/funcoes/) parece-se com a mostrada a baixo:

    function mostrar_alerta () {
        alert('chamou a função');
    };
    mostrar_alerta();

O mais usual é colocarmos a função dentro de uma variável e executamos a função referenciando-se a variável, essa técnica
chama-se [funções anônimas](/javascript/refs/funcoes-anonimas/), veja:

    var mostrar_alerta = function () {
        alert('chamou a função');
    };
    mostrar_alerta();

Aproveite para ir se acostumando com isso:

    var minha_funcao = function() { };



### src=""

Esse `scr` é uma propriedade HTML, isso mesmo, HTML! E o que ela esta fazendo no meio do meu código JS?

Calma, ela é faz parte do objeto que buscamos com a [função getElementById()](/javascript/refs/getelementbyid), __scr__
é a abreviação de source e significa que o conteúdo da tag `img` é definido por essa proriedade, veja o trecho de HTML:

    <img src="local-da-imagem-no-seu-hd">

Podemos acessar esse e outras propriedades através de JS.




### match()

Função nativa do JavaScript utilizada para executar uma __Expressão Regular__, não me pergunte o que é isso ok?

Brincadeira visite a seção [Expressões Regulares (regex)](/regex/) se quiser saber mais sobre expressões regulares.

Nós estamos usando o valor da propriedade `src` para descobrir se ela contém o trecho `bulbon`.

Veja o pseudocódigo abaixo para entender melhor:

    se no caminho da imagem o seguinte pedaço de string "bulbon" estiver contido então
        desligue a lâmpada
    se não
        ligue a lâmpada



Fechando a conta
---

Se você sobreviveu até aqui, parabéns!

Vimos algumas coisas básicas, o objetivo era lhe proporcionar um primeiro contato com a linguagem de forma prática (bem prática).

Outros tutoriais passam apenas a especificação da linguagem, com sorte eles mostram um exemplo ou outro.

Eu preferi, a partir de um exemplo, ir desenvolvendo e desenrolando as partes do código.

