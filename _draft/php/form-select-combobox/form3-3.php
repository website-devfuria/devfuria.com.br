<?php
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa" => "Santo André",
    "sbc" => "São Bernardo do Campo"
);
$valor_selecionado = "sbc";

function combobox($arrDados, $valorSelecionado) {
    echo "<option></option>";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
        echo "<option value=\"$key\"  $selected>$value</option>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form2-action.php" method="post">
            <p>
                <select name="pais">
                    <?php combobox($arrCombo, $valor_selecionado); ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>