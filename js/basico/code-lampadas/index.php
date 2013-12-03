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
        $core->head->setTitle('JS');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = "js";
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?> 


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Code - A lâmpada</h1>
                <p>Revendo o código do "primeiro script" aprenderemos um pouco de tudo:
                getElementById, funções, eventos, DOM, firebug, document e window.
                </p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em 30/04/2013, escrito em 10/04/2013.
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
                                <a href="#intro">Analisando código</a>
                            </li>
                            <li>
                                <a href="#maos-obra">Mãos a obra</a>
                            </li>
                            <li>
                                <a href="#funcionar">Faça o script funcionar</a>
                                <ul class="nav">
                                    <li>
                                        <a href="#teste01">Primeiro teste</a>
                                    </li>
                                    <li>
                                        <a href="#teste02">Segundo teste</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#by-id">getElementById</a>
                            </li>
                            <li>
                                <a href="#document">document</a>
                            </li>
                            <li>
                                <a href="#onclick">onclick</a>
                            </li>
                            <li>
                                <a href="#function">function()</a>
                            </li>
                            <li>
                                <a href="#src">src</a>
                            </li>
                            <li>
                                <a href="#match">match()</a>
                            </li>
                            <li>
                                <a href="#conclusao">Conclusão</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Analisando código</h1>
                        </div>                         

                        <p>Nessa matéria utilizarei o código que faz a uma lámpada ascender e apagar visto na matéria
                            <a href="http://www.devfuria.com.br/js/basico/intro/" title="JS|Intro">Introdução</a>
                        </p>

                        <p>Clique nas abas para visualizar as partes separadamente: HTML, JS e resultado.</p>

                        <pre class="codepen" data-height="300" data-type="js" data-href="zFGvl" data-user="flaviomicheletti" data-safe="true">
<code>var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match(&quot;bulbon&quot;)) {
        element.src=&quot;http://www.devfuria.com.br/js/imagens/pic_bulboff.gif&quot;;
    } else {
        element.src=&quot;http://www.devfuria.com.br/js/imagens/pic_bulbon.gif&quot;;
    }
};</code><a href="http://codepen.io/flaviomicheletti/pen/zFGvl">Check out this Pen!</a></pre>

                        <p><script async src="http://codepen.io/assets/embed/ei.js"></script></p>
                    </div>                         

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="maos-obra">Mãos a obra</h1>
                        </div>

                        <p>Primeiro, não posso deixar de comentar que programar no lado cliente é uma tarefa que exige muita criatividade. Esse 
                            exemplo ilustra bem isso.</p>

                        <p>O objetivo do script é dar a sensação de que estamos apagando e acendendo uma lâmpada.</p>

                        <p>Você imagina como faremos isso funcionar?</p>

                        <p>Utilizaresmos duas imagens: uma com a lâmpada apagada e outra com a luz acessa. Quando clicamos na imagem acessa o
                            script deve trocar pela imagem apagada, quando clicamos na imagem apagada o script troca pela imagem acesa. Veja as
                            figuras abaixo:</p>

                        <div class="bs-example bs-example-images">
                            <img class="img-rounded" src="pic_bulboff.gif" alt="lámpada apagada" />
                            <img class="img-rounded" src="pic_bulbon.gif" alt="lámpada acesa" />
                            <p>O truque das lámpadas</p>
                        </div>                         

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="funcionar">Faça o script funcionar localmente</h1>
                        </div>                    

                        <p>Para você me acompanhar, o ideal seria você baixar os código fontes ou redigitá-los.</p>

                        <p>Baixe os arquivos através do Gist: <a href="https://gist.github.com/flaviomicheletti/6095926" title="Gist">https://gist.github.com/flaviomicheletti/6095926</a>
                            , clique no botão "Download Gist" e descompacte o arquivo.</p>

                        <p>Baixe também as imagens das lâmpadas: <a href="pic_bulboff.gif" title="lâmpada off">lâmpada apagada</a>, 
                            <a href="pic_bulbon.gif" title="lâmpada on">lâmpada acesa</a></p>

                        <p>Agora, abra o arquivo html no navegador.</p>

                        <p>Não se esqueca do endereço de seu servidor web (apache) que é localhost. Na minha máquina eu utilizo o seguinte endereço:</p>

                        <pre><code>http://localhost/devfuria/labs/index.html</code></pre>

                        <p>Esse é o endereço que eu digito no navegador, mas o endereço físico (no harddisk) é: </p>

                        <pre><code>/var/www/html/devfuria/labs/index.html</code></pre>

                        <p>A diferênça é </p>

                        <pre><code>NAVEGADOR = http//localhost/[seus diretórios]
