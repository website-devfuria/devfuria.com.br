<?php
/**
 * MySql
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
        $core->head->setTitle('Matéria introdutória sobre SQL e Mysql');
        $core->head->setDescription('Aprenda os conceitos intuitivo de banco de dados, faremos a instalação do mysql e testes via console.');
        $core->head->setkeywords('aprendendo mysql, aprendendo  sql, começando com sql, começando com mysql, mysql via console, instalando mysql, mysql via console, T-SQL, PL/SQL');
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
                <h1>Banco de dados prá que?</h1>
                <p>Introdução aos conceitos intuitivo de banco de dados.</p>
                <p>Instalação e testes via console (utilizo o MySql).</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">11/09/2012</span>, escrito em <span class="label label-info">05/06/2012</span>.
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
                                <a href="#intro">Introdução</a>
                                <ul class="nav">
                                    <li><a href="#sobre">Sobre o curso</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#siglas">DB = BD = SGBDR</a>
                            </li>
                            <li>
                                <a href="#banco-dados">Banco de dados</a>
                            </li>
                            <li>
                                <a href="#tabelas">Tabelas, Registros e Colunas</a>
                            </li>
                            <li>
                                <a href="#instalando">Instalando o mysql </a>
                            </li>
                            <li>
                                <a href="#via-console">MySql via console (terminal)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Introdução</h1>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Desenho em quadrinhos satirizando ao (mal)uso do Excel!" src="vida_prog_112.png">
                            <p>O Excel foi, é e sempre será utilizado indevidamente como banco de dados.</p>
                            <p>Fonte:
                                <a href="http://vidadeprogramador.com.br/2011/05/24/banco-de-dados/" title="link-externo">Vida de programador</a>
                            </p>
                        </div>                        

                        <p>Seu eu começasse essa seção com "Na década de 70..." a matéria perderia a graça, aprender deve ser divertido.</p>

                        <p>Hum Hum! tudo bem vamos lá...</p>

                        <p>Na década de 70 um pesquizador chamado Edgar Frank "Ted" Codd desenvolveu um produto de modelo de dado relacional 
                            chamado SEQUEL (Strutucred English Query Language, Linguagem de Consulta em Inglês Estruturado) que mais tarde veio a
                            se tornar o nosso conhecido SQL (Structured Query Language, Linguagem de Consulta Estruturada).</p>

                        <div class="bs-example ">
                            <img class="img-thumbnail" alt="### Foto de Edgar Frank Codd" src="edgar-f-codd.jpg" />
                            <p>Edgar Frank Codd (1923-2013) Pai da SEQUEL</p>
                        </div>                           


                        <p>Em pouco tempo a ANSI (American National Standards Institute) assumiu os trabalhos padronizando a SQL. Mas como tudo em
                            nossa área, a padronização tem suas exceções. Existem os dialetos SQL, cada sistema de banco de dados implementou sua
                            própria versão  da padronização (é para rir ou para chorar?). </p>

                        <p>Alguns anúncios de emprego especificam o dialeto como requisito para a vaga.</p>

                        <p>Você já viu pedirem experiência em T-SQL ou PL/SQL ? Vejamos os pricipais dialetos:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplos de dialetos SQL" src="sql-dialetos.png" />
                            <p>Dialetos SQL</p>
                        </div>                        

                        <p>Na verdade, o quadro não é tão ruim assim. Se você domina um dialeto, terá facilidade para migrar para outro. Segundo
                            os irmãos Kline autores do livro "Sql - O Guia Essencial - Manual de Referência Profissional, 3 edição":</p>

                        <blockquote>
                            <blockquote>
                                <p>Programadores e administradores agora têm o benefício de serem capazes de aprender uma única linguagem que, com
                                    pequenos ajustes, é aplicável a uma vasta variedade de plataformas de banco de dados, aplicações e produtos.
                                    <small>Daniel e Kevin</small></p>
                            </blockquote>
                        </blockquote>

                        <p>Neste curso, eu abordarei o dialeto MySql e já que estamos falando sobre o curso...</p>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h2 id="sobre">Sobre o Curso</h2>
                            </div>

                            <p>Eu estava na dúvida se fazia um curso apenas de SQL ou se envolvia um Banco de Dados. É certo que a SQL é um padrão (ou
                                pelo menos deveria ser) e que indepênde de banco de dados, mas por outro lado, <strong>como aprender SQL sem ao menos um banco
                                    de dados?</strong></p>

                            <p>Minha escolha pelo MySql é óbvia: é um DB "pau para toda obra", é o companheiro inseparável do PHP e é muito fácil
                                começar por ele.</p>

                            <p><strong>Se o curso é sobre SQL porque chama-se Mysql?</strong></p>

                            <p>É porque eu não gostaria que alguém que estivesse procurando por SQL, entra-se no curso achando que vai aprender apenas
                                SQL e na verdade irá aprender SQL juntamente com o MySql. Pode parecer bobagem mas eu quis tomar esse cuidado.</p>

                            <p>Esse é um curso de <strong>SQL através do MySql</strong>.</p>

                            <p>Nós vamos começar pelo console e depois partiremos para o Phpmyadmin (interface com o banco).</p>

                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="siglas">DB = BD = SGBDR</h1>
                        </div>

                        <p>"Banco de dados" abreviamos para <code>BD</code>.</p>

                        <p>Em inglês, "Data Base" abreviamos para <code>DB</code>.</p>

                        <p>Alguém que não tinha nada para fazer, resolveu ajudar e criou mais um termo SGBDR, Sistema Gerenciador de Banco de Dados
                            Relacional.</p>

                        <p>Eu gosto de utilizar a forma em inglês DB, é essa que você verá aqui no curso.</p>


                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="banco-dados">Banco de dados</h1>
                        </div>

                        <p>Banco de dados nada mais é que um sistema capaz de armazenar e recuperar uma grande quantidade de dados.</p>

                        <p>Novamente os irmãos Kline nos dão mais dicas sobre o que é um SGBDR:</p>

                        <blockquote>
                            <p>Um SGBDR é definido como um sistema que usuários observam dados como uma coleção de tabelas relacionadas entre si
                                através de valores de dados comuns.</p>
                        </blockquote>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="tabelas">Tabelas, Registros e Colunas</h1>
                        </div>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h4>Colunas</h4>
                            </div>

                            <p>São os <code>campos</code> de uma informação, por exemplo: </p>

                            <pre><code class="no-highlight">nome do produto, preco</code></pre>

                            <p>...são dois possíveis campos (ou  colunas)</p>
                        </div>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h4>Registros</h4>
                            </div>

                            <p>São os dados abaixo dessas colunas:</p>

                            <pre><code class="no-highlight">Camiseta Regata, 11.99 -- esse é um registro
Camisa Social,   15.00 -- esse é outro registro</code></pre>
                        </div>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h4>Tabelas</h4>
                            </div>

                            <p>Se juntarmos as colunas e os registros teremos as tabelas:</p>

                            <div class="bs-example">
                                <img class="img-rounded" alt="### Tabelas" src="ex01-tabela.jpg" />
                                <p>Fonte da imagem: 
                                    <a href="http://blog.thiagobelem.net/relacionamento-de-tabelas-no-mysql/" title="link-externo">Blog do Thiago Belem</a>
                                </p>
                            </div>                             
                        </div>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h4>DB</h4>
                            </div>

                            <p>Agora me responda sem pensar muito, o que é um conjunto de tabelas ?</p>

                            <p>... nosso banco de dados.</p>

                            <p>A imagem abaixo ilustra nosso banco de dados:</p>

                            <div class="bs-example">
                                <img class="img-rounded" alt="### diagrama que representa um banco de dados" src="db.jpg" />
                                <p>
                                    <a href="http://www2.itssolucoes.com.br/banco-de-dadoss" title="link-externo">Fonte da imagem</a>
                                </p>
                            </div>                              

                            <p>Os cilindros azul e verde representam um banco de dados, os quadros abaixo deles representam nossas tabelas,
                                esses quadros estão no formato ER, <strong>diagrama Entidade Relacionamento</strong>, falaremos disso em breve.</p>

                            <p>Mas a figura oficial de um banco de dados é esta aqui:</p>

                            <div class="bs-example">
                                <img class="img-rounded" alt="### diagrama oficial que representa um banco de dados" src="db02.jpg" />
                                <p>Isto sim é um Banco de Dados</p>
                            </div>                              

                            <p>Eu quiz apenas introduzir os conceitos de forma intuitiva, falaremos exaustivamente "dessas coisas" no decorrer do curso.</p>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="instalando">Instalando o Mysql</h1>
                        </div>

                        <p>O software, normalmente, se divide em duas partes: servidor e cliente.</p>

                        <p>Existe a aplicação que roda lá no servidor e existe um pequeno emaranhado do código que roda no cliente. </p>

                        <p>Como desenvolvedor, eu instalo na minha máquina as das partes. "Mel na chupeta', essa expressão é tão velha quanto
                            a forma como instalamos o mysql (no linux).</p>

                        <p>No Ubuntu (família Debian) digite:</p>

                        <pre><code class="no-highlight">apt-get install mysql-server mysql-client</code></pre>

                        <p>Enquanto os arquivos são baixados e instalados o sistema lhe perguntará qual será a senha do root (para acessar o banco de dados), anote-a.</p>

                        <p>No Fedora (família Had-Hat) é parecido, só que você é quem define a senha:</p>

                        <pre><code class="no-highlight">yum install mysql mysql-server</code></pre>

                        <p>inicie o serviço...</p>

                        <pre><code class="no-highlight">systemctl start mysqld.service
systemctl enable mysqld.service</code></pre>

                        <p>e habilite a senha digitando...</p>

                        <pre><code class="no-highlight">mysqladmin -u root password [your_password_here]</code></pre>

                        <p>Se tudo ocorreu bem poderemos acessar o servidor mysql via console.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="via-console">MsySql via console (terminal)</h1>
                        </div>

                        <p>Para testarmos a instalação do mysql nada melhor do que acionarmos o aplicativo.</p>

                        <p>O MySql utiliza a "label" <code>mysql&gt;</code> na shell. Como exemlo veja a minha shell:</p>

                        <pre><code class="no-highlight">[flavio@localhost www.devfuria.com.br]$</code></pre>

                        <p>... ao entrar no Mysql meu console fica como abaixo:</p>

                        <pre><code class="no-highlight">mysql&gt;</code></pre>

                        <p>No console, é possível digitar <code>mysql</code> para entrar no servidor mysql, mas se digitar apenas isso receberemos a seguinte
                            mensagem:</p>

                        <pre><code class="no-highlight">ERROR 1045 (28000): Access denied for user 'flavio'@'localhost' (using password: NO)</code></pre>

                        <p>Bom começarmos com um erro pois dessa forma você irá se habituando a "encarar" essas mensagens ao invés de ignorá-las
                            (atitude comum de quem está iniciando).</p>

                        <p><strong>O que podemos descobrir com a menssagem?</strong> Olha para ela atentamente e absorva todos os detalhes.</p>

                        <ol>
                            <li><p>Primeiro sabemos o número do erro o que nos ajudará a fazer uma possível pesquisa na web e ter a certeza de que estamos
                                    tratando do mesmo erro.</p></li>
                            <li><p>Depois temos a descrição do erro: "Access denie", traduzindo, "Acesso negado". Mas acesso negado para quem? para qual
                                    usuário? Leia a mensagem e descobrirá. No meus caso, mostrou o meu usuário do linux: "flavio". O arroba separa o usuário
                                    do local no qual está instalado o servidor mysql. Como estou na minha máquina local le acusa "localhost", traduzindo porcamente,
                                    máquina local.</p></li>
                            <li><p>Por último temos a seguinte informação: (using password: NO), ou seja, "usando senha: Não", quer dizer que realizou
                                    uma tentiva de login sem senha.</p></li>
                        </ol>

                        <p><strong>Viu como é importante ler atentamente as mensagens de erros? Aprendemos muito com elas.</strong></p>

                        <p>Então, como acessamos o servidor via console?</p>

                        <pre><code class="no-highlight">mysql -h localhost -u root -p</code></pre>

                        <p>Vamos entender o comando acima. </p>

                        <pre><code class="no-highlight">mysql      -- evocamos o servidor
-h         -- dizemos que o próximo dado é referente ao host
localhost  -- informamos o o host
-u         -- dizemos que o próximo dado é referente ao usuário
root       -- informamos o usuário
-p         -- dizemos que o próximo dado é referente a senha</code></pre>

                        <p>Não vamos digitar a senha porque pode ter alguém bisbilhotando (rsrs). Então acionamos o Enter e adivinhe? O console
                            solicita a senha do usuário infrmado. Agora sim pode digitar, pois a senha não é mostrada.</p>

                        <p>Espero que você esteja vendo o mesmo que eu:</p>


                        <div class="bs-example">
                            <img class="img-rounded" alt="### MySql via console" src="mysql-console.png" />
                            <p>Logado no MySql via console</p>
                        </div>                         

                        <p>Agora já é possível testar e aprender sobre os <code>statements</code>.</p>

                        <h4>Saindo do mysql</h4>

                        <p>Digite:</p>

                        <pre><code class="no-highlight">exit</code></pre>

                        <p>O sistema responde com um simpático "Bye"... eu também, tchau!</p>


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
                                        <a href="http://dev.mysql.com/doc/index.html" class="list-group-item" title="link-externo">
                                            <h4 class="list-group-item-heading">Manual oficial do MySql</h4>
                                            <p class="list-group-item-text">Está aqui não é sugerida, é obrigatória.</p>
                                            <span class="label label-default">http://dev.mysql.com/doc/index.html</span>
                                        </a>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/mysql-sql/basico/intro/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_MYSQL]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>    
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>MySql</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_MYSQL);
                        $core->lista->link_ativo = "/mysql-sql/basico/intro/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
