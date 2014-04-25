<?php
/**
 * 
 *
 *
 */
require "../../core/boot.php";
$pagina = $model->getPagina("/php/arrays-vetores-matrizes/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body class="receitas-body">
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="receitas-header" id="content">
                    <div class="container">
                        <h1><?php echo $pagina->titulo; ?></h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section" id="conceito">
                        <h3>Conceito</h3>

                        <blockquote>
                            <p>Um array no PHP é atualmente um mapa ordenado. Um mapa é um tipo que relaciona valores
                                para chaves. Este tipo é otimizado de várias maneiras, então você pode usá-lo como um
                                array real, ou uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário,
                                coleção, pilha, fila e provavelmente mais. Como você pode ter outro array PHP como um
                                valor, você pode facilmente simular árvores.</p>
                            <p>
                                <small>
                                    Fonte: <a href="http://php.net/manual/pt_BR/language.types.array.php" title="link-externo">Manual do PHP - arrays</a>
                                </small>
                            </p>
                        </blockquote>

                        <p>O índice do primeiro valor é zero.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Figura ilustrando as chaves de um array" src="indice-zero.jpeg">
                            <p>
                                <a href="http://www.linhadecodigo.com.br/artigo/3444/arrays-em-csharp-teoria-e-pratica.aspx" title="link-externo" class="img-responsive">Fonte da Imagem</a>
                            </p>
                        </div>


                    </div>

                    <div class="bs-docs-section" id="criando">
                        <div class="page-header">
                            <h2>Criando</h2>
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

                    <div class="bs-docs-section" id="criando-dinamicamnete">
                        <div class="page-header">
                            <h2>Criando dinâmicamente</h2>
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


                    <div class="bs-docs-section" id="especificando-chaves">
                        <div class="page-header">
                            <h2>Especificando as chaves</h2>
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

                    <div class="bs-docs-section" id="array-numerico">
                        <div class="page-header">
                            <h2>Array numérico</h2>
                        </div>

                        <p>Um array é dito numérico quando as chaves (key) são inteiros.</p>

                        <pre><code class="language-php">$arr = array(
    0 => "vermelha",
    1 => "doce",
    2 => "redonda",
    3 => "maçã"
);</code></pre>

                    </div>

                    <div class="bs-docs-section" id="array-associativo">
                        <div class="page-header">
                            <h2>Array associativo</h2>
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

                    <div class="bs-docs-section" id="iterando-com-foreach">
                        <div class="page-header">
                            <h2>Iterando com foreach</h2>
                        </div>

                        <p>Tomando o último array como exemplo:</p>

                        <pre><code class="language-php">$arr = array(
    "cor" => "vermelha",
    "sabor" => "doce",
    "formato" => "redonda",
    "nome" => "maçã"
);</code></pre>

                        <p>Para percorrer(iterar) esse array e imprimir os resultado usamos o laço<code>foreach</code>.</p>

                        <h3>foreach (array_expression as $value)</h3>

                        <pre><code class="language-php">foreach($arr as $valor) {
    var_dump($valor);
}</code></pre>
                        <p>Resultado:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array04" src="array04.png">
                        </div>

                        <h3>foreach (array_expression as $key => $value)</h3>

                        <pre><code class="language-php">foreach($arr as $chave => $valor) {
    var_dump($chave. " - " . $valor);
}</code></pre>
                        <p>Resultado:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### array05" src="array05.png">
                        </div>

                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/control-structures.foreach.php" title="link-externo">Manual do PHP - foreach</a>
                        </p>

                    </div>

                    <div class="bs-docs-section" id="iterando-com-while">
                        <div class="page-header">
                            <h2>Iterando com while</h2>
                        </div>

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

                        <p>
                            Fonte:
                            <a href="http://www.php.net/manual/pt_BR/control-structures.while.php" title="link-externo">Manual do PHP - while</a>
                        </p>

                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/rtg/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>