---
title:       Backbone Views
description: Artigo para aprender como as  Views do framework Backbone (JavaScript) funcionam.
capitulo:    backbone-intro
ordem:       2
---

Este artigo é um primeiro passo com as views do framework e, também, um primeiro contato com o próprio framework.

As __Views__ são as partes de seu programa que, normalmente, podem ser reutilizados. Provavelmente, terão alguns eventos 
atrelados e também estarão associadas a um __Modelo__ de dados.

Uma view pode incluir outras views aninhas e também pode ter nenhum, um ou vários templates.

Os __templates__ são as partes HTML que compõem a View. Para facilitar o entendimento, tenha em mente o seguinte:

- Templates nos lembram pequenos trechos em HTML
- Views nos lembra um objeto em JavaScript que controla um intrínseco conjunto de templates.



### Criando e definindo uma View

O código abaixo define um objeto de visão (view), ele é nosso ponto de partida.

```javascript
var ViewExemplo = Backbone.View.extend({

});
```

Agora, precisamos definir os métodos do objeto View. Vamos definir, por exemplo, o método `initialize()` que sempre é
executado ao instanciarmos a view.

```javascript
var ViewExemplo = Backbone.View.extend({
    initialize: function() {
        document.write('estudando views do backbone');
    }
});
```
Para surtir efeito, criamos a instância dessa forma:

```javascript
var view1 = new ViewExemplo();
```

Juntando tudo, temos um exemplo minimalista para utilizarmos as views do Backbone. 

```javascript
//
// Nosso objeto da visão
//
var ViewExemplo = Backbone.View.extend({

    // O método `initialize` sempre será executado
    // ao instanciarmos a classe View
    initialize: function() {
        // Vamos escrever algo básico em nossa página HTML
        document.write('estudando views do backbone');
    }
});

// Instanciamos o módulo.
var view1 = new ViewExemplo();
// Após a execução da linha acima, poderemos ver
// o resultado renderizado no navegador.
```


### Método render()

O exemplo abaixo é uma extensão do anterior, estamos utilizando a função `render` para gerar o conteúdo.

```javascript
var ViewExemplo = Backbone.View.extend({
    initialize: function() {
        this.render();
    },
    render: function() {
        document.write('estudando views do backbone');
    }
});
var view1 = new ViewExemplo();
```


### Propriedade el

No próximo exemplo, estamos fazendo uso da propriedade `el`, dentro do objeto view a propriedade pode ser acessada dessa
forma `$(this.el)`...

```javascript
var ViewExemplo = Backbone.View.extend({
    el: $("body"),
    initialize: function() {
        this.render();
    },
    render: function() {
        // Atente para esta linha
        $(this.el).html("estudando views do backbone");
    }
});
var view1 = new ViewExemplo();
```

...mas o correto seria utilizar a propriedade diretamente  como mostrado abaixo.

```javascript
var ViewExemplo = Backbone.View.extend({
    el: $("body"),
    initialize: function() {
        this.render();
    },
    render: function() {
        // Essa é a forma mais adequada
        // para referenciar o controle
        this.$el.html("estudando views do backbone");
    }
});
var view1 = new ViewExemplo();
```