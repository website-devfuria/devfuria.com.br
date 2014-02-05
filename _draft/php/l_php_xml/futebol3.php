<html>
<head>
<title>Jogadores de futebol</title>
</head>
<body>
<h2>Jogadores</h2>

<?

function TagInicial($parser, $elemento, $attrs) {

	switch ($elemento) {
	case "FUTEBOL":
		echo "<table bgcolor=#F0F0F0>";
        break;

	case "JOGADOR":
		echo "<tr><td>";
		break;

	case "NOME":
		echo "<b>";
		break;

	case "IDADE":
		echo "Idade: <i>";
		break;

	case "ALTURA":
		echo "Altura: <i>";
		break;

	case "TIME":
		echo "Time: <u>";
		break;

	case "POSICAO":
		echo "Posição: <i>";
		break;

	default:
		break;
	}

}

function TagFinal($parser, $elemento) {

	switch ($elemento) {
	case "FUTEBOL":
		echo "</table>";
        break;

	case "JOGADOR":
		echo "</td></tr>";
		break;

	case "NOME":
		echo "</b><br>";
		break;

	case "IDADE":
		echo "</i><br>";
		break;

	case "ALTURA":
		echo "</i><br>";
		break;

	case "TIME":
		echo "</u><br>";
		break;

	case "POSICAO":
		echo "</i><br><br>";
		break;

	default:
		break;
	}

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
