<?php
/**
 * JS
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
        $core->head->setTitle('Refatoração e código limpo');
        $core->head->setDescription('Dandos os primeiros passos na refatoração de código. Aprenda a codificar de forma mais coesa.');
        $core->head->setkeywords('refatoração, codificação coesa, boas práticas, organizando o código');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Refatoração e código limpo</h1>
                <p>Introduziremos conceito intuitivo de refatoração e</p>
                <p>aprenderemos um pouco sobre como organizar seu código.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">07/02/2014</span>, escrito em <span class="label label-info">08/07/2013</span>.
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
                                <a href="#refatoracao">Refatoração</a>
                            </li>
                            <li>
                                <a href="#antes-de-alterar">Antes de alterar seu código...</a>
                            </li>
                            <li>
                                <a href="#codigo-limpo">Código limpo</a>
                            </li>
                            <li>
                                <a href="#conclusao">Concluindo</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="refatoracao">Refatoração</h1>
                        </div>

                        <p>Quando escrevemos um código e, posteriomente, voltamos para ajustar algumas coisas, estamos
                            praticando o <strong>refactoring</strong>. Quero dizer, estamos refatorando o código. O
                            conceito intuitivo da palavra traz consigo a idéia de que <strong>"refatorar" é
                                simplificar uma expressão</strong>. Não é isso o que vem a sua mente ?</p>

                        <p>OK, mas simplificar o que exatamente? E de que forma?</p>

                        <p>Refatorar é uma arte e o seu mestre chama-se Martin Fowler, há um manual completo dizendo
                            como, quando e porque refatorar o seu código fonte. Obviamente, não vamos nos deter nisso
                            agora, mesmo porque é cedo para adentrarmos nesse assunto.</p>

                        <p>Mas, respondendo a pergunta, vamos alterar o código no sentido de clareza, pelo menos
                            inicialmente. O problema é que não vamos utilizar nenhuma metodologia para isso, ou seja,
                            vamos aplicar arte pura e um pouco de gosto pessoal.</p>

                        <p>Meu objetivo é plantar na sua mente uma semente chamada <strong>"organização, limpeza e clareza"</strong>.</p>

                        <p>Essa palavras fazem sentido para você? Sim ? Que ótimo, pois é nesse sentido que vamos tentar
                            alterar o código fonte original de nosso exemplo.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="antes-de-alterar">Antes de alterar seu código...</h1>
                        </div>

                        <p><strong>O código já está funcionando, se eu mexer poderei danificá-lo!</strong></p>

                        <p>Poderá e com certeza irá danificá-lo.</p>

                        <p>Então, como alterar o código já existente (e funcionando) de forma que ele não se quebre?</p>

                        <p>Remédio: <strong>TDD (Test Driven Development)</strong> que nada mais é do que escrever
                            um teste antes de codificar. Tudo bem vai, não é tão simples assim.</p>

                        <p>Se escrever um teste antes de codificar é importante, ter um teste antes de alterar o
                            código é igualmente importante.</p>

                        <p>Mas, novamente caímos em um tema que é avançado e estamos ainda no nível básico. Vamos
                            alterar nosso código sem ter os teste de cobertura.</p>

                        <p>TDD é uma arte (ninja) e o mestre é o Kent Bech (entre outros).</p>

                        <p>O conceito é muito interessante, procure ler sobre. A refatoração é irmã siamesa do TDD.
                            Uma não vive sem a outra.
                        </p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="codigo-limpo">Código limpo</h1>
                        </div>

                        <p>Código limpo independe de OOP e de refatoração.</p>

                        <p>O que eu quero dizer é que seu código pode fazer uso intensivo de OOP e mesmo assim estar
                            bastante ilegível e desorganizado.</p>

                        <p>Da mesma forma que refatorar um código ilegível não o tornará mais legível ou organizado.</p>

                        <p>Em outras palavras, podemos dizer que OOP e refatoração não garantem um código limpo e organizado.</p>

                        <p>OOP e Refatoração são "caminhos" e não salvadores de código ilegível.</p>

                        <p>Dito isso, ainda nos resta a pergunta: <strong>o que fazer para codificar de forma limpa e coesa?</strong></p>

                        <p>Pergunta difícil!</p>

                        <p>O problema é que o programdor, sendo inciante, não "verá" aonde o código pode ser mais
                            legível. </p>

                        <p>Isso nos leva a acreditar que:</p>

                        <p><strong>Código limpo é algo que se adquire com a prática e não com teoria.</strong> Na
                            verdade adquirimos com a teoria sim, mas é muito pouco.</p>

                        <h3>E o que temos para hoje?</h3>

                        <p>Quer dizer, o que temos por horar para nos guiar?</p>

                        <p>Na matéria <a href="<?php echo LINKS_PATH ?>/php/basico/boas-praticas/">Antes de enfiar o pé na jáca (boas práticas)</a> eu comento sobre 4 dicas importantes:</p>

                        <ol>
                            <li>Endentar o código</li>
                            <li>Usar uma boa nomenclatura</li>
                            <li>Comentar o código</li>
                            <li>Ter ou seguir um estilo.</li>
                        </ol>

                        <p>Isso pode ser um começo, mas e depois?</p>

                        <p>A boa notćia é que eu conheço um livro ótimo <em>A Arte de Escrever Programas Legíveis</em> de
                            Dustine e Trevor. Veja a referência no final da mateŕia.</p>

                        <p>No livro o autor tras respotas para perguntas como por exemplo:</p>

                        <p><strong>O que torna um código “melhor”?</strong></p>

                        <p><strong>Por acaso o tempo-para-entender entra em conflito com outros objetivos?</strong></p>

                        <p><strong>E outras preocupações, como tornar o código eficiente, bem projetado, fácil de testar
                                e assim por diante?</strong></p>

                        <p><strong>Objetivos como esses não entram, às vezes, em conflito com a meta de tornar o código
                                fácil de entender?</strong></p>

                        <p><strong>Códigos devem ser escritos de modo a minimizar o tempo necessário para sua compreensão.</strong></p>

                        <p>O livro também trás o conceito de código limpo: <blockquote>Códigos devem ser escritos de
                            modo a minimizar o tempo necessário para sua compreensão.</blockquote></p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="conclusao">Concluindo</h1>
                        </div>

                        <p>Na matéria seguinte vamos colocar a mão na massa e praticar a refatoração.</p>

                        <p>Mas faremos isso de forma bem livre, sem muita preocupação com a técnica de refatoração.</p>

                        <p>Seria difícil eu dizer: "vamos refatorar o código" sem ao menos introduzir, mesmo que pobremente,
                            a idéia de refatoração e a prática de código limpo. Esse foi o objetivo desta matéria.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h1>
                        </div>

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Livros</h3>
                            </div>
                            <div class="panel-body">
                                <div class="media">
                                    <a class="pull-left" href="http://compare.buscape.com.br/prod_unico?idu=1853630395&ordem=prec#precos" title="link-externo">
                                        <img class="media-object" src="refactoringBook.jpg" alt="### Imagem do livro 'Refatoração'">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Refatoração, aperfeiçoando o projeto de código existente</h4>
                                        <p>Martin Fowler</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <a class="pull-left" href="https://novatec.com.br/livros/programas-legiveis/" title="link-externo">
                                        <img class="media-object" src="programas-legiveis.gif" alt="### Imagem do livro 'A Arte de Escrever Programas Legíveis'">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">A Arte de Escrever Programas Legíveis</h4>
                                        <p>Dustin Boswell, Trevor Foucher , Editora Novatec</p>
                                        <p>Livro sensacional, vale cada centavo!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                    $core->paginacao->link_ativo = "/js/basico/refatoração-codigo-limpo/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_JS]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Javascript</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_JS);
                        $core->lista->link_ativo = "/js/basico/refatoração-codigo-limpo/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
