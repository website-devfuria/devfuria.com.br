---
title:       Um exemplo de visão (views) em Backbone
description: Um breve exemplo ilustrando como é uma View no framework Backbone (JavaScript)
capitulo:    backbone-intro
ordem:       5
---

Este exemplo de utilização das Views do Backbone é bastante simples e só utilizaremos a classe __View__.

O objetivo desta minúscula aplicação é inserir elementos de lista (`li`) conforme digitamos o conteúdo em um caixa de texto.

![](backbone-exemplo-1.png)

O exemplo é tão simples que dá para mostrar em um único arquivo HTML, veja o código.

```html
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>

        <!-- Trecho HTML referente a visão (view) -->
        <div id="app-container">
          <h2>Lista</h2>

          <input type="text" id="txt-item" />
          <input type="button" id="btn-salvar" value="Salvar" />

          <ul id="lista-container"></ul>
        </div>

        <!-- bibliotecas -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://documentcloud.github.com/underscore/underscore-min.js"></script>
        <script src="http://documentcloud.github.com/backbone/backbone-min.js"></script>

        <!-- seu código -->
        <script type="text/javascript">

        var AppView = Backbone.View.extend({
            el: $("#app-container"),

            initialize: function(){
                this.$lista   = $('#lista-container');
                this.$txtItem = $('#txt-item');
            },

            events: {
                "click #btn-salvar" : "salvar"
            },

            salvar: function() {
                var li = "<li>" + this.$txtItem.val() + "</li>";
                this.$lista.append(li);
            }
        });
        var app_view = new AppView();
        </script>

    </body>
</html>
```

Eu acho que o código dispensa explicações, mas em todo caso vamos lá...

Minha visão (view) ficará armazena na variável `AppView` pois ela representa a aplicação ("app"). O elemento principal
da view é o a div `"#app-container"`. O método `initialize()` está iniciando duas variáveis, uma referencia a tag lista
(`ul`), a outra referencia a caixa de texto. Usamos a propriedade `events` para definir o evento do botão.
Implementamos o método de callback `salvar()`.

Veja a demo no [jsfiddle.net/flaviomicheletti/mwkf7pog/](http://jsfiddle.net/flaviomicheletti/mwkf7pog/).