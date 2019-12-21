---
title:       LearnYouNode - baby steps
description: Segundo exercício (baby steps) do Node.js da lista learnyounode da Nodeschool
capitulo:    "learnyounode"
ordem:       3
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

Escreva um programa que aceita um ou mais números como argumentos de linha de comando e imprime a soma desses números
no console.


### Dicas

Você pode acessar os argumentos da linha de comando através do objeto global `process`. Tal objeto possui a propriedade
`argv`, um array contendo os argumentos da linha de comando.

Para começar, escreva um programa que contenha simplesmente:

    console.log(process.argv)

Crie um arquivo chamado `program.js` e execute conforme o exemplo abaixo.

    node program.js 1 2 3

A saída do programa será algo parecido com o trecho abaixo.

    [ 'node', '/path/to/your/program.js', '1', '2', '3' ]

O seu trabalho é pensar em como fazer um "loop" através dos números de argumentos e então mostrar a soma deles, quero
dizer, mostrar a quantidade de argumentos passados a seu programa.

O primeiro elemento de `process.argv` é sempre `'node'` e o segundo elemento é sempre o caminho para seu arquivo.
Então, você precisará iniciar a partir do terceiro elemento e contar cada item até o final do array.

Esteja ciente de que todos os elementos de `process.argv` são strings e você precisará converter os valores para números
Você poderá fazer isto utilizando `+ process.argv[2]` ou `Number(process.argv[2])`.

O programa irá fornecer argumentos para seu programa quando você rodar `learnyounode verify program.js`, então você não
precisa se preocupar em fornecê-los. Para testar seu programa sem a verificação, você pode invocá-lo com
`learnyounode run program.js`. Quando você usa `run` você está invocando o ambiente de testes que o learnyounode prepara
para cada exercício.


### Solução 

```javascript
'use strict'
    
let result = 0

for (let i = 2; i < process.argv.length; i++) {
  result += Number(process.argv[i])
}

console.log(result)
```


### Solução (old)

```javascript
// program02.js
var length = process.argv.length,
    sum = 0;

for (i = 2; i < length; i++) {
    sum += Number(process.argv[i]);
};

console.log(sum);
```
