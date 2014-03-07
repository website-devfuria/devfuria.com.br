<?php
/**
 * index HTML
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
        $core->head->setTitle('HTML-CSS');
        $core->head->setDescription('Curso, matérias, exercícios, artigos sobre HTML(5) e CSS(3)');
        $core->head->setkeywords("html; html5; css; css3; tutorial html; tags html; html tabela; codigos html; apostila html; comandos html; html basico; " .
            "html básico; html fácil; html início; html iniciante; " .
            "html iniciando; html iniciante; começando com html; começando no html; " .
            "html descomplicado; aprendendo html; matéria sobre html; aula sobre html" .
            "css básico; css fácil; css início; css iniciante; " .
            "css iniciando; css iniciante; começando com css; começando no css; " .
            "css descomplicado; aprendendo css; matéria sobre css; aula sobre css;" .
            "folhas estilo cascata; web standards; padrões web; tableless"
        );
        $core->head->setAuthor();
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
        $core->navtop->secao_ativa = Core::SECAO_HTML;
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
        $core->lista->label = ListaSecao::LABEL_CURSO_HTML;
        $core->lista->setLinks($core->links, Core::SECAO_HTML);
        include BASE_PATH . VIEWS_PATH . "/cursos/lista-secao.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>