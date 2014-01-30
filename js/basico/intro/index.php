<?php
/**
 * JS
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
        $core->head->setTitle('Introdução a linguagem de programação JAVASCRIPT');
        $core->head->setDescription('Uma introdução ao Javascript. Acompanha 2 script para quebrar o \"gelo\"');
        $core->head->setkeywords('iniciando em javascript, aprendendo javascript, começando com javascript');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Introdução ao Javascript</h1>
                <p>Acompanha um pequeno script de exemplo para quebrar o gelo..</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">08/11/2012</span>, escrito em <span class="label label-info">08/10/2012</span>.
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
                                <a href="#js-intro">Introdução</a>
                            </li>
                            <li>
                                <a href="#js-pri">O primeiro script</a>
                            </li>
                            <li>
                                <a href="#js-seg">O segundo script</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="js-intro">Introdução</h1>
                        </div>

                        <p><strong>Javascript(JS) não é brinquedo, é linguagem de programação séria</strong>.</p>

                        <p>Das mil definições de JS a que mais me agrada é a de
                            Kevin e Cameron em seu livro "Simple Javascript" (Só Javascript):</p>

                        <blockquote>
                            <p>"Javascript é uma linguagem de programação simples que permite alterar páginas web dinamicamente, enquanto estão
                                sendo exibidas em um navegador.".</p>
                        </blockquote>

                        <p>E os autores alertam...</p>

                        <blockquote>
                            <p>"Parece algo que você pode dominar em uma tarde, JS parece simples, contudo, em seus 10 anos de história até aqui
                                [o livro é de 2007], as melhores práticas de JS pareciam mudar com as estações.".</p>
                        </blockquote>

                        <p>A definição do pessoal do Mozilla também me agrada:</p>

                        <blockquote>
                            <p>"Javascript (às vezes chamado apenas de JS) é uma linguagem de programação, leve, interpretada, orientada a objetos,
                                baseada em protótipos e em <strong>first-class functions</strong> (funções de primeira classe), mais conhecida como a linguagem de
                                script da Web. Também utilizada em vários outros ambientes como node.js e Apache CouchDB."</span>.</p>
                        </blockquote>

                        <p>É possível fazer mil peripécias com JS e suas páginas da web, a cada dia a lista de possibilidades vai aumentado. A maior
                            utilização do JS é no sentido de melhoria de páginas web (HTML e CSS), o que chamamos de <strong>aperfeiçoamento progressivo</strong>,
                            começa-se com o HTML, CSS e por fim o JS.</p>

                        <p><strong>Validar um formulário</strong> do lado do cliente evitando que os dados trafeguem até o servidor foi, por um bom tempo, a
                            melhoria mais aplicada e popular. Quem nunca validou um formulário com JS?</p>

                        <p>Um tecnologia que ajudou em muito a popularização da linguagem é o <strong>AJAX</strong>. A junção do JS com XML sendo realizado por
                            requisições diretamente do código de JS para o servidor é algo surpreendente.</p>

                        <p>Outra aplicação do JS que empolga bastante são as chamadas <strong>aplicalções web ricas</strong>. O termo "rico" refere-se a interface,
                            ou seja, a interface é quem está mais rica, mais usual, mais fácil, mas agregadora. Há quem diga que elas são o futuro
                            das aplicações web.</p>

                        <p>O nodejs promete levar o JS para o lado do servidor, isso já é uma realidade e será questão de tempo até encontrarmos
                            bons frutos dessa iniciativa.</p>

                        <p><strong>Javascript nasceu em 1995, seu pai chama-se Brendan Eich</strong>. Ná época a Netscape queria uma linguagem que roda-se no lado
                            do cliente e incubiu Brendam de realizar este projeto. Ela chamava-se LiveScript e como a SUN Microsystems interessou-se
                            pela linguagem e também começo a contribuir, conseguiu que ela vie-se a se chamar Javascript, foi uma lance de marketing
                            com a linguagem Java. A única coisa que Javascript tem de comum com a linguagem Java é que ambas são orientada a objetos,
                            mas até isso é implementado de forma diferente, bem diferente.</p>

                        <p><strong>Javascript não é Java</strong>.</p>

                        <p>Obs: Há quem diga que Javascript nasceu antes de 1995, chamava-se Cmm, e blá blá blá. Mas isso é história.</p>

                        <p>Após algum tempo, a empresa ECMA resolveu padronizar a linguagem e criou o padrão ECMAscript, na verdade este é o nome
                            adotado para a linguagem. Porque temos um padrão? Porque cada navegador implementa a linguagem de forma diferente, em
                            outras palavras, escrever um trecho de código Javascript válido que funciona no Firefox, por exemplo, pode não funcionar
                            no IE (sempre o IE). Isso mesmo, Javascript sofre do mesmo problema que o HTML e o CSS, cada navegador implementa ao
                            seu sabor. "Em teoria, a  padronização obriga as empresas fabricantes de navegadores a implementarem no mínimo aquele
                            conjunto de funcionalidades"(Edgar Damiani) ...por isso o padrão ECMA é tão importante.</p>

                        <p><strong>JS é legal porque dá para começar a programar em segundos. A instalação do ambiente é estupidamente fácil: basta um
                                navegador web e um editor de texto</strong>. Só não vale o IE nem o bloco de notas.</p>

                        <p>Eu utilizo o Firefox para testar meus scripts. O firefox tem um plugin que é um verdadeiro caniveto suíço, faz tudo e
                            mais um pouco, trata-se do Firebug. uma ferramenta e tanto, no decorrer do curso vamos utilizá-lo com frequência. Outro
                            plugin que não pode ficar de fora é o Web Developer, instale os dois plugins e vá descobrindo aos poucos suas
                            funcionalidades, você irá se surpreender.</p>

                        <p>Quanto ao editor de código, este fica a sua escolha, eu uso e gosto muito do Netbeans.</p>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="js-pri">O primeiro script a gente nunca esqueçe</h2>
                        </div>

                        <p>Crie um arquivo texto e salve com o nome
                            "index.html". Agora insira nele o seguinte código:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var foo = "Eu sou javascript";
alert(foo);</code></pre>
                        </div>

                        <p>Agora abra um navegador qualquer e, em seguida, abra o arquivo.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="js-seg">O segundo script talvez a gente esqueça</h2>
                        </div>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src="pic_bulboff.gif";
    } else {
        element.src="pic_bulbon.gif";
    }
};</code></pre>
                        </div>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Imagem da luz apagada" id="myimage" src="pic_bulboff.gif">
                            <p>Programar é uma atividade criativa !!! Clique e confira.</p>
                            <p>Fonte:<a href="http://www.w3schools.com/js/tryit.asp?filename=tryjs_lightbulb" title="link-externo">w3schools</a></p>
                        </div>

                        <p>O que o código acima faz?
                            Ele apenas ascende e apaga uma lâmpada!</p>

                        <p>OK, brincadeiras à parte. O código é um pouco mais elaborado, a lógica é a seguinte: temos duas figuras da mesma lâmpada,
                            uma acesa e outra apagada. A cada clique, troque a imagem da lâmpada. É isso, vejamos o html para entendermos melhor o
                            funcionamento do conjunto.</p>

                        <div class="code">
                            <h6>HTML</h6>
                            <pre><code class="language-html">&lt!DOCTYPE html&gt
&lthtml&gt
    &lthead&gt
        &ltmeta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt
        &lttitle&gtHello, World!&lt/title&gt
    &lt/head&gt
    &ltbody&gt

        &ltimg id="myimage" src="../imagens/pic_bulboff.gif" alt="lampada"/&gt
        &ltp&gtClick the light bulb to turn on/off the light&lt/p&gt

        &ltscript type="text/javascript" src="codigo.js"&gt&lt/script&gt

    &lt/body&gt
&lt/html&gt</code></pre>
                        </div>

                        <p>Temos uma tag "img" e seu atributo "src" que aponta para uma imagem no servidor. É nesse elemento que nossa lógica irá
                            atuar. Presisamos "pegar" a imagem via JS, para tal utilizamos a função "getElementeById" (traduzindo: pegue o elemento
                            pelo id) e armazenamos o resultado na variável "element". Até aqui tudo bem.</p>

                        <p>Na sequência, atribuímos uma função para o evento "onclick" do elemento capurado. Não entendendeu como é feito isto?
                            Veja o código de forma mais limpa:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var element = document.getElementById('myimage');
<em>element.onclick = function() {
     ... ao clicar na imagem
     ... o código aqui inserido será acionado
};</em></code></pre>
                        </div>

                        <p>A função que embutimos faz exatamente o que a nossa lógica ditou: troca a imagem. Ela testa se o valor de "src" do
                            elemento é igual a "bulbon". Se for, ele troca para "pic&#95;bulboff.gif", se não ele troca para "pic&#95;bulbon.gif".</p>

                        <p>E assim temos a impressão de acender e apagar a lâmpada.
                            Isso é Javascript!</p>

                        <p>No curso, iremos estudar o JS em conjunto com suas irmãs (siamesas): HTML e CSS. O leitor deve ter certa familiaridade
                            com essas tecnologias porque, JS sem elas é hardware sem software.</p>

                        <p>Este curso foi, inicialmente, idealizado para iniciantes em programaçã e pessoas autodidatas que nunca frenquentaram um
                            curso regular de informática. Se este for o seu caso, talvez lhe falte um pouco de lógica de programação, aconselho a
                            fazer uma leitura atenta das 6 matérias do nível zero de PHP, afinal ĺógica é lógica em qualquer linguagem.</p>

                        <p>Atualmente (set/2012) JS disponta como o principal alicerce de um desenvolvedor front-end(client-side). Desenvolver do
                            lado do cliente, desenvolvedor de interfaces, engenheiro front-end. Seja lá qual for o nome, o fato é que cada vez mais
                            a atividade está se tornando uma profissão madura e respeitada (e bem remunerada).</p>

                        <p>Coincidência ou não, encontrei impresso no livro de Kevin e Camerom uma das fortes razões que me levaram a realizar o
                            projeto deste site...</p>

                        <blockquote>
                            <p>"alguns autores respeitados no setor o ensinarão uma porção de soluções rápidas para problemas simples e mais nada,
                                deixando-o apenas com corda suficiente para se enforcar quando você tentar resolver um problema de verdade. Então
                                quando desesperadamente procurar um exemplo na Web que faça o que você precisa, provavelmente será incapaz de entender
                                o código JS encontrado. Este livro é diferente..."</p>
                        </blockquote>

                        <p>Este site também. O objetivo é "você ganhar confiança não somente para escrever seu próprio código Javascript, mas também
                            para entender código escrito por outras pessoas e até para identificar código antigo e prejudicial e poder alterá-lo com
                            maestria".</p>

                        <p>JS é fantástico... e divertido! Seja bem vindo ao curso!</p>


                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h1 id="leituras">Leituras adicionais sugeridas</h1>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Livros</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="media">
                                        <a class="pull-left">
                                            <img class="media-object" src="livro-simple-js.jpg" alt="### Imagem do livro 'Simple Javascript'">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Só Javascript (Simple Javascript)</h4>
                                            <p class="list-group-item-text">Kevin e Cameron, Editora bookman</p>

                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left">
                                            <img class="media-object" src="livro-melhor-js.jpg" alt="### Imagem do livro 'O Melhor do Javascript'">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">O Melhor do Javascript</h4>
                                            <p class="list-group-item-text">Douglas Crockford, Editora Altabooks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/js/basico/intro";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_JS]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div>
            </div><!-- Corpo da matéria -->
        </div><!-- row -->
    </div><!-- Matéria -->

    <footer class="bs-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Javascript</h1>
                    <?php
                    $core->lista->setLinks($core->links, Core::SECAO_JS);
                    $core->lista->link_ativo = "/js/basico/intro/";
                    include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                    ?>
                </div>
            </div>
        </div>
    </footer>

    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    <script type="text/javascript">
        var element = document.getElementById('myimage');
        element.onclick = function() {
            if (element.src.match("bulbon")) {
                element.src = "pic_bulboff.gif";
            } else {
                element.src = "pic_bulbon.gif";
            }
        };
    </script>
</body>
</html>
