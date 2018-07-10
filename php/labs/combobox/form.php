<?php

#
# Função que ajuda a desenhar o controle HTML select
#
function combobox($arrDados, $valorSelecionado = null) {
    echo "<option></option>";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
        echo "<option value=\"$key\" $selected >$value</option>";
    }
}

#
# Array com os dados de nossa combo
#
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);

#
# Deveríamos carregar esta informação a partir de uma fonte de dados
#
$valor_selecionado = "sbc";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require "../inc-head.php" ?>
    </head>
    <body>
        <?php require "../inc-jumbo.php" ?>

        <div class="container">
            <form action="form-action.php" method="post">
                <div class="form-group">
                    <select name="cidades" class="custom-select">
                        <?php combobox($arrCombo, $valor_selecionado); ?>
                    </select>
                    <input type="submit" value="Submit me!" class="btn btn-default"/>
                </div>
            </form>
            
            <hr class="my-4">
            
<div class="language-php highlighter-rouge"><pre class="highlight"><code><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"pt-br"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;head&gt;</span>
        <span class="nt">&lt;title&gt;</span>Formulário: combobox<span class="nt">&lt;/title&gt;</span>
        <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/head&gt;</span>
    <span class="nt">&lt;body&gt;</span>

        <span class="nt">&lt;form</span> <span class="na">action=</span><span class="s">"form-action.php"</span> <span class="na">method=</span><span class="s">"post"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;select</span> <span class="na">name=</span><span class="s">"cidades"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">""</span><span class="nt">&gt;&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"scs"</span><span class="nt">&gt;</span>São Caetano do Sul<span class="nt">&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"sa"</span><span class="nt">&gt;</span>Santo André<span class="nt">&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"sbc"</span><span class="nt">&gt;</span>São Bernardo do Campo<span class="nt">&lt;/option&gt;</span>
                <span class="nt">&lt;/select&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit me!"</span> <span class="nt">/&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/form&gt;</span>

    <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</code></pre>
</div>          
            
        </div>
        
        

    </body>
</html>