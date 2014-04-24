<?php
/**
 * preg-match-all
 *
 */
require "../../core/boot.php";
$pagina = $model->getPagina("/php/arrays-funcoes-basicas/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body class="receitas-body">
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="receitas-header" id="content">
                    <div class="container">
                        <!--<h1><?php #echo $pagina->titulo    ?></h1>-->
                        <h1>preg_match_all()</h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section" id="array_pop">
                        <div class="page-header">
                            <h3>array_pop</h3>
                        </div>

                        <p>Para remover um valor no final do array:</p>

                        <pre><code class="language-php">array_pop($arr, "valor");</code></pre>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.array-pop.php" title="link-externo">
                                Manual do PHP - array-pop
                            </a>
                        </p>
                    </div>

                    
                    
                    <div class="bs-docs-section" id="explode">
                        <div class="page-header">
                            <h3>explode</h3>
                        </div>

                        <p>Transforma string em array.</p>

                        <pre><code class="language-php">$arr = array();
$arr = explode("/", "20/01/2001");
var_dump($arr);</code></pre>

                        <p>Resultado.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array06" src="array06.png">
                        </div>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.explode.php" title="link-externo">
                                Manual do PHP - explode
                            </a>
                        </p>                        
                        
                    </div>


                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/rtg/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>