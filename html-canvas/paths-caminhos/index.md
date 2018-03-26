---
title:       Paths (caminhos)
description: Descobrindo os caminhos (paths) do Canvas (HTML5).
capitulo:    "canvas"
ordem:       6
---

Cada objeto que implementa a interface __CanvasPathMethods__ possui um path (caminho).

São eles:
    
- closePath
- moveTo
- lineTo
- quadraticCurveTo
- bezierCurveTo
- arcTo
- rect
- arc
- ellipse

Um path (caminho) tem uma lista de zero ou mais subpaths (subcaminhos).

Cada subpath consiste de uma lista de um ou mais pontos, ligados por segmentos de linhas retas ou curvas, e um sinalizador 
que indica se o subpath está fechado ou não.



Criando caminhos (paths)
---

A documentação da MDN diz que é preciso 3 passos para criar um caminho (path):

### 1 passo

O primeiro passo para criar um caminho (path) é chamar o método `beginPath()`.

Internamente, os caminhos são armazenados como uma lista de sub-caminhos (linhas, arcos, etc) que juntos formam uma forma (shape).

### 2 passo

O segundo passo é chamar os métodos que realmente especificam os caminhos a ser desenhado.


### 3 passo

A terceira (opcional), é chamar a função `closePath()`.

Este método tenta fechar a forma (shape) desenhando uma linha reta do ponto atual para o início.

Se a forma já foi fechada ou há apenas um ponto na lista, esta função não faz nada.



Uso básico de beginPath() e closePath()
---

O caminho (path) está entre as chamadas das funções `beginPath()` e `closePath()` e desenhar um triângulo é o exemplo que mais ilustra o caminho (path).

Primeira coisa é tentar entender as coordenadas (veja os comentários).

Segunda coisa, repare que só traçamos duas linhas (`lineTo`). O método `closePath()` executou a última linha, ou seja, fechou nosso caminho.

Ele pintou a linha até o ponto inicial (`beginPath`) que era `x=30` e `y=120`.

<p><img src="canvas1.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.beginPath();     // iniciamos o path
context.moveTo(30, 120); // movemos a pena para x=30 e y=120 (canto esquerdo)
context.lineTo(45, 90);  // traçamos uma diagonal até x=45 e y=90 (canto superiror)
context.lineTo(60, 120); // diagonal até x=60 e y=120 (canto direito)
context.closePath();     // fecha o caminho (traça uma reta até x=30 e y=120 - beginPath)
context.stroke();        // pinta o caminho
```


### Importante

- Sem o `beginPath()` o `closePath()`, incrivelmente, funciona. Pelo menos neste caso simples.
- A ordem é importante, se o objetivo é fechar o caminho, então `closePath()` deve vir sempre antes de `stroke()`



Outro triângulo
---

Este triângulo começa no canto esquerdo em `x=75`, `y=50`.

Traçamos uma diagonal até `x=100`, `y=75`, canto inferior.

E então subimos com uma reta até `x=100`, `y=25`, canto superior.

Novamente, o método `closePath()` completa nosso triângulo.

<p><img src="canvas2.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75,50);
context.lineTo(100,75);
context.lineTo(100,25);
context.closePath();
context.stroke();
```



Exemplo do método fill()
---

Esse triângulo começa em `x=30`, `y=30`, canto esquerdo.

Pinta uma reta até `x=90`, `y=30`.

Uma diagonal até `x=30`, `y=90`.

O método `fill()` desenha a última reta e preenche o triângulo.

<p><img src="canvas3.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(30, 30);
context.lineTo(90, 30);
context.lineTo(30, 90);
context.fill();
```


### Importante

- Repare que ele substituiu tanto o método `closePath()` quanto o `stroke()`.



Exemplo com método bezierCurveTo()
---

Ok, ainda não falamos (e continuaremos não falando) do método `bezierCurveTo()`.

Mas não pude deixar de mostrar o exemplo.

<p><img src="canvas4.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex04');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(10, 10);
context.lineTo(90, 90);
context.bezierCurveTo(30, 30, 30, 60, 60, 150);
context.fill();
```



O que as linhas tem a nos ensinar?
---

Quanto será que o path influencia nosso paint? Muito, compare os exemplos abaixo.

<p><img src="canvas5.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex05');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(60, 30);
context.lineTo(240, 30);
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(240, 60);
context.stroke();

context.beginPath();
context.moveTo(60, 90);
context.lineTo(240, 90);
context.stroke();

context.beginPath();
context.moveTo(60, 120);
context.lineTo(240, 120);
context.stroke();
```

No código acima, todas as linhas estão no tom cinza.

Já o debaixo, apenas a última linha está com tom cinza.

<p><img src="canvas6.png" alt="fig exemplo de canvas" title="exemplo de canvas" class="canvas"/></p>

```javascript
var canvas = document.getElementById('ex06');
var context = canvas.getContext('2d');

//context.beginPath();
context.moveTo(60, 30);
context.lineTo(240, 30);
context.stroke();

//context.beginPath();
context.moveTo(60, 60);
context.lineTo(240, 60);
context.stroke();

//context.beginPath();
context.moveTo(60, 90);
context.lineTo(240, 90);
context.stroke();

//context.beginPath();
context.moveTo(60, 120);
context.lineTo(240, 120);
context.stroke();
```


Repare que no segundo exemplo o `beginPath()` foi comentado (anulado).

Qual é a diferença entre os resultados?

A princípo percebe-se uma inconsistencia no exemplo sem o `beginPath()`.

Então podemos afirmar que o path ajuda na consistencia de nosso desenho.

### Desafio

No primeiro exemplo, fazemos uso da função `beginPath()` mas não fechamos os caminhos (`closePath()`).

O que isso siginifca?

Que o `beginPath()` seguido de outro `beginPath()` inicia um subPath ?

ou...

Que o `beginPath()` seguido de outro `beginPath()` funciona também como `closePath()`?


### Fonte

- [WHATWG - concept-path](http://www.whatwg.org/specs/web-apps/current-work/multipage/the-canvas-element.html#concept-path)

