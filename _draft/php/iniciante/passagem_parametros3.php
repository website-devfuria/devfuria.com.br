<?php
/**
 * Esta função exemplifica um parâmetro opcinao
 * e com um valor padrão.
 *
 * @param type $variavel
 * @param type $valor
 */
function incrementa(&$variavel, $valor = 40){
    $variavel += $valor;
}

$a = 10;
incrementa($a);

echo $a;
?>