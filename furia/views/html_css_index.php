<?php
/**
 * HTML & CSS home
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>HTML & CSS | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_TEC
        );
        include BASE_PATH.VIEWS_COMP_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.VIEWS_COMP_PATH."head_links_css.php"; ?>
        <style type="text/css">
            div.materia-resumo.lista-html-css {
                background-image: url("../furia/imagens/lista_html_css.png");
            }
        </style>
    </head>
    <body class="respiro-em-baixo">

        <?php
        $nav_top['secao'] = "html-css";
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
                    $tree_completa['secao'] = "html-css";
                    $tree_completa['nivel'] = "basico";
                    include BASE_PATH.VIEWS_COMP_PATH."tree_completa.php";
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="span10 offset1">
                    <div class="furia-lista-materias">
                        <?php
                        $lista_materias['secao'] = Materia::HTML_CSS;
                        include BASE_PATH.VIEWS_COMP_PATH."lista_materias.php";                        
                        ?>
                    </div>
                </div>
            </div>

        </div><!-- container -->

    <?php include BASE_PATH.VIEWS_COMP_PATH."rodape_js.php"; ?>
    </body>
</html>