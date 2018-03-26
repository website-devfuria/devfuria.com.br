---
title:       Módulos
description: É importante entender como funciona o sistema de módulos do Node.js, este artigo é um primeiro passo nessa direção.
capitulo:    "node-unit-tests"
ordem:       1
---

É importante entender como funciona o sistema de módulos do Node.js, este artigo é um primeiro passo nessa direção.

Os exemplos aqui demonstrados forma retirados da documentação do Node,js

### exports

Imagine que você escreveu uma pequena biblioteca sobre funções geométricas e quer (re) utilizá-la em diversos outros
scripts, ou seja, você quer que o código de sua biblioteca fique visível para outros scripts.


```javascript
var PI = Math.PI;

var area = function (r) {
    return PI * r * r;
};

var circumference = function (r) {
    return 2 * PI * r;
};
```

Uma forma de fazer isso é utilizar o `exports`, podemos passar nossas funções diretamente para o objeto `exports`, veja:

```javascript
//
// Conteúdo do arquivo `circle.js`
//
var PI = Math.PI;

exports.area = function (r) {
    return PI * r * r;
};

exports.circumference = function (r) {
    return 2 * PI * r;
};
```

Agora podemos nos servir desse código em qualquer script, veja exemplo abaixo.

```javascript
//
// Contéudo do arquivo foo.js
//
var circle = require('./circle.js');
console.log("The area of a circle of radius 4 is" + circle.area(4));
```

Repare que as variáveis locais são privadas ao módulo.


### module.exports

Se você quiser que a raiz de exportação do módulo seja uma função (como um construtor) ou se você deseja exportar um 
objeto completo em uma atribuição em vez de construir uma propriedade de cada vez, atribua a `module.exports` em vez 
de `exports`.

Imagine agora que você desenvolveu um pequeno módulo para calcular a área quadra, veja código abaixo.

```javascript
//
// Contéudo do arquivo `square.js`
//
module.exports = function(width) {
    return {
        area: function() {
            return width * width;
        }
    };
}
```

Você poderá utilizá-lo dessa forma...

```javascript
//
// Contéudo do arquivo `bar.js`
//
var square = require('./square.js');
var mySquare = square(2);
console.log('The area of my square is ' + mySquare.area());
```

Veja a documentação completa [nodejs.org/api/modules]( https://nodejs.org/api/modules.html"link-externo").
