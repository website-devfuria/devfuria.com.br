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

            <div class="row12">
                <div>
                    <h1>MAPA DO SITE</h1>
                </div>
            </div>

            <div class="row">
                <div class="span6">
                    <h3>PHP</h3>
                    <?php
                    $where    = "WHERE secao = 'php' AND nivel = 'zero' ";
                    $materias = Materia::getObjects($where);
                    ?>
                    <dl>
                        <dt>Nível zero</dt>
                        <?php foreach($materias as $materia): ?>
                            <dd><a href="<?php echo BASE_PATH.$materia->url?>"><?php echo $materia->titulo?></a></dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            <div class="row">
                <div class="span6">
                    <h3>Javascript</h3>
                    <?php
                    $where    = "WHERE secao = 'js' AND nivel = 'basico' ";
                    $materias = Materia::getObjects($where);
                    ?>
                    <dl>
                        <dt>Nível básico</dt>
                        <?php foreach($materias as $materia): ?>
                            <dd><a href="<?php echo BASE_PATH.$materia->url?>"><?php echo $materia->titulo?></a></dd>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
            
        </div><!-- container -->
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>