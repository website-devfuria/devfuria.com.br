---
title:       "Backbone exemplo 01:  Template e os eventos da Collection"
description: Pequeno exemplo de script Backbone (JavaScript) onde exploro a questão do template e os eventos da collection.
capitulo:    backbone-exemplos
ordem:       1
ogimage:     img.png
---

Este é o primeiro exemplo que vemos do Backbone após termos visto todos os tópicos sobre o framework.

Neste exemplo utilizaremos templates e o evento `add` da coleção.

Também faremos uso do framework [bootstrap](http://getbootstrap.com/)

Ao clicar no botão "Add list item" o script incluirá um novo elemento `tr`, veja a imagem abaixo.

!["exemplo backbone"](img-tabela.png "exemplo backbone")

Abaixo vemos o trecho referente ao HTML.

```html
<div class="container">
    <table class="table">
        <caption><button id="add" class="btn btn-success">Add list item</button></caption>
    </table>
</div>
```

Abaixo vemos o código JavaScript.

Se você leu o tutorial sobre o Backbone, então o código abaixo deve lhe ser familiar.

```javascript
//
// Model
//
var Item = Backbone.Model.extend({
    defaults: {
        part1: 'hello',
        part2: 'world'
    }
});

//
// Collection
//
var List = Backbone.Collection.extend({
    model: Item
});

//
// View
//
var ListView = Backbone.View.extend({
    el: $('table'),

    //
    // template
    //
    template: _.template("<tr><td><%= id %></td><td><%= part1 %> <%= part2 %></td></tr>"),

    events: {
        'click button#add': 'addItem'
    },

    initialize: function () {

        // Ligamos o evento `add` na qual escuta cada modelo adicionado
        // a função "appendItem"
        this.collection = new List();
        this.collection.on('add', this.appendItem, this);

    },

    addItem: function () {
        var item = new Item({
            id: (this.collection.length + 1)
        });
        this.collection.add(item);
    },

    appendItem: function (item) {
        // olha como o template simplifica as coisas
        this.$el.append(this.template(item.attributes));
    }
});

var listView = new ListView();
```

Veja a [demo](/backbone/exemplo-01/backbone.html).