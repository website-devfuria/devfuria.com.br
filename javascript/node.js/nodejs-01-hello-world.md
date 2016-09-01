---
title:       Nodeschool - hello world
description: Primeiro exercício (hello world) do Node.js da lista learnyounode da Nodeschool
---

{% include /alertas/js-ns-paraquedas.html %}


### Exercício

Escreva um programa que imprime o texto "Olá Mundo" no console (stdout).


### Dicas

Para fazer um programa Node.js, crie um novo arquivo com a extensão `.js` e comece a escrever JavaScript!

Execute seu programa rodando ele com o comando `node`, por exemplo:

    node program01.js

Você pode escrever no console da mesma maneira que no navegador:

    console.log("texto")

Quando tiver terminado seu código, você deverá executar:

    learnyounode verify program01.js

Seu programa será testado, um relatório será gerado e a lição será marcada como 'completa' caso você 
tenha sucesso.


### Solução

Essa foi fácil!

```javascript
// program01.js
console.log("HELLO WORLD");
```


{% include call.html
    style="success"
    title="Próximo exercício"
    descr="Baby steps"
    href="/javascript/node.js/nodejs-02-baby-steps/"
    label="Ver matéria!"
%}