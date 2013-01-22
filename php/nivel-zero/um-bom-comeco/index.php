<?php
require "../../../furia/includes/bs.php";
$materia = new Materia(1);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $materia->titulo; ?> | <?php echo DOMINIO; ?></title>
        <?php include BASE_PATH.COMPONENTES_PATH."head_meta.php"; ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php include BASE_PATH.COMPONENTES_PATH."nav_top.php";?>
        <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>

        <div class="container sombra">
            <div class="row">
                <div class="span12">
                    <article>
                        <?php echo Markdown(file_get_contents('materia.mrk'));  ?>
                        <?php include BASE_PATH.COMPONENTES_PATH."materia_fim.php"; ?>
                    </article>

                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>

                </div><!-- span12  -->
            </div><!-- row  -->
        </div><!-- container -->

        <div class="container sem_borda">
            <div class="row">
                <div class="span10 offset1">
                    <?php include BASE_PATH.COMPONENTES_PATH."tree_parcial.php"; ?>
                </div>
            </div>

            <div class="row">
                <div class="span8 offset2">
                    <?php include BASE_PATH.COMPONENTES_PATH."form_feedback.php"; ?>
                </div>
            </div>
        </div>

    <?php include BASE_PATH.COMPONENTES_PATH."rodape.php"; ?>

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>

    </body>
</html>