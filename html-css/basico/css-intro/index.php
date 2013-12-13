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
        $core->head->setTitle('O básico do CSS');
        $core->head->setDescription('Aprendendo o básico do CSS, como unir o CSS ao documento HTML e cores em CSS.');
        $core->head->setkeywords('core em css, css embeded, css linked, css inline');
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
                <h1>Primeiro contato com CSS</h1>
                <p>Nesta matéria veremos mega rápida introdução ao CSS, o básico de cores e também 
                    como unir o CSS ao arquivo HTML.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">13/12/2013</span>, escrito em <span class="label label-info">23/01/2013. </span>
            </div>
        </div>


        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#css-intro">Introdução</a></li>
                            <li><a href="#css-unindo">Unindo o CSS ao HTML</a></li>
                            <li><a href="#css-inline">CSS - inline (na linha)</a></li>
                            <li><a href="#css-embeded">CSS - embeded (incorporadas)</a></li>
                            <li><a href="#css-linked">CSS - linked (externos)</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="css-intro">Introdução</h1>
                        </div>

                        <p>Quem começa a aprender CSS logo se pergunta: <strong>o que será esse negócio de cascata?</strong>. É um conceito. Ainda temos a
                            questão da especificidade e da herânça (nada a ver com oop, olha lá hein!!!).</p>

                        <p>Tudo bem, que tal não esquentarmos a cabeça com isso por enquanto? Vamos focar no básico e depois, quando estiver mais
                            familiarizado, voltamos para "fechar" esses conceitos, ok?</p>

                        <p>Na matéria <a href="../onde-tudo-comecou">"onde tudo começou"</a> vimos como é a estrutura de uma rule-set. Sempre que estilizamos
                            o HTML precisamos pensar primeiro em <strong>qual será o nosso(s) elemento(s) alvo?</strong> E na sequência aplicamos o rule-set.
                            Há uma dúzia de formas diferentes de encontrar elementos HTML. Fazemos isso através dos <strong>seletores</strong>.</p>

                        <p>A CSS também possui <strong>unidades de medidas</strong>: px(pixel), pt(pontos), em(relativo ao tamanho da fonte) e %(porcentagem).
                            A mais simples e conhecida é a <strong>pixel</strong>. Um pixel representa um ponto na tela, veja figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem do Pixel" src="pixel.png">
                            <p><a href="http://pt.wikipedia.org/wiki/Pixelx" title="link-externo">Fonte da imagem acima</a></p>
                        </div>                        

                        <p><strong>As cores</strong> normalmente são apresentadas pela combinação das cores primárias. Dizemos ao navegador o quanto queremos de
                            vermelho, verde e azul e assim vamos montando todas as outras cores.</p>

                        <p>Então devemos seguir o esquema <strong>rgb</strong> que significa red, green e blue, respectivamente. Os valores possíveis estão entre
                            0(zero) e 255, onde 0 significa que não temos nada do tom desejado e 255 significa que temos o máximo do tom desejado.</p>

                        <p>Abaixo vemos a forma decimal e hexadecimal que representa a cor vermelha:</p>

                        <pre><code>rgb(255, 0, 0)#FF0000</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem das Cores" src="cores.png">
                            <p><a href="http://pt.wikipedia.org/wiki/Pixelx" title="link-externo">Fonte da imagem acima</a></p>
                        </div>                        

                    </div>


                    <div class="bs-docs-section" id="css-unindo">
                        <div class="page-header">
                            <h1>Unindo o CSS ao HTML</h1>
                        </div>  

                        <p>Agora precisamos aprender como unir a CSS ao documento HTML.</p>

                        <p>"Colamos" a CSS ao HTML de 3 formas distintas: <strong>inline, embeded e linked</strong>. Vejamos:</p>

                        <div class="bs-docs-section" id="css-inline">
                            <div class="page-header">
                                <h3>CSS - inline (na linha)</h3>
                            </div>                            

                            <p>Inline o método mais simples, declaramos a regra com o emprego do atributo <code>style</code> do HTML, exemplo:</p>

                            <div class="code">
                                <h6>HTML & CSS</h6>
                                <pre><code class="language-html">&lthtml&gt
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
&lt/html&gt</code></pre>
                            </div>

                            <p>O leitor atento notou que tivemos que repetir a regra em cada parágrafo. Essa forma além de repetir código, não ajuda na
                                legibilidade e NÂO permite o controle centralizado da CSS. Programadores e designs, no geral, evitam a CSS inline.
                                Ainda não "dá cadeia" utilizar-se de CSS inline, se achar que precise dela, pode usá-la com bom censo.</p>

                        </div>                            


                        <div class="bs-docs-section" id="css-embeded">
                            <div class="page-header">
                                <h3>CSS - embeded (incorporadas)</h3>
                            </div>                              

                            <p>Coloca-se as regras de CSS entre a tag <code>style</code> na seção <code>head</code> do HTML, veja o exemplo:</p>

                            <div class="code">
                                <h6>HTML e CSS</h6>
                                <pre><code class="language-html">&lthtml&gt
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
&lt/html&gt</code></pre>
                            </div>

                            <p>Já é bem melhor que o método anterior: já é possível localizar a CSS com mais facilidade no documento.
                                Mas há o método campeão...</p>
                        </div>                              

                        <div class="bs-docs-section" id="css-linked">
                            <div class="page-header">
                                <h3>CSS - linked (externos)</h3>
                            </div>                             

                            <p>Coloca-se as regras de CSS em um arquivo separado do HTML. Normalmente a extensão do arquivo é <code>.css</code>. A "cola" é
                                realizada através da tag <code>link</code>, veja código de exemplo:</p>

                            <div class="code">
                                <h6>HTML</h6>
                                <pre><code class="language-html">&lthtml&gt
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
&lt/html&gt</code></pre>
                            </div>

                            <p>Agora sim temos um método profissional. Toda CSS fica em arquivo separado que é incluso no HTML através de uma única linha.
                                Há vantagens e desvantagens em cada um dos métodos, discutiremos isso em breve, por hora saiba que esse é o método mais
                                adequado e por essa razão o que mais utilizaremos no curso, porém não leve tudo a ferro-e-fogo: pode lançar mão das 3
                                formas quando e onde achar melhor.</p>

                        </div>
                    </div>                             


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas</h1>
                        </div>

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Livros</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item" title="">
                                        <h4 class="list-group-item-heading">Nenhum livro sobre CSS</h4>
                                        <p class="list-group-item-text">CSS é tão básico que eu recomendo que você pratique, pratique e pratique ao invés de ler, ler e ler.</p>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $core->paginacao->link_ativo = "/html-css/basico/css-intro/";
                            $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_HTML]);
                            include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                            ?>                             
                        </div>

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
                            $core->lista->link_ativo = "/html-css/basico/css-intro/";
                            include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                            ?>
                        </div>
                    </div>
                </div>
            </footer>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
