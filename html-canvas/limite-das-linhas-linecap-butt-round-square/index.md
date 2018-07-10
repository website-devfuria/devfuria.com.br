---
title:       Limite das linhas (lineCap, butt, round, square)
description: Artigo demonstrando como manipular os limites da linha de um Canvas
capitulo:    "canvas"
ordem:       5
---

O método `lineCap()` define as extremidades das linhas.

Os valores podem ser `"butt"`, `"round"` e `"square"`.

Criei a função `desenharLinhasGuias()` para ajudar no entendimento deste artigo, veja o resultado:

<p><img src="canvas1.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex00');
var context = canvas.getContext('2d');

function desenharLinhasGuias(context){
    context.beginPath();
    context.moveTo(10, 10);
    context.lineTo(140, 10);
    context.moveTo(10, 140);
    context.lineTo(140, 140);
    context.lineWidth = 1;
    context.strokeStyle = '#09f';
    context.stroke();
    context.closePath();
}
desenharLinhasGuias(context);
```



Butt
---

<p><img src="canvas2.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75, 10);
context.lineTo(75, 140);
context.lineCap = 'butt';
context.lineWidth = 15;
context.stroke();

desenharLinhasGuias(context);
```



Round
---

<p><img src="canvas3.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75, 10);
context.lineTo(75, 140);
context.lineCap = 'round';
context.lineWidth = 15;
context.stroke();

desenharLinhasGuias(context);
```



Square
---

<p><img src="canvas4.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75, 10);
context.lineTo(75, 140);
context.lineCap = 'square';
context.lineWidth = 15;
context.stroke();

desenharLinhasGuias(context);
```

