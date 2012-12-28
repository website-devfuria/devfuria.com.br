<?php
require "../../../furia/includes/bs.php";
$materia = new Materia(1);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $materia->titulo; ?> | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => $materia->resumo,
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_JS . "introdução ao javascript; definição de javascript; ajax; ".
                           "firebug; front-end; desenvolvimento fornt-end; "
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php
        $nav_top['secao'] = "js";
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>

        <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>

        <div class="container sombra">
            <div class="row">
                <div class="span12">
                    <article>
                        <h1>Onde tudo começou</h1>

<p>Tim Berners-Lee, a culpa é toda dele. No começo dos anos 90, o dito cujo, inventou o HTML (HyperText Markup Language) que
significa Linguagem de Marcação de Hipertexto. Ele queria facilitar a comunicação de suas pesquisas com seus colegas
e acabou resolvendo o problema de todo mundo, nascia a web.</p>

<p>A idéia era simples e genial, era possível criar e disponibilizar um arquivo de texto simples com conteúdo HTML, via rede,
para outro computador. No computador de destino, um software chamado webrowser(navegador web) era encarregado de exibir
o conteúdo HTML. Não podemos esquecer de mencionar o protocolo HTTP (Hypertext Transfer Protocol, Protocolo de
Transferência de Hipertexto) que também é invenção de Lee e é peça primordial da web. </p>

<p>A web teve um crescimento rápido. Nessa época, "nosso bebê", já tinha pernas e músculos bem desenvolvidos
e dava seus primeiros passos. Não demorou muito para surgirem empresas interessadas na tecnologia, como foi o caso da
Netscape. Ela estava interessada no mavegador web e criou um com o mesmo nome. A Microsof, apesar de atrasada, também
queira sua fatia do mercado e lançou e destemido (ou talvez temido) Internet Explore, vulgo IE.</p>

<p>Essa passagem histórica ficou connhecida como "a guerra dos navegadores", procure na web por esse termo. Nas Faculdades
de tecnologia é muito comum exibirem um filme que deve ter o mesmo nome (não lembro bem). Vale apena assitir. Essa fase
definiu o que conhecemos hoje por Cross-browser, que nada mais é do que a habilidade de construir um site que suporte
vários navegadores, falaremos dele em breve, apenas adianto que dá para perder alguns cabelos.</p>

<p>Essa é a (humilde, diga-se de passagem) história da Internet. E a história da HTML faz parte dela, mas o que nos
interessa é apenas enteder o HTML e a CSS. Como já disse, a história de ambas é muito interessante e vale a pena aprender
sobre o assunto. A web está cheia de sites e documentos falando à respeito, fica a critério do leitor buscar essas
informações. Por hora, vamos nos deter apenas no universo do HTML e da CSS.</p>

<h2>Afinal o que é HTML?</h2>

<p><em>HTML, originalmente, marca o conteúdo</em>. Ele faz isso através de sua "etiquetas", ou melhor, através de suas <em>tag's</em>.
A tag "p" define um parágrafo, por exemplo. Vejamos algumas tag's bem conhecidas:</p>

<ul>
<li><em>html</em>, define o próprio documento HTML.</li>
<li><em>head</em>, define o cabeçário do documento.</li>
<li><em>titlte</em>, define o título.</li>
<li><em>body</em>, define o corpo.</li>
<li><em>h1</em>, definie o primeiro título, o mais importante.</li>
<li><em>h2</em>, definie o segudo título, e assim até o h6.</li>
<li><em>a</em>, define uma âncora, quero dizer, o famoso link.</li>
<li><em>img</em>, define uma imagem</li>
</ul>

<p>As tag's devem ser abraçadas pelos sinais de maior e menor, dessa forma: &lt;nome da tag&gt; e toda tag aberta deve ser fechada.
A barra para direita indica qual é a <em>tag de fechamento</em>, exemplo: &lt;p&gt;aqui é um parágrafo&lt;/p&gt;</p>

<p>Abaixo conferimos um arquivo HTML na sua essência.</p>

<div class="code">


efdeee9567427a1bbfd682c218f0c01b


<pre>
<html>
    <head>
        <title>Título da página</title>
    </head>
    <body>

