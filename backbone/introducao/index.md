---
title:       Backbone Introdução
description: Este artigo é uma introdução ao framework Backbone para JavaScript, acompanha um Hello World.
capitulo:    backbone-intro
ordem:       1
---

[Backbone](http://backbonejs.org/) é um framework MVC para Javascript.

O Backbone faz uso intensivo da biblioteca [Underscorejs](http://underscorejs.org/), sua maior dependência.
O framework também precisa da biblioteca jQuery, sua menor dependência. Digo isso pois você poderá optar pela Zepto, ao invés da 
jQuery.

Aconselho o estudo do Backbone para quem já possui uma certa experiência, você se sentirá mais tranquilo se...

- Conhecer o paradigma MVC (Model, View e Controller)
- Conhecer a jQuery
- Ter prática com os consoles de navegadores (Firefox ou Chrome)
- Estar familiarizado com o conceito RESTfull (usaremos nos models)


### Como eu preparei este (mini) curso do Backbone ?

A documentação do Backbone começa falando dos modelos (models), aí tudo quanto é tutorial que você encontra na Internet
também começa falando dos models. Eu resolvi fazer diferente, como as coisas acontecem primeiro nas Views e também acho 
mais prático começar por elas, então eu preparei este tutorial iniciando-se pelas Views.

A ordem didática desta sequência de tutoriais é mais ou menos como segue:

- Views
- Views e templates
- Views e eventos
- Models
- Models e eventos
- Collections
- Collections e eventos
- Persistindo os dados (requisições AJAX através da API REST)
- Sync (requisições AJAX através da API definida pelo usuário)
- Routers


### Setup inicial

Abaixo temos um arquivo HTML que nos servirá como esqueleto (matriz) para testar o framework Backbone.

```html
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title></title>
    <meta charset="utf-8">
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
...
...
...
    <!-- 2) as dependências --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>
...
...
...
```


### Hello World

Não sei isso é bem um "Hello World!", mas serve para você realizar um teste inicial.

```html
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title></title>
    <meta charset="utf-8">
  </head>
  <body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>
    
    <script>

    console.log(Backbone);

    </script>

  </body>
</html>
```



### O que você verá daqui para frente - preview

Ainda na onda do "Hello World", eu queria lhe mostrar um prévia do que está por vir e de como é a estrutura básica de 
um pequeno exemplo escrito em Backbone (JavaScript).

Começamos definindo um modelo (model) e, em seguida, definimos uma coleção (collection). Após isso, definimos a visão 
(view), é ela quem fica responsável por iniciar sua aplicação. Não sei já podemos considerar uma aplicação, pois veremos
pequenos trechos de códigos.

```javascript
//
// Model
//
Friend = Backbone.Model.extend({
    ...
    ...
    ...
});

//
// Collection
//
Friends = Backbone.Collection.extend({
    ...
    ...
    ...
});

//
// View
//
AppView = Backbone.View.extend({
    ...
    ...
    ...
});

//
// Onde sua aplicação Backbone é, de fato, inicializada.
//
var appview = new AppView;
```

Os elementos serão conectados, uns aos outros, através dos eventos. Models e Collections possuem eventos que ao serem
disparados podem executar funções de callback que, por sua vez, podem fazer algo interessante como, por exemplo, 
renderizar uma view.

As views também possuem eventos, mas eles referem-se aos "listeners" que habitualmente anexamos aos elementos HTML e
que, diga-se de passagem, já devem fazer parte de seu dia a dia como programador JavaScript.

Outra particularidade das views são os __templates__. Neste caso você pode fazer uma leitura atenta na documentação do
Underscore, isso mesmo, Underscore!. Podemos dizer que o Backbone extende os templates do Underscore e boa parte do
você precisa saber sobre eles você encontrará na documentação do Underscore.


### Site oficial

Como dito, a maior dependência do Backbone é a biblioteca Underscore, então sua documentação também deve ser considerada.

- [backbonejs.org](http://backbonejs.org/)
- [underscorejs.org/](http://underscorejs.org/)