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
                <h1>Segunda Bateria</h1>
                <p>Exercícios de lógica de programação (do 06 ao 10).</p>
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
                                <a href="#01">06) Dias e meses</a>
                            </li>
                            <li>
                                <a href="#02">07) Idade em dias</a>
                            </li>
                            <li>
                                <a href="#03">08) Custo de um carro</a>
                            </li>
                            <li>
                                <a href="#04">09) Antecessor e sucessor</a>
                            </li>
                            <li>
                                <a href="#05">10) Juros simples</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="01">Dias e meses</h1>
                                <p>Calcular o total de dias de n meses, considerando que os meses tenham 30 dias.</p>
                            </div>
                        </div>


                        <h3>Comentários</h3>

                        <p>Quando o enúnciado diz "n" meses, significa que ele aceitará um valor qualquer. Em C resolveríamos isso facilmente,
                            basta escrever:</p>

                        <pre><code>scanf("%d" , &amp;n_meses);
</code></pre>

                        <p>Como estamos no mundo web, precisaríamos de um formulários web para a entrada de dados, isso é algo trivial, porém
                            bastante trabalhoso (no sentido de braçal).</p>

                        <p>No nosso caso vamos colocar um valor arbitrário apenas para que não tenhamos que construir um formulário.</p>

                        <h3>Solução</h3>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

n_meses = 3 // valor arbitrário

total_de_dias  = n_meses * 30

mostrar total_de_dias

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
                                <h1 id="02">Idade em dias</h1>
                                <p>Escreva um algoritmo que mostre a área quadrada de um espaço qualquer
                                    (os valores desse espaço são atribuídos arbitrariamente pelo programador).</p>
                            </div>
                        </div>

                        <p>Faça um algoritmo, sendo a data de nascimento um valor qualquer, que expresse a idade de uma pessoa em dias.</p>

                        <h3>Comentários</h3>

                        <p>Com esse exercício, eu quis provocar em você a atenção para o problema de se trabalhar com datas. Algo que não é fácil
                            em nenhuma linguagem. As datas podem aprensentar diversos formatos, veja alguns formatos básicos abaixo:</p>

                        <pre><code>dd-mm-aaaa
mm-dd-aaaa
aaaaa-mm-dd
</code></pre>

                        <p>Mas não vamos no preocupar com isso agora, vá apenas se preparando psciologicamente, ok?</p>

                        <p>Voltando ao nosso exercício, vamos utilizar os dias, meses e anos separadamente, ou seja precisaremos de pelo menos
                            3 variáveis para armazenar uma data. Veja as dicas:</p>

                        <ol>
                            <li>Use a data de nascimento separadamente, dia em uma variável, mês em outra e ano em outra.</li>
                            <li>Utilize uma data qualquer</li>
                            <li>Faça os cálculos considerando que os anos teriam 365 dias e o meses apenas 30 dias. </li>
                        </ol>

                        <h3>Solução</h3>

                        <div class="code">
                            <h6>PORTUGOL</h6>
                            <pre><em>INÍCIO</em>

data_nasc_dia = 27
data_nasc_mes = 9
data_nasc_ano = 1977

data_atual_dia = 22
data_atual_mes = 01
data_atual_ano = 2012

anos = data_atual_ano - data_nasc_ano
total_meses = anos * 12
total_meses = total_meses + anos

                            </pre>
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="03">Custo de um carro</h1>
                                <p>O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do distribuidor e dos impostos
                                    (aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%, escreva um
                                    algoritmo para calcular e escrever o custo final ao consumidor. Como custo de fábrica utilize um valor arbitrário,
                                    por exemplo, 20.000.</p>                            </div>
                        </div>



                        <h3>Comentários</h3>

                        <p>O enunciado é grande. </p>

                        <p>Esses tipos de enunciados normalmente servem para confundir ou "botar medo". Estufe o peito e encare ele com coragem.</p>

                        <p>Tudo bem, isso não o animou?</p>

                        <p>Esse exercício trabalha mais a atenção do que a lógica em si. Separe o texto do enunciado e veja como fica bem mais fácil.</p>

                        <p>Aliás, eu vou aproveitar e fazer um "negócio" que eu gosto muito: colocar o enunciado no código como comentário e
                            depois escrever o código fonte.</p>

                        <pre><code>"como custo de fábrica utilize um valor arbitrário, por exemplo, 20.000."
"Supondo que o percentual do distribuidor seja de 28%..."
"..e os impostos de 45%"
"O custo de um carro é..."
"...a soma do custo de fábrica com a porcentagem do distribuidor e..."
"... (soma) dos impostos"
"...escrever o custo final ao consumidor"
</code></pre>

                        <p>E agora, que tal tentarmos escrever algum código em baixo de cada linha?</p>

                        <h3>Solução</h3>

                        <div class="code menor">
                            <h6>PORTUGOL</h6>
                            <pre><em>INÍCIO</em>

// "como custo de fábrica utilize um valor arbitrário, por exemplo, 20.000."
custo_fabrica = 20.000;

// "Supondo que o percentual do distribuidor seja de 28%..."
perc_distribuidor = 0.28

// "..e os impostos de 45%"
perc_impostos = 0.45



/**
 * "O custo de um carro é:"
 */

// "...a soma do custo de fábrica com a porcentagem do distribuidor e..."
custo_final = custo_fabrica * perc_distribuidor

// "... (soma) dos impostos"
custo_final = custo_final + (custo_fabrica * perc_impostos)



/**
 * "...escrever o custo final ao consumidor"
 */
mostrar custo_final

<em>FIM</em></pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="04">Antecessor e sucessor</h1>
                                <p>Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.</p>
                            </div>
                        </div>


                        <h3>Comentários</h3>

                        <p>Se o  número em questão for 45...</p>

                        <p>Qual e o sucessor ?</p>

                        <p>Qual é o seu antecessor?</p>

                        <h3>Solução</h3>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

// Inicia as variáveis
numero     = 0
numero_ant = 0
numero_suc = 0

// Efetua a operação
numero     = 45;
numero_ant = numero - 1
numero_suc = numero + 1

// Mostra os resultados obtidos
mostrar numero_suc, numero_ant

<em>FIM</em></pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="jumbotron">
                            <div class="page-header">
                                <h1 id="05">Juros Simples</h1>
<p>Calcular o juros simples produzido pelo empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.</p>
                            </div>
                        </div>


<h3>Comentários</h3>

<p>Este exercício é provocativo e tem como objetivo dispertar em você a seguinte questão:</p>

<p><em>Na maioria das vezes não é a lógica que vai resolver tudo e sim algum conhecimento sobre o assunto que se quer resolver.</em></p>

<p>Neste caso, conhecendo o cálculo do juros simples fica fácil encontrarmos a solução.</p>

<p>Juros Simples</p>

<pre><code>J = C.i.n
</code></pre>

<p>Traduzindo...</p>

<pre><code>J = juros,
C = capital,
i = taxa de empréstimo e
n = períodos.
</code></pre>

<p>Efetuando o calculo...</p>

<pre><code>J = 16.000 * 0.03 * 4
</code></pre>

<p>.. temos o resulado:</p>

<pre><code>J = 1.920,00
</code></pre>

<p>Agora é só programar (já sabemos até o resultado do algorítimo) !</p>

<h3>Solução</h3>

<p>Seguindo o cálculo acima o pseudocódigo ficariam assim:</p>

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// incializar as variáveis
juros_simples = 0
capital       = 16.000
taxa          = 3/100
periodo       = 4 // meses

// Efetuar o cálculo
juros_simlpes = capital * taxa * periodo

// Mostrar na tela
mostrar juros simples

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
