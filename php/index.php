<?php
/**
 * index PHP
 */
/**
 * Includes
 */
require "../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('PHP');
        $core->head->setDescription('Curso de PHP (especialmente para iniciantes), aprenda PHP de uma forma descomplicada.');
        $core->head->setkeywords("php; php5; php6; php5.3; php5.4; tutorial php; codigos php; apostila php; " .
                "php básico; php fácil; php início; php iniciante; php iniciando; php iniciante; " .
                "começando com php; começando no php; php descomplicado; aprendendo php; " .
                "matéria sobre php; aula sobre php; "
        );
        $core->head->setAuthor();
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
        $core->navtop->secao_ativa = Core::SECAO_PHP;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>PHP<small></small></h1>
                <p class="lead">Curso de PHP</p>
                <p>O curso de PHP foi o primeiro a aparecer, ele "abriu" o site devfuria.</p>
                <p>Este curso não pretende ser uma referência a linguagem PHP, pois o manual do PHP já cumpre com esse papel.</p>
                <p>Eu idealizei (como todos os demais cursos) para ser uma experiência prática e de vez em quando divertida.</p>
                <p>Seja bem vindo ao curso!</p>
            </div>
        </main>

        <div class="" style="background-color: #FFF; padding:   0px 0px;" id="html-css">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>PHP</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_PHP);
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>