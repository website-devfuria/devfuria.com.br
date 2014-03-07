<?php
/**
 * MySql
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/mysql-sql/basico/primeiros-passos-mysql/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Matéria pós-introdutória sobre SQL e Mysql');
        $core->head->setDescription('Aprenderemos a interpretar erros, show databases, use, outros comandos básicos, use e case insensitive.');
        $core->head->setkeywords('error 1064, use, case insensitive, show databases, select, now, ');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_MYSQL;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Primeiro passos com Mysql</h1>
                <p>Na verdade, já é o segundo, pois o primeiro nos demos na matéria anterior.</p>
                <p>Aprenderemos como ler mensagens de erro, listar bases, selecionar base para uso, alias (apelido)
                    e  funcões básicas.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">13/12/2013</span>, escrito em <span class="label label-info">13/12/2013</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#intro">Refrescando a memória</a></li>
                            <li><a href="#erro-1064">Erro 1064</a></li>
                            <li><a href="#listar-bases">Listar bases</a></li>
                            <li><a href="#sel-bases">Selecionando a base para uso</a></li>
                            <li><a href="#outros">Outros comandos</a></li>
                            <li><a href="#insensitive">Case INsensitive</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Refrescando a memória</h1>
                        </div>

                        <p>Na matéria anterior vimos como se conectar com o banco de dados via console e é isso que vamos continuar fazendo aqui</p>
                        <p><strong>O que fazer depois que acabamos de logar-se no DB?</strong></p>
                        <p><strong>Quais são os primeiros comandos?</strong></p>
                        <p>É isso o que veremos nesta matéria<p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="erro-1064">Começando com um erro (1064)!</h1>
                        </div>

                        <p>Beleza hein? Vamos começar bem rssss</p>

                        <p>Após logar-se no mysql, acraditando que você está no console conforme figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem ilustrando o console do linux!" src="console.png">
                        </div>

                        <p>Vamos causar um erro, digite:</p>

                        <pre><code class="no-highlight">qualquercoisa;</code></pre>

                        <p>Não esqueça do ponto e vírgula no final!</p>

                        <p>Você deve estar vendo o seguinte erro:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem ilustrando o erro 1064 do mysql!" src="erro-mysql-1064.png">
                        </div>

                        <p>Que erro maravilhoso!!!</p>

                        <p>Se não gostou dele, então melhor ir se acostumando, pois você verá esse erro "zilhões" de vezes.</p>

                        <p><strong>Que informações vemos na mensagem de erro?</strong></>

                        <ol>
                            <li>O número do erro</li>
                            <li>A descrição do erro</li>
                            <li>Aonde está o erro</li>
                        </ol>

                        <p>Localizou essa informações? Não? tente de novo!</p>

                        <p>O erro é <code>1064</code>, não e o 42000!</p>

                        <p>A primeira parte da mensagem diz que temos um erro de sintaxe (<code>You have a error in your SQL syntax;</code>).

                        <p>A segunda parte, a mais importante, diz aonde está o erro. Mas não sem antes dar uma bronca: vai buscar no
                            manual a forma correta (<code>check the manual corresponds...</code>).</p>

                        <p>E, finalmente, nos avisa onde está o erro. Ele diz que está "perto de" (<code>...near 'qualquer coisa'</code>).</p>

                        <p>E de "quebra" diz qual é a linha.</p>

                        <p><strong>Essas informações serão extremamente úteis quando precisar debugar sua SQL!</strong>

                        <p>Por isso, repito, acostume-se com ela e jamais a ignore.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="listar-bases">Listar as bases de dados do MySQl</h1>
                        </div>

                        <p>Quer saber quais são as base de dados existente em seu servidor Mysql?</p>

                        <p>Então digite:</p>

                        <pre><code class="no-highlight">show databases;</code></pre>

                        <p>Se o seu servidor estiver como o meu (zerado), ele exibirá apenas duas bases:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem ilustrando o comando 'show databases'" src="show-databases.png">
                        </div>

                        <p>Essas duas bases são do próprio MySql. Quando criar suas bases elas estarão listadas junto com essas
                            duas, sempre.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="sel-bases">Selecionando a base para uso</h1>
                        </div>

                        <p>Acabamos de listar todas as bases.<p/>

                        <p>Agora, como selecionamos uma base qualquer para uso?</p>
                        <p>Essa é fácil:</p>
                        <pre><code class="no-highlight">use nome-da-base-da-dados;</code></pre>
                        <p>Quando formos para o PHP, deveremos lembrar desta sequência:</p>
                        <ol>
                            <li>Conectar com o DB</li>
                            <li>Escolhar uma base de dados qualquer</li>
                            <li>Executar os statements SQL</li>
                        </ol>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="outros">Outros comandos (praticando)</h1>
                        </div>

                        <p>O MySql possue algumas funções que nos auxiliam. Uma delas é a <code>version()</code>. Ela
                            retorna a versão do MySql. Mas não podemos digitar apenas <code>version()</code>, pois isso
                            gerará um erro (adivinha qual? rsssssss), precisamos utilizar o comando <code>SELECT</code>
                            junto. Veja:<p>

                        <pre><code class="no-highlight">SELECT version();</code></pre>

                        <p>exibirá:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem ilustrando o comando 'SELECT version()'" src="select-version.png">
                        </div>

                        <p>Ops! Acho que preciso atualizar a minha versão!</p>

                        <p>Mantenha sempre seu sistema atualizado com a última versão. Faça disso um hábito.Depois eu
                            mostrarei como atualizar o MySql (para Linux, é óbvio).</p>

                        <p>Também é posssível utilizar o <code>SELECT</code> dessa forma:</p>

                        <pre><code class="no-highlight">SELECT 5 * 2;</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem ilustrando o comando 'SELECT 5 vezes 2'" src="select-5vezes2.png">
                        </div>

                        <p>Repare que ele traz o cálculo como sendo o nome do campo.</p>

                        <p>Tente este comando: </p>

                        <pre><code class="no-highlight">SELECT 5 * 2 AS foo;</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem ilustrando o comando 'SELECT 5 * 2 AS foo'" src="select-5vezes2-foo.png">
                        </div>

                        <p>O <code>AS</code> é um "alias"(apelido). Em português, "as" siginifica "como", ou seja,
                            podemos "traduzir" o statement da seguinte forma:</p>

                        <pre><code class="no-highlight">SELCIONE o resultado de 5 * 2 com o apelido de "foo";</code></pre>

                        <h2>Experimente mais...</h2>
                        <p>"Experimentar" faz parte do aprendizado, então o que será que os statement abaixo produzem?</p>

                        <pre><code class="no-highlight">SELECT VERSION();</code></pre>

                        <pre><code class="no-highlight">SELECT CURRENT_DATE();</code></pre>

                        <pre><code class="no-highlight">SELECT NOW();</code></pre>

                        <pre><code class="no-highlight">SELECT USER();</code></pre>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="insensitive">Case INsensitive</h1>
                        </div>

                        <p>O MySql não faz distinção entra caixa alta ou baixa</p>

                        <p>Isso significa que <code>SELECT now();</code> é igual a <code>select NOW();</code> que é
                            igual a <code>SeLeCt NoW();</code></p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h1>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://dev.mysql.com/doc/refman/5.7/en/connecting-disconnecting.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Parte do manual que fala sobre conexão</h4>
                                        <span class="label label-default">http://dev.mysql.com/doc/refman/5.7/en/connecting-disconnecting.html</span>
                                    </a>
                                    <a href="http://dev.mysql.com/doc/refman/5.7/en/entering-queries.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Parte do manual  MySql (Referência)</h4>
                                        <span class="label label-default">http://dev.mysql.com/doc/refman/5.7/en/entering-queries.html</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_MYSQL]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->links, Core::SECAO_MYSQL);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
