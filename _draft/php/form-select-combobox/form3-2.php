<?php
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa" => "Santo André",
    "sbc" => "São Bernardo do Campo"
);
$valor_selecionado = "sbc";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Formulário: combobox </title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form2-action.php" method="post">
            <p>
                <select name="pais">
                    <option></option>
                    <?php foreach ($arrCombo as $key => $value): ?>
                        <?php $selected = ($valor_selecionado == $key) ? "selected=\"selected\"" : null; ?>
                        <?php echo "<option value=\"$key\"  $selected>$value</option>"; ?>
                    <?php endforeach; ?>                     
                </select>                
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>