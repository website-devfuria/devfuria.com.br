---
title:       Code - Liga e desliga contador
description: Código em JavaScript que liga e desliga um contador com setInterval().
capitulo:    "javascript-artigos"
ordem:       6
---

Este é um exemplo da utilização da função interna `setInterval()` de JavaScript.

A idéia é termos 2 botões (start e stop) para iniciar e para a contagem. O resultado é exibido na [textbox](/html-css/formularios/text-box/)
denominada `display`.

A "mágica" toda está na função `setInterval(callback, milesegundos)`, ela recebe uma __função de callback__ que será
executada em um intervalo de `n` milesegundos. A cada iteração a função de callback será executada indefinidamente é
como se fosse um __função recursiva__. A função `setInterval` retorna um identificar que nos é muito útil quando queremos
para a animação, para tal utilizamos a função `clearInterval(identificador)`, exemplo:

```javascript
// iniciar a animação
var identificador = setInterval(callback, 1000);
// parar a animação
clearInterval(identificador);
```

É o que estamos fazendo com a variável `id`.

<p data-height="300" data-theme-id="2897" data-slug-hash="zfmkj" data-default-tab="js,result" data-user="flaviomicheletti" data-pen-title="Liga e desliga contador" class="codepen">See the Pen <a href="https://codepen.io/flaviomicheletti/pen/zfmkj/">Liga e desliga contador</a> by Flávio Micheletti (<a href="https://codepen.io/flaviomicheletti">@flaviomicheletti</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

Um porém é que, ao executarmos `clearInterval()` ele apenas interrompe a execução mas o valor da variável identificadora
continua sendo válido (`true`). Precisamos atribuir `null` explicitamente para anular o valor da variável.

Você deve ter reparado na [estrutura if](/javascript/if-else/) do botão "Start count!"...

```javascript
if(!id) {
  // A mágica...
    ...
    ...
    ...
}
```

...ele evita que a animação seja novamente inicializada uma vez que ela já esteja rodando.

Quanto aos botões, vale comentar que estamos anexando os eventos através da propriedade `onclick`, fiz isso para manter
o exemplo didaticamente simples, mas deveríamos estar utilizando [receptores de eventos](/javascript/tratando-eventos/).

