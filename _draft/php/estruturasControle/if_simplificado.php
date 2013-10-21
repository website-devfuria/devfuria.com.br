<?php
/**
 * Título:      Entendendo o if($var)
 * Assunto:     Estrutura IF
 * Comentários: É possível simplificar a estrutura if no php.
 *
 */

$minhaVar = true;

# Este shortcut(atalho)...
if($minhaVar)
    echo "passsei por aqui: ". __LINE__."<br>";
else
    echo "passsei por aqui: ". __LINE__."<br>";


# tem o mesmo efeito que...
if($minhaVar == true)
    echo "passsei por aqui: ". __LINE__."<br>";
else
    echo "passsei por aqui: ". __LINE__."<br>";


/*
 * Mostra na tela:
 *      passsei por aqui: 13
 *      passsei por aqui: 20
 */
?>