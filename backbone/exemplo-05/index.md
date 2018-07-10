---
title:       "Backbone exemplo 05:  Duas visões e uma função de callback"
description: Exemplo de código Backbone (JavaScript) que cria uma combobox  utilizando-se duas visões e uma função de callback.
capitulo:    backbone-exemplos
ordem:       5
---

Este exemplo é a evolução do anterior, portanto, caso acho um pouco complicado você terá a opção de ler o anterior para
falicitar seu aprendizado.

Neste exemplo estmaos construindo uma combobox com o framework Backbone (JavaScript). Desta vez criaremos a combo
utilizando-se de duas views. O HTML é bastante simples...

```html
...
...
<body>
    <select></select>
...
...
</body>
```

Em nosso script notamos duas visões.

A view `OptionView` cria um elemento na memória através do atributo `tagName`, no
caso estamos criando a tag `option`. O desafio foi criar o atributo para a tag, na verdade é bem simples, utilizamos
a jQuery para isso `this.$el.attr('value', this.model.id)` (veja a função `render()`). Mas fica a pergunta: podemos
fazer isso de outra forma?

Já a view principal `Combo` ficou mais simples, uma vez que retiramos os códigos que representavam cada __option__. A
única observação é para a função `change()` que está delegando a chamada para a função `combo.eventChange()`. Estamos
caminhando para a criação de um pequeno módulo chamado combo, quero dizer que o código está ficando maduro e aponta para
um pequeno módulo contrutor de combobox. :)

```javascript
var Option = Backbone.Model.extend({
    defaults: {
        id: 0,
        label: ""
    }
});

var Options = Backbone.Collection.extend();

//
// View que representa cada option
//
var OptionView = Backbone.View.extend({
    tagName: 'option',
    template: _.template('<%= label %>'),
    render: function() {
        //
        // Olha como criamos o atributo `value`
        //
        this.$el.attr('value', this.model.id)
        this.$el.html(this.template(this.model.attributes));
        return this;
    }
});

var Combo = Backbone.View.extend({
    el: $('select'),
    initialize: function () {
        this.collection = new Options(null, this);
        this.collection.on('add', this.render, this);
    },
    events: {
        'click option':   'change',
    },
    add: function(option){
        this.collection.add(option);
    },
    render: function (model) {
        var option_view = new OptionView({model: model});
        this.$el.append(option_view.render().el);
    },
    change: function () {
        var index = this.el.selectedIndex;
        var value = this.el.options[index].value;
        var text  = this.el.options[index].text;

        //
        // Delegamos para a função abaixo...
        //
        this.eventChange(index, value, text);
    }
});


//
// Criando a combo
//
var combo = new Combo();

// adicionando "options"
combo.add(new Option());
combo.add(new Option({id: 'bra', label: "Brasil"}));
combo.add(new Option({id: 'chl', label: "Chile"}));
combo.add(new Option({id: 'arg', label: "Argentina"}));

// Definindo a ação quando o valor da combo for trocado
combo.eventChange = function(index, value, text){
    console.log("index: " + index+ ",  value: " + value + ", text: " + text);
};
```