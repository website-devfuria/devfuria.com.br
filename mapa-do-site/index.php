<?php
require "../furia/includes/bs.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Mapa do site <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_TEC

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
                </div><!-- span12 -->
            </div><!-- row -->
            <div class="row">
                <div class="span6">
1                    
                </div>
                <div class="span6">
2                    
                </div>
            </div>
            
        </div><!-- container -->
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>