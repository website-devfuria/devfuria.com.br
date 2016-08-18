---
title:       JavaScript - querySelectorAll()
description: Referência prática da função querySelectorAll()
menu:        javascript-dom
---

```javascript
var elem = document.querySelectorAll('seletor');
```

Este é o método definitivo de seleção de elemento: trata-se de uma técnica muito poderosa por meio da qual os programas
JavaScript do lado do cliente podem selecionar os elementos do documento que vão manipular. (Flanagan)

Se você conhece bem CSS irá entender com mais facilidade este artigo.

As folhas de estilos CSS possuem o que chamamos de [seletores](/html-css/seletores-css/), um mecanismo para descrever
elementos ou conjuntos de elementos dentro de um documento. Eis alguns poucos exemplos:

```css

/* todos os parágrafos*/
p {}

/* todos os parágrafos e todos os títulos */
p, h1 {}

/* qualquer elemento com 'warning' em seu atributo 'class' */
.warning {}

/* um elemento com id="nav"*/
#nav {}

/* qualquer elemento span com 'fatal' e 'error' em sua classe */
span.fatal.error {}
```

A funcao `querySelectorAll()` permite que os seletores CSS sejam usados no JavaScript, veja:

```javascript
var elem = document.querySelectorAll('p');
var elem = document.querySelectorAll('p, h1');
var elem = document.querySelectorAll('.warning');
var elem = document.querySelectorAll('#nav');
var elem = document.querySelectorAll('span.fatal.error ');
```

A funcao `querySelectorAll()` recebe um argumento de string contendo um seletor CSS e retorna um objeto 
[NodeList](/javascript/dom-nodelist/) representando os elementos do documento que correspondem ao seletor. Se nenhum 
elemento coincide, a função retorna um objeto NodeList vazio. Se a string do seletor é invpalida, `querySelectorAll()`
lançará um exceção.

O método `querySelectorAll()` faz parte tanto do objeto Document como do objeto Element.

Segundo Flanagan, não é possível utilizar pseudoelementos como por exemplo: `:first-line` e `first-letter`.

Além de `querySelectorAll()`, temos a semelhante `querySelector()`. Esta última, retorna somente o primeiro (na ordem
do documento) elemento coincidente ou `null`, caso não haja elementos correspondentes.

Todos os navegadores atuais suportam ambos os métodos, não testei no IE9. No IE8 com certeza não funciona.

Você poderá utilizar lançando mão de uma biblioteca como a jQuery, por exemplo. Ela (a biblioteca) usa esse tipo de 
consulta baseada em seletor CSS como principal paradigma de programação. Os aplicativos Web baseados na jQuery utilizam
um equivalente de `querySelectorAll()` portável e independente de navegador chamado `$()`.

<hr>
Fonte: David Flanagan em seu livro “JavaScript: O guia definitivo” pág. 360
