---
title:       JavaScript - NodeList (DOM)
description: As funções que acessam e selecionam elementos HTM em um página web retornam sempre um conjunto de elementos. Esse conjunto é denominado NodeList.
menu:        javascript-dom
---

Este artigo é uma referência prática ao NodeList (JavaScript). As funções que acessam e selecionam elementos HTML em um 
página web retornam sempre um conjunto  de elementos. Esse conjunto é denominado __NodeList__. Veja abaixo as funções:

- document.getElementsByName()
- document.getElementsByTagName()
- document.getElementsByClassName()
- document.querySelectorAll

A função `document.getElementById()` é a exceção, pois ela retorna um único elemento, logo, não temos um NodeList como 
resposta.

Ao criarmos um NodeList, podemos consultar o tamanho através da propriedade `length` e recuperar um elemento especifico
através do método `item()`. Esse método recebe o index do elemento como parâmetro. Exemplos:

```javascript
//
// Em um pagina contendo alguns parágrafos (tag `p`)...
//
var nodes = document.getElementsByTagName('p');

//
// O tamanho de NodeList
//
nodes.length

//
// Recuperando elementos - menos comum
//
var elem1 = nodes.item(0)
var elem2 = nodes.item(1)
var elem3 = nodes.item(2)

//
// Recuperando elementos de forma indexada - mais comum
//
var elem1 = nodes[0]
var elem2 = nodes[1]
var elem3 = nodes[2]
```


### Percorrendo o NodeList

O objeto NodeList é semelhante a um array somente para leitura, portanto você iterar o objeto NodeList com um laço padrão:

```javascript
var nodes = document.getElementsByTagName('p');

for (var i = 0; i < nodes.length; ++i) {
    console.log(nodes[i]);
}
```

Podemos utilizar `forEach` para iterar o NodeList? Não. O Nodelist é um objeto semelhante a um `Array`, apenas semelhante
e, portanto, métodos específicos para arrays não funcionarão no NodeList. Na verdade, há uma forma indireta de se fazer 
isso utilizando `Array.prototype.map.call()`.



### Tipo

O NodeList é um tipo, porém não há um método nativo [ECMAScript 5] que faça essa verificação, por exemplo:

    //
    // Código imaginário
    //
    var nodes = document.getElementsByTagName('p');
    nodes.isNodeList(); // Isto não existe

Por outro lado, pense: porque você precisaria confirmar se é ou não um NodeList?

O tipo de um nodelist é igual a `"object"`, veja:

    var nodes = document.getElementsByTagName('p');
    typeof nodes === "object" // true


### Seu conteúdo é dinâmico

Uma das características do NodeList é o fato dele ser dinâmico. Em outras palavras, sua lista pode variar à medida que o
documento muda. Por exemplo, você recupera os parágrafos de uma página e descobre que possui 20 desses elementos. Após
inserir um novo parágrafo, você consulta o tamanho de sua NodeList é percebe que agora possui 21 parágrafos.

```javascript
//
// 20 parágrafos
//
var nodes = document.getElementsByTagName('p');
console.log(nodes.length);

//
// Inserindo um novo parágrafo
//
var elemBody = document.getElementsByTagName('body')[0];
elemBody.appendChild(document.createElement('p'));

//
// 21 parágrafos
//
console.log(nodes.length);
```


### NodeList ou HTMLCollections ???

Se você conhece bem os console de navegadores e testou o retorno das funções que dissemos retornar um NodeList, verá
que nem sempre temos um objeto NodeList mas sim um objeto __HTMLCollection__.

Outros métodos para acessarem elementos como por exemplo `document.imagens` e `document.forms` também retornam um objeto
HTMLCollection.

São objetos distintos, porém tudo o que foi dito neste artigo para NodeList também se aplica ao HTMLCollection.


