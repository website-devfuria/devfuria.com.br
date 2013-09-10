<?php
/**
 * Lógica home
 */


/**
 * Includes
 */
require "../furia/boot.php";


/**
 * View
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Lógica | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Curso de lógica de programação",
            "keywords" =>  KEYWORDS_LOGICA
        );
        include BASE_PATH.VIEWS_COMP_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.VIEWS_COMP_PATH."head_links_css.php"; ?>
        <style type="text/css">
        </style>
    </head>
    <body class="respiro-em-baixo">

        <?php
        $nav_top['secao'] = Materia::LOGICA;
        include BASE_PATH.VIEWS_COMP_PATH."nav_top.php";
        ?>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <p>
                            <?php include BASE_PATH.VIEWS_COMP_PATH."google_search.php"; ?>
                        </p>
                    </header>
                </div>
            </div>

            <div class="row">
                <div class="span10 offset1">
                    <?php
                    $tree_completa['secao'] = Materia::LOGICA;
                    $tree_completa['nivel'] = "basico";
                    include BASE_PATH.VIEWS_COMP_PATH."tree_completa.php";
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="span10 offset1">
                    <div class="furia-lista-materias">
                        <?php
                        $lista_materias['secao'] = Materia::LOGICA;
                        include BASE_PATH.VIEWS_COMP_PATH."lista_materias.php";                        
                        ?>
                    </div>
                </div>
            </div>

        </div><!-- container -->

    <?php include BASE_PATH.VIEWS_COMP_PATH."rodape_js.php"; ?>
    </body>
</html>