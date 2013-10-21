<?php
/**
 * Esta função exemplifica a passagem de parâmetro
 * via referência.
 *
 * @param type $variavel
 * @param type $valor
 */
function incrementa(&$variavel, $valor){
    $variavel += $valor;
}

$a = 10;
incrementa($a, 20);

echo $a;
?>