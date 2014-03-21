<?php
/**
 * PHP preg match all, preg-match-all, preg_math_all()
 * expressões regulares, preg_math_all(), pre_match_all, preg match all, preg, match, all
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/regexp/basico/varios-resultados-preg-match-all/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo?></h1>
                <p>Dissecando a função do PHP</p>
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
                            <li>
                                <a href="#quando">Quando precisamos dela?</a>
                            </li>
                            <li>
                                <a href="#preg-match-all">preg&#95;math&#95;all()</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="quando">Quando precisamos dela?</h1>
                        </div>

                        <p>Se olharmos o primeiro exemplo da matéria anterior:</p>

                        <pre><code>assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
regexp: "/ca.a/"
</code></pre>

                        <p>Notamos que a ER casa com mais de um resultado.</p>

                        <p><strong>Como trabalhamos com mais de um resultado?</strong> Bom, vejamos o código...</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
$subject   = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern   = "/ca.a/";
$retorno = array();

# Executa nossa expressão
<em>$resultado = preg_match($pattern, $subject, $retorno);</em>

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

                        <p>...podemos notar que o resultado retornado pela função <code>preg&#95;math()</code> foi o primeiro valor que casou no caso a sttring "casa",
                            veja a figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### apenas o primeiro resultado" src="php-preg-math.png" />
                        </div>

                        <p>Mas, se observarmos o exemplo lá no começo da matéria, a expressão casa com outras partes da string:</p>

                        <pre><code>"casa, cana, cama, casa, cava"
</code></pre>

                        <p>Como fazer para obter esse resultados?</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="preg-match-all">preg&#95;math&#95;all()</h1>
                        </div>


                        <p>Uma saída é utilizar a função <code>preg&#95;math&#95;all()</code>, ela carregará a varirável <code>$retorno</code> com todos os resultados possíveis,
                            veja a figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### todos os resultados" src="php-preg-math-all.png" />
                        </div>

                        <p>Segue o código alterado para a função <code>preg&#95;math&#95;all()</code>:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
$subject   = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern   = "/ca.a/";
$retorno = array();

# Executa nossa expressão
<em>$resultado = preg_match_all($pattern, $subject, $retorno);</em>

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

                        <p>Obsever que eu também alterei o "primeiro if" de:</p>

                        <pre><code>if ($resultado === 1) {</code></pre>

                        <p>para:</p>

                        <pre><code>if ($resultado &gt;= 1) {</code></pre>

                        <p>Isso se deve ao fato de que a função <code>preg&#95;math&#95;all()</code> retorna um número inteiro com a quantidade de ocorrências
                            encontradas, no exemplo o valor da variável <code>$resultado</code> é igual a 5 (pois temos cinco resultados).</p>

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
                                    <a href="http://www.php.net/manual/pt_BR/function.preg-match-all.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP (preg-match-all)</h4>
                                        <p class="list-group-item-text">Para saber mais, inclusive sobre os demais parâmetros não comentados, veja a documentação oficial.</p>
                                        <span class="label label-default">http://www.php.net/manual/pt_BR/function.preg-match-all.php</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/cursos/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>