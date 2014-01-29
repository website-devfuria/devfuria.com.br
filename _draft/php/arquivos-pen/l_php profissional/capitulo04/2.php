<?php
/**
 * Código-fonte do livro "PHP Profissional"
 * Autores: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - todos os direitos reservados
 *
 * LICENÇA: Este arquivo-fonte está sujeito a Atribuição 2.5 Brasil, da licença Creative Commons, 
 * que encontra-se disponível no seguinte endereço URI: http://creativecommons.org/licenses/by/2.5/br/
 * Se você não recebeu uma cópia desta licença, e não conseguiu obtê-la pela internet, por favor, 
 * envie uma notificação aos seus autores para que eles possam enviá-la para você imediatamente.
 *
 *
 * Source-code of "PHP Profissional" book
 * Authors: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - all rights reserved
 *
 * LICENSE: This source file is subject to Attibution version 2.5 Brazil of the Creative Commons 
 * license that is available through the following URI:  http://creativecommons.org/licenses/by/2.5/br/
 * If you did not receive a copy of this license and are unable to obtain it through the web, please 
 * send a note to the authors so they can mail you a copy immediately.
 *
 */
 
require_once('CalculadoraII.class.php');

$calc = new CalculadoraII();

printf('1 + 1 = %s<br>', $calc->somar(1, 1));
printf('10 - 3 = %s<br>', $calc->subtrair(10, 3));
printf('50 * 20.3 = %s<br>', $calc->multiplicar(50, 20.3));
printf('armazenando resultado...<br>');
$calc->armazenar();
printf('-9 / 0.45 = %s<br>', $calc->dividir(-9, 0.45));
printf('memória = %s<br>', $calc->recuperar());
printf('20 * (3 + 4) = %s<br>', $calc->multiplicar(20, $calc->somar(3, 4)));
printf('armazenando resultado...<br>');
$calc->armazenar();
printf('memória = %s<br>', $calc->recuperar());
printf('<br><br>');
?>
