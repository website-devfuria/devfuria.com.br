---
layout:      grid93-article
title:       Backbone - Introdução (Hello World)
description: Este artigo é uma introdução ao framework Backbone para JavaScript, acompanha um Hello World.
menu:        javascript-backbone
---

[Backbone](http://backbonejs.org/ "link-externo") é um framework MVC para Javascript.

O Backbone faz uso intensivo da biblioteca [underscorejs](http://underscorejs.org/ "link-externo"), sua maior dependência.
O framework também precisa da biblioteca jQuery, sua menor dependência. Digo isso pois você poderá optar pela Zepto, ao invés da 
jQuery.

Aconselho o estudo do Backbone para quem já possui uma certa experiência, você se sentirá mais tranquilo se...

- Conhecer o paradigma MVC (Model, View e Controller)
- Conhecer a jQuery
- Ter prática com os consoles de navegadores (Firefox ou Chrome)
- Estar familiarizado com o conceito REETfull (usaremos nos models)


### Como eu preparei este (mini) curso do Backbone ?

A documentação do Backbone começa falando dos modelos (models), aí tudo quanto é tutorial que você encontra na Internet
também começa falando dos models. Eu resolvi fazer diferente, como as coisas acontecem primeiro nas Views e também acho 
mais prático começar por elas, então eu preparei este tutorial iniciando-se pelas Views.



### Setup inicial

Abaixo temos um arquivo HTML que nos servirá como esqueleto (matriz) para testar o framework Backbone.

```html
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
  </head>
  <body>





    <!-- 1) seu HTML "normal" --> 






    <!-- 2) as dependências --> 
    <script src="js/jQuery.js"></script>
    <script src="js/underscore.js"></script>
    <script src="js/backbone.js"></script>

    <!-- 3) seu script --> 
    <script type="text/javascript">
    //
    // seu código
    //
    </script>

  </body>
</html>
```

Como você pode perceber, você precisará, além do próprio Backbone, das bibliotecas jQuery e Underscore.

Se você preferir pode baixar cada uma individualmente em seus respectivos sites.

Mas se quiser pular esta etapa, afinal estamos em uma fase experimental, você poderá utilizar algum canal de CDN, veja
o exemplo abaixo.

```html
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
  </head>
  <body>





    <!-- 1) seu HTML "normal" --> 





    <!-- 2) as dependências --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>

    <!-- 3) seu script --> 
    <script type="text/javascript">
    //
    // seu código
    //
    </script>

  </body>
</html>
```


Hello World
---

```html
<html>
  <head></head>
  <body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>
    
    <script>
    $(document).ready(function() {
        console.log(Backbone);
    });
    </script>

  </body>
</html>
```

Não sei isso é bem um "Hello World!", mas serve para você realizar um teste inicial. Além disso, repare que utilizamos 
o evento `ready` do documento e fizemos isso com ajuda da jQuery. Me refiro a este trecho de código:

```javascript
$(document).ready(function() {
    //
    // seu código
    //
});
```

A idéia é esperar que todo elemento [DOM](/javascript/dom/) seja carregado antes de processar o JavaScript, apesar que já estamos lidando
com isso colocando o nosso script bem ao final do documento, veja um resumo...

```html
<html>
  <head></head>
  <body>

    <!-- 1) seu HTML "normal" --> 

    <!-- 2) as dependências   --> 

    <!-- 3) seu script        --> 

  </body>
</html>
```


Próximo artigo
--

- [Backbone - Views](/javascript/backbone-views/)



Site oficial
---

Como dito, o Backbone a maior dependência é a biblioteca Underscore, então sua documentação também deve ser considerada.

- [backbonejs.org](http://backbonejs.org/ "link-externo")
- [nderscorejs.org/](http://underscorejs.org/ "link-externo")