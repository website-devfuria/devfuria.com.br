<?php
/**
 * index JS
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
        $core->head->setTitle('Javascript');
        $core->head->setDescription('Curso de Javascript (especialmente para iniciantes), aprenda Javascript da forma certa.');
        $core->head->setkeywords("javascript; js; javascript básico; javascript fácil; javascript início; javascript iniciante; " .
            "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; " .
            "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; "
        );
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        
        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/js/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>Javascript<small></small></h1>
                <p class="lead">Curso de Javascript</p>
                <p>Preciso confessar algo: <strong>tenho o maior carinho por este curso</strong>.</p>
                <p>Adoro Javascript (JS) e estou escrevendo as matérias com muita alegria.</p>
                <p>JS foi (talvez ainda seja) uma linguagem sempre tida como secundária.</p>
                <p>Eu, quando comecei a programar em meados de 2007, fui apresentado ao JS como sendo um mal necessário.</p>
                <p>Como bom aprendiz, acreditei nessa palavras tolas e por muito tempo evitei o JS.</p> 
                <p>Em dado momento, quase como um passe de magica eu comecei a me encantar com a linguagem.</p>
                <p>E, se pudesse voltar ao passado, jamais teria cometido a loucura de ignorá-la.</p>
                <p>Seja bem vindo curso e espero que você também se apaixone pelo JS.</p>
            </div>
        </main>

        <div class="" style="background-color: #FFF; padding:   0px 0px;" id="html-css">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Javascript</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_JS);
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>