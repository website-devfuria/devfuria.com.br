<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Formulário: combobox </title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form1-action.php" method="post">
            <p>
                <select id="cboPais">
                    <option></option>
                    <option>Usa</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                </select>                
            </p>
            <p>
                <input type="button" id="btn" value="Veja o log do Firebug" />
            </p>
        </form>
        <script type="text/javascript" >
            document.getElementById("btn").onclick = function() {
                var comboPais = document.getElementById("cboPais");
                console.log("O indice é: " + comboPais.selectedIndex);
                console.log("O texto é: " + comboPais.options[comboPais.selectedIndex].text);
                console.log("A chave é: " + comboPais.options[comboPais.selectedIndex].value);
            };
        </script>
    </body>
</html>