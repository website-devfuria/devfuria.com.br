<?php
/**
 *
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url ="/php/basico/enviando-dados-via-get-post/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Enviando dados via GET e POST');
        $core->head->setDescription('Estamos no navegador (cliente) criando dois tipos de requisições GET e POST');
        $core->head->setkeywords('get post php, httpd methods, get, post, recebendo dados via post e get');
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
                <h1>Enviando dados para o script</h1>
                <p>Estamos no navegador (browser) criando dois tipos de requisições</p>
                <p>GET e POST</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">30/01/2014</span>, escrito em <span class="label label-info">30/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#post">POST</a></li>
                            <li>
                                <a href="#get-form">GET (via formulário)</a>
                            </li>
                            <li>
                                <a href="#get-url">GET (via URL)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="post">POST</h1>
                        </div>

                        <p>Criar uma requisição do tipo POST depende de um formulário web, se você entende um pouco
                            de HTML vai se sentir mais familizarizado.</p>

                        <p>Dentro da tag <code>form</code> temos duas propriedades importantes.</p>

                        <ul>
                            <li>action</li>
                            <li>method</li>
                        </ul>

                        <p>
                            A <code>action</code> será o script de destino, quer dizer para onde enviamos os dados e
                            <code>method</code> será o método <strong>get</strong> ou <strong>post</strong>
                        </p>

                        <p>Cada campo (input) que inserimos gera um par <code>nome=valor</code></p>

                        <p>A propriedade <code>name</code> será o <strong>nome</strong> e a proprieade <code>value</code>
                            será o <strong>valor</strong>.</p>

                        <div class="code">
                            <h6>form.html</h6>
                            <pre><code class="language-html">&lt!DOCTYPE html&gt
&lthtml lang="pt-br"&gt
    &lthead&gt
        &lt;title&gt; Nosso singelo formulário &lt;/title&gt;
        &ltmeta charset="utf-8"&gt
    &lt;/head&gt;
    &lt;body&gt;

        &lt;form action="script-para-onde-envio-os-dados.php" method="post"&gt;
            &lt;p&gt;
                Name:  &lt;input type="text" name="username" value="João da Silva" /&gt;&lt;br /&gt;
            &lt;/p&gt;
            &lt;p&gt;
                Email: &lt;input type="text" name="email"  value="joao@dasilva.com" /&gt;&lt;br /&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>

                        <p>Apenas uma observação, o que o usuário digitar nas "inputs" será armazenado e sobrescrito na
                            propriedade <code>value</code>. Se o usuário não digitar nada, o valor incial será considerado.
                            Inclusive se não tiver valor definido para <code>value</code> e o usuário não digitar
                            nada o servidor receberá <code>""</code> (string de comprimento zero)</p>


                        <p>Chega de teoria e vamos testar essa "bagaça".</p>

                        <p>Crie o arquivo php abaixo ou baixe tudo neste <a href="https://gist.github.com/flaviomicheletti/8740560" title="link-externo">Gist</a></p>

                        <div class="code">
                            <h6>script-para-onde-envio-os-dados.php</h6>
                            <pre><code class="language-php">&lt;?php

var_dump($_POST);

?&gt;</code></pre>
                        </div>

                        <p>Abra o HTML e clique no botão "Submit me".</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Figura ilustrando a requisição post" src="var-dump-requisicao.png">
                        </div>

                        <p>Ahaaa! Isso significa que no seu script PHP você poderá fazer isto:</p>

                        <pre><code class="language-php">echo $_POST['username']; // print João da Silva
echo $_POST['email']; // print joao@dasilva.com
</code></pre>

                        <p>
                            O que fazer com o dados nós veremos na matéria
                            <a href="<?php echo LINKS_PATH; ?>/php/basico/recebendo-dados-via-get-post/">Recebendo dados via GET POST</a>
                        </p>


                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="get-form">GET <small>(via formulário)</small></h1>
                        </div>

                        <p>Para criar uma requisição GET altere a propriedade <code>method</code> para "get" do nosso HTML.</p>

                        <div class="code">
                            <h6>form.html</h6>
                            <pre><code class="language-html">&lt!DOCTYPE html&gt
&lthtml lang="pt-br"&gt
    &lthead&gt
        &lt;title&gt; Nosso singelo formulário &lt;/title&gt;
        &ltmeta charset="utf-8"&gt
    &lt;/head&gt;
    &lt;body&gt;

        &lt;form action="script-para-onde-envio-os-dados.php" method="post"&gt;
            &lt;p&gt;
                Name:  &lt;input type="text" name="username" value="João da Silva" /&gt;&lt;br /&gt;
            &lt;/p&gt;
            &lt;p&gt;
                Email: &lt;input type="text" name="email"  value="joao@dasilva.com" /&gt;&lt;br /&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>

                        <p>E, obviamente, altere o script php como abaixo.</p>

                        <div class="code">
                            <h6>script-para-onde-envio-os-dados.php</h6>
                            <pre><code class="language-php">&lt;?php

var_dump($_GET);

?&gt;</code></pre>
                        </div>

                        <p>Temos o mesmo resultado...</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Figura ilustrando a requisição get" src="var-dump-requisicao.png">
                        </div>

                        <p>E também podemos fazes isto:</p>

                        <pre><code class="language-php">echo $_GET['username']; // print João da Silva
echo $_GET['email']; // print joao@dasilva.com
</code></pre>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="get-url">GET <small>(via URL)</small></h1>
                        </div>

                        <p>A requisição do tipo GET não depende exclusivamente de um formulário. Ela pode ser feita
                            através de um link (URL).</p>

                        <p>Vamos começar com a URL que aponta para seu script.</p>

                        <pre><code class="no-highlight">/local/onde/esta/seu/script.php</code></pre>

                        <p>O sinal de interrogação separa o script dos dados.</p>

                        <pre><code class="no-highlight">/local/onde/esta/seu/script.php<em> ? </em>dados</code></pre>

                        <p>Os dados nos separamos com o par <code>nome=valor</code>.</p>

                        <pre><code class="no-highlight">/local/onde/esta/seu/script.php?<em>nome1=valor1</em></code></pre>

                        <p>Tendo mais de um par, utilizamos o sinal <code>&amp;</code> para serpará-los.</p>

                        <pre><code class="no-highlight">/local/onde/esta/seu/script.php?nome1=valor1<em>&amp;</em>nome2=valor2</code></pre>

                        <p>Tente memorizar o esquema abaixo.</p>

                        <pre><code class="no-highlight"> script ?  par1  &amp;  par2  &amp;  par3  &amp; etc..</code></pre>


                        <h3>Seguindo nosso exemplo</h3>

                        <p>A URL no nosso caso ficaria assim.</p>

                        <pre><code class="no-highlight">script-para-onde-envio-os-dados.php?nome=Joao da Silva&amp;email=joado@dasilva.com</code></pre>

                        <p>Se você acertou o caminho do script verá que o resultado continua idêntico.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Figura ilustrando a requisição get por URL" src="var-dump-requisicao.png">
                        </div>

                        <p>E ainda podemos fazes isto:</p>

                        <pre><code class="language-php">echo $_GET['username']; // print João da Silva
echo $_GET['email']; // print joao@dasilva.com
</code></pre>

                        <h3>Âncoras</h3>

                        <p>Podemos concluir que o GET pode ser disparado através de um formulário html e também
                            através de uma URL.</p>

                        <p>Isso siginifica que podemos criar âncoras com URL igual a que acabamos de criar</p>

                        <p>Altere o HTML como demosntrado abaixo, repare que eu apaguei o fomulário e inseri uma âncora
                            com nossa URL.</p>

                        <div class="code">
                            <h6>form.html</h6>
                            <pre><code class="language-html">&lt!DOCTYPE html&gt
&lthtml lang="pt-br"&gt
    &lthead&gt
        &lt;title&gt; Nosso singelo formulário &lt;/title&gt;
        &ltmeta charset="utf-8"&gt
    &lt;/head&gt;
    &lt;body&gt;

        &lt;p&gt;
            &lt;a href="script-para-onde-envio-os-dados.php?nome=Joao da Silva&email=joado@dasilva.com"&gt;Submit me!&lt;/a&gt;
        &lt;/p&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>

                        <p>Obs: Para que o HTML continue válido é preciso substituir os sinais <code>&amp;</code> por <code>&amp;amp;</code></p>

                        <p>Agora volte no HTML e clique no link.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Figura ilustrando a requisição get por URL" src="var-dump-requisicao.png">
                        </div>

                        <p>Viu? Tudo igual.</p>

                        <pre><code class="language-php">echo $_GET['username']; // print João da Silva
echo $_GET['email']; // print joao@dasilva.com
</code></pre>


                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h1>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://www.php.net/manual/en/language.variables.external.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP</h4>
                                        <p>Falando sobre as variáveis globais <code>$_GET</code> e <code>$_POST</code></p>
                                        <span class="label label-default">http://www.php.net/manual/en/language.variables.external.php</span>
                                    </a>
                                </div>
                            </div>
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
