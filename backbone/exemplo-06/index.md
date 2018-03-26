---
title:       "Backbone exemplo 06: checkbox + Bootstrap"
description: Pequeno exemplo de script Backbone (JavaScript) onde exploramos o controle HTML checkbox juntamente com o framework Bootstrap
capitulo:    backbone-exemplos
ordem:       6
---

Neste exemplo de aplicação Backbone vemos um pouco da lógica envolvida na utilização do elemento HTML __checkbox__, 
também utilizo o framework [Bootstrap](http://getbootstrap.com/).

Ao carregar a página, a view principal (`App`) já trás alguns itens e ao clicarmos em um deles vemos o valor total
no rodapé ser atualizado, veja a imagem...

!["exemplo backbone"](img.png "exemplo backbone")

Nosso HTML reflete a utilização do Bootstrap. Criamos um template que representa cada item da lista.

```HTML
<body>
    <script type="text/template" id="service-item">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="<%= key %>"/> <%= title %> <span>$ <%= price %></span>
            </label>
        </div>
    </script>
...
...
...
```

Em seguida vemos o trecho principal...

```html
    <div class="container">
        <div class="panel panel-default" id="main">
            <div class="panel-heading">My Services</div>
            <ul class="list-group" id="services"></ul>
            <div class="panel-footer">
                <p id="total">total: <span>$0</span></p>      
            </div>
        </div>	
    </div>  
...
...
...
</body>
```

O código JavaScript não traś novidades além da utilização do filtro [where](http://backbonejs.org/#Collection-where).

É preciso um pouco de trabalho para compreender a lógica do funcionamento da combobox.

```javascript
$(function(){

	var Service = Backbone.Model.extend({
		// A cada execução a propriedade `checked` é invertida
		// O model, por si só, foi capaz de conter a lógica
        // pois o controle checked é true ou false (liga, desliga)
        // Em outros controles, deveremos saber quais os dados que 
        // deverão ser alterados.
		toggle: function(){
			this.set('checked', !this.get('checked'));
		}
	});

	var ServiceList = Backbone.Collection.extend({
		//
		// Filtra os modelos com a propriedade `checked` igual a `true`
		//
		getChecked: function(){
			return this.where({checked:true});
		}
	});

    //
    // View de cada serviço
    //
	var ServiceView = Backbone.View.extend({
		tagName: 'li',
		className: 'list-group-item',
		template: _.template($("#service-item").html()),
		events:{
			'click': 'toggleService'
		},
		initialize: function(){
			this.listenTo(this.model, 'change', this.render);
		},

		// A cada renderização o checkbox deve
		// ser assinalado conforme o modelo
		render: function(){
		    this.$el.html(this.template(this.model.attributes));
			this.$el.find('input').prop('checked', this.model.get('checked'));
			return this;
		},
		toggleService: function(){
			this.model.toggle();
		}
	});

	var App = Backbone.View.extend({
		el: $('#main'),
		initialize: function(){

			// Alguns elementos HTML em cache
			this.elList  = $('#services');
			this.elTotal = $('#total span');
			
			// Criando alguns modelos para a coleção `services`
			this.services = new ServiceList([
				new Service({ key: "web-dev", title: 'web development', price: 200}),
				new Service({ key: "web-des", title: 'web design', price: 250}),
				new Service({ key: "photo", title: 'photography', price: 100}),
				new Service({ key: "coffee", title: 'coffee drinking', price: 10})
				// etc...
			]);
			
			// A cada alteração na lista renderizamos a visão
            // atualizando o valor total no rodapé.
			this.listenTo(this.services, 'change', this.render);

			// Incluindo cada modelo
			this.services.each(function(service){
				var view = new ServiceView({ model: service });
				this.elList.append(view.render().el);
			}, this);
		},
		render: function(){
			this.elTotal.text('$'+this.getTotal());
			return this;
		},
		getTotal: function(){
			var total = 0;
			_.each(this.services.getChecked(), function(model){
				total += model.get('price');
			});
			return total;
		}
	});

	new App();

});
```


Veja a [demo](/javascript/backbone-exemplo-06/backbone.html).