<?php

$pattern   = "/(exemplo/";
$subject   = "Casa com a palavra exemplo";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);

if ($resultado === 1) {
    
    print "casou";
    var_dump($retorno);
    
} else if ($resultado === 0) {
    
    print "não casou";
    var_dump($retorno);
    
} elseif ($resultado === false) {
    
    print "ocorreu um erro";
    
}