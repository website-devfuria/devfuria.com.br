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
        $core->head->setTitle('CRUD SQL');
        $core->head->setDescription('Aprenda a fazer um CRUD (create, read, update, delete) com os comandos SQL');
        $core->head->setkeywords('crud, crud sql, create, read, update, delete');
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
                <h1>Entendendo o que é CRUD</h1>
                <p>CRUD não é para comer! Trata-se das 4 operações básicas de SQL:</p>
                <p> create (insert), read (select), update, delete.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">27/01/2014</span>, escrito em <span class="label label-info">27/01/2014</span>.
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
                                <a href="#crud">Eu crudo, você cruda, eles crudam</a>
                            </li>
                            <li>
                                <a href="#insert">Create (insert)</a>
                            </li>
                            <li>
                                <a href="#select">Read (select)</a>
                            </li>
                            <li>
                                <a href="#update">Update (update)</a>
                            </li>
                            <li>
                                <a href="#delete">Delete (delete)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="crud">Eu crudo, você cruda, eles crudam</h1>
                        </div>

                        <p>O CRUD é um acrônimo para  as 4 operações básicas de um banco de dados.</p>
                        
                        <pre><code class='no-highlight'>creat = insert
read = select
update = update
delete = delete
</code></pre>
                        <p>O quadro acima fará parte de seu dia a dia, a imagem abaixo também.</p>

                        
                        <div class="bs-example">
                            <img class="img-rounded" alt="### figura ilustrando o CRUD;" src="crud.jpeg">
                        </div>                         
                        
                        <p>Para começarmos a brincar com o CRUD precisamos nos logar no console do Mysql...</p>

                        <pre><code class="no-highlight">mysql -u root -p</code></pre>
                        
                        <p>... e ativarmos a base que criamos:</p>
                        
                        <pre><code class="no-highlight">USE devlabs;</code></pre>
                        
                        <p>Na matéria passada nós criamos e populamos a tabela <code>pet</code>, ela será nosso objeto
                            de estudo. Você precisará dela se quiser acompanhar os exercícios</p>

                        <p>Para saber se você já possue a tabela, utilize o comando <code>SHOW TABLES;</code>
                            
                        <p>Se você quiser criar rapidamente a tabela esse <a href='https://gist.github.com/flaviomicheletti/8359890' title='link-externo'>Gist</a>
                            poderá te ajudar</p>
                        
                        <p>Então vamos ao CRUD...</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="insert">Create (insert)</h1>
                        </div>

                        <p>O comando <code>INSERT</code> insere dados. Veja o statement seguinte.</p>

                        <pre><code class="no-highlight">INSERT INTO pet VALUES();</code></pre>

                        <p>O comando acima pode ser traduzido da seguinte forma: <em>"Insira na tabela <code>pet</code>os
                                seguintes valores (valor1, valor2, valor3)"</em></p>

                        <p>Bastante intuitivo, não acha? Eu acho.</p>

                        <p>Vamos utilizar o exemplo abaixo para a nossa tabela <code>pet</code>.</p>

                        <pre><code class="no-highlight">INSERT INTO pet VALUES ('Puffball','Diane','hamster','f','1999-03-30',NULL);</code></pre>

                        <p>O exemplo acima é curto, então ele "ainda" é legível. Se fosse uma tabela maior, escrever
                            em um linha só tornaria a querie ilegível</p>

                        <p>Uma saída para queries maiores é fazer como o exemplo abaixo.</p>


                        <pre><code class="no-highlight">INSERT INTO pet VALUES (
    'Puffball',
    'Diane',
    'hamster',
    'f',
    '1999-03-30',
    NULL
);
</code></pre>
                        <p>Veja como ficou o comando digitado no console.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### figura ilustrando o comando INSERT digitado" src="inserte-digitado.png">
                            <p>Comando INSERT digitado!</p>
                        </div>

                        <p>Manteremos esse padrão quando formos programar isso do lado do servidor</p>

                        <p>Em outras palavras, vá se acostumando com esse formato.</p>

                        <p>Como ficou nossa tabela? É o que veremos no próximo tópico (Read).</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="select">Read (select)</h1>
                        </div>

                        <p>Utilizamos o comando <code>SELECT</code> quando queremos resgatar dados.</p>

                        <p>De longe, esse é o comando mais utilzado. O formato dele é o seguinte:</p>

                        <pre><code class="no-highlight">SELECT campo1, campo2, campo3 FROM tabela;</code></pre>

                        <p>Traduzindo o comando acima: <em>"selecione os campos 1, 2 e 3 da tabela xyz;"</em></p>

                        <p><strong>O retorno de instrunção será um conjunto de registros, também conhecido como
                                <em>recordeset</em></strong>.</p>

                        <p>O símbolo <code>*</code> (asterisco) representa um papel importante. Ele significa <strong>"todos"</strong>.</p>

                        <pre><code class="no-highlight">SELECT * FROM tabela;</code></pre>

                        <p>Traduzindo o comando acima: <em>"selecione todos os campos da tabela xyz;"</em></p>

                        <p>Em nosso exemplo, basta colocar o nome da tabela <code>pet</code>. Vejamos:</p>

                        <pre><code class="no-highlight">SELECT * FROM pet;</code></pre>

                        <p>Traduzindo o comando acima: <em>"selecione todos os campos da tabela pet;"</em></p>


                        <h3>Filtrando os registros</h3>

                        <p>Até agora, as instrunções <code>select</code> não especificaram quais os registros as serem
                            resgatados (exibidos).</p>

                        <p>Vamos traduzir por completo o último statement visto (<code>SELECT * FROM pet;</code>):</p>

                        <p><em>"selecione todos os campos da tabela pet <strong>e me traga todos os registros</strong>;"</em></p>

                        <p>Quando não especificamos quais registros queremos o interpretador de SQL entende que é para
                            trazer todos os registros.</p>


                        <p>Ok, então como dizemos ao interpretador que queremos determinado(s) registro(s)?</p>

                        <p>Utilizando a cláusula <code>WHERE</code> (onde) seguida de uma <code>condição</code>, veja o statement:</p>

                        <pre><code class="no-highlight">SELECT * FROM pet WHERE condição;</code></pre>

                        <p>E como é a condição? Essa é fácil, não preciso em explicar, basta olhar os exemplos:</p>

                        <pre><code class="no-highlight">SELECT * FROM pet WHERE species = 'cat';</code></pre>

                        <p><em>"selecione todos os campos da tabela pet e me traga todos os registros <strong>onde o campo 'species'
                                    seja igual a string 'cat'</strong>;"</em></p>

                        <p>Em outras palavras, quero listar todos os registros que são 'cat'.</p>

                        <p>Experimente executar o comando, sua tela deve ser parecida com a minha.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### figura ilustrando o resultado do comando SELECT * FROM pet WHERE species = 'cat';" src="select-pet-where-cat.png">
                            <p>Todos os cat's!</p>
                        </div>                        

                        <p>Quer saber quais são os dog's?</p>

                        <p>Execute o comando abaixo.</p>

                        <pre><code class="no-highlight">SELECT * FROM pet WHERE species = 'dog';</code></pre>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### figura ilustrando o resultado do comando SELECT * FROM pet WHERE species = 'dog';" src="select-pet-where-dog.png">
                            <p>Todos os dog's!</p>
                        </div>                        

                        <p>Uma dica importante é que a condição é uma expressão muito semelhante a utilizada em (qualquer)
                            linguagem de programação, ou seja, também podemos utilizar <code>()</code> parênteses e 
                            operadores lógicos como o <code>AND</code>. Em breve veremos mais sobre condições.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="update">Update (update)</h1>
                        </div>

                        <p>O comando <code>update</code> atualiza os registros.</p>

                        <pre><code class="no-highlight">UPDATE table SET campos=valores</code></pre>

                        <p>Traduzindo o comando acima: <em>"atualize na tabela xyz os seguintes campos e valores"</em></p>

                        <p>Um detalhe importante é que a instrunção irá <strong>atualizar todos os registros</strong> e nem
                            sempre o queremos atualizar a tabela inteira.</p>

                        <p>Para restringir a atualização em alguns poucos registros precisaremos utilizar as <code>condições</code></p>

                        <p>Veja o comando como ficou.</p>

                        <pre><code class="no-highlight">UPDATE table SET campos=valores WHERE condicao</code></pre>

                        <p>Traduzindo o comando acima: <em>"atualize na tabela xyz os seguintes campos e valores <strong>onde a condição seja verdadeira</strong>"</em></p>

                        <p>Outro detalhe é o trecho <code>SET campos=valores</code>. Depois de <code>set</code> separamos
                            os campos e valore por virgula, veja o comando abaixo.</p>

                        <pre><code class="no-highlight">UPDATE table SET campo1=valor1, campo2=valor2 WHERE condicao</code></pre>

                        <p>Voltando para nossa querida tabela <code>pet</code>, imagine que queremos atualizar  os campos
                            <code>birth</code> e <code>species</code> mas apenas do registro no qual <code>name</code>
                            seja igual a "Bowser". É o que faz o comando abaixo.</p>

                        <pre><code class="no-highlight">UPDATE pet SET birth = '1989-08-31', species = 'horse' WHERE name = 'Bowser';</code></pre>

                        <p>Na construção de statement SQL devemos sempre nos preocupar com sua estética, pois isso 
                            auxilia na sua legibilidade.</p>

                        <p>Veja como ficou o comando anterior.</p>

                        <pre><code class="no-highlight">UPDATE pet SET
