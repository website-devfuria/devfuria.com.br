---
title:       Introdução ao framework Express.js
description: Este artigo é uma introdução prática ao framework Express.js muito utilizado em programações Node.js
capitulo:    "node-express"
ordem:       1
---

Este artigo é uma introdução prática ao framework [Express.js](http://expressjs.com/) muito utilizado em
programações Node.js

O __Express.js__ é um dos frameworks mais utilizados do __Node.js__. Não espere
que eu te convença sobre o quanto ele é bom ou útil e até legal. Eu também torço o nariz para frameworks, mas precisamos
aprender com eles para podermos formar nossa própria opinião.



Instalando
---

Crie uma pasta qualquer, exemplo:

    mkdir myapp
    cd myapp

Vamos inicializar um  pacote [npm](/linux/instalando-npm/), o comando abaixo lhe fará algumas perguntas, ele depende dessas
informações para criar o arquivo `package.json`.

    npm init

Instale o __Express.js__ com a opção `--save` para que ele salve as dependências no
arquivo `package.json`.

    npm install express --save


Sua primeira aplicação com o Express - Hello Word
---

Na pasta `myspp`, crie um arquivo denominado `program.js` e cole o conteúdo abaixo dentro dele.

```javascript
var express = require('express')
var app = express()

app.get('/', function (req, res) {
  res.send('Hello World!')
})

var server = app.listen(3000, function () {

  var host = server.address().address
  var port = server.address().port

  console.log('Example app listening at http://%s:%s', host, port)

})
```

Salve e volte para o terminal, execute o arquivo.

    node program.js

Você poderá ver o resultado abrindo  a url `http://0.0.0.0:3000` em seu navegador.

Obs: `http://0.0.0.0` == `http://localhost` não exatamente iguais, mas digamos semelhantes.

    Example app listening at http://0.0.0.0:3000



Explicando o código
---

Incluimos o módulo __Express.js__ através de `require()` e atribuímos a variável
`express`.

    var express = require('express')

Inicializamos o módulo __Express.js__ chamando a função `express()`.

    var app = express()

Vamos executar a função `get()`, ela aceita 2 parâmetros: o primeiro é o caminho, url. O segundo é a função de __callback__
que será executada após identificado o caminho. Através do método `res.send()` elaboramos uma resposta para o navegador.

    app.get('/', function (req, res) {
        res.send('Hello World!')
    })

Agora dizemos ao __Express.js__ para escutar na porta `3000`

    var server = app.listen(3000)

Isso já seria o suficiente para funcionar, bastaria agora executar no terminal `node program.js` e abrir a url
`http://0.0.0.0:3000` no navegador.

A função `app.listen()` aceita como segundo parâmetro uma função de __callback__ e é isso o que vamos fazer.

    var server = app.listen(3000, function () {
        ...
        ...
        ...
    })

Neste callback, vamos recuperar o endereço de request (url) e a porta utiliza.

    var server = app.listen(3000, function () {

      var host = server.address().address
      var port = server.address().port

    })

Com esses dados, em mãos podemos imprimi-los no console.

    var server = app.listen(3000, function () {

      var host = server.address().address
      var port = server.address().port

      console.log('Example app listening at http://%s:%s', host, port)

    })

Para testar abra o navegador com o endereço `http://localhost:3000` ou, se você tiver o utilitário do Linux __curl__
instalado, poderá testar via terminal.

    curl http://localhost:3000




Site Oficial
---

- [Express.js](http://expressjs.com/)