---
layout:      grid12-article
title:       O básico sobre rotas no Express.js
description: Este artigo ensina como montar rotas básicas no framework Express.js (Node.js).
---

Este é o segundo artigo sobre o framework [Express.js](http://expressjs.com/ "link-externo"). Estou assumindo que você
já leu, praticou e entendeu o primeiro artigo.

Abaixo vemos um exemplo simplista para algumas rotas definidas.

{% highlight javascript %}
var express = require('express')
var app = express()

// Rota para a home, seu domínio.
app.get('/', function (req, res) {
  res.send('Sua home');
})

// Rota para /produtos
app.get('/produtos', function (req, res) {
  res.send('exibindo produtos!');
})

// Rota para /usuarios
app.get('/usuarios', function (req, res) {
  res.send('exibindo usuários');
})

var server = app.listen(3000, function () {

  var host = server.address().address
  var port = server.address().port

  console.log('Example app listening at http://%s:%s', host, port)

})
{% endhighlight %}

Crie um arquivo qualquer, por exemplo, `exemplo.js`, insira o conteúdo acima e execute no terminal:

    node exemplo.js

Abra seu navegador e experimente as seguites url's:

- `http://localhost:3000/`
- `http://localhost:3000/produtos/`
- `http://localhost:3000/usuarios/`


### Indo além...

O. __Express.js__ vem equipado com funções para de rotamento para beneficiar-se do conceito 
[REST](http://pt.wikipedia.org/wiki/REST "link-externo").

Para você compreender de fato os exemplos abaixo, não tem jeito, deve saber o básico sobre __REST__.

Abaixo, todas as rotas apontas para a url `/user` porém, são distintas pelo método (verbo) utilizado.

{% highlight javascript %}
app.post('/user', function (req, res) {
  res.send('Got a POST request at /user');
})

app.put('/user', function (req, res) {
  res.send('Got a PUT request at /user');
})

app.delete('/user', function (req, res) {
  res.send('Got a DELETE request at /user');
})
{% endhighlight %}


<hr>
Fonte

- [Express.js - Basic routing tutorial](http://expressjs.com/starter/basic-routing.html "link-externo")