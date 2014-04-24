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

