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
        $core->head->setDescription('Aprendendo Lógica de programação de forma organizada, os exercícios foram preparados para facilitar o aprendizado.');
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
                <p class="lead">Curso de Lógica de programação</p>
                <p>Falar sobre o curso!</p>
            </div>
        </main>

        <div class="" style="background-color: #FFF; padding:   0px 0px;" id="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Lógica de programação</h1>
                        <?php
                        $core->lista->setLinks($core->paginas, Core::SECAO_LOG, Core::SUB_SECAO_CURSO);
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>