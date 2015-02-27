---
layout:      grid93-article
title:       Backbone - sync
description: 
menu:        javascript-backbone
---



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
//delete
```



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



Sincronizando diretamento o modelo
---

```javascript
var Person = Backbone.Model.extend({
  getCustomUrl: function (method) {
    switch (method) {
      case 'read':
        return 'http://localhost/person/read/?id=' + this.id;
        break;
      case 'create':
        return 'http://localhost/person/create/?id=' + this.id;
        break;
      case 'update':
        return 'http://localhost/person/update/?id=' + this.id;
        break;
      case 'delete':
        return 'http://localhost/person/delete/?id=' + this.id;
        break;
    }
  },
  //
  // Override the sync function to use our custom URLs
  //
  sync: function (method, model, options) {
    options || (options = {});

    options.url = this.getCustomUrl(method.toLowerCase());
    // Lets notify backbone to use our URLs and do follow default course
    return Backbone.sync.apply(this, arguments);
  }
});


var p1 = new Person({id: 568});
p1.save({}, {
  emulateHTTP: true,
  success: function () {
    console.log('OK');
  }
});

```


O HTML simplesmente...

    {"id":1,"name":"alexandre"}