<?php

$dom = new DOMDocument("1.0", "ISO-8859-1");    # versão do encoding xml
$dom->formatOutput = true;                      # se false ele gera tudo num alinha só


$root = $dom->createElement("agenda");          #criando o nó principal (root)
$contato = $dom->createElement("contato");      #nó filho (contato)

# setando nomes e atributos dos elementos xml (nós)
$nome       = $dom->createElement("nome", "Rafael Clares");
$telefone   = $dom->createElement("telefone", "(11) 5500-0055");
$endereco   = $dom->createElement("endereco", "Av. longa n 1");

# adiciona os nós (informacaoes do contato) em contato
$contato->appendChild($nome);
$contato->appendChild($telefone);
$contato->appendChild($endereco);

# adiciona o nó contato em (root) agenda
$root->appendChild($contato);
$dom->appendChild($root);

# Salvar o arquivo em disco
$dom->save("01_contatos.xml");

# Imprime o xml na tela
//header("Content-Type: text/xml");#cabeçalho da página
//print $dom->saveXML();
?>