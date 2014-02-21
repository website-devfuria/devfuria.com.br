<?php
/**
 * JS
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
        $core->head->setTitle("Javascript - input type text input type password textarea");
        $core->head->setDescription('Aprendendo como os campos textbox, password e textarea funcionam com o Javascript.');
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
                <h1>Descobrindo os controles text, password e textarea</h1>
                <p>Veremos como enviar e receber dados através dos controles</p>
                <p>input text, password e textarea</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">21/02/2014</span>, escrito em <span class="label label-info">21/02/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#form-exemplo">Formulário de exemplo</a></li>
                            <li>
                                <a href="#prop-name">Propriedade <code>name=""</code></a>
                            </li>
                            <li>
                                <a href="#recebendo-form">Recebendo o formulário web</a>
                            </li>
                            <li>
                                <a href="#carregando-form">Carregando o formulário web</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="form-exemplo">Formulário de exemplo</h2>
                        </div>

                        <p>Nesta matéria veremos como o Javascript pode trabalhar com os controles:</p>

                        <ul>
                            <li><code>input=text</code></li>
                            <li><code>input=password</code></li>
                            <li><code>textarea</code></li>
                        </ul>

                        <p>
                            Nós já estudamos sobre esses controles na matéria
                            <?php echo Aux::getAncora("/html-css/basico/formularios-web/", $core->links[Core::SECAO_HTML]) ?>
                        </p>

                        <p>Escolhi esses controles pois são bastantes semelhantes quanto ao seu funcionamento</p>

                        <p>
                            Vamos utilizar o mesmo formulário que "pegamos emprestado" do livro do Andy Budd
                            (Criando Páginas Web com CSS) e que já foi utilizado como exemplo na matéria
                            <?php echo Aux::getAncora("/php/basico/textbox-password-textarea/", $core->links[Core::SECAO_PHP]) ?>

                        </p>

                        <p>Clique na aba HTML para entender melhor sobre formulário web.</p>


                        <div data-height="542" data-theme-id="2897" data-slug-hash="hAKpl" data-default-tab="null" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/hAKpl'>simple-html</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>


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
                    $core->paginacao->link_ativo = "/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_JS]);
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
                        $core->lista->setLinks($core->links, Core::SECAO_JS);
                        $core->lista->link_ativo = "/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
