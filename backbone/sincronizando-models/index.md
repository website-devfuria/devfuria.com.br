---
title:       Backbone Sincronizando um modelo (model)
description: Como fazer requisições AJAX através de um model do framework Backbone considerando o conceito Restfull, veremos os métodos fetch(), save()  destroy().
capitulo:    backbone-intro
ordem:       12
---

Esta talvez seja a parte tão esperada desta sequência de tutorias sobre o Backbone: como realizar operações AJAX com o
Backbone. Essa é a notícia boa, a ruim é que você deve ter um bom conhecimento sobre o 
[REST](http://en.wikipedia.org/wiki/Representational_state_transfer) para entender melhor o que esta por
vir. Também você terá que ter um back-end (ruby, python PHP, ASP.net, etc...) para responder as requisições `GET`, `PUT`, 
`POST` e `DELETE`.

Mas vamos com calma, mesmo não completando as requisições, se você tiver um certo domínio do console do navegador poderá
acompanhar os resultados sem muitos problemas. E o REST também não é um bicho de 7 cabeças, eu gosto de dizer que a 
prática do REST é mais fácil que a teoria, então vamos lá. Quem sabe essa é a sua chance de entender o REST.

Como modelo definiremos apenas a propriedade `urlRoot` com a URL que responde pelo modelo. Em nosso exemplo estamos
abstraindo uma pessoa com o objeto `Person`.

```javascript
Person = Backbone.Model.extend({
    urlRoot: 'person/'
});
```

Para entender o REST você precisa ter em mente as operações de CRUD.

    C reate   # equivale a inserir
    R ead     # equivale a carregar
    U pdate   # equivale a atualizar
    D elete   # equivale a apagar

A grosso modo, o REST mapeia as operações para uma determinada URL só que utiliza-se de verbos (HTTP) diferentes para 
cada requisição. Essa relação é um tanto intuitiva, veja...

    GET    http://localhost/person/1  # para recuperar um registro (read)
    POST   http://localhost/person    # para criar um registro (create)
    PUT    http://localhost/person/1  # para atualizar um registro (update)
    DELETE http://localhost/person/1  # para apagar um registro (delete)

Repare que além do entendimento do REST e além de um back-end para recepcionar cada requisição teremos que ter os 
redirecionamentos das URL's. 

Mas não desanime, vamos experimentar sem termos todos esses requisitos...



### Read - fetch()

Para recuperar um registro devemos utilizar o método `fecth()`, temos que ter um identificador definido e  seria bom
definirmos métodos de callback para o status `success` e `error` facilitando, dessa forma, o controle sobre o que está 
acontecendo.

```javascript
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

O código acima irá gerar a seguinte requisição.

    url:    http://localhost/person/1
    method: GET
    




### Create - save()

Para inserir um novo registro podemos chamar o método `save()` tendo em vista que ainda não possuímos o identificador
do modelo, em outras palavras, realiza-se o verbo POST ao executar o método `save()` sem haver um identificador definido.


```javascript
//
// POST (para inserir)
//
var p1 = new Person({name: 'flavio'});

p1.save({}, {
    success: function() {
        console.log('OK');
    }
});
```

O código acima irá gerar a seguinte requisição.

    url:    http://localhost/person/
    method: POST




### Update - save()

Para atualizar o modelo o método é o mesmo `save()`, mas agora temos o identificador do modelo `id`, então o Backbone
saberá que trata-se de uma atualização e utilizará o verbo __PUT__ (REST).

```javascript
//
// PUT (para atualizar)
//
var p1 = new Person({id: 1, name: 'flavio'});

p1.save({}, {
    success: function() {
        console.log('OK');
    }
});
```

O código acima irá gerar a seguinte requisição.

    url:    http://localhost/person/1
    method: PUT




### Delete - destroy()

Para deletar um modelo devemos chamar a função `destroy()`

O objeto deve ter um identificador para ser deletado.

```javascript
//
// DELETE (para deletar)
//
var p1 = new Person({id: 1, name: 'flavio'});
p1.destroy();
```

O código acima irá gerar a seguinte requisição.

    url:    http://localhost/person/1
    method: DELETE