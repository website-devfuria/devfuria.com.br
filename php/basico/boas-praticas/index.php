<?php
/**
 * Boas práticas para quem está começando em PHP
 * boas práticas, endentação, nomeação de código, comentando código fonte, estilo de codificação, underline,
 * undersconteudo, camelcase
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/php/basico/boas-praticas/");
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
                <p>Aprenda o básico das boas práticas.</p>
                <p>São quatro dicas essenciais para quem está começando a programar</p>
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
                                <a href="#merda">Vai dar merda...</a>
                            </li>
                            <li>
                                <a href="#endente">Endentar o código fonte</a>
                            </li>
                            <li>
                                <a href="#nomeie">Nomeie adequadamente</a>
                            </li>
                            <li>
                                <a href="#comente">Comente o código</a>
                            </li>
                            <li>
                                <a href="#estilos">Tenha um estilo </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="merda">Vai dar merda...</h2>
                        </div>

                        <blockquote>
                            <p>“A questão é que o PHP é fácil demais. O que incentiva a implementar suas idéias, retornando, assim, bons
                                resultados. Algumas dessas facilidades são a possibilidade de digitar grande parte de seu código diretamente em suas
                                páginas da Web, adicionar funções úteis (como um código de acesso a banco de dados) a arquivos, incluindo-as de página
                                em página e, antes de se dar conta, você já tem um aplicativo Web em execução.</p>

                            <p>Bem, na verdade você está indo em direção ao desastre, porém nem percebe, é claro, pois seu site parece
                                fantástico; ele funciona bem, seus clientes estão satisfeitos e gastando dinheiro.</p>

                            <p>O problema surge quando você retorna ao código para iniciar uma nova fase, Mas, agora, você tem equipe e
                                orçamento maiores e mais usuários. E, sem aviso algum, as coisas começam a dar errado, como se seu projeto tivesse sido
                                envenenado.</p>

                            <p>Nesse momento, seu novo programador quebra a cabeça para entender o seu código, que para você pode ser óbvio,
                                embora, talvez, um pouco pretensioso em suas declarações e expressões. Porém, ele, o programador, está demorando mais
                                que o esperado para exibir seu potencial e poder vir a se tornar um membro da equipe.”
                                <small>Fonte: Matt Zandstra, abrindo seu livro Objetos PHP, padrões e prática.</small></p>
                        </blockquote>

                        <p>Zandstra foi muito feliz ao abrir o primeiro capítulo de seu livro com um alerta. <strong>Qualquer um pode desenvolver um software,
                                mas poucos o fazem com maestria</strong>. O autor refere-se aos problemas que atingem a todos os programadores: falta de planejamento;
                            falta de organização, falta de preparo, muita ansiedade em começar a codificação, falta de tempo (prazos irreais) e etc...
                            Por outro lado, existem sempre aquelas receitas mágicas que parecem que vão "salvar o mundo".</p>

                        <p>Esta matéria traz algumas considerações sobre boas práticas, <strong>antes de você desembestar a cuspir códigos à rodo</strong>. Na verdade
                            são <em>quatro dicas essenciais</em> para quem está começando a programar:</p>

                        <ol>
                            <li>endente seu código (eu lhe imploro)</li>
                            <li>use uma boa nomenclatura, desde variáveis até nome de scripts, bases, formulários, métodos, classes, etc...</li>
                            <li>comente o código</li>
                            <li>programar é como pintar um quadro, cada um tem um estilo, procure o seu.</li>
                        </ol>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="endente">1 - Endentar o código fonte</h2>
                        </div>
                        <p>Endentar o código significa dar espaço determinado no começo da linha do código com o intuito de torná-lo mais claro.</p>

                        <p>Vejamos um código sem endentação:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

if($valor)
echo “código sem endentação é trabalho de amador”;
else
echo “não inventaram nada pior que código não endentado”;

?&gt;</code></pre>
                        </div>

                        <p>E agora, um código endentado:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

if($valor)
    echo “código sem endentação é trabalho de amador”;
else
    echo “não inventaram nada pior que código não endentado”;

?&gt;</code></pre>
                        </div>

                        <p>Se para você ambos os códigos estão “de acordo”, então sabemos que você não gosta de endentar código. Um exercício
                            interessante de se fazer é pegar um código fonte de umas 100 linhas e endentá-lo.</p>

                        <p>Alguns programadores defendem que a
                            endentação deve ser realizado com quatro espaços, ou seja, ao invés da tecla TAB, acionamos quatro vezes a barra de espaço.
                            Eles dizem isso por que diferentes editores podem exibir diferentes formatos do código fonte. Mas seja com espaços, ou
                            com o TAB (eu sou normal e uso o TAB) use-os!!!</p>

                        <p>Outra consideração importante é: <strong>ao digitar uma linha, idente-a. Não deixe para arrumar o código no final</strong>. Sua vista
                            deve ir se acostumando com o codigo endentado, se deixar para o final você irá acostumar-se com código sem endentação.
                            <strong>Olhe muito código de terceiro</strong>, além de ajudar com o estilo, ajuda a entender da importância da endentação.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="nomeie">2 - Nomeie (tudo) adequadamente</h2>
                        </div>
                        <p><strong>Nomear variáveis, funções, classes, campos de banco de dados, campos de formulário HTML e tudo o mais que vir à mente...
                                é uma arte</strong>. Existem algumas regras básicas pertinentes à línguaguem de programação como, por exemplo, o fato de <code>nome</code>
                            ser diferente de <code>Nome</code>, no caso estou me referindo ao <strong>sensitive case (caixa sensível)</strong>. Existem também regras gerais e
                            bastante disseminadas como, por exemplo, o <strong>camel case</strong> que diz para colocar em maiúscula  a letra da segunda palavra
                            (<code>umExemplo</code>). Há também o <strong>underline</strong> ou <strong>undersconteudo</strong> para separar os nomes das variáveis (outro&#95;exemplo). Há alguns
                            estilo que diz para reservar três caracteres ao começo do nome da variável para identificar o tipo, mas como eu disse é
                            apenas um estilo.</p>

                        <p>Ruim mesmo é quando ocorrem duas situações: a) quando o nome não reflete a idéia da variável e b) quando há uma bagunça
                            de regras e/ou estilos. Tomemos um exemplo simples. A tabela cliente deve conter os campos <code>id</code>, <code>codigo</code>, <code>nome</code>, <code>endereco</code>.</p>

                        <p>Surgem os nomes de campos...</p>

                        <div class="code">
                            <h6>Texto plano</h6>
                            <pre><code class="no-highlight">cliente_id
cliente_codigo
cliente_nome
cliente_endereco</code></pre>
                        </div>

                        <p>Que tal? Tudo certo? Bom, vamos imaginar a instrução select...</p>

                        <div class="code">
                            <h6>SQL</h6>
                            <pre><code class="no-highlight">SELECT cliente_id, cliente_codigo e etc...FROM clientes</code></pre>
                        </div>

                        <p>Fica grande, ocupa espaço, ruim mesmo.</p>

                        <p>Pior que isso, só a bagunça seguinte...</p>

                        <div class="code">
                            <h6>Texto plano</h6>
                            <pre><code class="no-highlight">clienteId
clienteCodigo
cliente_nome
clientes_endereco</code></pre>
                        </div>

                        <p>Simplesmente terrível. Estamos usando os campos de uma tabela como exemplo, mas poderia ser os campos de um formulário HTML.</p>

                        <div class="code">
                            <h6>Texto plano</h6>
                            <pre><code class="no-highlight">cpId
cpCodigo
cpNome
cpEndereco</code></pre>
                        </div>

                        <p>O que siginifica <code>cp</code>? Ora, siginifica <code>campo</code>, mas precisa explicitar que é um campo? Não, não precisa. Bastasse...</p>

                        <div class="code">
                            <h6>Texto plano</h6>
                            <pre><code class="no-highlight">id
codigo
nome
endereco</code></pre>
                        </div>

                        <p>Às vezes o nome da variável é muito vago como, por exemplo, <code>endereco</code>. Mas que tipo de endereço? Endereço completo? Só
                            o logradouro? Logradouro mais número? Nomes muito curto ou muito longos também não são adequados.</p>

                        <p>
                            <strong>Criar nomes adequados para variáveis pode depender da lógica</strong>. Por exemplo,
                            espera-se obter o número menor do array, então que tal <code>numero_menor</code> ? ou
                            <code>numeroMenor</code>? As duas são adequadas. Quem tem uma boa lógica somada a visão macro
                            do negócio (domínio) e aliado ao exercício constante de ficar procurando por uma nomenclatura
                            adequadas, consegue sempre uma boa nomeação. Considere pensar muito antes de nomear “as coisas”.
                        </p>

                        <p>O ministério dos programadores adverte: </p>
                        
                        <p>
                            <strong>“Prestar manutenção em um sistema com nomenclaturas do tipo Frankstain pode causar urticárias”</strong>.
                        </p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="comente">3 - Comente o código... e faça-o de forma concisa</h2>
                        </div>
                        <p><strong>Comentar código, assim como nomear variáveis, também é uma arte</strong>. Existem programadores que não comentam o código, há
                            também os que comentam demais. Há, ainda, aqueles que acham que o comentário do código é a documentação do sistema, não é.</p>

                        <p>Infelizmente, não existe uma regra única para comentar o código, cada programador faz do seu jeito. Também não existe a
                            melhor ou a pior forma de comentar, apenas existe a forma que auxilia quem a lê e a forma que não ajuda em nada. Quando
                            for comentar o código, tenha como objetivo somente isso: auxiliar alguém quem não conhece o código e está tentando
                            entendê-lo. Se esse objetivo for cumprido, então o comentário foi nota 10.</p>

                        <p>Outra coisa importante é: seja, ao menos, conciso. Quero dizer, use de português claro e objetivo. Não esqueça da
                            acentuar as palavras (afinal, falamos português, não é mesmo?), alguns programadores não fazem isso, eles estão
                            preocupados com o “charset” do arquivo.</p>

                        <p>Vou passar alguns modelinhos de comentários, mas não se apegue a eles, apenas use-os com bom senso.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php

// Comente uma única linha de código isolada, só se for necessário mas principalmente se for necessário.

// Não é preciso comentar toda ou cada linha do código, lembre-se que comentar também polui.

# Sinal de “sharp”, também serve para comentários.

/**
 * Quis destacar este comentário, por isso fiz dessa forma
 * mas não é só isso, este tipo de comentário é um tanto
 * tanto quanto especial. Falaremos sobre isso em breve.
 *
 * Ele é conhecido como "doc-block"
 *
 */

