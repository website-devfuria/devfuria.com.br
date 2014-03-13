<?php
/**
 * QUAL SEÇÂO ?
 */
/**
 * Includes
 */
require "../core/boot.php";
$url = "/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('');
        $core->head->setDescription('');
        $core->head->setkeywords('');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1></h1>
                <p></p>
                <p></p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">//2014</span>, escrito em <span class="label label-info">//2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#">Título 01</a></li>
                            <li>
                                <a href="#">Título 02</a>
                            </li>
                            <li>
                                <a href="#">Título 03</a>
                            </li>
                            <li>
                                <a href="#">Título 04</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Título 01</h1>
                        </div>




                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Título 02</h1>
                        </div>

                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Título 03</h1>
                        </div>

                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Título 04</h1>
                        </div>


                        <?php $mat = Aux::getPagina("/js/basico/code-lampadas/"); ?>
                        <a href="<?php echo $mat->url . "#by-id"; ?>" title="<?php echo $mat->titulo; ?>"><?php echo $mat->titulo; ?></a>

                        <?php Aux::getAncora("/logica-de-programacao/basico/intro/"); ?>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="">
                            <p></p>
                            <p>Fonte:
                                <a href="" title="link-externo" class="img-responsive"></a>
                            </p>
                        </div>

                        <pre><code class="no-highlight">código</code></pre>

                        <div class="code">
                            <h6>pet.txt</h6>
                            <pre><code class="no-highlight">código
</code></pre>
                        </div>




                    </div>




                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h1>
                        </div>

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Livros</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item" title="">
                                        <h4 class="list-group-item-heading"></h4>
                                        <p class="list-group-item-text"></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="l" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading"></h4>
                                        <span class="label label-default"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_JS][Core::SUB_SECAO_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1></h1>
                        <?php
                        $core->lista->setLinks($core->paginas, Core::SECAO_JS, Core::SUB_SECAO_CURSO);
                        $core->lista->link_ativo = $url;
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
