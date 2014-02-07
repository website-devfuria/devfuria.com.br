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
        $core->head->setTitle('Introdução ao HTML e ao CSS');
        $core->head->setDescription('Aprenda sobre: tags básicas de HTML, corpo de HTML, CSS, seletores, propriedades e ferramentas que ajuadm no desenvolvimento');
        $core->head->setkeywords('começando com HTML, começando com CSS, corpo do html, tags básicas de HTML, firbug, webdeveloper');
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
                <h1>Onde tudo começou</h1>
                <p></p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">11/02/2013</span>, escrito em <span class="label label-info">23/01/2013. </span>
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
                                <a href="#intro">Um pouco de história...</a>
                            </li>
                            <li>
                                <a href="#afinal">Mas afinal, o que é HTML?</a>
                                <ul class="nav">
                                    <li>
                                        <a href="#w3c">W3C</a>
                                    </li>
                                    <li>
                                        <a href="#siglas">HTML, DHTML , XHTML, HTML5</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#css">E esse tal de CSS?</a>
                                <ul class="nav">
                                    <li>
                                        <a href="#css-poder">O poder da CSS</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#ferramentas">Ferramentas!</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Um pouco de história...</h1>
                        </div>

                        <p>Tim Berners-Lee, a culpa é toda dele. No começo dos anos 90, o dito cujo, inventou o HTML (HyperText Markup Language) que
                            significa Linguagem de Marcação de Hipertexto. Ele queria facilitar a comunicação de suas pesquisas com seus colegas
                            e acabou resolvendo o problema de todo mundo, nascia a web.</p>

                        <p>A idéia era simples e genial, era possível criar e disponibilizar um arquivo de texto simples com conteúdo HTML, via rede,
                            para outro computador. No computador de destino, um software chamado web-browser (navegador web) era encarregado de exibir
                            o conteúdo HTML. Não podemos esquecer de mencionar o protocolo HTTP (Hypertext Transfer Protocol, Protocolo de
                            Transferência de Hipertexto) que também é invenção de Lee e é peça primordial da web.</p>

                        <p>A web teve um crescimento rápido. Nessa época, "nosso bebê", já tinha pernas e músculos bem desenvolvidos e dava seus
                            primeiros passos. Não demorou muito para surgirem empresas interessadas na tecnologia, como foi o caso da Netscape. Ela
                            estava interessada no navegador web e criou um com o mesmo nome da empresa. A Microsof, apesar de atrasada, também
                            queria sua fatia do mercado e lançou e destemido (ou talvez temido) Internet Explore, vulgo IE.</p>

                        <p>Essa passagem histórica ficou connhecida como "a guerra dos navegadores", procure na web por esse termo. Nas Faculdades
                            de tecnologia é muito comum exibirem um filme que deve ter o mesmo nome (não lembro bem). Vale apena assitir. Essa fase
                            definiu o que conhecemos hoje por Cross-browser, que nada mais é do que a habilidade de construir um site com suporte a
                            vários navegadores, falaremos dele em breve, apenas adianto que dá para perder alguns cabelos.</p>

                        <p>Essa é a (humilde, diga-se de passagem) história da Internet. E a história da HTML faz parte dela, mas o que nos
                            interessa é apenas enteder o HTML e a CSS. Como já disse, a história de ambas é muito interessante e vale a pena aprender
                            sobre o assunto. A web está cheia de sites e documentos falando à respeito, fica a critério do leitor buscar essas
                            informações. Por hora, vamos nos deter apenas no universo do HTML e da CSS.</p>

                        <div class="bs-example">
                            <img class="img-thumbnail" alt="### Tim Berners Lee" src="tim-berners-lee.jpg">
                            <p>Tim Berners-Lee, esse é o cara!.</p>
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="afinal">Mas afinal, o que é HTML?</h1>
                        </div>

                        <p><strong>HTML, originalmente, marca o conteúdo</strong>. Ele faz isso através de sua "etiquetas", ou melhor, através de suas <strong>tag's</strong>.
                            A tag "p" define um parágrafo, por exemplo. Vejamos algumas tag's bem conhecidas:</p>

                        <ul>
                            <li><code>html</code> - define o próprio documento HTML.</li>
                            <li><code>head</code> - define o cabeçalho do documento.</li>
                            <li><code>titlte</code> - define o título.</li>
                            <li><code>body</code> - define o corpo.</li>
                            <li><code>h1</code> - definie o primeiro título(o mais importante).</li>
                            <li><code>h2</code> - definie o segudo título, e assim até o h6.</li>
                            <li><code>a</code> -  define uma âncora, quero dizer, o famoso link.</li>
                            <li><code>img</code> - define uma imagem</li>
                        </ul>

                        <p>As tag's devem ser abraçadas pelos sinais de maior e menor, dessa forma: <code>&lt;nome da tag&gt</code>; e toda tag aberta deve ser fechada.</p>

                        <p>A barra para direita indica qual é a <strong>tag de fechamento</strong>, exemplo: <code>&lt;p&gt;aqui é um parágrafo&lt;/p&gt;</p></code>

                        <p>Abaixo conferimos um arquivo HTML na sua essência:</p>

                        <div class="code">
                            <h6>HTML(inválido)</h6>
                            <pre><code>
