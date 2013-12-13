<?php
/**
 * INdex do core
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
        $core->head->setTitle(LINKS_PATH . "/core/");
        $core->head->setDescription('Esta é uma página de redirecionamento');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?> 

        <div class="jumbotron">
            <h1>Área "core"</h1>
            <p>Este é a pasta core do site.</p>
            <p>Se quiser conhecer mais sobre a estrutura do site visite: <a href="https://github.com/flaviomicheletti/www.devfuria.com.br" title="link-externo">Projeto no GitHub</a></p>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