<pre><code>    &lt;h1&gt;Um título qualquer&lt;/h1&gt;
    &lt;p&gt;primeiro parágrafo/p&gt;
    &lt;p&gt;segundo parágrafo&lt;/p&gt;
    &lt;p&gt;terceiro parágrafo&lt;/p&gt;

    &lt;h2&gt;Outro título qualquer&lt;/h2&gt;
    &lt;p&gt;quarto parágrafo&lt;/p&gt;
    &lt;p&gt;quinto parágrafo&lt;/p&gt;
    &lt;p&gt;sexto parágrafo&lt;/p&gt;

&lt;/body&gt;
</code></pre>

</html>
</pre>
</div>

<h2>E esse tal de CSS?</h2>

<p>CSS (Cascading Style Sheet) determina a estilização do contéudo. </p>

<blockquote>
  <p>Folha de estilo em cascata é um mecanismo simples para adicionar estilos
( por exemplo: fontes, cores, espaçamentos) aos documentos web.
Fonte: W3c</p>
</blockquote>

<p>Com a CSS podemos estilizar a paǵina HTML e assim, separamos as obrigações de cada tecnologia:
* A HTML define a estrutura do documento e
* A CSS definie a estilização</p>

<p>A CSS é composta pelo que se chama de "regras de estilização", um exemplo de regra seria: <em>"todo parágrafo deve ter o
tamanho da fonte em 12px e sua cor deve ser #767676"</em>, traduzindo em código css ficaria assim:</p>

<div class="code">
<h6>CSS</h6>
<pre>
p {
    font-size: 12px;
    color: #767676;
}
</pre>
</div>

<p>A letra "p" é o <em>seletor</em>, é o alvo da regra CSS. Entre as chaves, neste exemplo, há duas propriedades.
<em>font-size</em>  e <em>color</em> são as propriedades e <em>12px</em> e <em>#767676</em> são seus respectivos valores.
A regra CSS pode conter várias declarações separadas por ponto e vírgula.</p>

<p>A CSS <em>"uni-se"</em> ao HTML de 3 formas distintas: inline, embeded e linked.</p>

<h3>CSS - inline (na linha)</h3>

<p>É o método mais simples, declaramos a regra com o emprego do atributo "style" do HTML, exemplo:</p>

<div class="code">
<h6>HTML e CSS (massaroca)</h6>
<pre>
<html>
    <head>
        <title>Título da página</title>
    </head>
    <body>

        <h1>Um título qualquer</h1>
        <p <em>style="font-size: 12px; color#767676"</em>>primeiro parágrafo/p>
        <p <em>style="font-size: 12px; color#767676"</em>>segundo parágrafo</p>
        <p <em>style="font-size: 12px; color#767676"</em>>terceiro parágrafo</p>

        <h2>Outro título qualquer</h2>
        <p <em>style="font-size: 12px; color#767676"</em>>quarto parágrafo</p>
        <p <em>style="font-size: 12px; color#767676"</em>>quinto parágrafo</p>
        <p <em>style="font-size: 12px; color#767676"</em>>sexto parágrafo</p>

    </body>
</html>
</pre>
</div>

<p>O leitor atento notou que tivemos que repetir a regra em cada parágrafo. Essa forma além de repetir código, não ajuda na
legibilidade e NÂO permite o controle centralizado da CSS. Programadores e designs, no geral, evitam a CSS inline.
Ainda não "dá cadeia" utilizar-se de CSS inline, se achar que precise dela, pode usá-la com bom censo.</p>

<h3>CSS - embeded (incorporadas)</h3>

<p>Coloca-se as regras de CSS entre a tag "style" na seção "head" do HTML, veja o exemplo:</p>

<div class="code">


b87a819b5bd5fa2e8da6855849f513b1


<pre>
<html>
    <head>
        <title>Título da página</title>
        <em><style type="text/css" medial="all">
        p {
            font-size: 12px;
            color: #767676;
        }
        </style></em>
    </head>
    <body>

<pre><code>    &lt;h1&gt;Um título qualquer&lt;/h1&gt;
    &lt;p&gt;primeiro parágrafo/p&gt;
    &lt;p&gt;segundo parágrafo&lt;/p&gt;
    &lt;p&gt;terceiro parágrafo&lt;/p&gt;

    &lt;h2&gt;Outro título qualquer&lt;/h2&gt;
    &lt;p&gt;quarto parágrafo&lt;/p&gt;
    &lt;p&gt;quinto parágrafo&lt;/p&gt;
    &lt;p&gt;sexto parágrafo&lt;/p&gt;

