<?php
/**
 * HTML & CSS
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
        $core->head->setTitle('Tags básicas de HTML');
        $core->head->setDescription('Aprendendo as tags básicas de HTML (âncoras, listas, tabelas, formulários, div e span)');
        $core->head->setkeywords('âncoras, links, tabelas, formulários, parágrafos, imagens, div e span, lista');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_HTML;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Primeiro contato com HTML</h1>
                <p>Nesta matéria veremos os elementos básicos do HTML</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">13/12/2013</span>, escrito em <span class="label label-info">23/01/2013</span>.
            </div>
        </div>


        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#html-ancora">Âncora(link)</a></li>
                            <li><a href="#html-listas">Listas</a></li>
                            <li><a href="#html-paragr-imgs">Parágrafos e imagens</a></li>
                            <li><a href="#html-tabelas">Tabelas</a></li>
                            <li><a href="#html-forms-inputs-labels">Formulários, inputs e labels</a></li>
                            <li><a href="#html-divs-span">Div's e Span's</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="html-ancora">Âncora(link)</h1>
                        </div>

                        <pre><code>&lt;a href="pagina-ao-clicar.html"&gt;Isto é um link&lt;/a&gt;</code></pre>

                        <p>O link possui a proprieda <code>href</code> (hypertext reference) que nada mais é do que o alvo que será
                            alcançado quando clicarmos no link.</p>

                        <p>Esse alvo pode ser uma outra página html ou um script de servidor em php, por exemplo.</p>

                        <p>Pode até apontar para uma imagem ou outro arquivo qualquer (e então o navegador perguntará so o usuário quer fazer o
                            <strong>download</strong> ou abrí-lo com algum programa).</p>

                        <p>O alvo pode estar em um nível hierarquico de pasta diferente, para baixo ou para cima.</p>

                        <p>Trata-se do <strong>endereço relativo</strong>. Vamos para baixo, de pasta em pasta, com o símbolo <code>../</code> exemplo:</p>

                        <pre><code>&lt;a href="../../../pagina-ao-clicar.html"&gt;Isto é um link 3 pastas abaixo&lt;/a&gt;</code></pre>

                        <p>E para cima, com o nome da pasta, exemplo:</p>

                        <pre><code>&lt;a href="pasta/pasta/pasta/pagina-ao-clicar.html"&gt;Isto é um link três pastas acima&lt;/a&gt;</code></pre>

                        <p>Na URL da âncora também podemos passar parâmetros com um par de valor, onde o primeiro valor é o nome da variável e o
                            segundo é o valor dessa variável, mas isso nos veremos mais afundo quando estivermos estudando uma linguagem "do lado
                            do servidor". Exemplo:</p>

                        <pre><code>&lt;a href="script.php?varA=valor1&amp;varB=valor2"&gt;Isto é um link com dois parâmetros&lt;/a&gt;</code></pre>

                        <p>O link pode sofrer estilizações interessantes. É muito comum estilizar o link como se fosse um botão e há também um
                            efeito que é acionado quando passamos o mouse por cima: é o <strong>hover</strong> (por cima, pairar). Para estilizar o "hover" utiliza-se
                            de <strong>pseudoclasses</strong>, a regra CSS abaixo adiciona a cor vermelha a link apenas quando passamos o mouse sobre ele.</p>

                        <pre><code>a:hover {background-color: red}</code></pre>
                    </div>

                    <div class="bs-docs-section" id="html-listas">
                        <div class="page-header">
                            <h1>Listas</h1>
                        </div>

                        <pre><code>&lt;ul&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

                        <p>As listas ajudam a organizar o conteúdo mas fazem muito mais do que isso. Elas são utilizadas principalmente para
                            criar menus (com a ajuda da CSS, é claro). Esses menus podem ser verticais (que é a disposição natural das listas) ou
                            podem ser horizontais. O efeito horizontal é produzido com o auxílio da propriedade  <code>float</code> (CSS). Essa propriedade,
                            quando utilizada sabiamente, produz resultados interessantes. Ela faz os elementos flutuarem para a direita ou para a
                            esquerda. Voltaremos a falar sobre o <strong>float</strong> em breve.</p>

                        <p>A tag <code>ul</code> é um container que comporta os item da lista, as tag's <code>li</code>. Em outras palavras, o <code>ul</code> é a lista e os <code>li</code>
                            são os itens. <code>ul</code> siginifca <strog>unordened list</strong> (lista não ordenada), há também a lista <code>ol</code> (ordened list) que é
                            exatamente o inverso.</p>

                            <pre><code>&lt;ol&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

                    </div>

                    <div class="bs-docs-section" id="html-paragr-imgs">
                        <div class="page-header">
                            <h1>Parágrafos e imagens</h1>
                        </div>

                        <pre><code>&lt;p&gt;Isto é um parágrafo&lt;/p&gt;

&lt;p&gt;
    Este parágrafo contém uma imagem
    &lt;img src="imagem.png" alt="texto alternativo" /&gt;
&lt;/p&gt;
</code></pre>

                        <p>A tag <code>p</code> também é muito comum, ela representa um parágrafo e, obviamente, acomoda textos.</p>

                        <p>A tag <code>img</code> representa uma imagem, a propriedade <code>src</code> diz aonde a imagem se encontra gravada e também obedece a
                            hierarquia do sistema de arquivos (como o <code>href</code>). Já a proprieda <code>alt</code> é um texto alternativo que será exibido caso
                            o caminho para a imagem seja inválido.</p>

                        <p>Estou apresentando as duas tag's juntas para ilustrar como elas se interagem. As duas tag's sozinhas não fazem muita
                            coisa, mas se adicionarmos ao tempero a propriedade <code>float</code> (olha ela aí denovo) a brincadeira ficará mais interessante.</p>

                        <p>Podemos dizer para a imagem flutuar à equerda, então o texto fluirá para o lado inverso (direita).
                            Veja o código abaixo e o resultado <a href="p_img_e.html" title="link-externo">aqui</a>.</p>

                        <pre><code>&lt;p&gt;
    &lt;img src="tom-jobim.jpg" alt="Tom Jobim" style="float: left" /&gt;
    Antônio Carlos Brasileiro de Almeida Jobim (Rio de Janeiro, 25 de janeiro de 1927 —
    Nova Iorque, 8 de dezembro de 1994),  mais conhecido como Tom Jobim, foi um compositor, maestro, pianista,
    cantor, arranjador e violonista brasileiro.
&lt;/p&gt;
&lt;p&gt;
    É considerado o maior expoente de todos os tempos da música brasileira pela revista Rolling Stone, e um dos
    criadores do movimento da bossa nova.
&lt;/p&gt;
&lt;p&gt;
    Pensou em trabalhar como arquiteto, chegando a cursar o primeiro ano da faculdade e até a se empregar em um
    escritório, mas logo desistiu e decidiu ser pianista. Tocava em bares e boates em Copacabana, como no Beco
    das Garrafas no início dos anos 1950, até que em 1952 foi contratado como arranjador pela gravadora
    Continental, onde trabalhou com Sávio Silveira. Além dos arranjos, também tinha a função de transcrever para
    a pauta as melodias de compositores que não dominavam a escrita musical. Datam dessa época as primeiras
    composições, sendo a primeira gravada "Incerteza", uma parceria com Newton Mendonça, na voz de Mauricy Moura.
&lt;/p&gt;
</code></pre>

                        <p>... ou podemos dizer para a imagem flutuar à direita e então o texto fluirá a esquerda.
                            Veja o código abaixo e o resultado <a href="p_img_d.html" title="link-externo">aqui</a>.</p>

                        <pre><code>&lt;p&gt;
    &lt;img src="tom-jobim.jpg" alt="Tom Jobim" style="float: right" /&gt;
    Antônio Carlos Brasileiro de Almeida Jobim (Rio de Janeiro, 25 de janeiro de 1927 —
    Nova Iorque, 8 de dezembro de 1994),  mais conhecido como Tom Jobim, foi um compositor, maestro, pianista,
    cantor, arranjador e violonista brasileiro.
&lt;/p&gt;
&lt;p&gt;
    É considerado o maior expoente de todos os tempos da música brasileira pela revista Rolling Stone, e um dos
    criadores do movimento da bossa nova.
&lt;/p&gt;
&lt;p&gt;
    Pensou em trabalhar como arquiteto, chegando a cursar o primeiro ano da faculdade e até a se empregar em um
    escritório, mas logo desistiu e decidiu ser pianista. Tocava em bares e boates em Copacabana, como no Beco
    das Garrafas no início dos anos 1950, até que em 1952 foi contratado como arranjador pela gravadora
    Continental, onde trabalhou com Sávio Silveira. Além dos arranjos, também tinha a função de transcrever para
    a pauta as melodias de compositores que não dominavam a escrita musical. Datam dessa época as primeiras
    composições, sendo a primeira gravada "Incerteza", uma parceria com Newton Mendonça, na voz de Mauricy Moura.
&lt;/p&gt;
</code></pre>
                    </div>

                    <div class="bs-docs-section" id="html-tabelas">
                        <div class="page-header">
                            <h1>Tabelas</h1>
                        </div>

                        <p>As tabelas acomodam dados tabulares.</p>

                        <p>Isso parece óbvio, mas não foi assim no começo da internet. Pela falta de recursos apropriados e pela instabilidade
                            advinda dos navegadores, muitos desenvolvedores utilizavam-se de tabelas para fazer o layout da página. Isso é uma
                            prática condenável e seu remédio chama-se <strong>tableless</strong>, que nada mais é do que um conceito (ou talvez um princípio) onde
                            evita-se utilizar a tabela em algo que não seja dados tabulares.</p>

                        <p>Uma tabela contém linhas (<code>tr</code>) e campos (<code>td</code>). às vezes podem conter as tag's <code>thead</code>, <code>tbody</code> e <code>tfoot</code> que representam
                            o cabeçalho, o corpo e o rodapé da tabela, respectivamente.</p>

                        <p>Quando temos campos do cabeçalho (dentro da tag <code>thead</code>) utilizamos a tag <code>th</code> no lugar da <code>td</code>, pois essa
                            representam melhor o cabeçalho.</p>

                        <pre><code>&lt;table&gt;

    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;campo 1&lt;/th&gt;
            &lt;th&gt;campo 2&lt;/th&gt;
            &lt;th&gt;campo 3&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;

    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;dado 1&lt;/td&gt;
            &lt;td&gt;dado 2&lt;/td&gt;
            &lt;td&gt;dado 3&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;dado 1&lt;/td&gt;
            &lt;td&gt;dado 2&lt;/td&gt;
            &lt;td&gt;dado 3&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;dado 1&lt;/td&gt;
            &lt;td&gt;dado 2&lt;/td&gt;
            &lt;td&gt;dado 3&lt;/td&gt;
        &lt;/tr&gt;

    &lt;/tbody&gt;

    &lt;tfoot&gt;
        Este é o rodapé
    &lt;/tfoot&gt;

&lt;/table&gt;
</code></pre>
                    </div>

                    <div class="bs-docs-section" id="html-forms-inputs-labels">
                        <div class="page-header">
                            <h1>Formulários, inputs e labels</h1>
                        </div>

                        <p>Um formulário na web normalmente é chato de se preencher, só que ele é a alma dos aplicativos web, pois é através de seus
                            campos que o usuário faz a inserção dos dados e, dessa forma, interaje com o sistema.</p>

                        <p>Um formulário pode (e deve) conter elementos que formam um par <code>nome=valor</code>, por exemplo, um campo de entrada de
                            texto (uma text box) chama-se "pais" e o seu valor é o texto "Brasil". Quando esse formulário submeter seus dados para o
                            servidor ele poderá trabalhar com a variável "pais" e seu valor será, adivinhe, "Brasil".</p>

                        <p>Esse negócio é tão simples que fica até difícil de explicar. rs.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Formulário do Facebook" src="form_facebook.png">
                        </div>

                        <p>Veja o famoso formulário do Facebook. Vamos analisar apenas a "tarja azul". Tamos os campos "login", "senha" e uma
                            chekbox "mantanha-me conectado". Quando o usuário preencher os dados e clicar no botão "Entrar" o servidor poderá
                            trabalhar com os seguintes dados:</p>

                        <ul>
                            <li>login=email@digitado</li>
                            <li>senha=1234</li>
                            <li>manter=false</li>
                        </ul>

                        <p>Essa questão da interação formulário/servidor nós trataremos no curso de PHP, ok? Aqui no curso de HTML e CSS vamos nos
                            deter apenas em seu layout e estrutura.</p>
                    </div>

                    <div class="bs-docs-section" id="html-divs-span">
                        <div class="page-header">
                            <h1>Div's e Span's</h1>
                        </div>

                        <p>A tag <code>div</code> é um elemento do tipo <strong>conteiner</strong> que acomoda outras tag's, é um <code>div</code>sor de espaços.
                            A tag <code>span</code> acomoda pequenos trechos de texto.</p>

                        <p>Ambas as tag's são muito utilizadas em conjunto com o CSS visando sofrer alguma estilização posterior.</p>

                        <pre><code>&lt;div&gt;

&lt;/div&gt;

&lt;span&gt;um pequeno texto&lt;/span&gt;
</code></pre>
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
                                    <a href="http://www.codecademy.com/glossary/html  " class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">HTML Glossary (codecademy)</h4>
                                        <p class="list-group-item-text">Um pequeno glossário do site codecadmey..</p>
                                        <span class="label label-default">http://www.codecademy.com/glossary/html  </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/html-css/basico/html-intro/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_HTML]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->links, Core::SECAO_HTML);
        $core->lista->link_ativo = "/html-css/basico/html-intro/";
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
