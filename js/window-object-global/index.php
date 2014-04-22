<?php
/**
 * Explorando o objeto window em Javascript | window object
 *
 *
 */
require "../../core/boot.php";
$pagina = $model->getPagina("/js/window-object-global/");
$view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . Conteudo::SUB_SECAO_RTG;
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body class="receitas-body">
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="receitas-header" id="content">
                    <div class="container">
                        <h1>Entendendo o objeto <code>global</code> e o <code>window</code></h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">
                    <div class="bs-docs-section">

                        <p>
                            O objeto <code>window</code> é o principal objeto de Javascript, é nele onde as coisas
                            começam... principalmente a "<strong>poluição do espaço global</strong>"
                        </p>

                        <p>
                            Mas para entender esse negócio de espaço global precisamos entender tanto o
                            <strong>objeto global</strong> como o <strong>objeto window</strong>.
                        </p>

                        <p>
                            Este artigo é 90% baseado no livro <strong>"JavaScript: O guia definitivo" de David Flanegan</strong>.
                            Os 10% de minha contribuição são (além dessas palavras introdutórias) o trabalho de compilar
                            o assunto (que está todo fragmentado no livro, obviamente, pois trata-se de um guia) e o
                            exemplo final de como poluir o espaço global.
                        </p>

                        <p>Obrigado David Flanagan!!!</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O objeto global</h2>
                        </div>

                        <blockquote>
                            <p>
                                O <strong>objeto global</strong> é um objeto normal de Javascript que tem um objetivo
                                muito importante: as propriedades desse objeto são os símbolos definidos globalmente que
                                estão disponíveis para um programa Javascript. Quando o interpretador Javascript começa
                                (ou quando um navegador Web carrega uma nova página), ele cria um novo objeto global e
                                dá a ele um conjunto inicial de propriedades que define:

                            <ul>
                                <li>propriedades globais, como <code>undefined</code>, <code>Infinity</code>, <code>NaN</code> e  etc..</li>
                                <li>funções globais, como <code>isNaN()</code>, <code>parseInt()</code> e etc...</li>
                                <li>funções construtoras, como <code>Date()</code>, <code>RegExp()</code>, <code>String()</code>, <code>Object()</code>, <code>Array()</code> e etc...</li>
                                <li>objetos globais, como <code>Math</code>, <code>JSON</code> e etc..</li>
                            </ul>

                            </p>
                            <p>
                                O objeto global é um objeto predefinido que serve como espaço reservado para as propriedades
                                e funções globais de Javascript. Todos os outros objetos, funções e propriedades são acessíveis
                                por intermédio do objeto global. <strong>O objeto global não é uma propriedade de nenhum outro objeto;
                                    portanto, não tem nome. O título desta referência foi escolhido simplesmente por conveniência
                                    organizacional e não indica que o objeto se chama "Global"</strong>. Em código Javascript de nível
                                superior, você pode se referir ao objeto global com a palavra-chave <code>this</code>.
                            </p>
                            <p>
                                O objeto global é simplesmente um objeto e não uma classe. Não existe uma construtora Global()
                                e não há como instanciar um novo objeto global.
                            </p>
                            <p>
                                Quando o Javascript é incorporada em um ambiente específico, o objeto global normalmente
                                recebe propriedades adicionais especiais desse ambiente. Na verdade, o tipo do objeto global
                                não é especificado pelo padrão ECMAScript e...
                            </p>
                            <p>
                                Em Javascript do lado do cliente, o objeto global é um objeto <code>window</code> e representa
                                a janela do navegador Web dentro da qual o código Javascript está sendo executado.
                            </p>

                            <p><small>David Flanagan em seu livro "JavaScript: O guia definitivo"</small></p>

                        </blockquote>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O objeto window</h2>
                        </div>

                        <blockquote>
                            <p>
                                O <strong>objeto Window</strong> é o principal ponto de entrada para todos os recursos e APIs de Javascript
                                do lado do cliente. Ele representa uma janela ou quadro de navegador Web e pode ser referenciado
                                através do identificador <code>window</code>. Em Javascript do lado do cliente, o objeto
                                Window também é o objeto Global. Isso significa que o objeto Window está no topo do encadeamento
                                de escopo e que suas propriedades e métodos são efetivamente variáveis globais e funções globais.
                            </p>

                            <p>O objeto Window representa uma janela, guia ou quadro do navegador.</p>

                            <p><small>David Flanagan em seu livro "JavaScript: O guia definitivo"</small></p>

                        </blockquote>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Objeto window" id="myimage" src="window-propr.jpg">
                            <p>O objeto window está no topo do encadeamento!</p>
                            <p><a href="http://www.cs.ucc.ie/~gavin/javascript/05_JS4.html" title="link-externo">Fonte da imagem</a></p>
                        </div>

                        <p>
                            O objeto window referencia propriedades impportantes, tal como <code>document</code> que
                            representa o conteúdo (documento) exibido na tela. Referencia a propriedade <code>location</code>
                            que se refere ao objeto <strong>Location</strong> especificando o URL atualmente exibido
                            na janela e permite que um script carregue um novo URL na janela (redirecionamentos).
                            <small>(Flanagan)</small>
                        </p>

                        <p>O objeto window também referencia outro objeto muito utilizado que é o <code>screen</code>, com
                            ele podemos acessar propriedades com informações sobre a tela:</p>

                        <ul>
                            <li><code>screen.top</code></li>
                            <li><code>screen.left</code></li>
                            <li><code>screen.height</code></li>
                            <li><code>screen.width</code></li>
                        </ul>

                        <p>
                            O objeto window possue o <strong>handler onload</strong>, um dos mais importantes mecanismo
                            de tratamento de evento. Ele é disparado quando o conteúdo do documento exibido na janela
                            está estável e pronto para ser manipulado.
                            <small>(Flanagan)</small>
                        </p>

                        <pre><code class="language-javascript">window.onload = function() {
    //código executado após carregamento da página
}</code></pre>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O Objeto WindowProxy</h2>
                        </div>

                        <blockquote>
                            <p>
                                Mencionamos repetidamente que o objeto Window é o objeto global de Javascript do lado do
                                cliente. Tecnicamente, contudo, isso não é verdade...
                            </p>

                            <p>
                                O objeto que estivemos chamando de Window não é realmente o objeto global, mas um substituto
                                dele. Quando você consulta ou configura uma propriedade do objeto Window, esse objeto consulta
                                ou configura a mesma propriedade no objeto global <em>corrente</em> da janela ou quadro. A
                                <strong>especificação HTML5</strong> chama esse substituto de objeto <code>WindowProxy</code>.
                            </p>

                            <p>
                                Se você pudesse comparar os dois objetos, seria difícil distingui-los. Na verdade, não há
                                maneira de se referir ao objeto global do lado do cliente real. O objeto global está no topo
                                do encadeamento de escopo, mas as propriedades <code>window</code>, <code>self</code>,
                                <code>top</code>, <code>parent</code> e <code>frames</code> retornam todas objetos proxy.
                            </p>

                            <p>
                                O método <code>window.open()</code> retorna um objeto proxy. Até o valor da palavra-chave
                                <code>this</code> dentro de uma função de nível superior é um objeto proxy, em vez de um
                                objeto global real.
                            </p>

                            <p>
                                Este último ponto é uma pequena violação das especificações ES3 e ES5, mas é necessária para
                                suportar os vários contextos de execução de Javascript do lado do cliente.
                            </p>

                            <p><small>David Flanagan em seu livro "JavaScript: O guia definitivo"</small></p>

                        </blockquote>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Poluindo o espaço global (no caso o window)</h2>
                        </div>

                        <p>
                            Há diversas formas de poluir o espaço global: utilzar variáveis sem a palavra <code>var</code>,
                            criar funções sem utilizar-se de um "objeto container" e etc..
                        </p>

                        <p>Para entender melhor o que é poluir o espaço global, olhe para o código abaixo:</p>

                        <pre><code class="language-javascript">// Criamos uma variável gobal
suasVariaveis = 123;

//Agora ela faz parte do objeto window e está poluindo o escopo global(window)
console.log(window.suasVariaveis); // 123
</code></pre>

                        <p>
                            Por isso que vários autores de Javascript pregam a utilização de um "objeto container",
                            exemplo:
                        </p>

                        <pre><code class="language-javascript">// Criando o objeto
objContainer = {}

// Ele também polui o espaço global...
console.log(window.objContainer); // Object { }

// ...mas sua variáveis (propriedades) não poluem, pois estão contidas dentro do objeto
objContainer.outraVariavel = 456;

// Prova:
console.log(window.outraVariavel); // undefined
console.log(window.objContainer.outraVariavel); // 456
</code></pre>




                    </div><!-- Corpo da matéria -->
                </div><!-- row -->
            </div><!-- Matéria -->
            <?php include BASE_PATH . VIEWS_PATH . "/rtg/footer.php"; ?>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>