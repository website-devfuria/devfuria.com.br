<?php
/**
 * Paths (caminhos)
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/paths/");
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
                        <h1><?php echo $pagina->titulo ?></h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <blockquote>
                        <p>Cada objeto que implementa a interface <strong>CanvasPathMethods</strong> possue um path (caminho).</p>

                        <p>Sâo eles:</p>

                        <ul>
                            <li>closePath</li>
                            <li>moveTo</li>
                            <li>lineTo</li>
                            <li>quadraticCurveTo</li>
                            <li>bezierCurveTo</li>
                            <li>arcTo</li>
                            <li>rect</li>
                            <li>arc</li>
                            <li>ellipse</li>
                        </ul>

                        <p>Um path (caminho) tem uma lista de zero ou mais subpaths (subcaminhos).</p>

                        <p>
                            Cada subpath consiste de uma lista de um ou mais pontos, ligados por segmentos de linhas retas
                            ou curvas, e um sinalizador que indica se o subpath está fechado ou não.
                        </p>

                        <p>
                            <small>Fonte:
                                <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/the-canvas-element.html#concept-path" title="link-externo">
                                    WHATWG - concept-path
                                </a>
                            </small>
                        </p>
                    </blockquote>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Criando caminhos (paths)</h2>
                        </div>

                        <p>A documentação da MDN diz que é preciso 3 passos para criar um caminho (path):</p>

                        <h3>1 passo</h3>

                        <p>O primeiro passo para criar um caminho (path) é chamar o método<code>beginPath()</code>.</p>

                        <p>
                            Internamente, os caminhos são armazenados como uma lista de sub-caminhos (linhas, arcos, etc)
                            que juntos formam uma forma (shape).
                        </p>

                        <h3>2 passo</h3>

                        <p>O segundo passo é chamar os métodos que realmente especificam os caminhos a ser desenhado.</p>

                        <h3>3 passo</h3>

                        <p>A terceira (opcional), é  chamar  afunção <code>closePath()</code>.</p>

                        <p>Este método tenta fechar a forma (shape) desenhando uma linha reta do ponto atual para o início.</p>

                        <p>Se a forma já foi fechada ou há apenas um ponto na lista, esta função não faz nada.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Métodos utilizados</h2>
                        </div>

                        <h3><code>beginPath()</code></code></h3>
                        <p>Cria um novo caminho e reinicia o atual.</p>
                        <p>Toda vez que este método é chamado, a lista é redefinida e podemos começar a desenhar novas formas.</p>

                        <h3><code>closePath()</code></code></h3>
                        <p>
                            Fecha o subpath atual e começa um novo subpath que tem um ponto de partida que é igual
                            ao da extremidade do subpath fechada.
                        </p>

                        <h3><code>stroke()</code></code></h3>
                        <p>Desenha o caminho que você definiu usando os estilos de traçado atuais.</p>

                        <h3><code>fill()</code></code></h3>
                        <p>Prenche o path atual (caminho) usando o estilo de preenchimento atual</p>
                        <p>A cor padrão é preto</p>
                        <p>
                            Quando você chama o método <code>fill()</code>, todas as formas (shapes) abertas são fechadas automaticamente,
                            assim você não tem que chamar <code>closePath()</code>.
                        </p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Uso básico de <code>beginPath()</code> e <code>closePath()</code></h2>
                        </div>

                        <p> O caminho (path) está entre as chamadas das funções <code>beginPath()</code> e <code>closePath()</code>
                            e desenhar um triângulo é o exemplo que mais ilustra o caminho (path).
                        </p>

                        <p>Primeira coisa é tentar entender as coordenadas (veja os comentários).</p>

                        <p>
                            Segunda coisa, repare que só traçamos duas linhas (<code>lineTo</code>). O método
                            <code>closePath()</code> executou a última linha, ou seja, fechou nosso caminho.
                        </p>

                        <p>Ele pintou a linha até o ponto inicial (<code>beginPath</code>) que era <code>x=30</code> e <code>y=120</code></p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01'>Canvas not supported</canvas>
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

                        <h3>Importante</h3>

                        <ul>
                            <li>Sem o <code>beginPath()</code>, o <code>closePath()</code> incrivelmente funciona. Pelo menos neste caso simples.</li>
                            <li>A ordem é importante, se o objetivo é fechar o caminho então <code>closePath</code> deve vir sempre antes de <code>stroke()</code>.</li>
                        </ul>
                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Outro triângulo</h2>
                        </div>

                        <p>Este triângulo começa no canto esquerdo em <code>x=75, y=50</code>.</p>

                        <p>Traçamos uma diagonal até <code>x=100, y=75</code>, canto inferior.</p>

                        <p>E então subimos com uma reta até <code>x=100, y=25</code>, canto superior.</p>

                        <p>Novamente, o método <code>closePath()</code> completa nosso triângulo.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex02'>Canvas not supported</canvas>
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

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
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

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03'>Canvas not supported</canvas>
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

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(30, 30);
context.lineTo(90, 30);
context.lineTo(30, 90);
context.fill();
</code></pre>
                            </div>
                        </div>

                        <h3>Importante</h3>

                        <ul>
                            <li>Repare que ele substituiu tanto o método <code>closePath()</code> quanto o <code>stroke()</code>.</li>
                        </ul>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Exemplo de caminho com método <code>bezierCurveTo()</code></h2>
                        </div>

                        <p>Ok, ainda não falamos (e continuaremos não falando) do método <code>bezierCurveTo()</code>.</p>

                        <p>Mas não pude deixar de mostrar o exemplo.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex04'>Canvas not supported</canvas>
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

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex04');
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


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O que as linhas tem a nos ensinar?</h2>
                        </div>

                        <p>Quanto será que o <strong>path</strong> influencia nosso paint? Muito, compare os exemplos abaixo.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex05'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex05');
                                    var context = canvas.getContext('2d');
                                    context.beginPath();
                                    context.moveTo(60, 30);
                                    context.lineTo(240, 30);
                                    context.stroke();

                                    context.beginPath();
                                    context.moveTo(60, 60);
                                    context.lineTo(240, 60);
                                    context.stroke();

                                    context.beginPath();
                                    context.moveTo(60, 90);
                                    context.lineTo(240, 90);
                                    context.stroke();

                                    context.beginPath();
                                    context.moveTo(60, 120);
                                    context.lineTo(240, 120);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex05');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(60, 30);
context.lineTo(240, 30);
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(240, 60);
context.stroke();

context.beginPath();
context.moveTo(60, 90);
context.lineTo(240, 90);
context.stroke();

context.beginPath();
context.moveTo(60, 120);
context.lineTo(240, 120);
context.stroke();
</code></pre>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex06'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex06');
                                    var context = canvas.getContext('2d');
                                    //                                    context.beginPath();
                                    context.moveTo(60, 30);
                                    context.lineTo(240, 30);
                                    context.stroke();

                                    //                                    context.beginPath();
                                    context.moveTo(60, 60);
                                    context.lineTo(240, 60);
                                    context.stroke();

                                    //                                    context.beginPath();
                                    context.moveTo(60, 90);
                                    context.lineTo(240, 90);
                                    context.stroke();

                                    //                                    context.beginPath();
                                    context.moveTo(60, 120);
                                    context.lineTo(240, 120);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex06');
var context = canvas.getContext('2d');

//context.beginPath();
context.moveTo(60, 30);
context.lineTo(240, 30);
context.stroke();

//context.beginPath();
context.moveTo(60, 60);
context.lineTo(240, 60);
context.stroke();

//context.beginPath();
context.moveTo(60, 90);
context.lineTo(240, 90);
context.stroke();

//context.beginPath();
context.moveTo(60, 120);
context.lineTo(240, 120);
context.stroke();
</code></pre>
                            </div>
                        </div>

                        <p>Repare que no segundo exemplo o <code>beginPath()</code> foi comentado (anulado).</p>

                        <p>Qual é a diferênca entre os resultados?</p>

                        <p>A princípo percebe-se uma inconsistencia no exemplo sem o <code>beginPath</code>.</p>

                        <p>Então podemos afirmar que o <strong>path</strong> ajuda na consistencia de nosso desenho.</p>


                        <h3>Desafio</h3>

                        <p>
                            No primeiro exemplo, fazemos uso da função <code>beginPath()</code> mas não fechamos os
                            caminhos (<code>closePath()</code>).
                        </p>

                        <p>O que isso siginifca?</p>

                        <p>Que o <code>beginPath()</code> seguido de outro <code>beginPath()</code> inicia um <strong>subPath</strong> ?</p>

                        <p>ou...</p>

                        <p>Que o <code>beginPath()</code> seguido de outro <code>beginPath()</code> funciona também como <code>closePath()</code>?</p>

                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/canvas/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>