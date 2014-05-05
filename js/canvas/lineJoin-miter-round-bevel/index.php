<?php
/**
 * Junção das linhas lineJoin
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/lineJoin-miter-round-bevel/");
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

                        <p>O que faz o método <code>lineJoin()</code>?</p>

                        <blockquote>
                            <p>
                                Estilo de ligação entre linhas no ponto de encontro.
                            </p>
                            <small>Danny Goodman (Javascript - Guia prático, pag 371)</small>
                        </blockquote>

                        <p>Os valores podem ser <code>"miter"</code>, <code>"round"</code> e <code>"bevel"</code>.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Miter</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');
                                    var context = canvas.getContext('2d');

                                    context.moveTo(60, 100);
                                    context.lineTo(110, 50);
                                    context.lineTo(160, 100);
                                    context.lineJoin = 'miter';
                                    context.lineWidth = 25;
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.moveTo(60, 100);
context.lineTo(110, 50);
context.lineTo(160, 100);
context.lineJoin = 'miter';
context.lineWidth = 25;
context.stroke();
</code></pre>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01-1' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01-1');
                                    var context = canvas.getContext('2d');

                                    context.moveTo(50, 50);
                                    context.lineTo(130, 50);
                                    context.lineTo(130, 130);
                                    context.lineJoin = "miter";
                                    context.lineWidth = 25;
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01-1');
var context = canvas.getContext('2d');

context.moveTo(50, 50);
context.lineTo(130, 50);
context.lineTo(130, 130);
context.lineJoin = "miter";
context.lineWidth = 25;
context.stroke();
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

                                    context.moveTo(60, 100);
                                    context.lineTo(110, 50);
                                    context.lineTo(160, 100);
                                    context.lineJoin = 'round';
                                    context.lineWidth = 25;
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.moveTo(60, 100);
context.lineTo(110, 50);
context.lineTo(160, 100);
context.lineJoin = 'round';
context.lineWidth = 25;
context.stroke();
</code></pre>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex02-1' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex02-1');
                                    var context = canvas.getContext('2d');

                                    context.moveTo(50, 50);
                                    context.lineTo(130, 50);
                                    context.lineTo(130, 130);
                                    context.lineJoin = "round";
                                    context.lineWidth = 25;
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02-1');
var context = canvas.getContext('2d');

context.moveTo(50, 50);
context.lineTo(130, 50);
context.lineTo(130, 130);
context.lineJoin = "round";
context.lineWidth = 25;
context.stroke();
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Bevel</h2>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03');
                                    var context = canvas.getContext('2d');
                                    context.moveTo(60, 100);
                                    context.lineTo(110, 50);
                                    context.lineTo(160, 100);
                                    context.lineJoin = 'bevel';
                                    context.lineWidth = 25;
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');

context.moveTo(60, 100);
context.lineTo(110, 50);
context.lineTo(160, 100);
context.lineJoin = 'bevel';
context.lineWidth = 25;
context.stroke();
</code></pre>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03-1' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03-1');
                                    var context = canvas.getContext('2d');
context.moveTo(50, 50);
context.lineTo(130, 50);
context.lineTo(130, 130);
context.lineJoin = "bevel";
context.lineWidth = 25;
context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03-1');
var context = canvas.getContext('2d');

context.moveTo(50, 50);
context.lineTo(130, 50);
context.lineTo(130, 130);
context.lineJoin = "bevel";
context.lineWidth = 25;
context.stroke();
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