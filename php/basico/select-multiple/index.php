<?php
/**
 * PHP - combobox
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/php/basico/select-multiple/");
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
                <p>select multiple</p>
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

                        <p>
                            Ao adicionar-mos a propriedade <code>multiple</code> ao controle <code>select</code> obtemos
                            uma caixa de <strong>seleção de multipla escolha</strong>.
                        </p>

                        <p>Nesta caixa podemos selecionar 0 (zero), uma ou mais opções.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Formulário com select multiple" src="input-form-select-01.png">
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
                &lt;select multiple name="cidades[]"&gt;
                    &lt;option value="scs"&gt;São Caetano do Sul&lt;/option&gt;
                    &lt;option value="sa"&gt;Santo André&lt;/option&gt;
                    &lt;option value="sbc"&gt;São Bernardo do Campo&lt;/option&gt;
                &lt;/select&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>
                        <p>
                            Por se tratar de um controle do tipo <strong>combobox</strong> podemos dizer que o que é
                            válido para o controle...
                        </p>

                        <pre><code class="language-html">&lt;select&gt;</code></pre>

                        <p>também é valido para o controle...</p>

                        <pre><code class="language-html">&lt;select multiple&gt;</code></pre>

                        <p>
                            Em outras palvaras, quero dizer que se você não conhece nada sobre o controle então é
                            melhor ler a matéria anterior <?php Aux::printAncora("/php/basico/combobox-input-form-select/", "titulo"); ?>
                            que explica como manipular o controle <code>select</code>.
                        </p>

                        <p>
                            O único detalhe que merece atenção é a propriedade <code>name</code>. Ela foi
                            acrescida dos sinais <code>[]</code>.
                        </p>

                        <p>
                            Sem os colchetes, o servidor não entenderia que estamos enviando multiplos valores. Ele
                            interpretará como um par valor <code>cidade="apenas-uma-cidade"</code>.
                        </p>

                        <p>Com os colchetes, o servidor entenderá os dados como um array, ex: <code>array("sa", "sbc")</code>.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="recebendo-form">Recebendo o formulário web</h1>
                        </div>

                        <p>O controle enviará todas as opções que o usário escolher no array <code>$_POST['cidades']</code> </p>

                        <p>Sendo um array, podemos então percorrê-lo com um <code>foreach</code>.</p>

                        <pre><code class='language-php'>foreach ($_POST['cidades'] as $cadaCidade) {
    echo "armazenar '$cadaCidade' &lt;/br&gt;";
}</code></pre>


                        <div class="code">
                            <h6>form-action.php</h6>
                            <pre><code class=""># Inicializando a variável $_POST['cidades']
$_POST['cidades'] = isset($_POST['cidades']) ? $_POST['cidades'] : null;

# Se tivermos a variável...
if ($_POST['cidades']) {

    foreach ($_POST['cidades'] as $cadaCidade) {
        echo "armazenar '$cadaCidade' &lt;/br&gt;";
    }

} else {

    echo "usuário não escolheu nada ('null')";

}</code></pre>
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="carregando-form">Carregando o formulário web</h1>
                        </div>

                        <p>Para carregar o formulário basta percorrer o array e "printar" as "options".</p>

                        <pre><code class='language-php'>&lt;?php foreach ($arrCombo as $key =&gt; $value): ?&gt;
    &lt;?php echo "&lt;option value=\"$key\"  $selected&gt;$value&lt;/option&gt;"; ?&gt;
&lt;?php endforeach; ?&gt;</code></pre>

                        <p>Mas queremos marcar as "options" segundo os valores selecionados.</p>

                        <p>
                            Os valores selecionados seriam um array como o abaixo, lembrando que ele seria dinâmico e não
                            estático como em nosso exemplo.
                        </p>

                        <pre><code class='language-php'>$valores_selecionados = array(
   "scs",
   "sbc"
);</code></pre>

                        <p>
                            O "pulo do gato" é, dentro do laço, perguntar se a chave (<code>$key</code>) está contida no
                            array <code>$valores_selecionados</code>.
                        </p>

                        <p>Fazemos isso com a função <code>in_array()</code>.</p>

                        <p>
                            O código abaixo retornará <code>true</code> caso encontre a <code>$key</code> dentro do arraye
                            <code>$valores_selecionados</code>.
                        </p>

                        <pre><code class='language-php'>(in_array($key, $valores_selecionados)) ? "selected=\"selected\"" : null; </code></pre>

                        <h3>Resultado</h3>

                        <div class="code">
                            <h6>form.php</h6>
                            <pre><code class="language-php">&lt;?php

# Array com os dados de nossa combo
$arrCombo = array(
    "scs" =&gt; "São Caetano do Sul",
    "sa" =&gt; "Santo André",
    "sbc" =&gt; "São Bernardo do Campo"
);

# Array com os os valores que devem ser selecionados
$valores_selecionados = array(
   "scs",
   "sbc"
);

?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Formulário: combobox&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;form action="form-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;select multiple name="cidades[]"&gt;
                    &lt;?php foreach ($arrCombo as $key =&gt; $value): ?&gt;
                        &lt;?php $selected = (in_array($key, $valores_selecionados)) ? "selected=\"selected\"" : null; ?&gt;
                        &lt;?php echo "&lt;option value=\"$key\"  $selected&gt;$value&lt;/option&gt;"; ?&gt;
                    &lt;?php endforeach; ?&gt;
                &lt;/select&gt;
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="submit" value="Submit me!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                        </div>
                    </div>

                    <?php include BASE_PATH . VIEWS_PATH . "/cursos/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>