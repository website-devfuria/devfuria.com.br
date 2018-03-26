---
title:       Backbone Explorando o sync
description: Veremos neste artigo como explorar a função sync do framework Backbone em JavaScript para realizar requisições aos servidor do tipo AJAX.
capitulo:    backbone-intro
ordem:       14
---

Se você caiu de paraquedas nesta página, estamos na seção __Backbone__ procurando entender como funciona o sync.

Como o [sync](http://backbonejs.org/#Sync) é possível sobrescrever a função na qual passam todos os 
métodos de persistência do Backbone, em outras palavras, o que você escrever no sync substituirá as funções 
`model.fetch()`, `model.save()` e `model.delete()`.

O exemplo abaixo diz tudo.

```javascript
Backbone.sync = function(method, model, options) {
    console.log(method);
};

var foo = new Backbone.Model({id: 9});

foo.fetch();
foo.save();
foo.destroy();

// read
// update
// delete
```

O próximo exemplo nós criamos um enorme `switch` para tratar cada método separadamente.

Observe o comportamento do método `save()`, se não passamos um identificador (`id`) ele entende que estamos na letra 
__C__ do CRUD, ou seja, estamos efetuando um ato de criar (create). Agora se passamos o identificador o método é 
inteligente o bastante para efetuar uma operação de atualização (update).


```javascript
Backbone.sync = function (method, model, options) {
  switch (method) {
    case 'read':
      console.log("say: " + method)
      break;
    case 'create':
      console.log("say: " + method)
      break;
    case 'update':
      console.log("say: " + method)
      break;
    case 'delete':
      console.log("say: " + method)
      break;
    default:
      console.log("say default: " + method)
      break;
  }
};
var foo = new Backbone.Model();

foo.fetch();
foo.save();
foo.save({id: 9});
foo.destroy();

// say: read
// say: create
// say: update
// say: delete
```

OK, mas você deve estar se perguntado: "o que eu faço agora?" Bom, já rompemos com o framework dizendo o que ele  deve 
ou não fazer, logo, a partir deste ponto é com você. Não há uma resposta certa, pois existem vários caminhos.
Outro ponto importante há ser observado é que, do jeito que estamos fazendo acima, todos os métodos de qualquer modelo será
sobrescrito, então temos de ter o cuidado de escrever uma API consistente.

E se quisesse-mos sobrescrever apenas um modelo em particular sem afetar os demais, é possível?



Sincronizando um modelo sem afetar os demais
---

OK, podemos aplicar um override em um determinado modelo (model) sem interferir nos demais.

Aqui também conseguimos responder a pergunta "o que eu faço agora?", pois estamos dando continuidade ao processo definido
um API particular as nossas necessidades. Como exemplo, optei por utilizar o seguinte esquema de URL's:

    POST person/read/?id=
    POST person/create/
    POST person/update/?id=
    POST person/delete/?id=

Explicando, vamos utilizar o verbo HTTP __POST__, quer dizer, todas as requisições fogem do REST e aplicam o bom e velho
POST. Também teremos uma pasta específica para cada operação.

```javascript
var Person = Backbone.Model.extend({
  //
  // Override
  //
  sync: function (method, model, options) {
    options || (options = {});
    
    switch (method) {
      case 'read':
        options.url = 'http://localhost/person/read/?id=' + this.id;
        break;
      case 'create':
        options.url = 'http://localhost/person/create/';
        break;
      case 'update':
        options.url = 'http://localhost/person/update/?id=' + this.id;
        break;
      case 'delete':
       options.url =  'http://localhost/person/delete/?id=' + this.id;
        break;
    }
    
    // Notificamos o Backbone para aplicar as alterações
    return Backbone.sync.apply(this, arguments);
  }
});
```

Agora podemo executar os métodos do Backbone para ver o resultado.

Eu vou deixar apenas o exemplo do método `save()` mas você pode e deve realizar o `fecth()`e o `delete()`.

```

var p1 = new Person({id: 568});
p1.save({}, {
  emulateHTTP: true,
  success: function () {
    console.log('OK');
  }
});

```

O método `save()` acima irá criar uma requisição para a url `http://localhost/person/update/?id=568`, se quiser que sua
requisição tenha sucesso, você deverá escrever um script no lado do servidor para retorna uma string JSON.

Para encurtar caminho, podemos simplesmente deixar um HTML retornando a string JSON (você deve ter pelo menos um 
servidor web configurado e instalado). Teremos uma resposta sempre igual, fixa, mas o suficiente para testarmos nosso
código.

Crie um arquivo denominando` index.html` na pasta `[documentroot]/person/update/` com o seguinte conteúdo...

    {"id":1,"name":"alexandre"}

Só isso, apenas a linha acima, nada de tags `body`, `head` ou `html`.

Execute novamente seu código JavaScript e veja sua requisição obter sucesso.