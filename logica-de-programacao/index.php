<?php
/**
 * index Lógica
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
        $core->head->setTitle('Lógica de programação');
        $core->head->setDescription('Aprendendo Lógica de programação');
        $core->head->setkeywords("lógica básico; lógica de programação; lógica para iniciantes; " .
            "raciocio lógico; algoritmo; lógica descomplicado; aprendendo lógica; matéria sobre lógica; aula sobre lógica; "
        );
        $core->head->setAuthor();
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
        $core->navtop->secao_ativa = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>Lógica de programação<small></small></h1>
                <p class="lead">Curso de Lógica de programação (com TDD e OOP)</p>
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

        <div class="" style="background-color: #FFF; padding:   0px 0px;" id="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Lógica de programação</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_LOG);
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>