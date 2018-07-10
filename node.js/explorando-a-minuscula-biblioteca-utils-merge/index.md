---
layout:      artigo
title:       Explorando a minúscula biblioteca utils-merge
description: O pacote utils-merge é uma biblioteca que possui apenas uma função e será objeto de estudos nesta matéria.
---

Este artigo é um estudo com exemplos reais da utilização básica do [Node.js](/node.js/).
Ele demonstra como é a dinâmica ou o dia a dia de se trabalhar com Node.js, claro que estamos falando dos aspectos
básicos e práticos, um artigo "mão na massa".
Iremos utilizar o pacote [utils-merge](https://www.npmjs.com/package/utils-merge) como exemplo.
Vamos aprender a instalar o pacote via [npm](/linux/instalando-npm/), vamos também [clonar](/git/git-clone/) o projeto
do [github](/git/) e rodar os teste com o [mocha](/node.js/testando-javascript-com-o-mocha/).
Portanto, eu espero que você tenha um conhecimento mínimo do [git e git-hub](/git/) e também tenha uma certa intimidade
com o [terminal do Linux](http://www.hardware.com.br/livros/linux/usando-terminal.html), sem se esquecer
do próprio [Linux](/linux/). Você também deve ter [instalado o Node](/linux/instalando-nodejs/) e ter
praticado um pouco de [JavaScript](/javascript/).



### Apresentando a biblioteca utils-merge

Imagine que você precisa de uma função para juntar a propriedade de dois objetos, algo como o exemplo abaixo.

```javascript
var a = { foo: 'bar' }
  , b = { bar: 'baz' };

merge(a, b);
// { foo: 'bar', bar: 'baz' }
```

Você acha que consegue implementar uma função para realizar o esperado acima?

A biblioteca para Node [utlis-merge](https://github.com/jaredhanson/utils-merge) resolve este problema.

O único porém é que ele resolve apenas isto, que dizer, é uma biblioteca com um única função, você acredita nisso?

Eu procurava um biblioteca simples para facilitar o estudos e bingo! Encontrei.

O que me surpreendeu foi a importância dessa biblioteca, ela é utilizada em mais de 60 outros pacotes incluindo
frameworks e bibliotecas. Para você ter uma idéia, o famoso framework [Express](http://expressjs.com/)
depende desta biblioteca para funcionar. O que faz da biblioteca algo tão especial? Sinceramente, não sei te responder.
Só sei que como objeto de estudos ela se mostrou sem igual, talvez seja isso. Então vamos lá...




### Experimentando

Primeiro, vamos instalar a biblioteca a partir do [npm](/linux/instalando-npm/). Para tal, vamos criar uma pasta qualquer
para o nosso experimento.

    mkdir ~/seu-projeto
    cd ~/seu-projeto

No terminal execute como usuário comum:

    npm install utils-merge

Você deve ver algo parecido com o seguinte.

    utils-merge@1.0.0 node_modules/utils-merge

Repare que o npm criou um pasta chamada `node_modules` e dentro dela outra pasta chamada `utils-merge`, nossa estrutura ficou assim:

    ~/seu-projeto
        /node_modules
            /utils-merge

Tenha a certeza de estar na pasta `seu-projeto`, execute `pwd`. Agora, crie um arquivo qualquer, por exemplo
`programa.js` e insira o seguinte conteúdo:

```javascript
var merge = require('utils-merge');

var a = { foo: 'bar' }
  , b = { bar: 'baz' };

console.log(merge(a, b));
```

Volte para o terminal e execute `node programa.js`, o resultado deve ser:

    { foo: 'bar', bar: 'baz' }

Ao invés de criar um arquivo, você poderia tentar tudo via terminal, só não precisaríamos do `console.log()`.

    $ node
    > var merge = require('utils-merge');
    > var a = { foo: 'bar' }
    > var b = { bar: 'baz' }
    > merge(a, b)
    { foo: 'bar', bar: 'baz' }


### Clonar o projeto e rodar os testes

Conforme o `readme` do projeto, para rodar os teste basta executar na sequência:

    npm install
    npm test

Mas antes você deve [clonar](/git/git-clone/) o projeto.

A URL do projeto é `https://github.com/jaredhanson/utils-merge.git`.

Agora sim podemos rodar os comando sugeridos na pasta onde foi clonado o repositório.

Ao executar `npm install` ele instala as dependências dos testes, o [chai e o mocha](/node.js/testando-javascript-com-o-mocha/).

    chai@1.10.0 node_modules/chai
    ├── assertion-error@1.0.0
    └── deep-eql@0.1.3 (type-detect@0.1.1)

    mocha@1.21.5 node_modules/mocha
    ├── escape-string-regexp@1.0.2
    ├── diff@1.0.8
    ├── growl@1.8.1
    ├── commander@2.3.0
    ├── jade@0.26.3 (commander@0.6.1, mkdirp@0.3.0)
    ├── debug@2.0.0 (ms@0.6.2)
    ├── mkdirp@0.5.0 (minimist@0.0.8)
    └── glob@3.2.3 (inherits@2.0.1, graceful-fs@2.0.3, minimatch@0.2.14)


Ao executar `npm test` obtemos...

    merge
      an object
        ✓ should merge properties into first object
        ✓ should return first argument
      an object with duplicate key
        ✓ should merge properties into first object
        ✓ should return first argument
      without a source object
        ✓ should leave first object unmodified
        ✓ should return first argument

    utils-merge
      ✓ should export function

      7 passing (7ms)