#
# Também gosto de destacar dessa forma, mas dê preferência a anterior.
#

?&gt;</code></pre>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="estilos">4 - Tenha um estilo ou... siga um</h2>
                        </div>

                        <p>Neste contexto, "estilo" é o formato no qual seu código é apresentado. A grande dica para que está começando em um equipe é: <strong>descubra e respeite
                                o estilo da equipe, mesmo que ele não seja bem definido.</strong> Mais difícil que ter um estilo e seguir um estilo.</p>

                        <p>Pode-se entender estilo como sendo o "padrão de codificação", mais conhecido no termo em inglês "coding standars". Uma
                            boa equipe tem um padrão ao menos razoável e niguém "inventa moda". <strong>Quando olhamos o código feito pela equipe</strong> não
                            conseguimos identificar se foi Zezinho ou Luizinho quem mexeu no código, ou seja, <strong>parece que foi escrito por
                                uma só pessoa</strong>, esse é o objetivo.</p>

                        <p>No site do PECL (uma biblioteca respeitosa de códigos PHP) encontramos alguns exemplos de estilo, vejamos:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
if ((condition1) || (condition2)) {
    action1;
} elseif ((condition3) && (condition4)) {
    action2;
} else {
    defaultaction;
}
?&gt;</code></pre>
                        </div>

                        <p>Mas tem quem goste de colocar as chaves na linha de baixo, olhe a diferença:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
