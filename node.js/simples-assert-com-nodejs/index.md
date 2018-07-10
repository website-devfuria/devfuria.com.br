---
title:       Simples assert() com Node.js
description: Descubra como fazer uma simples asserção  com o módulo assert() do Node.js (JavaScript)
capitulo:    "node-unit-tests"
ordem:       2
---

O Node.js possui o módulo [assert](https://nodejs.org/api/assert.html), com ele é possível escrever
asserções.

Podemos, por exemplo, testar igualdades e desigualdades:

- assert.equal(actual, expected[, message])
- assert.notEqual(actual, expected[, message])

Aqui vai um exemplo...

```javascript
var assert = require('assert');

var atual    = 100;
var esperado = 200;

assert.equal(esperado, atual, "os valores devem ser iguais");
```

Se executarmos o código acima `$ node foo.js` (imaginando que seu arquivo chama-se `foo.js`), teremos o seguinte 
resultado.

    assert.js:92
      throw new assert.AssertionError({
            ^
    AssertionError: os valores devem ser iguais
        at Object.<anonymous> (/home/flavio/projetos/trash/lógica/assert.js:6:8)
        at Module._compile (module.js:456:26)
        at Object.Module._extensions..js (module.js:474:10)
        at Module.load (module.js:356:32)
        at Function.Module._load (module.js:312:12)
        at Function.Module.runMain (module.js:497:10)
        at startup (node.js:119:16)
        at node.js:906:3


Convenhamos, nada amigável!

Para contornarmos essa questão podemos escrever os testes dentro de um bloco __try-catch__.

```javascript
var assert = require('assert');

var atual    = 100;
var esperado = 200;

try {
    assert.equal(esperado, atual, "os valores devem ser iguais");
} catch(e) {
    console.log(e);
}
```

A asserção lança uma exceção e com o "try-catch" fica mais fácil analisar a o resultado, veja o retorno...

    { [AssertionError: os valores devem ser iguais]
      name: 'AssertionError',
      actual: 200,
      expected: 100,
      operator: '==',
      message: 'os valores devem ser iguais' }

Quando a asserção estiver correta o seu script ficará em "silêncio", ou seja, você executa `$ node foo.js` e nada 
aparece na tela, sinal de que os testes passaram.
