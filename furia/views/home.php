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
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                    </header>
                </div>
            </div>


            <ul class="thumbnails">
                <li class="span4">
                    <div class="thumbnail">
                        <a href="<?php echo BASE_PATH?>php/">
                            <img data-src="holder.js/260x180" src="<?php echo BASE_PATH; ?>furia/imagens/logo-php.jpeg" alt="">
                        </a>
                        <?php
                        $where = "WHERE secao = 'php' AND nivel = 'basico' ";
                        $materias = Materia::getObjects($where);
                        ?>
                        <ul class="nav nav-pills nav-stacked">
                            <li><span class="badge badge-success">Básico</span></li>
                            <li>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php foreach ($materias as $materia): ?>
                                        <li><a href="<?php echo BASE_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail" >
                        <a href="<?php echo BASE_PATH?>js/">
                            <img data-src="holder.js/260x180" src="<?php echo BASE_PATH; ?>furia/imagens/logo-javascript.png" alt="">
                        </a>
                        <?php
                        $where = "WHERE secao = 'js' AND nivel = 'basico' ";
                        $materias = Materia::getObjects($where);
                        ?>
                        <ul class="nav nav-pills nav-stacked">
                            <li><span class="badge badge-success">Básico</span></li>
                            <li>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php foreach ($materias as $materia): ?>
                                        <li><a href="<?php echo BASE_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <a href="#">
                            <img data-src="holder.js/260x180" src="<?php echo BASE_PATH; ?>furia/imagens/logo-html-css.jpg" alt="">
                        </a>
                        <?php
                        $where = "WHERE secao = 'html-css' AND nivel = 'basico' ";
                        $materias = Materia::getObjects($where);
                        ?>
                        <ul class="nav nav-pills nav-stacked">
                            <li><span class="badge badge-success">Básico</span></li>
                            <li>
                                <ul class="nav nav-pills nav-stacked">
                                    <?php foreach ($materias as $materia): ?>
                                        <li><a href="<?php echo BASE_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="row">
                <div class="span12">
                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>
                </div><!-- span12 -->
            </div><!-- row -->
        </div><!-- container -->

    <?php include BASE_PATH.COMPONENTES_PATH."rodape.php"; ?>
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>