---
title:       JavaScript - getElementsByClassName()
description: Referência prática da função getElementsByClassName()
menu:        javascript-dom
---

O atributo `class` de uma UTML é uma lista separada de zero ou mais identificadores por espaços. Ele descreve uma maneira
de definir conjuntos de elementos relacionados do documento: todos elementos que possuem o mesmo identificador em seu 
atributo `class` fazem parte do mesmo conjunto. Exemplo:

```html
<p class="diferente">
    Este parágrafo sofre estilizações da classe CSS "diferente"
</p>

<p class="destacado">
    Este parágrafo sofre estilizações da classe CSS "destacado"
</p>

<p class="destacado discreto">
    Este parágrafo sofre estilizações das classes CSS "destacado" e "discreto"
</p>

<p class="diferente discreto">
    Este parágrafo sofre estilizações das classes CSS "diferente" e "discreto"
</p>
```

A [HTML5](/html-css/) define um método `getElementsByClassName` que nos permite selecionar conjuntos de elementos do 
documento com base nos identificadores que estão em seu atributo `class`. Ela é implementada por todos os navegadores,
exceto IE8 e anteriores. Porém, o IE8 suporta a função [querySelectorAll()](/javascript/dom-queryselectorall/).

```javascript
var elementos = document.getElementByClassName("nome-da-classe");
```

A função retorna um [NodeList](/javascript/dom-nodelist/) contendo todos os descendentes coincidentes do documento ou 
elemento. 

Como parâmetro, ela recebe um único argumento de string, mas a string pode especificar vários identificadores separados 
por espaços. Somente os elementos que incluem todos os  identificadores especificados em seus atributos `class` são 
coincidentes. A ordem dos identificadores não importa.

```javascript
// 1 parágrafo
var elementos = document.getElementByClassName("diferente");

// 2 parágrafo
var elementos = document.getElementByClassName("destacado");

// 3 parágrafo
var elementos = document.getElementByClassName("destacado discreto");

// 4 parágrafo
var elementos = document.getElementByClassName("diferente discreto");
```

A comparação da string, passada como parâmetro, diferencia caixa alta (maiúsculas) de caixa baixa (minúsculas). Mas não
diferenciará caso o navegadores esteja exibindo páginas HTML no "modo Quirks".

A função pode ser chamada (evocada) a partir da classe Document (`document.getElementByClassName()`) ou a partir da 
classe Element (`elem.getElementByClassName()`), veja exemplo a seguir.

```javascript
//
// Document
//
var lis = document.getElementsByClassName("ativo");

//
// Element
//
var lista = document.getElementsById("lista");
var itens = lista.getElementsByClassName("ativo");
```