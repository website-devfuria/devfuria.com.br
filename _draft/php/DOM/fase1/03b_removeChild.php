<?php

$doc = new DOMDocument;
$doc->load('03_laudo_exemplo.xml');

$dom = $doc->documentElement;

$secoes     = $dom->getElementsByTagName('secoes')->item(0);
$secao      = $secoes->getElementsByTagName('secao')->item(15);
$conteudo   = $secao->getElementsByTagName('conteudo')->item(0);
$frase      = $conteudo->getElementsByTagName('frase')->item(0);#  <----
$conteudo->removeChild($frase);


echo $doc->save("a.xml");

?>