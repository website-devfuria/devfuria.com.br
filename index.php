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
        $core->head = new Head();
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
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
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
                <a href="https://github.com/flaviomicheletti/www.devfuria.com.br">Projeto no GitHub</a>
            </li>
            <li>
                <a href="flavio-alexandre-micheletti.php" >Quem vôs fala</a>
            </li>
        </ul>
    </footer>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="js">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Javascript</h1>
                    <div class="list-group">
                        <a href="<?php echo LINKS_PATH; ?>/js/basico/intro/" class="list-group-item">1. Introdução </a>
                        <a href="<?php echo LINKS_PATH; ?>/js/basico/preparando-o-terreno/" class="list-group-item">2. Preparando o terreno </a>
                        <a href="<?php echo LINKS_PATH; ?>/js/basico/debugando/" class="list-group-item">3. Debugando (depurando) [com vídeo] </a>
                        <a href="<?php echo LINKS_PATH; ?>/js/basico/code-lampadas" class="list-group-item">4. Code - A Lâmpada </a>
                        <a href="<?php echo LINKS_PATH; ?>/js/basico/code-lampadas-refatorando" class="list-group-item">5. Code - A Lâmpada (refatorando) </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="php">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <h1>PHP</h1>
                    <div class="list-group">
                        <a href="<?php echo LINKS_PATH; ?>/php/basico/um-bom-comeco/" class="list-group-item">Um bom começo </a>
                        <a href="<?php echo LINKS_PATH; ?>/php/basico/pe-na-jaca/" class="list-group-item">Antes de enfiar o pé na jáca </a>
                        <a href="<?php echo LINKS_PATH; ?>/php/basico/instalando-o-ambiente/" class="list-group-item">Instalando o ambiente no estilo NEXT, NEXT, NEXT </a>
                        <a href="<?php echo LINKS_PATH; ?>/php/basico/debugando/" class="list-group-item">Debugando (depurando) </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="htmlcss">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>HTML & CSS</h1>
                    <div class="list-group">
                        <a href="<?php echo LINKS_PATH; ?>/html-css/basico/onde-tudo-comecou/" class="list-group-item">Onde tudo começou </a>
                        <a href="<?php echo LINKS_PATH; ?>/html-css/basico/html-e-css-intro/" class="list-group-item">HTML e CSS - Introdução </a>
                        <a href="<?php echo LINKS_PATH; ?>/html-css/basico/elementos-inline-block-level/" class="list-group-item">Elementos in-line e elementos block-level </a>
                        <a href="<?php echo LINKS_PATH; ?>/html-css/basico/primeiro-html" class="list-group-item">Criando nosso primeiro HTML [com vídeo] </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="logica">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Lógica de Programação</h1>
                    <div class="list-group">
                        <a href="<?php echo LINKS_PATH; ?>/logica/basico/intro/" class="list-group-item">Introdução </a>
                        <a href="<?php echo LINKS_PATH; ?>/logica/basico/bateria01/" class="list-group-item">Primeira Bateria</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="mysql">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Mysql</h1>
                    <div class="list-group">
                        <a href="<?php echo LINKS_PATH; ?>/mysql/basico/intro/" class="list-group-item">Banco de dados prá que? </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="regexp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>RegExp</h1>
                    <div class="list-group">
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/intro/" class="list-group-item">Introdução </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/preg-match" class="list-group-item">preg_match() </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/string-match" class="list-group-item">string.match() </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/pattern-test" class="list-group-item">pattern.test() </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/pattern-exec" class="list-group-item">pattern.exec() </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/new-regexp" class="list-group-item">new RegExp() </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/ponto" class="list-group-item">ponto </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/varios-resultados-preg-match-all" class="list-group-item">Vários resultados - preg_match_all() </a>
                        <a href="<?php echo LINKS_PATH; ?>/regexp/basico/varios-resultados-match-test-exec" class="list-group-item">Vários resultados - match(), test() e exec() </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>