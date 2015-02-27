---
layout:      grid93-article
title:       Backbone - Sincronizando um model (modelo)
description: 
menu:        javascript-backbone
---



```javascript
Person = Backbone.Model.extend({
    url: function() {
        return 'person/?id=' + this.get('id');
    }
});
```


### Read - fetch()


```javascript
var p1 = new Person({id: 1});

p1.fetch({
    success: function (modeloResposta) {
        console.log("OK");
        // estamos exibindo o retorno da requisição
        console.log(modeloResposta.get('name'));
    },
    error: function (model, xhr, options) {
        console.log("Erro");
    }
});

// Obs: Neste trecho não adiantaria executar `p1.get('name')` pois
// a requisição AJAX é assíncrona, portanto, a execução do
// script continuará independente da resposta.
console.log(typeof p1.get('name')); // "undefined"

```



### Create - save()


```javascript
//
// POST (para inserir)
//
var p1 = new Person({name: 'flavio'});

p1.save({}, {
  success: function() {
    console.log('OK');
  }
});
```


### Update - save()

```javascript
//
// PUT (para atualizar)
//
var p1 = new Person({id: 1, name: 'flavio'});

p1.save({}, {
  success: function() {
    console.log('OK');
  }
});
```

    Backbone.emulateHTTP = true;


