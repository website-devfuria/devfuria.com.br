<html>
<head>
</head>
<body>

<?
// arquivo de dados
$arquivo = "copa1994.xml";

$tags_iniciais = array(
"COPA" => "<hr>",
"NOME" => "<font size=+2>",
"CAMPEAO" => "<u>Campeão</u>: <b>",
"LOCAL" => "<u>Local</u>: <b>",
"JOGOS" => "<h3>Jogos:</h3><ul>",
"CONFRONTO" => "<li>",
"PLACAR" => "(",
"ESCALACAO" => "<h3>Escalação:</h3><ol>",
"JOGADOR" => "<li>"
);

$tags_finais = array(
"NOME" => "</font><br>",
"CAMPEAO" => "</b><hr>",
"LOCAL" => "</b><br>",
"JOGOS" => "</ul>",
"PLACAR" => ")",
"ESCALACAO" => "</ol>"
);

function TagInicial($parser, $elemento, $atrib) {
	global $tags_iniciais;
	// se existe tag inicial, imprime
	if (isset($tags_iniciais[$elemento])) 	
	{ echo $tags_iniciais[$elemento]; }
}

function TagFinal($parser, $elemento) {
	global $tags_finais;
	if (isset($tags_finais[$elemento]))
 	{ echo $tags_finais[$elemento]; }
}

// processa os dados entre as tags
function TrataCaracteres($parser, $dados) {
	echo $dados;
}

// cria o parser XML
$parser = xml_parser_create();

// define funções de manipulação
xml_set_element_handler($parser, "TagInicial", "TagFinal");
xml_set_character_data_handler($parser, "TrataCaracteres");

// abre o arquivo XML
if (!($fp = fopen($arquivo, "r")))
{
    die("Arquivo não localizado: $arquivo");
}

// inicia a análise do documento
while ($dados = fread($fp, 4096))
{
	if (!xml_parse($parser, $dados, feof($fp)))
	{
    die(sprintf("Erro XML: %s na linha %d",
xml_error_string(xml_get_error_code($parser)),
xml_get_current_line_number($parser)));
    }
}

// libera memória usada
xml_parser_free($parser);

?>

</body>
</html>
