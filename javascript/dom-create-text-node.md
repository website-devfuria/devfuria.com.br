---
layout:      grid93-article
title:       JavaScript - Create Text Node (DOM)
description: Referência prática da função createTextNode()
menu:        javascript-dom
---

A função `createTextNode` cria um nó de texto e auxilia na criação de um elemento [DOM](/javascript/dom/).

Imagine que queiramos inserir um título (tag `h1`) ao elemento `body` de nossa página HTML.

Primeiro buscamos o elemento pai.

    var elemento_pai = document.body;

Agora criamos o elemento DOM.

    var titulo = document.createElement('h1');

Mas só o elemento não basta, precisamos de um texto para ele, ou seja, de um nó de texto.

Adivinha que função utilizaremos para fazer isso?

    var texto = document.createTextNode("Um título qualquer");

Anexamos o nó de texto ao elemento
    
    titulo.appendChild(texto);

E, finalmente, anexamos o elemento título ao elemento pai, no caso `body`.

    elemento_pai.appendChild(titulo);

Veja o código completo a seguir.

```javascript
//
// Peque exemplo que criar um elemento DOM
// com um nó de texto.
//
var elemento_pai = document.body;
var titulo       = document.createElement('h1');
var texto        = document.createTextNode("Um título qualquer");
titulo.appendChild(texto);
elemento_pai.appendChild(titulo);
```

Leia a matéria [JavaScript - Create Element (DOM)](/javascript/dom-create-element/) para saber mais detalhes de como 
criar um elemento DOM.
