<?php
/**
 * Lógica de programação- index
 */
require "../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('Lógica de Programação');
        $view->head->setDescription('Curso de Lógica de Programação alinhada a Orientação de Objetos e TDD.');
        $view->head->setkeywords("curso de lógica de programação; exercícios de lógica de programação");
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>

        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/logica/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>
    </head>
    <body>
        <?php
        $view->navtop->secao_ativa = Conteudo::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>Lógica de Programação<small></small></h1>
                <p class="lead">Curso de Lógica de Programação (com TDD e OOP)</p>
                <p>O curso de lógica era apenas uma matéria no meio do curso de PHP (coitado)</p>
                <p>Com a inclusão do curso de JS eu me senti obrigado e falar de lógica de um modo geral.</p>
                <p>Então, desmenbrei a matéria da seção PHP e nasceu o curso de lógica.</p>
                <p>Refazendo alguns exercícios de lógica eu percebi que poderiar aplicar a técnica de TDD.</p>
                <p>Mas antes de falar sobre TDD, somos obrigados a falar de OOP e</p>
                <p>antes de falar de OOP sobres obrigado a falar de funções.</p>
                <p>O curso está organizado dessa forma:</p>
                <ul>
                    <li>inicia com alguns exercícios para quebrar o gelo,</li>
                    <li>depois aprendemos sobre funções,</li>
                    <li>na sequência aprendemos o básico (do básico) sobre OOP</li>
                    <li>e finalmente TDD.</li>
                </ul>
                <p>Aí o "bicho pega"</p>
                <p>Seja bem vindo ao curso!</p>
            </div>
        </main>
        <?php
        $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_LOG);
        $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_LOG, Conteudo::SUB_SECAO_CURSO);
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
                </div>
            </div>
        </div>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>