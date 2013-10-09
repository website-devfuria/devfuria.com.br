<?php
/**
 * Lógica
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
        $core->head->setTitle('LÓGICA');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
        $core->navtop->secao = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Primeira Bateria</h1>
                <p>Exercícios de lógica de programação (do 01 ao 05).</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-warning">11/08/2013</span>, escrito em <span class="label label-warning">05/06/2012</span>.
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
                                <a href="#01">01) Duas variáveis</a>
                            </li>
                            <li>
                                <a href="#02">02) Área Quadrada</a>
                            </li>
                            <li>
                                <a href="#03">03) Média simples</a>
                            </li>
                            <li>
                                <a href="#04">04) Eleitores e votos</a>
                            </li>
                            <li>
                                <a href="#05">05) Salário e reajuste</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="01">Duas variáveis</h1>
                                <p>Escreva um algoritmo que armazene o valor 10 em uma variável denominada “num&#95;a” e
                                    também o valor 20 em uma variável denominada “num&#95;b”.
                                    Agora, (apenas com o uso de atribuições) passe o valor de num&#95;a para num&#95;b e imprima os resultados.</p>
                            </div>
                        </div>

                        <h3>Comentários</h3>

                        <p>Você entendeu o problema e o que se espera dele?</p>

                        <p>É importante que o enunciado seja lido com atenção e que ele não deixe dúvidas ou seja ambíguo.</p>

                        <p>Comece rascunhando a solução, passe a limpo, faça o diagrama e aplique o teste de mesa. Se estiver seguro, parta para
                            a codificação (transformar o algoritmo em código fonte).</p>

                        <p>As primeiras atribuições são fáceis...</p>

                        <div class="code menor">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre>num_a = 10

num_b = 20</pre>
                        </div>

                        <p>Vamos pensar no resultado final</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre>imprimir num_a, num_b

// mostra na tela “20, 10”</pre>
                        </div>

                        <h3>Solução</h3>

                        <p>O que fazer para trocar os valores de uma variável para a outra?</p>

                        <p>Esse é o foco do problema. </p>

                        <p>Se utilizar uma variável a mais, podemos resolver dessa forma...</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

// Inicializar as variáveis
num_a = 10
num_b = 20
num_c = 0

// Efetuar a troca
num_c = num_a
num_a = num_b
num_b = num_c

// Mostrar na tela
imprimir num_a, num_b

<em>FIM</em></pre>
                        </div>

                        <p>Agora em php...</p>

                        <div class="code">
                            <h6>PHP - Solução para o exercício 1</h6>
                            <pre>&lt;?php

// Inicializar as variáveis
$num_a = 10;
$num_b = 20;
$num_c = null; // inicializamos os variáveis com null em PHP.

// Efetuar a troca
$num_c = $num_a;
$num_a = $num_b;
$num_b = $num_c;

// Mostrar na tela
echo “$num_a, $num_b”;
?&gt;</pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="02">Área Quadrada</h1>
                                <p>Escreva um algoritmo que mostre a área quadrada de um espaço qualquer
                                    (os valores desse espaço são atribuídos arbitrariamente pelo programador).</p>
                            </div>
                        </div>

                        <h3>Comentários</h3>

                        <p>A primeira lição que tiramos deste exercício é a diferença entre “lógica pura” e “conhecimento alheio”.</p>

                        <p>Neste caso, conhecimento alheio é saber que o metro quadrado é obtido através de uma simples multiplicação(lado x lado)
                            e lógica pura seria o algoritmo que expressa a multiplicação de dois números.</p>

                        <p>Se este exercício estivesse escrito assim “escreva um algoritmo para calcular as área de um retângulo de dimensões
                            quaisquer” ele teria a mesma solução, então vamos à ela.</p>

                        <p>Sabendo que temos que multiplicar dois números para encontrar o metro quadrado a solução aparece rapidamente...</p>

                        <h3>Solução</h3>

                        <div class="code">
                            <h6>PHP - Solução para o exercício 2</h6>
                            <pre>&lt;?php

$lado_um = 7;   // poderia ser qualquer valor
$lado_dois = 2; // poderia ser qualquer valor

$metro_quadrado = $lado_um * $lado_dois;

echo $metro_quadrado; // mostra na tela “14”
?&gt;</pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="03">Média Simples</h1>
                                <p>Faça um programa que mostra a média simples (aritmética) de 3 valores quaisquer.</p>
                            </div>
                        </div>

                        <h3>Comentários</h3>

                        <p>Não, sem comentários!!!</p>

                        <p>Mais fácil impossível.</p>

                        <p>Vamos a solução:</p>

                        <h3>Solução</h3>

                        <div class="code">
                            <h6>PORTUGOL</h6>
                            <pre><em>INÍCIO</em>

// 3 valores quaisquer
valor1 = 10
valor2 = 20
valor3 = 30

// cálculo
media = (valor1 + valor2 + valor3) / 3

// exibir
mostrar media // 20

                            </pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="04">Eleitores e votos</h1>
                                <p>Sendo o número total de eleitores de um município = 25.639, o número de votos brancos = 1507, nulos = 2312 e
                                    válidos = 21.820.
                                    Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.</p>                            </div>
                        </div>

                        <h3>Comentários</h3>

                        <p>A variável "total de eleitores" é a chave. Nós utilzaremos ela para achar os percentuais dos votos
                            brancos, nulos e válidos.</p>

                        <pre><code>totalEleitores = 25.639
</code></pre>

                        <p>O "percentual que cada um representa" significa, por exemplo:</p>

                        <pre><code>votos brancos / total de eleitores
</code></pre>

                        <p>Encontramos o resutlado:</p>

                        <pre><code>0.058777643
</code></pre>

                        <p>Multiplicamos por 100 para ilustrar uma porcentagem e não um decimal</p>

                        <pre><code>58.77 (arrendondamos mentalmente)
</code></pre>

                        <h3>Solução</h3>

                        <div class="code">
                            <h6>PORTUGOL</h6>
                            <pre><em>INÍCIO</em>

// Variável principal
totalEleitores = 25.639

// Cálculos
perVotosBrancos = 1507 / total_eleitores * 100
perVotosNulos = 2312 / total_eleitores * 100
perVotosValidos = 21.820 / total_eleitores * 100

// Exibir resultado
mostrar perVotosBrancos, perVotosNulos, perVotosValidos

                            </pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="05">Salário e reajuste</h1>
                                <p>Faça um algoritmo que mostre e calcule o reajuste de um salário qualquer.
                                    O salário e o reajuste serão valores quaisquer e a saída mostrará o valor do reajuste e o salário reajustado.</p>
                            </div>
                        </div>

                        <h3>Comentários</h3>

                        <p>O objetivo deste exercícío é apenas ganhar prática. Seu nível de dificuldade é extremamente baixo e não envolve o uso de
                            nenhuma ferramenta, basta lógica pura. O ideal seria os valores de salário e percentual de reajuste fossem inseridos
                            pelo usuário, mas como estamos construíndo aplicações web, precisaríamos desenhar um formulário, tarefa que enfrentaremos
                            em outro momento.</p>

                        <p>Apresentamos apenas o pseudo-código, mas não deixe de fazer os diagramas, o teste de mesa e transcreva o algoritmo para
                            uma linguagem de programação.</p>

                        <h3>Solução</h3>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

salario = 1000

perc_reajuste = 0.05 // 0.05 é igual a 5%

valor_reajuste = salario * perc_reajuste

salario_reajustado = salario + valor_reajuste

mostrar valor_reajuste, salario_reajustado

<em>FIM</em></pre>
                        </div>
                    </div>


                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
