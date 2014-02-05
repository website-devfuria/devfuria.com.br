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
	<title>Exercício 2.5</title>
</head>
<body>

<h3>Envio de dados via formulário</h3>

<?php
$msg = '';
$url = $_SERVER['PHP_SELF'];

if (count($_POST)) {
  
  echo "<h3>Os dados fornecidos foram</h3>";
  echo 'Nome: '.htmlentities($_POST['txt_nome']).'<br />';
  echo 'Idade: '.htmlentities($_POST['txt_idade']).'<br />';
	
	require_once('validar_form.inc.php');
	$msg = validar_form($_POST);
}
else {
  
  echo "<form method=\"post\" action=\"$url\">
        Nome: <input type=\"text\" name=\"txt_nome\" /><br />
        Idade: <input type=\"text\" name=\"txt_idade\" /><br />
        <input type=\"submit\" name=\"btn_submit\" value=\"Enviar\" />
        </form>";  
}
?>

<h3><?php echo $msg; ?></h3>
<a href="<?php echo $url; ?>">voltar</a>

</body>
</html>
