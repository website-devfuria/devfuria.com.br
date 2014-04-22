<?php
/**
 * JS - index
 */
require "../core/boot.php";
$aba = $_SERVER['QUERY_STRING'];
if ($aba == "curso" || $aba == "") {
    $view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . Conteudo::SUB_SECAO_CURSO;
} elseif ($aba == Conteudo::SUB_SECAO_RTG) {
    $view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . Conteudo::SUB_SECAO_RTG;
} elseif ($aba == "canvas") {
    $view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . "canvas";
}
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $view->head->setTitle('Javascript');
        $view->head->setDescription('Curso, matérias, exercícios, artigos sobre Javascript (especialmente para iniciantes). Aprenda Javascript de uma forma produtiva.');
        $view->head->setkeywords("curso de javascript; javascript básico; javascript iniciante;");
//        $view->head->setkeywords("javascript; js; javascript básico; javascript fácil; javascript início; javascript iniciante; " .
//                "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; " .
//                "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; "
//        );
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
        $view->navtop->secao_ativa = Conteudo::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <?php if ($aba == "curso" || $aba == ""): ?>
            <div class="" style="padding: 30px 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_CURSO ?>">Curso</a>
                                </li>
                                <li>
                                    <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_RTG ?>">Receitas, Tutoriais e Guia de Referência</a>
                                </li>
                                <li>
                                    <a href="<?php echo LINKS_PATH . "/js/?canvas" ?>">Canvas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <main class="bs-masthead" id="content" role="main">
                <div class="container">
                    <h1>Javascript<small> - Curso</small></h1>
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
            $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_JS);
            $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_CURSO);
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
                    </div>
                </div>
            </div>

        <?php elseif ($aba == Conteudo::SUB_SECAO_RTG): ?>
            <div class="" style="padding: 30px 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_CURSO ?>">Curso</a>
                                </li>
                                <li class="active">
                                    <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_RTG ?>">Receitas, Tutoriais e Guia de Referência</a>
                                </li>
                                <li>
                                    <a href="<?php echo LINKS_PATH . "/js/?canvas" ?>">Canvas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <main class="bs-masthead" id="content" role="main">
                <div class="container">
                    <h1>Javascript<small> - Receitas, Tutoriais e Guia de Referência </small></h1>
                    <p>Eu estava escrevendo uma matéria e precisava explicar o uso da função <code>Math.random()</code>.</p>
                    <p>Não caberia fazer uma matéria inteira só para a função, então nasceu as <strong>Receitas, Tutoriais e Guias</strong>.</p>
                    <p>Os artigos serão curtinhos, não possuem menu lateral, a idéia é ser bem objetivo.</p>
                    <p>Diferentemente dos cursos, não possuem uma sequência lógica com começo, meio e fim.</p>
                    <p>Se eles forem um pouco extenso é por causa da receita.</p>
                </div>
            </main>
            <?php
            $view->lista->label = $view->lista->retLabelRtgSegundoSecao(Conteudo::SECAO_JS);
            $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_RTG);
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="" style="padding: 30px 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_CURSO ?>">Curso</a>
                                </li>
                                <li>
                                    <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_RTG ?>">Receitas, Tutoriais e Guia de Referência</a>
                                </li>
                                <li class="active">
                                    <a href="<?php echo LINKS_PATH . "/js/?canvas" ?>">Canvas</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <main class="bs-masthead" id="content" role="main">
                <div class="container">
                    <h1>Javascript<small> - Canvas</small></h1>
                    <p>Porque colocamos o CANVAS na seção Javascript?</p>
                    <p>
                        O <strong>canvas</strong> é um tópico de <strong>HTML5</strong>, e o que ele está fazendo
                        aqui na seção <strong>Javascript</strong> do site?
                    </p>
                    <p>Não tive escolha, na verdade eu tive e preferi (por razões óbvias) anexar o assunto a seção Javascript.</p>
                </div>
            </main>
            <?php
            $view->lista->label = $view->lista->retLabelSubsecaoCanvas();
            $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_CANVAS);
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>