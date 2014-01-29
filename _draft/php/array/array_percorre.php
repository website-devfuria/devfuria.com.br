<?php

$posicoes = array("Primeiro", "Segundo", "Terceiro");

while ($cad_pos = current($posicoes)) {

//    $key = key($posicoes);
//    echo $posicoes[$key];

    # ou

    echo $cad_pos;


    echo "<br />";
    next($posicoes);
}# end while

?>
