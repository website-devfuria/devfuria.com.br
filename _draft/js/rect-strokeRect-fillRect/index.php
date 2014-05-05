<?php
/**
 * Desenhando retêngulos
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/lineTo-moveTo/");
$view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . Conteudo::SUB_SECAO_CANVAS;
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
                        <h1>Desenhando retângulos</h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <p></p>

                    <p></p>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>strokeRect()</code></h2>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');
                                    var context = canvas.getContext('2d');
                                    context.strokeStyle = 'red';
                                    context.strokeRect(20, 20, 100, 100);
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');
context.strokeStyle = 'red';
context.strokeRect(20,20,100,100);
</code></pre>
                            </div>
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>fillRect()</code></h2>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex02' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex02');
                                    var context = canvas.getContext('2d');
                                    context.fillStyle = 'red';
                                    context.fillRect(20, 20, 100, 100);
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');
context.fillStyle = 'red';
context.fillRect(20, 20, 100, 100);
</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>rect()</code></h2>
                        </div> 
                        
                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03');
                                    var context = canvas.getContext('2d');
                                    context.strokeStyle = 'red';

                                    context.beginPath();
                                    context.rect(20, 20, 100, 100);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');
context.strokeStyle = 'red';

context.beginPath();
context.rect(20, 20, 100, 100);
context.stroke();
</code></pre>
                            </div>
                        </div>  
                        
                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex04' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex04');
                                    var context = canvas.getContext('2d');
                                    context.strokeStyle = 'red';
                                    context.fillStyle = 'red';
    
                                    context.beginPath();
                                    context.rect(20, 20, 100, 100);
                                    context.stroke();
                                    context.fill();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');
context.strokeStyle = 'red';
context.fillStyle = 'red';

context.beginPath();
context.rect(20, 20, 100, 100);
context.stroke();
context.fill();
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