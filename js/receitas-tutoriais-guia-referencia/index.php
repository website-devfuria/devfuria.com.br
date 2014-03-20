<?php
/**
 * index JS
 */
/**
 * Includes
 */
require "../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Javascript');
        $core->head->setDescription('Curso, matérias, exercícios, artigos sobre Javascript (especialmente para iniciantes). Aprenda Javascript de uma forma produtiva.');
        $core->head->setkeywords("javascript; js; javascript básico; javascript fácil; javascript início; javascript iniciante; " .
                "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; " .
                "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; "
        );
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>

        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/js/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <div class="" style="padding: 30px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="<?php echo LINKS_PATH . "/js/" ?>">Curso</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo LINKS_PATH . "/js/receitas-tutoriais-guia-referencia" ?>">Receitas, Tutoriais e Guia de Referência</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <main class="bs-masthead" id="content" role="main">
        <div class="container">
            <h1>Javascript</h1>
            <p>Essa <strong>sub seção</strong> foi a primeira a aparecer aqui no site</p>
            <p>Eu estava escrevendo uma matéria e precisava explicar o usuo da função <code>Math.random()</code>.</p>
            <p>Não caberia fazer uma matéria inteira só para a função, então nasceu as <strong>Receitas, Tutoriais e Guias</strong>.</p>
            <p>Os artigos serão curtinhos, não possuem menu lateral, a idéia é ser bem objetivo.</p>
            <p>Diferentemente dos cursos, não possuem uma sequência lógica com começo, meio e fim.</p>
            <p>Se eles forem um pouco extenso é por causa da receita.</p>
        </div>
    </main>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $core->lista->label = ListaSecao::LABEL_GUIA_JS;
                $core->lista->setLinks($core->paginas, Core::SECAO_JS, Core::CATEGORIA_GUIA);
                include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                ?>
            </div>
        </div>
    </div>

    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>