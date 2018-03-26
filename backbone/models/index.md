---
title:       Backbone Models
description: Aprenda o básico sobre Models no framework Backbone para JavaScript,  veremos as funções get(), set() e toJSON().
capitulo:    backbone-intro
ordem:       6
---

No paradigma MVC, os __models__ referem-se ao modelo, aos dados, as regras de negócio... no Backbone não é diferente.

Podemos definir um model como se fosse uma classe (posteriormente será instanciada) dessa forma:

```javascript
var Person = Backbone.Model.extend({ });
```

Ao definir a classe, poderemos utilizar todos os métodos disponíveis no Backbone, por exemplo o método `initialize()`.

```javascript
Person = Backbone.Model.extend({
	initialize: function(){
    	console.log("model inicializado");
  	}
});
```
Ao instanciarmos a classe, vemos o log da mensagem.

```javascript
var person = new Person({ name: "Thomas", age: 67});
// "model inicializado"
```


### Método set()

Podemos passar um objeto com os valores ao construtor, veja o exemplo seguinte.

```javascript
var person = new Person({ name: "Thomas", age: 67});
console.log(person.attributes)
// Object { name: "Thomas", age: 67 }
```

Poderíamos também utilizar o método `set()` passando o objeto com os dados ao método.

```javascript
var person = new Person();
person.set({ name: "Thomas", age: 67});
console.log(person.attributes)
// Object { name: "Thomas", age: 67 }
```

Ou ainda, podemos utilizar o método `set()` separadamente para cada propriedade.

```javascript
var person = new Person();
person.set('name', 'Thomas');
person.set('age', 67);
console.log(person.attributes)
// Object { name: "Thomas", age: 67 }
```


### Método get()

O método `get()` acessa o valor da propriedade, conforme nosso exemplo, temos...

```javascript
console.log(person.get('name'));
console.log(person.get('age'));
// "Thomas"
// 67
```




Outro exemplo
---

No exemplo abaixo estamos incluindo o método `log()` apenas para ilustrar que podemos incluir métodos definidos pelo
desenvolvedor.

```javascript
var Song = Backbone.Model.extend({
    name: '',
    compositor: '',
    log: function () {
        console.log('música: ' + this.get('name') + ', compositor: ' + this.get('compositor'))
    }
});
var music01 = new Song({
    name: 'Águas de março',
    compositor: 'Tom Jobim'
});
var music02 = new Song({
    name: 'Garota de Ipanema',
    compositor: 'Tom Jobim e Vinícius de Moraes'
})
var music03 = new Song({
    name: 'Aquarela',
    compositor: 'Toquinho'
})

```

Para vermos os resultados acrescentamos...

```javascript
console.log(music01.toJSON());
console.log(music02.toJSON());
console.log(music03.toJSON());
// Object { name: "Águas de março", compositor: "Tom Jobim" }
// Object { name: "Garota de Ipanema", compositor: "Tom Jobim e Vinícius de Moraes" }
// Object { name: "Aquarela", compositor: "Toquinho" }
```

Repare que método `toJSON()` não retorna uma string JSON e sim um objeto para ser convertido em JSON.

Pensando nisso, devemos utilizar o método `JSON.stringfy()` para obtermos strings JSON, veja abaixo.

```javascript
console.log(JSON.stringify(music01.toJSON()));
console.log(JSON.stringify(music02.toJSON()));
console.log(JSON.stringify(music03.toJSON()));
// "{"name":"Águas de março","compositor":"Tom Jobim"}"
// "{"name":"Garota de Ipanema","compositor":"Tom Jobim e Vinícius de Moraes"}"
// "{"name":"Aquarela","compositor":"Toquinho"}"
```

Por outro lado, podemos simplificar o código acima conforme demonstrado a seguir.

```javascript
console.log(JSON.stringify(music01));
console.log(JSON.stringify(music02));
console.log(JSON.stringify(music03));
// "{"name":"Águas de março","compositor":"Tom Jobim"}"
// "{"name":"Garota de Ipanema","compositor":"Tom Jobim e Vinícius de Moraes"}"
// "{"name":"Aquarela","compositor":"Toquinho"}"
```