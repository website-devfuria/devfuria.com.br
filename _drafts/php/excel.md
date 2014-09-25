---
title: 
---


    <?php
    $nome_arquivo = $_POST['nome_arquivo'] = "foo.xlsx";

    //header("Content-type: application/vnd.ms-excel");
    //header("Content-type: application/force-download");
    //header("Content-Disposition: attachment; filename=$nome_arquivo");
    //header("Pragma: no-cache");

    $vendas = array(
        array(
            'cliente' => 'primeiro cliente',
            'data' => 'ontem',
            'valor' => '1000'
        ),
        array(
            'cliente' => '2 cliente',
            'data' => 'ontem',
            'valor' => '1000'
        ),
        array(
            'cliente' => '3 cliente',
            'data' => 'ontem',
            'valor' => '1000'
        ),
        array(
            'cliente' => '4 cliente',
            'data' => 'ontem',
            'valor' => '1000'
        )
    );

    ?>
    <table>
        <tr>
            <th>Cliente</th>
            <th>Data da Comprar</th>
            <th>Valor</th>
            <th>Produto</th>
        </tr>
        <?php
        foreach ($vendas as $venda) {
            echo "<tr><td>" . $venda['cliente'] . "</td><td>" . $venda['data'] . "</td><td>" . $venda['valor'] . "</td></tr>";
        }
        ?>
    </table>