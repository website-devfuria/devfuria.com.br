---
layout:      grid12-article
title:       Manipulando o DOM - Document Object Model
description: Aprenda a manipular o elemento DOM Document Object Model
---

Isto é um rascunho...

Podemos criar, inserir e excluir elementos da árvore DOM.

A função `document.createElement()` aceita como parâmetro o nome da tag e retorna o elemento recém criado (mas ainda não inserido).

```javascript
var elem = document.createElement("li");
console.log(elem);
// <li>
```

Inserimos o elemento com a função `document.appendChild()`, mas ainda precisamos criar um nó de texto para o elemento, 
caso contrário, estaremos inserindo apenas o elemento, sem texto. Para criar um nó de texto utilizamos a função 
`document.createTextNode()`.

```javascript
var texto = document.createTextNode("mais um item");
console.log(texto);
// "mais um item"
```

Antes de inserir o elemento, devemos anexar o nó de texto a ele.

```javascript
elem.appendChild(texto);
```

De posse de um elemento completo, podemos então, anexá-lo a um elemento `<ul>` já existente em nossa página HTML.


```javascript
// Recuperar o elemento lista
var lista = document.getElementsByTagName('ul')[0];

// Anexar o elemento <li> ao final de nossa lista <ul>
lista.appendChild(elem);
```

O exemplo completo você confere a seguir.

```javascript
// Criar o elemento <li> e o nó de texto
// após isso, anexar o nó de texto ao elemento
var elem  = document.createElement("li");
var texto = document.createTextNode("mais um item");
elem.appendChild(texto);

// Recuperar o elemento lista e 
// anexar o elemento <li> ao final de nossa lista <ul>
var lista = document.getElementsByTagName('ul')[0];
lista.appendChild(elem);
```