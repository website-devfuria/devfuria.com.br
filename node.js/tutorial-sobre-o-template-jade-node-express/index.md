---
title:       Tutorial sobre o template Jade (node + express)
description: Aprenda com este tutorial os primeiros passos com o template Jade (express.js)
capitulo:    "node-express"
---

O [Jade]() é um __template engine__ muito utilizado em conjunto com o [Express.js].s

Este é um tutorial introdutório sobre o __Jade__. Irei focar o tutorial no __Jade__, a integração dele com o  __Erxpress__
ficará para um próximo artigo.

Abaixo vemos um exemplo da sintaxe do __Jade__:

```jade
doctype html
html(lang="en")
  head
    title= pageTitle
    script(type='text/javascript').
      if (foo) bar(1 + 5)
  body
    h1 Jade - node template engine
    #container.col
      if youAreUsingJade
        p You are amazing
      else
        p Get on it!
      p.
        Jade is a terse and simple templating language with a
        strong focus on performance and powerful features.
```

Que, após convertido, se transformará em...

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jade</title>
    <script type="text/javascript">
      if (foo) bar(1 + 5)
    </script>
  </head>
  <body>
    <h1>Jade - node template engine</h1>
    <div id="container" class="col">
      <p>You are amazing</p>
      <p>Jade is a terse and simple templating language with a strong focus on performance and powerful features.</p>
    </div>
  </body>
</html>
```

No __Jade__ é preciso respeitar o espaçamento entre as tags separando cada tag por tabulação ou por espaços. Não é permitido
ter uma página utilizando os dois meios, ou é um ou é outro.

O site [www.learnjade.com](http://www.learnjade.com/) mantém um tutorial genial para entender como o
__Jade__ funciona. Na aba "Jade Tour" é possível ver exemplos bastantes lúdicos.

Veja outros exemplos:

<table>
<tr>
    <th>sintaxe jade</th><th>será convertido em html....</th>
</tr>
<tr>
    <td><code>p Hello, World!</code></td><td><code>&lt;p&gt;Hello, World!&lt;/p&gt;</code></td>
</tr>
<tr>
    <td><code>p</code></td><td><code>&lt;p&gt;&lt;/p&gt;</code></td>
</tr>
<tr>
    <td><code>div</code></td><td><code>&lt;div&gt;&lt;/div&gt;</code></td>
</tr>
<tr>
    <td><code>h1</code></td><td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
</tr>
<tr>
    <td><code>img</code></td><td><code>&lt;img/&gt;</code></td>
</tr>
<tr>
    <td><code>input</code></td><td><code>&lt;input/&gt;</code></td>
</tr>
</table>



Começo rápido
---

Primeiro, vamos instalar a biblioteca a partir do [npm](/linux/instalando-npm/). Para tal, vamos criar uma pasta qualquer
para o nosso experimento.

    mkdir ~/seu-projeto
    cd ~/seu-projeto

No terminal execute como usuário comum:

    npm install jade -g

Você deve ver algo parecido com o seguinte.

    jade@1.8.2 node_modules/jade
    ├── character-parser@1.2.1
    ├── void-elements@1.0.0
    ├── commander@2.5.1
    ├── mkdirp@0.5.0 (minimist@0.0.8)
    ├── transformers@2.1.0 (promise@2.0.0, css@1.0.8, uglify-js@2.2.5)
    ├── with@4.0.0 (acorn-globals@1.0.1, acorn@0.8.0)
    └── constantinople@3.0.1 (acorn-globals@1.0.1)

Para testar execute `jade --version`, a minha versão instalada foi a `1.8.2`.

Experimente no terminal...

    $ node
    > var jade = require('jade');
    > var fn = jade.compile('string of jade');
    > var html = fn();
    > html
    '<string>of jade</string>'



Sites oficiais
---

- [Jade](http://jade-lang.com/)
- [Jade - GitHub](https://github.com/jadejs/jade)
- [Jade - NPM](https://www.npmjs.com/package/jade)