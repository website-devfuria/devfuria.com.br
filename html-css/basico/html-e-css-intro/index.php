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
        $core->head = new Head();
        $core->head->setTitle('HTML & CSS');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <!-- Menu superior -->
        <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../" class="navbar-brand">DevFuria</a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../css">PHP</a>
                        </li>
                        <li>
                            <a href="#">JavaScript</a>
                        </li>
                        <li class="active">
                            <a href="#">HTML & CSS</a>
                        </li>
                        <li>
                            <a href="#">Lógica de programação</a>
                        </li>
                        <li>
                            <a href="#">RegExp</a>
                        </li>
                        <li>
                            <a href="#">(My)Sql</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header><!-- Menu superior -->


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Primeiro contato com HTML e CSS</h1>
                <p>Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                <strong>
                    <a href="../2.3.2/">Looking for Bootstrap 2.3.2 docs?</a>
                </strong>
                We've moved it to a new home while we push forward with Bootstrap 3. <a href="http://blog.getbootstrap.com/">Read the blog</a> for details.
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
                                <a href="#html">Elementos básicos HTML</a>
                                <ul class="nav">
                                    <li><a href="#html-ancora">Âncora(link)</a></li>
                                    <li><a href="#html-listas">Listas</a></li>
                                    <li><a href="#html-paragr-imgs">Parágrafos e imagens</a></li>
                                    <li><a href="#html-tabelas">Tabelas</a></li>
                                    <li><a href="#html-forms-inputs-labels">Formulários, inputs e labels</a></li>
                                    <li><a href="#html-divs-span">Div's e Span's</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#css">Cascading Style Sheets</a>
                                <ul class="nav">
                                    <li><a href="#css-unindo">Unindo o CSS ao HTML</a></li>
                                    <li><a href="#css-inline">CSS - inline (na linha)</a></li>
                                    <li><a href="#css-embeded">CSS - embeded (incorporadas)</a></li>
                                    <li><a href="#css-linked">CSS - linked (externos)</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="html">Elementos básicos HTML</h1>
                        </div>

                        <p class="">Vamos dar uma rápida olhada nas tag's básicas e depois uma "passeada" com o CSS.</p>

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="html-ancora">Âncora(link)</h3>
                            </div>                        

                            <pre><code>&lt;a href="pagina-ao-clicar.html"&gt;Isto é um link&lt;/a&gt;</code></pre>

                            <p>O link possui a proprieda <em>href</em> (hypertext reference) que nada mais é do que o alvo que será
                                alcançado quando clicarmos no link.</p>

                            <p>Esse alvo pode ser uma outra página html ou um script de servidor em php, por exemplo.</p>

                            <p>Pode até apontar para uma imagem ou outro arquivo qualquer (e então o navegador perguntará so o usuário quer fazer o
                                <em>download</em> ou abrí-lo com algum programa).</p>

                            <p>O alvo pode estar em um nível hierarquico de pasta diferente, para baixo ou para cima.</p>

                            <p>Trata-se do <em>endereço relativo</em>. Vamos para baixo, de pasta em pasta, com o símbolo <em>"../"</em> exemplo:</p>

                            <pre><code>&lt;a href="../../../pagina-ao-clicar.html"&gt;Isto é um link 3 pastas abaixo&lt;/a&gt;</code></pre>
                            <div class="highlight">
<pre>
<code class="html">
&lt;a href="../../../pagina-ao-clicar.html"&gt;Isto é um link 3 pastas abaixo&lt;/a&gt;
</code>                            
</pre>
                            </div>
                            
                            <p>E para cima, com o nome da pasta, exemplo:</p>

                            <pre><code>&lt;a href="pasta/pasta/pasta/pagina-ao-clicar.html"&gt;Isto é um link três pastas acima&lt;/a&gt;</code></pre>

                            <p>Na URL da âncora também podemos passar parâmetros com um par de valor, onde o primeiro valor é o nome da variável e o
                                segundo é o valor dessa variável, mas isso nos veremos mais afundo quando estivermos estudando uma linguagem "do lado
                                do servidor. Exemplo:</p>

                            <pre><code>&lt;a href="script.php?varA=valor1&amp;varB=valor2"&gt;Isto é um link com dois parâmetros&lt;/a&gt;</code></pre>

                            <p>O link pode sofrer estilizações interessantes. É muito comum estilizar o link como se fosse um botão e há também um
                                efeito que é acionado quando passamos o mouse por cima: é o <em>hover</em> (por cima, pairar). Para estilizar o "hover" utiliza-se
                                de <em>pseudoclasses</em>, a regra CSS abaixo adiciona a cor vermelha a link apenas quando passamos o mouse sobre ele.</p>

                            <pre><code>a:hover {background-color: red}</code></pre>
                        </div>                        

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="html-listas">Listas</h3>
                            </div>                         


                            <pre><code>&lt;ul&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

                            <p>As listas ajudam a organizar o conteúdo mas fazem muito mais do que isso. Elas são utilizadas principalmente para
                                criar menus (com a ajuda da CSS, é claro). Esses menus podem ser verticais (que é a disposição natural das listas) ou
                                podem ser horizontais. O efeito horizontal é produzido com o auxílio da propriedade  <em>float</em> (CSS). Essa propriedade,
                                quando utilizada sabiamente, produz resultados interessantes. Ela faz os elementos flutuarem para a direita ou para a
                                esquerda. Voltaremos a falar sobre o float em breve.</p>

                            <p>A tag "ul" é um container que comporta os item da lista, as tag's "li". Em outras palavras, o "ul" é a lista e os "li"
                   

             são os itens. "ul" siginifca "unordened list" (lista não ordenada), há também a lista "ol" (ordened list) que é
                                exatamente o inverso.</p>

                            <pre><code>&lt;ol&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
    &lt;li&gt;&lt;/li&gt;
