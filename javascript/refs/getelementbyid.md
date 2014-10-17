---
layout:      grid93-article
title:       JavaScript - getElementById()
description: Referência prática da função getElementById() - JavaScript
menu:        javascript-refs
---


Isto é um rascunho!


Ela busca e retorna o elemento através de seu identificador, a propriedade id="", veja:

document.getElementById("id");

O resultado (o elemento) nós armazenamos em uma variável (com um nome bem bacana) para podermos acessar suas propriedades, exemplo:

var objElem = document.getElementById("id");

De posse do elemento, utilizaremos a propriedade value. Ela refere-se ao valor do campo, seja ele uma textbox, um password ou uma textarea.

Podemos recuperar o valor:

var objElem = document.getElementById("id");
console.log(objElem.value);

Ou alterar o valor:

var objElem = document.getElementById("id");
objElem.value = "outro texto qualquer";

De forma mais sucinta:

document.getElementById("id").value = "outro texto qualquer";

<hr/>
Fonte

- Manual do JS (MDN) falando sobre a função [getElementById()](https://developer.mozilla.org/en-US/docs/Web/API/document.getElementById "link-externo")