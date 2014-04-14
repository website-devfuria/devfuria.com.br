<?php
/**
 * HOME, index do site
 */
require "core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('Desenvolvimento Web');
        $view->head->setDescription('Cursos, aulas, tutoriais, apostilas, matérias sobre programação web prá ninguém botar defeito!');
//        $view->head->setkeywords("aplicações web; webapp; app's; desenvolvimento; desenvolvimento web; website; cursos web; webstandards;  programação; aprendendo programação; aulas de programação; tutoriais; artigos;");
        $view->head->setkeywords("aplicações web; desenvolvimento web; cursos web; tutoriais; artigos;");
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/nav-top.php"; ?>

        <!-- Page content of course! -->
    <main class="bs-masthead" id="content" role="main">
        <div class="container">
            <h1>DevFuria</h1>
            <p class="lead" style="margin-bottom: 0px">Desenvolvimento web pra ninguém botar defeito!</p>
            <p class="lead" ><small>Cursos, aulas, tutoriais, matérias... tudo muito bem preparado.</small></p>
            <!--<p class="lead">Curso sobre programação web prá ninguém botar defeito!</p>-->
            <ul>
                <li>Isto não é um blog!</li>
                <li>É gratuito e sempre será!</li>
                <li>Feito especialmente para o público iniciante.</li>
                <li>Seja bem vindo e espero que você divirta-se aprendendo.</li>
            </ul>
        </div>
    </main>

    <footer class="container" role="contentinfo">
        <ul class="bs-masthead-links">
            <li>
                <a href="https://github.com/flaviomicheletti/www.devfuria.com.br" title="link-externo">Projeto no GitHub</a>
            </li>
            <li>
                <a href="flavio-alexandre-micheletti.php">Quem vôs fala</a>
            </li>
        </ul>
    </footer>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="js">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_JS);
                    $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_CURSO);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>

        </div>
    </div>


    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="php">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_PHP);
                    $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_PHP, Conteudo::SUB_SECAO_CURSO);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="html-css">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_HTML);
                    $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_HTML, Conteudo::SUB_SECAO_CURSO);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="logica">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_LOG);
                    $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_LOG, Conteudo::SUB_SECAO_CURSO);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="mysql">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_MYSQL);
                    $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_MYSQL, Conteudo::SUB_SECAO_CURSO);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #FFF; padding: 80px 0px;" id="regexp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_ER);
                    $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_ER, Conteudo::SUB_SECAO_CURSO);
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>