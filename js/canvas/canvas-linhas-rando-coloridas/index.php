<?php
/**
 * Tamanho das linhas lineWidth
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/canvas-linhas-rando-coloridas/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body class="">
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="" id="content">
                    <div class="container">
                        <h1><?php echo $pagina->titulo ?></h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">

                        <div class="row">
                            <div class="col-md-12">
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
                                            return "rgb(" + coor.retRandom0_255() + "," + coor.retRandom0_255() + "," + coor.retRandom0_255() + ")";
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

                            </div>
                        </div>

                        <p><strong>Linhas coloridas e aleatórias que partem do centro do canvas.</strong></p>

                        <p>
                            <a href="https://github.com/flaviomicheletti/canvas/tree/master/linhas-rando-coloridas" title="link-externo">Fork me on GitHub</a> 
                            <small> (O código fonte você também encontrará depois da seção "codando")</small>
                        </p>
                        
                        <p>Este canvas é um exercício para mim e para os leitores do devfuria.</p>
                        
                        </p>Se você quiser "forkar" o
                            projeto para também se exercitar e até sugerir modificações interessantes, será um prazer.
                        </p>
                        
                        <p>Boa leitura!</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Codando</h2>
                        </div>

                        <p>
                            Vou utilizar um objeto para as coordedanas <code>coor</code> e uma função para desenhar cada
                            linha <code>draw()</code>.
                        </p>

                        <p>O objeto <code>coord</code> será passado por parâmetro para a função <code>draw()</code></p>

                        <p>
                            A função <code>draw()</code> desenhará uma linha de cada vez apartir do centro do canvas e
                            de forma independente. Quero dizer, seja qual for o tamanho do canvas o centro será encontrado.
                        </p>

                        <p>
                            Para dar o efeito principal (várias linhas), a função será repetida em determinado intervalo
                            de tempo (<code>setInterval()</code>).
                        </p>

                        <p>Assim, temos o esqueleto incial abaixo.</p>

                        <pre><code class="language-javascript">var coor = {
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
}, 10);</code></pre>

                        <p>
                            A função <code>draw()</code> criará um caminho (<strong>path</strong>) para cada linha, então
                            termos as chamadas das funções <code>beginPath()</code> e <code>stroke()</code> e entre elas
                            o código para posicionar nossa <strong>"pena"</strong>.
                        </p>

                        <pre><code class="language-javascript">function draw(coor) {
    context.beginPath();
    ...
    ...
    ...
    context.stroke();
};</code></pre>
                        <p>Precisaremos do <strong>contexto</strong>, normalmente fazemos dessa forma:</p>

                        <pre><code class="language-javascript">var canvas = document.getElementById('myCanvas')
var context = canvas.getContext('2d');</code></pre>

                        <p>Mas, por conveniencia, eu preferi deixar o objeto <strong>canvas</strong> junto ao objeto
                            <code>coor</code> e a variável <code>context</code> será criada dentro da função <code>draw()</code>.</p>

                        <pre><code class="language-javascript">var coor = {
    // objeto dom canvas
    canvas: document.getElementById('myCanvas'),
};

function draw(coor) {
    var context = coor.canvas.getContext('2d');
    context.beginPath();
    ...
    ...
    ...
    context.stroke();
};</code></pre>

                        <p>
                            Voltando a nossa função <code>draw()</code>, sabemos que desenharemos uma linha, logo utilizaremos
                            os métodos <code>moveTo()</code> e <code>lineTo()</code>, veja:</p>

                        <pre><code class="language-javascript">function draw(coor) {
    var context = coor.canvas.getContext('2d');
    context.beginPath();
    ...
    ...
    ...
    context.moveTo(x, y);
    context.lineTo(x, y);
    context.stroke();
};</code></pre>
                        <p>O <code>moveTo</code> é nosso ponto inicial, e <strong>qual será essa coordenada?</strong></p>

                        <p>É um ponto no centro do <strong>canvas</strong>.</p>

                        <p>
                            O nosso objeto <code>coord</code> deverá nos fornecer essa informação através dos métodos
                            <code>retCentroX()</code> e <code>retCentroY()</code>.
                        </p>

                        <p>E o ponto final, qual será?</p>

                        <p>
                            É um ponto randômico. Obtemos a resposta com o objeto <code>coor</code> através dos métodos
                            <code>retRandomX()</code> e <code>retRandomY()</code>.
                        </p>

                        <p>A idéia é "vá para o centro do canvas e desenhe uma linha até um ponto qualquer".</p>

                        <pre><code class="language-javascript">function draw(coor) {
    var context = coor.canvas.getContext('2d');
    context.beginPath();
    ...
    ...
    ...
    // Vá para o centro do canvas...
    context.moveTo(coor.retCentroX(), coor.retCentroY());
    // ...e desenhe uma linha até os valores (randômicos) de x e y
    context.lineTo(coor.retRandomX(), coor.retRandomY());
    context.stroke();
};</code></pre>
                        <p>Ok, agora como serão implementado os métodos no objeto <code>coor</code>?</p>

                        <p>
                            <code>retCentroX()</code> e <code>retCentroY()</code> devem dividir o tamanho da largura e
                            altura do canvas por
                            <code>2</code>, respectivamente.
                        </p>

                        <p>Utilizaremos as propriedades <code>width</code> e <code>height</code> do objeto canvas.</p>

                        <pre><code class="language-javascript">var coor = {
    canvas: document.getElementById('myCanvas'),
    retCentroX: function() {
        return this.canvas.width / 2;
    },
    retCentroY: function() {
        return this.canvas.height / 2;
    }
};</code></pre>

                        <p>As funções <code>retRandomX()</code> e <code>retRandomY()</code> não podiam serem mais fáceis.</p>

                        <p>Elas devem retornar um número randômico até limite do canvas.</p>

                        <p>
                            Se você precisa saber como gerar números randômicos de uma forma simples, veja esta matéria
                            <?php Aux::printAncora("/js/math-random-numero-randomico-em-javascript/", "titulo") ?>.
                        </p>

                        <p>
                            Agora, sabemos que <code>Math.random() * foo</code> retornará nosso número randômico até o limite
                            definido por <code>foo</code>.
                        </p>

                        <p>Então, basta trocar <code>foo</code> por <code>width</code> e <code>height</code> do objeto canvas.</p>

                        <pre><code class="language-javascript">var coor = {
    canvas: document.getElementById('myCanvas'),
    retCentroX: function() {
        return this.canvas.width / 2;
    },
    retCentroY: function() {
        return this.canvas.height / 2;
    },
    retRandomX: function() {
        return Math.random() * this.canvas.width;
    },
    retRandomY: function() {
        return Math.random() * this.canvas.height;
    }
};</code></pre>
                        <p>
                            Se você sobreviveu até aqui, ótimo! pois chegou a parte mais simples. Criar o colorido
                            das linhas.
                        </p>

                        <p>
                            Na função <code>draw()</code> adicione as propriedades <code>strokeStyle</code> e,
                            antes que eu me esqueca, <code>lineWidth</code>.
                        </p>

                        <p>A propriedade <code>lineWidth</code> nós já vimos na matéria "<?php Aux::printAncora("/js/canvas/line-width/", "titulo") ?>"</p>

                        <p>
                            A propriedade <code>strokeStyle</code> aceita uma string no formato 
                            <a href="http://pt.wikipedia.org/wiki/RGB" title="link-externo">RGB</a>
                            <code>"rgb(0,0,0)"</code> onde os 0 (zeros) são um inteiro no "range" de 1 a 255.
                        </p>

                        <pre><code class="language-javascript">function draw(coor) {
    var context = coor.canvas.getContext('2d');
    context.beginPath();
    <em>context.strokeStyle = coor.retStrokeStyleColor();</em>
    <em>context.lineWidth = 0.1;</em>
    context.moveTo(coor.retCentroX(), coor.retCentroY());
    context.lineTo(coor.retRandomX(), coor.retRandomY());
    context.stroke();
};</code></pre>                        

                        <p>
                            Queremos cores aleatórias. A função <code>retStrokeStyleColor()</code> do objeto <code>coor</code>
                            ficará encarregada de nos fornecer essa informação.
                        </p>

                        <p>Precisaremos de números aleatórios dentro do "range" de 1 a 255</p>

                        <p>Para tal, criei a função <code>retRandom0_255()</code> com o seguinte código <code>return Math.round(Math.random() * 255)</code>
                            dentro do objeto <code>coor</code>.
                        </p>

                        <p>A função <code>retStrokeStyleColor()</code> você já consegue visualizar?</p>

                        <p>Veja como ficou nosso objeto <code>coor</code>.</p>

                        <pre><code class="language-javascript">var coor = {
    canvas: document.getElementById('myCanvas'),
    retCentroX: function() {
        return this.canvas.width / 2;
    },
    retCentroY: function() {
        return this.canvas.height / 2;
    },
    retRandomX: function() {
        return Math.random() * this.canvas.width;
    },
    retRandomY: function() {
        return Math.random() * this.canvas.height;
    },
<em>    retRandom0_255: function() {
        return Math.round(Math.random() * 255);
    },
    retStrokeStyleColor: function() {
        return "rgb(" + this.retRandom0_255() + "," + this.retRandom0_255() + "," + this.retRandom0_255() + ")";
    }</em>
};</code></pre>

                        <p>Juntando tudo...</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Código fonte</h2>
                        </div>                    

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">/**
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
}, 10);</code></pre>
                        </div>                        
                        
                        <p>Inspirado no trabalho de <a href="http://webmediadev.wordpress.com/2011/10/14/js-exercise-random-lines/">webmediadev</a></p>                        
                        
                    </div>                    


                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/canvas/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>