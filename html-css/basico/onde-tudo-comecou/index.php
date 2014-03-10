<?php
/**
 * HTML & CSS
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url ="/html-css/basico/onde-tudo-comecou/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Introdução ao HTML e ao CSS');
        $core->head->setDescription('Aprenda sobre: tags básicas de HTML, corpo de HTML, CSS, seletores, propriedades e ferramentas que ajudam no desenvolvimento');
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
                <p>Veremos a essência de um arquivo HTML e</p>
                <p>como estilizá-lo usando CSS.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">14/02/2014</span>, escrito em <span class="label label-info">23/01/2013</span>.
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
                                <a href="#historia">Um pouco de história...</a>
                                <ul class="nav">
                                    <li><a href="#w3c">W3C</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#o-que-e-html">Mas afinal, o que é HTML?</a>
                                <ul class="nav">
                                    <li><a href="#estrutura-basica">Estrutura básica (HTML válido)</a></li>
                                    <li><a href="#pequeno-exemplo">Pequeno Exemplo</a></li>
                                    <li><a href="#siglas">HTML, DHTML , XHTML, HTML5</a></li>
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
                            <h1 id="historia">Um pouco de história...</h1>
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
                                <h3 id=""></h3>
                            </div>

                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="o-que-e-html">Mas afinal, o que é HTML?</h1>
                        </div>

                        <p><strong>HTML, originalmente, marca o conteúdo</strong>. Ele faz isso através de suas
                            <strong>etiquetas</strong>, ou melhor, através de suas <strong>tag's</strong>.
                            A tag <code>p</code> define um parágrafo, por exemplo. Vejamos algumas tag's bem conhecidas:</p>

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

                        <p>As tag's devem ser abraçadas pelos sinais de maior e menor, dessa forma: <code>&lt;nome da tag&gt;</code>; e toda tag aberta deve ser fechada.</p>

                        <p>A barra para direita indica qual é a <strong>tag de fechamento</strong>, exemplo: <code>&lt;p&gt;aqui é um parágrafo&lt;/p&gt;;</p></code>

                        <p>Abaixo conferimos um arquivo HTML na sua essência:</p>

                        <div class="code">
                            <h6>HTML(inválido)</h6>
                            <pre><code>&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Título da página&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

        Aqui vai a marcação HTML que fará sua página ser entendida pelo browser
        e, consequentemente, ser reenderizada pelo mesmo.

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>

                        <p>Repare que eu coloquei a palavra "inválido" alertando quanto à validade do HTML.
                            O código acima não é valido e serve apenas para fins didáticos e ilustrativo.</p>

                        <p>Eu coloquei o HTML dessa forma para que você perceba o esquema: <strong>cabeçalho (head) e corpo (body)</strong>.</p>

                        <p>Me lembrei do Joel Santana na propaganda do Head & Shoulders, aqui é  Head & Body:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### HTML básico" src="html-head-body.jpg">
                            <p>Ess imagem é tão difundida que já não se sabe mais a fonte.</p>
                        </div>

                        <p>O conteúdo que vai dentro da tag <code>body</code> é reenderizado pelo browser. É o
                            conteúdo de seu site/sistema.</p>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="estrutura-basica">Estrutura básica (HTML válido)</h3>
                            </div>

                            <p>O HTML inválido você já conhece. Agora vou lhe mostrar um HTML válido.</p>

                            <div class="code">
                                <h6>XHTML</h6>
                                <pre><code>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" &gt;
    &lt;head&gt;
        &lt;title&gt;Título da página&lt;/title&gt;
        &lt;meta http-equiv="Content-type" content="text/html;charset=UTF-8" /&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                            </div>

                            <p>O HTML acima é um XHTML válido porque ele atende aos requesitos básicos para poder ser
                                considerado válido.</p>

                            <p>Quem define os requesitos é o grupo W3C e o grupo WHATWG. O W3C disponibiliza até um
                                validador online para efetuar a validação dos HTML (foi lá que eu testei).</p>

                            <p>Se você comparar o HTML inválido com o válido, verá quais foram os elementos que
                                faltaram para validar.</p>

                            <p>Nós estamos falando de XHTML, que é uma versão anterior ao HTML5. O XHTML é interessante
                                principalmente por que estamos aprendendo HTML.</p>

                            <p>Atualmente (jan/2014) ninguém inicia o desenvolvimento de uma aplicação web com XHTML,
                                utilizamos o HTML5. Por isso <strong>se você encontrar arquivos XHTML aqui no site é porque
                                    ele tem um fim didático</strong>.</p>

                            <p>Essa questão da validação e do uso do XHMTL para fins didáticos são importantes, mas
                                ficarão para uma outra hora, ok?</p>

                            <p>Abaixo vemos um HTML 5 também válido.</p>

                            <div class="code">
                                <h6>HTML 5</h6>
                                <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Título da página&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                            </div>


                        </div>



                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="pequeno-exemplo">Pequeno Exemplo</h3>
                            </div>


                            <p>A baixo temos um exemplo de conteúdo. Utilizei título  de nível 1 (<code>h1</code>), nível 2
                                (<code>h2</code>) e alguns parágrafos (<code>p</code>).</p>

                            <div class="code">
                                <h6>HTML</h6>
                                <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Título da página&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;Um título qualquer&lt;/h1&gt;
        &lt;p&gt;primeiro parágrafo/p&gt;
        &lt;p&gt;segundo parágrafo&lt;/p&gt;
        &lt;p&gt;terceiro parágrafo&lt;/p&gt;

        &lt;h2&gt;Outro título qualquer&lt;/h2&gt;
        &lt;p&gt;quarto parágrafo&lt;/p&gt;
        &lt;p&gt;quinto parágrafo&lt;/p&gt;
        &lt;p&gt;sexto parágrafo&lt;/p&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                            </div>
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

                        <p>A CSS é composta pelo que se chama de "regras de estilização"(rule-sets), um exemplo de
                            regra seria: </p>

                        <pre><code class="no-highlight">todo parágrafo deve ter
    o tamanho da fonte em 12 e
    sua cor deve ser um tom de cinza meio escuro</code></pre>

                        <p>O tamanho da fonte precisa de uma <strong>unidade de medida</strong>. As três unidades mais
                            utilizadas são:</p>

                        <ul>
                            <li><code>px</code> pixel</li>
                            <li><code>em</code> relativo ao tamanho da fonte</li>
                            <li><code>%</code> porcentage</li>
                        </ul>

                        <p>Em breve falaremos mais sobre as unidades de medidas, por hora vamos acertar nosso exemplo.</p>

                        <pre><code class="no-highlight">todo parágrafo deve ter
    o tamanho da fonte em <em>12px</em>
    sua cor deve ser um tom de cinza meio escuro</code></pre>

                        <p>As cores podem ser representadas por números hexadecimais ou no esquema RGB. Cores é outro assunto que
                            veremos os detalhes em breve. Por hora vamos acreditar que o hexadecimal <code>767676</code>
                            precedido do sinal sharp <code>#</code> é equivalente a "um tom de cinza meio escuro"</p>

                        <pre><code class="no-highlight">todo parágrafo deve ter
    o tamanho da fonte em 12px
    sua cor deve ser <em>#767676</em></code></pre>

                        <p>Vou abreviar um pouco a regra acima, confira:</p>

                        <pre><code class="no-highlight">todo parágrafo
    tamanho da fonte: 12px
    cor: #767676</em></code></pre>

                        <p>Agora é só traduzir para CSS, veja:</p>

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
                                        <p>Maurício Samy (vulgo Majour), Editora Novatec</p>
                                        <p>Esse é outro que também está desatualizado, mas é ótimo.</p>
                                        <p>Ambos os livros são complementares um do outro.</p>
                                        <p>Não conheco um desenvolvedore que não tenha lido esses livros.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="https://developer.mozilla.org/pt-BR/docs/HTML/Introduction" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Introdução ao HTML (MDN)</h4>
                                        <p class="list-group-item-text">Belíssima introdução ao HTML.</p>
                                        <span class="label label-default">https://developer.mozilla.org/pt-BR/docs/HTML/Introduction</span>
                                    </a>
                                    <a href="http://www.maujor.com/w3c/xhtml10_2ed.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Recomendações do W3C XHTML 1</h4>
                                        <p class="list-group-item-text">Tradução do Majour.</p>
                                        <p class="list-group-item-text">Lembrando que já estamos no HTML 5, mas não podemos esquecer o passado,
                                                                        afinal somos cientistas da computação.</p>
                                        <span class="label label-default">http://www.maujor.com/w3c/xhtml10_2ed.html</span>
                                    </a>
                                    <a href="http://www.maujor.com/tutorialcss1/css1tut.shtml" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Recomendações do W3C CSS nível 1</h4>
                                        <p class="list-group-item-text">Tradução do Majour.</p>
                                        <p class="list-group-item-text">Idem ao comentário anterior (já estmaos no CSS 3.</p>
                                        <span class="label label-default">http://www.maujor.com/tutorialcss1/css1tut.shtml</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_HTML][Core::SUB_SECAO_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->paginas, Core::SECAO_HTML, Core::SUB_SECAO_CURSO);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
