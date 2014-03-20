<?php
/**
 * INdex do conteudo
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
        $conteudo->head->setTitle(LINKS_PATH . "/core/");
        $conteudo->head->setDescription('Esta é uma página de redirecionamento');
        $conteudo->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?> 

        <div class="jumbotron">
            <h1>Área "conteudo"</h1>
            <p>Este é a pasta conteudo do site.</p>
            <p>Se quiser conhecer mais sobre a estrutura do site visite: <a href="https://github.com/flaviomicheletti/www.devfuria.com.br" title="link-externo">Projeto no GitHub</a></p>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
