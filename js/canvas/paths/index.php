<?php
/**
 *
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/lineTo-moveTo/");
$view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . "canvas";
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
                        <h1>Paths (Caminhos)</h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>beginPath()</code></code></h2>
                        </div>

                        <blockquote>
                            <p>
                                Creates a new path. Once created, future drawing commands are directed into the path and used to build the path up.
                            </p>
                            <small>MDN</small>
                        </blockquote>
                    </div>                

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>closePath()</code></code></h2>
                        </div>

                        <blockquote>
                            <p>
                                Closes the path so that future drawing commands are once again directed to the context..
                            </p>
                            <small>MDN</small>
                        </blockquote>
                    </div>                

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>stroke()</code></code></h2>
                        </div>

                        <blockquote>
                            <p>
                                Draws the shape by stroking its outline..
                            </p>
                            <small>MDN</small>
                        </blockquote>
                    </div>                

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>fill()</code></code></h2>
                        </div>

                        <blockquote>
                            <p>
                                Draws a solid shape by filling the path's content area.
                            </p>
                            <small>MDN</small>
                        </blockquote>
                    </div>                


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Uso básico de <code>beginPath()</code> e <code>closePath()</code></h2>
                        </div>

                        <p> O caminho (path) está entre as chamadas das funções <code>beginPath()</code> e <code>closePath()</code>
                            e desehar um triangulo é o exemplo que mais ilustra o caminho (path).
                        </p>

                        <p>Primeira coisa é tentar entender as coordenadas.</p>

                        <p>
                            Segunda coisa, repare que só traçamos duas linhas (<code>lineTo</code>). O método 
                            <code>closePath()</code> executou última linha, ou seja, fechou nosso caminho.
                        </p>

                        <p>Ele pintou a linha até o ponto inicial (<code>beginPath</code>) que era <code>x=30</code> e <code>y=120</code></p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');
                                    var context = canvas.getContext('2d');
                                    context.beginPath();
                                    context.moveTo(30, 120);
                                    context.lineTo(45, 90);
                                    context.lineTo(60, 120);
                                    context.closePath();
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.beginPath();     // iniciamos o path
context.moveTo(30, 120); // movemos a pena para x=30 e y=120 (canto esquerdo)
context.lineTo(45, 90);  // traçamos uma diagonal até x=45 e y=90 (canto superiror)
context.lineTo(60, 120); // diagonal até x=60 e y=120 (canto direito)
context.closePath();     // fecha o caminho (traça uma reta até x=30 e y=120 - beginPath)
context.stroke();        // pinta o caminho
</code></pre>
                            </div>
                        </div>

                        <h3>Imporante</h3>

                        <ul>
                            <li>Sem o <code>beginPath()</code> o <code>closePath()</code> incrivelmente funciona. Pelo menos neste caso simples.</li>
                            <li>A ordem é importante, quero dizer que <code>closePath</code> deve vir sempre antes de <code>stroke()</code>.</li>
                        </ul>
                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Outro triângulo</h2>
                        </div>


                        <p>Este triângulo começa no canto esquerdo em <code>x=75, y=50</code>.</p>

                        <p>Traçamos uma diagonal até <code>x=100, y=75</code>, canto inferior.</p>

                        <p>E etão subimos com uma reta até <code>x=100, y=25</code>, canto superior.</p>

                        <p>Novamente, o método <code>closePath()</code> completa nosso triângulo.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex02' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex02');
                                    var context = canvas.getContext('2d');
                                    context.beginPath();
                                    context.moveTo(75, 50);
                                    context.lineTo(100, 75);
                                    context.lineTo(100, 25);
                                    context.closePath();
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(75,50);
context.lineTo(100,75);
context.lineTo(100,25);
context.closePath();
context.stroke();
</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Exemplo do método <code>fill()</code></h2>
                        </div>

                        <p>Esse triângulo começa em <code>x=30, y=30</code>, canto esquerdo.</p>

                        <p>Pinta uma reta até <code>x=90, y=30</code>.</p>

                        <p>Uma diagonal até <code>x=30, y=90</code></p>

                        <p>O <code>fill()</code> desenha a última reta e preenche o triângulo.</p>

                        <p>Repare que ele substituiu tanto o método <code>closePath()</code> quanto o <code>stroke()</code>.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03');
                                    var context = canvas.getContext('2d');
                                    context.beginPath();
                                    context.moveTo(30, 30);
                                    context.lineTo(90, 30);
                                    context.lineTo(30, 90);
                                    context.fill();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.beginPath(); 
context.moveTo(30, 30);
context.lineTo(90, 30);  
context.lineTo(30, 90);
context.fill();  
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Exemplo de caminho com método <code>bezierCurveTo()</code></h2>
                        </div>

                        <p>Ok, ainda não falamos do método <code>bezierCurveTo()</code>.</p>
                        
                        <p>Mas não pude deixar de mostar o exemplo.</p>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex04' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex04');
                                    var context = canvas.getContext('2d');
                                    context.beginPath();
                                    context.moveTo(10, 10);
                                    context.lineTo(90, 90);
                                    context.bezierCurveTo(30, 30, 30, 60, 60, 150);
                                    context.fill();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.beginPath();  
context.moveTo(10, 10);  
context.lineTo(90, 90);  
context.bezierCurveTo(30, 30, 30, 60, 60, 150);   
context.fill();  
</code></pre>
                            </div>
                        </div>
                    </div>




                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/canvas/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>