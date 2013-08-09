<?php

/*
 * A função implode(), faz a mesma coisa que a função join().
 * 
 */


//1ºForma
$array = array(' Nome ', ' Email ', ' Telefone ');
$partes = implode(",", $array);
print $partes; //retorna: Nome , Email , Telefone 





//2ºForma
$dom_Brasil = 'é';
$array = array(' Dom Diagnósticos ', ' Progresso ');
echo implode($array, $dom_Brasil); // retorna: Dom Diagnósticos é Progresso 

?>
