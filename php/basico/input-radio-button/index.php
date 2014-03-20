<?php
/**
 * PHP
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/input-radio-button/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('PHP - radio button');
        $core->head->setDescription('Tutorial de como trabalhar com radio buttons em formulários web.');
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
                <h1>Manipulando radio button com PHP</h1>
                <p>Veremos como enviar e receber dados através do controle</p>
                <p>radio button (input type="radio")</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">14/03/2014</span>, escrito em <span class="label label-info">14/03/2014</span>.
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
                            <h1 id="form-exemplo">Formulário de exemplo</h1>
                        </div>

                        <p>Radio buttons são controles de opção.</p>
                        
                        <p>
                            Se precisar entender melhor sobre o controle veja a matéria
                            <?php Aux::printAncora("/html-css/basico/formularios-web/#input-radio", "titulo"); ?>.
                        </p>

                        <p>Abaixo vemos o formulário web no qual trabalharemos</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Formulário com radio buttons" src="form-radios-button.png">
                        </div>

                        <div class="code">
                            <h6>form.html</h6>
                            <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Form de exemplo com radios&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action="form-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;input type="radio" <em>name="band-rock"</em> value="beatles"/&gt;The Beatles
                &lt;input type="radio" <em>name="band-rock"</em> value="led-zeppelin"/&gt; Led Zeppelin
                &lt;input type="radio" <em>name="band-rock"</em> value="pink-floyd"/&gt;Pink Floy
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="button" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        &lt;script type="text/javascript" src="radios.js"&gt;&lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>

                        <p>Repare que a propriedade <code>name</code> é idêntica para os três inputs.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="recebendo-form">Recebendo o formulário web</h1>
                        </div>

                        <p>
                            O controle <strong>radio button</strong> quando clicado, quero dizer, se pelo menos uma
                            opção foi escolhida, envia uma <strong>string</strong> com o valor da propriedade
                            <code>value</code>
                        </p>

                        <p>O <strong>radio</strong>, igualmente como o controle <strong>checkbox</strong>, não envia
                            nada quando o controle não é clicado.</p>

                        </p>Ele poderia enviar o <strong>par/valor</strong> sem
                        o valor, exemplo: <code>$_POST['bandRock'] = ""</code>. Quem leu a matéria anterior já conhece
                        essa triste história.</p>

                        <p>Tudo bem, sem choro então. </p>

                        <pre><code>if (isset($_POST['band-rock'])) {
    var_dump("escolheu " . $_POST['band-rock']);
} else {
    var_dump("não escolheu nenhuma banda de rock");
}</code></pre>

                        <p>Seguindo o mesmo estilo da matéria anterior, podemos encurtar o código. Exemplo:</p>

                        <pre><code>$_POST['band-rock'] = ( isset($_POST['band-rock']) ) ? true : null;</code></pre>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="carregando-form">Carregando o formulário web</h1>
                        </div>

                        <p>Em algum momento iremos precisar carregar o formulário com os dados do sistema.</p>

                        <p>A propriedade <code>checked</code> assinala a opção escolhida.</p>

                        <p>
                            A minha estratégia é perguntar para a variável <code>$bandRock</code> se o valor que ela
                            contém é igual a <code>"The Beatles"</code>, <code>"Led Zeppelin"</code> ou <code>"Pink Floy"</code>
                            e assinalar o input que satisfazer a condição.
                        </p>

                        <div class="code">
                            <h6>PHP e HTML</h6>
                            <pre><code class="language-php">&lt;?php
/**
 * Aqui teríamos algum código para
 * recuperar de uma fonte de dados
 * as informações do formulário.
 *
 * Utilizaremos o código abaixo, apenas como fins ilustrativo,
 * imaginando que ele vem de alguma fonte.
 */
$bandRock = "pink-floyd";
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Form de exemplo com radios&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action="form-action.php" method="post"&gt;

            &lt;p&gt;

                &lt;input type="radio"
                       name="band-rock"
                       value="beatles"
                       <em>&lt;?php echo ($bandRock == "beatles") ? "checked" : null; ?&gt;</em>/&gt;The Beatles


                &lt;input type="radio"
                       name="band-rock"
                       value="led-zeppelin"
                       <em>&lt;?php echo ($bandRock == "led-zeppelin") ? "checked" : null; ?&gt;</em>/&gt;Led Zeppelin


                &lt;input type="radio"
                       name="band-rock"
                       value="pink-floyd"
                       <em>&lt;?php echo ($bandRock == "pink-floyd") ? "checked" : null; ?&gt;</em>/&gt;Pink Floy
            &lt;/p&gt;

            &lt;p&gt;
                &lt;input type="submit" id="btnSubmit" value="Submit me!" /&gt;
            &lt;/p&gt;

        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>
                        <p>
                            A linha estava comprida e dificultava a leitura do código, então eu formatei o HTML  de um
                            geito "maroto" só para o código ficar mais legível, mas não tome isso como um estilo, ok?
                        </p>
                    </div>

                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_PHP][Core::SUB_SECAO_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->paginas, Core::SECAO_PHP, Core::SUB_SECAO_CURSO);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>