<?php
$doc = new DOMDocument;
$doc->load('book.xml');

$book = $doc->documentElement;

$chapter = $book->getElementsByTagName('chapter')->item(0);
$book->removeChild($chapter);

header("Content-Type: text/xml");#cabeçalho da página
echo $doc->saveXML();
?>