HD        = /var/www/html/[seus diretórios]</code></pre>

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="teste01">Primeiro teste</h3>
                            </div> 

                            <p>Ao clicar na lâmpada, ela (na verdade o link) aciona a função que alterna entre a uma imagem e outra.</p>

                            <p>Deu certo? Ótimo.</p>

                            <p>Deu errado? Ótimo também, aproveite para olhar a aba Network ("redes" em português) do Firebug para ver qual arquivo 
                                está faltando, provavelmente é isso que está errado.</p>
                        </div> 

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h3 id="teste02">Segundo teste</h3>
                            </div>                     

                            <p>Vamos nos comunicar com o Firebug. Acione a tecla F12 para abrir o dito cujo e escolha a aba "console".</p>

                            <p>Agora recarregue a página (F5).</p>

                            <p>Apareceu alguma mensagem  no console? Não? Maravilha, "parece" que não temos erros no JS.</p>

                            <p>OPs, você não conhece o Firebug? Pare tudo e leia a matéria anterior a esta: 
                                <a href="http://www.devfuria.com.br/js/basico/debugando/" title="Matéria: Debugando o JS">Debugando</a>. Vai lá que eu te espero.</p>

                            <p>Agora vamos aproveitar e estabelecer a comunicação: no arquivo "codigo.js" insira a seguinte linha</p>

                            <pre><code>console.log("comunicação estabelecida");</code></pre>

                            <p>Você pode inser antes ou depois da função, veja como ficou o meu código:</p>

                            <div class="code">
                                <h6>JS</h6>
                                <pre>
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src="../imagens/pic_bulboff.gif";
    } else {
        element.src="../imagens/pic_bulbon.gif";
    }
};
<em>console.log("comunicação estabelecida");</em>
                                </pre>
                            </div>

                            <p>Desse ponto em diante eu explicarei partes do ćodigo, caso fique na dúvida, tente descobrir o valor das variáveis 
                                através do "console.log()"</p>

                            <p>Experimente (teste) tudo:</p>

                            <pre><code>console.log(element);
console.log(element.src);
console.log(element.src.match("bulbon"));
console.log(document);
console.log(window);
</code></pre>

                            <p>Experimente também fazer isso:</p>
                            <div class="code">
                                <h6>JS</h6>
                                <pre>
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        <em>console.log('true');</em>
        element.src="../imagens/pic&#95;bulboff.gif";
    } else {
        <em>console.log('false');</em>
        element.src="../imagens/pic&#95;bulbon.gif";
    }
};
                                </pre>
                            </div>
                        </div>                         
                    </div>                    
                    
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="by-id">getElementById</h1>
                        </div> 

                        <p>Uma coisa que fazemos com muita frequência em JS é referenciar (ou talvez a palavra mais adequada seja <em>buscar</em>) 
                            elementos HTML. Estamos buscando um elemento na árvore DOM (Document Object Model), mas isso comentaremos em outro momento.</p>

                        <p>Mas é exatamente isso o que estamos fazendo com o a função <em>getElementById()</em>.</p>

                        <p>Ela buscará um elemento HTML através da propriedade "id" desse elemento, ou seja, é necessário ter o elemento HTML para
                            que a função funcione corretamente.</p>

                        <p>Se a função encontrar o elemento procurado, ela retornará esse elemento. Então atribuimos o resultado a uma variável 
                            para podermos manipular essa variável. Isso tudo acontece na linha 01 do código (veja o codepen no início da matéria),
                            atribuímos o resultado de função na variável <em>elemento</em> (poderia ser qualquer outro nome, obviamente).</p>

                        <p>Caso o elemnto HTML não exista, a função não dispara erro algum, ela é silenciosa. Ela apenas retornará "null", esse 
                            será o valor que atribuiremos a variável "elemento". Então, na linha 02, quando usamos o método "onclick" o JS dispara 
                            o erro: </p>

                        <pre><code>TypeError: element is null</code></pre>

                        <p>É como se estivéssemos tentando fazer algo do tipo:</p>

                        <pre><code>var element = document.getElementById('nome-que-nao-existe');
