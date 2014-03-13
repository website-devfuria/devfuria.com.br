<?php
/**
 * Lógica/
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/logica-de-programacao/basico/code-triangulo-tdd/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('TDD passo a passo');
        $core->head->setDescription('Matéria que demonstra a técnica do TDD. Lógica de programação alida ao TDD.');
        $core->head->setkeywords('tdd, refatorar, kent bech, aprendendo tdd, tdd passo a passo');
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
                <h1>Code - Triângulo com TDD</h1>
                <p>Primeiro exemplo de TDD.</p>
                <p>Obviamente atacaremos um problema conhecido.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">30/01/2014</span>, escrito em <span class="label label-info">30/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li><a href="#code">Código "é triangulo"</a></li>
                            <li><a href="#preparando">Preparando os arquivos</a></li>
                            <li><a href="#rodando">Rodando o teste</a></li>
                            <li>
                                <a href="#tdd">Praticando o TDD</a>
                                <ul class="nav">
                                    <li><a href="#tdd-para-falhar">Escrevendo um teste (para falhar)</a></li>
                                    <li><a href="#tdd-falha">Neste ponto o teste falha</a></li>
                                    <li><a href="#tdd-minimo">O mínimo para o teste passar</a></li>
                                    <li><a href="#tdd-imple">Implementando</a></li>
                                    <li><a href="#tdd-flores">Nem tudo é flores</a></li>
                                    <li><a href="#tdd-refatorando">Refatorando</a></li>
                                    <li><a href="#tdd-ficha">A ficha ainda não caiu?</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="code">Código "é triangulo" agora com TDD</h1>
                        </div>

                        <p>Finalmente vamos praticar esse tal de TDD, já era tempo.</p>

                        <p>
                            Se você não leu as materias anteriores não tem problema, mas dependendo do seu entendimento
                            (conhecimento) talvez seja bom você ler apartir da matéria
                            <?php Aux::getAncora("/logica-de-programacao/basico/code-triangulo/", "titulo") ?>
                        </p>

                        <p>Nós vamos pegar o problema dos triângulos e resolvê-lo com TDD.</p>

                        <p>O problema dizia : <em>"Dados 3 valores quaisquer (a, b e c) representando as medidas dos lados
                                de um triângulo, escrever se formam ou não um triângulo. Saiba que para formar um triângulo,
                                o valor de cada lado deve ser menor que a soma dos outros 2 lados."</em></p>

                        <p>Os arquivos desenvolvidos nesta matéria podem ser baixos neste <a href="https://gist.github.com/flaviomicheletti/8693386" title="link-externo">Gist</a></p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="preparando">Preparando os arquivos</h1>
                        </div>

                        <p>Vamos utilizar dois arquivos: a classe e o teste. Eles podem ficar no mesmo diretório
                            para facilitar as coisas.</p>

                        <p>A nome do arquivo que contém a classe deve termo mesmo nome da classe. Se sua
                            classe chama-se <code>Triangulo</code> o arquivo deve chamar-se <code>Triangulo.php</code></p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">class Triangulo {


}
</code></pre>
                        </div>

                        <p>O nome do arquivo que contém o teste deve obedecer o nome da classe que está sendo testada
                            só que precedido da palavrinha <code>Test</code>, fica assim <code>TrianguloTest.php</code></p>

                        <div class="code">
                            <h6>TrianguloTest.php</h6>
                            <pre><code class="language-php">require "Triangulo.php";


class TrianguloTest extends PHPUnit_Framework_TestCase
{

    public function testAlgumMetodo(){

    }

}
</code></pre>
                        </div>

                        <p>Estou supondo que você lêu as matérias anteriores e que instalou o PHPUnit.</p>

                        <p>
                            Se ainda não instalou, tente esta dica na matéria
                            <?php Aux::getAncora("/logica-de-programacao/basico/tdd-test-driven-development/#ferramentas", "titulo") ?>
                        </p>

                        <p>Se listarmos o diretório em que estamos trabalhando veremos algo parecido a isto:</p>

                        <pre><code>Triangulo.php
TrianguloTest.php</code></pre>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="rodando">Rodando o teste</h1>
                        </div>

                        <p>Para executar o teste usamos:</p>

                        <pre><code>phpunit TrianguloTest.php</code></pre>

                        <p>Como o teste só tem o "esqueleto" o nosso sinal é verde, mas daqui a pouco ele vai ficar vermelho.
                            Veja o resultado:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### rodando o teste phpunit só com esqueleto" src="teste-01.png">
                        </div>

                        <div class="code">
                            <h6>TrianguloTest.php</h6>
                            <pre><code class="language-php">
require "Triangulo.php";


class TrianguloTest extends PHPUnit_Framework_TestCase
{

    public function testAlgumMetodo(){

    }

}
</code></pre>
                        </div>

                        <p>Agora estamos prontos para práticar o TDD...</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="tdd">Praticando o TDD</h1>
                        </div>


                        <h3 id="tdd-para-falhar">Escrevendo um teste (para falhar)</h3>

                        <p>Vamos alterar o nome da função de teste de <code>testAlgumMetodo</code> para <code>testChecar</code>.</p>

                        <p>Agora pare um pouco e imagine como queremos que nossa classe se comporte (esse é o grande barato do TDD).</p>

                        <p>Talves seja assim:</p>

                        <p>Instanciamos a classe <code>$triangulo = new Triangulo();</code></p>

                        <p>Atribuímos os dados a 3 propriedades.</p>

                        <pre><code class="language-php">$triangulo->a = 5;
$triangulo->b = 4;
$triangulo->c = 3;
</code></pre>

                        <p>Eu utilizei os valores 5, 4 e 3 por que sei de antemão que seu resultado é verdadeiro.</p>

                        <p>Evocamos o método a ser testado e aplicamos o "assert" <code>$this->assertTrue($triangulo->checar());</code></p>

                        <p>Agora temos um teste, veja como ficou o arquivo.</p>

                        <div class="code">
                            <h6>TrianguloTest.php</h6>
                            <pre><code class="language-php">require "Triangulo.php";


class TrianguloTest extends PHPUnit_Framework_TestCase
{

    public function testChecar(){
        $triangulo = new Triangulo();

        $triangulo->a = 5;
        $triangulo->b = 4;
        $triangulo->c = 3;
        $this->assertTrue($triangulo->checar());
    }

}
</code></pre>
                        </div>

                        <p>Se rodar o teste agora, ele nem "compila-rá" (mode de falar).</p>

                        <p>É preciso que a estrutura da classe atenda ao teste para que ele pelo menos compile.</p>

                        <p>Veja então, como ficará nossa classe.</p>


                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">class Triangulo {

    public $a;
    public $b;
    public $c;

    function checar() {

    }

}
</code></pre>
                        </div>

                        <h3 id="tdd-falha">Neste ponto o teste falha</h3>

                        <p>Rode o teste para vermos ele falhar.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### rodando o teste phpunit só com esqueleto" src="teste-02.png">
                        </div>

                        <p>O resultado nos diz que o teste falhou (red flag). Mas ele não diz só isso, há outras informações
                            muito importantes e que você precisará se acostumar com elas (a hora é agora).</p>

                        <h3 id="tdd-minimo">O mínimo para o teste passar</h3>

                        <p>Agora podemos escrever o codigo da classe <code>Triangulo</code> e ver o teste passar.</p>

                        <p>
                            Só que... é neste ponto que devemos ir mais devagar. E também é o ponto que eu "escorreguei",
                            se você lêu atentamente a matéria
                            <?php Aux::getAncora("/logica-de-programacao/basico/tdd/", "titulo") ?>
                            sabe do que estou falando.
                        </p>

                        <p>Então vamos dar um pequeno passo, vamos fazer nossa função simplesmente retornar <code>true</code>.</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
function checar() {
    return true;
}
...
</code></pre>
                        </div>

                        <p>Rode o teste.</p>

                        <p>Ha! Agora o "danado" passou (green flag). Muito bem.</p>

                        <p>Daqui para a frente eu preciso fazer um alerta. O desenvolvimento é muito pessoal e o que
                            você verá é apenas a solução de um cara (no caso eu). Não quer dizer que <strong>deve</strong> ser assim.</p>

                        <p>
                            E tem mais, lembra que nós já temos 2 soluções? Veja a matéria
                            <?php Aux::getAncora("/logica-de-programacao/basico/code-triangulo/", "titulo") ?>
                            Eu procurei uma terceira solução, quer dizer,eu tentei fazer diferente do que nôs já tínhamos.
                        </p>

                        <p>Dito isso, podemos continuar com a codificação.</p>

                        <h3 id="tdd-imple">Implementando</h3>

                        <p>Agora sabemos que a função deve retornar um <code>true</code> ou <code>false</code></p>

                        <p>Então que tal utilizarmos uma flag(bandeira) para sinalizar o resultado?</p>

                        <p>E que tal colocarmos isso num <code>if</code>?</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
$flag = true;

if($flag){
    return true;
} else {
    return false;
}
...
</code></pre>
                        </div>

                        <p>Vamos codificar a parte... <strong>OPS!</strong> estamos dando pequenos passos certo? Então rode o teste!</p>

                        <p>Passou? Ainda verde? Agora sim continuamos...</p>

                        <p>Sabemos que o lado "a" deve ser a soma dos lados "c" e "b". Então pode inserir esse regra e
                            ver se não quebramos o código.</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
$flag = true;

<em>if($this->a < ($this->b + $this->c)) {
    $flag = true;
}</em>

if($flag){
    return true;
} else {
    return false;
}
...
</code></pre>
                        </div>

                        <p>Quebrou? Não? continuamos</p>

                        <p>Vamos dar um passo um pouquinho maior? (Estou ficando corajoso).</p>

                        <p>Vamos escrever as outras duas regras de uma só vez.</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
$flag = true;

if($this->a < ($this->b + $this->c)) {
    $flag = true;
}

<em>if($this->b < ($this->a + $this->c)) {
    $flag = true;
}

if($this->c < ($this->a + $this->b)) {
    $flag = true;
}</em>

if($flag){
    return true;
} else {
    return false;
}
...
</code></pre>
                        </div>

                        <p>Não preciso nem falar... execute os teste! Passaram? Sim? Que lindo!</p>

                        <p>Os passos pequenos estão te incomodando? Vejo o que Kent Bech tem a dizer.</p>

                        <blockquote>
                            <p>TDD não é sobre darmos passos pequeninos; é sobre sermos capazes de dar passos pequeninos.
                                Eu codificaria no dia a dia com passos desse tamanho? Não. Mas quando as coisas ficam no
                                mínimo um pouco estranhas, eu fico feliz de poder fazer isso.</p>
                            <p><small>Kent Bech</small></p>
                        </blockquote>

                        <h3 id="tdd-flores">Nem tudo é flores</h3>

                        <p>TDD não é infalível, ele não é a prova de balas (nem era para ser)... mas ele vai
                            quebrar um galho e vai salvar nossa pele. E nôs vamos ficar eternamente gratos por isso.</p>

                        <p>Até aqui tudo bem, seu código funciona, pelo menos é o que dizem os testes.</p>

                        <p>Ou eles funcionavam até seu cliente ligar e dizer que ao colocar os valores 9, 4 e 3
                            (não é triângulo e por tanto retornará <code>false</code>) o sistema dizia que era
                            triângulo quando na verdade não era.</p>

                        <p>Putz! E agora, o que fazer? Acharam um bug e o que é pior, antes de você.</p>

                        <p>Vamos correr concertar o código... <strong>NEGATIVO.</strong></p>

                        <p><strong>Ao invés de concertar o código vamos escrever o teste que estava faltando.</strong></p>

                        <div class="code">
                            <h6>TrianguloTest.php</h6>
                            <pre><code class="language-php">require "Triangulo.php";


class TrianguloTest extends PHPUnit_Framework_TestCase
{

    public function testChecar(){
        $triangulo = new Triangulo();

        $triangulo->a = 5;
        $triangulo->b = 4;
        $triangulo->c = 3;
        $this->assertTrue($triangulo->checar());
<em>
        $triangulo->a = 9;
        $triangulo->b = 4;
        $triangulo->c = 3;
        $this->assertFalse($triangulo->checar());</em>
    }

}
</code></pre>
                        </div>

                        <p>Repare que utilizei <code>assertFalse</code> ao inves de<code>asserTrue</code>. Se você
                            olhar a documentação do PHPUnit verá outras opções de "assert".</p>

                        <p>Com nosso teste cobrindo o que precisava cobrir, rode-os!</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### phpunit demonstrando a falha" src="teste-03.png">
                        </div>

                        <p>Primeira coisa: entenda a mensagem e extraia dela tudo o que precisa.</p>

                        <p>Segunda coisa: agora pode corre e concertar o código</p>

                        <p>Se olhar atentamente verá onde está o furo. Achou? Não? tá bom vai eu te ajudo.</p>

                        <p>A função está sempre retornando <code>true</code>, vamos fazer ela retornar <code>false</code>.
                            Se fizermos isso, teremos que mudar a expressão (a comparação). Ao  invés de perguntar se
                            um lado é <strong>menor</strong> que a soma dos outros dois pergutaremos se ele é
                            <strong>maior</strong>.</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
$flag = true;

if($this->a <em>></em> ($this->b + $this->c)) {
    $flag = <em>false</em>;
}

if($this->b <em>></em> ($this->a + $this->c)) {
    $flag = <em>false</em>;
}

if($this->c <em>></em> ($this->a + $this->b)) {
    $flag = <em>false</em>;
}

if($flag){
    return true;
} else {
    return false;
}
...
</code></pre>
                        </div>



                        <p>Rode os testes... e pode avisar seu cliente que tudo está funcionado (de novo).</p>

                        <h3 id="tdd-refatorando">Refatorando</h3>

                        <p>No outro dia com mais calma (sem o cliente te "enchendo o saco") você olha o código e
                            pensa, quem escreveu essa mer... aí lembra que foi você mesmo e então resolve dar um "talento"
                            (melhorar) o código.</p>

                        <p>Antes de mexer no código é claro, você roda os testes para ter certeza de tudo está funcionando.</p>

                        <p>OK, tudo está funcionando. Então vamos "melhorar" o código (e deixar tudo funcionando).</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
$flag = true;

if($this->a > ($this->b + $this->c)) {
    $flag = false;
}

if($this->b > ($this->a + $this->c)) {
    $flag = false;
}

if($this->c > ($this->a + $this->b)) {
    $flag = false;
}

<em>return $flag;</em>
...
</code></pre>
                        </div>

                        <p>Código alterado, você não estava muito inspirado e decide parar por aí mesmo.</p>

                        <p>Pergunta: seu código continua funcionando? Rode os testes para saber.</p>

                        <p>Tudo verde? Agora sim: que coisa linda!</p>

                        <p>No outro dia você volta realmente inspirado e percebe que não precisa mais da variável <code>$flag</code>
                            e então:</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
if ($this->a > ($this->b + $this->c)) {
    return false;
}
if ($this->b > ($this->a + $this->c)) {
    return false;
}
if ($this->c > ($this->a + $this->b)) {
    return false;
}

return true;
...
</code></pre>
                        </div>


                        <h3 id="tdd-ficha">Se sua ficha ainda não caiu ?</h3>

                        <p>Imagina que passado uma semana, alguém lhe traz uma solução maravilhosa, lembra que nós
                            já resolvemos o problema do triângulo em matérias anteriores.</p>

                        <p>Aí por curiosidade você resolve trocar o código de sua função por este aqui.</p>

                        <div class="code">
                            <h6>Triangulo.php</h6>
                            <pre><code class="language-php">...
if ($this->a < ($this->b + $this->c)) {
    if ($this->b < ($this->a + $this->c)) {
        if ($this->c < ($this->a + $this->b)) {
            return true;
        }
    }
}

# senão ...
return false;
...
</code></pre>
                        </div>


                        <p>Mas esse é um passo grande, você trocará uma algoritmo pelo outro. Bom, troque e rode os
                            testes. eles passaram? Sim? Então fechou.</p>

                        <p

                    <p>Meu(inha) amigo(a), com os testes verdinhos dá para encostar a cabeça no travesseiro e durmir
                        tranquilo.</p>

                    <p>Aliás, é o que estou precisando! vou dormir, tchau!</p>

                </div>
                <?php
                $core->paginacao->link_ativo = $url;
                $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_LOG][Core::SUB_SECAO_CURSO]);
                include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                ?>
            </div><!-- Corpo da matéria -->
        </div><!-- row -->

    </div><!-- Matéria -->

    <?php
    $core->lista->setLinks($core->paginas, Core::SECAO_LOG, Core::SUB_SECAO_CURSO);
    $core->lista->link_ativo = $url;
    include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
    ?>
    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>
