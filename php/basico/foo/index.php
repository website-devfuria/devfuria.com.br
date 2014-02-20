<?php
/**
 *
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
        $core->head->setTitle('PHP-textbox-password-textarea');
        $core->head->setDescription('Aprendendo como os campos textbox, password e textarea funcionam com o PHP.');
        $core->head->setkeywords('');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_PHP;
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
                Flávio Micheletti, atualizado em <span class="label label-success">20/02/2014</span>, escrito em <span class="label label-info">20/02/2014</span>.
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

                        <p>O formulário abaixo eu peguei do livro do Andy Budd (Criando Páginas Web com CSS)</p>

                        <p>Clique na aba HTML para entender melhor sobre formulário web.</p>


                        <div data-height="542" data-theme-id="2897" data-slug-hash="hAKpl" data-default-tab="null" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/hAKpl'>simple-html</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>


                        <p>Anotou os nomes dos campos?</p>

                        <p>Então me diga, se clicarmos no botão "Submit", o que será enviado para o servidor?</p>

                        <p>Temos 4 campos.</p>

                        <ul>
                            <li>2 campos de texto (textbox ou <code>input=text</code>)</li>
                            <li>1 campo de password (<code>input=password</code>)</li>
                            <li>1 campo de texto multinha (<code>&lt;textarea&gt;</code>)</li>
                        </ul>

                        <p>
                            Nós já estudamos sobre esses controles na matéria
                            <?php echo Aux::getAncora("/html-css/basico/formularios-web/", Core::SECAO_HTML) ?>
                        </p>

                        <p>Esses 3 controles são semelhantes quanto ao que acontece por trás dos panos (lá no lado
                        do servidor). E eles são os mais simples para se trabalhar, isso é válido tanto para PHP
                        como para Javascript.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Propriedade <code>name=""</code></h1>
                        </div>

                        <p>O PHP depende desta propriedade HTML.</p>

                        <pre><code class="language-html">&lt;input type="" <em>name="nome-do-campo"</em> value="" /&gt;</code></pre>

                        <p>Se ela não estiver preenchida o PHP simplesmente não saberá nada sobre ela.<p>

                        <p>O nome que atribuímos para esta propriedade será  o valor da chave do array global
                            <code>$_POST</code> (se for enviado via método post) ou <code>$_GET</code> (se for enviado
                            via método get).</p>

                        <pre><code class="language-php">$_POST['nome-do-campo']</code></pre>

                        <p>ou...</p>

                        <pre><code class="language-php">$_GET['nome-do-campo']</code></pre>

                        <p>
                            Já vimos isso na matéria
                            <?php echo Aux::getAncora("/php/basico/enviando-dados-via-get-post/", Core::SECAO_PHP) ?>
                        </p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Recebendo o formulário web</h1>
                        </div>

                        <p>Ainda não respondemos a pergunta: O que é enviado para o servidor?</p>

                        <p>Irá a seguinte lista de campos:</p>

                        <ul>
                            <li><code>author</code></li>
                            <li><code>email</code></li>
                            <li><code>past</code></li>
                            <li><code>text</code></li>
                        </ul>

                        <p>Se enviarmos via post, a variável global será como o exemplo abaixo.</p>

                        <pre><code class="language-php">$_POST = array(
    "author" => ""
    "email" => ""
    "pass" => ""
    "text" => ""
)</code></pre>

                        <p>E poderá ser acessado da seguinte forma.</p>

                        <pre><code class="language-php">$_POST["author"];
$_POST["email"];
$_POST["pass"];
$_POST["text"];
</code></pre>
                        <p>E procuramos receber tudo no início do script, veja:</p>

                        <pre><code class="language-php">$_POST['author'] = ( isset($_POST['author']) ) ? $_POST['author'] : null;
$_POST['email']  = ( isset($_POST['email']) )  ? $_POST['email']  : null;
$_POST['pass']   = ( isset($_POST['pass']) )   ? $_POST['pass']   : null;
$_POST['text']   = ( isset($_POST['text']) )   ? $_POST['text']   : null;
</code></pre>

                        <p>
                            Também já vimos isso na matéria
                            <?php echo Aux::getAncora("/php/basico/recebendo-dados-via-get-post/", Core::SECAO_PHP) ?>
                        </p>

                        <h3>E agora o que fazer com os dados?</h3>

                        <p>Aí entra a lógica de sua aplicação, em outras palavras, entra as regras de negócios de
                            seu sistema.</p>

                        <p>Fora as regras de negócios, ainda podemos discutir sobre algumas estratégias. Por exemplo,
                            qual será o fluxo dos dados, se ele vai do script <code>form.php</code> para o script
                            <code>form-action.php</code> ou se ele vai fazer uma requisição para ele próprio e etc...</p>

                        <p>Há uma centena de possibilidades, mas abordaremos isso em outra matéria, ok?</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="">Carregando o formulário web</h1>
                        </div>

                        <p>Em muito casos queremos abrir o formulário já com alguns dados, quer dizer, estamos  carregando
                        o formulário.</p>

                        <p>Agora usaremos a propriedade <code>value=""</code>.</p>

                        <pre><code class="language-html">&lt;input type="" name="nome-do-campo" <em>value=""</em> /&gt;</code></pre>

                        <p>Os dados que colocarmos neste propriedade será exibido no controle do formulário. Faça o teste.</p>

                        <p>Será o PHP quem vai escrever os dados de forma dinâmica, automatizada, veja:</p>

                        <pre><code class="language-html">&lt;input type="" name="nome-do-campo" value="<em>&lt;?php echo $valor; ?&gt;</em>" /&gt;</code></pre>


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
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_PHP]);
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
                        $core->lista->setLinks($core->links, Core::SECAO_PHP);
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
