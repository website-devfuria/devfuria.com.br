<?php
/**
 * O básico das Expressões Regulares
 * regexp, começando com regexp, aprendendo expressões regulares, expressões regulares para iniciantes
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/regexp/basico/intro/");
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
                <h1><?php echo $pagina->titulo ?></h1>
                <p>Introdução aos conceitos intuitivo de expressão regular.</p>
                <p>Veremos um pequeno exemplo e como é o mundo das Er's em Javascript e PHP</p>
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
                            <li>
                                <a href="#intro">O que são</a>
                            </li>
                            <li>
                                <a href="#sobre">Sobre o curso</a>
                            </li>
                            <li>
                                <a href="#exemplo">Primeiro Exemplo</a>
                            </li>
                            <li>
                                <a href="#php">PHP</a>
                            </li>
                            <li>
                                <a href="#js">Javascript</a>
                            </li>
                            <li>
                                <a href="#leituras">Leituras adicionais</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="intro">O que são Expressões Regulares ?</h2>
                        </div>

                        <p>Expressões Regulares é uma técnica para procurar, de forma bem específica, um texto abrangente.</p>

                        <p>OK, essa não é a definição formal de Expressões Regulares (ER), é uma variação da resposta encontrada por Aurélio Marinho
                            para a seguinte pergunta:</p>

                        <h2>Para que servem ?</h2>

                        <blockquote>
                            <p>
                                Basicamente, servem para você dizer algo abrangente de forma específica.
                                <small>Expressões Regulares, Uma Abordagem divertida (Aurélio Marinho, pag 36 da 3 edição).</small>
                            </p>
                        </blockquote>

                        <p>Elas servem para muita coisas e podem salver sua pele, se souber usá-las.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="sobre">Sobre o curso</h2>
                        </div>

                        <p>Eu preparei (e ainda estou preparando) este curso sobre expressão regulares's para ser bem básico</p>
                        
                        <p>O intuito é que você leia a matéria e compreenda sobre cada aspecto comentado.</p>

                        <p>Mas para facilitar ainda mais o seu aprendizado (o meu também foi mais fácil dessa forma) aconselho a utilizar alguns
                            softwares online apenas para testar as expressão regulares's, ou seja, ao invés de você partir direto para o código fonte, parta primeiro
                            para esses softwares, assim você terá a oportunidade de conferir sua expressão regular antes de ficar quebrando a cabeça no código
                            fonte.</p>
                        
                        <p>Algumas ferramentas interessantes:</p>

                        <p><a href="http://regexpal.com/" title="link-externo">http://regexpal.com/</a></p>

                        <p><a href="http://regex.larsolavtorvik.com/" title="link-externo">http://regex.larsolavtorvik.com/</a></p>

                        <p><a href="http://www.debuggex.com/" title="link-externo">http://www.debuggex.com/</a></p>

                        <p><a href="http://www.regexplanet.com/" title="link-externo">http://www.regexplanet.com/</a></p>

                        <p>Irei utilizar as duas linguagens que também possuem seus cursos aqui no site: PHP e Javascript.</p>

                        <p>Conforme vamos evoluíndo com as expressão regulares's, vamos evoluindo com as linguagens.</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="exemplo">Primeiro Exemplo</h2>
                        </div>

                        <p>Temos a string original:</p>

                        <pre><code>"Casa com a palavra exemplo"</code></pre>

                        <p>E queremos encontrar a string:</p>

                        <pre><code>"exemplo"</code></pre>

                        <p>Veja como fica nas ferramentas:</p>

                        <div class="bs-example ">
                            <img class="img-rounded" alt="### Exemplo no testador regexpal" src="exemplo-regexp.png" />
                            <p>http://regexpal.com/</p>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded" alt="### Exemplo no testador de Larsolav" src="exemplo-larsolav.png" />
                            <p>http://regex.larsolavtorvik.com/</p>
                        </div>

                        <p>As ferrametas ajudam muito, principalmente no começo.</p>
                        
                        <p>Aprenda a utilizá-las, é divertido!</p>
                        
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="php">PHP e os dois mudos: PCRE e POSIX</h2>
                        </div>

                        <p>As funções da versão POSIX estão depreciadas na versão 5.3 do PHP.</p>

                        <p>A versão PREC é a mais atual.</p>

                        <p>
                            Segundo o Marinho, as funções PCRE são mais rápidas que as POSIX e para funcionarem o PHP
                            deverá ser compilado com suporte a bilioteca PCRE.
                        </p>

                        <p>Em PHP as expressão regulares's devem ser tratadas como strings entre aspas, exemplo:</p>

                        <pre><code>'/sua expressão regular/'</code></pre>

                        <p>As funções POSIX são derivadas de <code>ereg()</code>;</p>

                        <p>As funções do PREC são derivadas de <code>preg_macth()</code>;</p>

                        <p>Veja mais informações na documentação oficial:</p>

                        <p><a href="http://www.php.net/manual/pt_BR/book.pcre.php" title="link-externo">PCRE</a></p>

                        <p><a href="http://www.php.net/manual/en/reference.pcre.pattern.posix.php" title="link-externo">POSIX</a></p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="js">Javascript e suas funções expressão regular</h2>
                        </div>

                        <p>
                            Em Javascript temos 3 funções para tratarmos as expressão regular's: <code>test()</code>, <code>texec()</code> e <code>tmatch()</code>.
                        </p>

                        <p>E também temos o construtuor <code>RegExp();</code>.</p>

                        <p>Em Javascript (diferentemente de PHP) as expressão regulares's devem ser embebidas por barras, sem aspas, exemplo:</p>

                        <pre><code>/sua expressão regular/</code></pre>

                        <p>Veja mais informações na documentação oficial:</p>

                        <p><a href="https://developer.mozilla.org/pt-BR/docs/JavaScript/Guide/Regular_Expressions" title="link-externo">https://developer.mozilla.org/pt-BR/docs/JavaScript/Guide/Regular_Expressions</a></p>

                        <p>Nas próximas matérias veremos como ficará nosso singelo "primeiro exemplo" nas duas linguagens. Até lá.</p>

                        <p><em>Seja bem vindo ao curso!</em></p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h2>
                        </div>


                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Livros</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://www.piazinho.com.br/" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Expressões Regulares, Uma abordagem divertida</h4>
                                        <p class="list-group-item-text">Nesse livro Aurélio Marinho Jargas dá um show de didádica simples e objetiva. E,
                                            como o título promete, muito divertida também. Esse aqui é um ótimo começo e não é sugerida mas sim obrigatório.
                                            Veja mais informações no site oficial:</p>
                                        <span class="label label-default">http://www.piazinho.com.br/</span>
                                    </a>
                                    <a href="http://novatec.com.br/livros/regexpcookbook/" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Expressões Regulares Cookbook</h4>
                                        <p class="list-group-item-text">Ótimo livro, não é tão fácil começar por ele, mas é muito bom, o que
                                            mais gostei é que os autores tratam os diversos sabores das expressão regular.</p>
                                        <span class="label label-default">http://novatec.com.br/livros/regexpcookbook/</span>
                                    </a>
                                    <a href="http://www.altabooks.com.br/dominando-expressoes-regulares.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Dominando Expressões Regulares</h4>
                                        <p class="list-group-item-text">Confesso qua ainda não li este livro, mas gostei muito do capítulo
                                            de amostra, será minha proxima aquisição.</p>
                                        <span class="label label-default">http://www.altabooks.com.br/dominando-expressoes-regulares.html</span>
                                    </a>
                                    <a href="http://regex.info/book.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Mastering Regular Expressions</h4>
                                        <p class="list-group-item-text">A bíblia das expressão regular, também não li, dúvido muito que eu lerei um dia. Se o seu
                                            objetivo for dominar as ERs então compre e leia o livro. Mas se, assim como eu, o seu objetivo for
                                            trafegar tranquilamente pelas expressão regular e não domniná-las então está dispensado.</p>
                                        <span class="label label-default">http://regex.info/book.html</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://aurelio.net/regex/guia/" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Primeia edição do livro do Marinho disponível para leitura online</h4>
                                        <span class="label label-default">http://aurelio.net/regex/guia/</span>
                                    </a>
                                    <a href="http://aurelio.net/regex/#links" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Links e outras dicas do Marinho (só dá ele)</h4>
                                        <span class="label label-default">http://aurelio.net/regex/#link</span>
                                    </a>
                                </div>
                            </div>
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
