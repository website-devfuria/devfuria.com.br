<?php
/**
 * Lógica/
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
        $core->head->setTitle('');
        $core->head->setDescription('');
        $core->head->setkeywords('');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Code - Triângulo com TDD</h1>
                <p>Primeiro exemplo de TDD,</p>
                <p>Obviamente atacaremos um problema conhecido.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">/01/2014</span>, escrito em <span class="label label-info">/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="triangulo">Código "é triangulo" agora com TDD</h1>
                        </div>


                        <p>Mostrar os testes só com o esqueleto da classe</p>
                        
                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">function eTriangulo($a, $b, $c) {
    if ($a < ($b + $c)) {
        if ($b < ($a + $c)) {
            if ($c < ($a + $b)) {
                return true;
            }
        }
    }

    # senão ...
    return false;
}
</code></pre>
                        </div>                        


                        <div class="code">
                            <h6>PHP</h6>                        
                        <pre><code class="language-php">function eTriangulo($a, $b, $c) {
    if ($a > ($b + $c)) {
        return false;
    }
    if ($b > ($a + $c)) {
        return false;
    }
    if ($c > ($a + $b)) {
        return false;
    }

    return true;
}
</code></pre>
                        </div>


                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/logica-de-programacao/basico/code-triangulo/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_LOG]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>                    
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Lógica de Programação</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_LOG);
                        $core->lista->link_ativo = "/logica-de-programacao/basico/code-triangulo/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
