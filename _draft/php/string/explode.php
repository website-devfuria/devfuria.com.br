<?php

/*
 * A função explode() serve para dividir uma string, usando um separador, 
 * e criando um array com o resultado. Geralmente ele tem dois argumentos: 
 * (1) O separador (2) e a string que será convertida .
 */

$separador = '@';
$email = 'felipe@domdiagnosticos.com.br';
$partes = explode( $separador , $email);
/*
 * $partes será um array com dois elementos:
 *
 *  Resultado
 * array
 *    0 => string 'felipe' (length=6)
 *    1 => string 'domdiagnosticos.com.br' (length=22)
 */



?>
