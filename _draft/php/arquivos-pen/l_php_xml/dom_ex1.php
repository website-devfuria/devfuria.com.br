<?php
// cria uma string com os dados em formato XML
$minha_string = "<?xml version=\"1.0\"?>";
$minha_string .= "<autor>";
$minha_string .= "<nome>Juliano</nome>";
$minha_string .= "<sobrenome>Niederauer</sobrenome>";
$minha_string .= "</autor>";

// cria um documento objeto
$documento = domxml_open_mem ($minha_string);
// ou então cria uma árvore
$arvore = domxml_xmltree ($minha_string);



print_r($documento->document_element());
echo "<BR><BR>";
print_r($arvore->document_element());

?>
