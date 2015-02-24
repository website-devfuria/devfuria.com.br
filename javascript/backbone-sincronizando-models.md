---
layout:      grid93-article
title:       Backbone - Sincronizando um model (modelo)
description: 
menu:        javascript-backbone
---



### fetch

Verbo GET.

```javascript
Person = Backbone.Model.extend({}); // Definindo a classe
var p1 = new Person();              // Instanciando
p1.fetch();                         // Sincronizando com o servidor
```

    Error: A "url" property or function must be specified

```javascript
Person = Backbone.Model.extend({
    urlRoot: 'person'
});

var p1 = new Person();
p1.fetch();
```

    http://localhost/person/1

A url está correta mas a requisição não encontra o caminho, o script. Sabemos disso porque estamos vendo o console.

Para temos mais controle devemos usar os métodos `success` e `error`.

```javascript
Person = Backbone.Model.extend({
    urlRoot: 'person'
});

var p1 = new Person();

p1.fetch({
    success: function (response) {
        console.log("OK");
    },
    error: function (model, xhr, options) {
        console.log("Erro");
    }
});
```

De um jeito ou de outro, teremos que mudar do paradigma REST para uma forma mais rudimentar.

Que tal...

    http://localhost/person/?id=1
    

```javascript
Person = Backbone.Model.extend({
    // Mudamos de `urlRoot` para `url`
    url: function() {
        return 'person/?id=' + this.get('id');
    }
});

// Estamos passando um objeto
// com a propriedade `id` definida
var p1 = new Person({id: 1});

p1.fetch({
    success: function (modeloResposta) {
        console.log("OK");
    },
    error: function (model, xhr, options) {
        console.log("Erro");
    }
});
```

A URL agora está correta `http://localhost/person/?id=1` porém continua apresentando erro.

Não criamos ainda o script PHP, então faremos isso agora. Crie um arquivo denominado `index.php` dentro da pasta 
`http://localhost/person/`, ficará assim:

    http://localhost/person/index.php

Agora, insira no arquivo o seguinte trecho.

```php
<?php echo "oi" ?>
```
Se executarmos o JavaScript veremos que agora o alvo é alcançado, mas ainda continua caindo no erro, o que será agora?

É a resposta do script! Do jeito que está, o script retorna HTML puro, mas o Backbone espera que a resposta seja um
JSON, temos que alterar o script PHP.

```php
<?php 
header('Content-Type: application/json; charset=utf-8');
echo '{}';

```

Temos nosso primeiro "OK.

Novamente, podemos alterar um pouco mais o nosso script PHP para que ele retorno algo mais significativo.

```php
<?php
header('Content-Type: application/json; charset=utf-8');

$obj = new stdClass();
$obj->id   = 1;
$obj->name = 'alexandre';

echo json_encode($obj);
```

Agora podemos ver a resposta da requisição, conforme código abaixo.

```javascript
Person = Backbone.Model.extend({
    url: function() {
        return 'person/?id=' + this.get('id');
    }
});

var p1 = new Person({id: 1});

p1.fetch({
    success: function (modeloResposta) {
        console.log("OK");
        // estamos exibindo o retorno da requisição
        console.log(modeloResposta.get('name'));
    },
    error: function (model, xhr, options) {
        console.log("Erro");
    }
});

// Obs: Neste trecho não adiantaria executar `p1.get('name')` pois
// lembre-se que a requisição AJAX é assíncrona, ou seja, a
// execução do JavaScript continuará independente da resposta.
console.log(typeof p1.get('name')); // "undefined"
```