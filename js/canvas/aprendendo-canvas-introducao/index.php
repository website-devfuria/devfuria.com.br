<?php
/**
 *
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/math-random-numero-randomico-em-javascript/");
$view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . "canvas";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body class="">
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="" id="content">
                    <div class="container">
                        <h1>Introdução ao CANVAS (HTML5)</h1>
                    </div>
                </div>



                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">
                <p>Errado 2x.</p>

                <p>O valor padrão parece ser 1px e não zero.</p>

                <p>E o valores menores que 1 (fracionários) são válidos também.</p>

                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/refers/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>