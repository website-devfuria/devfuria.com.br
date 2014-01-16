<?php
/**
 * Lógica
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
        $core->head->setTitle('Matéria introdutória sobre OOP e Lógica de Programação');
        $core->head->setDescription('Matéria que introduz o conceito e prática de OOP para que possamos utilizar a lógica aliada a orientação a objetos. ');
        $core->head->setkeywords('oop, orientação a obejtos, lógica orientada a objetos');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Vamos de OOP?</h1>
                <p>Introdução a programação orientada a objetos</p>
                <p>Não é uma introdução completa, nosso objetivo é </p>
                <p>lógica de programação aliada a orientação a objetos.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">16/01/2014</span>, escrito em <span class="label label-info">16/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#">first</a></li>
                        </ul>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Titulo</h1>
                        </div> 

                        <!--                        <div class="bs-example">
                                                    <img class="img-rounded" alt="### Ciclo do TDD" src="tdd-conceito.jpg">
                                                    <p>Eis o mantra (ciclo) do TDD</p>
                                                </div>   -->
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas</h1>
                        </div>

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Livros</h3>
                            </div>
                            <div class="panel-body">

                                <div class="media">
                                    <a class="pull-left">
                                        <img class="media-object" src="tdd-livro.jpg" alt="### Imagem do livro 'TDD'">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">TDD Desenvolvimento Guiado por Testes</h4>
                                        <p class="list-group-item-text">Kent Bech, Editora bookman</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://phpunit.de/manual/current/pt_br/index.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHPUnit (em português)</h4>
                                        <!--<p class="list-group-item-text">Está aqui não é sugerida, é obrigatória.</p>-->
                                        <span class="label label-default">http://phpunit.de/manual/current/pt_br/index.html</span>
                                    </a>
                                </div>
                                <div class="list-group">
                                    <a href="http://qunitjs.com/" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Site do QUnit</h4>
                                        <!--<p class="list-group-item-text">Está aqui não é sugerida, é obrigatória.</p>-->
                                        <span class="label label-default">http://qunitjs.com/</span>
                                    </a>
                                </div>
                            </div>                        
                        </div>
                    </div>                        
                    <?php
                    $core->paginacao->link_ativo = "/logica-de-programacao/basico/tdd/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_LOG]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>                         
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Lógica de Programação</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_LOG);
                        $core->lista->link_ativo = "/logica-de-programacao/basico/tdd/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
