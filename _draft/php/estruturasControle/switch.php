<?php

/*
 *  switch faz parte de uma estrutura de control e é utilizado geralmente para
 *  comparar uma variável com diversos  valores e executar um código diferente
 *  para saber qual valor é igual ao da variável.
 */


$var= '2';

switch ($var) {
    case 0;
        print "A é igual a zero";
        break;
    case 1;
        print "A é igual a um";
        break;
    case 2;
        print "A é igual a dois";
        break;
}
?>
