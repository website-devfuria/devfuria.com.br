<html>
<head>
<title>Jogadores de futebol</title>
</head>
<body>
<h2>Jogadores</h2>

<?

function TagInicial($parser, $elemento, $attrs) {

if($elemento=="FUTEBOL")
  echo "<table bgcolor=#00FF00>";
else
  if($elemento=="JOGADOR")
    echo "<tr><td><ul>";
  else
    echo "<li>";

}

function TagFinal($parser, $elemento) {

if($elemento=="FUTEBOL")
  echo "</table>";
else
  if($elemento=="JOGADOR")
    echo "</ul></td></tr>";
  else
    echo "</li>";

}

function TrataCaracteres($parser, $dados) {

  echo "<b>";
  echo $dados;
  echo "</b>";

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
