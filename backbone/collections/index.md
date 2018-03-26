---
title:       Backbone Collections
description: Aprenda o básico sobre Collections no framework Backbone para JavaScript, veremos diversas forma de percorre uma coleção além de como ordenar uma collection.
capitulo:    backbone-intro
ordem:       9
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

### Visualizando a coleção

Uma maneira simples de visualizar a coleção no console do navegador é codificar (stringfy) os objetos no formato JSON,
para isso execute o comando abaixo.

```javascript
console.log(JSON.stringify(colecao.models));
```

O resultado do trecho acima é semelhante a...

    "[{"id":1,"firstName":"john","lastName":"Lennon"},
      {"id":2,"firstName":"paul","lastName":"McCartney"},
      {"id":3,"firstName":"george","lastName":"Harrison"},
      {"id":4,"firstName":"ringo","lastName":"Starr"}]"




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

Também podemos utilizar a função `each()` herdada da biblioteca [underscorejs](http://underscorejs.org/),
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




Ordenando a coleção
---

Ordenar uma coleção é uma funcionalidade muito útil, principalmente porte podemos escutar o evento `sort`, ou seja, a
cada nova ordenação podemos executar uma função de callback.

Para ordernar a coleção precisamos evocar o método collection.sort, masantes disso é preciso dizer qual campo servirá
de referência. Fazemos isso atribuindo um string com o nome do campo a propriedade `comparator` da coleção.

```javascript
// Instanciando a coleção
var colecao = new Backbone.Collection();

// Adicionando os modelos
colecao.add([{id: 1, firstName: 'john',   lastName: 'Lennon'}])
colecao.add([{id: 2, firstName: 'paul',   lastName: 'McCartney'}])
colecao.add([{id: 3, firstName: 'george', lastName: 'Harrison'}])
colecao.add([{id: 4, firstName: 'ringo',  lastName: 'Starr'}])
```

Abaixo vemos a coleção em seu estado original.

```javascript
//
// Estado original
//
console.log(JSON.stringify(colecao));
// "[{"id":1,"firstName":"john","lastName":"Lennon"},
// {"id":2,"firstName":"paul","lastName":"McCartney"},
// {"id":3,"firstName":"george","lastName":"Harrison"},
// {"id":4,"firstName":"ringo","lastName":"Starr"}]"
```

Abaixo vemos a coleção ordenada pela propriedade `firstName`.

```javascript
//
// ordenado por `firstName`
//
colecao.comparator = "firstName";
colecao.sort();
console.log(JSON.stringify(colecao));
// "[{"id":3,"firstName":"george","lastName":"Harrison"},
// {"id":1,"firstName":"john","lastName":"Lennon"},
// {"id":2,"firstName":"paul","lastName":"McCartney"},
// {"id":4,"firstName":"ringo","lastName":"Starr"}]"


```

Abaixo vemos a coleção ordenada pela propriedade `lastName`. Coincidentemente, o resultado é igual ao anterior.

```javascript
//
// ordenado por `lastName`
//
colecao.comparator = "lastName";
colecao.sort();
console.log(JSON.stringify(colecao));
// "[{"id":3,"firstName":"george","lastName":"Harrison"},
// {"id":1,"firstName":"john","lastName":"Lennon"},
// {"id":2,"firstName":"paul","lastName":"McCartney"},
// {"id":4,"firstName":"ringo","lastName":"Starr"}]"

```