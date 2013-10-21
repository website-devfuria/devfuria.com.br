<?php

$doc = new DOMDocument;
$doc->load('03_laudo_exemplo.xml');

$dom = $doc->documentElement;

$del = $dom->getElementsByTagName('codigo')->item(0);
$dom->removeChild($del);

header("Content-Type: text/xml");#cabeçalho da página
echo $doc->saveXML();

?>