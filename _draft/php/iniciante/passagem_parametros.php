<?php
/**
 * Esta funçã exemplifica a passagem de parêmetros pelo valor
 *
 * @param type $variavel
 * @param type $valor
 */
function incrementa($variavel, $valor){
    $variavel += $valor;
}

$a = 10;
incrementa($a, 20);

echo $a;
?>