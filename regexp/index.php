<?php
/**
 * index RegExp
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
        $core->head->setTitle('RegExp');
        $core->head->setDescription('Aprendendo Expressões Regulares');
        $core->head->setkeywords("regexp; regexp básico; regexp fácil; regexp início; regexp iniciante; " .
            "regexp iniciando; regexp iniciante; começando com regexp; começando no regexp; " .
            "regexp descomplicado; aprendendo regexp; matéria sobre regexp; aula sobre regexp; " .
            "expressões regulares"
        );
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        
        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/regexp//" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $core->navtop->secao_ativa = Core::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>RegExp<small></small></h1>
                <p class="lead">Mini curso de Expressões regulares</p>
                <p>Este é pequeno curso sobre Expressões regulares (ER)</p>
                <p>Como o site destina-se a programação web eu foco o uso das ER nas linguagens PHP e Javascript.</p>
                <p>Confesso que não sou nenhum mestre em ER, é bom que você saiba disso antes de iniciar o curso!</p>
                <p>Por outro lado, meu objetivo é facilitar o aprendizado das ER, pois o assunto ja é espinhoso... logo o aprendizado deve ser facilitado.</p>
                <p>Dito isso, convido o leitor(a) a me enviar correções e mesmo sugerir melhorias neste curso.</p>
                <p>Lembrando que este site está no github e que toda ajuda será sempre acolhida!</p>
                <p>Seja bom vindo ao curso!</p>
            </div>
        </main>

        <div class="" style="background-color: #FFF; padding:   0px 0px;" id="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>HTML & CSS</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_ER);
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>