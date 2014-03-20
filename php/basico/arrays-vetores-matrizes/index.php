<?php
/**
 * PHP
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/php/basico/arrays-vetores-matrizes/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $conteudo->head->setTitle('Arrays em PHP');
        $conteudo->head->setDescription('Aprenda o básico de arrays em PHP, veremos como criar, iterar(foreach e while) e funções internas como "explode" e "implode".');
        $conteudo->head->setkeywords('array, array associativo, vetores, matrizes, arrays; explode; implode; array_in, foreach');
        $conteudo->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $conteudo->navtop->secao_ativa = Conteudo::SECAO_PHP;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Arrays</h1>
                <p>Como criar, iterar(foreach e while) e funções internas como "explode" e "implode".</p>
                <p></p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">31/01/2014</span>, escrito em <span class="label label-info">31/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#conceito">Conceito</a></li>
                            <li>
                                <a href="#criando">Criando</a>
                            </li>
                            <li>
                                <a href="#criando-dinamicamnete">Criando dinâmicamente</a>
                            </li>
                            <li>
                                <a href="#espec-chaves">Especificando as chaves</a>
                            </li>
                            <li>
                                <a href="#array-numerico">Array numérico</a>
                            </li>
                            <li>
                                <a href="#array-associativo">Array associativo</a>
                            </li>
                            <li>
                                <a href="#iterando">Iterando</a>
                            </li>
                            <li>
                                <a href="#funcoes-internas">Funções internas</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="conceito">Conceito</h1>
                        </div>

                        <blockquote>
                            <p>Um array no PHP é atualmente um mapa ordenado. Um mapa é um tipo que relaciona valores
                                para chaves. Este tipo é otimizado de várias maneiras, então você pode usá-lo como um
                                array real, ou uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário,
                                coleção, pilha, fila e provavelmente mais. Como você pode ter outro array PHP como um
                                valor, você pode facilmente simular árvores.</p>
                            <p><small>Fonte: <a href="http://php.net/manual/pt_BR/language.types.array.php">Manual do PHP</a></small></p>
                        </blockquote>

                        <p>O conceito da array em PHP é igual em outras linguages, o índice do primeiro valor é zero.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Figura ilustrando as chaves de um array" src="indice-zero.jpeg">
                            <p>
                                <a href="http://www.linhadecodigo.com.br/artigo/3444/arrays-em-csharp-teoria-e-pratica.aspx" title="link-externo" class="img-responsive">Fonte da Imagem</a>
                            </p>
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="criando">Criando</h1>
                        </div>

                        <p>Criando um array vazio.</p>

                        <pre><code class="language-php">$arr = array();</code></pre>

                        <p>Se executarmos <code>var_dump($arr);</code> veremos que o array está vazio.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array00" src="array00.png">
                        </div>


                        <p>Criando um array com valores conhecidos</p>

                        <pre><code class="language-php">$arr = array(10, 11, 12, 13);</code></pre>

                        <p>Resultado</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array01" src="array01.png">
                        </div>


                        <p>Outro exemplo.</p>

                        <pre><code class="language-php">$arr = array("melancia", "banana", "laranjas", "abacates");</code></pre>

                        <p>Quando o array acima cresce e fica grande demais para caber em 120 colunas temos como opção
                            a forma abaixo.</p>

                        <pre><code class="language-php">$arr = array(
    "melancia",
    "banana",
    "laranjas",
    "abacates"
);</code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="criando-dinamicamnete">Criando dinâmicamente</h1>
                        </div>

                        <p>Essa é uma forma interessante, simplesmente vamos atribuindo valores ao array.</p>

                        <pre><code class="language-php">$arr = array();
$arr[] = 10;
$arr[] = 11;
$arr[] = 12;
$arr[] = 13;
</code></pre>
                        <p>A função interna do PHP <code>array_push</code> ilustrada abaixo faz exatamente o mesmo
                            que o código acima.</p>

                        <pre><code class="language-php">$arr = array();
array_push($arr, 10);
array_push($arr, 11);
array_push($arr, 12);
array_push($arr, 13);
</code></pre>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="espec-chaves">Especificando as chaves</h1>
                        </div>

                        <p>Podemos especificar as chaves do array no momento da criação.</p>

                        <pre><code class="language-php">$arr = array(
    "nome" => "Paulo Silva",
    "rua" => "Rua 25 de Março",
    "bairro" => "Centro",
    "cidade" => "São Paulo"
);</code></pre>
                        <p>O array acima é ilustrado abaixo.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array02" src="array02.png">
                        </div>

                        <p>Outro exemplo</p>

                        <pre><code class="language-php">$arr = array(
    100 => "Primeiro item",
    101 => "Segundo item",
    102 => "Terceiro item",
    103 => "Quarto item"
);</code></pre>
                        <p>Resultado:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array03" src="array03.png">
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="array-numerico">Array numérico</h1>
                        </div>

                        <p>Um array é dito numérico quando as chaves (key) são inteiros.</p>

                        <pre><code class="language-php">$arr = array(
    0 => "vermelha",
    1 => "doce",
    2 => "redonda",
    3 => "maçã"
);</code></pre>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="array-associativo">Array associativo</h1>
                        </div>

                        <p>Um array é dito associativo quando as chaves (key) são strings.</p>

                        <pre><code class="language-php">$arr = array(
    "cor" => "vermelha",
    "sabor" => "doce",
    "formato" => "redonda",
    "nome" => "maçã"
);</code></pre>

                        <p>Também dá para fazer o array misto (associativo e numérico)</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="iterando">Iterando</h1>
                        </div>

                        <p>Tomando o último array como exemplo:</p>

                        <pre><code class="language-php">$arr = array(
    "cor" => "vermelha",
    "sabor" => "doce",
    "formato" => "redonda",
    "nome" => "maçã"
);</code></pre>

                        <p>Para percorrer(iterar) esse array e imprimir os resultado usamos o laço<code>foreach</code></p>

                        <h3>foreach(só os valores)</h3>

                        <pre><code class="language-php">foreach($arr as $valor) {
    var_dump($valor);
}</code></pre>
                        <p>Resultado:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array04" src="array04.png">
                        </div>

                        <h3>foreach(os valores e as chaves)</h3>

                        <pre><code class="language-php">foreach($arr as $chave => $valor) {
    var_dump($chave. " - " . $valor);
}</code></pre>
                        <p>Resultado:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array05" src="array05.png">
                        </div>

                        <h3>Iterando com while</h3>

                        <p>Tanto...</p>

                        <pre><code class="language-php">while ($cad_pos = current($arr)) {
    $key = key($arr);
    var_dump("$key - " . $posicoes[$key]);
    next($arr);
}</code></pre>

                        <p>...quanto:</p>

                        <pre><code class="language-php">while ($cad_pos = current($arr)) {
    $key = key($arr);
    var_dump("$key - " . $cad_pos);
    next($arr);
}</code></pre>

                        <p>Chegam no mesmo resultado:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array05" src="array05.png">
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="funcoes-internas">Funções internas</h1>
                        </div>

                        <h3>array_pop</h3>

                        <p>Para remover um valor no final do array:</p>

                        <pre><code class="language-php">array_pop($arr, "valor");</code></pre>

                        <h3>array_shift</h3>

                        <p>Para remover um elemento do início do array:</p>

                        <pre><code class="language-php">array_shift($arr);</code></pre>

                        <h3>array_unshift</h3>

                        <p>Adiciona um elemento no início do array:</p>

                        <pre><code class="language-php">array_unshift($arr, "valor");</code></pre>

                        <h3>unset</h3>

                        <p>Para remover determinado elemento do array:</p>

                        <pre><code class="language-php">unset($arr[5]);</code></pre>

                        <p>Para remover o array da memória:</p>

                        <pre><code class="language-php">unset($arr);</code></pre>

                        <h3>array_in</h3>

                        <p>Verifica se o array contém um determinado valor:</p>

                        <pre><code class="language-php">array_in($arr, "valor");</code></pre>

                        <h3>count</h3>

                        <p>Retorna a quantidade de elementos de um array:</p>

                        <pre><code class="language-php">count($arr);</code></pre>

                        <h3>explode</h3>

                        <p>Transforma string em array.</p>

                        <pre><code class="language-php">$arr = array();
$arr = explode("/", "20/01/2001");
var_dump($arr);</code></pre>

                        <p>Resultado.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array06" src="array06.png">
                        </div>

                        <h3>implode</h3>

                        <p>Tansforma array em string.</p>

                        <pre><code class="language-php">$arr = array("Flavio", "Alexandre", "Micheletti");
$nomeCompleto = implode("-", $arr);
var_dump($nomeCompleto)</code></pre>

                        <p>Resultado.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array07" src="array07.png">
                        </div>
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
                                    <a href="http://php.net/manual/pt_BR/language.types.array.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manula do PHP</h4>
                                        <p>Falando sobre arrays</p>
                                        <span class="label label-default">http://php.net/manual/pt_BR/language.types.array.php</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $conteudo->paginacao->link_ativo = $url;
                    $conteudo->paginacao->descobrirAnteriorProxima($conteudo->paginas[Conteudo::SECAO_PHP][Conteudo::CATEGORIA_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $conteudo->lista->setLinks($conteudo->paginas, Conteudo::SECAO_PHP, Conteudo::CATEGORIA_CURSO);
        $conteudo->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
