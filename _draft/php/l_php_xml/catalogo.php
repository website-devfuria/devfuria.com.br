<html>
<head>
<title>Resultado da busca</title>
</head>
<body>
<h2>Resultado</h2>

<?

$parser = xml_parser_create();

$dados = implode ("", file("catalogo.xml"));
xml_parse_into_struct($parser,$dados,&$valores,&$indices);

xml_parser_free($parser);
$valido=false;


foreach ($valores as $elemento)
{
 if($elemento["tag"]=="TITULO" || $elemento["tag"]=="DESCRICAO")
 {
    $valor = trim($elemento["value"]);

    if(preg_match("/$consulta/i", $valor))
       $valido = true;

    if($elemento["tag"]=="TITULO")
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

?>

</body>
</html>
