---
layout:      index
title:       Node.js
description: Aprenda Node.js
---


__Node.js__ é JavaScript do lado do servidor!

É um ambiente de execução para usar JavaScript fora do navegador!
Ele incorpora a "engine" de JavaScript Google V8, a mesma do Google Chrome (ECMAScript 5)

Imagine que seu código __JavaScript__ esteja em um arquivo denominado `program.js`.

Para executá-lo com o __Node.js__, digite no terminal `node program.js`.

O __Node.js__ também possui um terminal interativo, digite `node` no terminal e divirta-se!

    $ node
    >
    > 111 * 111
    12321

Do lado do servidor, temos a variável `process` que seria equivalente a conhecida 
[variável global window](/javascript/objeto-global/) do lado do cliente.

Assista este vídeo para saber mais sobre [o que é o Node.js](https://www.youtube.com/watch?v=B0hc7hmpCD4)



Instalando o Node.js
---

Leia este artigo para aprender [como instalar o Node.js no Linux](/linux/instalando-nodejs/).



Nodeschool
---

A Nodeschool mantém uma séria de tutoriais interativos, um deles (acho que o primeiro) foi o __learnyounode__.

- [Nodeschool](http://nodeschool.io/)
- [Nodeschool - traduzido](https://github.com/lucasfcosta/learnyounode-pt-br)

A ideía é você aprender com o próprio __Node.js__, ou seja pelo terminal você instalará um programa __Node.js__ (learnyounode),
depois criará arquivos em __JavaScript__ que serão executados no terminal pelo __learnyounode__. Talvez você precisa de
nossa ajuda com uma [introdução ao 'learn you node'](introducao-ao-learnyounode/), caso contrário pode partir para a lista de 
exercícios...

<!-- 
{% include get-capitulo.html page_serie="learnyounode" %}
{% include menus.html %}
-->

<div class="list-group">
    <a href="introducao-ao-learnyounode/" class="list-group-item ">Nodeschool - Introdução ao learn you node</a>
    <a href="learnyounode-01-hello-world/" class="list-group-item ">Nodeschool - hello world</a>
    <a href="learnyounode-02-baby-steps/" class="list-group-item ">Nodeschool - baby steps</a>
    <a href="learnyounode-03-my-first-io/" class="list-group-item ">Nodeschool - My First I/O!</a>
    <a href="learnyounode-04-my-first-async-io/" class="list-group-item ">Nodeschool - My First Async I/O!</a>
    <a href="learnyounode-05-filtered-ls/" class="list-group-item ">Nodeschool - Filtered LS</a>
    <li class="list-group-item disabled">Make it modular (em breve)</li>
    <li class="list-group-item disabled">HTTP client (em breve)</li>
    <li class="list-group-item disabled">HTTP collect (em breve)</li>
    <li class="list-group-item disabled">Juggling Async (em breve)</li>
    <li class="list-group-item disabled">Time server (em breve)</li>
    <li class="list-group-item disabled">HTTP file server (em breve)</li>
    <li class="list-group-item disabled">HTTP uppercaserer (em breve)</li>
    <li class="list-group-item disabled">HTTP Json API server (em breve)</li>
</div>



Explorando bibliotecas
---

Descubra algumas das mais utilizadas bibliotecas para Node.js.

<div class="list-group">
    <a href="explorando-a-minuscula-biblioteca-utils-merge/" class="list-group-item ">Explorando a minúscula biblioteca utils-merge</a>
</div>



Testes unitários (Unit Test) com Node.js
---

Em breve, uma série de arquivos falando sobre __testes unitários__ e JavaScript no lado do servidor.


{% include get-capitulo.html page_serie="node-unit-tests" %}
{% include menus.html %}



Express
---

O [Express.js](http://expressjs.com/) é um dos frameworks mais utilizados do __Node.js__.

{% include get-capitulo.html page_serie="node-express" %}
{% include menus.html %}



Site Oficial
---

- [Node.js](http://nodejs.org/)
- [Node.js - comunidade Brasileira](http://nodebr.com/)