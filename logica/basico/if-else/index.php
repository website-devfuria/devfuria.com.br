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
        $core->head->setTitle('if else');
        $core->head->setDescription('Aprendendo as Expressões condicionais (if-else)');
        $core->head->setkeywords('expressões condicionais; valores booleanos, conditional statements, conditional expressions, conditional constructs');
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
                <h1>Expressões Condicionais</h1>
                <p>(if-else)</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success"></span>, escrito em <span class="label label-info">2</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Introdução</h1>
                        </div>         

                        
                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="fluxo-if.png">
                            <p>Comentários</p>
                        </div>                        
                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="fluxo-if-else.png">
                            <p>Comentários</p>
                        </div>                        
                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="sintaxe-if.png">
                            <p>Comentários</p>
                        </div>                        
                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="sintaxe-var.png">
                            <p>Comentários</p>
                        </div>                        
                        
                            <?php
                            $core->paginacao->link_ativo = "/logica/basico/if-else/";
                            $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_LOG]);
                            include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                            ?>                                  

                    </div>

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
                        $core->lista->link_ativo = "/logica/basico/if-else/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
