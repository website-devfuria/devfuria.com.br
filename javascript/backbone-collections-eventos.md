---
layout:      grid93-article
title:       Backbone - Collections e Eventos
description: Este artigo demonstra como funcionam os eventos das collections do framework Backbone (JavaScript)
menu:        javascript-backbone
---

Este artigo demonstra como funcionam os eventos das collections (coleções) do framework Backbone (JavaScript).
Indicado para quem já conhece um mínimo do Backbone e/ou leu os artigos anteriores

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
