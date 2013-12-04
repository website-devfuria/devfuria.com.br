<?php

/*
 * Função join() serve para juntar os elementos de um array usando uma string como 
 * Ele faz o trabalho inverso do explode().
 * (1) A string de união.   
 * (2) O array que será unido.
 */


$dom_Brasil = 'é';

$array = array(' Dom Diagnósticos ',' Progresso ');
echo join($array,$dom_Brasil);// Retorna: Dom Diagnósticos é Progresso 


?>
