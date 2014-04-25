<?php
/**
 * JS - index
 */
require "../core/boot.php";
$aba = $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('Javascript - Curso, matérias, exercícios, artigos sobre Javascript (especialmente para iniciantes)');
        $view->head->setDescription('Curso de Javascript para iniciantes, contempla o Canvas.');
//        $view->head->setDescription('Curso, matérias, exercícios, artigos sobre Javascript (especialmente para iniciantes). Aprenda Javascript de uma forma produtiva.');
        $view->head->setkeywords("curso de javascript; javascript básico; javascript iniciante;");
//        $view->head->setkeywords("javascript; js; javascript básico; javascript fácil; javascript início; javascript iniciante; " .
//                "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; " .
//                "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; "
//        );
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>

        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/js/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>
    </head>
    <body>
        <?php
        $view->navtop->secao_ativa = Conteudo::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        
        <?php
        if ($aba == "curso" || $aba == ""){
            require "index-aba-curso.php";
        } elseif ($aba == Conteudo::SUB_SECAO_RTG) {
            require "index-aba-rtg.php";
        } elseif ($aba == Conteudo::SUB_SECAO_CANVAS) {
            require "index-aba-canvas.php";
        }
        ?>

        <footer class="bs-footer"></footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>