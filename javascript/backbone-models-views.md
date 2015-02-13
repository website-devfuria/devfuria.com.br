---
layout:      grid93-article
title:       Backbone - Models e Views
description: 
menu:        javascript-backbone
---


```javascript
//
// Model
//
Person = Backbone.Model.extend({
    initialize: function () {
        console.log('model inicializado');
    }
});

//
// View
//
var ViewFormulario = Backbone.View.extend({

    initialize: function () {
        // instanciando um novo modelo
        this.model = new Person();

        // Escutando o evento `change`.
        // A cada alteração no modelo a função
        // de callback `render()` será executada
        this.model.on('change', this.render);
    },

    render: function () {
        console.log('renderizou!');
    }
});

//
// Instanciamos a View
//
var view = new ViewFormulario();
```

A cada alteração no model a função de callback `render()` será executada.

Confirmamos isso com o trecho de código abaixo.

```javascript
app.view.model.set('name', 'flavio');
"renderizou!"
app.view.model.set('name', 'alexandre');
"renderizou!"
```