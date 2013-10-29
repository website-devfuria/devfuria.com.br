<?php
/**
 * PHP
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
        $core->head->setTitle('REGEXP');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
        $core->navtop->secao = Core::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>O básico das Expressões Regulares</h1>
                <p>Introdução aos conceitos intuitivo de ER.</p>
                <p>Veremos um pequeno exemplo e como é o mundo das Er's em JS e PHP</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-warning">22/07/213</span>, escrito em <span class="label label-warning">22/07/2013</span>.
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
                                <a href="#intro">O que são</a>
                            </li>
                            <li>
                                <a href="#sobre">Sobre o curso</a>
                            </li>
                            <li>
                                <a href="#exemplo01">Primeiro Exemplo</a>
                            </li>
                            <li>
                                <a href="#mundos">PHP</a>
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
                            <h1 id="intro">O que são Expressões Regulares ?</h1>
                        </div>

                        <p>Expressões Regulares é uma técnica para procurar, de forma bem específica, um texto abrangente.</p>

                        <p>OK, essa não é a definição formal de Expressões Regulares (ER), é uma variação da resposta encontrada por Aurélio Marinho
                            para a seguinte pergunta:</p>

                        <h2>Para que servem ?</h2>

                        <blockquote>
                            <p>Basicamente, servem para você dizer algo abrangente de forma específica.
                                <small>Expressões Regulares, Uma Abordagem divertida (Aurélio Marinho, pag 36 da 3 edição).</small></p>
                        </blockquote>

                        <p>Elas servem para muita coisas e podem salver sua pele, se souber usá-las.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="sobre">Sobre o curso</h1>
                        </div>

                        <p>Eu preparei (e ainda estou preparando) este curso sobre ER's para ser bem básico, o intuito é que você leia a matéria
                            e entenda (e também decore) sobre cada aspecto comentado.</p>

                        <p>Mas para facilitar ainda mais o seu aprendizado (o meu também foi mais fácil dessa forma) aconselho a utilizar alguns
                            software online apenas para testar as ER's, ou seja, ao invés de você partir direto para o código fonte, parta primeiro
                            para esses softwares, assim você terá a oportunidade de conferir sua ER antes de ficar quebrando a cabeça no código
                            fonte, algumas ferramentas interessantes:</p>

                        <p><a href="http://regexpal.com/">http://regexpal.com/</a></p>

                        <p><a href="http://regex.larsolavtorvik.com/">http://regex.larsolavtorvik.com/</a></p>

                        <p><a href="http://www.debuggex.com/">http://www.debuggex.com/</a></p>

                        <p><a href="http://www.regexplanet.com/">http://www.regexplanet.com/</a></p>

                        <p>Irei utilizar as duas linguagens que também possuem seus cursos aqui no site: PHP e Javascript.</p>

                        <p>Conforme vamos evoluíndo com as ER's, vamos evoluindo com as linguagens.</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="exemplo01">Primeiro Exemplo</h1>
                        </div>

                        <p>Temos a string original:</p>

                        <pre><code>"Casa com a palavra exemplo"</code></pre>

                        <p>E queremos encontrar a string:</p>

                        <pre><code>"exemplo"</code></pre>

                        <p>Veja como fica nos testadores:</p>

                        <div class="bs-example ">
                            <img class="img-thumbnail" alt="Exemplo no testador regexpal" src="exemplo-regexp.png" />
                            <p>http://regexpal.com/</p>
                        </div>                        
                        
                        <div class="bs-example ">
                            <img class="img-thumbnail" alt="Exemplo no testador de Larsolav" src="exemplo-larsolav.png" />
                            <p>http://regex.larsolavtorvik.com/</p>
                        </div>                         
                        
                        <p>Os testadores ajudam muito, principalmente no começo, aprenda a utilizá-los, é divertido!</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="mundos">PHP e os dois mudos: PCRE e POSIX</h1>
                        </div>

                        <p>As funções da versão POSIX estão depreciadas na versão 5.3 do PHP.</p>

                        <p>A versão PREC é a mais atual.</p>

                        <p>Segundo o Marinho, as funções PCRE são mais rápidas que as POSIX e para funcionarem o PHP deverá ser compilado com 
                            suporte a bilioteca PCRE.</p>

                        <p>Em PHP as ER's devem ser tratadas como strings entre aspas, exemplo:</p>

                        <pre><code>'/sua expressão regular/'</code></pre>

                        <p>As funções POSIX são derivdas de <em>ereg()</em>;</p>

                        <p>As funções do PREC são derivadas de <em>preg_macth()</em>;</p>

                        <p>Veja mais informações na documentação oficial:</p>

                        <p><a href="http://www.php.net/manual/en/book.pcre.php" title="PCRE">Sobre a PCRE</a></p>

                        <p><a href="http://www.php.net/manual/en/reference.pcre.pattern.posix.php" title="POSIX">Sobre A POSIX</a></p>

                    </div>

                    
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="js">Javascript e suas funções ER</h1>
                        </div>                    

                        <p>Em JS temos 3 funções para tratarmos as ER's:</p>

                        <pre><code>test()
exec()
match()
</code></pre>

                        <p>E também temos o construtuor</p>

                        <pre><code>RegExp();</code></pre>

                        <p>Em JS (diferentemente de PHP) as ER's devem ser embebidas por barras, sem aspas, exemplo:</p>

                        <pre><code>/sua expressão regular/</code></pre>

                        <p>Veja mais informações na documentação oficial:</p>

                        <p><a href="https://developer.mozilla.org/pt-BR/docs/JavaScript/Guide/Regular_Expressions">https://developer.mozilla.org/pt-BR/docs/JavaScript/Guide/Regular_Expressions</a></p>

                        <p>Nas próximas matérias veremos como ficará nosso singelo "primeiro exemplo" nas duas linguagens. Até lá.</p>

                        <p><em>Seja bem vindo ao curso!</em></p>

                    </div>                    

                    
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas</h1>
                        </div>                     

                        <dl id="leitura_adcionais">
                            <dt>Livros</dt>
                            <dd><em>Expressões Regulares, Uma abordagem divertida</em>, nesse livro Aurélio Marinho Jargas dá um show de
                                didádica simples e objetiva. E, como o título promete, muito divertida também. Esse aqui é um ótimo começo e
                                não é sugerida mas sim obrigatório. Veja mais informações no site oficial:
                                <a href="http://www.piazinho.com.br/" >http://www.piazinho.com.br/</a>
                            </dd>
                            <dd><em>Expressões Regulares Cookbook</em> Ótimo livro, não é tão fácil começar por ele, mas é muito bom, o que
                                mais gostei é que os autores tratam os diversos sabores das ER.
                                <a href="http://novatec.com.br/livros/regexpcookbook/" >http://novatec.com.br/livros/regexpcookbook/</a>
                            </dd>
                            <dd><em>Dominando Expressões Regulares</em> Confesso qua ainda não li este livro, mas gostei muito do capítulo
                                de amostra, será minha proxima aquisição.
                                <a href="http://www.altabooks.com.br/dominando-expressoes-regulares.html" >http://www.altabooks.com.br/dominando-expressoes-regulares.html</a>
                            </dd>
                            <dd><em>Mastering Regular Expressions </em> A bíblia das ER, também não li, dúvido muito que eu lei um dia. Meu
                                objetivo é trafegar tranquilamente pelas ER e não domniná-las, se este for o seu caso, compre e leia o livro.
                                <a href="http://regex.info/book.html" >http://regex.info/book.html</a>
                            </dd>
                            <dt>Internet</dt>
                            <dd>Primeia edição do livro do Marinho disponível para leitura online:
                                <a href="http://aurelio.net/regex/guia/" >http://aurelio.net/regex/guia/</a>
                            </dd>
                            <dd>Links e outras dicas do Marinho (só dá ele).
                                <a href="http://aurelio.net/regex/#links" >http://aurelio.net/regex/#links</a>
                            </dd>
                        </dl>
                    </div>                     

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
