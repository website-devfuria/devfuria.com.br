<?php
/**
 * Recebendo dados via GET e POST
 * Matéria de php sobre as variáveis globais $_GET e $_POST.
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/php/basico/recebendo-dados-via-get-post/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo?></h1>
                <p>Estamos no lado do servidor recebendo os dados das requisições</p>
                <p>GET e POST</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#get-post">Apresento-lhes GET/POST!</a></li>
                            <li>
                                <a href="#sem-requisicao">Sem requisição</a>
                            </li>
                            <li>
                                <a href="#key-nao-existe">Quando a key(chave) não existe</a>
                            </li>
                            <li>
                                <a href="#checando">Checando o valor</a>
                            </li>
                            <li>
                                <a href="#op-ternario">Incializando com operador ternário</a>
                            </li>
                            <li>
                                <a href="#duplicando-variaveis">Duplicando as variáveis</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="get-post">Senhoras e senhores, apresento-lhes o GET e o POST!</h2>
                        </div>

                        <p><code>$_GET</code> e <code>$_POST</code> são variáveis globais, você poderá utilizá-las em
                            qualquer parte do código.</p>

                        <p>Adivinha quando você usa uma ou outra?</p>

                        <p>Quando a requisição for GET usaremos <code>$_GET</code>.</p>

                        <p>Quando a requisição for POST usaremos <code>$_POST</code>.</p>

                        <p>Ambas são do tipo <strong>array</strong>.</p>

                        <h3 id="sem-requisicao">Sem requisição</h3>

                        <p>Se executarmos o script abaixo, veremos o resultado <code>array empty</code>, quer dizer
                            não houve requisição alguma.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

var_dump($_GET, $_POST);

?&gt;</code></pre>
                        </div>

                        <p>A requisição acontece com um grupo de pares <code>nome=valor</code>.</p>

                        <p>Se a requisição fosse via POST teriamos</p>

                        <pre><code class="language-php">$_POST['nome'] = valor</code></pre>

                        <p>e se fosse via GET teríamos </p>

                        <pre><code class="language-php">$_GET['nome'] = valor</code></pre>


                        <h3 id="key-nao-existe">Quando a key(chave) não existe</h3>

                        <p>Quando executamos o script abaixo sem os devidos paramêtros...</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

echo $_GET['foo'];

?&gt;</code></pre>
                        </div>

                        <p>...recebemos um erro:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="undefined-index.png">
                        </div>

                        <p>E aí? Já sabe identificar o erro? O indice do array não foi definido (<strong>Undefined Index</strong>).</p>

                        <p>Quer dizer, estamos querendo utilizar um índice de um array que ainda não foi definido (inicializado).</p>


                        <h3>Checando se o valor "chegou" ou não com <code>isset()</code></h3>

                        <p>A função <code>isset()</code> nos diz se determinada variável foi inicializada ("setada").</p>

                        <p>Traduzindo "is set" ao pé da letra (tradução tupiniquim) seria "está setado" ou melhor foi inicializado.</p>

                        <p>A função testa variáveis e também chaves associativas de arrays, então podemos utilzá-la
                            da seguinte forma.</p>

                        <pre><code class="language-php">if(isset($_POST['foo'])) {
    echo $_POST['foo'];
}
</code></pre>

                        <p>Prejuízos: uma linha de código virou 3 e ligiramente menos legível.</p>

                        <p>Um programador "expertinho" faria isso:</p>

                        <pre><code class="language-php">if(isset($_POST['foo'])) { echo $_POST['foo']; }</code></pre>

                        <p>Voltamos a 1 única linha, mas a legibilidade "foi pro saco".</p>



                        <h3 id="op-ternario">Incializando com operador ternário <code>(expressão) ? true : false ; </code></h3>

                        <p>Uma variável pode ser inicaliza com o valor <code>null</code>, exemplo:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

$_POST['foo'] = null;
echo $_POST['foo'];

?&gt;</code></pre>
                        </div>

                        <p>O código acima evitaria o erro <strong>undefined index</strong>, mas ele não faz sentido.
                            Ele sobrescreviria o valor passado na requisição.</p>

                        <p>Mas derrepente surge a seguinte idéia:</p>

                        <pre><code class="language-php">if(isset($_POST['foo'])) {
    # retornar o valor da variável
} else {
    # retornar null
}
</code></pre>

                        <p>Seria ótimo, mas agora temos 5 linhas. Neste caso poderemos utilizar o operador ternário <code>(expressão) ? true : false ;</code>.</p>

                        <pre><code class="language-php">echo ( isset($_POST['foo']) ) ? "retornar o valor da variável" : "retornar null";</code></pre>

                        <p>Trocando as strings por código real temos:</p>

                        <pre><code class="language-php">echo ( isset($_POST['foo']) ) ? $_POST['foo'] : null;</code></pre>

                        <p>Voltamos a uma única linha, mas se tivermos 2 pontos ou mais teremos que repetir esse trambolhão aí.</p>

                        <p>E se ao invés de dar <code>echo</code> atribuíssemos o valor (um dos resultado) na própria variável <code>$_POST['foo']</code>?</p>

                        <pre><code class="language-php">$_POST['foo'] = ( isset($_POST['foo']) ) ? $_POST['foo'] : null;</code></pre>

                        <p>Perfeito! Agora podemos dar <code>echo</code> a vontade.</p>

                        <p>O código final ficou assim:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

$_POST['foo'] = ( isset($_POST['foo']) ) ? $_POST['foo'] : null;
echo $_POST['foo'];

?&gt;</code></pre>
                        </div>

                        <p>Então <strong>podemos</strong> combinar o seguinte: no começo do script recebemos os dados e
                            ficamos tranquilo para utilizar no restante do script, veja:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

/*
 * Recebemos os dados no começo do script
 */
