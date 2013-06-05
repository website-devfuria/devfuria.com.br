<?php
/**
 * HOME
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_TEC
        );
        include BASE_PATH.VIEWS_COMP_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.VIEWS_COMP_PATH."head_links_css.php"; ?>
    </head>
    <body>
        <?php
        $nav_top['secao'] = null;
        include BASE_PATH.VIEWS_COMP_PATH."nav_top.php";
        ?>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <header>
                            <?php include BASE_PATH.VIEWS_COMP_PATH."google_search.php"; ?>
                    </header>
                </div>
            </div>


            <ul class="thumbnails">
                <li class="span4">
                    <div class="thumbnail">
                        <a href="<?php echo LINKS_PATH?>php/">
                            <img src="<?php echo LINKS_PATH; ?>furia/imagens/logo-php.jpeg" alt="php">
                        </a>
                        <?php $materias = Materia::getObjects(Materia::PHP); ?>
                        <ul class="nav nav-pills nav-stacked">
                            <li><span class="badge badge-success">Básico</span></li>
                            <li>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php foreach ($materias as $materia): ?>
                                        <li><a href="<?php echo LINKS_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail" >
                        <a href="<?php echo LINKS_PATH?>js/">
                            <img src="<?php echo LINKS_PATH; ?>furia/imagens/logo-javascript.png" alt="javascript">
                        </a>
                        <?php $materias = Materia::getObjects(Materia::JS); ?>
                        <ul class="nav nav-pills nav-stacked">
                            <li><span class="badge badge-success">Básico</span></li>
                            <li>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php foreach ($materias as $materia): ?>
                                        <li><a href="<?php echo LINKS_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <a href="<?php echo LINKS_PATH?>html-css/">
                            <img src="<?php echo LINKS_PATH; ?>furia/imagens/logo-html-css.jpg" alt="html e css">
                        </a>
                        <?php $materias = Materia::getObjects(Materia::HTML_CSS); ?>
                        <ul class="nav nav-pills nav-stacked">
                            <li><span class="badge badge-success">Básico</span></li>
                            <li>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php foreach ($materias as $materia): ?>
                                        <li><a href="<?php echo LINKS_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="row">
                <div class="span12">
                    <?php include BASE_PATH.VIEWS_COMP_PATH."face_botao_curtir.php"; ?>
                </div><!-- span12 -->
            </div><!-- row -->
        </div><!-- container -->

    <?php include BASE_PATH.VIEWS_COMP_PATH."rodape.php"; ?>
    <?php include BASE_PATH.VIEWS_COMP_PATH."rodape_js.php"; ?>
    </body>
</html>