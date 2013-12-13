<html>
<head>
<title>Resultado da busca</title>
</head>
<body>
<h2>Resultado</h2>


<?

$elemento_corrente = "";
$titulo_atual="";
$descricao_atual="";
$valido = false;

function TagInicial($parser, $elemento, $attrs) {
global $elemento_corrente;
$elemento_corrente = $elemento;
}


function TagFinal($parser, $elemento) {
global $elemento_corrente;
$elemento_corrente = "";
}


function TrataCaracteres($parser, $dados) {

global $consulta;
global $valido;
global $elemento_corrente;
global $titulo_atual;
global $descricao_atual;

$valido=false;

 if($elemento_corrente=="TITULO" || $elemento_corrente=="DESCRICAO")
 {
    $valor = trim($dados);

    if(preg_match("/$consulta/i", $valor))
       $valido = true;

    if($elemento_corrente=="TITULO")
       $titulo_atual = $valor;
    else
    {
       $descricao_atual = $valor;
       if ($valido)
       {
	      $titulo_atual = str_replace($consulta, "<b>$consulta</b>", $titulo_atual);
	      $descricao_atual = str_replace($consulta, "<b>$consulta</b>", $descricao_atual);
	      echo "<font color=\"blue\"><u>$titulo_atual</u></font><br>";
	      echo "<font color=\"black\">$descricao_atual</font><br><br>";
          $valido=false;
       }
    }
 }


}


$parser = xml_parser_create();

xml_set_element_handler($parser, "TagInicial", "TagFinal");
xml_set_character_data_handler($parser, "TrataCaracteres");

if (!($fp = fopen("catalogo.xml", "r")))
    die("Não foi possível abrir o arquivo XML.");


while ($dados = fread($fp, 4096))
{
  if (!xml_parse($parser, $dados, feof($fp)))
  {
    die(sprintf("Erro XML: %s na linha %d",
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
  }
}

xml_parser_free($parser);

?>


</body>
</html>
