---
layout:      grid93-article
title:       Backbone - Sincronizando um model (modelo)
description: 
menu:        javascript-backbone
---



Carregando o modelo (fetch)
---

Verbo GET.

```javascript
Person = Backbone.Model.extend({}); // Definindo a classe
var p1 = new Person();              // Instanciando
p1.fetch();                         // Sincronizando com o servidor
```

    Error: A "url" property or function must be specified

Apesar da mensagem reclamar da propriedade `url` utilizaremos a propriedade `urlRoot`.

```javascript
Person = Backbone.Model.extend({
    urlRoot: 'person'
});

// Sem o id o Backbone 
var p1 = new Person();
p1.fetch();
```

A URL está apontando para `http://localhost/person`, ao contrário de nosso objetivo que é apontar para 
`http://localhost/person/1`. Então, devemos "setar" a propriedade `id` de nosso recém criado objeto para que o Backbone 
saiba montar a URL corretamente.

```javascript
Person = Backbone.Model.extend({
    urlRoot: 'person'
});

var p1 = new Person({id: 1});
p1.fetch();
```

    http://localhost/person/1

Agora, a URL está correta mas a requisição não encontra o caminho, o script. Sabemos disso porque estamos vendo o console.

Para temos mais controle devemos usar os métodos `success` e `error`.

```javascript
Person = Backbone.Model.extend({
    urlRoot: 'person'
});

var p1 = new Person({id: 1});

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

Temos nosso primeiro "OK".

Novamente, iremos alterar o nosso script PHP para que ele retorno algo mais significativo. Vale comentar que o script 
PHP apresentado abaixo esta incompleto, apesar de funcionar. Ele deveria receber o valor da variável ´id´ enviada na 
requisição, consultar em um banco de dados o registro segundo o id informado, carregar o objeto e transformá-lo em uma 
string JSON. Mas isso não está acontecendo, o script se limita a imprimir uma string JSON arbitrária.

Consulte a seção [PHP](/php/) para saber mais sobre a linguagem PHP.

```php
<?php
header('Content-Type: application/json; charset=utf-8');
echo '{"id":1,"name":"alexandre"}';
```

Agora, podemos ver a resposta da requisição conforme código abaixo.

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
// a requisição AJAX é assíncrona, portanto, a execução do
// script continuará independente da resposta.
console.log(typeof p1.get('name')); // "undefined"
```


Salvando o modelo
---


```javascript
Person = Backbone.Model.extend({
    url: function() {
        if (this.get('id')) {
        	return 'person/?id=' + this.get('id');      
        } else {
			return 'person/';
        }
    }
});

var p1 = new Person({id: 9, name: 'flavio'});


p1.save({
  success: function() {
  	console.log('aaaaaa');
  }
});

```


```php
<?php

// recebendo requisição PUT ou PATH
$dadosString = file_get_contents("php://input");

// decodificando string JSON em objeto
$objetoDecodificado = json_decode($dadosString);

// exibindo objeto
var_dump($objetoDecodificado);

// object(stdClass)[1]
//  public 'id' => int 1
//  public 'name' => string 'flavio' (length=6)
```