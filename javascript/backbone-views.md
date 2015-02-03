---
layout:      grid12-article
title:       Backbone - Views
description: 
---

Este artigo é um primeiro passo com as views.

O código abaixo define um objeto de visão (view), ele é nosso ponto de partida.

```javascript
var ViewExemplo = Backbone.View.extend({

});
```

Precisamos definir os métodos do objeto View. 

Vamos definir, por exemplo, o método `initialize()` que sempre será executado ao instanciarmos a view.

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


Juntando tudo, temos o menor exemplo para utilizarmos as views do Backbone. 

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



Método render()
---

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



Propriedade el
---

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
