<?php
require "../../../core/boot.php";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('Exercício de lógica de programação');
        $view->head->setDescription('Esta é uma página de redirecionamento');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        <meta name="robots" content="noindex">
    </head>
    <body>

        <?php
        $view->navtop->secao_ativa = Conteudo::SECAO_LOG;
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
                            <?php
                            $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_LOG, Conteudo::CATEGORIA_CURSO);
                            include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                            ?>
                        </div>
                    </div>
                </div>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