null.onclick = ...
</code></pre>

                        <p>...logo, vai dar pau.</p>

                        <p>E se tivéssemos vários elementos com o mesmo id? Hum! Me responda você.</p>

                        <p>Porque seu HTML possue vários elemento id quando cada deveria aparecer apenas uma única vez (alias, essa é a 
                            especificação o HTML)?</p>
                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="document">document</h1>
                        </div> 

                        <p>E esse <em>document</em> antes da função, o que siginifica?</p>

                        <p>Esse objeto faz parte do DOM, ele representa o documento ativo, antes dele (um nível acima) temos o objeto <em>window</em> e o
                            correto era escrever assim:</p>

                        <pre><code>window.document.getElementById();</code></pre>

                        <p>...mas isso é verboso demais. O objeto "window" pôde ser suprimido, mas ele ainda existe nos navegadores (muito 
                            provavelmente para garantir a retocompatibilidade).</p>

                        <p>Para simplificar as coisas, vamos encarar o document como um objeto importante e que contém funções importantes como a 
                            que acabamos de aprender.</p>
                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="onclick">onclick=""</h1>
                        </div> 

                        <p>Já ouviu falar em eventos? Isso mesmo "onclick" nada mais é do que o evento click.</p>

                        <p>Mas de quem é esse evento? Os eventos são anexados aos elementos, no nosso exemplo anexamos o evento a tag "img"</p>

                        <pre><code>element.onclick = ...aqui entra uma função!!!</code></pre>

                        <p>Ao clicarmos na imagem... disparamos o evento.</p>
                    </div> 
                    
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="function">function()</h1>
                        </div> 

                        <p>Uma função é uma função (momento KISS).</p>

                        <p>Mas ela pode ser atribuída a uma variável? PODE...</p>

                        <p>...seja bem vindo ao mundo do JS.</p>

                        <p>Uma função simples em JS parece-se com a mostrada a baixo:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
function mostrar_alerta () {
    alert('chamou a função');
};
mostrar_alerta();
                            </pre>
                        </div>

                        <p>Mas isso já não se usa mais.</p>

                        <p>O mais usual é colocarmos a função dentro de uma variável e executamos a função referenciando-se a variável, veja:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var mostrar_alerta = function () { alert('chamou a função'); };
mostrar_alerta();
                            </pre>
                        </div>

                        <p>Para dar uma charme no estilo da codificação, aplicamos uma quebra de linha (ENTER) após a primeira chave da função, 
                            veja:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var mostrar_alerta = function () { 
    alert('chamou a função');
};
mostrar_alerta();
                            </pre>
                        </div>

                        <p>Espero que tenha gostado do estilo, pois é assim que todo mundo (99,999%) codifica em JS.</p>

                        <p>Mas não é apenas estilo que estamos observando, esse negócio de colocar a função em uma variável tem um nome, chama-se:
                            função anônima. Bom, deixemos isso para depois, ok?</p>

                        <p>Aproveite para ir se acostumando com isso:</p>

                        <pre><code>var minha_funcao = function() { };</code></pre>

                    </div> 
                    
                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="src">src=""</h1>
                        </div> 

                        <p>Esse "scr" nada mais é do que uma propriedade HTML, isso mesmo, HTML!</p>

                        <p>E o que ela esta fazendo no meio do meu código JS?</p>

                        <p>Calma, ela é faz parte do objeto que buscamos com a função getElemntById().</p>

                        <p>SCR é a abreviação de source e siginifica que o conteúdo da tag "img" é definido por essa tag, veja o trecho de HTML:</p>

                        <pre><code>&lt;img src="local-da-imagem-no-seu-hd"&gt;</code></pre>

                        <p>E podemos acessar esse e outras propriedades via JS.</p>
                    </div> 

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="match">match()</h1>
                        </div>                     

                        <p>Função nativa do JS utilizada para executar uma Expressão Regular (regexp), não me pergunte o que é isso ok? Brincadeira
                            visite a seção "RegExp" se quiser saber mais sobre expressões regulares.</p>

                        <p>Nós estamos usando o valor da  propriedade "src" para descobrir se ela contém o trecho "bulbon".</p>

                        <p>Veja o pseudocódigo abaixo para entender melhor:</p>

                        <div class="code">
                            <h6>PSEUDOCÓDIGO</h6>
                            <pre>
se no caminho da imagem o seguinte pedaço de estring "bulbon" estiver contido então
    deligue a lâmpada
se não
    ligue a lâmpada
                            </pre>
                        </div>
                    </div>                     

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="conclusao">Conclusão</h1>
                        </div>                      
                        <p>Se você sobreviveu até aqui, parabéns!</p>

                        <p>Vimos algumas coisas bem básicas, o objetivo era lhe proporcionar um primeiro contato com a linguagem de forma prática
                            (bem prática).</p>

                        <p>Outros tutorias passam apenas a especificação da linguagem, com sorte eles mostram um pequeno exemplo.</p>

                        <p>Eu preferi, a partir de um exemplo, ir desenvolvendo e desenrolando as partes do código.</p>

                        <p>Na próxima matéria ainda veremos este código da lâmpada, nós faremos outros experimentos com ele.</p>

                        <p>Aproveitando este código, você não terá muito esforço para entender o seu funcionamento e aproveitará (assim espero)
                            para focar no aprendizado da linguagem, esse é o objetivo.</p>

                        <p>Até lá.</p>  
                    </div>                      

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
        
</body>
</html>
