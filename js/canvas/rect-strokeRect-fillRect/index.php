<?php
/**
 * Desenhando retêngulos
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/rect-strokeRect-fillRect/");
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
                        <h1><?php echo $pagina->titulo  ?></h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">
                        <p>
                            Existem 4 métodos para desenharmos um retângulo: <code>strokeRect</code>, <code>fillRect</code>,
                            <code>clearRect</code> e <code>rect</code>
                        </p>

                        <p>
                            Todos os métodos esperam 2 argumentos [na verdade 4] que especificam um canto do retângulo, 
                            seguidos de sua largura e altura.
                        </p>

                        <p>Veja a assinatura das funções abaixo.</p>

                        <pre><code class="language-javascript">strokeRect(x, y, width, height)
fillRect  (x, y, width, height)
clearRect (x, y, width, height)
rect      (x, y, width, height)
</code></pre>

                        <p>
                            <q>Normalmente especificamos o canto superior esquerdo e, então, passamos um valor de largura e 
                                altura positivos, mas também podem ser negativos. <small>(David Flanagan)</small></q>
                        </p>

                        <p>A imagem abaixo ajuda a entender melhor o esquema:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " id="myimage" src="canvas-default-grid.png">
                            <p><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Canvas_tutorial/Drawing_shapes" title="link-externo">Fonte da imagem</a></p>
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>strokeRect()</code></h2>
                        </div>

                        <p>Desenha o contorno (mas não preenche o intreior) de um retângulo com a posição e o temanho especificados.</p>

                        <p>A cor e a largura da linha são especificados pela propriedades <code>strokeStyle</code> e <code>lineWidth</code>.</p>

                        <p>A aparência dos cantos do retângulo é especificada pela propriedade <code>lineJoin</code>.</p>


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

                        <p>Preenche o retângulo especificado com a cor, gradiente ou padrão definido pela propriedade <code>fillStyle</code>.</p>

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
                            <h2>O método <code>clearRect()</code></h2>
                        </div>

                        <p>Preenche o retângulo especificado com preto transparente.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03');
                                    var context = canvas.getContext('2d');
                                    context.fillStyle = 'red';
                                    context.fillRect(20, 20, 100, 100);
                                    context.clearRect(40, 40, 60, 60);
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex03');
var context = canvas.getContext('2d');
context.fillStyle = 'red';
context.fillRect(20, 20, 100, 100);
context.clearRect(40, 40, 60, 60);
</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O método <code>rect()</code></h2>
                        </div> 

                        <p>
                            Adiciona um retângulo no path (<strong>caminho</strong>). Esse retângulo é ele próprio um
                            subcaminho (subpath) e não está conectado a outro subcaminho (subpath).
                        </p>

                        <p>Quando este método retorna a posição atual é a coordenada (x, y) inicial.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex04' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex04');
                                    var context = canvas.getContext('2d');
                                    context.strokeStyle = 'red';

                                    context.beginPath();
                                    context.rect(20, 20, 100, 100);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex04');
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
                                <canvas id='ex05' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex05');
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
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex05');
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


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>A diferença entre <code>fillRect()</code> e <code>rect</code></h2>
                        </div>

                        <p>Os métodos <code>fillRect</code> e <code>rect</code>, visualmente, parecem produzir  o mesmo efeito.</p>

                        <p>Mas os resultados são diferentes.</p>

                        <p>O método <code>fillRect</code> NÂO influencia no path (caminho).</p>

                        <p>O método <code>rect</code> SIM, influencia no path (caminho).</p>

                        <p>Saiba que:</p>

                        <p><strong>Não influencia o path:</strong></p>
                        <ul>
                            <li>strokeRect</li>
                            <li>fillRect</li>
                            <li>clearRect</li>
                        </ul>

                        <p><strong>Influencia o path:</strong></p>
                        <ul>
                            <li>rect</li>
                        </ul>                        

                        <p>Vamos para exemplos práticos.</p>

                        <h3>Exemplo 01</h3>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex06' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex06');
                                    var context = canvas.getContext('2d');
                                    context.strokeStyle = "blue";

                                    context.strokeRect(60, 60, 30, 30);
                                    context.lineTo(10, 10);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex06');
var context = canvas.getContext('2d');
context.strokeStyle = "blue";

context.strokeRect(60, 60, 30, 30);
context.lineTo(10,10);
context.stroke();</code></pre>

                                <p>O método <code>strokeRect</code> não influencia o caminho (path).</p>

                                <p>A prova é o canvas do exemplo 01.</p>

                                <p>
                                    Veja que os métodos <code>lineTo</code> e <code>stroke</code> não tiveram efeito algum,
                                    só vemos o retângulo no canvas.
                                </p>

                            </div>
                        </div>


                        <h3>Exemplo 02</h3>


                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex06-1' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex06-1');
                                    var context = canvas.getContext('2d');
                                    context.strokeStyle = "blue";

                                    context.rect(60, 60, 30, 30);
                                    context.lineTo(10, 10);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex06-1');
var context = canvas.getContext('2d');
context.strokeStyle = "blue";

context.rect(60, 60, 30, 30);
context.lineTo(10,10);
context.stroke();</code></pre>
                                <p>
                                    Agora se trocarmos o método <code>strokeRect</code> pelo método <code>rect</code> a
                                    linha surge como em um passe de mágica.
                                </p>

                                <p>
                                    Mas não tem mágica não, explico. O método <code>rect</code> influencia no caminho (path).
                                    Repare que desenhamos o retângulo nas coordenadas (x=60, y=60). A mágica está aí, o
                                    pincel foi deslocado até a coordenada (x=60, y=60). É como se tivéssemos chamado o 
                                    método <code>moveTo(60, 60)</code>.
                                </p>

                                <p>
                                    O método seguinte (<code>lineTo(10,10)</code>) cumpre seu papel corretamente, pois ele desenha-rá
                                    uma linha até a coordenada (x=10, y=10). E adivinha a coordenada de origem? Isso mesmo,
                                    (x=60, y=60).
                                </p>


                            </div>
                        </div>


                        <h3>Exemplo 03</h3>

                        <p>Ainda não caiu a ficha? Não tem problema temos mais este exemplo para clarear as coisas.</p>

                        <p>
                            Ele é igual ao exemplo 01, mas ao adicionar-mos a função <code>moveTo</code> (veja sublinhado)
                            ele se comporta exatamente como o exemplo 02.
                        </p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex06-2' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex06-2');
                                    var context = canvas.getContext('2d');
                                    context.strokeStyle = "blue";

                                    context.strokeRect(60, 60, 30, 30);
                                    context.moveTo(60, 60);
                                    context.lineTo(10, 10);
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex06-2');
var context = canvas.getContext('2d');
context.strokeStyle = "blue";

// mova o pincel até (60,60) e desenhe um retângulo
context.strokeRect(60, 60, 30, 30);
// mova, novamente, o pincel até (60,60)...
<em>context.moveTo(60, 60);</em>
// ... e desenha uma linha até (10,10)
context.lineTo(10,10);
// pinte o caminho
context.stroke();</code></pre>

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