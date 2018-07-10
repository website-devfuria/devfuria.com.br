---
title:       Backbone Sincronizando coleções (collections)
description: Breve artigo demonstrando como sincronizar  uma collection (framework Backbone) com o servidor  através de uma requisição AJAX.
capitulo:    backbone-intro
ordem:       13
---

Ja vimos, em matéria anterior, como sincronizar o models (modelos), nesta matéria veremos que também é possível 
sincronizar coleções inteiras com o Backbone.

Neste exemplo vamos abstrair um livraria e seus livros.

Devemos começar definindo ar URL que receberá nossa requisição, podemos fazer isso na collection (coleção).

```javascript
var BooksCollection = Backbone.Collection.extend({
    url: 'books/',
});

```

Agora basta executar o método `fecth()` para recuperar os livros.

```javascript
var books = new BooksCollection();
books.fetch({
  success: function (collection, response) {
    console.log('OK');
    console.log(JSON.stringify(books.toJSON()));
  },
  error: function (collection, response) {
    console.log('NEG');
  },
});
```

O código acima ira realizar um requisição do tipo GET para a URL `http://localhost/books/`. Você deve ter notado que
o resultado está correto mas cai no callback `error`. Para corrigirmos isso devemos ter um back-end respondendo a 
requisição e retornando uma string JSON com uma coleção de livros. 

Para encurtar caminho vamos criar um HTML estático com a string JSON. Crie o arquivo `books/index.html` e insira o 
seguinte conteúdo.

```html
[{"id":1,"title":"Guerra e Paz", "author": "Liev Tolstói"},
 {"id":2,"title":"1984, ", "author": "George Orwell"},
 {"id":3,"title":"Ulisses", "author": "James Joyce"}]
```

Repare que são apenas essas 3 linhas, nada mais nada menos. Só isso o que seu HTML deve conter, ou seja, nenhuma tag.

Após criar o arquivo execute seu código JavaScript e veja o resultado, é esperado que o procedimento de callback 
`sucess`.