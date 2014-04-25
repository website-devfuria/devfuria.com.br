<div class="" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="<?php echo LINKS_PATH . "/php/?" . Conteudo::SUB_SECAO_CURSO ?>">Curso</a>
                    </li>
                    <li>
                        <a href="<?php echo LINKS_PATH . "/php/?" . Conteudo::SUB_SECAO_RTG ?>">Receitas, Tutoriais e Guia de Referência</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<main class="bs-masthead" id="content" role="main">
    <div class="container">
        <h1>PHP<small> - Curso</small></h1>
        <p>O curso de PHP foi o primeiro a aparecer, ele "abriu" o site devfuria.</p>
        <p>Este curso não pretende ser uma referência a linguagem PHP, pois o manual do PHP já cumpre com esse papel.</p>
        <p>Eu idealizei (como todos os demais cursos) para ser uma experiência prática e de vez em quando divertida.</p>
        <p>O curso é totalmente gratuito e feito especialmente para quem pretende ser um programador php de primeira linha.</p>
        <p>Seja bem vindo ao curso!</p>
    </div>
</main>
<?php
$view->lista->label = $view->lista->retLabelCursoSegundoSecao(Conteudo::SECAO_PHP);
$view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_PHP, Conteudo::SUB_SECAO_CURSO);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
        </div>
    </div>
</div>