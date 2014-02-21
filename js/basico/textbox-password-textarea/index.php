<?php
/**
 * JS
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/js/basico/textbox-password-textarea/";
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
                                <a href="#prop-id">Propriedade <code>id=""</code></code></a>
                            </li>
                            <li>
                                <a href="#getElementById">getElementById().value</a>
                            </li>
                            <li>
                                <a href="#trabalhando">Trabalhando com o formulário</a>
                            </li>
                            <li>
                                <a href="#desafio">Desafio</a>
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
                            <h2 id="prop-id">Propriedade <code>id=""</code></h2>
                        </div>

                        <p>A propriedade <code>id</code> está para o Javascript assim como a propriedade <code>name</code>
                        está para o PHP.</p>

                        <p>Profundo isso! rssss</p>

                        <p>
                            Falando sério, Para referenciarmos os controles ou qualquer elemento HTML precisamos
                            que eles tenha a propriedade <code>id</code> "setada". Ok, isso não é via de regra e
                            não é mesmo. Podemos encontrar (referenciar) os elementos através dos nomes das tags,
                            atraves de outras propriedades, pelo posicionamento na árvore DOM e etc...
                        </p>

                        <p>Mas o básico é referenciar pelo <code>id</code>.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="getElementById">getElementById().value</h2>
                        </div>

                        <p>A função nativa em Javascript <code>getElementById()</code>nos auxiliará.</p>

                        <p>
                            Já falamos sobre ela na matéria...
                            <?php $mat = Aux::retMateriaAtravesURL("/js/basico/code-lampadas/", $core->links[Core::SECAO_JS]); ?>
                            <a href="<?php echo $mat->url . "#by-id"; ?>" title="<?php echo $mat->titulo; ?>"><?php echo $mat->titulo; ?></a>.
                        </p>

                        <p>Ela busca e retorna o elemento através de seu identificador, a propriedade <code>id=""</code>, veja:</p>

                        <pre><code class="language-javascript">document.getElementById("id");</code></pre>

                        <p>O resultado (o elemento) nós armazenas em uma variável (com um nome bem bacana) para podermos
                            acessar suas propriedades, exemplo:</p>

                        <pre><code class="language-javascript">var objElem = document.getElementById("id");</code></pre>

                        <p>De posse do elemento, utilizaremos a propriedade <code>value</code>. Ela refere-se ao valor
                            do campo, seja ele uma <strong>textbox</strong>, um <strong>password</strong> ou uma <strong>textarea</strong>.</p>

                        <p>Podemos recuperar o valor:</p>

                        <pre><code class="language-javascript">var objElem = document.getElementById("id");
console.log(objElem.value);</code></pre>

                        <p>Ou alterar o valor:</p>

                        <pre><code class="language-javascript">var objElem = document.getElementById("id");
objElem.value = "outro texto qualquer";</code></pre>

                        <p>Poderíamos ser sucinto, como o título desta seção, e utilizarmos a propriedade diretamente
                            na função, quero dizer:</p>

                        <pre><code class="language-javascript">document.getElementById("id").value = "outro texto qualquer";</code></pre>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="trabalhando">Trabalhando com o formulário</h2>
                        </div>

                        <p>
                            Em PHP podemos enviar e receber os dados do formulário, também podemos carregar o formulário.
                            Quer dizer, podemos abrir o formulário com dados pré carregados.
                        </p>

                        <p>
                            Em Javascript poderemos fazer as mesmas requisições que o PHP, utilizando um negócio chamado
                            <strong>XMLHttpRequest</strong> (vulgo AJAX), Haaaa mas não vamos falar sobre AJAX, é um
                            pouco cedo. Por enquanto vamos fazer coisas mais simples.
                        </p>

                        <p>Então, o que faremos em Javascript?</p>

                        <p>Que tratamento daremos ao pequeno formulário do Andy Budd?</p>

                        <p>Que tal começarmos referênciando o botão submit?</p>

                        <pre><code class="language-javascript">document.getElementById("btnSubmit")</code></pre>

                        <p>Não se esqueça que você precisará do id, por tanto, altere o HTML incluindo a propriedade <code>id</code>.</p>

                        <pre><code class="language-html">...
&lt;input type="submit" <em>id="btnSubmit"</em> value="Submit!" /&gt;
...</code></pre>

                        <p>Agora, vamos atribuír uma <strong>função anônima</strong> para o evento <code>onclick</code> de
                            nosso controle.</p>

                        <pre><code class="language-javascript">document.getElementById("btnSubmit").onclick = function() {
}</code></pre>
                        <p>Lembra que o botão do tipo submit (<code>&lt;input type="submit"</code>) dispara o evento
                            <code>submit</code> do formulário web?</p>

                        <p>Atribuír uma função ao evento <code>onclick</code> não anulará a <strong>ação padrão</strong>.</p>

                        <p>Então precisamos mudar nosso HTML mais uma vez. O botão passa a ser do tipo "button", veja:</p>

                        <pre><code class="language-html">...
&lt;input <em>type="button"</em> id="btnSubmit" value="Submit!" /&gt;
...</code></pre>
                        <p>Nossa função fará o seguinte (o óbvio), buscará os controles e mostrará no console do FireBug
                            seus valores, veja como ficou:</p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">document.getElementById("btnSubmit").onclick = function() {

    var txtAutor   = document.getElementById("author");
    var txtEmail   = document.getElementById("email");
    var txtPass    = document.getElementById("pass");
    var txtComents = document.getElementById("text");

    console.log(txtAutor.value);
    console.log(txtEmail.value);
    console.log(txtPass.value);
    console.log(txtComents.value);

    // código para efetuar o submit (provavelmente AJAX)
}
</code></pre>
                        </div>

                        <p>Babinha!</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="desafio">Desafio</h2>
                        </div>

                        <p>Na matéria anterior nós fizemos um esforço de melhoria em nosso código da lâmpada, lembra?</p>

                        <p>O código que produzimos nesta matéria é bem mais simples que o código da lâmpada.</p>

                        <p>Te desafio a tentar utilizar um pouco de objetos para melhorar esse código!</p>

                        <p>Se aceitar, pode olhar as matérias:</p>

                        <ul>
                            <li>
                                <?php echo Aux::getAncora("/js/basico/oop-primeiro-degrau/", $core->links[Core::SECAO_JS]); ?>
                            </li>
                            <li>
                                <?php $mat = Aux::retMateriaAtravesURL("/logica-de-programacao/basico/oop-programacao-orientada-a-objetos/", $core->links[Core::SECAO_LOG]); ?>
                                <a href="<?php echo $mat->url . "#js"; ?>" title="<?php echo $mat->titulo; ?>"><?php echo $mat->codigo; ?></a>.
                            </li>
                        </ul>

                        <p>...talvez elas te ajudem.</p>

                        <p>Só não pode ver o <a href="http://codepen.io/flaviomicheletti/pen/keyfa" title="link-externo">resultado</a>, rsss</p>

                        <p>Na verdade não existe certo ou errado, concerteza você encontrará uma forma diferente.</p>

                        <p>
                            Então, além do desafio, te convido para criar uma conta  no
                            <a href="http://codepen.io/flaviomicheletti/popular-list" title="link-externo">CodePen</a>
                            e fazer um fork do pen
                            <strong><a href="http://codepen.io/flaviomicheletti/pen/hAKpl" title="link-externo">simple-form</a></strong>
                        </p>

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
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/API/document.getElementById" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do JS (MDN)</h4>
                                        <p>...falando sobre a função <code>getElementById()</code>.</p>
                                        <span class="label label-default">https://developer.mozilla.org/en-US/docs/Web/API/document.getElementById</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
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
