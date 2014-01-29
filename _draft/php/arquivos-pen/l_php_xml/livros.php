<html>
<head>
<title>Lista de livros</title>

<style type="text/css">
h1 {font-family: Verdana; font-size: 20pt}
td {font-family: Verdana; font-size: 10pt}
</style>

</head>
<body>
<h1>Lista de livros</h1>
<table border="1" cellpadding="4" cellspacing="1">
<tr>
	<td align="center"><b>ISBN</b></td>
	<td align="center"><b>Título</b></td>
	<td align="center"><b>Autor</b></td>
	<td align="center"><b>Páginas</b></td>
	<td align="center"><b>Preço</b></td>
	<td align="center"><b>Categoria</b></td>
</tr>

<?
// arquivo com os dados
$arquivo = "livros.xml";

// variável global para indicar o elemento que está sendo avaliado
$elemento_corrente = "";

function TagInicial($parser, $elemento, $atrib) {
	global $elemento_corrente;
	$elemento_corrente = $elemento;

	// define a saída HTML para cada tag de abertura
	switch ($elemento) {
	case "LIVRO":
		echo "<tr>";
        break;

	case "ISBN":
		echo "<td>";
		break;

	case "TITULO":
		echo "<td>";
		break;

	case "AUTOR":
		echo "<td>";
		break;

	case "PAGINAS":
		echo "<td>";
		break;

	case "PRECO":
		echo "<td>";
		break;

	case "CATEGORIA":
		echo "<td>";
		break;

	default:
		break;
	}
}

function TagFinal($parser, $elemento) {
	global $elemento_corrente;

	// define a saída HTML para cada tag de fechamento
	switch ($elemento) {
	case "LIVRO":
		echo "</tr>";
		break;

	case "ISBN":
		echo "</td>";
		break;

	case "TITULO":
		echo "</td>";
		break;

	case "AUTOR":
		echo "</td>";
		break;

	case "PAGINAS":
		echo "</td>";
		break;

	case "PRECO":
		echo "</td>";
		break;

	case "CATEGORIA":
		echo "</td>";
		break;

	default:
		break;
	}

	// limpa a variável que armazena o nome do elemento corrente
	$elemento_corrente = "";
}


function TrataCaracteres($parser, $dados) {

	global $elemento_corrente;

	// formata os dados de acordo com o elemento corrente
	switch ($elemento_corrente) {

	case "ISBN":
		echo "<b><i>$dados</i></b>";
		break;

	case "TITULO":
		echo "<i>$dados</i>";
		break;

	case "AUTOR":
		echo $dados;
		break;

	case "PAGINAS":
		echo $dados;
		break;

	case "PRECO":
		echo "R$" . $dados;
		break;

	case "CATEGORIA":
		echo $dados;
		break;

	default:
		break;
	}
}

// cria o parser
$parser = xml_parser_create();

// define as funções de manipulação
xml_set_element_handler($parser, "TagInicial", "TagFinal");
xml_set_character_data_handler($parser, "TrataCaracteres");

// abre o arquivo XML
if (!($fp = fopen($arquivo, "r")))
{
    die("Arquivo XML não localizado: $arquivo");
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

// libera a memória usada pelo parser
xml_parser_free($parser);

?>

</table>
</body>
</html>
