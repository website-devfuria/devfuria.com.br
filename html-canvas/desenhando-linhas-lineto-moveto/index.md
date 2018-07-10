---
title:       Desenhando linhas (lineTo e moveTo)
description: Descubra como desenhar linhas com os métodos lineTo() e moveTo()
capitulo:    "canvas"
ordem:       2
---


Para desenharmos uma linha utilizamos a função `lineTo(x, y)`, onde `x` é o ponto horizontal final de nossa reta e o `y`
é o ponto final vertical.

Se ele desenha até determinado ponto, então precisamos indicar onde é o começo, fazemos isso utilizando a função `moveTo(x, y)`.

### O método lineTo()

Adiciona uma linha ao path (caminho) partindo do ponto atual até as coordenadas `x` e `y`.

Esse método destina-se a desenhar uma linha reta desde a posição na qual se encontra a pena até as coordenadas `x` e `y`.


### O método moveTo()

Move um ponto para um lugar específico.

Esse método destina-se a posicionar a pena de desenho nas coordenadas `x` e `y`.
 


Precisamos de pelo menos um moveTo()
---

O código abaixo dá a impressão de que fará algo, mas não faz nada. Falta pelo menos um `moveTo()`.

```javascript
var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');
// falta o moveTo()
context.lineTo(100, 50);
context.stroke();
```

Ou pelo menos dois `lineTo()`.

Isso porque o método `lineTo()` cria um __subpath__ (subcaminho). Sinistro!!!.

<p><img src="canvas1.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex01-1');
var context = canvas.getContext('2d');
context.lineTo(100, 50); // funcionou como moveTo()
context.lineTo(130, 50);
context.stroke();
```





O mínimo para o linteTo() funcionar
---

O `lineTo()` precisa de um ponto incial.

<p><img src="canvas2.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');
context.moveTo(10, 10);  // Movemos a pena em 10px tanto no eixo x como no eixo y
context.lineTo(100, 50); // Desenhamos uma diagonal de 100px,
                         // seu ponto final é 50px abaixo do ponto inicial
context.stroke();
```




Um único moveTo() para escrever várias linhas
---

Precisamos chamar pelo menos uma vez o método `moveTo()`.

Por outro lado, podemos escrever quantas linhas quizermos.

O ponto inicial da próxima linha será o ponto final da linha anterior.

<p><img src="canvas2.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');
context.moveTo(10, 10);
context.lineTo(100, 50);
context.lineTo(50, 110);
context.lineTo(110, 120);
context.stroke();
```

Repare que chamamos várias vezes o método `lineTo()`.


### Fontes

- Danny Goodman (Javascript - Guia prático, pag 369)
- Maujor (HTML5 - A linguagem de marcação que revolucionou a web, pag 148)

