---
title:       Configurando seu repositório Git para trabalhar com o Mocha
description: Este artigo é uma dica de como configurar seu repositório no GitHub ao utilizar o framework de testes mocha (JavaScript - Node.js)
capitulo:    "node-unit-tests"
ordem:       4
---

Este artigo é uma dica de como configurar seu repositório no [GitHub](/git/) uma vez que você pretende criar uma aplicação
JavaScript (Node.js) e utilizar o framework de testes [mocha](http://mochajs.org/). Também
veremos como o __npm__ poderá nos auxiliar com esse objetivo.

Indico o artigo para quem já experimentou o Node, o npm e o Mocha. Você deve ter o [Node.js](/linux/instalando-nodejs/)
instalado e o [npm](/linux/instalando-npm/) também.

Imagine que você encontrou uma aplicação qualquer no GitHub e pretende utilizá-la, porém, antes disso, você decide
executar os testes da aplicação.

    git clone https://github.com/devfuria/node-jockey-pow
    cd node-jockey-pow/
    npm install mocha
    mocha --ui tdd

O último comando acima retornará a seguinte mensagem de erro...

    "mocha: command not found"

Acontece que precisamos especificar o caminho completo do mocha.

    ./node_modules/.bin/mocha --ui tdd

A forma mais simples de resolver este problema é instalando o mocha globalmente.

    npm install -g mocha

Mas e se você não quisesse, por alguma razão, não instalar o mocha globalmente, como faríamos?

De forma rápida, podemos criar o arquivo `package.json` "na mão" e inserir o seguinte conteúdo...

```javascript
{
  "scripts": {
    "test": "mocha --ui tdd"
  }
}
```

Agora podemos rodar o comando abaixo e o npm se encarregará de localizar o mocha.

    npm test



### O caminho correto

Os passo indicados acima servem para entender o funcionamento das coisas. Porém, o mais adequado, neste caso, é criar o
arquivo `package.json` com o comando...

    npm init

Eu já fiz isso no repositório, mas se você estivesse criando seu repositório neste exato momento, então esse seria o
primeiro passo.

O segundo passo seria anotar as dependências no arquivo `package.json`. Você pode fazer isso manualmente ou através
do seguinte comando...

    npm install mocha --save

O comando acima além de instalar as dependências irá anotar em nosso arquivo `package.json` as dependências necessárias.

Dá próxima vez que alguém clonar o repositório bastará executar os comandos abaixo para rodar os testes do mocha.

    git clone https://github.com/devfuria/node-jockey-pow
    npm install
    npm test

Experimente, veja o repositório no GitHub [github.com/devfuria/node-jockey-pow](https://github.com/devfuria/node-jockey-pow).