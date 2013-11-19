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
        $core->head = new Head();
        $core->head->setTitle('JS');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
        $core->navtop->secao = "js";
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?> 


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Preparando o terreno</h1>
                <p>Veremos Separações de interesses (separation of concerns), ondo colocar o JS e uma rápida pincelada
                    em OOP, FIREBUG e a questão da segurança!.
                </p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em 08/11/2012, escrito em 08/10/2012.
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
                                <a href="#intro">O Terreno...</a>
                            </li>
                            <li>
                                <a href="#aonde-colocar">Aonde colocar o Javascript ?</a>
                            </li>
                            <li>
                                <a href="#firebug">FireBug</a>
                            </li>
                            <li>
                                <a href="#seguro">Javascript é seguro?</a>
                            </li>
                            <li>
                                <a href="#caracter">Características da linguagem</a>
                            </li>
                            <li>
                                <a href="#js-oop">JS é Orientado a Objetos ?</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">O terreno...</h1>
                        </div>

                        <p>Na matéria de introdução eu comentei que vamos aprender JS junto com HTML e CSS. Na verdade vamos aprender as coisas
                            separadamente, porém vamos trabalhar com os três elementos como se fosse ingredientes obrigatórios em cada receita.</p>

                        <p>Neste ponto é importante entendermos a obrigação de cada um desses componentes. O <em>JS será encarregado do comportamento</em>
                            da página, da interação com o usuário, dos enventos possíveis (click, duplo click, teclado, movimentação do mouse, e
                            etc...), de tudo aquilo que pode beneficiar a interface do sistema.</p>

                        <p>O CSS se encarrega-rá da apresentação da página. Pensou em estilizar, formatar, desenhar, cuidar da aparência, layout,
                            cores, fontes, bordas, espaçamento, disposição dos elementos ...pensou em CSS. Ele cuidará da embalagem, do roupagem
                            que sua página web irá vestir. Estilizar é com o CSS.</p>

                        <p>Sobrou para o HTML deixar claro qual é o conteúdo, marcando o conteúdo. Em outras palavras: "tudo que é necessário para
                            ler e entender o conteúdo de sua página web. O código HTML deve fazer o máximo para transmitir o significado
                            (ou semântica) do conteúdo." O HTML descreve o conteúdo da página, a isso chamamos de <em>marcação semântica</em>.</p>

                        <p>OK. O que acabamos de fazer foi separar as obrigações. Com isso, acabamos de praticar técnica chamada de <em>programação em
                                camadas</em>. No caso, temos 3 camadas: conteúdo(HTML), apresentação(CSS) e comportamento(JS).</p>

                        <div class="bs-example bs-example-images">
                            <img class="img-rounded" alt="camadas de uma aplicação"  src="camadas.gif">
                            <p>Fonte:
                                <a href="http://www.thiagotpc.com/entech/#slide-27">Slide em www.thiagotpc.com</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="aonde-colocar">Aonde colocar o Javascript ?</h1>
                        </div>

                        <p>O ideal é escrevermos o código JS em um arquivo texto com extensão .js e incluí-lo no arquivo HTML dessa forma:</p>

                        <div class="code">
                            <h6>index.html</h6>
                            <pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
        <em>&lt;script type="text/javascript" src="codigo.js" /&gt;</em>
    &lt;/head&gt;
    &lt;body&gt;
        ...
    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p>No código seguinte temos a mesmíssima coisa, só que em um arquivo html 5. O palavrão 'DOCTYPE' virou duas palavrinhas:</p>

                        <div class="code">
                            <h6>index.html</h6>
                            <pre>
