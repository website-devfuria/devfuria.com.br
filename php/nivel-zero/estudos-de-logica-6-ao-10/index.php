<?php
require "../../../furia/includes/bs.php";
$materia = new Materia(6);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $materia->titulo; ?> | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => $materia->resumo,
            "keywords" => "",
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php
        $nav_top['secao'] = "php";
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo ROOT_PATH; ?>">Home</a> <span class="divider">/</span></li>
                            <li><a href="<?php echo BASE_PATH; ?>php/">PHP</a> <span class="divider">/</span></li>
                            <li class="active"><?php echo $materia->titulo; ?></li>
                        </ul>
                        <p>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                        </p>
                    </header>

                    <article>
<h1>Estudos de lógica com respostas (6 ao 10)</h1>

<p>Inspirado nos <a href="http://fit.faccat.br/~fpereira/apostilas/exerc_resp_alg_mar2007.pdf">91 exercícios</a> de
Flávia Pereira de Carvalho.</p>

<h2>Exercício 6</h2>

<p>O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do distribuidor e dos impostos
(aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%, escrever um
algoritmo para ler o custo de fábrica de um carro, calcular e escrever o custo final ao consumidor.</p>

<p>O exercício acima está transcrito na sua forma original, e já vimos que “ler o custo de fábrica” não se enquadra no
nosso ambiente (aplicações web). Mais uma vez, para fazer o sistema “ler” o valor que o usuário digitar teríamos que
desenhar um formulário HTML o que ainda é muito cedo para fazermos. Então como custo de fábrica utilize um valor
arbitrário, por exemplo, 20.000.</p>

<h4>Solução (comentada)</h4>

<p>Se você entendeu que devemos calcular a porcentagem do distribuidor sobre o custo de fábrica e guardar esse valor, em
seguida calcular a porcentagem dos impostos ainda sobre o valor de fábrica e somar ao valor guardado, então é possível
que você tenha acertado a solução.</p>

<div class="code menor">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// Inicializar variáveis
custo_fabrica = 20.000;
perc_distribuidor = 0.28 // equivalente aos 28%
perc_impostos = 0.45 // equivalente aos 45%

// Efetuar cálculos
custo_final = custo_fabrica * perc_distribuidor
custo_final = custo_final + (custo_fabrica * perc_impostos)

// Mostrar na tela
mostrar custo_final

<em>FIM</em></pre>
</div>

<p>Para ilustrar que programar é uma atividade criativa, mostraremos uma outra forma de resolver o mesmo problema:</p>

<div class="code menor">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

custo_fabrica = 20.000

valorDistribuidor = custo_fabrica * 0.28

valorImpostos = custo_fabrica * 0.45

custo_final = custo_fabrica + valorDistribuidor + valorImposto

mostrar custo final

<em>FIM</em></pre>
</div>

<p>Há um elemento na linguagem que se chama operadores e pode simplificar algumas coisas. brevemente veremos todos os
operadores. Um operador muito utilizado é o +=. Isso mesmo, o sinal de de adição seguido do sinal de igual. Ele pode
simplificar o seguinte trecho de código:</p>

<div class="code">
<pre>custo_final = custo_final + (custo_fabrica * perc_impostos)</pre>
</div>

<p>...ficariam assim:</p>

<div class="code">
<pre>custo_final += custo_fabrica * perc_impostos</pre>
</div>

<p>Em outras palavras, a = a + b pode ser escrito dessa forma  a += b.</p>

<h2>Exercício 7</h2>

<p>Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês, mais uma comissão também
fixa para cada carro vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de
 carros por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule
 e escreva o salário final do vendedor.</p>

<h4>Solução (comentada)</h4>

<p>A solução do exercício proposto é a mesma do exercício anterior, mudou-se apenas o “cenário” o problema e a solução são
os mesmos. Para encontrar a solução baseie-se no exercício anterior.</p>

<p>Apenas como nota, casos como este em que utilizamos o mesmo código para problemas similares é muito comum. Chama-se
reutilização ou reaproveitamento de código e baseia-se em produzir um código abstrato o suficiente para resolver
problemas afins. Abstrair um código significa aumentar seu nível de generalidade, ou seja, quanto mais genérico ele for
mais fácil será reaproveitá-lo.</p>

<h2>Exercício 8</h2>

<p>Calcular o juros simples produzido pelo empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.</p>

<h4>Solução (comentada)</h4>

<p>Aqui novamente caímos no problema do “conhecimento alheio”. Se você se lembrar das aulas do ensino médio, este exercício
 não será problema, mas caso você não se lembre da formulário do juros simples esse exercício simplesmente se tornará
impraticavel. Quero dizer que a fórmula do juros simples deveria acompanhar o exercício,
J = C.i.n onde J = juros, C = capital, i = taxa de empréstimo e n = períodos. Então:</p>

<p>J = 16.000 * 0.03 * 4</p>

<p>J = 1.920,00</p>

<p>E o pseudocódigo ficariam assim:</p>

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// inciailzar as variáveis
juros_simples = 0
capital = 16.000
taxa = 3/100
periodo = 4 // 4 meses


// Efetuar o cálculo
juros_simlpes = capital * taxa * periodo

// Mostrar na tela
mostrar juros simples

<em>FIM</em></pre>
<p>Solução do exercício 8.</p>
</div>

<h2>Exercício 9</h2>

<p>Sendo o número total de eleitores de um município = 25.639, o número de votos brancos = 1507, nulos = 2312 e
válidos = 21.820. Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.</p>

<h4>Solução (comentada)</h4>

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

perVotosBrancos = 1507 / total_eleitores * 100

perVotosNulos = 2312 / total_eleitores * 100

perVotosValidos = 21.820 / total_eleitores * 100

mostrar perVotosBrancos, perVotosNulos, perVotosValidos

</pre>
<p>Solução do exercício 9.</p>
</div>

<p>Há um erro no algoritmo acima, qual é? ...Descobriu? A variável total_eleitores deve ser inicializada com o valor 25.639.</p>

<h2>Exercício 10</h2>

<p>Faça um algoritmo, sendo a data de nascimento um valor qualquer, expresse a idade de uma pessoa em dias.</p>

<p>Para tal use a data de nascimento separadamente, dia em uma variável, mês em outra e ano em outra. Utilize uma data
qualquer e faça os cálculos considerando que os anos teriam 365 dias e o meses apenas 30 dias. <em>Dica:</em> será
preciso o uso da data atual também separada por variáveis.</p>

<h4>Solução (comentada)</h4>

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
total_meses = anos*12
total_meses  = total_meses   + anos

</pre>
<p>Solução do exercício 10.</p>
</div>


                        <p class="fim">Fim da matéria</p>
                    </article>

                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>

                </div><!-- span12  -->
            </div><!-- row  -->
        </div><!-- container -->

        <div class="container sem_borda">
            <div class="row">
                <div class="span10 offset1">
                    <?php include BASE_PATH.COMPONENTES_PATH."tree_parcial.php"; ?>
                </div>
            </div>

            <div class="row">
                <div class="span8 offset2">
                    <?php include BASE_PATH.COMPONENTES_PATH."form_feedback.php"; ?>
                </div>
            </div>
        </div>

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>