$_POST['laranja'] = ( isset($_POST['laranja']) ) ? $_POST['laranja'] : null;
$_POST['banana']  = ( isset($_POST['banana']) )  ? $_POST['banana']  : null;
$_POST['pera']    = ( isset($_POST['pera']) )    ? $_POST['pera']    : null;
$_POST['abacaxi'] = ( isset($_POST['abacaxi']) ) ? $_POST['abacaxi'] : null;

/*
 * Apartir deste ponto podemos utilizar o(s) array(s) sem medo
 */
echo $_POST['laranja'];
echo $_POST['banana'];
echo $_POST['pera'];
echo $_POST['abacaxi'];

?&gt;</code></pre>
                        </div>

                        <p>Economizamos algumas linhas sem prejudicar a legibilidade (leia-se limpeza) do código.</p>

                        <h3 id="duplicando-variaveis">Duplicando as variáveis</h3>

                        <p>Antigamente, a forma abaixo era muito usual.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

/*
 * Recebemos os dados no começo do script
 */
$laranja = ( isset($_POST['laranja']) ) ? $_POST['laranja'] : null;
$banana  = ( isset($_POST['banana']) )  ? $_POST['banana']  : null;
$pera    = ( isset($_POST['pera']) )    ? $_POST['pera']    : null;
$abacaxi = ( isset($_POST['abacaxi']) ) ? $_POST['abacaxi'] : null;

/*
 * Apartir deste ponto podemos utilizar as variáveis sem medo
 */
echo $laranja;
echo $banana;
echo $pera;
echo $abacaxi;

?&gt;</code></pre>
                        </div>

                        <p>Mas ele duplica as variáveis.</p>

                        <p>O sabora da laranja está tanto em <code>$_POST['laranja']</code> como em <code>$laranja</code>.</p>

                        <pre><code class="language-php">echo $_POST['laranja'];
echo $laranja</code></pre>

                        <p>Termemos o mesmo resultado.</p>

                        <p>Se duplicar variáveis não for um problema para você então para mim também não é.</p>


                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h2>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://www.php.net/manual/en/reserved.variables.post.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP</h4>
                                        <p>Falando sobre <code>$_POST</code></p>
                                        <span class="label label-default">http://www.php.net/manual/en/reserved.variables.post.php</span>
                                    </a>
                                    <a href="http://php.net/manual/pt_BR/reserved.variables.get.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP</h4>
                                        <p>Falando sobre <code>$_GET</code></p>
                                        <span class="label label-default">http://php.net/manual/pt_BR/reserved.variables.get.php</span>
                                    </a>
                                    <a href="http://php.net/manual/pt_BR/language.operators.comparison.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP</h4>
                                        <p>Falando sobre o operador ternário <code>(boolean) ? true : false;</code></p>
                                        <span class="label label-default">http://php.net/manual/pt_BR/language.operators.comparison.php</span>
                                    </a>
                                    <a href="http://www.php.net/manual/pt_BR/function.isset.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP</h4>
                                        <p>Falando sobre a função <code>isset()</code></p>
                                        <span class="label label-default">http://www.php.net/manual/pt_BR/function.isset.php</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
