---
layout:      grid12-article
title:       Backbone - Views e eventos
description: 
---

Aprenda a delegar eventos.

Temos um botão em nosso template, como atribuiremos um evento a ele ?

Os templates do Backbone possuem o método [events()](http://backbonejs.org/#View-delegateEvents "link-externo"), o 
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

Retomando ao nosso exemplo de template, acrescentamos o evento `click` ao botão `#searchInput` conforme o seguinte código.

```javascript
var SearchView = Backbone.View.extend({
    el: $("#formulario-container"),  
    initialize: function(){
        this.render();
    },
    render: function(){
        this.template = _.template( $("#formulario-template").html(), {} );
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
        console.log( "Buscar por " + $("#txtTermo").val() );
    }  
  
});
var search_view = new SearchView();
```