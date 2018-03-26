<?php

#
# Array com os dados de nossa combo
#
$arrCombo = array (
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);

#
# Array com os os valores que devem ser selecionados
#
$valores_selecionados = array (
   "scs",
   "sbc"
);

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
                    <select multiple name="cidades[]">
                        <?php foreach ($arrCombo as $key => $value): ?>
                            <?php $selected = (in_array($key, $valores_selecionados)) ?
                                              "selected=\"selected\"" :
                                               null; ?>
                            <?php echo "<option value=\"$key\"  $selected>$value</option>"; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit me!" class="btn btn-default"/>
                </div>
            </form>
            
<div class="language-html highlighter-rouge"><pre class="highlight"><code><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"pt-br"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;head&gt;</span>
        <span class="nt">&lt;title&gt;</span>Formulário: combobox<span class="nt">&lt;/title&gt;</span>
        <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/head&gt;</span>
    <span class="nt">&lt;body&gt;</span>

        <span class="nt">&lt;form</span> <span class="na">action=</span><span class="s">"form-action.php"</span> <span class="na">method=</span><span class="s">"post"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;select</span> <span class="na">multiple</span> <span class="na">name=</span><span class="s">"cidades[]"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"scs"</span><span class="nt">&gt;</span>São Caetano do Sul<span class="nt">&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"sa"</span><span class="nt">&gt;</span>Santo André<span class="nt">&lt;/option&gt;</span>
                    <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"sbc"</span><span class="nt">&gt;</span>São Bernardo do Campo<span class="nt">&lt;/option&gt;</span>
                <span class="nt">&lt;/select&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
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