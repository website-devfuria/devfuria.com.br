---
title:       Backbone Views e Templates
description: Artigo que demonstra o funcionamento dos templates nas views do framework Backbone para JavaScript
capitulo:    backbone-intro
ordem:       3
---

Este artigo é um segundo passo com as views do framework Backbone. Nele veremos o que são templates, códigos de exemplo 
e como armazenar templates no próprio arquivo HTML.

Podemos dizer que os templates são pequenos trechos de HTML controlados pela View.

As views devem trabalhar alinhadas a um ou mais templates.

Iniciamos um template a partir da biblioteca __underscore__ dessa forma: `_.template()`.

```javascript
var ViewExemplo = Backbone.View.extend({
    el: $("body"),
    // Definimos o template
    template: _.template("<%= content %>"),
    initialize: function() {
        this.render();
    },
    render: function() {
        // Por curiosidade, 
        // desabilite a linha abaixo e veja qual será a saída no console.
        // console.log(this.template({content: 'estudando views do backbone'}))

        // Renderizando o HTML
        this.$el.html(this.template({content: 'estudando views do backbone'}));
        // A linha acima, codificada deste jeito, está um pouco ilegível
        // veja o próximo exemplo como é mais claro, apesar de utilizar mais variáveis
    }
});
var view1 = new ViewExemplo();
```

O exemplo abaixo é semelhante ao de cima, as alterações ocorrem na função `render`. Criamos variáveis extras (`dados` e
`html`) para tornar o exemplo e o próprio código mais significativo.

```javascript
    ...
    render: function() {

        // Criamos uma variável para acomodar nossa fonte de dados
        var dados = {content: 'estudando views do backbone'};

        // Evocamos o método `template()` que retornará nosso HTML (como string)
        // criado a partir da variável `dados`
        var html = this.template(dados);

        // Renderizando o HTML
        this.$el.html(html);
        // Agora sim, temos uma linha muito mais legível!

    }
    ...
```


### Outra perspectiva

Neste exemplo, vamos utilizar a propriedade `tagName` no lugar da propriedade `el`.

Também mudamos um pouco o template e, consequentemente, o método `render`.

Mas a diferença está em como vemos o resultado. Ao invés de renderizar a view, mostramos o HTML gerado no console
do navegador.

```javascript
var ViewExemplo = Backbone.View.extend({
    tagName: 'body',
    template: _.template("<h2><%= title %></h2><p><%= content %></p>"),
    render: function() {
      
      	var dados = {
            title: "Título Qualquer",
            content: "Conteúdo qualquer"
        }
        
        this.$el.html(this.template(dados));
    }
});

//
// Aqui está a diferença!
//

// Instanciamos normalmente, mas...
var view1 = new ViewExemplo();  

// ...como não definimos o método `initialize`
// temos que evocar o método `render()`
view1.render();

// e mostramos o resultado no console do navegador
console.log(view1.el);
```

E o resultado é semelhante a este aqui:

```html
<body>​
    <h2>​Título Qualquer​</h2>​
    <p>​Conteúdo qualquer​</p>​
</body>​
```

Uma observação, o resultado acima foi obtido do console do Chrome, o console do FireFox mostra apenas `<body>​`, mas você
pode clicar em cima e checar as demais propriedades, inclusive a propriedade `childNodes`.


Templates armazenados no próprio arquivo HTML
---

Uma outra forma de utilizar templates é armazenado-os no mesmo arquivo HTML.

Criamos templates mais elaborados utilizando-se a tag `<script>` junto com a propriedade `type` configurada com o valor
`text/template`, veja:

    <script type="text/template">

Tal propriedade não será reconhecida pelos navegadores e o HTML inserido entre a tag `<scrip>` não será renderizado, ou
seja, não será visível.

Para exibir o template, ou melhor, renderizar o template, precisaremos de uma tag extra que servirá como um "container".

Vejamos o exemplo abaixo, o template é denominado `formulario-template` e será renderizado na tag container denominada
`formulario-container`.

```html
    ...
    <body>

        <!-- Template -->
        <script type="text/template" id="formulario-template">
          <label>Pesquisar</label>
          <input type="text" id="txtTermo" />
          <input type="button" id="btnBuscar" value="Buscar" />
        </script>

        <!-- Container onde o template será renderizado -->
        <div id="formulario-container"></div>
    ...
```

O código para recuperar elemento `script` utiliza-se da função `.html()` da biblioteca jQuery.

    $("#formulario-template").html()

Passamos o resultado da função para o método `_.template()` da Underscore e o resultado deste, por sua vez, poderá ser 
passado para `this.$el.html()`;

    _.template( $("#formulario-template").html(), {} )

```javascript
var PesquisaView = Backbone.View.extend({
    // Este é o elemento que servirá de container
    // para exibirmos o template
    el: $("#formulario-container"),
    initialize: function(){
      this.render();
    },
    render: function(){

        // Recuperamos o template através da jQuery e
        // passamos o resultado para a função `_.template` da Underscore
        this.template = _.template( $("#formulario-template").html(), {} );

        // Renderizando o HTML
        this.$el.html( this.template );
    }
});
var pesquisa_view = new PesquisaView();
```