&lthtml&gt
    &lthead&gt
        &lttitle&gtTítulo da página&lt/title&gt
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
&lt/html&gt</code></pre>
                        </div>

                        <p>Repare que eu coloquei a palavra "inválido" alertando quanto à validade do HTML.
                            O código acima não é valido e serve apenas para fins didâticos e ilustrativo.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### HTML basico" src="html-basico.jpg">
                            <p><a href="http://sigarra.up.pt/up/pt/web_base.gera_pagina?p_pagina=1011879" title="link-externo">Fonte da imagem acima</a></p>
                        </div>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="w3c">W3C</h3>
                            </div>

                            <p>Completando a história da HTML: o W3C é um consórcio que regulamenta as especificações tanto do HTML como do CSS. O
                                W3C é a fonte oficial do HTML e CSS. É possível encontrar as traduções das especificações para a língua portuguesa.
                                Dois pequenos alertas :  a) Estudar pela especificação é mais difícil (e mais chata também) e b) nem todos os navegadores
                                implementam as especificações em sua totalidade, isso significa que a especificação diz uma coisa e seu navegador
                                comporta-se de outro, restando para o programador e/ou desginer "se virar" para encontrar um solução.</p>
                        </div>

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="siglas">HTML, DHTML , XHTML, HTML5, no final das contas é tudo HTML</h3>
                            </div>

                            <p>No início era apenas HTML, depois veio DHTML (o "d" era de Dynamic), depois o XHTML e hoje temos o HTML5.
                                Sim, são coisas distintas umas das outras, mas em sua essência não passam de mero HTML. Por simplificação, utilizaremos
                                o termo HTML de forma gernérica e quando for necessário ser mais específico utilzaremos o termo correto.</p>

                            <p>O HTML5 é a versão mais atual do HTML. O grupo WHATWG (<a href="http://www.whatwg.org/" title="link-externo">http://www.whatwg.org/</a>) não teve a mesma
                                pasciência que o w3c e saiu na frente com as especificações da tão esperada HTML5. A nova versão excluíu alguns
                                elementos já defazados, inseriu alguns outros mais "semânticos" e trouxe novidades como videos, armazenamento local,
                                canvas(uma prancheta para você desenhar via código), geo-location, web off-line, campos com autofoco, placeholders e muito
                                mais. Se você é novato em HTML talvez não tenha entendido nada do que listamos sobre o HTML5, mas fique tranquilo(a),
                                veremos HTML concomitante com o HTML5.</p>

                            <div class="bs-example">
                                <img class="img-rounded" alt="### Histórico do HMTL" src="fmt-html-versions.png">
                                <p><a href="http://www.webarchive.org.uk/ukwa/visualisation/ukwa.ds.2/fmt" title="link-externo">Fonte da imagem acima</a></p>
                            </div>

                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="css">E esse tal de CSS?</h1>
                        </div>

                        <p>CSS (Cascading Style Sheet) determina a estilização do contéudo.</p>

                        <blockquote>
                            <p>Folha de estilo em cascata é um mecanismo simples para adicionar estilos
                                ( por exemplo: fontes, cores, espaçamentos) aos documentos web.
                                <small>Fonte: W3c</small></p>
                        </blockquote>

                        <p>Com a CSS é possível estilizar páginas HTML e assim, separar as obrigações de cada tecnologia:</p>

                        <ul>
                            <li>A HTML define a estrutura do documento e</li>
                            <li>A CSS definie a estilização</li>
                        </ul>

                        <p>A CSS é composta pelo que se chama de "regras de estilização"(rule-sets), um exemplo de regra seria: <strong>"todo parágrafo deve ter o
                                tamanho da fonte em 12px e sua cor deve ser #767676"</strong>, traduzindo em código css ficaria assim:</p>

                        <div class="code">
                            <h6>CSS</h6>
                            <pre><code>p {
    font-size: 12px;
    color: #767676;
}</code></pre>
                        </div>

                        <p>A letra "p" é o <code>seletor</code>, é o alvo da regra CSS.</p>

                        <p>Entre as chaves, neste exemplo, há duas propriedades: <code>font-size</code>  e <code>color</code>.</p>

                        <p><code>12px</code> e <code>#767676</code> são seus respectivos valores.
                            A regra CSS pode conter várias declarações separadas por ponto e vírgula.</p>

                        <p>Obs: #767676 é um  hexadecimal representando uma cor (um cinza escuro). Há outras formas de referênciar as cores,
                            voltaremos nelas em breve.</p>

                        <p>Se uma imagem vale por mil palavras, vou lhe mandar 4 imagens, espero que valham 4 mil palavras...</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Seletor CSS" src="css-syntax01.gif">
                            <p><a href="http://www.sleddogstudio.com/webdesign/lesson/09/">Fonte da imagem acima</a></p>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Seletor CSS" src="css-syntax02.gif">
                            <p><a href="http://learnwebcode.com/what-is-css/">Fonte da imagem acima</a></p>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Seletor CSS" src="css-syntax03.png">
                            <p><a href="http://en.support.wordpress.com/custom-design/css-basics/">Fonte da imagem acima</a></p>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Seletor CSS" src="css-syntax04.png">
                            <p><a href="http://cscie12.dce.harvard.edu/lecture_notes/2006-07/20070220/handout.html">Fonte da imagem acima</a></p>
                        </div>

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h2 id="css-poder">O poder da CSS</h2>
                            </div>
                            <p>A CSS é uma realidade incontestável para quem desenvolve aplicações web. Não dá para caminhar sem ela, na verdade não
                                dá nem para sair do lugar. Quero dizer que é preciso aprender CSS para poder desenvolver bem, ou você domina ela ou ela
                                te domina. Não precisa ser ninja em CSS, mas quanto mais conhecimento você acomular sobre CSS (e HTML também) melhor e
                                mais produtivo será seu dia a dia como desenvolvedor.</p>

                            <p>Para o leitor ter uma idéia do poder da CSS dê uma olha nos seguintes trabalhos:</p>

                            <p><a href="http://www.csszengarden.com/">http://www.csszengarden.com/</a></p>

                            <p><a href="http://meyerweb.com/eric/css/edge/">http://meyerweb.com/eric/css/edge/</a></p>

                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="ferramentas">Ferramentas</h1>
                        </div>

                        <p>O <em>Firebug</em> eu já havia comentado sobre ele na matéria <a href="http://www.devfuria.com.br/js/basico/preparando-o-terreno/">http://www.devfuria.com.br/js/basico/preparando-o-terreno/</a>.</p>

                        <p>Ele é um plugin do navegador Firefox, ele é opensource e está disponível para download em:
                            <a href="https://addons.mozilla.org/pt-br/firefox/addon/firebug" title="Firebug">https://addons.mozilla.org/pt-br/firefox/addon/firebug</a></p>

                        <p>O Firebug é um verdadeiro canivete suíço, dá para fazer uma coisas impressionantes com ele e no fim acaba se saindo
                            como uma ferramenta indispensável.</p>

                        <p><strong>Web developer</strong> é um outro plugin do Firefox igualmente essencial como o Firebug.
                            Instale os dois e reserve um tempo para descobrir
                            o que eles podem fazer por você.</p>

                        <p>Em breve voltarei para falar mais detalhes sobre essas ferramentas.</p>

                        <p>Disponível em:
                            <a href="https://addons.mozilla.org/pt-br/firefox/addon/web-developer/" title="Web Developer">https://addons.mozilla.org/pt-br/firefox/addon/web-developer/</a></p>
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
                                    <a class="pull-left" href="http://compare.buscape.com.br/prod_unico?idu=1857605122&ordem=prec#precos" title="link-externo">
                                        <img class="media-object" src="livro-criando-pag-web-css.jpg" alt="### Imagem do livro 'Criando paǵinas web com CSS'">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Criando paǵinas web com CSS</h4>
                                        <p>Budd, Moll e Collison, Editora Pearson</p>
                                        <p>Este livro está desatualizado, mas a didática é nota 10.</p>
                                        <p>Vale a penas comprar.</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <a class="pull-left" href="http://www.maujor.com/livro/livro.html" title="link-externo">
                                        <img class="media-object" src="livro-cronstuindo-sites.jpg" alt="### Imagem do livro 'Costruindo sites com CSS e XHMTL'">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Costruindo sites com CSS e XHMTL</h4>
                                        <p>Maurício Samt (vulgo Majour), Editora Novatec</p>
                                        <p>Esse é outro que também está desatualizado, mas é ótimo.</p>
                                        <p>Ambos os livros são complementares um do outro.</p>
                                        <p>Não conheco um desenvolvedore que não tenha lido esses livros.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/html-css/basico/onde-tudo-comecou/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_HTML]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>HTML & CSS</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_HTML);
                        $core->lista->link_ativo = "/html-css/basico/onde-tudo-comecou/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
