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
 
//classes para inspeção
$classes_validas = array('Calculadora', 'CalculadoraII', 'CalcCientifica');

//preparação do formulário
$listbox = array(sprintf("<option value='%s'>%s</option>", '', 'Selecione...'));
foreach($classes_validas as $classe)
	$listbox[] = sprintf("<option value='%s'>%s</option>", $classe, $classe);
$listbox = implode("\n", $listbox);	

$url = $_SERVER['PHP_SELF'];
echo "<form name=\"frm\" method=\"post\" action=\"$url\">
			Classe: 
			<select name=\"sel_classe\" onchange=\"javascript:frm.submit();\">
			$listbox
			</select>
			</form>";

if (!strlen($_POST['sel_classe'])) die(0);
			
//Exibir informações da classe selecionada!

require_once($_POST['sel_classe'] . '.class.php');

//instanciar objeto da classe ReflectionClass
$class = new ReflectionClass($_POST['sel_classe']);

printf('<h3>Informações da Classe %s</h3>', $_POST['sel_classe']);
printf('Name: <b>%s</b><br>', $class->getName());
printf('getFileName: <b>%s</b><br>', $class->getFileName());
printf('isInternal: <b>%s</b><br>', $class->isInternal() ? 'internal' : 'user-defined');
printf('isAbstract: <b>%s</b><br>', $class->isAbstract() ? 'sim' : 'não');
printf('isFinal: <b>%s</b><br>', $class->isFinal() ? 'sim' : 'não');
printf('isInstantiable: <b>%s</b><br>', $class->isInstantiable() ? 'sim' : 'não');

printf('<h3>Atributos</h3>');
foreach($class->getProperties() as $property) {
	
	printf('(%s) <b>%s</b><br>', metodo_acesso($property), $property->getName());	
}

printf('<h3>Métodos</h3>');
foreach($class->getMethods() as $method) {
	
	$lista_params = array();
	foreach($method->getParameters() as $parameter) {
		$lista_params[] = $parameter->getName();
	}
	
	if (count($lista_params))
		$lista_params = '<i>params = ' . implode('; ', $lista_params) . '</i>';
	else
		$lista_params = '';

	printf('(%s) <b>%s</b> %s<br>', metodo_acesso($method), $method->getName(), $lista_params);
}

//público, protegido ou privado?
function metodo_acesso($obj) {
	if ($obj->isPublic())
		return 'público';
	else if ($obj->isProtected())
		return 'protegido';
	else 
		return 'privado';
}
?>
