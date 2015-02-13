---
layout:      grid93-article
title:       Backbone - Models
description: Aprenda o básico sobre Models no framework Backbone (javascript)
menu:        javascript-backbone
---

O __models__ refere-se ao modelo, aos dados, as regras de negócio... no Backbone não é diferente.

Podemos definir um model como se fosse uma classe (posteriormente será instanciada) dessa forma:

```javascript
Model = Backbone.Model.extend({});
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

O método `get()` acessa o valor da propriedade. Conforme nosso exemplo, temos...

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


Eventos
---

Os modelos possuem eventos. Vou comentar dois eventos: `change` e `change:[atributte]`, consulte a 
[documentação do Backbone](http://backbonejs.org/#Events-catalog "link-externo") para ver a lista completa e eventos.

O evento `change` escutará as alterações ocorridas em qualquer propriedade do modelo.

O evento `change:[attribute]` escutará as alteração em determinada propriedade, não interferindo nas demais.

Para fazer a ligação enre o evento e a função de callback podemos utilizar uma dessa duas funções:
[listenTo()](http://backbonejs.org/#Events-listenTo "link-externo") ou
[on()](http://backbonejs.org/#Events-on "link-externo").

Eu vou utilizar a função `on()`.

```javascript
//
// Um modelo simples de exemplo
//
var Person = Backbone.Model.extend({
    
    // Valores padrão que são atribuídos ao instanciarmos o objeto
    defaults: {
        name: '',
        age: 0
    },

    // 
    initialize: function(){

        // Escutando as alterações na propriedade `name`
        this.on("change:name", function(model){
            console.log("Alterando name para: " + model.get('name'));
        });

        // Escutando as alterações na propriedade `age`
        this.on("change:age", function(model){
            console.log("Alterando age para: " + model.get('age'));
        });

    }
});

// Instanciando
//
// Repare que no construtor o evento NÂO é disparado.
var person = new Person({ name: "Micheletti", age: 20});

// Ao alterar o modelo...
person.set({ name: "Flavio"});
person.set({ name: "Alexandre", age: 40});

// ...percebemos (no console do navegador) os
// eventos sendo disparados:
//
// "Alterando name para: Flavio"
// "Alterando name para: Alexandre"
// "Alterando age para: 40"

```


Próximo artigo
--

- [Backbone - Unindo Models e Views](/javascript/backbone-models-views/)