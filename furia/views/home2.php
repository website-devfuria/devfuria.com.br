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
        <link href="<?php echo BASE_PATH; ?>index.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="respiro-em-baixo">
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

            <div class="row">
                <div class="row">
                    <div class="span4 offset4">
                        <img data-src="holder.js/300x200" src="<?php echo BASE_PATH; ?>furia/imagens/logo-php.jpg" alt="imagem php">
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="span4">
                            <?php
                            $where = "WHERE secao = 'php' AND nivel = 'zero' ";
                            $materias = Materia::getObjects($where);
                            ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Básico</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <?php foreach ($materias as $materia): ?>
                                            <li><a href="<?php echo BASE_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="span4">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Intermediário</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Em breve</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="span4">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Avançado</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Em breve</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <div class="span4 offset4">
                        <img data-src="holder.js/300x200" src="<?php echo BASE_PATH; ?>furia/imagens/logo-js.png" alt="imagem php">
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="span4">
                            <?php
                            $where = "WHERE secao = 'js' AND nivel = 'basico' ";
                            $materias = Materia::getObjects($where);
                            ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Básico</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <?php foreach ($materias as $materia): ?>
                                            <li><a href="<?php echo BASE_PATH . $materia->url ?>"><?php echo $materia->titulo ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="span4">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Intermediário</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Em breve</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="span4">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Avançado</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Em breve</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <div class="span4 offset4">
                        <img data-src="holder.js/300x200" src="<?php echo BASE_PATH; ?>furia/imagens/logo-html-css.jpg" alt="imagem php">
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="span4">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Básico</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Em breve</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="span4">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Intermediário</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Em breve</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="span4">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="disabled"><a href="#">Avançado</a></li>
                                <li>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">Em breve</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

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