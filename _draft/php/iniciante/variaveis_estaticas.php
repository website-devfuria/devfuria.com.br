<?php
/**
 * Variávei s státicas
 * 
 * @staticvar type $total
 * @param type $quilometros
 */
function percorre($quilometros)
{
    static $total;

    $total += $quilometros;
    echo "percorreu mais $quilometros do total de $total<br>\n";
}

percorre(10);
percorre(20);
percorre(30);

// Saída
// percorreu mais 10 do total de 10
// percorreu mais 20 do total de 30
// percorreu mais 30 do total de 60
?>