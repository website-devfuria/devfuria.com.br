---
layout:      grid12-article
title:       Backbone - Hello World (introdução)
description: 
---

[Backbone](http://backbonejs.org/ "link-externo") é um framework MVC (há controvérsias) para Javascript.

Ele faz uso intensivo da biblioteca [underscorejs](http://underscorejs.org/ "link-externo"), sua maior dependência. E
também precisa da biliboteca JQuery, sua menor dependência. Digo isso pois você poderá optar pela Zepto, ao invés da JQuery.

Aconselho o estudo do Backbone para quem já possui uma certa experiência, você se sentirá mais tranquilo se...

- Conhecer o paradigma MVC (Model, View e Controller)
- Conhecer a JQuery
- Ter prática com os consoles de navegadores (Firefox ou Chrome)



### Como eu preparei o (mini)curso do Backbone ?

A documentação do Backbone começa falando dos modelos (models), aí tudo quanto é tutorial começa faland dos models.

Eu achei mais prático começar pelas views.



### Boirletplate (setup inicial)

Abaixo temos um arquivo HTML que nos servirá como boirleplate (esqueleto, matriz) para testar o framework Backbone.

```html
<html>
<head>
  <meta charset="UTF-8">
  <title>Backbone.js Tutorial</title>
</head>
<body>
  <script src="js/jQuery.js"></script>
  <script src="js/underscore.js"></script>
  <script src="js/backbone.js"></script>
  </body>
</html>
```

Como você pode perceber, você precisará, além do próprio Backbone, das bibliotecas JQuery e Underscore.

Se você preferir pode baixar cada uma individualmente em seus respectivos sites.

Mas se quiser pular esta etapa, afinal estamos em uma fase experimental, você poderá utilizar algum canal de CDN.

Abaixo temos um exemplo.

```html
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
  </head>
  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://documentcloud.github.com/underscore/underscore-min.js"></script>
    <script src="http://documentcloud.github.com/backbone/backbone-min.js"></script>
    
    <script type="text/javascript">
    //
    // seu código
    //
    </script>

  </body>
</html>
```

Outro exemplo de CDN você confere abaixo, repare que também foi incluso o complemento "Backbone LocalStorege".

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Hello World in Backbone.js</title>
  </head>
  <body>

    <!-- ========= -->
    <!-- Your HTML -->
    <!-- ========= -->

    <!-- ========= -->
    <!-- Libraries -->
    <!-- ========= -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/backbone-localstorage.js/1.0/backbone.localStorage-min.js" type="text/javascript"></script>  

    <!-- =============== -->
    <!-- Javascript code -->
    <!-- =============== -->
    <script type="text/javascript">
    // your JS code goes here
    </script>

  </body>
</html>
```


Hello World
---

Não sei se é bem um "Hello World!", mas serve para você testar se tudo está funcionado corretamente.

```html
<html>
  <head>

    <!--- CDN scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>
    
    <script>
    $(document).ready(function() {
        console.log(Backbone);
    });
    </script>

  </head>
  
  <body></body>

</html>
```


Site oficial
---

- [backbonejs.org](http://backbonejs.org/ "link-externo")