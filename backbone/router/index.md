---
title:       Backbone Definindo rotas (router)
description: Neste artigo veremos como definir rotas através  de hashtags no framework Backbone em JavsScript.
capitulo:    backbone-intro
ordem:       15
---

O Backbone possue rotas para hashtags.

Podemos fazer, por exemplo, `http://localhost/foo/index.html#qualquer-coisa`.

Lembrando que podemos suprimir a parte `index.html`, veja: `http://localhost/foo/#qualquer-coisa`.

Vamos ao código...

```javascript
var AppRouter = Backbone.Router.extend({

    //
    // Definindo rotas
    //
    routes: {
        'lish':  'callbackToLish',
        'bar':   'callbackToBar',
        'proof': 'callbackToProof'
    },

    //
    // Callbacks..
    //
    callbackToLish: function () {
        console.log('callback to lish');
    },
    callbackToBar: function () {
        console.log('callback to bar');
    },
    callbackToProof: function () {
        console.log('callback to proof');
    }
});

// Inicializar o Router
var app_router = new AppRouter();

// Após definirmos as rotas, devemos sempre
// inicializar o Backbone.history
Backbone.history.start();
```

Os exemplos acima mapeiam as seguintes URL's.

    http://localhost/foo/#lish    ---> 'callback to lish'
    http://localhost/foo/#bar     ---> 'callback to bar'
    http://localhost/foo/#proof   ---> 'callback to proof'


Podemos definir as rotas após inicializarmos o router, veja exemplo abaixo, ele reproduz a mesma saída que o código
anterior.

```javascript
var AppRouter = Backbone.Router.extend({
    routes: {
        'lish':  'callbackToLish',
        'bar':   'callbackToBar',
        'proof': 'callbackToProof'
    }
});

// Incializando o router
var app_router = new AppRouter();

//
// Definindo rotas após o router ter sido inicializado
//
app_router.on('route:callbackToLish', function () {
    console.log('callback to lish');
});
app_router.on('route:callbackToBar', function () {
    console.log('callback to bar');
});
app_router.on('route:callbackToProof', function () {
    console.log('callback to proof');
});

// Inicializando o Backbone.history
Backbone.history.start();
```



Index e default
---

Os exemplos abaixo são para ilustrar que podemos definir uma função callback para o arquivo index e um callback para
qualquer outra hashtag (no exemplo chamo de `default`).

```javascript
var AppRouter = Backbone.Router.extend({
    routes: {
        '':         'index',
        '*default': '_default'
    },
    index: function () {
        console.log('callback to index');
    },
    _default: function (hashtag) {
      console.log('callback to default, hastag: %s', hashtag);
    }
});

var app_router = new AppRouter;
Backbone.history.start();
```

Ao acessarmos `http://localhost/foo/`, imediatamente o callback `index()` é executado.

Ao acessarmos qualquer coisa depois de `foo/#`, o callback `_default()` é executado.

O "default" também pode ser utilizado para páginas não encontradas, veja exemplo abaixo.

```javascript
var AppRouter = Backbone.Router.extend({
    routes: {
        '*path': 'notFound'
    },
    notFound: function (uri) {
        console.log('The %s was not found', uri);
    }
});
var app_router = new AppRouter;
Backbone.history.start();
```

Conforme código acima poderemos ter os seguintes casos.

    http://localhost/foo/#wrong-url  --->  "The wrong-url was not found"
    http://localhost/foo/#bad-url    --->  "The bad-url was not found"




Parâmetros
---

Podemos utilizar parâmetros na hashtag, basta utilizar `:param`, veja exemplo abaixo.

```javascript
var AppRouter = Backbone.Router.extend({
    routes: {
        'search/:query':   'search',
    },
    search: function (query) {
        console.log('callback to search: ' + query);
    }
});
var app_router = new AppRouter;
Backbone.history.start();
```

Com o código acima temos o seguinte mapeamento.

    http://localhost/foo/#search      ---> nada acontece
    http://localhost/foo/#search/abc  ---> "callback to search: abc"
    http://localhost/foo/#search/def  ---> "callback to search: def"
    http://localhost/foo/#search/ghi  ---> "callback to search: ghi"


Também podemos passar vários parâmetros, veja o exemplo abaixo.

```javascript
var AppRouter = Backbone.Router.extend({
    routes: {
      'search/:n/:n/:n': 'search',
    },
    search: function (a, b, c) {
        console.log(a, b, c);
    }
});
var app_router = new AppRouter;
Backbone.history.start();
```

Segundo o código acima, teremos o mapeamento conforme demonstrado a seguir.

    http://localhost/foo/#search/1/2/3   ----> "1" "2" "3"
    http://localhost/foo/#search/4/5/6   ----> "4" "5" "6"
    http://localhost/foo/#search/7/8/9   ----> "7" "8" "9"

No mesmo código em questão, vale destacar os casos que não correspondem a rota definida.

    http://localhost/foo/#search/1/2       ----> nada acontece
    http://localhost/foo/#search/1/2/3/    ----> nada acontece
    http://localhost/foo/#search/1/2/3/4   ----> nada acontece

Neste outro exemplo fica claro que o nome do parâmetro da hashtag não precisam coincidir com os nomes dos parâmetros
da função de callback. Em outras palavras, `:codigo` aponta para `isbn` e `:number` aponta para `pagina`.

```javascript
var AppRouter = Backbone.Router.extend({
    routes: {
      'books/:codigo/p:number': 'search'
    },
    search: function (isbn, pagina) {
        console.log("Lendo livro ISBN %s, pagina %s", isbn, pagina);
    }
});
var app_router = new AppRouter;
Backbone.history.start();
```

    http://localhost/foo/#books/978-85-333-0227-3/p1    ---> "Lendo livro ISBN 978-85-333-0227-3, pagina 1"
    http://localhost/foo/#books/978-85-333-0227-3/p2    ---> "Lendo livro ISBN 978-85-333-0227-3, pagina 2"
    http://localhost/foo/#books/978-85-333-0227-3/p3    ---> "Lendo livro ISBN 978-85-333-0227-3, pagina 3"

Atente para o fragmento `p` antes de `:number`, isso obrigará a hashtag a ter esse mesmo fragmento. Conforme os
exemplos: `/p1`, `/p2` e `/p3`.
