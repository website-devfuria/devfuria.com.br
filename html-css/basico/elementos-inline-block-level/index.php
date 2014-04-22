<?php
/**
 * Elementos in-line e elementos block-level
 * html in-line, html block, tag inline, tag block level
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/html-css/basico/elementos-inline-block-level/");

?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo?></h1>
                <p>O objetivo da matéria é entender as diferênças entre os dois tipos</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container" id="materia">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Os 2 tipos essenciais de tags</h1>
                        </div>

                        <p>Há dois tipos básicos de tag's: as <code>in-line</code> e de <code>block-level</code>.</p>

                        <p>A diferênça básica é que o browser acomoda os elementos <strong>inline</strong> à esquerda um ao lado do outro
                            e as de <strong>bloco</strong ele coloca uma em baixo da outra ocupando a tela toda.></p>

                        <p>Veja o HTML abaixo para entender e perceber como ele foi reenderizado.</p>

                        <div data-height="1100" data-theme-id="2897" data-slug-hash="EiqIm" data-default-tab="null" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/EiqIm'>Elementos in-line e elementos block-level</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//codepen.io/assets/embed/ei.js"></script>


                        <p>Perceber esse aspecto básico, mais do que entender, lhe ajudará a criar páginas HTML sem muita dor de cabeça.</p>

                        <p>O problema reside no fato de que estamos acostumados a utilizar softwares, como por exemplo editores de textos ou editores
                            de imagens e vamos "dizendo" ao softwarer" coloque este círculo aqui, aquele texto ali, agora desça um pouco o círculo
                            e etc..". Achamos que com HTML dá para fazer igual. Com o HTML a idéia é parecida mas há uma diferênça crucial: <strong>existe
                                uma certa manha para desenharmos a arte que "pintamos" em nossa cabeça.</strong>. E entender essa "manha" fará toda a diferênça.</p>

                        <p>Uma parte dessa "manha" é compreender a diferênça entre as tag's in-line e as tag's block-level.</p>

                        <p>A dica é: <strong>não tente criar em HTML a página que você idealizou sem antes se familiarizar com a forma que o navegador
                                reenderiza o HTML</strong>.</p>

                        <p>Abaixo vemos alguns elementos básicos de <code>block-level</code>:</p>

                        <ul>
                            <li>div</li>
                            <li>h1, h2, h3</li>
                            <li>p</li>
                            <li>ul, ol</li>
                            <li>table</li>
                            <li>form</li>
                            <li>fildset</li>
                            <li>hr</li>
                        </ul>

                        <p>... e alguns elementos <code>in-line</code>:</p>

                        <ul>
                            <li>span</li>
                            <li>a</li>
                            <li>img</li>
                            <li>td</li>
                            <li>label</li>
                            <li>input</li>
                            <li>select</li>
                            <li>textarea</li>
                        </ul>

                        <p>Há ainda um terceiro tipo de elemento: o <code>inline-block</code> que nada mais é do que um elemento de bloco acomodado como um
                            elemento inline.</p>

                        <p>A CSS pode alterar o tipo do elemento. Com a propriedade <code>display</code> é possível utilizar os três valores (mais comuns):</p>

                        <ol>
                            <li>block</li>
                            <li>inline</li>
                            <li>inline-block</li>
                        </ol>

                        <p>A tag <code>div</code> é block-level, mas se aplicarmos a propriedade <code>inline</code> ela começará a se comportar como uma tag inline.</p>

                        <p>O inverso também é verdadeiro.</p>

                        <p>A tag <code>span</code> é inline, mas se aplicarmos a propriedade <code>block</code> ela se comportará como uma tag block-level.</p>

                        <p>Para ilustrar, eu apenas acrescentei o css abaixo<p>

                        <pre><code class="language-html">div, h1, h2, p {
  display: inline;
}
span, img, a {
  display: block;
} </code></pre>
                        <p>Inverti as bolas, quem era block virou inline e quem era inline virou block.</p>


                        <p data-height="1233" data-theme-id="2897" data-slug-hash="cHzfs" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/cHzfs'>Invertendo elementos inline</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
                        <script async src="//codepen.io/assets/embed/ei.js"></script>

                        <p>Essa matéria é curtinha, mas não se engane, seguir em frente sem entender (de verdade) é perca de tempo,
                            aproveite para praticar e como exercício crie algum HTML com a CSS desse exemplo para firmar o conceito.</p>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>