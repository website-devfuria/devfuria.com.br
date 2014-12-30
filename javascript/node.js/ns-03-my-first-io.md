---
layout:      grid93-article
title:       Nodeschool - exemplo 03 My First I/O!
description: 
menu:        javascript-ns
---

{% include /menus/javascript-ns-paraquedas.html %}


### Exercício

Escreva um programa que usa uma única operação síncrona de sistema de arquivos (filesystem) para ler e imprimir o número
de novas linhas que ele contém no console (stdout), algo similar à executar `cat file | wc -l`.

Todo o caminho até o arquivo à ser lido será fornecido como primeiro argumento da linha de comando.


### Dicas

Para realizar uma operação de sistema de arquivos (filesystem), você vai precisar do módulo `fs` da biblioteca (library)
principal do __Node__. Para carregar esse tipo de módulo ou qualquer outro módulo "global", use o seguinte código:

    var fs = require('fs')

Agora você tem o módulo __fs__ completo disponível em uma variável chamada `fs`.

Todas os métodos de sistema de arquivos síncronas (ou bloqueantes) no módulo __fs__ terminam com `Sync`. 

Para ler um arquivo, você vai precisar usar `fs.readFileSync('caminho/do/arquivo')`. Esse método irá retornar um objeto 
__Buffer__ contendo o conteúdo completo do arquivo.

Eis a [documentação do módulo __fs__](http://nodejs.org/api/fs.html "link-externo").


Objetos __Buffer__ são a maneira do __Node__ de representar eficientemente __arrays arbitrários de dados__, sejam eles
ascii, binários ou quaisquer outros formatos. Objetos __Buffer__ podem ser convertidos em __strings__ invocando o método
`toString()` neles, por exemplo `var str = buf.toString()`.

Eis a [documentação do módulo Buffer](http://nodejs.org/api/buffer.html "link-externo").

Se você estiver procurando por uma maneira fácil de contar o número de novas linhas em uma __string__, lembre-se que uma 
__String JavaScript__ pode ser dividida usando `.split()` em um array de substrings e que `'\n'` pode ser usado como um
delimitador. Note que o arquivo de teste não possui um caractere de nova linha (`'\n'`) no fim da última linha, então ao
usar esse método você vai acabar tendo um __array__ com um elemento a mais do que o número de novas linhas.


Solução
---

```javascript
var fs = require('fs')

var contents = fs.readFileSync(process.argv[2])
var lines = contents.toString().split('\n').length - 1
console.log(lines)
```



Próximo exercício
---

- [My First Async I/O!](/javascript/node.js/ns-02-baby-steps/)