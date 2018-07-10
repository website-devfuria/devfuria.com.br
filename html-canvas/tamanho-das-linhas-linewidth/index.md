---
title:       Tamanho das linhas (lineWidth)
description: Descubra como alterar o comprimento (width) das linhas em Canvas
capitulo:    "canvas"
ordem:       3
---


> Esse atributo destina-se a definir a espessura das linhas, em pixel, do elemento gráfico criado. Os valores possíveis
> são os números inteiros. Não sendo definida a espessura com uso desse atributo, o padrão é zero e a linha não será visualizada.
>
>  Maujor (HTML5 - A linguagem de marcação que revolucionou a web, pag 145) 

Errado 2x.

O valor padrão parece ser 1px e não zero.

E o valores menores que 1 são válidos também.

O atributo dá a largura das linhas. Se consultado, ele deve retornar o valor atual. 

Por definição, zero, valores negativos, infinito e NaN devem ser ignorados, deixando o valor inalterado. 

Consultando o valor de `lineWidth` ele realmente é por padrão `1px`.

Vejamos um exemplo.

<p><img src="canvas1.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.moveTo(60, 60);
context.lineTo(240, 60);
context.lineWidth = 2;
context.stroke();
```




O tamanho padrão
---

O padrão da largura da linha é 1px.

Quando omitimos a propriedade, prevalecerá o tamanho padrão 1px.

<p><img src="canvas2.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(60, 50);
context.lineTo(200, 50);
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(200, 60);
context.lineWidth = 1;
context.stroke();
```



Tamanho menores que 1px
---

O tamanho menor que 1 funciona.

Mas repare que precisamos chamar o método `beginPath()`, sem ele o esquema não funciona.

Repare também que há um degradê na linha.

<p><img src="canvas3.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>


```javascript
var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(60, 50);
context.lineTo(200, 50);
context.lineWidth = 0.1;
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(200, 60);
context.lineWidth = 0.3;
context.stroke();

context.beginPath();
context.moveTo(60, 70);
context.lineTo(200, 70);
context.lineWidth = 0.5;
context.stroke();

context.beginPath();
context.moveTo(60, 80);
context.lineTo(200, 80);
context.lineWidth = 1;
context.stroke();
```


### Fonte

- [whatwg](http://www.whatwg.org/specs/web-apps/current-work/multipage/the-canvas-element.html#dom-context-2d-linewidth)

