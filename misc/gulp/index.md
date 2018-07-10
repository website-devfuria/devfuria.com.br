---
layout:      artigo
title:       Gulp
description: Rápida introdução a ferramenta de automação de tarefas Gulp (Node.js)
---

O __Gulp__ é uma ferramenta que automatiza algumas tarefas do dia a dia do desenvolvimento de software. Principalmente
aquelas tarefas repetitivas como por exemplo: minificar, concatenar, entre outros.

Ele é escrito em JavaScript e portanto necessita ter o Node.js devidamente instalado.


### Instalação

O Gulp é uma ferramente para [Nodejs](/javascript/node.js/), logo, você deve ter o Node devidamente
instalado e também poderamos utilizar o __npm__ para a instalação do Gulp.

Você pode realizar uma instalação global.

    $ npm install --global gulp

Ou instalar em seu projeto (devDependencies).

    $ npm install --save-dev gulp



### Hello World


Crie um arquivo chamado `gulpfile.js` na raiz de seu projeto com o seguinte conteúdo:

```javascript
var gulp = require('gulp');

gulp.task('default', function() {
    //
    // Seu código para as terafas default (padrão)
    //
});
```

Execute o __gulp__:

    $ gulp

A tarefa padrão é executada, porém não faz nada, exemplo:

    [13:25:02] Using gulpfile ~/pasta/para/seu/projeto/gulpfile.js
    [13:25:02] Starting 'default'...
    [13:25:02] Finished 'default' after 46 μs

Para executar tarefas individualmente use `gulp <tarefa> <outra-tarefa>`.



### Definindo tarefas

Veja abaixo um exemplo de tarefas e a relação de dependência entre elas.

```javascript
var gulp = require('gulp');

//
// Tarefa 'one'
//
gulp.task('one', function(cb) {


});

//
// Tarefa 'two' dependente da 'one'
//
gulp.task('two', ['one'], function() {
    // task 'one' is done now
});

//
// Tarefa default (padrão) dependente da 'one' e da 'two'
//
gulp.task('default', ['one', 'two']);
```


### Plugins

O Gulp é a base da ferramenta, quem faz o trabalho sujo são os plugins, após instalar o Gulp você provavelmente irá
querer instalar alguns plugins. Temos plugin para quase tudo, no exemplo abaixo vou instalar apenas 2:

    $ npm install gulp-util --save-dev
    $ npm install gulp-uglify --save-dev

No arquivo `gulpfile.js` você deve incluir os pluigns...


```javascript
var gulp = require('gulp');

var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

..
..
..
```


Em breve volto para acrescentar alguns exemplos.



Site Oficial
---


- [gulpjs.com](http://gulpjs.com/)
- [Docs](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)
- [gulpjs.com/plugins/](http://gulpjs.com/plugins/)
- [Lista de receitas - GitHub](https://github.com/gulpjs/gulp/tree/master/docs/recipes)
- [Lista de artigos (em inglês) - GitHub](https://github.com/gulpjs/gulp/blob/master/docs/README.md#articles)
- [API - GitHub](https://github.com/gulpjs/gulp/blob/master/docs/API.md)
- [Package npm](https://www.npmjs.com/package/gulp)