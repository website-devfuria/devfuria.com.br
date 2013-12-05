<?php
/**
 * HOME, index do site
 */
/**
 * Includes
 */
require "core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
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
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Page content of course! -->
    <main class="bs-masthead" id="content" role="main">
        <div class="container">
            <h1>DevFuria</h1>
            <p class="lead">Curso sobre programação web prá ninguém botar defeito!</p>
            <ul>
                <li>Isto não é um blog!</li>
                <li>É gratuito e sempre será!</li>
                <li>Feito especialmente para o público iniciante.</li>
                <li>Seja bem vindo e espero que você divirta-se aprendendo.</li>
            </ul>
        </div>
    </main>

    <footer class="container" role="contentinfo">
        <ul class="bs-masthead-links">
            <li>
                <a href="https://github.com/flaviomicheletti/www.devfuria.com.br" title="link-externo">Projeto no GitHub</a>
            </li>
            <li>
                <a href="flavio-alexandre-micheletti.php">Quem vôs fala</a>
            </li>
        </ul>
    </footer>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="js">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Javascript</h1>
                    <?php
                    $core->lista->setLinks($core->links, Core::SECAO_JS);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>

        </div>
    </div>


    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="php">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <h1>PHP</h1>
                    <?php
                    $core->lista->setLinks($core->links, Core::SECAO_PHP);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="html-css">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>HTML & CSS</h1>
                    <?php
                    $core->lista->setLinks($core->links, Core::SECAO_HTML);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="logica">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Lógica de Programação</h1>
                    <?php
                    $core->lista->setLinks($core->links, Core::SECAO_LOG);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="mysql">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>MySql</h1>
                    <?php
                    $core->lista->setLinks($core->links, Core::SECAO_MYSQL);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="regexp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>RegExp</h1>
                    <?php
                    $core->lista->setLinks($core->links, Core::SECAO_ER);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>