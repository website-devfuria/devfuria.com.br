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
?> 
<html>
<head>
	<title>Exercício 2.3</title>
</head>
<body>

<h3>Informe um número (máximo 10)</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Número: <input type="text" name="txt_numero" />&nbsp;
	<input type="submit" name="btn_submit" value="Enviar" />
</form>

<?php
//verifica se recebeu algum dado do formulário
if (count($_POST)) {
	
	//campo é numérico e menor ou igual a 10?
	if (is_numeric($_POST['txt_numero']) && $_POST['txt_numero'] <= 10) {
		
		for ($i=0; $i<=$_POST['txt_numero']; $i++) {
			$par_impar = $i%2 ? 'ímpar' : 'par';
			printf('%d: %s<br />', $i, $par_impar);
		}
	}
	else {
		printf('Informe um número válido!');
	}
}
?>

</body>
</html>
