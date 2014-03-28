<?php
/**
 * PHP - combobox
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/php/basico/combobox-input-form-select/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo ?></h1>
                <p>Veremos como enviar e receber dados através do controle</p>
                <p>comboboxradio button (input-form-select)</p>
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
                            <li><a href="#form-exemplo">Formulário de exemplo</a></li>
                            <li><a href="#recebendo-form">Recebendo o formulário web</a></li>
                            <li><a href="#carregando-form">Carregando o formulário web</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="form-exemplo">Formulário de exemplo</h1>
                        </div>

                        <p>Combobox é o controle HTML <code>select</code>.</p>

                        <p>Também conhecido como <strong>caixa de seleção</strong>, <strong>caixa de opções</strong>.</p>

                        <p>O usuário é obrigado a fazer uma única escolha entre os itens disponíveis.</p>

                        <p>Abaixo vemos o formulário web no qual trabalharemos</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Formulário com combobox" src="input-form-select-02.png">
                        </div>

                        <div class="code">
                            <h6>form.html</h6>
                            <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Formulário: combobox&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;form action="form-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;select name="pais"&gt;
                    &lt;option value=""&gt;&lt;/option&gt;
                    &lt;option value="scs"&gt;São Caetano do Sul&lt;/option&gt;
                    &lt;option value="sa"&gt;Santo André&lt;/option&gt;
                    &lt;option value="sbc"&gt;São Bernardo do Campo&lt;/option&gt;
                &lt;/select&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>

                        <p>Os itens são representados pela tag <code>option</code>, cada item é uma <code>option</code>.</p>

                        <p>Na combo acima temos 4 <code>options</code></p>

                        <ul>
                            <li>string de comprimento zero</li>
                            <li>São Caetano do Sul</li>
                            <li>Santo André</li>
                            <li>São Bernardo do Campo</li>
                        </ul>

                        <p>
                            O valor da propriedade <code>value</code> da <code>option</code> é muito importante pois é
                            ele quem será enviado para o servidor.
                        </p>

                        <p>
                            A propriedade <code>value</code> da <code>option</code> é atrelada a proprieade <code>name</code>
                            da tag <code>select</code>.
                        </p>

                        <p>Se o selecionar o item "Santo Andé" o seguinte para valor será enviado para o servidor.</p>

                        <pre><code>pais=sa</code></pre>

                        <p>
                            Se precisar entender melhor sobre o controle veja a matéria
                            <?php Aux::printAncora("/html-css/basico/formularios-web/#nao-input-combobox", "titulo"); ?>.
                        </p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="recebendo-form">Recebendo o formulário web</h1>
                        </div>

                        <p>
                            O controle <code>select</code> enviará um <strong>array vazio</strong> caso não haja nenhuma
                            tag <code>option</code>.
                        </p>

                        <p>Você já viu alguém fazer uma combo sem nenhuma <code>option</code>?</p>

                        <p>Se isso acontecer, saiba que um array vazio (array empty) é considerado como <code>false</code>.</p>

                        <pre><code class="language-php"># afirmação: array() é igual a false
# prova:
(array() == false) # retorna true</code></pre>

                        <p>
                            Outro cenário é quando temos option's mas o usuário escolhe a primeira opção.</p>

                        <p>Em nosso exemplo, é aquela opção acima de "São Caetano do Sul" a <strong>string de comprimento zero</strong>.</p>

                        <pre><code class="language-html">&lt;select name="pais"&gt;
    <em>&lt;option value=""&gt;&lt;/option&gt;</em>
    &lt;option value="scs"&gt;São Caetano do Sul&lt;/option&gt;
    &lt;option value="sa"&gt;Santo André&lt;/option&gt;
    &lt;option value="sbc"&gt;São Bernardo do Campo&lt;/option&gt;
&lt;/select&gt;
</code></pre>

                        <p>A string <code>""</code> é considerada como <code>false</code></p>



                        <pre><code class="language-php"># afirmação: "" é igual a false
# prova:
("" == false) # retorna true</code></pre>


                        <h3>Organizando o raciocínio</h3>

                        <p>Podemos fazer um único teste para os 2 casos apresentados? Sim podemos.</p>

                        <pre><code class="language-php">/**
 * Caso 1 $foo = array()
 * Caso 2 $foo = ""
 * Para ambos os casos, cairemos sempre no bloco else
 */