birth = '1989-08-31',
species = 'horse'
WHERE name = 'Bowser';</code></pre>

                        <p>Agora veja como ficou digitado no console.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### figura ilustrando o comando UPDATE no console;" src="update.png">
                        </div>                          

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="delete">Delete (delete)</h1>
                        </div>

                        <p>Adivinha o que o comando <code>delete</code> faz? Deleta registros, isso mesmo!</p>

                        <p>Veja sua sintaxe.</p>

                        <pre><code class="no-highlight">DELETE FROM pet;</code></pre>

                        <p><strong>Cuidado!</strong> O comando acima apagará TODOS os registros da tabela.</p>

                        <p>Aliás, esse é um erro muito comum para quem está começando.</p>

                        <p>Para apagar um determinado registro (um único), devemos utilizar a cláusula <code>WHERE</code>
                            e uma <em>condição que seja em específica</em>.</p>

                        <p>Veja o comando abaixo.</p>

                        <pre><code class="no-highlight">DELETE FROM pet WHERE id = 123;</code></pre>

                        <p>Normalmente excluímos o registro pelo seu<code>id</code>. Mas como nossa tabela <code>pet</code>
                            é desprovida de tal campo, vamos deletar pelo campo <code>name</code> mesmo.</p>

                        <pre><code class="no-highlight">DELETE FROM pet WHERE name = 'Slim';</code></pre>

                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/mysql-sql/basico/crud/";
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
                        <h1></h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_MYSQL);
                        $core->lista->link_ativo = "/mysql-sql/basico/crud/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
