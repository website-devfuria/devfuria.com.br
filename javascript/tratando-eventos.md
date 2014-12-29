---
layout:      grid12-article
title:       Tratando Eventos (de navegadores)
description: Trabalhando com eventos no JavaScript
---

Eventos são ações geradas pelo navegador web quando acontece alguma interessante no documento, no próprio navegador ou em
algum elemento ou objeto associado a ele. São ocorrências a respeito das quais seu programa vai ser notificado pelo 
navegador. (David Flanagan em seu livro "JavaScript: O guia definitivo", capítulo 17)

Há os mais variados tipos de eventos:

- __click__, quando clicamos sobre o elemento
- __dbclick__, duplo clique
- __onchange__, quando algo é alterado
- etc...

Veja os [eventos](http://www.w3.org/TR/1998/REC-html40-19980424/interact/scripts.html#h-18.2.3 "link-externo")
que foram especificados na HTML4 (ainda na 4).

Antigamente, atribuíamos o evento diretamente no elemento HTML como no exemplo abaixo.

```html
<button id="btn" onclick="clickMe();">Clique aqui!</button>
```

Isso ainda funciona, mas não é um boa prática. Veja o que __Stefanov__ nos diz sobre o assunto: "Você pode adicionar um
atributo `onclick` inline e isso funcionará em todos os navegadores, mas violará a separação de interesses e a melhoria 
progressiva. Portanto, você deve se esforçar por anexar o 'listener' no JavaScript, fora de qualquer marcação.".

A solução proposta pelo Flanagam é a seguinte:

```javascript
var e = document.getElementById('btn');
e.onclick = function () {
    console.log("você clicou no botão");
}
```

O HTML não mais precisará da propriedade `onclick=""`.

Notamos o esforço para anexar a função ao evento sem apelar para ajuda do HTML, mas essa ainda não é o ideal, essa forma
é condizente com a especificação do __DOM 1__. Já a especificação do __DOM 2__ trouxe os __receptores de eventos__, 
essa é a forma ideal, veja exemplo:

```javascript
var e = document.getElementById('btn');
var foo = function () {
    console.log("você clicou no botão");
}
e.addEventListener('click', foo, false);
```

Quando você anexa um listener (ouvinte) de eventos a um elemento em uma página, na verdade você está fornecendo um
ponteiro para uma função __callback__ que será chamada quando o evento ocorrer. A maior parte da programação de navegador
no lado do cliente é orientada a eventos. Quando a página termina de carregar, ela dispara um evento __load__. Então o
usuário interage com a página e causa o disparo de inúmeros eventos, como click, keypress, mouseover, mousemove e assim
por diante. O JavaScript é especialmente capacitado para programação orientada a eventos por causa do __padrão callback__,
que permite a seus programas serem executados de maneira __assincrona__, ou, em outras palavras, fora de ordem 
(Padrões JavaScript, Stefanov, pág 85.).

<!--
http://eloquentjavascript.net/1st_edition/chapter13.html
-->