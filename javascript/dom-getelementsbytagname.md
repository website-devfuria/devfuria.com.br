---
layout:      grid93-article
title:       JavaScript - getElementsByTagName()
description: Referência prática da função getElementsByTagName() - JavaScript
menu:        javascript-dom
---

Todos os elementos HTML podem ser selecionados usando-se o método `getElementsByTagName()` do objeto __Document__. O 
retorno da função é um objeto semelhante a um array somente para leitura contendo os objetos __Element__ conforme 
definido no parâmetro.


Para buscar todas as tags `span` de um documento escrevemos:

```javascript
var spans = document.getElementsByTagName('span');
```

Para buscar todos os parágrafos de um documento escrevemos:

```javascript
var paragrafos = document.getElementsByTagName('p');
```

Para buscar todos os elementos da página, basta passar como parãmetro o asterisco `"*"`:

```javascript
var todosElementos = document.getElementsByTagName("*");
```


### Também serve para classe Element

A classe Element também define um método `getElementsByTagName()`. Ele funciona da mesma maneira que a versão de Document,
mas seleciona apenas os elementos descendentes do elemento no qual é chamado.

Considere o HTML abaixo.

```html
<ul>
    <li>primeiro item</li>
    <li>segundo  item</li>
    <li>terceiro item</li>
</ul>

<ul>
    <li>outro primeiro item</li>
    <li>outro segundo  item</li>
    <li>outro terceiro item</li>
</ul>
```

O código abaixo selecionaria todas as listas (`ul`) do documento.

```javascript
//
// Document
//
var uls = document.getElementsByTagName("ul");
```

O código abaixo selecionaria todas os itens de todas as listas do documento, em nosso caso, os 6 itens (3 da primeira 
lista mais 3 da segunda lista).

```javascript
//
// Document
//
var lis = document.getElementsByTagName("li");
```

O código retornará apenas os 3 itens da primeira lista.

```javascript
//
// Element
//
var lisPrimeiraLista = uls[0].getElementsByTagName("li");
```

O código retornará apenas os 3 itens da segunda lista.

```javascript
//
// Element
//
var lisSegundaLista = uls[1].getElementsByTagName("li");
```

