/**
 * Pequeno exemplo demonstrando o framework Backbone (JavaScript) 
 * personalizado para o site devfuria.com.br
 * 
 * Baseado no original de http://arturadib.com/hello-backbonejs/docs/3.html
 * 
 */

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