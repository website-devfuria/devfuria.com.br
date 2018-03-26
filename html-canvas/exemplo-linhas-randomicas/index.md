---
title:       Exemplo - linhas randômicas
description: Exemplo da tag canvas (HTML 5) linhas coloridas e aleatórias que partem do centro do canvas. 
capitulo:    "canvas-exemplos"
ordem:       1
---

<canvas id='myCanvas' height='150'>Canvas not supported</canvas>
<script>
    /**
     * Objeto com as coordenadas
     */
    var coor = {
        // objeto dom canvas
        canvas: document.getElementById('myCanvas'),
        // retorna ponto central (pela largur do canvas)
        retCentroX: function() {
            return this.canvas.width / 2;
        },
        // retorna o ponto central (pela altura do canvas)
        retCentroY: function() {
            return this.canvas.height / 2;
        },
        // Retorna um randômico até a largura do canvas
        retRandomX: function() {
            return Math.random() * this.canvas.width;
        },
        // Retorna um randômico até a altura do canvas
        retRandomY: function() {
            return Math.random() * this.canvas.height;
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
     * Função que desenha uma linha a partir
     * do centro do canvas em direção randômica
     */
    function draw(coor) {
        var context = coor.canvas.getContext('2d');
        context.beginPath();
        // Vários tons de azul
        context.strokeStyle = coor.retStrokeStyleColor();
        context.lineWidth = 0.1;
        // Vá para o centro do canvas...
        context.moveTo(coor.retCentroX(), coor.retCentroY());
        // ...e desenhe uma linha até os valores (randômicos) de x e y
        context.lineTo(coor.retRandomX(), coor.retRandomY());
        context.stroke();
    }
    ;

    /**
     * Repetindo
     */
    setInterval(function() {
        draw(coor);
    }, 10);
</script>


__Linhas coloridas e aleatórias que partem do centro do canvas.__

[Fork me on GitHub](https://github.com/devfuria/canvas-exemplos/tree/master/linhas-rando-coloridas) (O código 
fonte você também encontrará depois da seção "codando")

Este canvas é um exercício para mim e para os leitores do devfuria.

Se você quiser "forkar" o projeto para também se exercitar e até sugerir modificações interessantes, será um prazer.

Boa leitura!



Código fonte
---

Vou utilizar um objeto para as coordenanas coor e uma função para desenhar cada linha draw().

O objeto `coor` será passado por parâmetro para a função draw()

A função draw() desenhará uma linha de cada vez a partir do centro do canvas e de forma independente. Quero dizer, seja
qual for o tamanho do canvas o centro será encontrado.

Para dar o efeito principal (várias linhas), a função será repetida em determinado intervalo de tempo (setInterval()).

Assim, temos o esqueleto inicial abaixo.

```javascript
var coor = {
...
...
...
};

function draw(coor) {
...
...
...
};

setInterval(function() {
    draw(coor);
}, 10);
```


Veja o código completo:

```javascript
/**
 * Objeto com as coordenadas
 */
var coor = {
    // objeto dom canvas
    canvas: document.getElementById('myCanvas'),
    // retorna ponto central (pela largur do canvas)
    retCentroX: function() {
        return this.canvas.width / 2;
    },
    // retorna o ponto central (pela altura do canvas)
    retCentroY: function() {
        return this.canvas.height / 2;
    },
    // Retorna um randômico até a largura do canvas
    retRandomX: function() {
        return Math.random() * this.canvas.width;
    },
    // Retorna um randômico até a altura do canvas
    retRandomY: function() {
        return Math.random() * this.canvas.height;
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
 * Função que desenha uma linha a partir
 * do centro do canvas em direção randômica
 */
function draw(coor) {
    var context = coor.canvas.getContext('2d');
    context.beginPath();
    // Vários tons de azul
    context.strokeStyle = coor.retStrokeStyleColor();
    context.lineWidth = 0.1;
    // Vá para o centro do canvas...
    context.moveTo(coor.retCentroX(), coor.retCentroY());
    // ...e desenhe uma linha até os valores (randômicos) de x e y
    context.lineTo(coor.retRandomX(), coor.retRandomY());
    context.stroke();
};

/**
 * Repetindo
 */
setInterval(function() {
    draw(coor);
}, 10);
```

Inspirado no trabalho de [webmediadev](http://webmediadev.wordpress.com/2011/10/14/js-exercise-random-lines/)
