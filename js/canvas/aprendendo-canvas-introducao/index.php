<?php
/**
 *
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/canvas/aprendendo-canvas-introducao/");
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
                        <h1>Introdução ao Canvas <small>(HTML5)</small></h1>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">

                        <h3>O que é <strong>canvas</strong>?</h3>

                        <blockquote>
                            <p>Uma tela bitmap de resolução dependente que pode ser usada para renderizar gráficos, jogos, ou outras imagens em tempo real</p>
                            <small>WHATWG</small>
                        </blockquote>

                        <blockquote>
                            <p>A tag canvas é um retângulo na sua página, onde você pode usar JavaScript para desenhar o que você quiser.</p>
                            <small>Mark Pilgrim</small>
                        </blockquote>


                        <h3>Sobre o <strong>contexto</strong>!</h3>

                        <p>
                            Todo <strong>canvas</strong> tem um contexto de desenho, utilizamos a função <code>getContext()</code> do
                            objeto canvas para recuperar o contexto.
                        </p>

                        <p>A especificação prevê dois contextos: 2d e 3d.</p>

                        <p>Devemos passar a opção como <code>string</code>.</p>

                        <pre><code class="language-javascript">var context = canvas.getContext('2d');</code></pre>

                        <p>ou</p>

                        <pre><code class="language-javascript">var context = canvas.getContext('3d');</code></pre>

                        <p>
                            O primeiro contexto a ficar maduro foi o bidmensional (2d). É nele que vamos concentrar
                            nossos esfoços.
                        </p>


                        <h3>Sobre o <strong>path</strong> (caminho)</h3>

                        <blockquote>
                            <p>Cada <strong>canvas</strong> possui um <strong>path</strong> (caminho).</p>

                            <p>
                                Defnir o <strong>path</strong> é como desenhar com um lápis. Você pode desenhar o que quiser
                                mas ele não será parte do produto finalizado até que você pegue <strong>a pena</strong> e
                                trace sobre seu <strong>path</strong> com tinta
                            </p>
                            <small>Mark Pilgrim</small>
                        </blockquote>

                        <p>Utilizamos a função <code>beginPath()</code> do objeto contexto para iniciar um caminho (path) ou
                            subcaminho (subpath).</p>


                        <h3>Desenhando a tinta</h3>

                        <p>Para imprimir o caminho no canvas usamos o método <code>stroke()</code></p>

                        <blockquote>
                            <p>
                                O <code>stroke()</code> é um dos métodos "tinta". Ele pega o path complexo que você definiu
                                com todas aquelas chamadas <code>moveTo()</code> e <code>lineTo()</code> e realmente as
                                desenha no canvas.
                            </p>
                            <small>Mark Pilgrim</small>
                        </blockquote>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2>Primeiros passos</h2>
                        </div>

                        <p>
                            Olhando para o arquivo HTML, podemos afirmar que o <strong>canvas</strong> nada mais é do que um elemento DOM.
                        </p>

                        <p>Ele precisará de um <code>id</code> para referenciarmos com o Javascript.</p>

                        <p>Eu defini os tamanhos <code>315x150</code>, mas esse já é o tamanho padrão do <strong>canvas</strong>.</p>

                        <pre><code class="language-html">&lt;canvas id='myCanvas' width='300' height='150'&gt;</code></pre>

                        <p>
                            Sozinho, ele não produz efeito algum. Precisamos de algum código em Javascript para vermos o
                            elemento <strong>canvas</strong> entrar em ação
                        </p>

                        <p>Abaixo temos um HTML de exemplo para você poder começar a utilizar o <strong>canvas</strong>.</p>

                        <div class="code">
                            <h6>canvas.html</h6>
                            <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&lt;/title&gt;
        &lt;style&gt;
            canvas {
                background: #ffffff;
                cursor: pointer;
                margin-left: 10px;
                margin-top: 10px;
                -webkit-box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
                -moz-box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
                box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;canvas id='myCanvas' width='300' height='150'&gt;
            Canvas not supported
        &lt;/canvas&gt;
        &lt;script&gt;
            var canvas = document.getElementById('myCanvas');
            var context = canvas.getContext('2d');

            //
            // aqui entrará o seu javascript que manipulará o elemento canvas
            //

        &lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>


                        <h3>Obtendo o <code>contexto</code></h3>

                        <p>Para comerçar a executar o canvas, precisamos do <strong>contexto</strong>.</p>

                        <p>E para obter o <strong>contexto</strong> precisamos primeiro encontrar o elemento <strong>canvas</strong>.</p>

                        <p>Aqui temos uma referência ao elemento <strong>canvas</strong>.</p>

                        <pre><code class="language-javascript">var canvas = document.getElementById('myCanvas');</code></pre>

                        <p>E agora sim temos o objeto canvas, o contexto.</p>

                        <pre><code class="language-javascript">var context = canvas.getContext('2d');</code></pre>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2>Esquema das coordenadas</h2>
                        </div>

                        <img class="img-responsive" alt="### Coordeandas" id="myimage" src="coordenadas02.gif">

                        <p>O canvas trabalha como um "gráfico x y"  sobre o plano cartesiano.</p>

                        <p>Só que o ponto <code>x = 0</code> e <code>y = 0</code> está no canto superior esquerdo.</p>

                        <p>É como se estivéssemos olhando para o quadrante inferior direito (4 quadrante) do plano cartesiano.</p>

                        <p>
                            <img class="img-thumbnail" alt="### Plano cartesiano" id="myimage" src="cartesiano-braesc.jpg">
                        </p>

                        <p>
                            Se você já trabalhou com algo parecido, como por exemplo a <strong>biblioteca GD</strong>,
                            se sentirá em casa.
                        </p>

                        <p>Caso contrário,  pode ser que leve um tempo para se acostumar.</p>

                        <p>Veja outros exemplos</p>

                        <p>
                            <img class="img-thumbnail" alt="### Plano cartesiano" id="myimage" src="cartesiano-wiki.PNG">
                            <img class="img-thumbnail" alt="### Plano cartesiano" id="myimage" src="coordenadas03.png">
                        </p>

                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2>Exemplo básico da MDN</h2>
                        </div>

                        <p>Abaixo temos o exemplo básico da MDN</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01' >Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');

                                    if (canvas.getContext) {
                                        var context = canvas.getContext("2d");

                                        context.fillStyle = "rgb(200,0,0)";
                                        context.fillRect(10, 10, 55, 50);

                                        context.fillStyle = "rgba(0, 0, 200, 0.5)";
                                        context.fillRect(30, 30, 55, 50);
                                    }
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');

if (canvas.getContext) {
    var context = canvas.getContext("2d");

    context.fillStyle = "rgb(200,0,0)";
    context.fillRect(10, 10, 55, 50);

    context.fillStyle = "rgba(0, 0, 200, 0.5)";
    context.fillRect(30, 30, 55, 50);
}
</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="bs-docs-section">

                        <div class="page-header">
                            <h2>Exemplo ninja de Andrew Hoyer (CLOTH)</h2>
                        </div>

                        <p>E aqui vemos um exemplo um pouco mais empolgante. rssss</p>

                        <p>
                            Esse exemplo é o que melhor define o potencial do <strong>canvas</strong>
                            (minha humilde opinião)
                        </p>

                        <p>O que você está vendo abaixo é um "pano", tente pegá-lo ou então precione F5.</p>

                        <p class="text-center">
                            <canvas id='ex02' width="650px" height="450px" style="width:650px">Canvas not supported</canvas>
                            <script type="text/javascript" charset="utf-8" src="cloth/mootools-1.2.4-core-yc.js"></script>
                            <script type="text/javascript" charset="utf-8" src="cloth/fast_vector.js"></script>
                            <script type="text/javascript" charset="utf-8" src="cloth/fast_vector.js"></script>
                            <script type="text/javascript" charset="utf-8" src="cloth/canvas.js"></script>
                            <script type="text/javascript" charset="utf-8" src="cloth/point.js"></script>
                            <script type="text/javascript" charset="utf-8" src="cloth/constraint.js"></script>
                            <script type="text/javascript" charset="utf-8" src="cloth/cloth.js"></script>
                        </p>

                        <p>
                            Para ver o código
                            <a href="https://github.com/ndrwhr/cloth-simulation" title="link-externo">https://github.com/ndrwhr/cloth-simulation</a>
                        </p>
                        <p>
                            Para ver o exempo oficial
                            <a href="http://andrew-hoyer.com/experiments/cloth/" title="link-externo">http://andrew-hoyer.com/experiments/cloth/</a>
                        </p>
                        <p>
                            Eis o site do maluco
                            <a href="http://andrew-hoyer.com/" title="link-externo">http://andrew-hoyer.com/</a>
                        </p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h1>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="https://developer.mozilla.org/pt-BR/docs/HTML/Canvas" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Referência ao Canvas (MDN)</h4>
                                        <span class="label label-default">https://developer.mozilla.org/pt-BR/docs/HTML/Canvas</span>
                                    </a>
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Canvas_tutorial/Basic_usage" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Uso básico do canvas (MDN)</h4>
                                        <p class="list-group-item-text">Esse você encontra também na documentação MDN</p>
                                        <p class="list-group-item-text">Eu repeti aqui só para facilitar</p>
                                        <span class="label label-default">https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Canvas_tutorial/Basic_usage</span>
                                    </a>
                                    <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/the-canvas-element.html#the-canvas-element" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Referência ao Canvas (WHATWG)</h4>
                                        <p class="list-group-item-text">Seção 4.12.4</p>
                                        <span class="label label-default">http://www.whatwg.org/specs/web-apps/current-work/multipage/the-canvas-element.html#the-canvas-element</span>
                                    </a>
                                    <a href="http://www.w3.org/TR/html5/scripting-1.html#the-canvas-element" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Referência ao Canvas (W3C)</h4>
                                        <p class="list-group-item-text">Página Index sobre o JS, possue muitos links interessantes.</p>
                                        <span class="label label-default">http://www.w3.org/TR/html5/scripting-1.html#the-canvas-element</span>
                                    </a>
                                    <a href="http://diveintohtml5.com.br/canvas.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Vamos chamá-lo de superfície de desenho</h4>
                                        <p class="list-group-item-text">Capítulo 4 do livro "HTML5 Entendendo e Executando"</p>
                                        <p class="list-group-item-text">disponível para consulta na web, traduzido pela comunidade.</p>
                                        <span class="label label-default">http://diveintohtml5.com.br/canvas.html</span>
                                    </a>
                                </div>
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