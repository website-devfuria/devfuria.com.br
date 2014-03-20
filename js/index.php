<?php
/**
 * index JS
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
        $conteudo->head->setTitle('Javascript');
        $conteudo->head->setDescription('Curso, matérias, exercícios, artigos sobre Javascript (especialmente para iniciantes). Aprenda Javascript de uma forma produtiva.');
        $conteudo->head->setkeywords("javascript; js; javascript básico; javascript fácil; javascript início; javascript iniciante; " .
                "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; " .
                "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; "
        );
        $conteudo->head->setAuthor();
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
        $conteudo->navtop->secao_ativa = Conteudo::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <div class="" style="padding: 30px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="<?php echo LINKS_PATH . "/js/" ?>">Curso</a>
                            </li>
                            <li>
                                <a href="<?php echo LINKS_PATH . "/js/receitas-tutoriais-guia-referencia" ?>">Receitas, Tutoriais e Guia de Referência</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <main class="bs-masthead" id="content" role="main">
        <div class="container">
            <h1>Javascript<small></small></h1>
            <p>Preciso confessar algo: <strong>tenho o maior carinho por este curso</strong>.</p>
            <p>Adoro Javascript (JS) e estou escrevendo as matérias com muita alegria.</p>
            <p>JS foi (talvez ainda seja) uma linguagem sempre tida como secundária.</p>
            <p>Eu, quando comecei a programar em meados de 2007, fui apresentado ao JS como sendo um mal necessário.</p>
            <p>Como bom aprendiz, acreditei nessa palavras tolas e por muito tempo evitei o JS.</p>
            <p>Em dado momento, quase como um passe de mágica eu comecei a me encantar com a linguagem.</p>
            <p>E, se pudesse voltar ao passado, jamais teria cometido a loucura de ignorá-la.</p>
            <p>Seja bem vindo curso e espero que você também se apaixone pelo JS.</p>
        </div>
    </main>

    <?php
    $conteudo->lista->label = ListaSecao::LABEL_CURSO_JS;
    $conteudo->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::CATEGORIA_CURSO);
    include BASE_PATH . VIEWS_PATH . "/cursos/lista-secao.php";
    ?>

    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>