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
 
session_start();
?>

<html>
<head>
	<title>Exercício 2.4</title>
</head>
<body>

<h3>Análise do Triângulo</h3>

<?php
$url = $_SERVER['PHP_SELF'];
$lados = array(1=>'A', 2=>'B', 3=>'C');

if (!isset($_POST['passo'])) {
	$_SESSION = array();
	$j = 0;
}
else {
	$j = count($_SESSION['lados_lidos']) + 1;
	$nome = 'campo_lado_' . $lados[$j];
	$_SESSION['lados_lidos'][$j] = $_POST[$nome];
}

//imprimir os lados do triângulo já informados pelo usuário
for($i=1; $i<=$j; $i++) {
	printf('Lado %s: %d<br>', $lados[$i], $_SESSION['lados_lidos'][$i]);
}

if ($j < 3) {
	
	$passo = $j+1;
	$proximo_lado = $lados[$passo];
	$campo_lado = 'campo_lado_'.$proximo_lado;
	
	echo "
	<form method=\"post\" action=\"$url\">
		Lado $proximo_lado: <input type=\"text\" name=\"$campo_lado\" />&nbsp;
		<input type=\"hidden\" name=\"passo\" value=\"$passo\" />
		<input type=\"submit\" name=\"btn_submit\" value=\"Enviar\" />
	</form>";
}
else {
	echo '<h3>resultado</h3>';
	if (triangulo_valido()) {
		printf('Este triângulo é %s', analise_triangulo());
	}
	else {
		printf('Este triângulo não é válido!');
	}
}

echo "<br /><br /><a href=\"$url\">reiniciar cálculo</a>";

function triangulo_valido() {
	
	$lados = array_values($_SESSION['lados_lidos']);
	
	//os lados são numéricos?
	foreach($lados as $lado) {
		if (!is_numeric($lado))
			return false;
	}
	
	sort($lados);
	
	//o maior lado deve ser menor que a soma dos 2 menores
	if ($lados[0] + $lados[1] <= $lados[2])
		return false;
		
	return true;
}

function analise_triangulo() {
  
  $lados = array_values($_SESSION['lados_lidos']);
  
  //equilátero?
  if ($lados[0] == $lados[1] && $lados[0] == $lados[2])
    return 'equilátero';
    
  if ($lados[0] == $lados[1] || $lados[0] == $lados[2] || $lados[1] == $lados[2])
    return 'isósceles';
    
  return 'escaleno';
}
?>

</body>
</html>
