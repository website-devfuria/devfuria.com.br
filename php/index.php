<?php
/**
 * PHP - index
 */
require "../core/boot.php";
$aba = $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
//        $view->head->setTitle('Curso programação PHP online (gratis)');
        $view->head->setTitle('Curso de PHP Grátis | Curso de PHP Online | Começando a programar em PHP | Aprender PHP');
        $view->head->setDescription('Aprenda a fazer sites e sistemas em PHP, veremos muito código na linguagem PHP.');
        $view->head->setkeywords("php; php5; curso de PHP gratuito; curso de php");
//        $view->head->setkeywords("php; php5; php6; php5.3; php5.4; tutorial php; codigos php; apostila php; " .
//                "php básico; php fácil; php início; php iniciante; php iniciando; php iniciante; " .
//                "começando com php; começando no php; php descomplicado; aprendendo php; " .
//                "matéria sobre php; aula sobre php; "
//        );
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>

        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/php/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $view->navtop->secaoAtiva = Conteudo::SECAO_PHP;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        
        <?php
        if ($aba == "curso" || $aba == ""){
            require "index-aba-curso.php";
        } elseif ($aba == Conteudo::SUB_SECAO_RTG) {
            require "index-aba-rtg.php";
        }
        ?>        

        <footer class="bs-footer"></footer>    
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
