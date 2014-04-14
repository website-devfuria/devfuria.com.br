<?php
/**
 * HTML & CSS - index
 */
require "../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('HTML-CSS');
        $view->head->setDescription('Curso, matérias, exercícios, artigos sobre HTML(5) e CSS(3)');
        $view->head->setkeywords("htnl5; css3; curso de html; curso de css;");
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/html-css/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>
    </head>
    <body>
        <?php
        $view->navtop->secao_ativa = Conteudo::SECAO_HTML;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>HTML & CSS<small></small></h1>
                <p>HTML e CSS são divertidos.</p>
                <p>A questão é que <strong>sem esses elementos básicos não se produz aplicação web</strong>.</p>
                <p>Se a aplicação for uma edificação, o HTML é o cimento e o CSS a massa fina.</p>
                <p>Meu conselho é: <strong>se esforce mais com eles para se esforçar menos com as línguagens de servidor e cliente</strong></p>
                <p>Outra coisa: não caia na besteria de achar que eles são apenas para os designers, nada disso!</p>
                <p>Desenvolvedor web que não sabe HTML e CSS não é desenvolvedor web.</p>
                <p>Seja bem vindo ao curso!</p>
            </div>
        </main>
        <?php
        $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_HTML);
        $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_HTML, Conteudo::SUB_SECAO_CURSO);
        include BASE_PATH . VIEWS_PATH . "/cursos-index/lista-secao.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>