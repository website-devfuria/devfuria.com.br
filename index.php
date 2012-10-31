<?php
require "furia/includes/bs.php";
defined('BASE_PATH') or die;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" => "webapp; app's; desenvolvimento, desenvolvimento web, website, webstandards, programação, php, php fácil, php iniciando, php iniciante, começando com php, php descomplicado, javascript, js, html, html5, css",
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php
        $nav_top['secao'] = null;
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <p>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                        </p>
                    </header>

                    <div class="furia-lista-materias">



                        
                        <div class="materia-resumo lista-php">
                            <a href="php/nivel-zero/um-bom-comeco">
                                <em><?php echo $materia->titulo; ?></em>
                                <span class="resumo">
                                    <?php echo $materia->resumo; ?>
                                </span>
                                <span class="hidden-phone assinatura"><?php echo $materia->autor; ?>, atualizado em <?php echo $materia->dt_atualizacao; ?>, escrito em <?php echo $materia->dt_criacao; ?>.</span>
                            </a>
                        </div>



                    </div>
                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>

                </div><!-- span12 -->
            </div><!-- row -->
        </div><!-- container -->

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>