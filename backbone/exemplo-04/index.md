---
title:       "Backbone exemplo 04: Combobox"
description: Exemplo de código do framework Backbone (JavaScript) que cria  uma combobox (o elemento select da HTML)
capitulo:    backbone-exemplos
ordem:       4
---

Este é um exemplo de utilização do framework Backbone (JavaScript) onde criamos uma __combobox__, elemento HTML 
__select__.

Nosso HTML é bem simples e deverá conter o elemento __select__.

```html
...
...
<body>
    <select></select>
...
...
</body>
```

Em nosso JavaScript começamos definindo um modelo e uma coleção.

Já a visão tem como elemento principal o próprio __select__ (`el: $('select'),`) e, portanto, os eventos devem ser 
anexados aos elementos filhos, no caso, as __options__, por isso fazemos `'click option':   'change',`.

Interessante notar que o evento click das options estão funcionando como o evento change da combo.

A partir deste ponto não há novidades, o método `add()` que adiciona uma option dispara o evento da coleção 
com o mesmo nome (`add`) e este, por sua vez, dispara o evento de renderização da view (`this.render`). Ou seja, a cada
inclusão de um opção a combo e atualizada. Veja no final do script o momento no qual criamos a combo, muito provavelmente
colocaríamos tal trecho de código em um função qualquer para ser executada na inicialização da página.


```javascript
Option = Backbone.Model.extend({
    defaults: {
        id: 0,
        label: ""
    }
});

Options = Backbone.Collection.extend();

var Combo = Backbone.View.extend({
    el: $('select'),
    template: _.template('<option value="<%= id%>" ><%= label %></option>'),

    // Na inicialização unimos a coleção e a visão e
    // também definimos o evento `add` para executar
    // o callback `this.render`
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
        this.$el.append(this.template(model.attributes));
    },
    // Este método é executado a cada click na combo (select).
    // Com as informações obtidas poderíamos, inclusive,
    // realizar uma requisação AJAX, por exemplo.
    change: function () {
        var index = this.el.selectedIndex;
        var value = this.el.options[index].value;
        var text  = this.el.options[index].text;
        console.log("index: " + index+ ",  value: " + value + ", text: " + text);
    }
});

//
// Criando a combobox (select) 
//
var combo   = new Combo();
combo.add(new Option());
combo.add(new Option({id: 'bra', label: "Brasil"}));
combo.add(new Option({id: 'chl', label: "Chile"}));
combo.add(new Option({id: 'arg', label: "Argentina"}));
```

Se tiver dúvidas quanto ao funcionamento utilize o espaço de comentário abaixo.