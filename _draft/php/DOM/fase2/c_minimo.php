<?php

$dom = new DOMDocument("1.0", "ISO-8859-1");

$root = $dom->createElement("qq");
$dom->appendChild($root);

$dom->save("01_apagar.xml");

# Imprime o xml na tela
//header("Content-Type: text/xml");#cabeçalho da página
//print $dom->saveXML();
?>