if ($foo == true) {
    echo "executando bloco if";
} else {
    echo "executando bloco else";
}</code></pre>


                        <p>Agora ficou fácil, trocamos nossa variável <code>$foo</code> pelo array global <code>$_POST</code>.</p>

                        <pre><code class="language-php">if ($_POST['pais'] == true) {
    echo "executando bloco if";
} else {
    echo "executando bloco else";
}</code></pre>

                        <p>Pequena simplificação...</p>

                        <pre><code class="">if ($_POST['pais']) {
    echo "executando bloco if";
} else {
    echo "executando bloco else";
}</code></pre>
                        <p>
                            Dentro dos blocos <code>if {} else {}</code> introduziremos código para fazer alguma coisa
                            com o valor da combobox. Normalmente persistimos em um banco de dados, mas por hora não
                            veremos esse código. Apenas alterei o texto para dar uma idéia melhor...
                        </p>

                        <pre><code class="">if ($_POST['pais']) {
    echo "armazenar '{$_POST['pais']}'";
} else {
    echo "não armazenar nada!";
}</code></pre>

                        <h3>Quando nem o controle <code>select</code> é enviado</h3>

                        <p>
                            Há ainda um caso no qual o controle <code>select</code> nem chega a ser ser enviado, é o
                            caso dele simplesmente não existir (não há a tag <code>&lt;select&gt;&lt;/select&gt;</code>.
                        </p>

                        <p>
                            Se isto acontecer o se script irá lançar um erro, pois estamos acessando a chave <code>pais</code>
                            do array <code>$_POST</code> sem antes checar se a chave existe.
                        </p>

                        <p>
                            A solução é perguntar se <code>$_POST['pais']</code> está "setada", caso não esteja, atribuiremos <code>null</code>.
                        </p>

                        <pre><code class="">$_POST['pais'] = isset($_POST['pais']) ? $_POST['pais'] : null;</code></pre>

                        <p>Juntando tudo temos o resultado final.</p>

                        <div class="code">
                            <h6>form-action.php</h6>
                            <pre><code class=""># Inicializando a variável $_POST['pais']
$_POST['pais'] = isset($_POST['pais']) ? $_POST['pais'] : null;

# Caso o valor de $_POST seja verdadeiro (diferente de "" ou null)
# executaremso o bloco if
if ($_POST['pais']) {
    echo "armazenar '{$_POST['pais']}'";
} else {
    echo "não armazenar nada!";
}</code></pre>
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="carregando-form">Carregando o formulário web</h1>
                        </div>

                        <p>Carregar o formulário é mais divertido do que recebê-lo, você verá.</p>

                        <p>
                            O que compõe uma combobox são suas tags <code>option</code>, logo precisamos "printar" as options.
                        </p>

                        <p>
                            Se são "n" options, entendemos que teremos que percorrer um laço de repetição e observar cada
                            um dos valores de um array.
                        </p>

                        <p>Sendo mais prático, os valores da combobox ficarão contidos em um array como o exemplo seguinte</p>

                        <pre><code class="language-php">$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);</code></pre>

                        <p>Em outro momento, aprenderemos como carregar esse array apartir do banco de dados.</p>

                        <p>Por enquanto vamos aprender como percorreremos o array.</p>

                        <pre><code class="language-php">foreach ($arrCombo as $key => $value) {
    echo "&lt;option value=\"$key\"&gt;$value&lt;/option&gt;";
}</code></pre>
                        <p>Agora basta juntar os código acima com nosso HTML, veja o resultado:</p>

                        <div class="code">
                            <h6>form.php</h6>
                            <pre><code class="language-php">&lt;?php
