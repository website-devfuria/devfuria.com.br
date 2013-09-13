<?php
class SimpleXMLExtend extends SimpleXMLElement
{
  public function addCData($nodename,$cdata_text)
  {
    $node = $this->addChild($nodename); //Added a nodename to create inside the function
    $node = dom_import_simplexml($node);
    $no = $node->ownerDocument;
    $node->appendChild($no->createCDATASection($cdata_text));
  }
}
/*
 *
 */
$xml = simplexml_load_file('exemplo.xml', 'SimpleXMLExtend');


$frasesExtras = $xml->addChild('frases_extras');

$frasesExtras->addCData('frase', 'DDD');
$frasesExtras->addCData('frase', 'III');
$frasesExtras->addCData('frase', 'FFF');

//$frasesExtras->addChild('frase', 'DDD');
//$frasesExtras->addChild('frase', 'III');
//$frasesExtras->addChild('frase', 'FFF');

foreach ($xml->frase as $tag  => $valor){
    echo $tag.' - '.$valor.'<br />';
}

var_dump($xml->asXML());
?>
