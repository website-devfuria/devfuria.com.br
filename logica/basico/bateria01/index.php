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
        $core->head->setTitle('LÓGICA');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Primeira Bateria</h1>
                <p>Exercícios de lógica de programação. Super básicos.</p>
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
                            <li>
                                <a href="#06">06) Dias e meses</a>
                            </li>
                            <li>
                                <a href="#07">07) Idade em dias</a>
                            </li>
                            <li>
                                <a href="#08">08) Custo de um carro</a>
                            </li>
                            <li>
                                <a href="#09">09) Antecessor e sucessor</a>
                            </li>
                            <li>
                                <a href="#10">10) Juros simples</a>
                            </li>                            
                        </ul>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="01">Duas variáveis</h1>
                            <p>Escreva um algoritmo que armazene o valor 10 em uma variável denominada “num&#95;a” e
                                também o valor 20 em uma variável denominada “num&#95;b”.
                                Agora, (apenas com o uso de atribuições) passe o valor de num&#95;a para num&#95;b e imprima os resultados.</p>
                        </div>                        
                        <div class="panel-group" >
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#duasvar-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="duasvar-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Você entendeu o problema e o que se espera dele?</p>

                                        <p>É importante que o enunciado seja lido com atenção e que ele não deixe dúvidas ou seja ambíguo.</p>

                                        <p>Comece rascunhando a solução, passe a limpo, faça o diagrama e aplique o teste de mesa. Se estiver seguro, parta para
                                            a codificação (transformar o algoritmo em código fonte).</p>

                                        <p>As primeiras atribuições são fáceis...</p>

                                        <div class="code">
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
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#duasvar-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="duasvar-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
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
?&gt;</pre>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="02">Área Quadrada</h1>
                            <p>Escreva um algoritmo que mostre a área quadrada de um espaço qualquer
                                (os valores desse espaço são atribuídos arbitrariamente pelo programador).</p>
                        </div>                        
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#area-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="area-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>A primeira lição que tiramos deste exercício é a diferença entre “lógica pura” e “conhecimento alheio”.</p>

                                        <p>Neste caso, conhecimento alheio é saber que o metro quadrado é obtido através de uma simples multiplicação(lado x lado)
                                            e lógica pura seria o algoritmo que expressa a multiplicação de dois números.</p>

                                        <p>Se este exercício estivesse escrito assim “escreva um algoritmo para calcular as área de um retângulo de dimensões
                                            quaisquer” ele teria a mesma solução, então vamos à ela.</p>

                                        <p>Sabendo que temos que multiplicar dois números para encontrar o metro quadrado a solução aparece rapidamente...</p> 
                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#area-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="area-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
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
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->                    


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="03">Média Simples</h1>
                            <p>Faça um programa que mostra a média simples (aritmética) de 3 valores quaisquer.</p>
                        </div>                        
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#media-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="media-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Não, sem comentários!!!</p>

                                        <p>Mais fácil impossível.</p>

                                        <p>Vamos a solução:</p>
                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#media-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="media-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
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
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->                 


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="04">Eleitores e votos</h1>
                            <p>Sendo o número total de eleitores de um município = 25.639, o número de votos brancos = 1507, nulos = 2312 e
                                válidos = 21.820. Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.</p>
                        </div>                        
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#elei-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="elei-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>A variável "total de eleitores" é a chave. Nós utilzaremos ela para achar os percentuais dos votos
                                            brancos, nulos e válidos.</p>

                                        <pre><code>totalEleitores = 25.639</code></pre>

                                        <p>O "percentual que cada um representa" significa, por exemplo:</p>

                                        <pre><code>votos brancos / total de eleitores</code></pre>

                                        <p>Encontramos o resutlado:</p>

                                        <pre><code>0.058777643</code></pre>

                                        <p>Multiplicamos por 100 para ilustrar uma porcentagem e não um decimal</p>

                                        <pre><code>58.77 (arrendondamos mentalmente)</code></pre>
                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#elei-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="elei-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
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
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->                 


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="05">Salário e reajuste</h1>
                            <p>Faça um algoritmo que mostre e calcule o reajuste de um salário qualquer.
                                O salário e o reajuste serão valores quaisquer e a saída mostrará o valor do reajuste e o salário reajustado.</p>
                        </div>                        
                        <div class="panel-group" >

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sal-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="sal-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>O objetivo deste exercícío é apenas ganhar prática. Seu nível de dificuldade é extremamente baixo e não envolve o uso de
                                            nenhuma ferramenta, basta lógica pura. O ideal seria os valores de salário e percentual de reajuste fossem inseridos
                                            pelo usuário, mas como estamos construíndo aplicações web, precisaríamos desenhar um formulário, tarefa que enfrentaremos
                                            em outro momento.</p>

                                        <p>Apresentamos apenas o pseudo-código, mas não deixe de fazer os diagramas, o teste de mesa e transcreva o algoritmo para
                                            uma linguagem de programação.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sal-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="sal-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
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
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção --> 


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="06">Dias e meses</h1>
                            <p>Calcular o total de dias de n meses, considerando que os meses tenham 30 dias.</p>
                        </div>                        
                        <div class="panel-group">

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#dias-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="dias-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Quando o enúnciado diz "n" meses, significa que ele aceitará um valor qualquer. Em C resolveríamos isso facilmente,
                                            basta escrever:</p>

                                        <pre><code>scanf("%d" , &amp;n_meses);</code></pre>

                                        <p>Como estamos no mundo web, precisaríamos de um formulários web para a entrada de dados, isso é algo trivial, porém
                                            bastante trabalhoso (no sentido de braçal).</p>

                                        <p>No nosso caso vamos colocar um valor arbitrário apenas para que não tenhamos que construir um formulário.</p>                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#dias-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="dias-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
                                            <pre><em>INÍCIO</em>

