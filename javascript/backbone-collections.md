---
layout:      grid93-article
title:       Backbone - collections
description: 
menu:        javascript-backbone
---

As collections são coleções de modelos (models).

Isso significa que, obviamente, teremos que criar alguns modelos antes de criarmos nossa coleção.

```javascript
//
// Um modelo simples
//
var Beatle = Backbone.Model.extend({
    defaults: {
        job: 'musician'
    }
});

//
// Instanciando cada modelo
//
var john   = new Beatle({firstName: 'John', lastName: 'Lennon'});
var paul   = new Beatle({firstName: 'Paul', lastName: 'McCartney'});
var george = new Beatle({firstName: 'George',lastName: 'Harrison'});
var ringo  = new Beatle({firstName: 'Ringo',lastName: 'Starr'});

//
// Criando nossa collection
//
var theBeatles = new Backbone.Collection([john, paul, george, ringo]);
```



Percorrendo a collection
---

Por natureza, uma coleção pode ser iterada, ou seja, percorrida.

Podemos percorrer a collection com a função `forEach()`, veja exemplo abaixo.

```javascript
//
// forEach()
//
theBeatles.forEach(function(model, index){
  console.log(index + " - " + model.get('lastName'));
});
```

Também podemos utilizar a função `each()` herdada da biblioteca [underscorejs](http://underscorejs.org/ "link-externo"), 
veja exemplo abaixo.

```javascript
//
// each()
//
theBeatles.each(function (model, index) {
    console.log(index + " - " + model.get('lastName'));
});
```

Ainda com a função `each()` da __underscore__, podemos utilizar de forma ligeiramente diferente, veja abaixo.

```javascript
//
// each() - forma diferente
//
_(theBeatles.models).each(function(model, index){
    console.log(index + " - " + model.get('lastName'));
});
```

Para os puristas, podemos utilizar um simples laço `for`, veja abaixo.

```javascript
//
// for
//
for (var i = 0; i < theBeatles.length; ++i) {
    console.log(i + ' - ' + theBeatles.at(i).get('lastName'));
}
```

Todos os exemplos acima chegam no mesmo resultado, veja:

    "0 - Lennon"
    "1 - McCartney"
    "2 - Harrison"
    "3 - Starr"




Eventos
---

Assim como as Views e os Models, as Collections também possuem __eventos__.

```javascript
//
// Model
//
var Beatle = Backbone.Model.extend({
    defaults: {
        job: 'musician'
    }
});

//
// Criando alguns models
//
var john   = new Beatle({ firstName: 'John', lastName: 'Lennon'});
var paul   = new Beatle({ firstName: 'Paul', lastName: 'McCartney'});
var george = new Beatle({ firstName: 'George', lastName: 'Harrison'});
var ringo  = new Beatle({ firstName: 'Ringo', lastName: 'Starr'});

//
// Definindo nossa collection
//
var theBeatles = new Backbone.Collection({
    model: Beatle
});

//
// Definindo uma função de callbak para o evento `add`
//
theBeatles.on('add', function (model) {
    console.log('something got added');
});

//
// Adicionando um elemento a coleção e, consequentemente,
// disparando o callback do evento `add`.
//
theBeatles.add([{ firstName: 'John', lastName: 'Lennon'}]);
// "alguma coisa foi adicionada"
```