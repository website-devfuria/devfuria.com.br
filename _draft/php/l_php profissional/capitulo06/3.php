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
 
require_once('Exception.class.php');

set_exception_handler('trata_excecao');

function trata_excecao($e) {
	echo 'Tratamento de exceção especial, via set_exception_handler: <b>' . $e->getType() . '</b>';
}

$usuario = $senha = $db = 'teste';

try {
	
	if (!($conn = @mysql_connect('localhost', $usuario, $senha)))
		throw new ExceptionDBConnection();
		
	if (!@mysql_select_db($db, $conn))
		throw new ExceptionDBSelect();
		
	$sql = "SELECT codigo, nome FROM cidades ORDER BY nome";
	if (!$result = mysql_query($sql))
		throw new ExceptionDBQuery();
		
	if (!$num_rows = @mysql_num_rows($result))
		throw new ExceptionDBNumRows();

	if ($num_rows) {
		if (!($val = @mysql_fetch_object($result)))
			throw new ExceptionDBFetchObject();
		
		//sucesso!
		var_dump($val);	
	}

//Blocos Catch - propositalmente nem todas as Exceções da classe herdadas de ExceptionDB são tratadas,
//deste modo a função 'trata_excecao', definida via funçaõ 'set_exception_handler' trata estes casos

} catch (ExceptionDBConnection $e) {
	echo 'entrou no catch ExceptionDBConnection<br>';
	echo $e;
	
} catch (ExceptionDBSelect $e) {
	echo 'entrou no catch ExceptionDBSelect<br>';
	echo $e;
}	
?>
