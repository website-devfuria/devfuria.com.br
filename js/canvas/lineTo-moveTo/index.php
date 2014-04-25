<?php
/**
 * Desenhando linhas (lineTo e moveTo)
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
                        <h1><?php echo $pagina->titulo ?></h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <p>
                        Para desenharmos uma linha utilizamos a função <code>lineTo(x, y)</code>, onde <code>x</code>
                        é o ponto horizontal final de nossa reta e o <code>y</code> é o ponto final vertical.
                    </p>

                    <p>
                        Se ele desenha até determinado ponto, então precisamos indicar onde é o começo, fazemos isso
                        utilizando a função <code>moveTo(x, y)</code>
                    </p>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>lineTo()</code></code></h2>
                        </div>

                        <blockquote>
                            <p>
                                Adiciona uma linha ao caminho (path) partindo do ponto atual.
                                até as coordenadas <code>x</code> e <code>y</code>.
                            </p>
                            <small>Danny Goodman (Javascript - Guia prático, pag 369)</small>
                        </blockquote>

                        <blockquote>
                            <p>
                                Esse método destina-se a desenhar uma linha reta desde a posição na qual se encontra a pena
                                até as coordenadas <code>x</code> e <code>y</code>.
                            </p>
                            <small>Maujor (HTML5 - A linguagem de marcação que revolucionou a web, pag 148)</small>
                        </blockquote>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>moveTo()</code></h2>
                        </div>

                        <blockquote>
                            <p>
                                Move um ponto para um lugar específico.
                            </p>
                            <small>Danny Goodman (Javascript - Guia prático, pag 369)</small>
                        </blockquote>

                        <blockquote>
                            <p>
                                Esse método destina-se a posicionar a pena de desenho nas coordeandas <code>x</code> e <code>y</code>.
                            </p>
                            <small>Maujor (HTML5 - A linguagem de marcação que revolucionou a web, pag 148)</small>
                        </blockquote>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Precisamos de pelo menos um <code>moveTo()</code></h2>
                        </div>

                        <p>O canvas abaixo está em branco porque o código não funfou (não funcionou).</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');
                                    var context = canvas.getContext('2d');
                                    // falta o moveTo()
                                    context.lineTo(100, 50);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');
// falta o moveTo()
context.lineTo(100, 50);
context.stroke();
</code></pre>
                            </div>
                        </div>

                        <p>Ou pelo menos dois <code>lineTo()</code>.</p>

                        <p>Isso porque o método <code>lineTo</code> cria um <strong>subpath</strong>. Sinistro.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01-1' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01-1');
                                    var context = canvas.getContext('2d');
                                    // falta o moveTo()
                                    context.lineTo(100, 50);
                                    context.lineTo(130, 50);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');
context.lineTo(100, 50); // funcionou como moveTo()
context.lineTo(130, 50);
context.stroke();
</code></pre>
                            </div>
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O mínimo para o <code>linteTo()</code> funcionar</h2>
                        </div>

                        <p>O <code>lineTo()</code> precisa de um ponto incial.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex02' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex02');
                                    var context = canvas.getContext('2d');
                                    context.moveTo(10, 10);
                                    context.lineTo(100, 50);
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');
context.moveTo(10, 10); // Movemos a pena em 10px tanto no eixo x como no eixo y
context.lineTo(100, 50);// Desenhamos uma diagonal de 100px,
                        // seu ponto final é 50px abaixo do ponto inicial
context.stroke();
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Um único <code>moveTo()</code> para escrever várias linhas</h2>
                        </div>

                        <p>Precisamos chamar  pelo menos uma vez o método <code>moveTo()</code>.</p>

                        <p>Por outro lado, podemos escrever quantas linhas quizermos.</p>

                        <p>O <strong>ponto inicial</strong> da próxima linha será o <strong>ponto final</strong> da linha anterior.</p>

                        <div class="row">
                            <div class="col-md-4">
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
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');
context.moveTo(10, 10);
context.lineTo(100, 50);
context.lineTo(50, 110);
context.lineTo(110, 120);
context.stroke();
</code></pre>
                                <p>Repare que chamamos várias vezes o método <code>lineTo()</code>.</p>
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