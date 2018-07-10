---
title:       LearnYouNode - My First I/O!
description: Terceiro exercício (My First I/O!) do Node.js da lista learnyounode da Nodeschool
capitulo:    "learnyounode"
ordem:       4
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

Escreva um programa que usa uma única operação síncrona de sistema de arquivos para ler e imprimir o número de novas
linhas que ele contém no console, algo similar à executar `cat file | wc -l`.

Todo o caminho até o arquivo à ser lido será fornecido como primeiro argumento da linha de comando.


### Dicas

Para realizar uma operação de sistema de arquivos (filesystem), você vai precisar do módulo `fs` da biblioteca (library)
principal do __Node__. Para carregar esse tipo de módulo ou qualquer outro módulo "global", use o seguinte código:

    var fs = require('fs')

Agora você tem o [módulo __fs__](http://nodejs.org/api/fs.html) completo disponível em uma variável
chamada `fs`.

Todas os métodos de sistema de arquivos síncronas (ou bloqueantes) no módulo __fs__ terminam com `Sync`.

Para ler um arquivo, você vai precisar usar `fs.readFileSync('caminho/do/arquivo')`. Esse método irá retornar um objeto
__Buffer__ contendo o conteúdo completo do arquivo.

Objetos __Buffer__ são a maneira do __Node__ de representar eficientemente __arrays arbitrários de dados__, sejam eles
ascii, binários ou quaisquer outros formatos. Objetos __Buffer__ podem ser convertidos em __strings__ invocando o método
`toString()` neles, por exemplo `var str = buf.toString()`. Leia mais sobre [o módulo Buffer](http://nodejs.org/api/buffer.html).

Se você estiver procurando por uma maneira fácil de contar o número de novas linhas em uma __string__, lembre-se que uma
__String JavaScript__ pode ser dividida usando `.split()` em um array de substrings e que `'\n'` pode ser usado como um
delimitador. Note que o arquivo de teste não possui um caractere de nova linha (`'\n'`) no fim da última linha, então ao
usar esse método você vai acabar tendo um __array__ com um elemento a mais do que o número de novas linhas.


### Solução

A primeira coisa que você precisará para este exercício será um arquivo de texto simples, veja um exemplo abaixo.

    1 linha 01
    2 linha 02
    3 linha 03
    4
    5

Eu dei o nome `program03-texto.md` ao arquivo, ele contém 5 linhas onde as 3 primeiras contém algum conteúdo e as 2 últimas
estão vazias.

O segundo passo é analisar o arquivo com o comando __Linux__ sugerido `cat file | wc -l`, no terminal do Linux execute:

    cat program03-texto.md | wc -l
    5

O resultado é `5`, já sabemos o que esperar de nosso programa.

Agora podemos abrir e ler o arquivo de texto.

```javascript
var contents = fs.readFileSync("program03-texto.md")
```

Se olharmos para a variável `contents` teremos...

    <Buffer 6c 69 6e 68 61 20 30 31 0a 6c 69 6e 68 61 20 30 32 0a 6c 69 6e 68 61 20 30 33 0a 0a 0a>

O método `toString()` vai nos ajudar com a leitura...

```javascript
contents.toString()
'linha 01\nlinha 02\nlinha 03\n\n\n'
```

Após aplicarmos o método `toString()` podemos então dividir a string conforme o caracter de final de linha `\n` utilizando
o método [split()](/javascript/split/).

```javascript
contents.toString().split('\n')
```

O resultado é um array como o apresentado abaixo:

```javascript
[ 'linha 01',
  'linha 02',
  'linha 03',
  '',
  '',
  '' ]
```

Agora podemos saber o tamanho do array acessando a propriedade `length`.

```javascript
contents.toString().split('\n').length
```

Reparamos que o símbolo `\n` está separando o final da linha. Se contarmos (visualmente) a quantidade de "\n" veremos
que são 6 ao todo, mas sabemos que o valor esperado é 5 conforme o resultado do comando `cat`. Teremos que
subtrair uma unidade ao total de linhas.

```javascript
contents.toString().split('\n').length - 1
```

Atribuímos o valor a uma variável denominada `line`.

```javascript
...
var lines = contents.toString().split('\n').length - 1
console.log(lines)
```

E não podemos nos esquecer de que o nome do arquivo deve chegar como um parâmetro de entrada na execução do script.
Vimos como fazer isso no exercício [02 baby steps](/node.js/learnyounode-02-baby-steps//).

```javascript
...
var contents = fs.readFileSync(process.argv[2])
...
```


### Código final

```javascript
// program03a.js
var fs   = require('fs')
var file = process.argv[2]

var contents = fs.readFileSync(file)
var lines    = contents.toString().split('\n').length - 1
console.log(lines)
```

Ao checar o resultado (`learnyounode verify program03a.js`) o aplicativo faz uma observação: "Você poderá evitar o
método `toString()` passando  `utf8` como segundo parâmetro da função `readFileSync()` e então você terá uma string."

Exemplo:

```javascript
fs.readFileSync(process.argv[2], 'utf8').split('\n').length - 1
```

Isso significa que podemos despresar a função `.tostring()`, pois o resultado de `fs.readFileSync(file, 'utf8')` é
igual a `fs.readFileSync(file).toString()`.

Atualizando o arquivo temos...

```javascript
// program03b.js
var fs   = require('fs')
var file = process.argv[2]

var lines = fs.readFileSync(file, 'utf8').split('\n').length - 1

console.log(lines)
```
