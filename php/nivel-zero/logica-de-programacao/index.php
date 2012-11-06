<?php
require "../../../furia/includes/bs.php";
$materia = new Materia(2);
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
                        <h1>Lógica de Programação</h1>

                        <p><em>A lógica de programação é um exercício mental</em>. Ela equivale aos exercícios físicos e todo programador deve praticar,
                            não apenas no início do aprendizado mas no decorrer de toda a “estrada”. Programar um computador é uma atividade, antes
                            de tudo, criativa. Quando a criatividade se une com o raciocínio lógico temos a lógica de programação. E <em>programar nada
                                mais é do que instruir o computador a resolver problemas... usando a lógica de forma criativa</em>.</p>

                        <p>O ponto importante da lógica (estarei me referindo a lógica de programação apenas por “lógica””) é que podem existir
                            n´s alternativas para se resolver um problema e cada alternativa deve ser avaliada conforme o resultado que se espera
                            obter. Esses caminhos são chamados de <em>algoritmos</em>.</p>

                        <p>Se para a solução do problema for interessante ter uma boa performance, então o algorítmo deve ser elaborado com foco
                            na perfomance. Se o que se espera alcançar é pouco uso de memória, então o algorítmo deve ser elaborado com foco na
                            econômia da memória. Se o objetivo é ter um algorítmo claro (de fácil leitura e compreensão para os humanos), então a
                            construção deverá se preocupar com a clareza, mesmo que a performance e o uso de memoria seja comprometido. Às vezes o
                            programador quer atingir todos os pontos possível de qualidade: performance, uso econômico de memória, clareza, etc...
                            mas nem sempre é possível.</p>

                        <div class="imagem">
                            <img src="../../imagens/vida_prog_25.png" alt="Desenho em quadrinhos satirizando a lógica!" />
                            <p>Figura 01 - Há... essas mulheres!.</p>
                            <p>Fonte:<a href="http://vidadeprogramador.com.br/2011/03/22/logica-de-programacao/">Vida de programador</a></p>
                        </div>

                        <p>A lógica utiliza-se de três artefatos: <em>a linguagem, o diagrama e o teste de mesa</em>. A linguagem é informal e baseada na
                            língua humana (português, inglês, espanhol, etc...) normalmente chamada de <em>pseudocódigo</em>. O diagrama mais utilizado é o
                            DFD (diagrama de fluxo de dados) ele também pode contribuir para a documentação do sistema. O teste de mesa é a execução
                            do algorítmo sem a ajuda do computador, ou seja, realizada com papel, lápis e muita atenção.</p>

                        <p>Um alerta importante é que <em>o programador não deve ser ansioso para codificar o algoritmo</em>. Sentar na frente do
                            computador e começar a escrever o código fonte, sem antes perder alguns minutos desvendando o problema, pode acarretar
                            improdutividade e disperdício de tempo. Antes de codificar é preciso se debruçar sobre o problema e se for necessário,
                            realizar o teste de mesa e também desenhar o DFD.</p>

                        <p><em>O principal benefício da lógica de programação é que sua prática exercita a mente do programador tornando-o mais 
                                eficiente e eficaz</em>. Segundo o guru do marketing Peter Drucker: "eficiência é fazer as coisas de maneira correta,
                            eficácia são as coisas certas. O resultado depende de fazer certo as coisas certas".</p>

                        <h2>Botando a mão na massa</h2>

                        <p>Quais serão os passos necessários para sacar dinheiro em um caixa de banco? O algoritmo abaixo ilustra um possível
                            solução para o problema. As palavras destacadas em maiúsculo são controle de fluxo.</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>
<em>SE</em> estiver sem o cartão do banco <em>ENTÂO</em>
pegar o cartão do banco

dirigir-se à agência bancária mais próxima
dirigir-se ao caixa eletrônico
inserir o cartão
digitar a senha
observar saldo

<em>SE</em> o saldo for suficiente <em>ENTÂO</em>
sacar o valor desejado
voltar para casa
<em>SENÂO</em>
    voltar para casa sem dinheiro
<em>FIM</em>
                            </pre>
                        </div>

                        <p>O algorítmo apresentado aproxima-se mais a um <em>problema humano</em> e não a um <em>problema computacional</em>. Para resolver
                            problemas computacionais é preciso entender os princípios da interação com computadores. Essa interação se dá através de
                            três ações: entrada de dados, processamento e saída de dados.</p>

                        <div class="imagem">
                            <img src="../../imagens/fluxobasico.jpg" alt="Entrada, processamenteo e saída!"/>
                            <p>Figura 02 - Etapas essenciais de um programa em funcionamento.</p>
                        </div>

                        <p>A entrada é caracterizada pela inserção de dados. O processamento provoca uma transformação nos dados. A saída formata
                            e apresenta os dados na tela.</p>

                        <p>Um exemplo computacional seria exibir a soma de dois números. O usuário digita um número e o computador armazenada na
                            variável “numero<em>primeiro”, o usuário digita o segundo número e o computador armazena na variável
                                “numero</em>segundo”. O computador soma os dois números e armazena o resultado na variável “soma” que em seguida é
                            apresentada na tela. O algorítmo e o DFD à seguir ilustram a solução:</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre><em>INÍCIO</em>

