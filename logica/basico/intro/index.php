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
                <h1>Introdução</h1>
                <p>Uma "palavrinha" rápida antes de inciarmos...</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-warning">25/07/2012</span>, escrito em <span class="label label-warning">05/06/2012</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Introdução</h1>
                        </div>         
                        <p><em>A lógica de programação é um exercício mental</em>. Ela equivale aos exercícios físicos e todo programador deve praticar,
                            não apenas no início do aprendizado mas no decorrer de toda a “estrada”. Programar um computador é uma atividade, antes
                            de tudo, criativa. Quando a criatividade se une ao raciocínio lógico temos a lógica de programação. E <em>programar nada
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

                        <div class="bs-example bs-example-images">
                            <img class="img-rounded" alt="Desenho em quadrinhos satirizando a lógica!" src="vida_prog_25.png">
                            <p>Há... essas mulheres!.</p>
                            <p>Fonte:<a href="http://vidadeprogramador.com.br/2011/03/22/logica-de-programacao/">Vida de programador</a></p>
                        </div>                        

                        <h2>Sobre o curso</h2>

                        <p>Não vamos criar programas completos e profissionais, nada disso. Construiremos apenas pequenos trechos de códigos para
                            exercitar o raciocínio e desenvolver uma intimidade com a linguagem.</p>

                        <h3>Nota antes de começarmos</h3>

                        <p>Os exercícios iniciais foram adaptados para a realidade do desenvolvimento web. Em programas desktop a simples instrução
                            “leia o valor digitado do usuário” significa que o sistema fará uma pausa é esperará o usuário digitar alguma coisa.
                            Já em programas para web (aplicações web) pedir para o usuário digitar algo significa ter que construir um formulário
                            HTML, enviar esses dados para um script, receber esses dados “via protocolo HTTP”, e finalmente, processar a informação.
                            Pensando nisso e com o objetivo de facilitar a vida do iniciante em programação, optei por trabalhar com valores
                            arbitrários, ou seja, valores são definidos pelo programador e atribuídos diretamente no código fonte sem a interferência
                            do usuário.</p>

                        <p><em>IMPORTANTE: O aprendizado da lógica se faz a passos lentos, bem lentos. Leia o exercício mas não veja a solução enquanto
                                não tiver “suado a camisa”. Normalmente, leva-se de 10 a 20 minutos em cada exercício, cronometre o seu tempo e não
                                desista antes dos 20 minutos pensando  na solução (o tempo para desenhar o diagrama e para executar o teste de mesa não
                                contam). Em um curso formal (acadêmico), a disciplina lógica de programação dura um semestre inteiro. Se você nunca viu
                                programação antes, dê-se pelo menos 6 meses de amadurecimento em lógica.</em></p>                    


                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
