---
layout:      secao
title:       Framework Backbone (Javascript)
description: Série de artigos (tutoriais) sobre o framework Backbone para JavaScript
---

[Backbone](http://backbonejs.org/) é um framework MVC para Javascript.

O Backbone faz uso intensivo da biblioteca [Underscore.js](http://underscorejs.org/), sua maior dependência.
O framework também precisa da biblioteca jQuery, sua menor dependência. Digo isso pois você poderá optar pela Zepto, ao
invés da jQuery.

A documentação do Backbone começa falando dos modelos (models), aí tudo quanto é tutorial que você encontra na Internet
também começa falando dos models. Eu resolvi fazer diferente, como as coisas acontecem primeiro nas Views acho mais
prático começar por elas, então eu preparei este tutorial iniciando-se pelas Views.


{% include '/includes/menu.html' with {'menu': page.menus['backbone-intro']} %}

Se você procura por [códigos de exemplo](https://github.com/devfuria/backbone-exemplos), eu separei no GitHub um
repositório apenas com os códigos deste tutorial.

{% include '/includes/menu.html' with {'menu': page.menus['backbone-exemplos']} %}


Além deste tutorial...
---

Há também o livro [Developing Backbone.js Applications](http://addyosmani.github.io/backbone-fundamentals/) de Addy Osmani
que você pode consultar online totalmente "free".

Também há este breve tutorial [backbonetutorials.com](http://backbonetutorials.com/), não é muito completo mas acho que
irá ajudar.


Documentação oficial
---

- [backbonejs.org](http://backbonejs.org/)
- [hosted on GitHub](https://github.com/jashkenas/backbone/)
- [annotated source code V 1.1.2](http://backbonejs.org/docs/backbone.html)
- [annotated source code V 1.0.0](http://documentcloud.github.io/backbone/docs/backbone.html)


### Dependências

- [underscorejs.org](http://underscorejs.org/)