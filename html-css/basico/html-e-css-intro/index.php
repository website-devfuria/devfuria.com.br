<?php
/**
 * HTML & CSS
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
        $core->head->setTitle('Introdução ao HTML e ao CSS');
        $core->head->setDescription('Esta é uma página de redirecionamento');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_HTML;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?> 


<div class="jumbotron">
  <h1>Página não encontrada!</h1>
  <p>Esta matéria foi desmenbrada em duas: <span class="label label-info">2) Primeiro contato com HTML</span> e <span class="label label-info">3) Primeiro contato com CSS</span>.</p>
  <p>Utilize o menu abaixo para localizar as matérias:</p>
</div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>HTML & CSS</h3>
                            <?php
                            $core->lista->setLinks($core->links, Core::SECAO_HTML);
                            include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                            ?>
                        </div>
                    </div>
                </div>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
