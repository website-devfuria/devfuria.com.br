<?php
/**
 * pattern.test()
 * expressões regulares, pattern.test(), pattern.test
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/regexp/basico/pattern-test/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo ?></h1>
                <p>O básico sobre a função do Javascript</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">pattern.test()</a>
                            </li>
                            <li>
                                <a href="#nao-casou">Expressão não casa</a>
                            </li>
                            <li>
                                <a href="#sintax-errada">Sintaticamente errada</a>
                            </li>
                            <li>
                                <a href="#code">Código</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="intro">pattern.test()</h2>
                        </div>


                        <p>
                            Em Javascript também temos a forma <code>pattern.test()</code> onde <code>pattern</code> é
                            a expressão regular, <code>test()</code> é a função que evocamos para executar a expressão regular e o
                            parâmetro <code>string</code> passado na função é a nosso texto de pesquisa (assunto).
                        </p>

                        <p>Essa é a forma mais usual, ou pelo menos é a mais comentada.</p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);</code></pre>
                        </div>

                        <p>
                            Diferentemente da primeira função <code>(string.match)</code>, o valor da variável 
                            <code>resultado</code> será <code>true</code> ou <code>false</code>.
                        </p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="nao-casou">Se a expressão não casar</h2>
                        </div>

                        <p>A função retorna <code>false</code> neste caso.</p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /não existe/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);</code></pre>
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="sintax-errada">Se a expressão estiver sintaticamente errada</h2>
                        </div>

                        <p>Se executarmos o código abaixo, ele falhará. Eu coloquei um <code>(</code> a mais.</p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /(exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);</code></pre>
                        </div>

                        <p>
                            Igualmente a função <code>match()</code>, a execução do código será interrompida e o 
                            Firebug mostrará a seguinte mensagem:
                        </p>

                        <div class="bs-example">
                            <img class="img-rounded" src="../string-match/match-erro.png" alt="### match-erro" />
                        </div></p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="code">Código</h2>
                        </div>

                        <p>Como a função retorna apenas <code>true</code> ou <code>false</code>, fica facíl deduzirmos o código final.</p>

                        <p>Também é válida a mesma observação quanto ao uso do bloco <code>try cath</code> (no caso da expressão estar sintáticamente errada).</p>

                        <div class="code">
                            <h6>Javascript - código final</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}</code></pre>
                        </div>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>