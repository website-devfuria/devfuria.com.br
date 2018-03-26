---
title:       "Backbone Unindo Collections e Views"
description: Artigo, com exemplos, que mostra como unir  uma coleção (collections) a uma visão (view)  no framework Backbone para JavaScript
capitulo:    backbone-intro
ordem:       11
---

Este artigo é um exemplo de integração da Collections (coleção) e da View (visão) do framework Backbone. Indicado para
quem já conhece um mínimo do Backbone e/ou leu os artigos anteriores. O objetivo é demonstrar como podem interagir a
collection e a view. Faremos isso criando um lista (`ul`) e inserindo alguns itens.

Nosso HTML inicial será como o abaixo.

```html
<div id="app-container">
    <h2>The Beatles:</h2>
    <ul id="lista-container"></ul>
</div>
```

No JavaScript precisaremos criar uma coleção  e alguns models. Após devemos definir nossa view e no método `render()`
percorrer os elementos da coleção e a cada iteração acrescentar um elemento da lista (`li`).

Se você acompanhou os artigos anteriores sobre o Backbone, então o código abaixo dispensa maiores explicações.

```javascript
//
// Collection
//
var theBeatles = new Backbone.Collection();

//
// Models
//
theBeatles.add([{id: 1, firstName: 'john',   lastName: 'Lennon'}]);
theBeatles.add([{id: 2, firstName: 'paul',   lastName: 'McCartney'}]);
theBeatles.add([{id: 3, firstName: 'george', lastName: 'Harrison'}]);
theBeatles.add([{id: 4, firstName: 'ringo',  lastName: 'Starr'}]);

//
// View
//
var AppView = Backbone.View.extend({
    el: $("#app-container"),
    initialize: function () {
        this.$lista = $('#lista-container');
        this.render();
    },
    render: function() {
        var that = this;
        theBeatles.forEach(function(model, index){
            that.$lista.append('<li>' + model.get('id') +
                               ' - ' + model.get('firstName') +
                               ' ' + model.get('lastName') + '</li>');
        });
    }
});

//
// Instanciando a visão (view)
//
var app_view = new AppView();
```

O resultado deve ser semelhante a imagem abaixo.

!["Resultado gerado pelo framework Backbone"](collections-e-views.png "Resultado gerado pelo framework Backbone")

Veja a demo no [jsfiddle.net/flaviomicheletti/hcL4jg6v/](http://jsfiddle.net/flaviomicheletti/hcL4jg6v/)





Um exemplo mais completo
---

O exemplo anterior nós criamos uma coleção e mostramos o resultado na view, algo bem trivial.

Neste exemplo daremos um passo a frente, já sabemos como funcionam os eventos das coleções (collections), então vamos
atribuir um função de callback da visão a cada modelo adicionado na coleção. Em outras palavras, a coleção fica escutando
o evento `add` e executará uma função de callback cada vez que inserirmos um modelo.

```javascript
//
// Model
//
Friend = Backbone.Model.extend({});

//
// Collection
//
Friends = Backbone.Collection.extend({
    // Repare que estamos fazendo uso do segundo parâmetro "options"
    initialize: function (models, options) {
        // Para cada modelo adicionado nesta coleção
        // executamos a função callback "view.render()"
		this.on('add',  options.view.render, this);
    }
});

//
// View
//
AppView = Backbone.View.extend({
    el: $('body'),
    initialize: function () {
        // Criamos a coleção e criamos um referência a esta visão
        // passando como segundo parâmetro as opções (options).
        this.friends = new Friends(null, {view: this});
    },
    events: {
        'click #add-friend': 'showPrompt',
    },
    showPrompt: function () {
        // Que coisa mais ultrapassada é essa ?
        var friend_name  = prompt('Who is your friend?');
        // Criamos um objeto com o nome fornecido pelo usuário
        var friend_model = new Friend({name: friend_name});
        // Adicionamos e modelo a coleção e, consequentemente,
        // disparamos o callback definido na collection.
        this.friends.add(friend_model);
    },
    //
    // De onde vem o parâmetro 'model' ?
    //
    render: function (model) {
        $('#friends-list').append('<li>' + model.get('name') + '</li>');
    }
});

// Aqui é o ponto inicial
var appview = new AppView;
```

Não podemos esquecer da parte referente ao HTML.

```html
...
<body>
    <button id="add-friend">Add Friend</button>
    <ul id="friends-list"></ul>
</body>
...
```

Este exemplo é original do artigo [Backbone  introduction](http://thomasdavis.github.io/2011/02/01/backbone-introduction.html)

Os trechos de código JavaScript não comentados, devem ser triviais para o leitor (veja os artigos anteriores).

O único trecho que acredito deixar dúvidas é a função `render()` da view, a questão é "de onde vem o parâmetro 'model'" ?

O modelo é retransmitido como parâmetro para o a função de callback pela coleção, veja código abaixo.

```javascript
Friends = Backbone.Collection.extend({
    // Lembrando que ao inicializar a coleção podemos passar como
    // primeiro parâmetro: um lista com os modelos e
    // segundo parâmetro:  um objeto com opções
    initialize: function (models, options) {
        this.on('add',  options.callback, this);
    }
});

options = {
    // O parâmetro `model` será transmitido
    // ao callback  pela coleção quando disparamos
    // o evento através da função `add()`
    callback: function (model) {
        console.log(model.get('name'));
    }
}

// Criamos a coleção com uma lista vazia (primeiro parâmetro) e
// como segundo parâmetro passamos o nosso objeto de opções que
// contém o callback
var friends = new Friends(null, options);

// Ao adicionar um modelo `{name: "fulano"}` ele é retransmitido
// como parâmetro para a função de callback
friends.add({name: "fulano"});