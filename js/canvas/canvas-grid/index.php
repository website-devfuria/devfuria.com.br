<?php
/**
 * CANVAS - grid
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/canvas-grid/");
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
                        <!--<h1><?php //echo $pagina->titulo   ?></h1>-->
                        <h1>Canvas - Grid Lines</h1>
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

                            </div>
                        </div>

                        <p><strong>Função utilitária para teste visual.</strong></p>

                        <p>
                            <a href="https://github.com/flaviomicheletti/canvas/tree/master/linhas-rando-coloridas" title="link-externo">Fork me on GitHub</a> 
                        </p>

                        <p>Este canvas é bem simples, ele desenha um grid para checarmos visualmente se o resultado está de acordo.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Código fonte</h2>
                        </div>

                        <p>A função <code>drawGrid</code> utiliza-se de 2 laços <code>for</code> para desenhar as linhas.</p>

                        <p>
                            O primeiro laço move o pincel até (i, 0) e traça uma linha vertical até o final do canvas
                            (i, altura-do-canvas). Ele vai horizontalmente desenhando linhas verticais.
                        </p>

                        <p>
                            O segundo laço move o pincel até (0, i) e traça uma linha horizontal até o final do canvas
                            (largura-do-canvas, i). Ele vai verticalmente desenhando linhas horizontais.
                        </p>


                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">/**
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
drawGrid(ctx, 'lightgray', 10, 10);</code></pre>
                        </div>                        

                        <p>Inspirado no trabalho de <a href="http://corehtml5canvas.com/code-live/ch02/example-2.13/example.html" title="link-externo">David Geary</a></p>                        

                    </div>                    


                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/canvas/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>