<html>
<head>
<title>Jogadores de futebol</title>
</head>
<body>
<h2>Jogadores</h2>

<?

$inicial = array ('FUTEBOL' => '<table bgcolor=#F0F0F0>',
				'JOGADOR' => '<tr><td>',
				'NOME' => '<b>',
				'IDADE' => 'Idade: <i>',
				'ALTURA' => 'Altura: <i>',
				'TIME' => 'Time: <u>',
				'POSICAO' => 'Posição: <i>');

$final = array ('FUTEBOL' => '</table>',
				'JOGADOR' => '</td></tr>',
				'NOME' => '</b><br>',
				'IDADE' => '</i><br>',
				'ALTURA' => '</i><br>',
				'TIME' => '</u><br>',
				'POSICAO' => '</i><br><br>');


function TagInicial($parser, $elemento, $attrs) {
   global $inicial;
   echo $inicial[$elemento];
}

function TagFinal($parser, $elemento) {
   global $final;
   echo $final[$elemento];
}

function TrataCaracteres($parser, $dados) {

  echo $dados;

}


$xml_parser = xml_parser_create();

xml_set_element_handler($xml_parser, "TagInicial", "TagFinal");
xml_set_character_data_handler($xml_parser, "TrataCaracteres");

if (!($fp = fopen("futebol.xml", "r")))
    die("Não foi possível abrir o arquivo XML.");


while ($dados = fread($fp, 4096))
{
  if (!xml_parse($xml_parser, $dados, feof($fp)))
  {
    die(sprintf("Erro XML: %s na linha %d",
    xml_error_string(xml_get_error_code($xml_parser)),
    xml_get_current_line_number($xml_parser)));
  }
}

xml_parser_free($xml_parser);

?>

</body>
</html>
