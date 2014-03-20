<?php
/**
 * PHP
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/php/basico/textbox-password-textarea/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle("PHP - input type text input type password textarea");
        $core->head->setDescription('Manipulando checkbox com PHP. Aprenda a marcar, gravar e exbibir os valores de uma checkbox.');
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
                <h1>Descobrindo os controles text, password e textarea</h1>
                <p>Veremos como enviar e receber dados através dos controles</p>
                <p>input text, password e textarea</p>
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
                            <h1 id="form-exemplo">Formulário de exemplo</h1>
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
                            <li>1 campo de texto multilinha (<code>&lt;textarea&gt;</code>)</li>
                        </ul>

                        <p>
                            Nós já estudamos sobre esses controles na matéria
                            <?php Aux::printAncora("/html-css/basico/formularios-web/", $core->paginas[Core::SECAO_HTML]) ?>
                        </p>

                        <p>Esses 3 controles são semelhantes quanto ao que acontece por trás dos panos (lá no lado
                        do servidor). E eles são os mais simples para se trabalhar, isso é válido tanto para PHP
                        como para Javascript.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="prop-name">Propriedade <code>name=""</code></h1>
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
                            <?php Aux::printAncora("/php/basico/enviando-dados-via-get-post/", $core->paginas[Core::SECAO_PHP]) ?>
                        </p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="recebendo-form">Recebendo o formulário web</h1>
                        </div>

                        <p>Ainda não respondemos a pergunta: O que é enviado para o servidor?</p>

                        <p>Irá a seguinte lista de campos:</p>

                        <ul>
                            <li><code>author</code></li>
                            <li><code>email</code></li>
                            <li><code>pass</code></li>
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
                            <?php Aux::printAncora("/php/basico/recebendo-dados-via-get-post/", $core->paginas[Core::SECAO_PHP]) ?>
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
                            <h1 id="carregando-form">Carregando o formulário web</h1>
                        </div>

                        <p>Em muito casos queremos abrir o formulário já com alguns dados, quer dizer, estamos  carregando
                            o formulário.</p>

                        <p>Agora usaremos a propriedade <code>value=""</code>.</p>

                        <pre><code class="language-html">&lt;input type="" name="nome-do-campo" <em>value=""</em> /&gt;</code></pre>

                        <p>Os dados que colocarmos neste propriedade será exibido no controle do formulário. Faça o teste.</p>

                        <p>Escrevemos os dados no campos <code>value</code> como o código seguinte:</p>

                        <pre><code class="language-html">&lt;input type="" name="nome-do-campo" value="<em>&lt;?php echo $valor; ?&gt;</em>" /&gt;</code></pre>

                        <p>O controle <strong>textarea</strong> utilizaremos de forma diferente, escreveremos os dados entre
                            as tags <code>textarea</code>, veja:</p>

                        <pre><code class="language-html">&lt;textarea&gt;<em>&lt;?php echo $valor; ?&gt;</em>&lt;/textarea&gt;</code></pre>

                        <p>Então nosso formulário ficará da seguinte forma.</p>

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
$author = "Tom Jobim";
$email = "tom@jobim.com";
$pass = "1234";
$text = "algum texto";

?&gt;
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Simple Form&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form id="comments_form" action="#" method="post"&gt;
            &lt;fieldset&gt;
                &lt;legend&gt;Your Contact Details&lt;/legend&gt;
                &lt;p&gt;
                    &lt;label for="author"&gt;Name: &lt;em class="required"&gt;(Required)/em&gt;&lt;/label&gt;
                    &lt;input name="author" id="author" type="text" value="<em>&lt;?php echo $author; ?&gt;</em>" /&gt;
                &lt;/p&gt;

                &lt;p&gt;
                    &lt;label for="email"&gt;Email Address:&lt;/label&gt;
                    &lt;input name="email" id="email" type="text" value="<em>&lt;?php echo $email; ?&gt;</em>" /&gt;
                &lt;/p&gt;

                &lt;p&gt;
                    &lt;label for="pass"&gt;Password:&lt;/label&gt;
                    &lt;input name="pass" id="pass" type="password" value="<em>&lt;?php echo $pass; ?&gt;</em>" /&gt;
                &lt;/p&gt;
            &lt;/fieldset&gt;

            &lt;fieldset&gt;
                &lt;legend&gt;Comments&lt;/legend&gt;
                &lt;p&gt;
                    &lt;label for="text"&gt;Message: &lt;em class="required"&gt;(Required)&lt;/em&gt;&lt;/label&gt;
                    &lt;textarea name="text" id="text" cols="20" rows="10"&gt;<em>&lt;?php echo $text; ?&gt;</em>&lt;/textarea&gt;
                &lt;/p&gt;
            &lt;/fieldset&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                            </div>

                            <h3>Importante</h3>

                            <p>Acho que este é o primeiro exemplo no site onde misturamos código PHP com HTML. Com certeza
                                não será a última. Na verdade repetiremos muito isso ainda.</p>

                            <p>Essa facilidade de misturar HTML e PHP é uma das caracteristicas mais criticadas da
                                linguagem PHP. Chamamos de <strong>código spaghetti</strong> o código que faz essa mistura em excesso e de
                                forma desordenada.</p>

                            <p>Por isso, me sinto obrigado a lhe fazer um convite: <strong>tente ser bastante organizado em relação
                                    a isso. Procure deixar bem claro no seu script o que é PHP e o que é HTML</strong>.</p>

                            <p>Em nosso exemplo, repare que eu coloquei o <strong>PHP mais pesado</strong> na parte de cima,
                                no começo. Após esse trecho iniciamos o HTML e utilizamos apenas o <strong>PHP mais leve.</strong></p>
                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

... code
... code
... code
... code
... code

?&gt;
&lt;!DOCTYPE html&gt;
&lt;lang="pt-br"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8" /&gt;
        &lt;title&gt;Simple Form&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;?php // echo "PHP mais leve";?&gt;

        &lt;?php // echo "PHP mais leve";?&gt;

        &lt;?php // echo "PHP mais leve";?&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>
                        <p>
                            Às vezes, para atender ao "padrão" acima, teremos que sacrificar um pouco a lógica, poderemos
                            usar um pouco mais de memória e até codificar um algoritmo não performático.
                        </p>

                        <p>
                            Para isso, temos uma regra simples, a organização vem sempre em primeiro lugar. Ela só será
                            afetada em prol de outras vantages (peformance, economia de memória, etc..) apenas se realmente
                            o programador tiver certeza que vale apena.
                        </p>

                    </div>

                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_PHP][Core::CATEGORIA_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->paginas, Core::SECAO_PHP, Core::CATEGORIA_CURSO);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
