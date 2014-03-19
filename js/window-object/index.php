<?php
/**
 * JS
 */
/**
 * Includes
 */
require "../../core/boot.php";
$url = "window-object";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Explorando o objeto window em Javascript | window object');
        $core->head->setDescription('Nesta receita veremos as propriedades, métodos e eventos do objeto principal e que possue hierarquia mais alta na linguagem Javascript: window!');
        $core->head->setkeywords('');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body class="receitas-body">

        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="receitas-header" id="content">
                    <div class="container">
                        <h1>Explorando o objeto <code>window</code> em Javascript!</h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">

                        <p>O objeto <code>window</code> é o de hierarquia mais elevada na árvore DOM (Document Object Model).</p>

                        <p>Ele representa a janela ativa (janela do navegador).</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Árvore DOM" id="myimage" src="window-propr.jpg">
                            <p>Não se deixe intimidar pela ilustração acima, ela em breve parecerá mais simples do você imagina.</p>
                            <p><a href="http://www.devmedia.com.br/explorando-as-propriedades-do-objeto-window-em-javascript/27254" title="link-externo">Fonte da imagem</a></p>
                        </div>

                        <p>
                            Eu mostrarei apenas as propriedades, métodos e eventos mais utilizados e os mais conhecidos, pois
                            você descubrirá, com o tempo, que existem formas mais elegantes de se resolver determinado
                            problema, por exemplo:
                        </p>

                        <p>
                            Para abrir uma janela é preferível utilizar uma abordagem com CSS e Javascript em detrimento do
                            método <code>window.open()</code>.
                        </p>

                        <p>
                            O mesmo pode ser dito quando queremos abrir "popups" como o <code>alert()</code>, <code>confirm()</code> e
                            <code>prompt()</code>.
                        </p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Propriedades</h2>
                        </div>
                        <ul>
                            <li>
                                <h3><code>document</code></h3>
                                <p>A propriedade <code>document</code> é o segundo objeto mais importante pois ele representa
                                    o documento HTML.</p>

                                <p>Antigamente (entre 2000 e 2010), era comum nos depararmos com o seguinte trecho:</p>

                                <pre><code>window.document.getElementById('id-input');</code></pre>

                                <p>Mas logo descobriu-se o atalho, e simplificamos para...</p>

                                <pre><code>document.getElementById('id-input');</code></pre>

                            </li>
                            <li>
                                <h3><code>location</code></h3>
                                <p>Propriedade somenta leitura que representa o local(URL) atual do documento.</p>
                                <p>Com ela podemos fazer redirecionamentos como por exemplo:</p>
                                <pre><code class="language-javascript">window.location.href = 'http://www.google.com';</code></pre>
                            </li>
                            <li>
                                <h3><code>screen</code></h3>
                                <p>Referência ao objeto <strong>screen</strong> associado com o objeto window.</p>
                                <p>Com ele podemos trabalhar com as seguintes propriedades:</p>
                                <ul>
                                    <li><code>screen.top</code></li>
                                    <li><code>screen.left</code></li>
                                    <li><code>screen.height</code></li>
                                    <li><code>screen.width</code></li>
                                </ul>

                            </li>
                            <li>

                                <h3><code>navigator</code></h3>
                                <p>Representa o objeto <code>Navigator</code> normalmente consultado para obter informações do navegador.</p>
                            </li>
                        </ul>
                    </div>




                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Métodos</h2>
                        </div>
                        <ul>
                            <li>
                                <h3><code>window.open()</code></h3>
                                <p>Método que abre um nova janela do navegador:</p>
                                <pre><code class="language-javascript">myWindow = window.open("","myWindow", "_blanck");</code></pre>
                            </li>
                            <li>
                                <h3><code>window.close()</code></h3>
                                <p>Método que fecha uma nova janela aberta.</p>
                                <pre><code class="language-javascript">myWindow.close();</code></pre>
                            </li>
                        </ul>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Eventos</h2>
                        </div>

                        <h3><code>window.onload</code></h3>

                        <p>Normalmente usado para disparar assim que a página é carregada.</p>

                        <pre><code class="language-javascript">window.onload = function() {
//código executado após carregamento da página
}</code></pre>


                        <blockquote>
                            O evento <code>load</code> é disparado quando um recurso e suas dependencias são totalmente carregados
                            (The load event is fired when a resource and its dependent resources have finished loading.)
                            <small>Fonte:
                                <a href="https://developer.mozilla.org/en-US/docs/Web/Reference/Events/load" title="link-externo">
                                    Mozilla Developer Network / event reference LOAD</a>
                            </small>
                        </blockquote>

                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Referência completa</h2>
                        </div>

                        <blockquote>
                            Fonte:
                            <a href="https://developer.mozilla.org/en-US/docs/Web/API/Window" title="link-externo">
                                Mozilla Developer Network / window object</a>

                        </blockquote>

                        <!--                        <div class="alert alert-danger">
                                                    <p>Se você procura a referência completa, acesse
                                                        <a href="https://developer.mozilla.org/en-US/docs/Web/API/Window" title="link-externo">MDN / window object</a>
                                                    </p>
                                                </div>-->
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $core->lista->label = ListaSecao::LABEL_GUIA_JS;
        $core->lista->setLinks($core->paginas, Core::SECAO_JS, Core::SUB_SECAO_GUIA);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/guias/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>