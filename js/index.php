<?php
require "../furia/includes/bs.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>JS | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_TEC . KEYWORDS_JS
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>       
    </head>
    <body class="respiro-em-baixo">

        <?php
        $nav_top['secao'] = "js";
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
                </div>
            </div>


            <div class="row">
                <div class="span6">
                    <div class="furia-secoes-intro">
                        <h1>Curso (in) completo de JS</h1>
                        <p>O <em>Curso Javascript (in)completo</em> foi desenvolvido primando-se a qualidade, simplicidade e objetividade</p>
                        <p>Caso o leitor sinta a falta de qualquer um deses elementos, pedimos a gentileza de nos enviar um feedback</p>

                        <p>O curso está dividido em níveis: básico, intermediário e avançado</p>
                        <p>Dentro de cada nível encontram-se as mátérias(artigos).</p>

                        <p>Seja bem vindo ao curso!</p>
                        <p>Esperamos que seja proveitoso.</p>
                    </div>
                </div>
                <div class="span6">
                    <?php include BASE_PATH.COMPONENTES_PATH."form_feedback.php"; ?>
                </div>
            </div>

            <div class="row">
                <div class="span10 offset1">
                    <?php
                    $tree_completa['secao'] = "js";
                    $tree_completa['nivel'] = "basico";
                    include BASE_PATH.COMPONENTES_PATH."tree_completa.php";
                    ?>
                </div>
            </div>

        </div><!-- container -->

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>