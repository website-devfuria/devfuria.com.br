<?php
$dados = "<livro><titulo>Desenvolvendo Websites com PHP 4</titulo></livro>";

$parser = xml_parser_create();
	xml_parse_into_struct($parser,$dados,&$valores,&$indices);
xml_parser_free($parser);

echo "Array de valores\n";
print_r($valores);

echo "\nArray de índices\n";
print_r($indices);

?>