&lt;/body&gt;
</code></pre>

</html>
</pre>
</div>

<p>Já é bem melhor que o método anterior: localizaremos a CSS com mais facilidade no documento.
Mas há o método campeão...</p>

<h3>CSS - linked (externos)</h3>

<p>Coloca-se as regras de CSS em um arquivo separado do HTML. Normalmente a extensão do arquivo é <em>".css"</em>. A "cola" é
realizada através da tag <em>"link"</em>, veja código de exemplo:</p>

<div class="code">


efdeee9567427a1bbfd682c218f0c01b


<pre>
<html>
    <head>
        <title>Título da página</title>
        <em><link rel="stylesheet" type="text/css" href="estilos.css" media="all" /></em>
    </head>
    <body>

<pre><code>    &lt;h1&gt;Um título qualquer&lt;/h1&gt;
    &lt;p&gt;primeiro parágrafo/p&gt;
    &lt;p&gt;segundo parágrafo&lt;/p&gt;
    &lt;p&gt;terceiro parágrafo&lt;/p&gt;

    &lt;h2&gt;Outro título qualquer&lt;/h2&gt;
    &lt;p&gt;quarto parágrafo&lt;/p&gt;
    &lt;p&gt;quinto parágrafo&lt;/p&gt;
    &lt;p&gt;sexto parágrafo&lt;/p&gt;

&lt;/body&gt;
</code></pre>

</html>
</pre>
</div>

<p>Agora sim temos um método profissional. Toda CSS fica em arquivo separado que é incluso no HTML através de uma única linha.
Há vantagens e desvantagens em cada um dos métodos, discutiremos isso em breve, por hora saiba que esse é o método que
mais utilizaremos no curso.</p>

<h2>O poder da CSS</h2>

<p>A CSS é uma realidade incontestável para quem desenvolve aplicações web. Não dá para caminhar sem ela, na verdade não
dá nem para sair do lugar. Quero dizer que é preciso aprender CSS para poder desenvolver bem, ou você domina ela ou ela
te domina. Não precisa ser ninja em CSS, mas quanto mais conhecimento você acomular sobre CSS (e HTML também) melhor e
mais produtivo ser seu dia a dia como desenvolverdor.</p>

<p>Para o leitor ter uma idéia do poder da CSS dê uma olha nos seguintes trabalhos: </p>

<p>css zen garden
css edge</p>

<h2>W3C</h2>

<p>Completando a história da HTML: o W3C é um consórcio que regulamenta as especificações tanto do HTML como do CSS. O
W3C é a fonte oficial do HTML e CSS. É possível encontrar as traduções das especificações para a língua portuguesa.
Dois pequenos alertas :  a) Estudar pela especificação é mais difícil(e mais chata também) e b) nem todos os navegadores
implemtam as especificações em sua totalidade, isso siginifica que a especificação diz uma coisa e seu navegador comporta-se
de outro, restanto para o programador ou desgin "se virar" para encontrar um solução.</p>

<h2>Firebug</h2>

<h2>HTML, DHTML , XHTML, HTML5, no final das contas é tudo HTML</h2>

<p>No início era apenas HTML, depois veio  DHTML (o "d" era de Dynamic), depois o XHTML e hoje temos o HTML5.
Sim, são coisas distintas umas das outras, mas em sua essencia não passam de mero HTML. Por simplificação, utilizaremos
o termo HTML de forma gernérica e quando for necessário ser mais específico utilzaremos o termo correto.</p>



                        <?php include BASE_PATH.COMPONENTES_PATH."materia_fim.php"; ?>

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

        <?php include BASE_PATH.COMPONENTES_PATH."rodape.php"; ?>

        <script type="text/javascript">
        var element = document.getElementById('myimage');
        element.onclick = function() {
            if (element.src.match("bulbon")) {
                element.src="../imagens/pic_bulboff.gif";
            } else {
                element.src="../imagens/pic_bulbon.gif";
            }
        };
        </script>
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>