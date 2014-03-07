<?php
/**
 * Lógica
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/logica-de-programacao/basico/oop-programacao-orientada-a-objetos/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Matéria introdutória sobre OOP e Lógica de Programação');
        $core->head->setDescription('Matéria que introduz o conceito e prática de OOP para que possamos utilizar a lógica aliada a orientação a objetos. ');
        $core->head->setkeywords('oop, programação orientada a objetos, orientação a objetos, lógica de programação orientada a objetos, oop php, oop js');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Vamos de OOP?</h1>
                <p>Introdução a programação orientada a objetos</p>
                <p>Não é uma introdução completa, nosso objetivo é </p>
                <p>lógica de programação aliada a orientação a objetos.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">16/01/2014</span>, escrito em <span class="label label-info">16/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#intro">Introdução</a></li>
                            <li><a href="#php">Implementação PHP</a></li>
                            <li><a href="#js">Implementação Javascript</a></li>
                            <li><a href="#conclusao">Concluindo</a></li>
                        </ul>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Introdução</h1>
                        </div>

                        <p>O OOP (Object Oriented Programming) ou Programação Orientada a Objeto remonta a época da
                            linguagem Smalltalk.</p>

                        <p>O objetivo era (e ainda é) auxiliar a codificação da seguinte forma:</p>

                        <ul>
                            <li>Com objetos, o código fonte tende a ficar mais legível para humanos.</li>
                            <li>
                                A reusabilidade é bem e facilmente explorada através dos seguintes conceitos:
                                <ul>
                                    <li>Abstração</li>
                                    <li>Polimorfismo</li>
                                    <li>Herança</li>
                                    <li>Encapsulamneto</li>
                                </ul>
                                ... entre outros.
                            </li>
                        </ul>

                        <p>Quando você for programar orientado a objeto deve ter em mente essas duas coisas:
                            <strong>legibilidade</strong> de código e <strong>reusabilidade</strong></p>

                        <p>Quando esses dois itens são alcançados, podemos ariscar dizer que nossa programação
                            está no caminho certo da OOP.</p>

                        <h3>Os conceitos</h3>

                        <p>Seguindo a didática do site, não aprofundarei os conceitos de OOP (não por enquanto).</p>

                        <p>Veremos na prática como a coisa funciona e, somente após ter experimentado, entraremos
                            com os conceitos e suas definições.</p>

                        <p>Os poucos conceitos que apareceram são: classe, instancia, objetos, métodos (funções) e propriedades (variáveis).</p>

                        <h3>Implementações</h3>

                        <p>Veremos como PHP e Javascript implementam o OOP. Saiba que cada linguagem pode implementar
                            o paradigma de forma variada.</p>

                        <p>O PHP implementou (descentemente) OOP a partir da versão 5 e Javascript antes de ser uma
                            linguagem orientada a objetos é uma linguagem orientada a protótipos (isso muda tudo).</p>

                        <p>Posso adiantar que o que você aprenderá sobre OOP em PHP não se aplica a JS e vice e versa.</p>

                        <p>Aconselho ainda que o leitor procure por um terceira linguagem, de preferência fortemente
                            tipada (pois PHP é fracamnte tipada). Essa questão da tipagem também muda tudo. Java e C#
                            são duas boas opções.</p>

                        <p>Dito isso, podemos concluir que <strong>aprender OOP em uma única linguagem não é aprender
                                OOP de fato</strong>.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="php">Implementação PHP</h1>
                        </div>

                        <p>O código abaixo é denominado "código cliente", pois é ele quem faz uso da classe <code>Triangulo</code>.</p>

                        <p>O <code>require</code> é para incluir um arquivo, no caso o arquivos que contém a classe.</p>
                        <div class="code">
                            <h6>script-cliente.php</h6>
                            <pre><code>require "Triangulo.php";

$triangulo = new Triangulo();               # instanciamos
$triangulo->a = 3;                          # atribuímos valor
$triangulo->b = 4;                          # idem
$triangulo->c = 5;                          # idem
var_dump(  $triangulo->validarForma()  );   # executamos um método

</code></pre>
                        </div>

                        <p>A linha abaixo tira uma cópia (instancia) da classe <code>Triangulo</code> e armazena na variável <code>$triangulo</code>.</p>

                        <pre><code  class="language-php">$triangulo = new Triangulo();</code></pre>

                        <p>Agora a variável <code>$triangulo</code> é um objeto.</p>

                        <p>Podemos invocar os atributos e métodos através da "seta" <code>-></code> conforme esquema a seguir:</p>

                        <pre><code  class="language-php"># armazenando um valor
$objeto->propriedade = 123;

# buscando o valor
echo $objeto->propriedade;

# executando um método (uma função)
$objeto->metodo();</code></pre>


                        <h3>Criando a classe servidora</h3>

                        <p>O código abaixo é o esqueleto de uma classe qualquer</p>

                        <pre><code  class="language-php">class Triangulo {
    # sua propriedades

    # seus métodos
}</code></pre>

                        <p>As propriedades ficam no topo da classe e são precedidas por sua visibilidade:

                        <ul>
                            <li>public</li>
                            <li>protected</li>
                            <li>private</li>
                        </ul>
                        </p>

                        <pre><code  class="language-php">class Triangulo {

    # sua propriedades
    public $a;
    public $b;
    public $c;

    # seus métodos
}</code></pre>
                        <p>Na seção de PHP veremos em detalhes a implementação, ok!</p>

                        <p>Os métodos são o equivalente as funções e, como as prorpiedades, também possuem visibilidade, veja:</p>

                        <pre><code  class="language-php">class Triangulo {

    # sua propriedades
    public $a;
    public $b;
    public $c;

    # seus métodos
    <em>public</em> function validarForma() {


    }
}</code></pre>

                        <p>Dentro dos métodos, as variáveis, ou melhor, as propriedades são referenciadas pela palavra chave
                            <code>$this</code>:</p>

                        <pre><code  class="language-php">class Triangulo {

    # sua propriedades
    public $a;
    public $b;
    public $c;

    # seus métodos
    public function validarForma() {
        echo $this->a;
        echo $this->b;
        echo $this->c;
    }
}</code></pre>

                        <p>Quem leu a matéria <a href='<?php echo LINKS_PATH; ?>/logica-de-programacao/basico/code-triangulo/'>Code - Triângulo </a>
                            já conhece o código da função <code>validarForma()</code>. Abaixo segue o código completo, nossa classe com 3 propriedades e 1 método:</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code>
class Triangulo {

    public $a;
    public $b;
    public $c;

    /**
     * Função que valida se a forma é realmente um triângulo
     * fundamentado na afirmação de que "cada lado deve ser menor
     * que a soma dos outros 2 lados".
     */
    public function validarForma() {
        if ($this->a < ($this->b + $this->c)) {
            if ($this->b < ($this->a + $this->c)) {
                if ($this->c < ($this->a + $this->b)) {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
}

</code></pre>
                        </div>

                        <p>Olhando para a classe podemos afirmar que <strong>classe é um conjunto de métodos e
                                propriedades</strong>. Isso é a única coisa em comum na implementaçã do Javascript.</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="js">Implementação Javascript</h1>
                        </div>

                        <p>Esqueça tudo o que você viu sobre OOP no PHP, em Javascript "o inimigo agora é outro".</p>

                        <p>JS não possue classes, isso significa que não instanciaremos classes, afinal de contas aqui
                            elas não existem.</p>

                        <p>Minha sugestão é que você esqueça um pouco essas questões, lembre-se que estamos na seção
                            "Lógica de Programação" e o nosso objetivo é criarmos alguns objetos para poder-mos testar
                            seus métodos (funções).</p>

                        <p>O código cliente é mostrado logo abaixo. <strong>Repare que não há uma única linha instanciando
                                classe alguma</strong>.</p>

                        <div class="code">
                            <h6>script-cliente.js</h6>
                            <pre><code>triangulo.a = 3;
triangulo.b = 4;
triangulo.c = 5;
console.log(  triangulo.validarForma()  );
</code></pre>
                        </div>

                        <p>Em JS invocamos os atributos e métodos através do "ponto" <code>.</code> conforme esquema a seguir:</p>

                        <pre><code  class="language-php"># armazenando um valor
objeto.propriedade = 123;

# buscando o valor
document.write( objeto.propriedade );

# executando um método (uma função)
objeto.metodo();</code></pre>


                        <h3>Criando o objeto</h3>

                        <p>Abaixo temos o esqueleto de um objeto em JS (repare que trocamos o termo <strong>classe</strong>
                            por </strong>objeto</strong>).</p>

                        <pre><code  class="language-javascript">var objeto = {}</code></pre>

                        <p>As propriedades e métodos são separados pela vírgula:</p>

                        <pre><code  class="language-javascript">var objeto = {
    a: 0,
    b: 0,
    c: 0,
    metodo: function() {

    }
}</code></pre>

                        <p>Assim como o PHP, dentro dos métodos, as variáveis, ou melhor, as propriedades são
                            referenciadas pela palavra chave <code>this</code>:</p>

                        <pre><code  class="language-javascript">var objeto = {
    a: 0,
    b: 0,
    c: 0,
    metodo: function() {
        console.log( this.a );
        console.log( this.b );
        console.log( this.c );
    }
}</code></pre>

                        <p>O método <code>validarForma()</code> é semelhante ao codificado em PHP na matéria
                            <a href='<?php echo LINKS_PATH; ?>/logica-de-programacao/basico/code-triangulo/'>Code - Triângulo </a>.
                            O script abaixo não é uma classe, é um objeto já pronto (instanciado) para uso...</p>


                        <div class="code">
                            <h6>Triangulo.js</h6>
                            <pre><code>var Triangulo = {
    a: 0,
    b: 0,
    c: 0,
    validarForma: function() {
        if (this.a < (this.b + this.c)) {
            if (this.b < (this.a + this.c)) {
                if (this.c < (this.a + this.b)) {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
};
</code></pre>
                        </div>


                        <p>Não esqueça que para os scripts acima funcionarem você precisará de um HTML unindo-os.</p>

                        <p>Veja um exemplo abaixo.</p>

                        <div class="code">
                            <h6>require-js.html</h6>
                            <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;HTML de exemplo: Javascript e OOP&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;script type="text/javascript" src="Triangulo.js"&gt;&lt;/script&gt;
        &lt;script type="text/javascript" src="script-cliente.js"&gt;&lt;/script&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="conclusao">Concluindo</h1>
                        </div>

                        <p>Agora estamos habilitados a resolver nossos probelmas de lógica com o paradigma de OOP. </p>

                        <p>Consequentemente, utilizando o OOP estaremos habilitados a praticar TDD, assunto da próxima matéria.

                        <p><strong>Nossos exercícios de lógica nunca mais serão os mesmos (rsss)!</strong></p>

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
                                    <a href="http://www.php.net/manual/pt_BR/language.oop5.basic.php" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do PHP (em português)</h4>
                                        <p class="list-group-item-text">Introduzindo a Orientação a Objetos.</p>
                                        <span class="label label-default">http://www.php.net/manual/pt_BR/language.oop5.basic.php</span>
                                    </a>
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Introduction_to_Object-Oriented_JavaScript" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do JS (MDN)</h4>
                                        <p class="list-group-item-text">Introduzindo a Orientação a Objetos.</p>
                                        <span class="label label-default">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Introduction_to_Object-Oriented_JavaScript</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_LOG]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

            <?php
            $core->lista->setLinks($core->links, Core::SECAO_LOG);
            $core->lista->link_ativo = $url;
            include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
            ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
