<?php
/**
 * PHP - index
 */
require "../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
//        $view->head->setTitle('Curso programação PHP online (gratis)');
        $view->head->setTitle('Curso de PHP Grátis | Curso de PHP Online | Começando a programar em PHP | Aprender PHP');
        $view->head->setDescription('Aprenda a fazer sites e sistemas em PHP, veremos muito código na linguagem PHP.');
        $view->head->setkeywords("php; php5; curso de PHP gratuito; curso de php");
//        $view->head->setkeywords("php; php5; php6; php5.3; php5.4; tutorial php; codigos php; apostila php; " .
//                "php básico; php fácil; php início; php iniciante; php iniciando; php iniciante; " .
//                "começando com php; começando no php; php descomplicado; aprendendo php; " .
//                "matéria sobre php; aula sobre php; "
//        );
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>

        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/php/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $view->navtop->secaoAtiva = Conteudo::SECAO_PHP;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>PHP<small></small></h1>
                <p>O curso de PHP foi o primeiro a aparecer, ele "abriu" o site devfuria.</p>
                <p>Este curso não pretende ser uma referência a linguagem PHP, pois o manual do PHP já cumpre com esse papel.</p>
                <p>Eu idealizei (como todos os demais cursos) para ser uma experiência prática e de vez em quando divertida.</p>
                <p>O curso é totalmente gratuito e feito especialmente para quem pretende ser um programador php de primeira linha.</p>
                <p>Seja bem vindo ao curso!</p>
            </div>
        </main>

        <?php
        $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_PHP);
        $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_PHP, Conteudo::CATEGORIA_CURSO);
        include BASE_PATH . VIEWS_PATH . "/cursos-index/lista-secao.php";
        ?>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