n_meses = 3 // valor arbitrário

total_de_dias  = n_meses * 30

mostrar total_de_dias

<em>FIM</em></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção --> 


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="07">Idade em dias</h1>
                            <p>Faça um algoritmo, sendo a data de nascimento um valor qualquer, que expresse a idade de uma pessoa em dias.</p>

                        </div>                        
                        <div class="panel-group">

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#idade-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="idade-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
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
                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#idade-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="idade-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
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
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->                     


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="08">Custo de um carro</h1>
                            <p>O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do distribuidor e dos impostos
                                (aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%, escreva um
                                algoritmo para calcular e escrever o custo final ao consumidor. Como custo de fábrica utilize um valor arbitrário,
                                por exemplo, 20.000.</p>
                        </div>                        
                        <div class="panel-group">

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#carro-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="carro-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
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
                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#carro-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="carro-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
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
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->                     


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="09">Antecessor e sucessor</h1>
                            <p>Escreva um algoritmo para mostrar o sucessor e o antecessor de um número qualquer.</p>
                        </div>                        
                        <div class="panel-group">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ant-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="ant-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Se o  número em questão for 45...</p>

                                        <p>Qual e o sucessor ?</p>

                                        <p>Qual é o seu antecessor?</p>
                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ant-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="ant-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
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
                                </div>
                            </div>
                        </div><!--acordion -->
                    </div><!--seção -->                 


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="10">Juros Simples</h1>
                            <p>Calcular o juros simples produzido pelo empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.</p>
                        </div>                        
                        <div class="panel-group">

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#juros-comentario">
                                            Comentários
                                        </a>
                                    </h4>
                                </div>
                                <div id="juros-comentario" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Este exercício é provocativo e tem como objetivo dispertar em você a seguinte questão:</p>

                                        <p><em>Na maioria das vezes não é a lógica que vai resolver tudo e sim algum conhecimento sobre o assunto que se quer resolver.</em></p>

                                        <p>Neste caso, conhecendo o cálculo do juros simples fica fácil encontrarmos a solução.</p>

                                        <h4>Juros Simples</h4>

                                        <pre><code>J = C.i.n</code></pre>

                                        <p>Traduzindo...</p>

                                        <pre><code>J = juros,
C = capital,
i = taxa de empréstimo e
n = períodos.
                                            </code></pre>

                                        <p>Efetuando o calculo...</p>

                                        <pre><code>J = 16.000 * 0.03 * 4</code></pre>

                                        <p>.. temos o resulado:</p>

                                        <pre><code>J = 1.920,00</code></pre>

                                        <p>Agora é só programar (já sabemos até o resultado do algorítimo) !</p>
                                    </div>
                                </div>

                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#juros-solucao">
                                            Solução
                                        </a>
                                    </h4>
                                </div>
                                <div id="juros-solucao" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Seguindo o cálculo acima o pseudocódigo ficariam assim:</p>

                                        <div class="code">
                                            <h6>PSEUDOCÓDIGO</h6>
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
                                </div>
                            </div>
                        </div><!--acordion -->
                        <?php
                        $core->paginacao->link_ativo = "/logica/basico/bateria01/";
                        $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_LOG]);
                        include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                        ?>                                  
                    </div><!--seção -->                


                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Lógica de Programação</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_LOG);
                        $core->lista->link_ativo = "/logica/basico/bateria01/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
