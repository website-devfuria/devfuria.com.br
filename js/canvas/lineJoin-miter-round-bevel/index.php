<?php
/**
 * 
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/math-random-numero-randomico-em-javascript/");
$view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . "canvas";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
        <style>
            canvas {
                background: #ffffff;
                cursor: pointer;
                -webkit-box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
                -moz-box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
                box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
            }
        </style>        
    </head>
    <body class="">
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="" id="content">
                    <div class="container">
                        <h1>Desenhando linhas</h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Precisamos de pelo menos um `moveTo`</h2>
                        </div> 

                        <p>Para o `lineTo` funcionar precisamos de pelo menos um `moveTo`</p>
                        <p>Para o `lineTo` funcionar precisamos de pelo menos um `moveTo`</p>
                        <p>Para o `lineTo` funcionar precisamos de pelo menos um `moveTo`</p>

                        <div class="row">
                            <div class="col-md-5">
                                <canvas id='ex01' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');
                                    var context = canvas.getContext('2d');
                                    context.lineTo(100, 50);
                                    context.stroke();
                                </script>                            

                            </div>
                            <div class="col-md-7">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');
context.lineTo(100, 50);
context.stroke();                                    
</code></pre>
                            </div>
                        </div>                        
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O mínimo para o `linteTo` funcionar</h2>
                        </div> 

                        <p>O mínimo para o `linteTo` funcionar</p>
                        <p>O mínimo para o `linteTo` funcionar</p>
                        <p>O mínimo para o `linteTo` funcionar</p>
                        <p>O mínimo para o `linteTo` funcionar</p>

                        <div class="row">
                            <div class="col-md-5">
                                <canvas id='ex02' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex02');
                                    var context = canvas.getContext('2d');
                                    context.moveTo(10, 10);
                                    context.lineTo(100, 50);
                                    context.stroke();
                                </script>                           
                            </div>
                            <div class="col-md-7">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');
context.moveTo(10, 10);
context.lineTo(100, 50);
context.stroke();                                    
</code></pre>
                            </div>
                        </div>
                    </div>                        


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>um moveTo para escrever várias linhas</h2>
                        </div>  

                        <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                        <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                        <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                        <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                        <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                        <p>Precisamos de apenas um moveTo para escrever várias linhas</p>

                        <div class="row">
                            <div class="col-md-5">
                                <canvas id='ex03' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03');
                                    var context = canvas.getContext('2d');
                                    context.moveTo(10, 10);
                                    context.lineTo(100, 50);
                                    context.lineTo(50, 110);
                                    context.lineTo(110, 120);
                                    context.stroke();
                                </script>                          
                            </div>
                            <div class="col-md-7">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');
context.moveTo(10, 10);
context.lineTo(100, 50);
context.lineTo(50, 110);
context.lineTo(110, 120);
context.stroke();                                   
</code></pre>                                
                                <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                                <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                                <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                                <p>Precisamos de apenas um moveTo para escrever várias linhas</p>
                            </div>
                        </div>                          
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/refers/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>