---
title:       Code - Somando
description: Código em JavaScript que soma e subtrai um número.
capitulo:    "javascript-artigos"
ordem:       2
---

Este é um exemplo de JavaScript extremamente simples.

Se você nunca viu JavaScript e está começando a aprender, este é o exemplo mais básico que eu arrumei.

O exemplo serve também para entender um pouco sobre escopo, veja a variável `num`.

De diferente, temos, além da função [getElementById()](/javascript/getelementbyid/), a função `innerHTML()`.

Ela "escreve" HTML no elemento referenciado, em nosso caso no elemento `p` (parâgrafo).

<p data-height="300" data-theme-id="2897" data-slug-hash="mJhKg" data-default-tab="js,result" data-user="flaviomicheletti" data-pen-title="Somando" class="codepen">See the Pen <a href="https://codepen.io/flaviomicheletti/pen/mJhKg/">Somando</a> by Flávio Micheletti (<a href="https://codepen.io/flaviomicheletti">@flaviomicheletti</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

Preciso alertar que essa implementação não é a forma ideal de se programar em JavaScript. Na verdade, essa era a forma
ideal praticada no anos 90. Hoje (nov/2014), podemos/devemos ao menos fazer algumas observações...

Primeiro, estamos [poluindo o espaço global](/javascript/objeto-global/). A variável `num` e nossas 3 funções estão
"soltas", elas deveriam estar em um container, por exemplo:

```javascript
var app = {
    num: 0,
    add: function() {
        ...
    },
    sub: function() {
        ...
    },
    mostrar: function() {
        ...
    }
}
```

Segundo, estamos utilizando a propriedade [onclick](https://developer.mozilla.org/en-US/docs/Web/API/GlobalEventHandlers.onclick)
dos botões HTML, não que isso seja proibido, mas normalmente "buscamos" o elemento via JavaScript e atribuímos a função desejada via código, exemplo:

```javascript
var elem = document.getElementById("id-do-seu-botao");
elem.onclick = function() {
    ...
}
```

Ainda na questão do evento __onclick__, quando fazemos `elem.onclick = function(){}` ficamos limitados a atribuir uma
única função ao evento __onclick__ além de estarmos utilizando uma técnica ultrapassada (`elem.onclick`).

A forma ideal seria anexar funções com os recepetores de eventos (`addEventListener()`), veja exemplo:

```javascript
var elem = document.getElementById("id-do-seu-botao");
var foo = function () {
    ...
}
elem.addEventListener('click', foo, false);
```

Para mais informações sobre como trabalhar com eventos no JavaScript leia
[Tratando Eventos (de navegadores)](/javascript/tratando-eventos/).

