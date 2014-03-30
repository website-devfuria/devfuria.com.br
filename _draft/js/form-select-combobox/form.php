<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="#" method="post">
            <p>
                <select id="cboCidades">
                    <option value=""></option>
                    <option value="scs">São Caetano do Sul</option>
                    <option value="sa">Santo André</option>
                    <option value="sbc">São Bernardo do Campo</option>                    
                </select>
            </p>
            <p>
                <input type="button" id="btnCarregar" value="Carregar combobox" />
                <input type="button" id="btnInfo" value="Ver informações no firebug" />
                <input type="button" id="btnAleatoriamente" value="Selecionar aleatoriamente" />
                <input type="button" id="btnRemoverItem" value="Remover primeiro item" />
                <input type="button" id="btnRemoverTodos" value="Remover todos os itens" />
            </p>
        </form>
        <script type="text/javascript"  src="combobox.js"></script>
    </body>
</html>