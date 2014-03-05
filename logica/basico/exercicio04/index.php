<?php
/**
 * Lógica
 */
/**
 * Includes
 */
require "../../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Exercício de lógica de programação');
        $core->head->setDescription('Esta é uma página de redirecionamento');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        <meta name="robots" content="noindex">
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_HTML;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


<div class="jumbotron">
  <h1>Página não encontrada!</h1>
  <p>Esta matéria foi compactada em: <span class="label label-info">2) Exercícios de lógica de programação (operadores de atribuição)</span></p>
  <p>Utilize o menu abaixo para se localizar:</p>
</div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Lógica de programação</h3>
                            <?php
                            $core->lista->setLinks($core->links, Core::SECAO_LOG);
                            include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                            ?>
                        </div>
                    </div>
                </div>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
