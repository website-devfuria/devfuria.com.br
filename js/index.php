<?php
/**
 * index JS
 */
/**
 * Includes
 */
require "../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Javascript | ' . DOMINIO);
        $core->head->setDescription('Aprendendo Javascript');
        $core->head->setkeywords("tutorial html, tags html; html tabela; codigos html; apostila html; comandos html; html basico; " .
            "html básico; html fácil; html início; html iniciante; " .
            "html iniciando; html iniciante; começando com html; começando no html; " .
            "html descomplicado; aprendendo html; matéria sobre html; aula sobre html" .
            "css básico; css fácil; css início; css iniciante; " .
            "css iniciando; css iniciante; começando com css; começando no css; " .
            "css descomplicado; aprendendo css; matéria sobre css; aula sobre css;" .
            "folhas estilo cascata, web standards, padrões web, tableless"
        );
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>Javascript<small></small></h1>
                <p class="lead">Curso de Javascript</p>
                <p>Falar sobre o curso!</p>
            </div>
        </main>

        <div class="" style="background-color: #FFF; padding:   0px 0px;" id="html-css">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Javascript</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_JS);
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>