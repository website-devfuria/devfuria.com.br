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