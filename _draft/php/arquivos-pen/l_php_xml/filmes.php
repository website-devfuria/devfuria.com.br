<?php

$dados = implode("",file("filmes.xml"));

$parser = xml_parser_create();
	xml_parse_into_struct($parser,$dados,$valores,$indices);
xml_parser_free($parser);


for ($i=0 ; $i<sizeof($indices["TITULO"]) ; $i++)
{
   $pos = $indices["TITULO"][$i];
   echo "<b>Título:</b> ". $valores[$pos]["value"];
   echo "<br>";

   $pos = $indices["GENERO"][$i];
   echo "<b>Gênero:</b> ". $valores[$pos]["value"];
   echo "<br>";

   $pos = $indices["ATOR"][$i];
   echo "<b>Ator:</b> ". $valores[$pos]["value"];
   echo "<hr>";
}

?>