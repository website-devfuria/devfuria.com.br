<?php
/**
 * JS - index
 */
require "../core/boot.php";
$aba = $_SERVER['QUERY_STRING'];
if ($aba == "curso" || $aba == "") {
    $view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . Conteudo::SUB_SECAO_CURSO;
} else {
    $view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . Conteudo::SUB_SECAO_GUIA;
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
                                    <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_GUIA ?>">Receitas, Tutoriais e Guia de Referência</a>
                                </li>
                                <li>
                                    <a href="<?php echo LINKS_PATH . "/js/?canvas" ?>">Canvas</a>
                                </li>
                            </ul>
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
                $view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_JS);
                $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_CURSO);
                include BASE_PATH . VIEWS_PATH . "/cursos-index/lista-secao.php";
                ?>
            <?php elseif ($aba == Conteudo::SUB_SECAO_GUIA): ?>
                <div class="" style="padding: 30px 0px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_CURSO ?>">Curso</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_GUIA ?>">Receitas, Tutoriais e Guia de Referência</a>
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
                        <h1>Javascript</h1>
                        <p>Eu estava escrevendo uma matéria e precisava explicar o uso da função <code>Math.random()</code>.</p>
                        <p>Não caberia fazer uma matéria inteira só para a função, então nasceu as <strong>Receitas, Tutoriais e Guias</strong>.</p>
                        <p>Os artigos serão curtinhos, não possuem menu lateral, a idéia é ser bem objetivo.</p>
                        <p>Diferentemente dos cursos, não possuem uma sequência lógica com começo, meio e fim.</p>
                        <p>Se eles forem um pouco extenso é por causa da receita.</p>
                    </div>
                </main>
                <?php
                $view->lista->label = $view->lista->retLabelReferenciaSegundoSecao(Conteudo::SECAO_JS);
                $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_GUIA);
                include BASE_PATH . VIEWS_PATH . "/cursos-index/lista-secao.php";
                ?>
            <?php endif; ?>

            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>