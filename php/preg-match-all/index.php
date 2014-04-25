<?php
/**
 * preg-match-all
 *
 */
require "../../core/boot.php";
$pagina = $model->getPagina("/php/arrays-funcoes-basicas/");
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
                        <!--<h1><?php #echo $pagina->titulo                  ?></h1>-->
                        <h1>preg_match_all()</h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section" id="array_pop">

                        <pre><code class="language-php">$resultado = preg_match_all($pattern, $subject, $matches, $flags, $offset);</code></pre>

                        <p>
                            A função <code>preg_match_all()</code> relaciona <strong>todas</strong> as ocorrências
                            (<code>$matches</code>) de um padrão (<code>$pattern</code>) em uma string (<code>$subject</code>).&nbsp;
                            A ordem do array resultado (<code>$matches</code>) é influenciado pelo 4&ordm; parâmetro (<code>$flags</code>).
                        </p>

                        <p>
                            O 5&ordm parâmetro (<code>$offset</code>) indica em que lugar, na string de pesquisa (<code>$subject</code>),
                            a pesquisa deve iniciar.
                        </p>


                        <blockquote>
                            <p><small>Fonte: Gilmore (Dominando PHP e MYSQL, pag. 164)</small></p>
                        </blockquote>

                    </div>


                    <div class="bs-docs-section" id="array_pop">
                        <div class="page-header">
                            <h2>Protótipo</h2>
                        </div>

                        <pre><code class="language-php">int preg_match_all (
                string $pattern,
                string $subject
                [, array &$matches
                [, int $flags = PREG_PATTERN_ORDER [, int $offset = 0 ]]]
            )</code></pre>



                        <h3>pattern</h3>

                        <p>The pattern to search for, as a string.</p>

                        <h3>subject</h3>

                        <p>The input string</p>

                        <h3>matches</h3>

                        <p>Array of all matches in multi-dimensional array ordered according to flags</p>

                        <h3>flags</h3>

                        <p>A ordem do array resultado (<code>$matches</code>) é influenciado pelo 4 parâmetro, que pode ser:</p>

                        <p>Quando omitido, o valor pardão é <code>PREG_PATTERN_ORDER</code>.</p>

                        <ul>
                            <li>
                                PREG_PATTERN_ORDER
                                <p><code>$matches[0]</code> será um array com todas as ocorrências.</p>
                                <p><code>$matches[1]</code> será um array com todas as ocorrências que combina com a primeira expressão em parênteses.</p>
                                <pre><code class="language-php">$pattern = "|<[^>]+>(.*)</[^>]+>|U";
$subject = "&lt;b&gt;example: &lt;/b&gt;&lt;div align=left&gt;this is a test&lt;/div&gt;";
$resultado = preg_match_all($pattern, $subject, $matches, PREG_PATTERN_ORDER);

echo $matches[0][0] . ", " . $matches[0][1] . "\n";
echo $matches[1][0] . ", " . $matches[1][1] . "\n";</code></pre>

                            </li>
                            <li>
                                PREG_SET_ORDER
                                <p><code>$matches[0]</code> será um array com elementos realcionados pela primeira expressão regular entre parênteses.</p>
                                <p><code>$matches[1]</code> será um array com elementos realcionados pela segunda expressão regular entre parênteses.</p>
                                <pre><code class="language-php">$resultado = preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);</code></pre>
                            </li>
                        </ul>



                        <h3>offset</h3>

                        <p>
                            O 5&ordm parâmetro (<code>$offset</code>) indica em que lugar, na string de pesquisa (<code>$subject</code>),
                            a pesquisa deve iniciar.
                        </p>                        

                        <blockquote>
                            <p>
                                <small>
                                    Fonte:
                                    <a href="http://www.php.net/manual/pt_BR/function.preg-match-all.php" title="link-externo">
                                        Manual do PHP - preg-match-all
                                    </a>

                                </small>
                            </p> 
                        </blockquote>                        

                    </div>


                    <div class="bs-docs-section" id="array_pop">
                        <div class="page-header">
                            <h2>Exemplo</h2>
                        </div>
                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
$subject = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern = "/ca.a/";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match_all($pattern, $subject, $retorno);

if ($resultado >= 1) {

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

                    </div><!-- Corpo da matéria -->
                </div><!-- row -->
            </div><!-- Matéria -->
            <?php include BASE_PATH . VIEWS_PATH . "/rtg/footer.php"; ?>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>