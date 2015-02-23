---
layout:      grid93-article
title:       Backbone - Collections
description: Aprenda o básico sobre Collections  no framework Backbone (javascript)
menu:        javascript-backbone
---

As collections são coleções de modelos (models), portanto devemos adicionar modelos as coleções, veja exemplo abaixo.


```javascript
//
// Instanciando uma coleção
//
var colecao = new Backbone.Collection();

console.log(colecao.length) // 0

//
// Adicionando modelos
//
colecao.add([{id: 1, firstName: 'john',   lastName: 'Lennon'}])
colecao.add([{id: 2, firstName: 'paul',   lastName: 'McCartney'}])
colecao.add([{id: 3, firstName: 'george', lastName: 'Harrison'}])
colecao.add([{id: 4, firstName: 'ringo',  lastName: 'Starr'}])

console.log(colecao.length) // 4
```

Também podemos definir a classe da coleção para ser, posteriormente, instanciada, veja exemplo abaixo. Repare que, além
de utilizamos o método `extend()` do objeto `Backbone.Collection`, omitimos a palavra `new`. Ao definir a classe, 
aproveitamos para definir o método `initialize()`.

```javascript
//
// Definindo uma coleção
//
var Colecao = Backbone.Collection.extend({
    initialize:  function() {
        console.log('coleção inicializada');
    }
});

//
// Instanciando uma coleção
//
var colecao = new Colecao()
```
O código acima irá gerar a seguinte saída no console do navegador:

    "coleção inicializada"


Também podemos criar uma coleção a partir de um array de modelos, veja o exemplo abaixo. Ele faz bastante sentido, pois
se as collections são coleções de modelos, então teremos que criar alguns modelos antes de criarmos nossa coleção.


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
var john   = new Beatle({id: 1, firstName: 'john',   lastName: 'Lennon'});
var paul   = new Beatle({id: 2, firstName: 'paul',   lastName: 'McCartney'});
var george = new Beatle({id: 3, firstName: 'george', lastName: 'Harrison'});
var ringo  = new Beatle({id: 4, firstName: 'ringo',  lastName: 'Starr'});

//
// Criando nossa collection
// a partir de um array de modelos
//
var theBeatles = new Backbone.Collection([john, paul, george, ringo]);
```


### Método get()

O método get() acessa um modelo específico, mas para isso precisamos definir a propriedade `id`.

```javascript
var john = theBeatle.get(1);
console.log(john.attributes);
// Object { id: 1, firstName: "john", lastName: "Lennon" }
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

Repare que as propriedades `index` e `id` são distintas.



Eventos
---

Assim como as Views e os Models, as Collections também possuem __eventos__. Para uma collection, podemos definir os 
eventos listados a seguir:

- `add` quando um modelo é adicionado a uma coleção
- `remove` quando um modelo é removido de uma coleção
- `reset` quando todo o conteúdo da coleção é substituído
- `sort` quando coleção é reordenada. 

Consulte a documentação do [Backbone](http://backbonejs.org/#Events-catalog) para saber mais detalhes.

```javascript
//
// Definindo uma coleção
//
var TheBeatles = Backbone.Collection.extend({
    initialize: function () {
      
        // escutando o evento `add` da coleção
        this.on('add', function (model) {
            console.log('O beatle \'' + model.get('firstName') + '\' foi adicionado a coleção');
        });
      
    }
});

//
// Instanciando a coleção
//
var theBeatles = new TheBeatles();
// 

// Adicionando modelos
// 
theBeatles.add([{id: 1, firstName: 'john',   lastName: 'Lennon'}])
theBeatles.add([{id: 2, firstName: 'paul',   lastName: 'McCartney'}])
theBeatles.add([{id: 3, firstName: 'george', lastName: 'Harrison'}])
theBeatles.add([{id: 4, firstName: 'ringo',  lastName: 'Starr'}])
```

Lembrando que podemos criar a coleção sem antes defini-la. Isso implica em anexar o evento `add` após a classe ter sido
instanciada, veja exemplo abaixo.

```javascript
//
// Instanciando uma coleção
//
var theBeatles = new Backbone.Collection();

//
// Escutando o evento `add` da coleção
//
theBeatles.on('add', function (model) {
  console.log('O beatle \'' + model.get('firstName') + '\' foi adicionado a coleção');
});

//
// Adicionando modelos
// 
theBeatles.add([{id: 1, firstName: 'john',   lastName: 'Lennon'}])
theBeatles.add([{id: 2, firstName: 'paul',   lastName: 'McCartney'}])
theBeatles.add([{id: 3, firstName: 'george', lastName: 'Harrison'}])
theBeatles.add([{id: 4, firstName: 'ringo',  lastName: 'Starr'}])
```

Ambos os códigos acima irão gerar a seguinte saída no console do navegador:

    "O beatle 'john' foi adicionado a coleção"
    "O beatle 'paul' foi adicionado a coleção"
    "O beatle 'george' foi adicionado a coleção"
    "O beatle 'ringo' foi adicionado a coleção"
