<?php
/**
 * RegExp
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/regexp/basico/preg-match/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('preg_match()');
        $core->head->setDescription('Dissecando a função preg_match() do PHP, método para expressão regular segundo o PCRE');
        $core->head->setkeywords('expressões regulares, preg_match(), preg_match');
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
                <h1>preg&#95;match()</h1>
                <p>Dissecando a função do PHP</p>
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

                        <p>A função preg&#95;match() refere-se a versão PCRE, versão compatível com PHP 5.3.</p>

                        <p>Para iniciarmos vamos utilizar o exemplo básico da matéria de introdução (<a href="../intro/">link</a>)</p>

                        <p>Temos a string original:</p>

                        <pre><code>"Casa com a palavra exemplo"</code></pre>

                        <p>E queremos encontrar a string:</p>

                        <pre><code>"exemplo"</code></pre>

                        <p>Esse exemplo é tão simples, que talvez você esteja se perguntando:</p>

                        <p>Porque não utilizar uma função qualquer para encontra a string?</p>

                        <p>Sim claro, você tem toda razão, mas vamos combinar o seguinte: nossos exemplos serão fácies (e talvez sem sentido prático)
                            apenas para facilitar seu aprendizado.</p>

                        <p>Em breve faremos voôs mais altos, ok? "Tudo a seu tempo".</p>

                        <p>Ela (a função) aceita 5 parâmetros, sendo os dois primeiros obrigatórios.</p>

                        <ol>
                            <li><p>O primeiro parâmetro é a expressão regular.</p></li>
                            <li><p>O segundo parâmetro é a string onde pesquisaremos a expressão.</p></li>
                            <li><p>O terceiro parâmetro é um array que armazenará os resultados (partes) da string original</p></li>
                        </ol>

                        <p>Estou utilizando também o terceiro parâmetro e inclusive uma variável $resultado para pegar o resultado de execução
                            da função.</p>

                        <p>Veja mais sobre a função na documentação oficial:
                            <a href="http://php.net/manual/en/function.preg-match.php" title="link-externo">http://php.net/manual/en/function.preg-match.php</a></p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
$pattern   = "/exemplo/";
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);
var_dump($resultado, $retorno);
?&gt;</code></pre>
                        </div>

                        <p>Se olharmos para dentro das variáveis $retorno e $resultado teremos, respectivamente "1" e um array com a string "exemplo".</p>

                        <p>É como se isso estivesse acontecendo:</p>

                        <pre><code>$retorno = 1;
$resultado = array("exemplo")
</code></pre>

                        <p>...veja o resultado do var_dump($resultado, $retorno);:</p>

                        <div class="bs-example ">
                            <img class="img-rounded" alt="### var_dump nas variáveis resultado e retorno" src="var-dump-resultado.png" />
                        </div>

                        <p>A função retorna um valor para sabermos se obtivemos sucesso ou não e, no caso do sucesso, podemos saber quais as partes
                            que casaram.</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="nao-casou">Se a expressão não casar</h1>
                        </div>

                        <p>Executando o seguinte código:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
$pattern   = "/não existe/";
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);
var_dump($resultado, $retorno);
?&gt;</code></pre>
                        </div>

                        <p>...recebemos um int 0  na variável $resultado e um array vazio na variável $retorno.</p>

                        <p>Isso siginifica que a função retorna 1 caso a expressão case e 0 (zero) caso NÂO case, até rimou.</p>

                        <p>Podemos descobrir se a expressão não casou através de...</p>

                        <pre><code>count($retorno) === 0</code></pre>

                        <p>Você decide o que usar, eu prefiro testar o resulado da função (variável $resultado).</p>
                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="sintax-errada">Se a expressão estiver sintaticamente errada</h1>
                        </div>

                        <p>Se executarmos o código abaixo, ele falhará. Eu coloquei um ( a mais.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
<em>$pattern   = "/(exemplo/";</em>
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);
?&gt;</code></pre>
                        </div>

                        <p>Tanto a variável $resultado será igual a false como receberemos um <em>warning</em> dizendo que a compilação da expressão falhou
                            (outros tipos de erros também aparecem):</p>

                        <div class="bs-example ">
                            <img class="img-rounded img-responsive" alt="### warning retornado pela função" src="regexp-erro.png" />
                        </div>

                        <p>Precisamos tratar o erro adequadamente (tudo bem, warning não é erro, mas não deixa de ser um aviso importante), porém
                            por enquanto não vamos nos preocupar com isso.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="code">Código</h1>
                        </div>

                        <p>Sabendo como a função se comporta, podemos esboçar nossa lógica da seguinte forma:</p>

                        <pre><code>se o valor é igual a 1 então
    print "casou"
se o valor é igual a 0 então
    print "não casou"
se o valor é igual a false então
    print "ocorreu um erro"
</code></pre>

                        <p>E aí fica fácil escrevermos o ćodigo final.</p>

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
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_ER]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->links, Core::SECAO_ER);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
