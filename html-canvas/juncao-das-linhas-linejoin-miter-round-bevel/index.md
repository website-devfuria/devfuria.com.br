---
title:       Junção das linhas (lineJoin, miter, round, bevel)
description: Entenda o método lineJoin() do Canvas e suas propriedades (miter, round e bevel)
capitulo:    "canvas"
ordem:       4
---


O que faz o método `lineJoin()`?

> Estilo de ligação entre linhas no ponto de encontro.
>
> Danny Goodman (Javascript - Guia prático, pag 371) 

Os valores podem ser `miter`, `round` e `bevel`.



Miter
---

Primeiro exemplo:

<p><img src="canvas1.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.moveTo(60, 100);
context.lineTo(110, 50);
context.lineTo(160, 100);
context.lineJoin = 'miter';
context.lineWidth = 25;
context.stroke();
```


Segundo exemplo:

<p><img src="canvas2.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex01-1');
var context = canvas.getContext('2d');

context.moveTo(50, 50);
context.lineTo(130, 50);
context.lineTo(130, 130);
context.lineJoin = "miter";
context.lineWidth = 25;
context.stroke();
```



Round
---

Primeiro exemplo:

<p><img src="canvas3.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>


```javascript
var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.moveTo(60, 100);
context.lineTo(110, 50);
context.lineTo(160, 100);
context.lineJoin = 'round';
context.lineWidth = 25;
context.stroke();
```


Segundo exemplo:

<p><img src="canvas4.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex02-1');
var context = canvas.getContext('2d');

context.moveTo(50, 50);
context.lineTo(130, 50);
context.lineTo(130, 130);
context.lineJoin = "round";
context.lineWidth = 25;
context.stroke();
```



Bevel
---

Primeiro exemplo:

<p><img src="canvas5.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>


```javascript
var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');

context.moveTo(60, 100);
context.lineTo(110, 50);
context.lineTo(160, 100);
context.lineJoin = 'bevel';
context.lineWidth = 25;
context.stroke();
```

Segundo exemplo:

<p><img src="canvas6.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>


```javascript
var canvas = document.getElementById('ex03-1');
var context = canvas.getContext('2d');

context.moveTo(50, 50);
context.lineTo(130, 50);
context.lineTo(130, 130);
context.lineJoin = "bevel";
context.lineWidth = 25;
context.stroke();
```