numero_primeiro = o que o usuario digitar
numero_segundo = o que o usuario digitar

soma = numero_primeiro + numero_segundo

exibir soma

<em>FIM</em>
                            </pre>
                        </div>

                        <div class="imagem">
                            <img src="../../imagens/dfd_soma2num.png" alt="Diagrama de fluxo de dados" />
                        </div>

                        <p>Uma variável é um espaço alocado(reservado) na memória do computador. Como o pŕoprio nome já diz, seu conteúdo é
                            veriável.  Observe o algorítmo implementado em PHP logo a baixo. Repare que não há uma função “o que o usuário digitar” que
                            receberá os dados do usuário, por essa razão usamos valores arbitrários(5 e 7). Para fazer com que o usuário digita-se
                            os valores, seria necessário construir um formulário e receber os dados vindo desse formulário, tarefa esta que ficará
                            para um outro momento.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre>&lt;?php
$numero_primeiro = 5;
$numero_segundo = 7;

$soma = $numero_primeiro + $numero_segundo
echo $soma;
?&gt;</pre>
                        </div>

                        <p>O teste de mesa consiste em anotar os nomes das variáveis em colunas e anotar os valores que elas recebem em cada
                            passagem de linha de código.</p>

                        <div class="imagem">
                            <img src="../../imagens/testemesa1.png" alt="Teste de mesa" />
                        </div>

                        <h2>Nota sobre "atribuição"</h2>

                        <p>O sinal matemático de igualdade "=" tem a função de atribuição, ele atribui um valor a variável. E como se ele
                            armazenas-se o valor naquele local. Diz-se "local" pois, uma variável nada mais é do que um espaço na memória reservado.
                            Normalmente o pseudocódigo utiliza-se da notação de uma seta para a esquerda para representar a atribuição.</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre>um_numero ⇠ 123
// O valor da variável “um_numero” é igual a 123;
                            </pre>
                        </div>

                        <h2>Nota sobre “organização mental”</h2>

                        <p>Existem alguns passos na qual é possível seguir para elaborar de forma organizada o algoritmo, vejamos um exemplo:</p>

                        <ol>
                            <li>compreender o problema</li>
                            <li>identificar dados de entrada</li>
                            <li>identificar dados de saída</li>
                            <li>determinar o que é preciso para transformar os dados de entrada em dados de saída</li>
                            <li>construir o algoritmo</li>
                            <li>testar o algoritmo</li>
                            <li>executar o algoritmo</li>
                        </ol>

                        <p>Esse exemplo foi extraído de um arquivo de slide na Internet, não passo a referência porquê o furia-material está uma
                            bagunça, mas tem algumas pérolas (como essa da sequência para construção do algoritmo).</p>

                        <p>O programador não deve ficar preso a essa estrutura, porquê ela pode ser facilmente colocada à prova, por exemplo, o
                            passo 3 talvez não seja necessário porque pode ser que o problema não retorne nada, apenas executa alguma tarefa
                            específica, logo o passo 4 também será afetado. Já o passo 6 é muito subjetivo, talvez “testar” seja “executar”, ou
                            ainda, como testar o algorítmo se ele não foi executado?. Nem sempre será interessante seguir todos os passos, o
                            programador também poderá começar em qualquer ordem. Poderá, por exemplo, iniciar pelo passo 4 e depois voltar para o
                            passo 3 e 2 e ainda retornar no passo 1.</p>

                        <p>De qualquer forma essa estrutura é interessante e ajuda a organizar um pouco a mente, mas sejam flexívl e
                            utilize-a com bom senso.</p>

                        <h2>Leituras adicionais sugeridas</h2>

                        <dl id="leitura_adcionais">
                            <dt>Internet</dt>
                            <dd>
                                <em>Texto curtinho do mestre Morimoto sobre pseudocodigo</em>. Pô, até sobre isso o cara escreve!!! rs.
                                <a href="http://www.hardware.com.br/termos/pseudocodigo.net">
                                    http://www.hardware.com.br/termos/pseudocodigo</a>
                            </dd>

                            <dd>
                                <em>Artigo sobre</em> lógica de programação do blog “ogenial”. Leitura fácil e rápida. pode servir como um
                                complemente deste artigo (e vice e versa).
                                <a href="http://www.ogenial.com.br/blog/introducao-logica-de-programacao/">
                                    http://www.ogenial.com.br/blog/introducao-logica-de-programacao/</a>
                            </dd>

                            <dd>
                                <em>Exercícios</em> do artigo mencionado acima. São do tipo “humano”, bem básicos... mas bastante didáticos.
                                <a href="http://www.ogenial.com.br/blog/exercicios-de-logica/#more-249">
                                    http://www.ogenial.com.br/blog/exercicios-de-logica/#more-249</a>
                            </dd>
                        </dl>
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