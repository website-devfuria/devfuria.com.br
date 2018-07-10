---
title:       LearnYouNode - Filtered LS
description: Quinto exercício (Filtered LS) do Node.js da lista learnyounode da Nodeschool
capitulo:    "learnyounode"
ordem:       6
---

<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <p>
        Se você caiu de paraquêdas nesta página, nós estamos na subseção <strong>Node.js</strong> aprendo a programar
        <strong>Javascript</strong> do lado do servidor com a ajuda do programa <strong>learnyounode (nodeschool)</strong>.
    </p>
    <p>Talvez você queira dar uma lida nesta <a href="/node.js/introducao-ao-learnyounode/">introdução</a>.</p>
</div>


### Exercício

Crie um programa que imprima uma lista de arquivos filtrados por suas extensões em um dado diretório.

Você irá receber um nome de diretório como primeiro argumento para seu programa, por exemplo:

    node program.js 'caminho/para/diretorio/'

E também uma extensão de arquivo pela qual filtrar como segundo argumento, exemplo:

    node program.js 'caminho/para/diretorio/' 'txt'

Conforme o exemplo acima, você precisará criar um filtro para que a lista contenha apenas arquivos que terminem com .txt.

Note que o segundo argumento não irá vir precedido por um '.' (ponto).

A lista de arquivos deve ser impressa no console, um arquivo por linha.

Você precisa, obrigatóriamente, usar I/O assíncrono.


### Dicas

O método `fs.readdir()` recebe o caminho de um diretório como seu primeiro argumento e um callback como seu segundo.

A assinatura do callback é:

```javascript
function callback (err, list) { /* ... */ }
```

onde `list` é um array de strings contendo nomes de arquivos.

O método `path.extname()` pode ajudar, veja a
[documentação do Node](https://nodejs.org/api/path.html#path_path_extname_path).


### Solução

Que tal começarmos utilizando o método `fs.readdir()` mencionado na dica?

```javascript
var fs   = require('fs')

fs.readdir(folder, function (err, list) {
  list.forEach(function(file) {
    //
    // examinar a extensão do arquivo
    //
  })
})
```

Como segundo passo, podemos incluir os parâmetros desejados.


```javascript
var fs   = require('fs')

var folder = process.argv[2]
var ext    = '.' + process.argv[3]

fs.readdir(folder, function (err, list) {
  list.forEach(function(file) {
    //
    // examinar a extensão do arquivo
    //
  })
})
```

Agora só falta examinar se a extensão do arquivo, faremos isso com ajuda da função `path.extname()`.

Inclua o módulo principal...

```javascript
var path = require('path')
```

... e implemente o trecho que examinará a extensão do arquivo.

```javascript
if (path.extname(file) === ext) {
    console.log(file)
}
```

Veja o como ficou o resultado logo abaixo.


### Código final

```javascript
// program05.js
var fs   = require('fs')
var path = require('path')

var folder = process.argv[2]
var ext    = '.' + process.argv[3]

fs.readdir(folder, function (err, list) {
  if (err) return console.error(err)
  list.forEach(function(file) {
      if (path.extname(file) === ext) {
          console.log(file)
      }
  })
})
```