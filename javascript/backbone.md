---
layout:      grid12-article
title:       Backbone - Views
description: 
---

Isto é um rascuncho...

Backbone é um framework para Javascript.

Abaixo temos um arquivo HTML que nos servirá de esqueleto (matriz) para testar o framework Backbone.

```html
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://documentcloud.github.com/underscore/underscore-min.js"></script>
        <script src="http://documentcloud.github.com/backbone/backbone-min.js"></script>
        <script type="text/javascript">

        ...
        ... seu código
        ...

        </script>
    </body>
</html>
```


Primeiro passo com as views
---

O código abaixo define um módulo de visão (view), ele é nosso ponto de partida.

```javascript
var ViewExemplo = Backbone.View.extend({

});
```

Precisamos definir os métodos do objeto View. 

Vamos definir, por exemplo, o método `initialize()` que sempre será executado ao instanciarmos a view.

```javascript
var ViewExemplo = Backbone.View.extend({
    initialize: function() {
        document.write('estudando views do backbone');
    }
});
```

Para surtir efeito, criamos a instância dessa forma:

```javascript
var view1 = new ViewExemplo();
```


Juntando tudo, temos o menor exemplo para utilizarmos as views do Backbone. 

```javascript
//
// Nosso módulo da visão
//
var ViewExemplo = Backbone.View.extend({

    // O método `initialize` sempre será executado
    // ao instanciarmos a class View
    initialize: function() {
        // Vamos escrever algo básico em nossa página HTML
        document.write('estudando views do backbone');
    }
});

// Instanciamos o módulo.
var view1 = new ViewExemplo();
// Após a execução da linha acima, poderemos ver
// o resultado renderizado no navegador.
```



Indo adiante com as views
---

O exemplo abaixo é uma extensão do anterior, estamos utilizando a função `render` para gerar o conteúdo.

```javascript
var ViewExemplo = Backbone.View.extend({
    initialize: function() {
        this.render();
    },
    render: function() {
        document.write('estudando views do backbone');
    }
});
var view1 = new ViewExemplo();
```

No próximo exemplo, estamos fazendo uso da propriedade `el`, dentro do objeto view a propriedade pode ser acessada dessa
forma `$(this.el)`...

```javascript
var ViewExemplo = Backbone.View.extend({
    el: $("body"),
    initialize: function() {
        this.render();
    },
    render: function() {
        // Atente para esta linha
        $(this.el).html("estudando views do backbone");
    }
});
var view1 = new ViewExemplo();
```

...mas o correto seria utilizar a propriedade diretamente  como mostrado abaixo.

```javascript
var ViewExemplo = Backbone.View.extend({
    el: $("body"),
    initialize: function() {
        this.render();
    },
    render: function() {
        // Essa é a forma mais adequada
        // para referenciar o controle
        this.$el.html("estudando views do backbone");
    }
});
var view1 = new ViewExemplo();
```



Templates
---

As views devem trabalhar alinhadas a um template.

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

// como não definimos o método `initialize`
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
seja, não será vizível.

Para exibir o template, ou melhor, renderizar o template, precisaremos de uma tag extra com função de "container".

Vejamos o exemplo abaixo, o template é denominado `search-template` e será renderizado na tag container denominada
`search-container`.

```html
    ...
    <body>

        <!-- Template -->
        <script type="text/template" id="search-template">
          <label>Search</label>
          <input type="text" id="search-input" />
          <input type="button" id="search-button" value="Search" />
        </script>

        <!-- Container onde o template será renderizado -->
        <div id="search-container"></div>
    ...
```

O código para recuperar elemento `script` utiliza-se da função `.html()` da biblioteca Jquery.

    $("#search-template").html()

Passamos o resultado da função para o método `_.template()` da underscore e o resultado deste, por sua vez, poderá ser 
passado para `this.$el.html()`;

    _.template( $("#search-template").html(), {} )

```javascript
var SearchView = Backbone.View.extend({
    // Este é o elemento que servirá de container
    // para exibirmos o template
    el: $("#search-container"),
    initialize: function(){
      this.render();
    },
    render: function(){

        // Recuperamos o template através da Jquery e
        // passamos o resultado para a função `_.template` da Underscore
        this.template = _.template( $("#search-template").html(), {} );

        // Renderizando o HTML
        this.$el.html( this.template );
    }
});

// Instanciamos a view
var search_view = new SearchView({ );
```


### Delegando eventos

Temos um botão em nosso template, como atribuiremos um evento a ele ?

Os templates da Backbone possuem o método [events()](http://backbonejs.org/#View-delegateEvents "link-externo"), o 
"formato" deve seguir o esquema abaixo.

```javascript
    ...
    events: {
        "tipo-de-envento"              : "função de callback",
        "tipo-de-envento id-elemento"  : "função de callback",
        etc...
      },
    ...
```

Exemplo:

```javascript
    ...
    events: {
        "dblclick"                : "open",
        "click .icon.doc"         : "select",
        "contextmenu .icon.doc"   : "showMenu",
        "click .show_notes"       : "toggleNotes",
        "click .title .lock"      : "editAccessLevel",
        "mouseover .title .date"  : "showTooltip"
    },

    ...
```

Retomando o nosso exemplo anterior de template, acrescentamos o evento `click` ao botão `#searchInput`, veja o código.

```javascript
var SearchView = Backbone.View.extend({
    el: $("#search-container"),  
    initialize: function(){
        this.render();
    },
    render: function(){
        this.template = _.template( $("#search-template").html(), {} );
        this.$el.html( this.template );
    },
    //
    // Delegando eventos
    //
    events: {
        // Evento click para o único botão do template
        // executamos o callback `doSearch` quando o evento é disparado
        "click input[type=button]": "doSearch"
    },
    //
    // Função de callback para o evento do botão
    //
    doSearch: function( event ){
        console.log( "Search for " + $("#searchInput").val() );
    }  
  
});
var search_view = new SearchView();
```