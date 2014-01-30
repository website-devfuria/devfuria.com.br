<?php
/**
 * Lógica
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
        $core->head->setTitle('Conceitos e exemplos do if-else para PHP');
        $core->head->setDescription('Aprenda sobre a tomada de decisões no PHP com as estruturas de controle if, else e elseif.');
        $core->head->setkeywords('if else php, expressões condicionais; estruturas de controle, if, else, elseif, diagrama de blocos, condicionais, operadores, valores booleanos, if else exemplos, desvio condicional');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Expressões Condicionais</h1>
                <p><code>if (true) {echo "true"} else {echo "false"};</code></p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">20/12/213</span>, escrito em <span class="label label-info">20/12/213</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">Fluxo de controle</a>
                            </li>
                            <li>
                                <a href="#diagram">Diagrama de sintaxe</a>
                            </li>
                            <li>
                                <a href="#aninha">Condicionais aninhados</a>
                            </li>
                            <li>
                                <a href="#simpl">Simplificando a expressão</a>
                            </li>
                            <li>
                                <a href="#elseif">else if</a>
                            </li>
                            <li>
                                <a href="#terceiro-else">if - else if - else</a>
                            </li>
                        </ul>
                    </div>                    
                </div>



                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Fluxo de controle</h1>
                        </div>

                        <p>As instrunções condicionais alterão o fluxo de controle de seu programa.</p>
                        <p>Elas dizem se devem ir para a "direita" ou para a "esquerda"</p>
                        <p>A instrunção condicional mais comum é o <code>if</code></p>

                        <pre><code>if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
}</code></pre>

                        <p>Logo após a palavra <code>if</code> temos a <strong>expressão condicional</strong> entre
                            parenteses <code> if (expressão-condicional) {</code></p>

                        <p>O <strong>bloco if</strong> só será executado se a expressão for verdadeira ou, em outras palavras,
                            retornar <code>true</code>.</p>

                        <p>A imagem abaixo, um diagrama de bloco, ilustra o fluxo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="fluxo-if.png">
                            <p>Fonte: Livro "Simple Javascript" (Kevin, Cameron), Pag 60.</p>
                        </div>



                        <p>O <strong>bloco else</strong> só será executado se a expressão for falsa ou, em outras palavras,
                            retornar <code>false</code>.</p>

                        <pre><code>if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else {
    ... executar código
    ... executar código
    ... executar código
}</code></pre>
                        <p>Veja imagem abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="fluxo-if-else.png">
                            <p>Fonte: Livro "Simple Javascript" (Kevin, Cameron), Pag 66.</p>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="diagram">Diagrama de sintaxe</h1>
                        </div>

                        <p>A ilustração abaixo é genial, trata-se de um diagrama de sintaxe elabora pelo mago do JS
                            (Douglas Crockford).</p>

                        <p>Ela demonstra a instrunção <code>if-else</code> no Javascript.</p>

                        <p>A primeira vez que eu vi esse diagrama achei meio confuso, logo pensei: "mais um diagrama".
                            Depois que eu o compreendi, achei genial.</p>

                        <p>Repare que você pode seguir a linha o diagrama e dependendo de onde entrar só poderá
                            segui em frente.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="sintaxe-if.png">
                            <p>Fonte: Livro "O melhor do Javascript" (Douglas Crockford)</p>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="aninha">Condicionais aninhados</h1>
                        </div>                        

                        <p>Quando temos um <code>if</code> dentro do outro.</p>

                        <pre><code>if ($a) {
    if ($b) {
        if ($c) {
            ... código
        }
    }
}</code></pre>
                        <p>O código abaixo é equivalente:</p>

                        <pre><code>if ($a && $b && $c) {
    ... código
}</code></pre>                    

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="simpl">Simplificando a expressão</h1>
                        </div>


                        <h3>true</h3>
                        <p>Os códigos abaixo são equivalentes</p>

                        <pre><code>// true completo
if ($variavel == true) {
    ... executar código
}</code></pre>

                        <pre><code>// true simplificado
if ($variavel) {
    ... executar código
}</code></pre>

                        <h3>false</h3>

                        <p>Da mesma forma, os código abaixo também são equivalentes</p>

                        <pre><code>// false completo
if ($variavel == false) {
    ... executar código
}</code></pre>

                        <pre><code>// false simplificado
if ( ! $variavel) {
    ... executar código
}</code></pre>
                        <p>Há programadores que detestam a versão simplificada, eu gosto!</p>
                        <p>É só uma questão de estilo.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="elseif">else if</h1>
                        </div>

                        <p>O <strong>bloco else</strong> não precisa ser executado sempre que a expressão no <strong>bloco if</strong> for <code>false</code>.</p>
                        <p>O bloco else poderá conter um expressão também.</p>
                        <p>
                            No exemplo abaixo, se o <code>if</code> for falso e o <code>else</code> verdadeiro então
                            o bloco <code>else</code> será executado
                        </p>

                        <pre><code>if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
}</code></pre>

                        <p>Abaixo vemos o código equivalente:</p>

                        <pre><code>if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else {
    if (expressão-condicional) {
        ... executar código
        ... executar código
        ... executar código
    }
}</code></pre>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="terceiro-else">if - else if - else</h1>
                        </div>

                        <p>Uma outra variação seria incluir um terceiro bloco else</p>

                        <pre><code>if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
<em>} else
    ... executar código
    ... executar código
    ... executar código
}</em></code></pre>

                        <p>
                            Neste caso, o bloco <code>else</code> apenas seria executado se o bloco<code> if</code>
                            e bloco <code>else if</code> fossem <code>false</code>.
                        </p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas</h1>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://www.php.net/manual/pt_BR/language.control-structures.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP</h4>
                                        <p class="list-group-item-text">...falando sobre estruturas de controle</p>
                                        <span class="label label-default">http://www.php.net/manual/pt_BR/language.control-structures.php</span>
                                    </a>
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/if...else" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do Javascript</h4>
                                        <p class="list-group-item-text">... falando sobre a condicional if-else</p>
                                        <span class="label label-default">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/if...else</span>
                                    </a>
                                    <a href="http://ifelse.com/#PHP" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">http://ifelse.com/</h4>
                                        <p class="list-group-item-text">Link legal que mostra o if-else em diversas linguagens</p>
                                        <span class="label label-default">http://ifelse.com/</span>
                                    </a>
                                    <a href="" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading"></h4>
                                        <p class="list-group-item-text"></p>
                                        <span class="label label-default"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <?php
                    $core->paginacao->link_ativo = "/logica-de-programacao/basico/if-else/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_LOG]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Lógica de Programação</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_LOG);
                        $core->lista->link_ativo = "/logica-de-programacao/basico/if-else/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
