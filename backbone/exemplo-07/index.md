---
title:       "Backbone exemplo 07:  Privilegiômetro"
description: Primeiro exemplo real de código Backbone (JavaScript) 
capitulo:    backbone-exemplos
ordem:       7
---

Este e o primeiro exemplo real de utilização do framework Backbone.

Veja a aplicação funcionado em [devfuria.com.br/privilegiometro/](http://www.devfuria.com.br/privilegiometro/) e
aproveite para preencher o formulário.

O código fonte você encontra no [github](https://github.com/flaviomicheletti/privilegiometro).

A idéia geral desta mini aplicação é anotar os passos (para frente ou para trás) do usuário e mostrar o resultado, a 
soma destes passos, no rodapé (tarja preta).

Ao final do formulário o usuário pode enviar os dados para o servidor e comparar o próprio resultado com o de outras 
pessoas. 

O desafio foi atribuir uma única 
[função genérica](https://github.com/flaviomicheletti/privilegiometro/blob/master/views/questoes.js#L26)
para todas as opções (options). A princípio eu tentei fazer isso  utilizando os "events" da view (`view.events`) porém 
acabei utilizando mais JQuery do que eu desejava.

Eu separei os modelos na pasta `models/` e as visões na pasta `views/`. Na pasta `backend/` há um pequeno código escrito 
em PHP mas você pode ignorá-lo se quiser, com ele eu recebo a posição do usuário (resultado) e armazeno em banco para
poder comparar com os resultados de outros participantes.

Abaixo mostro o conteúdo do arquivo `privilegiometro/index.js` contendo código JavaScript principal (central):

```javascript
// privilegiometro/index.js

// Como a coleção é apenas a declaração contendo um única linha
// preferi deixá-la junto com o código principal.
var QuestoesCollection = Backbone.Collection.extend({});

//
// Collections
//
var questoes_collection = new QuestoesCollection(arrQuestoes);

//
// Models
//
var total_model = new TotalModel();
var comparativo_model = new ComparativoModel();

//
// Views
//
var questoes_view    = new QuestoesView({model: total_model});
var total_view       = new TotalView({model: total_model});
var comparativo_view = new ComparativoView({model: comparativo_model});
```


## Links

- [Aplicação Privilegiômetro](http://www.devfuria.com.br/privilegiometro/)
- [Código fonte - GitHub](https://github.com/flaviomicheletti/privilegiometro)