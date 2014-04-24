<?php
/**
 * 
 *
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
                        <h1><?php echo $pagina->titulo    ?></h1>
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

                    <div class="bs-docs-section" id="array_shift">
                        <div class="page-header">
                            <h3>array_shift</h3>
                        </div>

                        <p>Para remover um elemento do início do array:</p>

                        <pre><code class="language-php">array_shift($arr);</code></pre>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.array-shift.php" title="link-externo">
                                Manual do PHP - array-shift
                            </a>
                        </p>
                        
                    </div>

                    <div class="bs-docs-section" id="array_unshift">
                        <div class="page-header">
                            <h3>array_unshift</h3>
                        </div>

                        <p>Adiciona um elemento no início do array:</p>

                        <pre><code class="language-php">array_unshift($arr, "valor");</code></pre>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.array-unshift.php" title="link-externo">
                                Manual do PHP - array-unshift
                            </a>
                        </p>                        
                        
                    </div>

                    <div class="bs-docs-section" id="unset">
                        <div class="page-header">
                            <h3>unset</h3>
                        </div>

                        <p>Para remover determinado elemento do array:</p>

                        <pre><code class="language-php">unset($arr[5]);</code></pre>

                        <p>Para remover o array da memória:</p>

                        <pre><code class="language-php">unset($arr);</code></pre>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.unset.php" title="link-externo">
                                Manual do PHP - unset 
                            </a>
                        </p> 
                        
                    </div>

                    <div class="bs-docs-section" id="array_in">
                        <div class="page-header">
                            <h3>in_array</h3>
                        </div>

                        <p>Verifica se o array contém um determinado valor:</p>

                        <pre><code class="language-php">in_array($arr, "valor");</code></pre>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.in-array.php" title="link-externo">
                                Manual do PHP -  in-array
                            </a>
                        </p> 
                        
                    </div>

                    <div class="bs-docs-section" id="count">
                        <div class="page-header">
                            <h3>count</h3>
                        </div>

                        <p>Retorna a quantidade de elementos de um array:</p>

                        <pre><code class="language-php">count($arr);</code></pre>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.count.php" title="link-externo">
                                Manual do PHP - count
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

                    <div class="bs-docs-section" id="implode">
                        <div class="page-header">
                            <h3>implode</h3>
                        </div>

                        <p>Tansforma array em string.</p>

                        <pre><code class="language-php">$arr = array("Flavio", "Alexandre", "Micheletti");
$nomeCompleto = implode("-", $arr);
var_dump($nomeCompleto)</code></pre>

                        <p>Resultado.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array07" src="array07.png">
                        </div>
                        
                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/function.implode.php" title="link-externo">
                                Manual do PHP - implode
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