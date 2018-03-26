---
title:       Backbone Models e Eventos
description: Este artigo demonstra como funcionam os eventos dos modelos do framework Backbone para JavaScript
capitulo:    backbone-intro
ordem:       7
---

Este artigo demonstra como funcionam os eventos dos models (modelos) do framework Backbone.
Indicado para quem já conhece um mínimo do Backbone e/ou leu os artigos anteriores

Os modelos possuem eventos, irei comentar dois eventos: `change` e `change:[atributte]`, consulte a 
[documentação do Backbone](http://backbonejs.org/#Events-catalog) para ver a lista completa e eventos.

O evento `change` escutará as alterações ocorridas em qualquer propriedade do modelo.

O evento `change:[attribute]` escutará as alteração em determinada propriedade, não interferindo nas demais.

Para fazer a ligação enre o evento e a função de callback podemos utilizar uma dessa duas funções:
[listenTo()](http://backbonejs.org/#Events-listenTo) ou
[on()](http://backbonejs.org/#Events-on).

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