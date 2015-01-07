---
layout: grid12-article
title:  Experimentando o Backbone
---


```html
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://documentcloud.github.com/underscore/underscore-min.js"></script>
        <script src="http://documentcloud.github.com/backbone/backbone-min.js"></script>
        <script type="text/javascript">

        ...
        ... seu código
        ...

        </script>
    </body>
</html>
```


```javascript
var viewExemplo = Backbone.View.extend({
    initialize: function() {
        document.write('estudando views do backbone');
    }
});
var view1 = new viewExemplo();
```


```javascript
var viewExemplo = Backbone.View.extend({
    initialize: function() {
        this.render();
    },
    render: function() {
        document.write('estudando views do backbone');
    }
});
var view1 = new viewExemplo();
```

```javascript
var viewExemplo = Backbone.View.extend({
    el: $("body"),
    initialize: function() {
        this.render();
    },
    render: function() {
        $(this.el).html("estudando views do backbone");
    }
});
var view1 = new viewExemplo();
```

```javascript
var viewExemplo = Backbone.View.extend({
    el: $("body"),
    initialize: function() {
        this.render();
    },
    render: function() {
        this.$el.html("estudando views do backbone");
    }
});
var view1 = new viewExemplo();
```


Templates
---


```javascript
var viewExemplo = Backbone.View.extend({
    el: $("body"),
    template: _.template("<%= content %>"),
    initialize: function() {
        this.render();
    },
    render: function() {
        console.log(this.template({content: 'estudando views do backbone'}))
        this.$el.html(this.template({content: 'estudando views do backbone'}));
    }
});
var view1 = new viewExemplo();
```

```javascript
var viewExemplo = Backbone.View.extend({
    el: $("body"),
    template: _.template("<%= content %>"),
    initialize: function() {
        this.render();
    },
    render: function() {
        var dados = {content: 'estudando views do backbone'};
        var html = this.template(dados);
        this.$el.html(html);
    }
});
var view1 = new viewExemplo();
```