<?php
/**
 * ER - index
 */
require "../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('RegExp');
        $view->head->setDescription('Pequeno curso de Expressões Regulares, feito especialmente para o plúbico iniciante.');
        $view->head->setkeywords("curos de expressões regulares; aprendendo expresões regulares, curso de regexp");
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
        $view->navtop->secao_ativa = Conteudo::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>RegExp<small></small></h1>
                <p class="lead">Expressões regulares</p>
                <p>Este é pequeno curso sobre Expressões regulares (ER)</p>
                <p>Como o site destina-se a programação web eu foco o uso das ER nas linguagens PHP e Javascript.</p>
                <p>Confesso que não sou nenhum mestre em ER, é bom que você saiba disso antes de iniciar o curso!</p>
                <p>Por outro lado, meu objetivo é facilitar o aprendizado das ER, pois o assunto ja é espinhoso... logo o aprendizado deve ser facilitado.</p>
                <p>Dito isso, convido o leitor(a) a me enviar correções e mesmo sugerir melhorias neste curso.</p>
                <p>Lembrando que este site está no github e que toda ajuda será sempre acolhida!</p>
                <p>Seja bem vindo ao curso!</p>
            </div>
        </main>

        <?php
            $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_ER);
        $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_ER, Conteudo::SUB_SECAO_CURSO);
        include BASE_PATH . VIEWS_PATH . "/cursos-index/lista-secao.php";
        ?>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>