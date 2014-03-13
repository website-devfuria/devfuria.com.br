<?php
/**
 * PHP
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/checkbox-checked/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('PHP - input type check checkbox');
        $core->head->setDescription('Controle de checkbox em PHP, verificar se os CheckBox foram marcados.');
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
                <h1>Manipulando check boxes com PHP</h1>
                <p>Veremos como enviar e receber dados através do controle</p>
                <p>checkbox (input type="check")</p>
                <p></p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">27/02/2014</span>, escrito em <span class="label label-info">27/02/2014</span>.
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

                        <p>Checkboxes são controles "booleanos" (modo de dizer). Eles ou estão ligados (true) ou
                            estão desligados (false).</p>

                        <p>Abaixo vemos o formulário web no qual trabalharemos</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Formulário com checkboxes" src="form-checkboxes.png">
                        </div>

                        <div class="code">
                            <h6>form.php</h6>
                            <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Form de exemplo com checkboxes&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action="form-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;input type="checkbox" name="bike" value="on"&gt;I have a bike
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="checkbox" name="car" value="on"&gt;I have a car
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>


                        <p>É parecido com o formulário da matéria
                            <?php Aux::getAncora("/js/basico/checkbox-checked/#formulario-web", "titulo"); ?>
                            na seção <a href="<?php echo LINKS_PATH . "/js/" ?>">Javascript</a>.

                        </p>

                        <p>Eles diferem principalmente pela forma como são identificados.</p>

                        <p>Lembre-se que o PHP depende da propriedade <code>name</code> e o JS depende da propriedade <code>id</code>.</p>

                        <p>E as 2 propriedades podem ser utilizadas juntas?</p>

                        <p>Sim podem. Veja:</p>

                        <pre><code>&lt;input type="checkbox" name="" id=""</code></pre>

                        <p>E elas podem ser iguais ou diferentes.</p>



                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="recebendo-form">Recebendo o formulário web</h1>
                        </div>

                        <p>Você deve estar pensando que o <strong>checkbox</strong> funciona de forma idêntica ao controle
                            <strong>textbox</strong>. Mas eles funcionam de forma diferente.</p>

                        <p>O checkbox, quando clicado (caixa ticada), enviará o par <code>nome=valor</code>para o servidor.</p>

                        <p>Agora, quando ele não é clicado (caixa não ticada), ele enviará o quê para o servidor??? Isto <code>name=""</code> ?</p>

                        <p>Negativo, ele não envia nada. Absolutamente nada. Nenhum par de valor, nenhuma referência vazia. Nada!</p>

                        <p>Estou enfatizando essa discussão pois, o mais óbvio é pensar que o controle enviará
                            <code>name=on</code> quando ticado e <code>name=off</code> quando não ticado.</p>

                        <p>Por alguma razão, quando o controle não é ticado, ele não envia nada. Triste isso né?</p>

                        <p>Mas "nada poderá nos deter". Poderemos receber da seguinte forma:</p>

                        <pre><code class="language-php">// check BIKE
if (isset($_POST['bike'])) {
    var_dump("escolheu 'bike'");
} else {
    var_dump("não escolheu 'bike'");
}

// check Car
if (isset($_POST['car'])) {
    var_dump("escolheu 'car'");
} else {
    var_dump("não escolheu 'car'");
}
</code></pre>

                        <p>Mas ficou um monte de linhas, imagina que você receberá 10 checkbox!</p>

                        <p>Faça os cálculos. 10 x 5 = 50 linhas... opâ!</p>

                        <p>Vamos fazer nosso código tomar as
                            <a href="http://desciclopedia.org/wiki/Chapolin_Colorado#Poderes" title="link-externo" >Pílulas Nanicolinas</a>
                            e diminuir um pouco esse negócio.
                        </p>

                        <pre><code class="language-php">$_POST['bike'] = ( isset($_POST['bike']) ) ? true : null;
$_POST['car']  = ( isset($_POST['car']) )  ? true : null;
</code></pre>

                        <p>
                            Pronto! Agora sabemos que se a variável <code>$_POST['bike']</code> for igual a <code>true</code>
                            o usuário selecionou a checkbox. E se ele não ticar, o valor será <code>null</code>.
                        </p>

                        <p>
                            Se você reparar, não utilizamos o valor da propriedade <code>value="on"</code>, pois ela
                            é inútil. Quer dizer, não podemos subestimar a criatividades dos programadores de plantão, mas
                            eu acho ela inútil.
                        </p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="carregando-form">Carregando o formulário web</h1>
                        </div>

                        <p>Para carregar as checkboxes do nosso formulário não trabalheremos com a propriedade <code>value=""</code></p>

                        <p>Trabalharemos com a propriedade <code>checked</code>.</p>

                        <pre><code class="language-html">&lt;input type="" name="nome-do-campo" <em>checked</em> /&gt;</code></pre>

                        <p>O correto é utilizar ela dessa forma...</p>

                        <pre><code class="language-html">&lt;input type="" name="nome-do-campo" <em>checked="checked"</em> /&gt;</code></pre>

                        <p>Por enquanto iremos trabalhar com a forma reduzida, só por enquanto.</p>

                        <p>
                            Retomando, se tivéssemos uma variável, por exemplo, <code>$bike</code> com a string <code>"checked"</code>
                            atribuída a ela...

                        <pre><code class="language-php">$bike = "checked";</code></pre>

                        <p>...então poderíamos imprimir isso no controle, dessa forma:</p>

                        <pre><code class="language-php">&lt;input type="checkbox" name="bike" value="on" <em>&lt;?php echo $bike; ?&gt;</em> &gt;</code></pre>

                        <p>
                            Estamos falando de HTML, se você não sabe o básico de checkbox poderá querer ver esta matéria
                            <?php Aux::getAncora("/html-css/basico/formularios-web/", "titulo"); ?>.
                        </p>

                        <p>Nosso formulário web ficou da seguinte forma.</p>

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
$bike = (bool) rand(0, 1) ? "checked" : null;
$car  = (bool) rand(0, 1) ? "checked" : null;

?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Form de exemplo com checkboxes&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action="form-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;input type="checkbox" name="bike" value="on" <em>&lt;?php echo $bike; ?&gt;</em> &gt;I have a bike
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="checkbox" name="car" value="on" <em>&lt;?php echo $car; ?&gt;</em> &gt;I have a car
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>


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