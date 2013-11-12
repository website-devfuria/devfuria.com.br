<?php
/**
 * RegExp
 */
/**
 * Includes
 */
require "../../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head = new Head();
        $core->head->setTitle('REGEXP');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
        $core->navtop->secao = Core::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>pattern.test()</h1>
                <p>Dissecando a função do JS</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-warning">22/07/2013</span>, escrito em <span class="label label-warning">22/07/2013</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">Sobre a função</a>
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
                            <h1 id="intro">Sobre a função</h1>
                        </div>


                        <p>Em JS também temos a forma <em>pattern.test()</em> onde "pattern" é expressão regular, "test()" é a função que evocamos
                            para executar a ER e o parâmetro 'string passado na função é a nosso texto de pesquisa (assunto).</p>

                        <p>Essa é a forma mais usual, ou pelo menos é a mais comentada.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);
                            </pre>
                        </div>

                        <p>Diferentemente da primeira função (string.match), o valor da variável <em>resultado</em> será true ou false.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="nao-casou">Se a expressão não casar</h1>
                        </div> 

                        <p>A função retorna <em>false</em> neste caso.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var string = "Casa com a palavra exemplo",
    pattern = /não existe/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);
                            </pre>
                        </div>

                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="sintax-errada">Se a expressão estiver sintaticamente errada</h1>
                        </div> 

                        <p>Se executarmos o código abaixo, ele falhará. Eu coloquei um ( a mais.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var string = "Casa com a palavra exemplo",
    pattern = /(exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);
console.log(resultado);
                            </pre>
                        </div>

                        <p>Igualmente a função match(), a execução do código será interrompida e o Firebug mostrará a seguinte mensagem:
                        <div class="bs-example">
                            <img class="img-thumbnail" src="match-erro.png" alt="match-resultado" />
                        </div></p>

                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="code">Código</h1>
                        </div>

                        <p>Como a função retorna apenas true ou false, fica facíl deduzirmos o código final.</p>

                        <p>Porém, é válida a mesma observação quanto ao uso do bloco "try cath" (no caso da expressão estar sintáticamente errada).</p>

                        <div class="code">
                            <h6>JS - código final</h6>
                            <pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
                            </pre>
                        </div>

                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
