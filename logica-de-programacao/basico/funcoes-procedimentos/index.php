<?php
/**
 * Lógica/
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
        $core->head->setTitle('Apendendo o básico sobre funções');
        $core->head->setDescription('Como criar e utilizar funcções em PHP e Javascript, máteria de nível básico introduzindo uso de funções');
        $core->head->setkeywords('funções, procedimentos, funções em php, funções em javascript, aprendendo funções');
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
                <h1>Funções</h1>
                <p>Matéria introdutória sobre funções</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">09/01/2014</span>, escrito em <span class="label label-info">09/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">O que são funções?</a>
                            </li>
                            <li>
                                <a href="#php">PHP</a>
                            </li>
                            <li>
                                <a href="#js">Javascript</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">O que são funções?</h1>
                        </div>

                        <p>Funções são uma seção nomeada de código. Em outra palavras, um pequeno (normalmente pequeno)
                            trecho de código que pode ser chamado de diversos ponto do código.</p>

                        <p>Quando o programador precisar executar um mesmo código (mesmo que ligeiramente diferente)
                            várias vezes ele, então, poderá utilizar-se de funções.</p>

                        <p>As funções introduzem o conceito de reusabilidade, ou seja, <strong>"escrever código para
                                depois".</strong></p>

                        <p>Tendo a reusabilidade e a não repetição de código (DRY - Don't repeat yourself) como objetivos,
                            teremos ainda que tomar todo cuidado para <strong>evitarmos</strong>, principalmente:</p>

                        <ul>
                            <li>Funções grandes demais, inchadas, com mais de uma responsabilidade.</li>
                            <li>Funções pouco generalista, ou seja, muito especialista.</li>
                            <li>Funções com muito parâmetros (considere OOP como alternativa).</li>
                            <li>Funções que sejam difícil de testar.</li>
                        </ul>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="php">PHP</h1>
                        </div>

                        <p>Eis a sintaxe básica de uma função que não retorna valor, mais conhecida como <strong>procedimento
                            </strong>:</p>
                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">function foo() {
    # código
    # código
    # código
    # código
}
</code></pre></div>

                        <p>O <code>return</code> faz com que algum valor seja retornado e interrompe o funcionamento da
                            função.</p>


                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">function foo() {
    # código
    # código
    # código
    return "alguma coisa";
}
</code></pre></div>

                        <p>Uma função pode aceitar <strong>parâmetros</strong> (dados para serem trabalhos dentro
                            da função).</p>

                        <p>Temos os parâmetros opcionais (ou não), os valores padrões e se os dados são passados por
                            "valor" ou por "referência", por hora deixaremos esses assuntos para outra matéria.</p>

                        <p>Abaixo conferimos um exemplo de função que soma dois números.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">function somarDoisNumeros($parametro1, $parametro2) {
    $soma = $parametro1 + $parametro2;
    return $soma;
}

echo somarDoisNumeros(5, 3);
// print 8
echo somarDoisNumeros(2, 4);
// print 6

</code></pre></div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="js">Javascript</h1>
                        </div>

                        <p>Em Javascript podemos escrever funções igualmente como em PHP, veja código abaixo:</p>
                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">function foo() {
    // código
    // código
    // código
    // código
}
</code></pre></div>

                        <p>
                            Essa forma não é usual, o mais comum é atribuírmos a função a uma variável. Essa técnica
                            recebe o nome de <strong>função anônima</strong>. Repare que a função não possue nome algum,
                            veja código abaixo:
                        </p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">var foo = function() {
    // código
    // código
    // código
    // código
}
</code></pre></div>
                        <p><code>foo</code> é o nome da variável e não o nome da função!</p>

                        <p>O <code>return</code> faz com que algum valor seja retornado e interrompe o funcionamento da
                            função.</p>


                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">var foo = function() {
    // código
    // código
    // código
    return "alguma coisa";
}
</code></pre></div>

                        <p>Uma função pode aceitar <strong>parâmetros</strong> (dados para serem trabalhos dentro
                            da função).</p>

                        <p>Temos os parâmetros opcionais (ou não), os valores padrões e se os dados são passados por
                            "valor" ou por "referência", por hora deixaremos esses assuntos para outra matéria.</p>

                        <p>Abaixo conferimos um exemplo de função que soma dois números.</p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">var somarDoisNumeros = function(parametro1, parametro2) {
    soma = parametro1 + parametro2;
    return soma;
}

console.log(somarDoisNumeros(5, 3));
// print 8
console.log(somarDoisNumeros(2, 4));
// print 6

</code></pre></div>
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
                                    <a href="http://it2.php.net/manual/pt_BR/language.functions.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP</h4>
                                        <p class="list-group-item-text">...falando sobre funções</p>
                                        <span class="label label-default">http://it2.php.net/manual/pt_BR/language.functions.php</span>
                                    </a>
                                    <div class="list-group">
                                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Functions" class="list-group-item" title="link-externo">
                                            <h4 class="list-group-item-heading">Manual do Javascript (MDN)</h4>
                                            <p class="list-group-item-text">...falando sobre funções</p>
                                            <span class="label label-default">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Functions</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/logica-de-programacao/basico/funcoes-procedimentos/";
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_LOG][Core::SUB_SECAO_CURSO]);
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
                        $core->lista->setLinks($core->paginas, Core::SECAO_LOG, Core::SUB_SECAO_CURSO);
                        $core->lista->link_ativo = "/logica-de-programacao/basico/funcoes-procedimentos/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
