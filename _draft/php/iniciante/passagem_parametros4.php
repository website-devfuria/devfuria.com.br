<?php
/**
 * Esta função exemplifica a utilização de funções com
 * parâmetro opcionais e variáveis.
 */
function ola(){

    $argumentos = func_get_args();
    $quantidade = func_num_args();

    for( $n = 0; $n < $quantidade; $n++ )
        echo 'Olá ' . $argumentos[$n] . "<br>\n";
}

ola('João', 'Maria', 'José', 'Pedro');
?>