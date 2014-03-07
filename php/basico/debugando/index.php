<?php
/**
 * PHP
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/php/basico/debugando/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Debugando seus scripts em PHP');
        $core->head->setDescription('Aprenda a debugar o código PHP utilizando var_dump() e x-debug. São formas rudimentares de debugação, porém sempre presente no dia a dia do programador.');
        $core->head->setkeywords('debugando código, depurando código, x-debug, var_dump, var_dump()');
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
                <h1>Debugando (depurando)</h1>
                <p>O primeiro passo para quem precisa "investigar" o que o computador está executando.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">10/04/2013</span>, escrito em <span class="label label-info">10/04/2013</span>.
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
                                <a href="#intro">Introdução</a>
                            </li>
                            <li>
                                <a href="#var-dump">var_dump()</a>
                            </li>
                            <li>
                                <a href="#x-debug">x-debug</a>
                                <ul class="nav">
                                    <li><a href="#sem-x-debug-instalado">Caso você não tenha o x-debug instalado</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#valor-da-variavel">Mas eu só queria ver o valor de uma variável?</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Introdução</h1>
                        </div>

                        <p>Debugar é um esforço para encontrar determinado ponto (às vezes vários pontos) "defeituoso" no código para que seja
                            corrigido.</p>

                        <p>Ao sentar-se na frente do computador para codificar (seja lá o que for) o desenvolvedor estabelece, ou deveria estabelecer,
                            uma conversa com o computador e seu código fonte:</p>

                        <pre><code class="no-highlight">dev: E aí computer, me mostre o VALOR da variável "resultado".

cpu: Ok, mas parece que não está retornando nada, veja o valor que ela contém... "".

O dev para e pensa um pouco: Qual será o tipo do dado, pois o valor não está ajudando muito.

dev: Computer, mostre-me agora TIPO de dado da variável "resultado".

cpu: string(0)

O dev novamente reflexivo: O valor é "", o tipo é string. Acho que vou "parar" em outro ponto...
</code></pre>

                        <p>Esse é o processo de depuração: ir parando em determinados pontos do código fonte e pedir para o computador mostrar o
                            que vai em sua memória.</p>

                        <p>Na verdade essa é a forma mais rudimentar de depuração, porém é bastante eficaz.</p>

                        <p>Em PHP, podemos simplesmente pedir para o script mostrar o valor de determinada variável.</p>

                        <pre><code>$minha_var = "qualquer coisa";
echo $minha_var;
</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Debugando com echo" src="debug-echo.png" />
                            <p>Ilustração de como é exibido os dados SEM var_dump()</p>
                        </div>

                        <p>O echo mostrará apenas o valor da variável e não mostrará outras informações como, por exemplo, o tipo de dado.</p>

                        <p>Seria muito útil dar mais dicas além do simples valor da variável.</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="var-dump">var_dump()</h1>
                        </div>

                        <p>Para contornar isso, o php conta com a função "var_dump()";</p>

                        <p>Devemos pasar como parâmetro a variável a ser analisada.</p>

                        <pre><code>$minha_var = "qualquer coisa";
var_dump($minha_var);
</code></pre>

                        <p>E dependendo do seu objetivo, devemos interromper o scritpt, para isso usamos a função "die()";</p>

                        <pre><code class="language-php">$minha_var = "qualquer coisa";
var_dump($minha_var);
die();
...mais códigos
</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Debugando com var_dump()" src="debug-var_dump.png" />
                            <p>Ilustração de como é exibido os dados COM var_dump()</p>
                        </div>

                        <p>É possível passar n variáveis, basta separá-las por vírgula.</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="x-debug">x-debug()</h1>
                        </div>

                        <p>Para se beneficiar 100% da função var_dump() devemos ter instalado o programa x-debug.</p>

                        <p>Veja a matéria <a href="http://www.devfuria.com.br/php/basico/instalando-o-ambiente/" title="Matéria">Instalando o Ambiente no estilo NEXT, NEXT, NEXT.</a>
                            para saber como instalá-lo.</p>

                        <p>O x-debug vai exibir o resultado de uma forma mais legível.</p>

                        <p>Obviamente, não é só essa a função do x-debug, ele faz muito mais do que isso, inclusive pode ser integrado a IDE Netbeans
                            e outras "pequeñas cosas".</p>

                        <p>Caso o seu script gere um erro me tempo de excução o x-debug mostra-rá o rastro que seu script deixou. Dá para ver o caminho
                            percorrido e, dessa forma, facilita-rá a depuração.</p>

                        <p>Nesse caso, ele trás várias informações e leitor deve acostumar-se a "extrair" essas informações.</p>

                        <div class="bs-example">
                            <img class="img-rounded img-responsive" alt="### ###Debugando com echo" src="debug-erro.png">
                            <p>Erro exibido pelo x-debug!</p>
                        </div>

                        <ol>
                            <li>Temos o tipo de erro: Warning</li>
                            <li>O erro propriamente dito: Division by zero.</li>
                            <li>O script na qual ocorreu o erro</li>
                            <li>A linha desse script</li>
                            <li>O Call Stack, que mostra a senquência de executação, o tempo levado e a memória utilizada.</li>
                        </ol>

                        <p>São informações valiosas para quem está debugando.</p>

                        <p>Ele é uma "mão na roda", depois que você se acostuma, não consegue mais viver sem ele.</p>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="sem-x-debug-instalado">Caso você não tenha o x-debug instalado</h3>
                            </div>

                            <p>Há uma saída simples, mas cansa ficar digitando isso sempre.</p>

                            <p>Por essa razão, considero ser uma saída paliativa. Ótima opara quando não possui ( ou não pode ter ) o x-debug instalado.</p>

                            <p>Normalmente o ambiente de produção não possui o x-debug instalado, então lanço mão do seguinte código:</p>

                            <pre><code>$minha_var = "qualquer coisa";
echo "&lt;pre&gt;";
print_r($minha_var);
echo "&lt;/pre&gt;";
</code></pre>

                            <p>O código acima utiliza a função print_r(), que já melhora um pouco a apresentação, junto com as tag HTML &lt;pre&#62;&lt;/pre&#62;.
                                Essas tag's exibem os dados na forma que ele é disposto.</p>

                            <p>Juntos, o print_r() e a tag &lt;pre&#62;, tornam o resultado bastante legível.</p>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="valor-da-variavel">Mas eu só queria ver o valor de uma variável!!!</h1>
                        </div>

                        <p>O nosso exemplo é bem simples e talvez o leitor não tenha notado o quanto é importante essa questão da exibição.</p>

                        <p>Mas quando você estiver debugando valores de uma array, por exemplo, você irá se lembrar dessa matéria.</p>

                        <p>Apenas para ilustrar, tente executar os código abaixo:</p>

                        <pre><code>echo $_SERVER;
</code></pre>

                        <p>Agora experimente:</p>

                        <pre><code>var_dump($_SERVER);
</code></pre>

                        <p>Caso não tenha o x-debug instalado, use:</p>

                        <pre><code class="language-php">echo "&lt;pre&gt;";
print_r($_SERVER);
echo "&lt;/pre&gt;";
</code></pre>

                        <p>E aí, sentiu a diferença?</p>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_PHP]);
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
