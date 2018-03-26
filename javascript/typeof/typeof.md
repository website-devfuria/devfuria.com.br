---
title:       Referência prática do operador typeof em JavaScript
description: "O typeof é um operador unário colocado antes de seu operando, o qual pode ser de qualquer tipo"
capitulo:    "js-referencia"
ordem:       1
---

O __typeof__ é um operador __unário__ colocado antes de seu operando, o qual pode ser de qualquer tipo. 

Seu valor é uma string que especifica o tipo do operando.

    typeof "foo"; // 'string'
    typeof 123;   // 'number'


### Números

    typeof 37 === 'number';
    typeof 3.14 === 'number';
    typeof Math.LN2 === 'number';
    typeof Infinity === 'number';
    typeof NaN === 'number';       // Apesar de ser "Not-A-Number"
    typeof Number(1) === 'number'; // Mas nunca use desta forma

### Strings

    typeof "" === 'string';
    typeof "bla" === 'string';
    typeof (typeof 1) === 'string';    // typeof sempre retorna uma string
    typeof String("abc") === 'string'; // Mas nunca use desta forma

### Booleans

    typeof true === 'boolean';
    typeof false === 'boolean';
    typeof Boolean(true) === 'boolean'; // Mas nunca use desta forma

### Undefined

    typeof undefined === 'undefined';
    typeof blabla === 'undefined'; // Uma variável indefinida

### Objetos

    typeof {a:1} === 'object';
    typeof new Date() === 'object';
    typeof [1, 2, 4] === 'object';          // Use 'Array.isArray' ou 'Object.prototype.toString.call' para diferenciar
                                            // objetos regulares de arrays

    typeof new Boolean(true) === 'object';  // isto é confuso. Não use!
    typeof new Number(1) === 'object';      // isto é confuso. Não use!
    typeof new String("abc") === 'object';  // isto é confuso. Não use!

### Funções

    typeof function(){} === 'function';
    typeof Math.sin === 'function';



Referências
---

- [MDN - Referência JavaScript - typeof](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Operators/typeof "link-externo")