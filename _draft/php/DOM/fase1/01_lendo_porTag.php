<?php
$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;               # retirar os espacos em branco

$dom->load('01_contatos.xml');
var_dump($dom); echo "</br>";

$contatos = $dom->getElementsByTagName('contatos');
var_dump($contatos); echo "</br>";


// 1 forma
$todos_os_nomes = $dom->getElementsByTagName('nome');
foreach($todos_os_nomes as $cad_nome)
    var_dump($cad_nome->nodeValue);

// 2 forma
var_dump($todos_os_nomes->item(0)->nodeValue);
var_dump($todos_os_nomes->item(1)->nodeValue);
var_dump($todos_os_nomes->item(2)->nodeValue);
?>