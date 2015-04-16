/**
 * Pequeno exemplo demonstrando o framework Backbone (JavaScript) 
 * 
 * Baseado no original de http://tutorialzine.com/2013/04/services-chooser-backbone-js/
 * 
 */
$(function(){

	var Service = Backbone.Model.extend({

		//
		// Ao acionar a função a propriedade `checked` é invertida
		//
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

			// Aluguns elementos HTML em cache
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