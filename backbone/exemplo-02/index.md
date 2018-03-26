---
title:       "Backbone exemplo 02: Views aninhadas"
description: Pequeno exemplo de script Backbone (JavaScript)  onde exploro views aninhadas.
capitulo:    backbone-exemplos
ordem:       2
---

Este é o segundo exemplo demonstrando o Backbone, ele é uma extensão do primeiro (o anterior). Por tanto, se você não
conseguir entender este código, aconselho a tentar entender o anterior.

Neste exemplo mostraremos como utilizar uma view aninhada (nested).

Nosso HTML continua o mesmo...

```html
<div class="container">
    <table class="table">
        <caption><button id="add" class="btn btn-success">Add list item</button></caption>
    </table>
</div>
```

E a interface também...

!["exemplo backbone"](img-tabela.png "exemplo backbone")

O que vemos de diferente é um visão separada para cada elemento `tr`, veja o código.

```javascript
// model
var Item = Backbone.Model.extend({
	defaults: {
    	part1: 'hello',
	    part2: 'world'
  	}
});

// collection
var List = Backbone.Collection.extend({
	model: Item
});

//
// View representando cada linha (`tr`) de nossa tabela
//
var ItemView = Backbone.View.extend({
  	tagName: 'tr',
	template: _.template("<td><%= id %></td><td><%= part1 %> <%= part2 %></td>"),
  	render: function() {
        // De onde vem "this.model" ?
        // esperamos que o model seja passado como parâmetro
        // ao extendermos a classe.
      	this.$el.html(this.template(this.model.attributes));
      	return this; // <--- atenção
    }
});

//
// Esta é a visão principal
//
var ListView = Backbone.View.extend({
    el: $('table'),

    events: {
        'click button#add': 'addItem'
    },

    initialize: function () {
        this.collection = new List();
        this.collection.on('add', this.appendItem, this);
    },

    addItem: function () {
        var item = new Item({
            id: (this.collection.length + 1)
        });
        this.collection.add(item);
    },

    // Função que renderiza cada linha.
    // Ela é a responsável por chamar a view filha
    appendItem: function (item) {
        var itemView = new ItemView({
          model: item
        });
      	this.$el.append(itemView.render().el);
    }
});

var listView = new ListView();
```