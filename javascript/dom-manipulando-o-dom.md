---
title:       Manipulando o DOM - Document Object Model
description: Aprenda a manipular o elemento DOM Document Object Model
menu:        javascript-dom
---


Este artigo demonstra, de forma simples, como manipular o DOM (Document Object Model).

Se você precisa saber mais sobre o DOM, aconselho a ler o artigo [DOM - Document Object Model](/javascript/dom/).

Veremos as funções de manipulação do __DOM__:

- [document.createElement()](/javascript/dom-create-element/)
- [document.createTextNode()](/javascript/dom-create-text-node/)
- [appendChild()](/javascript/dom-append-child/)
- [insertBefore()](/javascript/dom-insert-before/)
- [removeChild()](/javascript/dom-remove-child/)


Criando, inserindo e removendo
---

Imagine que temos uma única lista em nosso documento e queremos criar e inserir mais alguns itens (`li`) para
essa lista. Começaremos com um único elemento `<ul>` representando a lista.

```html
<ul>
</ul>
```

Nosso objetivo é inserir alguns itens, chegando a este resultado:

```html
<ul>
    <li>mais um itens<li>
    <li>mais um itens<li>
    <li>mais um itens<li>
    <!-- etc...  -->
</ul>
```

Para criar um elemento utilizamos a função `document.createElement("nome-da-tag")`. Também devemos criar o nó de texto
que irá compor o novo elemento. "Juntamos" o nó de texto e o recém criado elemento através do método `appendChild()`.

No segundo bloco de código, recuperamos o único elemento `ul` acessando o primeiro item do array retornado por `getElementsByTagName()`.
E, finalmente, inserimos o elemento ao documento utilizando-se (novamente) da função `appendChild()`.

```javascript
// Criar o elemento <li> e o nó de texto.
// Após isso, anexar o nó de texto ao elemento
var elem  = document.createElement("li");
var texto = document.createTextNode("mais um item");
elem.appendChild(texto);

// Recuperar o elemento lista e 
// anexar o elemento <li> ao final de nossa lista <ul>
var lista = document.getElementsByTagName('ul')[0];
lista.appendChild(elem);
```


### Simplificando com `textContent`

Podemos economizar uma linha de código fazendo proveito da propriedade `textContent`. Ao invés de criar um nó de texto
e anexá-lo ao elemento, setamos a propriedade `textContent` com o texto desejado e simplificamos nosso código.

```javascript
// Criar o elemento <li> e o nó de texto,
// Só que desta vez, aproveitando-se da propriedade textContent
var elem  = document.createElement("li");
elem.textContent = "mais um item";

// Recuperar o elemento lista e 
// anexar o elemento <li> ao final de nossa lista <ul>
var lista = document.getElementsByTagName('ul')[0];
lista.appendChild(elem);
```


### Inserindo com insertBefore

Em nosso exemplo temos o seguinte HTML:

```html
<ul>
    <li>mais um itens<li>
    <li>mais um itens<li>
    <li>mais um itens<li>
</ul>
```

Se quisermos inserir um outro elemento `li` no lugar do terceiro item (no caso index `[2]`) poderemos fazer o seguinte.

```javascript
lista.insertBefore(elem, itens[2]);
```

- A variável `lista` deve conter a referência para a tag `ul`.

- A variável `elem` deve ser o nosso novo elemento.

- A variável `itens` deve ser uma coleção (array) com os elementos da lista.

Obedecendo aos critérios acima, temos...

```javascript
// Obtendo referências
var lista = document.getElementsByTagName('ul')[0];
var itens = lista.getElementsByTagName('li');

// Criando o elemento
var elem  = document.createElement("li");
elem.textContent = "outro item";

// Inserindo em posição específica
lista.insertBefore(elem, itens[2]);
```

O código acima, se executado uma única vez, obterá o seguinte resultado:

```html
<ul>
    <li>mais um itens<li>
    <li>mais um itens<li>
    <li>outro item<li>
    <li>mais um itens<li>
</ul>
```


### Removendo

Para remover um nó utilizamos a função `removeChild()`. Devemos chamar a função a partir do elemento pai (no caso `lista`) 
e passar como parâmetro o elemento a ser removido. Novamente precisaremos da coleção de itens da lista (variável `itens`).

```javascript
// Obtendo referências
var lista = document.getElementsByTagName('ul')[0];
var itens = lista.getElementsByTagName('li');

// Removendo determinado elemento
lista.removeChild(itens[2])
```

O código acima, se executado uma única vez, removerá o item de índice 2 (`outro item`) e teremos novamente:

```html
<ul>
    <li>mais um itens<li>
    <li>mais um itens<li>
    <li>mais um itens<li>
</ul>
```
