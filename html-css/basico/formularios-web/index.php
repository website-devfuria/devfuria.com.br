<?php
/**
 * HTML & CSS
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/html-css/basico/formularios-web/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Formulários Web e seus controles');
        $core->head->setDescription('Matéria demonstrando os controles básicos de HTML: input, select, textarea, etc...');
        $core->head->setkeywords('formulários web; controles web; input; input file; textbox; combobox; listbox');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_HTML;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Formulários Web e seus controles</h1>
                <p>Veremos os controles básicos de HTML</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">06/01/2014</span>, escrito em <span class="label label-info">06/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#form-web">Formulário web</a>
                            </li>
                            <li>
                                <a href="#input">Controles básicos (input)</a>
                                <ul class="nav">
                                    <li><a href="#input-text">Caixas de texto (text box)</a></li>
                                    <li><a href="#input-pass">Campos de senha</a></li>
                                    <li><a href="#input-check">Caixa de checagem (checkbox)</a></li>
                                    <li><a href="#input-radio">Botões de opção (radio buttons)</a></li>
                                    <li><a href="#input-button">Botões button, submit e reset</a></li>
                                    <li><a href="#input-file">Enviando arquivos (input file)</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#nao-inputs">Controles básicos (não input)</a>
                                <ul class="nav">
                                    <li><a href="#nao-input-combobox">Caixa de seleção (combo box)</a></li>
                                    <li><a href="#nao-input-listbox">Caixa de multipla seleção (List box)</a></li>
                                    <li><a href="#nao-input-textarea">Text box multiline (textarea)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="form-web">Formulário web</h1>
                        </div>

                        <p>Um formulário web é a porta de entradas dos dados de sua aplicação.</p>

                        <p>É nele que seu usuário faz a entrada de dados.</p>

                        <p>Abaixo, temos um exemplo de formulário.</p>

                        <div class="code">
                            <h6>form.html</h6>
                            <pre><code class="language-html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" &gt;
    &lt;head&gt;
        &lt;title&gt; Nosso singelo formulário &lt;/title&gt;
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

                        <p>O formulário pega os dados digitados pelo usuário, associa cada dado a um nome de campo e os
                            envia ao servidor. Lá no outro lado (no servidor), um linguagem de servidor recebe os dados
                            e faz alguma coisa com eles, seguindo a lógica do script criado pelo programador.</p>


                        <p>A tag <code>form</code> é o início do formulário.</p>

                        <pre><code class="language-html">&lt;form&gt;

&lt;/form&gt;</code></pre>

                        <p>Dentro das tags <code>form</code> colocamos os controles (inputs), labels e alguns botões.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="input">Controles básicos (input)</h1>
                        </div>

                        <p>Existem os controles básicos e os criados pelo programador ou por alguma biblioteca.</p>

                        <p>A tag <code>input</code> compõem a maioria dos controles básicos</p>

                        <pre><code class="language-html">&lt;input type="" name=""/&gt;</code></pre>

                        <p>A propriedade <code>name</code> será associada ao valor do campo.</p>

                        <p>Se o propriedade <code>name</code>for, por exemplo, "idade" e o valor digitado pelo usuário for 36
                            os dados para o servidor serão:</p>

                        <pre><code class="no-highlight">idade=36</code></pre>

                        <p>Alterando-se a propriedade <code>type</code> podemos obter os seguintes controles:</p>



                        <h3 id="input-text">Caixas de texto (text box)</h3>

                        <p>A caixa de texto, de longe, é o controle mais utilizado. Ele serve como entrada básica de
                            texto ou números, na verdade de qualquer caracter.</p>

                        <pre><code class="language-html">&lt;input <em>type="text"</em> name="user-name"/&gt;</code></pre>

                        <p>Abaixo, um exemplo hipotético.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de text box" src="input-text.jpg">
                            <p>Exemplo de "text box"</p>
                        </div>



                        <h3 id="input-pass">Campos de senha</h3>

                        <p>Os campos de senha são semelhantes as "text boxs", a diferença é que os dados aparecem
                            escondidos pelo sinal de asterisco <strong>(*)</strong>.</p>

                        <pre><code class="language-html">&lt;input <em>type="password"</em> name="old-pass" /&gt;</code></pre>

                        <p>Veja na imagem abaixo o uso de 3 campos de senha.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de campo de senha" src="input-pass.png">
                            <p>Exemplo de campos de senha</p>
                        </div>



                        <h3 id="input-check">Caixa de checagem (checkbox)</h3>

                        <p>As checkboxe's são como uma escolha booleana: true ou false, sim ou não.</p>

                        <pre><code class="language-html">&lt;input <em>type="checkbox"</em> name="company" /&gt;</code></pre>

                        <p>Normalmente vem em grupo, como a imagem abaixo.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de checkbox" src="input-check.png">
                            <p>Exemplo de checkbox</p>
                        </div>

                        <p>Ou sozinha como no exemplo seguinte.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de checkbox sozinnha" src="input-check2.jpg">
                            <p>Exemplo de checkbox solitária (coitada)</p>
                        </div>

                        <p>Para exibir a checkbox ticada (selecionada), usamos a propriedade <code>checked</code>.</p>

                        <pre><code class="language-html">&lt;input type="checkbox" name="company" <em>checked</em>/&gt;</code></pre>

                        <p>Mas a especificação diz que é para ser usado dessa forma:</p>

                        <pre><code class="language-html">&lt;input type="checkbox" name="company" <em>checked="checked"</em>/&gt;</code></pre>

                        <p>De qualquer forma, o navegador entenderá que a checkbox deve ser assinalada.</p>


                        <h3 id="input-radio">Botões de opção (radio buttons)</h3>

                        <p>As radio buttons são como uma opção entre, no mínimo, duas.</p>

                        <p>No exemplo abaixo eu coloquei três radios para fazer mais sentido.</p>


                        <pre><code class="language-html">&lt;input <em>type="radio"</em> name="band-rock" value="beatles"/&gt;
&lt;input <em>type="radio"</em> name="band-rock" value="led-zeppelin"/&gt;
&lt;input <em>type="radio"</em> name="band-rock" value="pink-floyd"/&gt;
</code></pre>

                        <p>Repare que a prorpiedade <code>name</code> é igual para o mesmo grupo de opções e que
                            a propriedade <code>value</code> deve ser definida pelo programador.</p>

                        <p>Veja um conjunto de "radios" como exemplo.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de radios button" src="input-radio.jpg">
                            <p>Exemplo de radio button</p>
                        </div>

                        <p>Para exibir o controle radio selecionado, usamos a propriedade <code>checked</code>.</p>

                        <pre><code class="language-html">&lt;input type="radio" name="company" <em>checked="checked"</em>/&gt;</code></pre>




                        <h3 id="input-button">Botões button, submit e reset</h3>

                        <p>Um botão simples (button) precisa de um código javascipt para funcionar.</p>

                        <p>O botão abaixo precisaria de um código JS para realizar a submissão da página.</p>

                        <pre><code class="language-html">&lt;input <em>type="button"</em> value="Enviar formulário" /&gt;</code></pre>

                        <p>O botão <code>submit</code> "já vem pré programado" para realizar o submit, ou seja, não
                            precisaremos "codar" em JS.</p>

                        <pre><code class="language-html">&lt;input <em>type="submit"</em> value="Enviar formulário" /&gt;</code></pre>

                        <p>O botão reset já não se usa mais. Ele limpa as entradas do campos e, como o botão submit, ele
                            já vem pré programado.</p>

                        <pre><code class="language-html">&lt;input <em>type="reset"</em> value="Apagar formulário" /&gt;</code></pre>

                        <p>Visualmente eles são muito parecidos, mas "por de baixo do pano" são bem diferentes.</p>

                        <p>Repare que a propriedade <code>value</code> de ambos os botões servem como uma estampa.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de botões" src="buttons.jpg">
                            <p>Exemplo de botões</p>
                        </div>




                        <h3 id="input-file">Enviando arquivos (input file)</h3>

                        <p>O "input file" é um controle feito parra realizar uploads de arquivos.</p>

                        <p>Ele é um botão acompanhado de uma text box.</p>

                        <p>Ao clicar no botão "Browse", o navegador abre a janela "arquivos" de seu sistema operacional e
                            você poderá selecionar os arquivos de seu hard-disk.</p>

                        <pre><code class="language-html">&lt;input <em>type="file"</em> /&gt;</code></pre>

                        <p>A imagem abaixo ilustra a utilização de 3 input files.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de input file" src="input-file.jpg">
                            <p>Exemplo de botões input file</p>
                        </div>


                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="nao-inputs">Controles básicos (não input)</h1>
                        </div>

                        <p>Nesta categoria encontram-se os controles "combo box", "list box" e "text box multiline".</p>



                        <h3 id="nao-input-combobox">Caixa de seleção (combo box)</h3>

                        <p>A caixa de seleção, vulgo "combobox" é um controle parecido com um menu de opções. Veja
                            a imagem abaixo.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de botões" src="select.gif">
                            <p>Exemplo de combo box</p>
                        </div>

                        <p>A tag para este controle é a <code>select</code>.</p>

                        <pre><code class="language-html">&lt;select&gt;
...
&lt;/select&gt;
</code></pre>
                        <p>Os opções (que vão dentro da tag select) utilizam a tag <code>option</code></p>

                        <pre><code class="language-html">&lt;option&gt;Usa&lt;/option&gt;</code></pre>

                        <p>Dessa forma (options mais select), temos o controle combobox:</p>

                        <pre><code class="language-html">&lt;select&gt;
    &lt;option&gt;Usa&lt;/option&gt;
    &lt;option&gt;Canada&lt;/option&gt;
    &lt;option&gt;Mexico&lt;/option&gt;
&lt;/select&gt;
</code></pre>



                        <h3 id="nao-input-listbox">Caixa de multipla seleção (List box)</h3>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de botões" src="select-multiple-list.png">
                            <p>Exemplo de list box</p>
                        </div>

                        <p>As "lista box" são as combobox de multipla escolha, para isso adicionamos a propriedade
                            <code>multiple</code>.</p>


                        <pre><code class="language-html">&lt;select multiple&gt;
    &lt;option&gt;Arts&lt;/option&gt;
    &lt;option&gt;Politics&lt;/option&gt;
    &lt;option&gt;Science&lt;/option&gt;
    &lt;option&gt;Computers and internet&lt;/option&gt;
&lt;/select&gt;
</code></pre>



                        <h3 id="nao-input-textarea">Text box multiline (textarea)</h3>

                        <p>Sabe aquelas text box grandonas? São as text box de várias linhas ou text box multiline.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de botões" src="text-box-mult.jpg">
                            <p>Exemplo de text box multiline (text area)</p>
                        </div>

                        <p>Em HTML usamos a tag <code>textarea</code> para criar o controle.</p>

                        <pre><code class="language-html">&lt;textarea&gt;
...
&lt;/textarea&gt;
</code></pre>
                    </div>

                    <p>Nas matérias posteriores nós veremos cada controle detalhadamente.</p>

                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_HTML][Core::CATEGORIA_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
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
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">My first HTML form (MDN)</h4>
                                        <p class="list-group-item-text">Exemplo básico de formulário web.</p>
                                        <span class="label label-default">https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->paginas, Core::SECAO_HTML, Core::CATEGORIA_CURSO);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