&lt;/ol&gt;
</code></pre>

                        </div>                         

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="html-paragr-imgs">Parágrafos e imagens</h3>
                            </div>                         

                            <pre><code>&lt;p&gt; Isto é um parágrafo&lt;/p&gt;

&lt;p&gt;
    Este parágrafo contém uma imagem
    &lt;img src="imagem.png" alt="texto alternativo" /&gt;
&lt;/p&gt;
</code></pre>

                            <p>A tag <em>"p"</em> também é muito comum, ela representa um parágrafo e, obviamente, acomoda textos.</p>

                            <p>A tag <em>"img"</em> representa uma imagem, a proprieda <em>"src"</em> diz aonde a imagem se encontra gravada e também obedece a
                                hierarquia do sistema de arquivos (como o 'href'). Já a proprieda <em>"alt"</em> é um texto alternativo que será exibido caso
                                o caminho para a imagem seja inválido.</p>

                            <p>Estou apresentando as duas tag's juntas para ilustrar como elas se interagem. As duas tag's sozinhas não fazem muita
                                coisa, mas se adicionarmos ao tempero a propriedade <em>float</em> (olha ela aí denovo) a brincadeira ficará mais interessante.</p>

                            <p>Podemos dizer para a imagem flutuar à equerda, então o texto fluirá para o lado inverso (direita).
                                Veja o código abaixo e o resultado <a href="p_img_e.html">aqui</a>.</p>

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
                                Veja o código abaixo e o resultado <a href="p_img_d.html">aqui</a>.</p>

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

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="html-tabelas">Tabelas</h3>
                            </div>                           

                            <p>As tabelas acomodam dados tabulares.</p>

                            <p>Isso parece óbvio, mas não foi assim no começo da internet. Pela falta de recursos apropriados e pela instabilidade
                                advinda dos navegadores, muitos desenvolvedores utilizavam-se de tabelas para fazer o layout da página. Isso é uma
                                prática condenável e seu remédio chama-se <em>tableless</em>, que nada mais é do que um conceito (ou talvez um princípio) onde
                                evita-se utilizar a tabela em algo que não seja dados tabulares.</p>

                            <p>Uma tabela contém linhas (tr) e campos (td). às vezes podem conter as tag's "thead", "tbody" e "tfoot" que representam
                                o cabeçalho, o corpo e o rodapé da tabela, respectivamente.</p>

                            <p>Quando temos linhas campos do cabeçalho (dentro da tag "thead") utilizamos a tag "th" no lugar da "td", pois essa
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

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="html-forms-inputs-labels">Formulários, inputs e labels</h3>
                            </div>                          

                            p>Um formulário na web normalmente é chato de se preencher, só que ele é a alma dos aplicativos web, pois é através de seus
                            campos que o usuário faz a inserção dos dados e, dessa forma, interaje com o sistema.</p>

                            <p>Um formulário pode (e deve) conter elementos que "formam" um par "nome=valor", por exemplo, um campo de entrada de
                                texto (uma text box) chama-se "pais" e o seu valor é o texto "Brasil". Quando esse formulário submeter seus dados para o
                                servidor ele poderá trabalhar com a variável "pais" e seu valor será, adivinhe, "Brasil".</p>

                            <p>Esse negócio é tão simples que fica até difícil de explicar. rs.</p>

                            <div class="imagem">
                                <img src="../../imagens/form_facebook.png" alt="Formulário do Facebook" />
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

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="html-divs-span">Div's e Span's</h3>
                            </div>                              

                            <p>A tag "div" é um elemento do tipo "conteiner" que acomoda outras tag's, é um <em>div</em>sor de espaços.
                                A tag "span" acomoda pequenos trechos de texto.</p>

                            <p>Ambas as tag's são muito utilizadas em conjunto com o CSS visando sofrer alguma estilização posterior.</p>

                            <pre><code>&lt;div&gt;