<em>&lt;!DOCTYPE html&gt;</em>
&lt;html&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
        <em>&lt;script type="text/javascript" src="codigo.js"&gt;&lt;/script&gt;</em>
    &lt;/head&gt;
    &lt;body&gt;
        ...
    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p>As abordagem acima sofre de um pequeno inconveniente: a ordem em que o arquivo é lido e executado pelo browser. Os
                            navegadores executam arquivos JS assim que o código é baixado e depois continua a reenderizar o HTML restante. Isso
                            significa que se o seu código depender do HTML, e acredite vai depender, ele não conseguirá executar corretamente.</p>

                        <p>Atualmente há algumas saídas para este problema, a abordagem mais utilizada é a boa e velha dica: <em>Coloque o script no
                                final do HTML !!!</em>, pronto resolvido. Isso garante que seu JS será executado após todo o HTML ter sido carregado e de
                            quebra sua página obtem um ganho de performance. Em outra matéria, falarei mais sobre essa questão. Por hora vejamos
                            como ficou nosso HTML:</p>

                        <div class="code">
                            <h6>index.html</h6>
                            <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        ...
    <em>&lt;script type="text/javascript" src="codigo.js"&gt;&lt;/script&gt;</em>
    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p><em>Colocamos o código JS no final do HTML.</em></p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="firebug">FireBug?</h1>
                        </div>

                        <p>O FireBug é um plugin do navegador Firefox, ele é opensource e está disponível para download em:
                            <a href="https://addons.mozilla.org/pt-br/firefox/addon/firebug" title="FireBug">https://addons.mozilla.org/pt-br/firefox/addon/firebug</a></p>

                        <p>Ele será necessário para debugar-mos o código escrito em JS.</p>

                        <p>Então, quando nos depararmos com o seguinte código:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var qualquer = "uma string qualquer";
console.log(qualquer);
                            </pre>
                        </div>

                        <p>...estaremos na verdade, fazendo uso do plugin FireBug, pois a instrunção <em>console.log()</em> não é do JS e sim do plugin
                            FireBug. O resultado do código é conferido na seção "console" do plugin.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="seguro">Javascript é seguro?</h1>
                        </div>                          

                        <p>Vamos estender essa pergunta para: a linguagem de programação X é sergura?</p>

                        <p>Nenhuma linguagem de programação é segura ou insegura, a pergunta correta seria:</p>

                        <p><em>O desenvolvedor programa de forma segura?</em></p>

                        <p>O que acontece com JS é que o código fica exposto a qualquer usuário, por isso, percebemos erroneamente, que JS é inseguro,
                            mas isto não é verdade. Seguro ou inseguro, como já disse, é a forma como se programa.</p>

                        <p>Obviamente, tendo em vista que o código fica exposto, não criaremos nenhum <em>código sensível</em> (um código que possa ser
                            explorado por um hacker causando danos a aplicação).</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="caracter">Características da linguagem?</h1>
                        </div>  

                        <p>JS é uma linguagem baseada em protótipos, em funções de primeira classe, fracamente tipada, imperativa e estruturada,
                            implementa closures.</p>

                        <p>Se você já acompanhou algumas matérias do curos de PHP deve ter percebido que eu utilizo "um pouco de engenharia reversa":
                            explico o essencial, demonstro algum código e vamos aprofundando aos poucos. Acredito que essa seja uma boa forma para
                            ensinar e aprender programação. Com este curso de JS, não será diferente. As características aqui apresentadas serão
                            explicadas ao longo do curso quando o leitor já estiver mais familizarizado com a linguagem e, dessa forma, poderá
                            aproveitar melhor o curso.</p>
                        </div>                         

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="js-oop">JS é realmente Orientado a Objetos ?</h1>
                        </div>                         
                        
                        <p>A questão se JS é ou não OOP ainda causa certa polêmica, mas segundo Douglas Crockford's (o mago do JS):</p>

                        <blockquote>
                            <p>"O JavaScript é orientado à objetos? Bem, ele contém objetos que podem conter dados e métodos que agem sobre esses
                                dados. Objetos podem conter outros objetos. O JavaScript não possui classes, mas possui construtores que são capazes
                                de fazer o que as classes fazem, incluindo agir como contêineres para classes de variáveis e métodos. Ele não possui
                                herança orientada a classe, mas tem herança orientada a protótipo.</p>
                        </blockquote>

                        <p><em>Na próxima matéria veremos como debugar (depurar) o JS.</em></p>
                    </div>  

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
        
</body>
</html>
