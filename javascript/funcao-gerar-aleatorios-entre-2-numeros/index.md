---
title:       Função para gerar número randômico
description: Função em JavaScript para gerar um número randômico entre 2 números quaisquer
capitulo:    "javascript-random"
ordem:       3
---

Função em JavaScript que gera um número aleatório inteiro entre 2 números quaisquer.

Veja o código no [GitHub](https://github.com/devfuria/javascript-exemplos/tree/master/aleatorio).


```javascript
/**
 * Retorna um número inteiro aleatório entre max e min
 * incluindo max e min.
 *
 * Fonte: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
 */
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
```


Exemplos:

```javascript
console.log(  getRandomInt(0, 3)  );  // retornará 0, 1, 2 e 3.
```

```javascript
console.log(  getRandomInt(5, 10)  ); // retornará 5, 6, 7, 8, 9 e 10
```


- - -
Fonte: [MDN - Math.random()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random)
