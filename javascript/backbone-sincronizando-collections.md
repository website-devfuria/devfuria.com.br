---
layout:      grid93-article
title:       Backbone - Sincronizando collections (coleções)
description: 
menu:        javascript-backbone
---




```javascript
var BooksCollection = Backbone.Collection.extend({
  url: 'books/',
});
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

    books/index.html

```html
[{"id":1,"title":"Guerra e Paz", "author": "Liev Tolstói"},
 {"id":2,"title":"1984, ", "author": "George Orwell"},
 {"id":3,"title":"Ulisses", "author": "James Joyce"}]
```
