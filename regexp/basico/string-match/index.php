<?php
/**
 * RegExp
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/regexp/basico/string-match/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('string.match()');
        $core->head->setDescription('Dissecando a função string.match() do JS, método de expressão regular.');
        $core->head->setkeywords('expressões regulares, string.match(), string.match');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>string.match()</h1>
                <p>Dissecando a função do JS</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">22/07/2013</span>, escrito em <span class="label label-info">22/07/2013</span>.
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
                                <a href="#intro">Sobre a função</a>
                            </li>
                            <li>
                                <a href="#nao-casou">Expressão não casa</a>
                            </li>
                            <li>
                                <a href="#sintax-errada">Sintaticamente errada</a>
                            </li>
                            <li>
                                <a href="#code">Código</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Sobre a função</h1>
                        </div>

                        <p>Em JS temos a forma <code>string.match()</code> onde <code>"string"</code> é a variável contendo a sua string e <code>"match()"</code> é a função que evocamos
                            para executar a ER.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);
console.log(resultado);</code></pre>
                        </div>

                        <p>Se a ER casar com a string então a variável <code>resultado</code> conterá um array com a parte que casou, mas apenas a primeira
                            ocorrência.</p>

                        <p>Se olharmos mais atentamente poderemos observar que a função <code>math()</code> não apenas retorna um array como também um objeto
                            (arrays são objetos em JS).</p>

                        <p>A janela do Firebug mostra o sinal "+" se clicar em cima dele o objeto se expandirá conforme a figura abaixo:</p>

                        <div class="bs-example ">
                            <img class="img-rounded" alt="### match-resultado" src="match-resultado.png" />
                        </div>

                        <p>O valor da variável <code>resultado</code> na verdade é:</p>

                        <pre><code class-language-javascript>resultado[0] = string "casa"
resultado['index'] = 19
resultado['input'] = ""Casa com a palavra exemplo.""
</code></pre>

                        <p><code>resultado[0]</code> é o array retorando pela função, ele contém o valor da parte que casou.</p>

                        <p><code>resultado['index']</code> é um inteiro, ele indica a primeira posição dentro da string que coincidiu com o valor procurado.</p>

                        <p><code>resultado['input']</code> é a string original onde procuramos o nosso fragmento.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="nao-casou">Se a expressão não casar</h1>
                        </div>

                        <p>Neste caso, o valor da variável <code>resultado</code> será apenas <code>null</code></p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /não existe/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);
console.log(resultado);</code></pre>
                        </div>

                        <pre><code>resultado = null;</code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="sintax-errada">Se a expressão estiver sintaticamente errada</h1>
                        </div>

                        <p>Se executarmos o código abaixo, ele falhará. Eu coloquei um ( a mais.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    <em>pattern = /(exemplo/,</em>
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);
console.log(resultado);</code></pre>
                        </div>

                        <p>A execução do código será interrompida, o Firebug mostra a seguinte mensagem:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### match-ero" src="match-erro.png" />
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="code">Código</h1>
                        </div>

                        <p>Quando a expressão casa com uma parte do texto, ou seja, quando encontramos algo na string de pesquisa, a função retorna
                            um objeto com alguma prorpiedade (como visto no início da matéria).</p>

                        <p>Como, então, faremos para checar se o obtevemos sucesso ou não?</p>

                        <p>Bom, ao especionarmos o valor da variável <code>resultado</code> ela retorna primeiro o array, conforme trecho abaixo:</p>

                        <pre><code>resultado = ['exemplo'];</code></pre>

                        <p>As demais propriedades ainda estão disponíveis, veja:</p>

                        <pre><code>console.log(resultado[0])       // exibibe 'string "casa"'
console.log(resultado['index']) // exibibe 19
console.log(resultado['input']) // exibibe 'string "Casa com a palavra exemplo"'
</code></pre>

                        <p>Caso a expressão não case, então o resultado será null, logo, nosssa lógia poderá ficar como mostrado abaixo:</p>

                        <pre><code>se casou então
    print "casou"
senão
    print "não casou"
</code></pre>

                        <p>E o nosso código ficará como se segue:</p>

                        <div class="code">
                            <h6>JS - código final</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}</code></pre>
                        </div>

                        <p>Lembre-se que se a expressão estiver sintaticamente errada ela interromperá a excução do script, logo, o uso dos blocos
                            de tratamento de erro (<code>try cath</code>) se faz necessário.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
$pattern   = "/exemplo/";
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);

if ($resultado === 1) {
    print "casou";
    var_dump($retorno);

} else if ($resultado === 0) {
    print "não casou";
    var_dump($retorno);

} elseif ($resultado === false) {
    print "ocorreu um erro";

}
?&gt;</code></pre>
                        </div>
                    </div>

                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_ER][Core::CATEGORIA_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->paginas, Core::SECAO_ER, Core::CATEGORIA_CURSO);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