&lt;/div&gt;

&lt;span&gt;um pequeno texto&lt;/span&gt;
</code></pre>                        
                        </div>                          

                    </div>                        

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="css">Cascading Style Sheets</h1>
                        </div>

                        <p>Quem começa a aprender CSS logo se pergunta: <em>o que será esse negócio de cascata?</em>. É um conceito. Ainda temos a
                            questão da especificidade e da herânça (nada a ver com oop, olha lá hein!!!).</p>

                        <p>Tudo bem, que tal não esquentarmos a cabeça com isso por enquanto? Vamos focar no básico e depois, quando estiver mais
                            familiarizado, voltamos para "fechar" esses conceitos, ok?</p>

                        <p>Na matéria <a href="../onde-tudo-comecou">"onde tudo começou"</a> vimos como é a estrutura de uma rule-set. Sempre que estilizamos
                            o HTML precisamos pensar primeiro em <em>qual será o nosso(s) elemento(s) alvo?</em> E na sequência aplicamos o rule-set.
                            Há uma dúzia de formas diferentes de encontrar elementos HTML. Fazemos isso através dos <em>seletores</em>.</p>

                        <p>A CSS também possui <em>unidades de medidas</em>: px(pixel), pt(pontos), em(relativo ao tamanho da fonte) e %(porcentagem).
                            A mais simples e conhecida é a <em>pixel</em>. Um pixel representa um ponto na tela, veja figura abaixo:</p>

                        <div class="imagem">
                            <img src="../../imagens/pixel.png" alt="Pixel" />
                            <p><a href="http://pt.wikipedia.org/wiki/Pixelx">Fonte da imagem acima</a></p>
                        </div>

                        <p><em>As cores</em> normalmente são apresentadas pela combinação das cores primárias. Dizemos ao navegador o quanto queremos de
                            vermelho, verde e azul e assim vamos montando todas as outras cores.</p>

                        <p>Então devemos seguir o esquema <em>rgb</em> que significa red, green e blue, respectivamente. Os valores possíveis estão entre
                            0(zero) e 255, onde 0 significa que não temos nada do tom desejado e 255 significa que temos o máximo do tom desejado.</p>

                        <p>Abaixo vemos a forma decimal e hexadecimal que representa a cor vermelha:</p>

                        <pre><code>rgb(255, 0, 0)
#FF0000
</code></pre>

                        <div class="imagem">
                            <img src="../../imagens/cores.png" alt="Pixel" />
                        </div>

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="css-unindo">Unindo o CSS ao HTML</h3>
                            </div>  

                            <p>Agora precisamos aprender como unir a CSS ao documento HTML.</p>

                            <p>"Colamos" a CSS ao HTML de 3 formas distintas: <em>inline, embeded e linked</em>. Vejamos:</p>

                            <h3 id='css-inline'>CSS - inline (na linha)</h3>

                            <p>Inline o método mais simples, declaramos a regra com o emprego do atributo "style" do HTML, exemplo:</p>

                            <div class="code">
                                <h6>HTML & CSS</h6>
                                <pre>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTítulo da página&lt/title&gt
    &lt/head&gt
    &ltbody&gt

        &lth1&gtUm título qualquer&lt/h1&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtprimeiro parágrafo/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtsegundo parágrafo&lt/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtterceiro parágrafo&lt/p&gt

        &lth2&gtOutro título qualquer&lt/h2&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtquarto parágrafo&lt/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtquinto parágrafo&lt/p&gt
        &ltp &ltem&gtstyle="font-size: 12px; color#767676"&lt/em&gt&gtsexto parágrafo&lt/p&gt

    &lt/body&gt
&lt/html&gt
                                </pre>
                            </div>

                            <p>O leitor atento notou que tivemos que repetir a regra em cada parágrafo. Essa forma além de repetir código, não ajuda na
                                legibilidade e NÂO permite o controle centralizado da CSS. Programadores e designs, no geral, evitam a CSS inline.
                                Ainda não "dá cadeia" utilizar-se de CSS inline, se achar que precise dela, pode usá-la com bom censo.</p>

                            <h3 id='css-embeded'>CSS - embeded (incorporadas)</h3>

                            <p>Coloca-se as regras de CSS entre a tag "style" na seção "head" do HTML, veja o exemplo:</p>

                            <div class="code">
                                <h6>HTML e CSS</h6>
                                <pre>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTítulo da página&lt/title&gt
        <em>&ltstyle type="text/css" media="all"&gt
        p {
            font-size: 12px;
            color: #767676;
        }</em>
        &lt/style&gt
    &lt/head&gt
    &ltbody&gt

        &lth1&gtUm título qualquer&lt/h1&gt
        &ltp&gtprimeiro parágrafo/p&gt
        &ltp&gtsegundo parágrafo&lt/p&gt
        &ltp&gtterceiro parágrafo&lt/p&gt

        &lth2&gtOutro título qualquer&lt/h2&gt
        &ltp&gtquarto parágrafo&lt/p&gt
        &ltp&gtquinto parágrafo&lt/p&gt
        &ltp&gtsexto parágrafo&lt/p&gt

    &lt/body&gt
