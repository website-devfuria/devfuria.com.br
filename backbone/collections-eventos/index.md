---
title:       Backbone Collections e Eventos
description: Este artigo demonstra como funcionam os eventos das collections do framework Backbone para JavaScript, veremos os eventos add, remove, sort e reset.
capitulo:    backbone-intro
ordem:       10
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





Outros eventos
---

No exemplo abaixo exploramos, além do evento `add`, os eventos `remove`, `sort`  e `reset`.

```javascript
// definindo a classe
var Colecao = Backbone.Collection.extend({
    initialize: function () {

        // ao adicionar um model
        this.on('add', function () {
            console.log('added')
        });

        // ao remover um modelo
        this.on('remove', function () {
            console.log('removed')
        });

        // ao ordenar a coleção
        this.on('sort', function () {
            console.log('sorted')
        });

        // ao 'resetar' a coleção
        this.on('reset', function () {
            console.log('was-reset')
        });
    }
})

// Instanciando
var colecao = new Colecao();
```

O trecho abaixo é responsável por disparar os eventos mencionados.

```javascript

colecao.add({id: 0})
// "added"

colecao.add({id: 1})
// "added"

colecao.add({id: 2})
// "added"

colecao.remove(0);
// "removed"

colecao.comparator = "firstName";
colecao.sort();
// "sorted"

colecao.reset();
// "was-reset"
```




Eventos entre Models e Collections
---

Abaixo vemos um exemplo de interação entre modelos (models) e coleções (collections).

Em nosso exemplo (The Beatles), o primeiro nome está iniciando com letra minúscula, queremos alterar cada uma para maiúscula.


Vamos imaginar que a alteração em um modelo devesse disparar um evento na coleção. Em capítulos anteriores vimos que o
evento `change` pode ser atrelado a um modelo. Neste exemplo, veremos como ele pode ser atrelado a todos os modelos.

O código escuta o evento `change:[atributte]` em todos os models da coleção.

```javascript
var colecao = new Backbone.Collection();

colecao.add([{id: 1, firstName: 'john',   lastName: 'Lennon'}]);
colecao.add([{id: 2, firstName: 'paul',   lastName: 'McCartney'}]);
colecao.add([{id: 3, firstName: 'george', lastName: 'Harrison'}]);
colecao.add([{id: 4, firstName: 'ringo',  lastName: 'Starr'}]);

colecao.on("change:firstName", function(model) {
    console.log("Alterado: " + model.get('firstName') + " " + model.get('lastName'));

    //
    // função para renderizar a visão (view)
    //
});
```

OK, agora a cada alteração realizada em qualquer um dos modelos será disparado o evento da coleção. Vale lembrar que
a coleção poderia chamar um função para renderizar a visão (view).

No trecho de código abaixo vemos as alterações ocorrendo, eu crie uma variável denominada `beatle` só para tornar o
código mais didático (mais fácil entendimento), no mundo real ela não existiria.

```javascript
// Esta será uma variável auxiliar.
var beatle = {}

beatle = colecao.get(1);
beatle.set('firstName', 'John');

beatle = colecao.get(2);
beatle.set('firstName', 'Paul');

beatle = colecao.get(3);
beatle.set('firstName', 'George ');

beatle = colecao.get(4);
beatle.set('firstName', 'Ringo');
```

O código acima produzirá a seguinte saída no console do navegador:

    "Alterado: John Lennon"
    "Alterado: Paul McCartney"
    "Alterado: George  Harrison"
    "Alterado: Ringo Starr"
