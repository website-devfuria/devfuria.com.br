---
layout:      grid93-article
title:       JavaScript - Create Element (DOM)
description: Referência prática da função createElement() - JavaScript
menu:        javascript-dom
---


A função `createElement()` irá criar um elemento HTML para ser, posteriormente, inserido em um documento HTML.

Veja a sintaxe da função:

```javascript
var element = document.createElement(tagName);
```

- `tagName` é uma string que especifica o tipo do elemento, é uma tag HTML.
- `element` é o objeto criado e retornado pela função

Aparentemente, a função não surte efeito algum, precisamos aplicar o método `appendChild()` para que o elemento seja,
efetivamente, inserido ao documento HTML e torne-se visível ao usuário. Além disso precisamos definir (buscar) um elemento
pai, ou seja, o elemento HTML que receberá nosso elemento (recém criado) como filho.

```javascript
// Buscar elemento pai
var elemento_pai = document.body;
// Criar elemento
var titulo = document.createElement('h1');
// Inserir (anexar) o elemento filho (titulo) ao elemento pai (body)
elemento_pai.appendChild(titulo);
```

Há um porém, o código acima irá inserir corretamente o título ao corpo do documento, só que não haverá título algum, pois
apenas a tag `h1` foi inserida, falta o nó de texto. Quer dizer, temos o resultado...

```html
<body>
    <h1></h1>
</body>
```

...e precisamos de um texto para a tag `h1`. Para criar o nó de texto utilizamos a função `createTextNode()` e também
anexar o nó ao elemento em questão, resumidamente:

```javascript
var titulo = document.createElement('h1');
var texto  = document.createTextNode("Um título qualquer");
titulo.appendChild(texto);
```

Atualizando nosso código com o trecho acima, teremos...

```javascript
// Buscar elemento pai
var elemento_pai = document.body;
// Criar elemento
var titulo = document.createElement('h1');
// Criar o nó de texto
var texto = document.createTextNode("Um título qualquer");
// Anexar o nó de texto ao elemento h1
titulo.appendChild(texto);
// Agora sim, inserir (anexar) o elemento filho (titulo) ao elemento pai (body)
elemento_pai.appendChild(titulo);
```

Aí então, chegaremos ao resultado esperado:

```html
<body>
    <h1>Um título qualquer</h1>
</body>
```


## textContent

Outra forma de chegar ao mesmo resultado é utilizar a prorpiedade `textContent`. Ao invés de criar e anexarmos um nó de 
texto podemos lançar mão da propriedade `textContent` do elemento que estamos criando.

As duas linhas abaixo criam o elemento e seu texto equivalente.

```javascript
var titulo = document.createElement('h1');
titulo.textContent = "Um título qualquer"

```

Atualizando nosso código, teremos...

```javascript
// Buscar elemento pai
var elemento_pai = document.body;
// Criar elemento
var titulo = document.createElement('h1');
// Criando o nó de texto de outra forma
titulo.textContent = "Um título qualquer"
// Inserir (anexar) o elemento filho (titulo) ao elemento pai (body)
elemento_pai.appendChild(titulo);
```


Inserindo com insertBefore
---

Em breve!

