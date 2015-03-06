---
layout:      grid93-article
title:       Backbone - exemplo
description: 
menu:        javascript-backbone
---


```html
<table>
    <caption><button id="add">Add list item</button></caption>
</table>
```


```javascript
//
//
//
var Item = Backbone.Model.extend({
  defaults: {
    part1: 'hello',
    part2: 'world'
  }
});

//
//
//
var List = Backbone.Collection.extend({
  model: Item
});

//
//
//
var ListView = Backbone.View.extend({
    el: $('table'),

    //
    //
    //
    template: _.template("<tr><td><%= id %><td><%= part1 %> <%= part2 %></td>"),


    events: {
        'click button#add': 'addItem'
    },
    initialize: function () {

        //
        //
        //
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
        this.$el.append(this.template(item.attributes));
    }
});

var listView = new ListView();
```