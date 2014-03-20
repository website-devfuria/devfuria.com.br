<?php
/**
 * Lógica
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/logica-de-programacao/basico/exercicios-expressoes-condicionais/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $conteudo->head->setTitle('Exercícios de lógica de programação envolvendo expressões condicionais');
        $conteudo->head->setDescription('Exercícos resolvidos de lógica de programação (sobre expressões condicionais)');
        $conteudo->head->setkeywords('exercícios de lógica de programação, controle de fluxo, estrutura de seleção. operadores relacionais');
        $conteudo->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $conteudo->navtop->secao_ativa = Conteudo::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>5 Exercícios de lógica de programação</h1>
                <p>...envolvendo expressões condicionais</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">20/12/2013</span>, escrito em <span class="label label-info">20/12/2013</span>.
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
                                <a href="#01">01) Número maior ou menor</a>
                            </li>
                            <li>
                                <a href="#02">02) Positivo ou negativo</a>
                            </li>
                            <li>
                                <a href="#03">03) Mostrar o maior</a>
                            </li>
                            <li>
                                <a href="#04">04) Mostrar em ordem ascendente</a>
                            </li>
                            <li>
                                <a href="#05">05) É triangulo?</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="01">Número maior ou menor</h1>
                            <p>
                                Ler um valor e escrever a mensagem É MAIOR QUE 10! se o valor lido for maior que 10, caso
                                contrário escrever NÃO É MAIOR QUE 10!
                            </p>
                        </div>
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#01-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="01-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Sem comentários</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#01-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="01-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
                                            <pre><code class="no-highlight">INÍCIO

valor = 7; // valor arbitrário
se (valor > 10) então
    print "maior que 10"
se não
    print "menor que 10"

FIM</code></pre>
                                        </div>
                                        <p>O que o código acima exibirá?</p>

                                    </div>
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="02">Positivo ou negativo</h1>
                            <p>
                                Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo)
                            </p>
                        </div>
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#02-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="02-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>O que faz de um número postivo?</p>
                                        <p>O que faz de um número negativo?</p>
                                        <p>Resposta mutamente excludente.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#02-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="02-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
                                            <pre><code class="no-highlight">INÍCIO

se (numero for divisivel por 2) então
    exibir "positivo"
se não
    exibir int "negativo"
fim se

FIM</code></pre>
                                        </div>


                                        <p><strong>Como saber se o número é divisivel por 2?</strong></p>
                                        <p>Poderíamos perguntar se o resto da divisão é igual a 0 (zero).</p>
                                        <p><strong>Como saber resto da divisão?</strong></p>
                                        <p>Utilizamos o operador aritmético <code>mod</code> que em PHP e JS é <code>%</code>.</p>
                                        <p>O código equivalente a <strong>numero for divisivel por 2</strong> é <code>($numero % 2) == 0</code></p>

                                        <div class="code">
                                            <h6>PHP</h6>
                                            <pre><code class="language-php">&lt;?php

$numero = 17;

if (($numero % 2) == 0) {
    echo "positivo";
} else {
    echo "negativo";
}</code></pre>

                                        </div>

                                        <div class="code">
                                            <h6>JS</h6>
                                            <pre><code class="language-javascript">$numero = 17;
var numero = 17;

if (numero % 2) == 0) {
    console.log("positivo");
} else {
    console.log("negativo");
}</code></pre>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="03">Mostrar o maior</h1>
                            <p>
                                Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles
                            </p>
                        </div>
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#03-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="03-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Sem comentários
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#03-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="03-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
                                            <pre><code class="no-highlight">INÍCIO

valor1 = 500
valor2 = 400

se (valor1 for diferente de valor2) então
    se (valor1 > valor2) então
        exibir "o maior valor é " valor1
    senão
        exibir "o maior valor é " valor2
    fim se
fim se

FIM</code></pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="04">Mostrar em ordem ascendente</h1>
                            <p>
                                Ler dois valores (considere que não serão lidos valores iguais) e escrevê-los em ordem crescente.
                            </p>
                        </div>
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#04-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="04-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Bem parecido com o exercício anterior!
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#04-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="04-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
                                            <pre><code class="no-highlight">INÍCIO

valor1 = 500
valor2 = 400

se (valor1 for diferente de valor2) então
    se (valor1 > valor2) então
        exibir valor1, valor2
    senão
        exibir valor2, valor3
    fim se
fim se

FIM</code></pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="05">É triangulo?</h1>
                            <p>
                                Dados 3 valores quaisquer (a, b e c) representando as medidas dos lados de um triângulo,
                                escrever se formam ou não um triângulo.
                            </p>
                            <p>
                                Saiba que para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados.
                            </p>
                        </div>
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#05-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="05-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>A última informação é a mais importante: <strong>cada lado deve ser menor que a soma dos outros 2 lados</strong></p>
                                        <p>Assim poderemos fazer 3 checagens.</p>
                                        <ul>
                                            <li>se <code>a</code> é menor que soma dos outros lados</li>
                                            <li>se <code>b</code> é menor que soma dos outros lados</li>
                                            <li>se <code>c</code> é menor que soma dos outros lados</li>
                                        </ul>
                                        <p>Agora é com você...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#05-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="05-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <div class="code">
                                            <h6>PHP</h6>
                                            <pre><code class="language-php">
if ($a < ($b + $c)) {
    if ($b < ($a + $c)) {
        if ($c < ($a + $b)) {
            echo true;
        }
    }
}

# senão ...
echo false;</code></pre>
                                        </div>

                                        <p>Há ainda uma outra solução</p>
                                        <p>Quando aprendermos a trabalhar com <strong>funções</strong> essa segunda solução fará mais sentido.</p>
                                        <p>
                                            Pelo fato da solução ser estritamente procedural e não estamos se quer utilizando funções,
                                            eu fui obrigado a utilizar o trecho <code>die()</code> que interrompe a execução do script.
                                        </p>
                                        <p>Repare também que eu modei um pouco a lógica, veja que a comparação se faz com o sinal de maior <code>&gt;</code>.</p>
                                        <div class="code">
                                            <h6>PHP</h6>
                                            <pre><code class="language-php">
if ($a > ($b + $c)) {
    echo false;
    die();
}
if ($b > ($a + $c)) {
    echo false;
    die();
}
if ($c > ($a + $b)) {
    echo false;
    die();
}

echo true;</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->
                    <?php
                    $conteudo->paginacao->link_ativo = $url;
                    $conteudo->paginacao->descobrirAnteriorProxima($conteudo->paginas[Conteudo::SECAO_LOG][Conteudo::CATEGORIA_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $conteudo->lista->setLinks($conteudo->paginas, Conteudo::SECAO_LOG, Conteudo::CATEGORIA_CURSO);
        $conteudo->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
