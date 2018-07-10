---
layout:      artigo
title:       Backbone Collections.create()
description:
---

Isto é um rascunho...


    book/index.html

```html
{"id":4}
```

```javascript
var BookModel = Backbone.Model.extend({
  url: 'book/'
});


var BooksCollection = Backbone.Collection.extend({
  model: BookModel
});

var books = new BooksCollection();


var othello = books.create({
  title: 'Othello',
  author: 'William Shakespeare'
}, {
  success: function (collection, response) {
    console.log('book.create() - Ok');
    console.log(JSON.stringify(books.toJSON()));
  },
  error: function (collection, response) {
    console.log('book.create() - Error');
  },
});

// book.create() - Ok
// [{"title":"Othello","author":"William Shakespeare","id":4}]
```




Outro Exemplo
---


```
var BookModel = Backbone.Model.extend({
  url: 'book/'
});

var BooksCollection = Backbone.Collection.extend({
  model: BookModel,
  url: 'books/'
});

var books = new BooksCollection();

books.fetch({
  success: function (collection, response) {
    console.log('book.fecth() - OK');
    console.log(JSON.stringify(books.toJSON()));
  },
  error: function (collection, response) {
    console.log('book.fecth() - Error');
  },
});


var othello = books.create({
  title: 'Othello',
  author: 'William Shakespeare'
}, {
  success: function (collection, response) {
    console.log('book.create() - Ok');
    console.log(JSON.stringify(books.toJSON()));
  },
  error: function (collection, response) {
    console.log('book.create() - Error');
  },
});
```

    book.fecth() - OK
    [{"id":1,"title":"Guerra e Paz","author":"Liev Tolstói"},
    {"id":2,"title":"1984, ","author":"George Orwell"},
    {"id":3,"title":"Ulisses","author":"James Joyce"}]

    book.create() - Ok
    [{"id":1,"title":"Guerra e Paz","author":"Liev Tolstói"},
    {"id":2,"title":"1984, ","author":"George Orwell"},
    {"id":3,"title":"Ulisses","author":"James Joyce"}]

