---
title:       Exemplo - grid lines
description: Um exemplo grid line para tag Canvas HTML 5, com ele é possível testar visualmente os desenhos em canvas.
capitulo:    "canvas-exemplos"
ordem:       2
---

<canvas id='myCanvas' height='150'>Canvas not supported</canvas>

<script>
    /**
     * Função que retorna um grid
     */
    function drawGrid(context, color, stepx, stepy) {
        context.beginPath();
        context.strokeStyle = color;
        context.lineWidth = 0.5;

        //  linhas verticais
        for (var i = stepx + 0.5; i < context.canvas.width; i += stepx) {
            context.moveTo(i, 0);
            context.lineTo(i, context.canvas.height);
            context.stroke();
        }

        //  linhas horizontais
        for (var i = stepy + 0.5; i < context.canvas.height; i += stepy) {
            context.moveTo(0, i);
            context.lineTo(context.canvas.width, i);
            context.stroke();
        }
    }

    // Utilização
    var ctx = document.getElementById('myCanvas').getContext('2d');
    drawGrid(ctx, 'lightgray', 10, 10);
</script>


__Função utilitária para teste visual.__

[Fork me on GitHub](https://github.com/devfuria/canvas-exemplos/tree/master/grid)

Este canvas é bem simples, ele desenha um grid para checarmos visualmente se o resultado está de acordo.



Código fonte
---

```javascript
/**
 * Função que retorna um grid
 */
function drawGrid(context, color, stepx, stepy) {
    context.beginPath();
    context.strokeStyle = color;
    context.lineWidth = 0.5;

    //  linhas verticais
    for (var i = stepx + 0.5; i < context.canvas.width; i += stepx) {
        context.moveTo(i, 0);
        context.lineTo(i, context.canvas.height);
        context.stroke();
    }

    //  linhas horizontais
    for (var i = stepy + 0.5; i < context.canvas.height; i += stepy) {
        context.moveTo(0, i);
        context.lineTo(context.canvas.width, i);
        context.stroke();
    }
}

// Utilização
var ctx = document.getElementById('myCanvas').getContext('2d');
drawGrid(ctx, 'lightgray', 10, 10);
```
