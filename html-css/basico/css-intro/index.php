<?php
/**
 *
 * 
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/html-css/basico/css-intro/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo?></h1>
                <p>Nesta matéria veremos mega rápida introdução ao CSS, o básico de conteudos e também
                    como unir o CSS ao arquivo HTML.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

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
                            <h2 id="css-intro">Introdução</h2>
                        </div>

                        <p>Quem começa a aprender CSS logo se pergunta: <strong>o que será esse negócio de cascata?</strong>. É um conceito. Ainda temos a
                            questão da especificidade e da herânça (nada a ver com oop, olha lá hein!!!).</p>

                        <p>Tudo bem, que tal não esquentarmos a cabeça com isso por enquanto? Vamos focar no básico e depois, quando estiver mais
                            familiarizado, voltamos para "fechar" esses conceitos, ok?</p>

                        <p>
                            Na matéria
                            <?php Aux::printAncora("/html-css/basico/onde-tudo-comecou/", "titulo"); ?>
                            vimos como é a estrutura de uma rule-set. Sempre que estilizamos
                            o HTML precisamos pensar primeiro em <strong>qual será o nosso(s) elemento(s) alvo?</strong> E na sequência aplicamos o rule-set.
                            Há uma dúzia de formas diferentes de encontrar elementos HTML. Fazemos isso através dos <strong>seletores</strong>.
                        </p>

                        <p>A CSS também possui <strong>unidades de medidas</strong>: px(pixel), pt(pontos), em(relativo ao tamanho da fonte) e %(porcentagem).
                            A mais simples e conhecida é a <strong>pixel</strong>. Um pixel representa um ponto na tela, veja figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem do Pixel" src="pixel.png">
                            <p><a href="http://pt.wikipedia.org/wiki/Pixelx" title="link-externo">Fonte da imagem acima</a></p>
                        </div>

                        <p><strong>As conteudos</strong> normalmente são apresentadas pela combinação das conteudos primárias. Dizemos ao navegador o quanto queremos de
                            vermelho, verde e azul e assim vamos montando todas as outras conteudos.</p>

                        <p>Então devemos seguir o esquema <strong>rgb</strong> que significa red, green e blue, respectivamente. Os valores possíveis estão entre
                            0(zero) e 255, onde 0 significa que não temos nada do tom desejado e 255 significa que temos o máximo do tom desejado.</p>

                        <p>Abaixo vemos a forma RGB e hexadecimal que representa a cor vermelha:</p>

                        <pre><code class="no-highlight">rgb(255, 0, 0)
#FF0000</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem das Conteudos" src="conteudos.png">
                            <p><a href="http://pt.wikipedia.org/wiki/Pixelx" title="link-externo">Fonte da imagem acima</a></p>
                        </div>

                    </div>


                    <div class="bs-docs-section" id="css-unindo">
                        <div class="page-header">
                            <h2>Unindo o CSS ao HTML</h2>
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
                                <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Título da página&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;Um título qualquer&lt;/h1&gt;
        &lt;p <em>style="font-size: 12px; color#767676"</em>&gt;primeiro parágrafo&lt;/p&gt;
        &lt;p <em>style="font-size: 12px; color#767676"</em>&gt;segundo parágrafo&lt;/p&gt;
        &lt;p <em>style="font-size: 12px; color#767676"</em>&gt;terceiro parágrafo&lt;/p&gt;

        &lt;h2&gt;Outro título qualquer&lt;/h2&gt;
        &lt;p <em>style="font-size: 12px; color#767676"</em>&gt;quarto parágrafo&lt;/p&gt;
        &lt;p <em>style="font-size: 12px; color#767676"</em>&gt;quinto parágrafo&lt;/p&gt;
        &lt;p <em>style="font-size: 12px; color#767676"</em>&gt;sexto parágrafo&lt;/p&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
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
                                <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Título da página&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
        <em>&lt;style type="text/css" media="all"&gt;
        p {
            font-size: 12px;
            color: #767676;
        }</em>
        &lt;/style&gt;
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
                                <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Título da página&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
        <em>&lt;link rel="stylesheet" type="text/css" href="estilos.css" media="all" /&gt;</em>
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

                            <p>Agora sim temos um método profissional. Toda CSS fica em arquivo separado que é incluso no HTML através de uma única linha.
                                Há vantagens e desvantagens em cada um dos métodos, discutiremos isso em breve, por hora saiba que esse é o método mais
                                adequado e por essa razão o que mais utilizaremos no curso, porém não leve tudo a ferro-e-fogo: pode lançar mão das 3
                                formas quando e onde achar melhor.</p>

                        </div>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>