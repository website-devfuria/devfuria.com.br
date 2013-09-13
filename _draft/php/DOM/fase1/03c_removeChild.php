<?php
$doc = new DOMDocument;

$doc->load('03c_exemplo.xml');


$dom      = $doc->documentElement;
$secoes   = $dom->getElementsByTagName('secoes')->item(0);
$secao    = $secoes->getElementsByTagName('secao')->item(15);
$conteudo = $secao->getElementsByTagName('conteudo')->item(0);
$frases = $conteudo->getElementsByTagName('frase');


$ids_to_del = array(rand(0,4), rand(5,10), rand(11,14));
$contador = 0;
foreach($ids_to_del as $id){
    $frase    = $frases->item($id-$contador);
    $conteudo->removeChild($frase);
    $contador++;
}


$strXml = $doc->saveXML();


//$outro_doc = new DOMDocument;
//$outro_doc->loadXML($strXml);
//$outro_doc->formatOutput = true;
//$outro_doc->preserveWhiteSpace = false;
//$outro_doc->normalize();
//echo "<pre>";
//echo $doc->saveXML();
//echo "</pre>";
//echo $outro_doc->save("093deletado.xml");


$doc->formatOutput = true;
$doc->preserveWhiteSpace = false;
$doc->normalizeDocument();
$doc->save("03c_exemplo.xml");


?>