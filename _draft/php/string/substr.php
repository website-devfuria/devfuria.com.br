<?php

/*
 * substr — A função substr()é responsável  por retornar uma parte específica 
 * de uma String. Ela tem, normalmente, 3 argumentos : 
 * (1) A string que será cortada.
 * (2) O início do corte.  
 * (3) Fim do corte .
 */

$razao_Social = 'Dom Diagnósticos Planejamento Administrativo Ltda';

//1ºForma
echo substr($razao_Social, 0, 3); // 3 primeiros caracteres a partir do 0° caractere
// Retorna: Dom




//2ºForma
echo substr($razao_Social, 4, 12); // 12 primeiros caracteres a partir do 3° caractere
// Retorna: Diagnóstico





//3ºForma
echo substr($razao_Social, 0, -1); // Todos os caracteres, até o penúltimo, a partir do 0° caractere
// Retorna: Dom Diagnósticos Planejamento Administrativo Ltd
?>
