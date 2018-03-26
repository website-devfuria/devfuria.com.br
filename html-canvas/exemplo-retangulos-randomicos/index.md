---
title:       Exemplo - retângulos randômicos
description: Exemplo da tag Canvas HTML 5, retângulos randômicos coloridos. 
capitulo:    "canvas-exemplos"
ordem:       3
---
---

<canvas id='myCanvas' height='150'>Canvas not supported</canvas>

<script>
    /**
     * Objeto com as coordenadas
     */
    var coor = {
        // objeto dom canvas
        canvas: document.getElementById('myCanvas'),
        retangulo: function() {
            var retangulo = {};
            retangulo.x = Math.floor(Math.random() * this.canvas.width);
            retangulo.y = Math.floor(Math.random() * this.canvas.height);
            retangulo.width = Math.floor(Math.random() * (this.canvas.width - retangulo.x));
            retangulo.height = Math.floor(Math.random() * (this.canvas.height - retangulo.y));

            return retangulo;
        },
        // Retorna um número randômico entre 0 e 255
        retRandom0_255: function() {
            return Math.round(Math.random() * 255);
        },
        retStrokeStyleColor: function() {
            return "rgb(" + this.retRandom0_255() + "," + this.retRandom0_255() + "," + this.retRandom0_255() + ")";
        }
    };

    /**
     * Função que ...
     */
    function draw(coor) {
        var context = coor.canvas.getContext('2d'),
            rect = {};

        context.strokeStyle = coor.retStrokeStyleColor();

        rect = coor.retangulo();
        context.strokeRect(rect.x, rect.y, rect.width, rect.height);
    };

    /**
     * Repetindo
     */
    setInterval(function() {
        draw(coor);
    }, 500);
</script>


__Linhas coloridas e aleatórias que partem do centro do canvas.__

[Fork me on GitHub](https://github.com/devfuria/canvas-exemplos/tree/master/linhas-rando-coloridas) (O código fonte você também encontrará depois da seção "codando")

Este canvas é um exercício para mim e para os leitores do devfuria.

Se você quiser "forkar" o projeto para também se exercitar e até sugerir modificações interessantes, será um prazer.

Boa leitura!



Código fonte
---

```javascript
/**
 * Objeto com as coordenadas
 */
var coor = {
    // objeto dom canvas
    canvas: document.getElementById('myCanvas'),
    retangulo: function() {
        var retangulo = {};
        retangulo.x = Math.floor(Math.random() * this.canvas.width);
        retangulo.y = Math.floor(Math.random() * this.canvas.height);
        retangulo.width = Math.floor(Math.random() * (this.canvas.width - retangulo.x));
        retangulo.height = Math.floor(Math.random() * (this.canvas.height - retangulo.y));

        return retangulo;
    },
    // Retorna um número randômico entre 0 e 255
    retRandom0_255: function() {
        return Math.round(Math.random() * 255);
    },
    retStrokeStyleColor: function() {
        return "rgb(" + this.retRandom0_255() + "," + this.retRandom0_255() + "," + this.retRandom0_255() + ")";
    }
};

/**
 * Função que ...
 */
function draw(coor) {
    var context = coor.canvas.getContext('2d'),
        rect = {};

    context.strokeStyle = coor.retStrokeStyleColor();

    rect = coor.retangulo();
    context.strokeRect(rect.x, rect.y, rect.width, rect.height);
};

/**
 * Repetindo
 */
setInterval(function() {
    draw(coor);
}, 500);
```