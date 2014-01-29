<?php
# Objetivo: ler o xml criado de várias maneiras

$dom = new DOMDocument();
$dom->load('01_criado_forma1.xml');                 # object(DOMDocument)[1]

/**
 * Primeira amostra
 */
//$qq = $dom->getElementsByTagName('mynotes');        # object(DOMNodeList)[2]
//var_dump( $qq->item(0) ); echo "</br>";             # object(DOMElement)[3]
//var_dump( $qq->item(0)->nodeValue  ); echo "</br>"; # retorna todos os valores de 'mynotes'
//var_dump($qq->length);                              # 1



/**
 * Segunda amostra
 */
//$qq = $dom->getElementsByTagName('note');           # object(DOMNodeList)[2]
//
//var_dump( $qq->item(0) ); echo "</br>";             # object(DOMElement)[3]
//var_dump( $qq->item(0)->nodeValue  ); echo "</br>"; # retorna os valores do 1º 'note'
//
//var_dump( $qq->item(1) ); echo "</br>";             # object(DOMElement)[3]
//var_dump( $qq->item(1)->nodeValue  ); echo "</br>"; # retorna os valores do 2º 'note'
//
//var_dump($qq->length);                              # 2



/**
 * terceira amostra
 */
//$qq = $dom->getElementsByTagName('tasks');          # object(DOMNodeList)[2]
//var_dump( $qq->item(0) ); echo "</br>";             # object(DOMElement)[3]
//var_dump( $qq->item(0)->nodeValue  ); echo "</br>"; # retorna os valores do 1º tasks'
//
//var_dump( $qq->item(1) ); echo "</br>";             # object(DOMElement)[3]
//var_dump( $qq->item(1)->nodeValue  ); echo "</br>"; # retorna os valores do 2º tasks'
//
//var_dump($qq->length);                              # 2


/**
 * Quarta amostra
 */
$element = $dom->documentElement;
var_dump($element);

?>