$arrCombo = array(
    "scs" =&gt; "São Caetano do Sul",
    "sa" =&gt; "Santo André",
    "sbc" =&gt; "São Bernardo do Campo"
);
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Formulário: combobox&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;form action="form2-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;select name="pais"&gt;
                    &lt;option&gt;&lt;/option&gt;
                    &lt;?php foreach ($arrCombo as $key =&gt; $value): ?&gt;
                        &lt;?php echo "&lt;option value=\"$key\" &gt;$value&lt;/option&gt;"; ?&gt;
                    &lt;?php endforeach; ?&gt;
                &lt;/select&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>

                        <h3>Carregando com um valor pré-determinado (selecionado)</h3>

                        <p>Você vai precisar abrir o formulário com um valor selecionado.</p>

                        <p>
                            Para determinar um valor carregado, usamos a propriedade HTML <code>selected="selected"</code>
                            na tag <code>option</code>  para indicar qual a é a opção selecionada.
                        </p>

                        <p>
                            Então, se dissermos que o valor deve ser <code>"sbc"</code> precisaremos, ao percorre o laço,
                            checar se a chave (<code>$key</code>) é igual ao valor selecionado.
                        </p>

                        <pre><code class="language-php">$arrCombo = array(
    "scs" =&gt; "São Caetano do Sul",
    "sa"  =&gt; "Santo André",
    "sbc" =&gt; "São Bernardo do Campo"
);
<em>$valor_selecionado = "sbc";</em>
foreach ($arrCombo as $key =&gt; $value) {
    <em>$selected = ($valor_selecionado == $key) ? "selected=\"selected\"" : null;</em>
    echo "&lt;option value=\"$key\" <em>$selected</em> &gt;$value&lt;/option&gt;";
}</code></pre>

                        <p>Juntando tudo no formulário HTML temos...</p>

                        <div class="code">
                            <h6>form.php</h6>
                            <pre><code class="language-php">&lt;?php
$arrCombo = array(
    "scs" =&gt; "São Caetano do Sul",
    "sa" =&gt; "Santo André",
    "sbc" =&gt; "São Bernardo do Campo"
);
$valor_selecionado = "sbc";
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Formulário: combobox&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;form action="form2-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;select name="pais"&gt;
                    &lt;option&gt;&lt;/option&gt;
                    &lt;?php foreach ($arrCombo as $key =&gt; $value): ?&gt;
                        &lt;?php $selected = ($valor_selecionado == $key) ? "selected=\"selected\"" : null; ?&gt;
                        &lt;?php echo "&lt;option value=\"$key\"  $selected&gt;$value&lt;/option&gt;"; ?&gt;
                    &lt;?php endforeach; ?&gt;
                &lt;/select&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>

                        <h3>Promovendo a reusabilidade utilizando-se de uma função</h3>

                        <p>
                            Imagine que você tem milhões de combobox em seu sistema e agora precisa fazer um pequena
                            alteração (uma alteração qualquer). Você terá que correr atrás das milhões de combo e mudar
                            uma a uma. Falei em milhões, mas mesmo que fossem apenas 2 já seria torturante.
                        </p>

                        <p>
                            A solução é correr na frente e não atrás (momento filosófico), então que tal utilizar uma
                            função para "printar" a combo?
                        </p>

                        <p>
                            Que tal uma função que aceite 2 parâmetros. O primeiro será nosso array de dados (<code>$arrDados</code>)
                            e o segundo será o valor selecionado (<code>$valorSelecionado</code>).
                        </p>

                        <pre><code class="language-php">function combobox($arrDados, $valorSelecionado = null) {
    echo "&lt;option&gt;&lt;/option&gt;";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
        echo "&lt;option value=\"$key\"  $selected&gt;$value&lt;/option&gt;";
    }
}
</code></pre>
                        <p>Nosso código ficaria assim...</p>

                        <div class="code">
                            <h6>form.php</h6>
                            <pre><code class="language-php">&lt;?php

# Função que ajuda a desenhar o controle HTML select
function combobox($arrDados, $valorSelecionado = null) {
    echo "&lt;option&gt;&lt;/option&gt;";
    foreach ($arrDados as $key =&gt; $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
        echo "&lt;option value=\"$key\"  $selected&gt;$value&lt;/option&gt;";
    }
}

# Array com os dados de nossa combo
$arrCombo = array(
    "scs" =&gt; "São Caetano do Sul",
    "sa" =&gt; "Santo André",
    "sbc" =&gt; "São Bernardo do Campo"
);

$valor_selecionado = "sbc";

?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Formulário: combobox&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;form action="form2-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;select name="pais"&gt;
                    &lt;?php combobox($arrCombo, $valor_selecionado); ?&gt;
                &lt;/select&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html>
</code></pre>


                    </div>

                    <?php include BASE_PATH . VIEWS_PATH . "/cursos/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>