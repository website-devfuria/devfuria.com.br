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

        <?php
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
        $core->navtop->secao = "htmlcss";
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Elementos in-line e elementos block-level</h1>
                <p>O objetivo da matéria é entender as diferênças entre os dois tipos</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-info">11/02/2013</span>, escrito em <span class="label label-success">23/01/2013. </span>
            </div>
        </div>


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

                        <p>Veja o HTML abaixo para entender e clique no <a href="code1.html" title="Veja a pagina em funcionamento">link</a>
                            para perceber como ele foi reenderizado.</p>

                        <div class="code menor">
                            <h6>HTML(inválido)</h6>
                            <pre>
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;elementos in-li e block-level&lt;/title&gt;
        &lt;style type="text/css"&gt;
            body * {
                border: 1px solid #000;
                background-color: #F5F5F5;
                margin: 20px;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;Título 1&lt;/h1&gt;
        &lt;h2&gt;Título 2&lt;/h2&gt;

        &lt;span&gt;span 01&lt;/span&gt;
        &lt;span&gt;span 02&lt;/span&gt;
        &lt;span&gt;span 03&lt;/span&gt;


        &lt;p&gt;parágrafo a&lt;/p&gt;
        &lt;p&gt;parágrafo b&lt;/p&gt;

        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;

        &lt;div&gt;div 1&lt;/div&gt;
        &lt;div&gt;div 2&lt;/div&gt;

        &lt;a href="#"&gt;Link 1&lt;/a&gt;
        &lt;a href="#"&gt;também me chamam de âncora&lt;/a&gt;

    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p>Esse não é um HTML "oficial", é apenas para fins ilustrativos. Repare que eu coloquei a palavra "inválido" no título
                            do código, é para alertar que o HTML apresentado não é válido, ou seja, não validará se submetido as normas do w3c,
                            falaremos disso adiante. Eu criei um CSS básico e misturei as tag's inline e block apenas para você perceber como elas
                            se comportam.</p>

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

                        <p>Para ilustrar eu utilizei o mesmo HTML acima e apliquei duas regras de css para "inverter as bolas", quem era block virou
                            inline e quem era inline virou block. Veja o resultado <a href="code2.html" title="tipos invertidos">aqui</a></p>

                        <div class="code menor">
                            <h6>HTML(inválido)</h6>
                            <pre>
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;tipos INVERTIDOS&lt;/title&gt;
        &lt;style type="text/css"&gt;
            body * {
                border: 1px solid #000;
                background-color: #F5F5F5;
                margin: 20px;
            }
            div, h1, h2, p {
                display: inline;
            }
            span, img, a {
                display: block;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;Título 1&lt;/h1&gt;
        &lt;h2&gt;Título 2&lt;/h2&gt;

        &lt;span&gt;span 01&lt;/span&gt;
        &lt;span&gt;span 02&lt;/span&gt;
        &lt;span&gt;span 03&lt;/span&gt;


        &lt;p&gt;parágrafo a&lt;/p&gt;
        &lt;p&gt;parágrafo b&lt;/p&gt;

        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;
        &lt;img src="http://blog.monitor.us/wp-content/uploads/2012/04/html2.png"/&gt;

        &lt;div&gt;div 1&lt;/div&gt;
        &lt;div&gt;div 2&lt;/div&gt;

        &lt;a href="#"&gt;Link 1&lt;/a&gt;
        &lt;a href="#"&gt;também me chamam de âncora&lt;/a&gt;

    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p>Essa matéria é curtinha, mas não se engane, seguir em frente sem entender (de verdade) é perca de tempo,
                            aproveite para praticar e como exercício crie algum HTML com a CSS desse exemplo para firmar o conceito.</p>

                    </div><!-- Corpo da matéria -->
                </div><!-- row -->

            </div><!-- Matéria -->

            <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>