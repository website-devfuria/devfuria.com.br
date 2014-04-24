<?php
/**
 * http://www.w3resource.com/html5-canvas/html5-canvas-lines.php
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/lineCap-butt-round-square/");
$view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" .  Conteudo::SUB_SECAO_CANVAS;
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
                        <h1>Limite das linhas <code>lineCap</code></h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">

                        <p>O método Estilo <code>lineCap()</code> define as extremidades das linhas.</p>

                        <p>Os valores podem ser <code>"butt"</code>, <code>"round"</code> e <code>"square"</code>.</p>


                        <p>Criei a função <code>desenharLinhasGuias()</code> para ajudar no entendimento deste artigo.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex00' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex00');
                                    var context = canvas.getContext('2d');

                                    function desenharLinhasGuias(context) {
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
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
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
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Butt</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');
                                    var context = canvas.getContext('2d');

                                    context.beginPath();
                                    context.moveTo(75, 10);
                                    context.lineTo(75, 140);
                                    context.lineCap = 'butt';
                                    context.lineWidth = 15;
                                    context.stroke();

                                    desenharLinhasGuias(context);

                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75, 10);
context.lineTo(75, 140);
context.lineCap = 'butt';
context.lineWidth = 15;
context.stroke();

desenharLinhasGuias(context);
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Round</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex02' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex02');
                                    var context = canvas.getContext('2d');

                                    context.beginPath();
                                    context.moveTo(75, 10);
                                    context.lineTo(75, 140);
                                    context.lineCap = 'round';
                                    context.lineWidth = 15;
                                    context.stroke();

                                    desenharLinhasGuias(context);
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75, 10);
context.lineTo(75, 140);
context.lineCap = 'round';
context.lineWidth = 15;
context.stroke();

desenharLinhasGuias(context);
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Square</h2>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03');
                                    var context = canvas.getContext('2d');
                                    context.beginPath();
                                    context.moveTo(75, 10);
                                    context.lineTo(75, 140);
                                    context.lineCap = 'square';
                                    context.lineWidth = 15;
                                    context.stroke();

                                    desenharLinhasGuias(context);
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75, 10);
context.lineTo(75, 140);
context.lineCap = 'square';
context.lineWidth = 15;
context.stroke();

desenharLinhasGuias(context);
</code></pre>
                            </div>
                        </div>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/canvas/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>