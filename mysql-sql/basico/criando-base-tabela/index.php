<?php
/**
 * MySql
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/mysql-sql/basico/criando-base-tabela/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Matéria onde criaremos nossa primeira tabela no MySql');
        $core->head->setDescription('Aprenda a criar uma tabela no MySql e também veja um pouco sobre os comandos TRUNCATE, DROP TABLE e LOAD LOCAL DATA');
        $core->head->setkeywords('create table; truncate; drop; load local data');
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
                <h1>Criando e populando uma tabela</h1>
                <p>Criaremos nossa primeira tabela via console no MySql e</p>
                <p>também mostramos os comandos TRUNCATE, DROP, LOAD LOCAL DATA.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">10/01/2014</span>, escrito em <span class="label label-info">10/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#base">Criando a base</a></li>
                            <li>
                                <a href="#tabela">Criando a tabela</a>
                            </li>
                            <li>
                                <a href="#comandos">Comandos úteis</a>
                            </li>
                            <li>
                                <a href="#populando">Populando a tabela</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="base">Criando a base de dados</h1>
                        </div>

                        <p>Para criar uma base de dados utilize o comando abaixo:</p>

                        <pre><code class="no-highlight">CREATE DATABASE nome-para-a-base-de-dados;</code></pre>

                        No meu caso, eu criarei uma base chamada <code>devlabs</code>. Você pode usar esse nome ou outro
                        de sua preferência.</p>

                        <pre><code class="no-highlight">CREATE DATABASE devlabs;</code></pre>

                        <p>Após criada a base de dados precisamos selecioná-la para uso, fazemos isso através do comando
                            <code>USE</code> seguido do nome da base. Veja o exemplo:</p>

                        <pre><code class="no-highlight">USE devlabs;</code></pre>

                        <p>Uma vez que selecionaos a base de dados, é preciso saber as tabelas que ela contém.</p>

                        <p>O comando abaixo lista as tabelas.</p>

                        <pre><code class="no-highlight">SHOW TABLES;</code></pre>

                        <p>Não apareceu nenhuma? Não? Então vamos criar nosssa primeira tabela.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="tabela">Criando a tabela</h1>
                        </div>

                        <p>Criar uma tabela é uma tarefa fácil e corriqueira. O trabalho pesado fica por conta da parte
                            <strong>conceitual</strong>, explico:</p>

                        <p>A criação de uma base de dados com tabelas e tudo mais depende de muito planejamento.</p>

                        <p>Não existe uma fórmula única, muito pelo contrário. Desenhar a base de dados é como programar,
                            se passar o mesmo problema a 10 desenvolvedores teremos 10 soluções diferentes, com certeza.</p>

                        <p>No mais, vale lembrar que seu aprendizado está em constante evolução e que você criará
                            bases de dados diferentes ao longo do tempo. Ex: eu não crio base de dados como criava a
                            5 anos atrás.</p>

                        <p>Junto com a questão conceital, temos os <strong>tipos de dados</strong>. Cada campo (coluna) da tabela
                            deve ser de um tipo. Ainda não falamos sobre tipos de dados do mysql, veremos o assunto
                            em breve.</p>

                        <h3 id="tabela-exemplo">Uma tabela de exemplo</h3>

                        <p>Eu retirei o exemplo do manual do mysql.</p>

                        <p>Vamos nos imaginar donos(as) de um PetShop. </p>
                        <p>Talvez você queira registrar os nome dos bichanos e seus respectivos donos. </p>
                        <p>Já temos dois campos:</p>

                        <pre><code>nome (dos bichanos),
dono (dos bichanos)</code></pre>

                        <p>Aí você descobre que seria interessante registrar a espécie (gato, cachorro, pássaro, etc..),
                            o gênero (sexo), a data de nascimento e a data de falecimento:</p>

                        <pre><code>espécie,
sexo,
data de nascimento,
data de óbito
</code></pre>

                        <p>Nossa tabela ficará assim:</p>

                        <pre><code>nome | dono | espécie | sexo | nascimento | óbito</code></pre>

                        <p>Os campos <code>nome</code>, <code>dono</code> e <code>espécie</code> são "string" que podem
                            variar de tamanho. Para isso temos o tipo <code>VARCHAR</code> que traduzindo, (grosseiramente)
                            significa caracter variante. A variação ocorre no tamanho, o limite dessa variação é
                            especificado por parentes logo após o tipo. (falaremos dos tipo de dados em breve).</p>

                        <p>Já o campo <code>sexo</code> também é do tipo string mas seu tamanho não é variável, é fixo.
                            Podemos ter nessa coluna os seguintes valores: <code>f</code> para feminio e <code>m</code>
                            para masculino. O tipo de dado utilizado será o <code>CHAR</code>.</p>

                        <p>Os campos <code>nascimento</code> e <code>óbito</code> são do tipo "data", utilizaremos o
                            tipo <code>DATE</code>. O mysql (e a maioria do banco de dados) armazenam a data no seguinte
                            formato: <code>ano-mes-dia</code>, ou melhor, <code>aaaa-mm-dd</code>. Ex: a data 11/09/2001
                            apresenta o seguinte formato: 2001-09-11.</p>

                        <p>Como o exemplo é em inglês, vamos manter os nomes nessa língua:</p>

                        <pre><code>name | owner | species | sex | birth | death</code></pre>

                        <p>Agora que já sabemos o que vamos construir...</p>

                        <h3 id="tabela-massa">Botando a mão na massa</h3>

                        O comando que cria a tabela é, em sua essência, o seguinte:

                        <pre><code class="no-highlight">CREATE TABLE nome-da-tabela (descrição de cada coluna);</code></pre>

                        <p>Os campos são campostos pelos seu nome seguido do tipo e separados por vírgula, ex:</p>

                        <pre><code class="no-highlight">nome-do-campo VARCHAR(100),</code></pre>

                        <p>Para ficar mais legível, formatamos o statement sql da seguinte forma:</p>
                        <pre><code class="no-highlight">CREATE TABLE pet (
    name VARCHAR(20),
    owner VARCHAR(20),
    species VARCHAR(20),
    sex CHAR(1),
    birth DATE,
    death DATE
);</code></pre>

                        <p><strong>Aí você me pergunta, como digitar isso no console?</strong><p>

                        <p>Vá digitando e apertando o ENTER, pois o comando somente será enviado quando inserirmos
                            o sinal <code>;</code></p>

                        <p>Veja com eu digitei:</p>

                        <div class="bs-example ">
                            <img class="img-thumbnail" alt="### Comando CREATE TABLE pet" src="create-table-pet.png" />
                        </div>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="comandos">Comandos úteis</h1>
                        </div>


                        <h3 id="comandos-describe">DESCRIBE</h3>

                        <p> O comando <code>DESCRIBE</code>é muito útil pois ele é um raio-x da tabela, vamos utilizá-lo
                            para checar se a tabela que criamos é realmente a tabela que queríamos criar.</p>

                        <pre><code class="no-highlight">DESCRIBE pet;</code></pre>

                        <p>O comando acima traz o resultado abaixo:</p>

                        <div class="bs-example ">
                            <img class="img-thumbnail" alt="### Resultado do comando DESCRIBE pet" src="describe-pet.png" />
                        </div>


                        <h3>DROPT TABLE</h3>

                        <p>Quer apagar a tabela? É isso o que o comando DROP TABLE faz.</p>

                        <pre><code class="no-highlight">DROP TABLE pet;</code></pre>


                        <h3>TRUNCATE TABLE</h3>

                        <p>Truncar a tabela significa limpar todos os dados da tabela e zerar o os dados de auto incremento
                            (calma, veremos isso em breve)</p>

                        <pre><code class="no-highlight">TRUNCATE TABLE pet;</code></pre>

                        <p>Por enquanto, vamos utilizar quando quizermos apagar todos os dados.</p>

                        <p>Provavelmete, você precisará desse comando para a seção seguinte...


                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="populando">Populando a tabela</h1>
                        </div>

                        <p>Não está faltando alguma coisa nessa tabela?</p>

                        <p>Sim, os dados!</p>

                        <p>Legal, então vamos inserir um a um... não mesmo, vamos inserir isso rapidamente.</p>

                        <p> Há um comando que lê um arquivo de texto separado por tabulações (tab) e insere os dados
                            na tabela para a gente, é o seguinte </p>

                        <pre><code class="no-highlight">LOAD DATA LOCAL INFILE '/caminho/seu-arquivo' INTO TABLE nome-da-tabela;</code></pre>

                        <p>Vamos criar um arquivo chamado <code>pet.txt</code>. Seu conteúdo se parece com o seguinte:</p>

                        <div class="code">
                            <h6>pet.txt</h6>
                            <pre><code class="no-highlight">Fluffy	Harold	cat	f	1993-02-04	\N
Claws	Gwen	cat	m	1994-03-17	\N
Buffy	Harold	dog	f	1989-05-13	\N
Fang	Benny	dog	m	1990-08-27	\N
Bowser	Diane	dog	m	1979-08-31	1995-07-29
Chirpy	Gwen	bird	f	1998-09-11	\N
Whistler	Gwen	bird	\N	1997-12-09	\N
Slim	Benny	snake	m	1996-04-29	\N
</code></pre></div>

                        <p>...onde <code>\N</code> representa valores nulos (desconhecidos).</p>

                        <p>No meu caso eu salvei o arquivo na pasta <code>/home/flavio</code>. Meu statement ficou assim:</p>

                        <pre><code class="no-highlight">LOAD DATA LOCAL INFILE '/home/flavio/pet.txt' INTO TABLE pet;</code></pre>

                        <p><strong>Como saber se deu certo?</strong></p>

                        <p>Execute...</p>

                        <pre><code class="no-highlight">SELECT * FROM pet;</code></pre>

                        <p>...sua tela deve parecer-se com a minha:</p>

                        <div class="bs-example ">
                            <img class="img-thumbnail" alt="### Resultado do comando SELECT * FROM pet " src="select-pet.png" />
                        </div>

                        <p>Se você conseguiu inserir os dados mas eles não ficaram igual ao meu exemplo limpe a tabela
                            (<code>TRUNCATE TABLE pet;</code>) e tente denovo.</p>

                        <p>Se preferir peque o exemplo neste  <a href="https://gist.github.com/flaviomicheletti/8359890" title="link-externo">gist</a>.</p>

                        <p>Na próxima matéria veremos como fazer o CRUD (continuaremos utilizando a tabela <code>pet</code>).</p>

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
                                    <a href="http://dev.mysql.com/doc/refman/5.7/en/database-use.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Parte do manual MySqL (Referência)</h4>
                                        <span class="label label-default">http://dev.mysql.com/doc/refman/5.7/en/database-use.html</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_MYSQL]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->paginas, Core::SECAO_MYSQL, Core::SUB_SECAO_CURSO);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
