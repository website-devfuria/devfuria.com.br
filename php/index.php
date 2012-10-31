<?php
require "../furia/bs.php";
defined('BASE_PATH') or die;

$materia = stdClass();
$materia->titulo = "Um bom começo";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Um bom começo | devfuria.com.br</title>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php include BASE_PATH.COMPONENTES_PATH."nav_top.php"; ?>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo ROOT_PATH; ?>">Home</a> <span class="divider">/</span></li>
                            <li><a href="<?php echo BASE_PATH; ?>php/">PHP</a> <span class="divider">/</span></li>
                            <li class="active"><?php echo BASE_PATH; ?></li>
                        </ul>
                        <p>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                        </p>
                    </header>
                </div>
            </div>


            <div class="row">
                <div class="span6">
                    <div class="furia-secoes-intro">
                        <h1>Curso (in) completo de PHP</h1>
                        <p>O <em>Curso PHP (in)completo</em> foi desenvolvido primando-se a qualidade, simplicidade e objetividade</p>
                        <p>Caso o leitor sinta a falta de qualquer um deses elementos, pedimos a gentileza de nos enviar um feedback</p>

                        <p>O curso está dividido em níveis: 0(zero), básico, intermediário e avançado</p>
                        <p>Dentro de cada nível encontram-se as mátérias(artigos).</p>

                        <p>O nível o(zero) destina-se as pessoas que nunca tiveram um contato com o assunto (linguagem de programação).
                            Imaginamos que o público alvo enquadras-se em um desses perfis: entusiastas de informática, estudantes
                            de informática no início do curso e estagiários em geral</p>

                        <p>Os demais níveis dispensam apresentação.</p>

                        <p>Seja bem vindo ao curso!</p>
                        <p>Esperamos que seja proveitoso.</p>
                    </div>
                </div>
                <div class="span6">
                    <?php include BASE_PATH.COMPONENTES_PATH."form_feedback.php"; ?>
                </div>
            </div>

            <div class="row">
                <div class="span10 offset1">
                    <?php include BASE_PATH.COMPONENTES_PATH."tree_completa.php"; ?>
                </div><!-- span  -->
            </div><!-- row -->
        </div><!-- container -->
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>