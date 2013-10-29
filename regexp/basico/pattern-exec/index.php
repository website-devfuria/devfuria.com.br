<?php
/**
 * PHP
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
        $core->head = new Head();
        $core->head->setTitle('REGEXP');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
        $core->navtop->secao = Core::SECAO_ER;
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
                Flávio Micheletti, atualizado em <span class="label label-warning">22/07/2013</span>, escrito em <span class="label label-warning">22/07/2013</span>.
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
                        
                        <p>A função <em>exec()</em> em JS possue a sintaxe parecida com a função <em>test()</em> porém o resultado é idêntico a função <em>match()</em>.</p>

                        <p>A forma <em>pattern.exec()</em> onde "pattern" é expressão regular, "exec()" é a função que evocamos
                            para executar a ER e o parâmetro 'string passado na função é a nosso texto de pesquisa (assunto).</p>

                        <p>Também é uma forma bastante usual e comentada.</p>

                        <p>Viu? A sintaxe é parecida com a função <em>test()</em>, já os resultado é parecido com a função <em>match()</em>.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = pattern.exec(string);
console.log(resultado);
                            </pre>
                        </div>

                        <p>O texto, daqui para baixo, é idêntido ao da matéria <a href="../../basico/string-match" title="Matéria da função string.match()">string-match</a>.
                            Estou repetindo caso você tenha chegado por aqui diretamente e ainda não leu as matérias anteriores.</p>

                        <p>Se a ER casar com a string então a variável <em>resultado</em> conterá um array com a parte que casou, mas apenas a primeira
                            ocorrência.</p>

                        <p>Se olharmos mais atentamente poderemos observar que a função exec() não apenas retorna um array como também um objeto
                            (arrays são objetos em JS).</p>

                        <p>A janela do Firebug mostra o sinal "+" se clicar em cima dele o objeto se expandirá conforme a figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-thumbnail" src="exec-resultado.png" alt="exec-resultado" />
                        </div>

                        <p>O valor da variável <em>resultado</em> na verdade é:</p>

                        <pre><code>resultado[0] = string "casa"
resultado['index'] = 19
resultado['input'] = ""Casa com a palavra exemplo.""
</code></pre>

                        <p><em>resultado[0]</em> é o array retorando pela função, ele contém o valor da parte que casou.</p>

                        <p><em>resultado['index']</em> é um inteiro, ele indica a primeira posição dentro da string que coincidiu com o valor procurado.</p>

                        <p><em>resultado['input']</em> é a string original onde procuramos o nosso fragmento.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="nao-casou">Se a expressão não casar</h1>
                        </div> 

                        <p>Neste caso, o valor da variável <em>resultado</em> será apenas <em>null</em></p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var string = "Casa com a palavra exemplo",
    pattern = /não existe/,
    resultado;

// Executa nossa expressão
resultado = pattern.exec(string);
console.log(resultado);
                            </pre>
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
                            <pre>
var string = "Casa com a palavra exemplo",
    <em>pattern = /(exemplo/,</em>
    resultado;

// Executa nossa expressão
resultado = pattern.exec(string);
console.log(resultado);
                            </pre>
                        </div>

                        <p>A execução do código será interrompida, o Firebug mostra a seguinte mensagem:
                        <div class="bs-example">
                            <img class="img-thumbnail" src="exec-erro.png" alt="exec-resultado" />
                        </div></p>

                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="code">Código</h1>
                        </div>

                        <p>Quando a expressão casa com uma parte do texto, ou seja, quando encontramos algo na string de pesquisa, a função retorna
                            um objeto com alguma prorpiedade (como visto no início da matéria).</p>

                        <p>Como, então, faremos para checar se o obtevemos sucesso ou não?</p>

                        <p>Bom, ao especionarmos o valor da variável <em>resultado</em> ela retorna primeiro o array, conforme trecho abaixo:</p>

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
                            <pre>
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
                            </pre>
                        </div>

                        <p>Lembre-se que se a expressão estiver sintaticamente errada ela interromperá a excução do script, logo, o uso dos blocos
                            de tratamento de erro (try cath) se faz necessário.</p>
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