if ((condition1) || (condition2))
{
    action1;
}
elseif ((condition3) && (condition4))
{
    action2;
}
else
{
    defaultaction;
}
?&gt;</code></pre>
                        </div>

                        <p>E ainda os que gostam de aperto, veja se você sente isso:</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
if((condition1)||(condition2)){
    action1;
}elseif((condition3)&&(condition4)){
    action2;
}else{
    defaultaction;
}
?&gt;</code></pre>
                        </div>

                        <p>Até aqui, tudo é uma questão de estilo, o que não pode é a ausência de estilo, veja o exemplo abaixo</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">&lt;?php
if ((condition1)||(condition2))
{
    action1;
}
elseif(  (condition3)&&(condition4)  ){
    action2;
}else{  defaultaction;}
?&gt;</code></pre>
                        </div>

                        <p>Parece mais o estilo "zorra total", rssss</p>

                        <p>Tudo bem, no começo, é difícil ter um parâmetro para fazer uma boa escolha do estilo, a dica é: não invente moda!!!
                            e observe muito código de terceiro, depois de uns 2 ou 3 anos programando (direto e reto) você começará a compor
                            seu verdadeiro estilo. Mas não se esqueça dessas quatro dicas:</p>

                        <ol>
                            <li>endentar o código</li>
                            <li>usar uma boa nomenclatura</li>
                            <li>comentar o código</li>
                            <li>ter ou seguir um estilo.</li>
                        </ol>

                        <p>... e seja feliz!</p>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>