&lt/html&gt
                                </pre>
                            </div>

                            <p>Já é bem melhor que o método anterior: já é possível localizar a CSS com mais facilidade no documento.
                                Mas há o método campeão...</p>

                            <h3 id='css-linked'>CSS - linked (externos)</h3>

                            <p>Coloca-se as regras de CSS em um arquivo separado do HTML. Normalmente a extensão do arquivo é <em>.css</em>. A "cola" é
                                realizada através da tag <em>"link"</em>, veja código de exemplo:</p>

                            <div class="code">
                                <h6>HTML</h6>
                                <pre>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTítulo da página&lt/title&gt
        <em>&ltlink rel="stylesheet" type="text/css" href="estilos.css" media="all" /&gt</em>
    &lt/head&gt
    &ltbody&gt

        &lth1&gtUm título qualquer&lt/h1&gt
        &ltp&gtprimeiro parágrafo/p&gt
        &ltp&gtsegundo parágrafo&lt/p&gt
        &ltp&gtterceiro parágrafo&lt/p&gt

        &lth2&gtOutro título qualquer&lt/h2&gt
        &ltp&gtquarto parágrafo&lt/p&gt
        &ltp&gtquinto parágrafo&lt/p&gt
        &ltp&gtsexto parágrafo&lt/p&gt

    &lt/body&gt
&lt/html&gt
                                </pre>
                            </div>

                            <p>Agora sim temos um método profissional. Toda CSS fica em arquivo separado que é incluso no HTML através de uma única linha.
                                Há vantagens e desvantagens em cada um dos métodos, discutiremos isso em breve, por hora saiba que esse é o método mais
                                adequado e por essa razão o que mais utilizaremos no curso, porém não leve tudo a ferro-e-fogo: pode lançar mão das 3
                                formas quando e onde achar melhor.</p>

                            <h2>Ufa!</h2>

                            <p>Âncoras, listas, parágrafos, imagens, propriedade float, tabelas, formulários, div, span, CSS, seletores, rule-set, pixel,
                                unidades de medidas, cores, CSS inline, CSS embeded, CSS linked. Vimos bastante coisas nesta matéria, vamos agora
                                entender a diferênca entre os elementos "in-line" e "level-block"... na próxima matéria é lógico.</p>
                            <p class="fim">
                                <span class="label label-info fim-e">
                                    Flávio Micheletti,
                                    atualizado em 11/02/2013,
                                    escrito em 23/01/2013.
                                </span>                             
                                <span class="fim-d">
                                    Fim da matéria
                                </span>                        

                        </div>

                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <!-- Footer
        ================================================== -->
        <footer class="bs-footer" role="contentinfo">
            <div class="container">
                <div class="bs-social">
                    <ul class="bs-social-buttons">
                        <li>
                            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twbs&amp;repo=bootstrap&amp;type=watch&amp;count=true" width="100" height="20" title="Star on GitHub"></iframe>
                        </li>
                        <li>
                            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twbs&amp;repo=bootstrap&amp;type=fork&amp;count=true" width="102" height="20" title="Fork on GitHub"></iframe>
                        </li>
                        <li class="follow-btn">
                            <a href="https://twitter.com/twbootstrap" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @twbootstrap</a>
                        </li>
                        <li class="tweet-btn">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://getbootstrap.com/" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Creator of Twitter Bootstrap">Tweet</a>
                        </li>
                    </ul>
                </div>


                <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
                <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
                <ul class="footer-links">
                    <li><a href="../2.3.2/">Bootstrap 2.3.2 docs</a></li>
                    <li class="muted">&middot;</li>
                    <li><a href="http://blog.getbootstrap.com">Blog</a></li>
                    <li class="muted">&middot;</li>
                    <li><a href="https://github.com/twbs/bootstrap/issues?state=open">Issues</a></li>
                    <li class="muted">&middot;</li>
                    <li><a href="https://github.com/twbs/bootstrap/releases">Releases</a></li>
                </ul>
            </div>
        </footer>

    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
