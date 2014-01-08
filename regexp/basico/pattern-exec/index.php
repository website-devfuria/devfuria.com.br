<?php
/**
 * RegExp
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
        $core->head->setTitle('pattern.exec()');
        $core->head->setDescription('Dissecando a função pattern.exec() do JS. O método exec() executa uma pesquisa para um resultado em uma seqüência especificada. Retorna uma matriz de resultados, ou nulo.');
        $core->head->setkeywords('expressões regulares, spattern.exec(), pattern.exec');
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
                <h1>pattern.exec()</h1>
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
                        
                        <p>A função <code>exec()</code> em JS possue a sintaxe parecida com a função <code>test()</code> porém o resultado é idêntico a função <code>match()</code>.</p>

                        <p>A forma <code>pattern.exec()</code> onde "pattern" é expressão regular, "exec()" é a função que evocamos
                            para executar a ER e o parâmetro 'string passado na função é a nosso texto de pesquisa (assunto).</p>

                        <p>Também é uma forma bastante usual e comentada.</p>

                        <p>Viu? A sintaxe é parecida com a função <code>test()</code>, já os resultado é parecido com a função <code>match()</code>.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.exec(string);
console.log(resultado);</code></pre>
                        </div>

                        <p>O texto, daqui para baixo, é idêntido ao da matéria <a href="../../basico/string-match" title="Matéria da função string.match()">string-match</a>.
                            Estou repetindo caso você tenha chegado por aqui diretamente e ainda não leu as matérias anteriores.</p>

                        <p>Se a ER casar com a string então a variável <code>resultado</code> conterá um array com a parte que casou, mas apenas a primeira
                            ocorrência.</p>

                        <p>Se olharmos mais atentamente poderemos observar que a função <code>exec()</code> não apenas retorna um array como também um objeto
                            (arrays são objetos em JS).</p>

                        <p>A janela do Firebug mostra o sinal "+" se clicar em cima dele o objeto se expandirá conforme a figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" src="exec-resultado.png" alt="### exec-resultado" />
                        </div>

                        <p>O valor da variável <code>resultado</code> na verdade é:</p>

                        <pre><code>resultado[0] = string "casa"
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
resultado = pattern.exec(string);
console.log(resultado);</code></pre>
                        </div>

                        <pre><code>resultado = null;</code></pre>

                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="sintax-errada">Se a expressão estiver sintaticamente errada</h1>
                        </div> 

                        <p>Se executarmos o código abaixo, ele falhará. Eu coloquei um <code>(</code> a mais.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    <em>pattern = /(exemplo/,</em>
    resultado;

// Executa nossa expressão
resultado = pattern.exec(string);
console.log(resultado);</code></pre>
                        </div>

                        <p>A execução do código será interrompida, o Firebug mostra a seguinte mensagem:
                        <div class="bs-example">
                            <img class="img-rounded" src="exec-erro.png" alt="### exec-resultado" />
                        </div></p>

                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="code">Código</h1>
                        </div>

                        <p>Quando a expressão casa com uma parte do texto, ou seja, quando encontramos algo na string de pesquisa, a função retorna
                            um objeto com alguma prorpiedade (como visto no início da matéria).</p>

                        <p>Como, então, faremos para checar se o obtevemos sucesso ou não?</p>

                        <p>Bom, ao especionarmos o valor da variável <code>resultado</code> ela retorna primeiro o array, conforme trecho abaixo:</p>

                        <pre><code class="language-javascript">resultado = ['exemplo'];</code></pre>

                        <p>As demais propriedades ainda estão disponíveis, veja:</p>

                        <pre><code class="language-javascript">console.log(resultado[0])       // exibibe 'string "casa"'
console.log(resultado['index']) // exibibe 19
console.log(resultado['input']) // exibibe 'string "Casa com a palavra exemplo"'
</code></pre>

                        <p>Caso a expressão não case, então o resultado será null, logo, nosssa lógia poderá ficar como mostrado abaixo:</p>

                        <pre><code class="language-javascript">se casou então
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
                            de tratamento de erro (try cath) se faz necessário.</p>
                        <?php
                        $core->paginacao->link_ativo = "/regexp/basico/pattern-exec/";
                        $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_ER]);
                        include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                        ?>                        
                        
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>RegExp</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_ER);
                        $core->lista->link_ativo = "/regexp/basico/pattern-exec/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
