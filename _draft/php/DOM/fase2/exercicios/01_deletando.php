<?php
# objetivo: deletar de várias formas
$doc = new DOMDocument();
$doc->load('01_criado_forma1.xml');


/**
 * Primeira forma
 * Conforme o manual PHP
 * O $oldnote é uma cópia do que foi extraído
 *
 */
//$qq = $doc->documentElement;
//$note = $qq->getElementsByTagName('note')->item(0);
//$oldnote = $qq->removeChild($note);
//var_dump(  $doc->saveXML()  );



/**
 * Segunda forma
 * Repetindo a operção ele acaba por retirar os dois nodes 'note'
 *
 */
//$qq = $doc->documentElement;
//
//# remove 1 vez
//$note = $qq->getElementsByTagName('note')->item(0);
//$qq->removeChild($note);
//
//# remove pela 2ª vez
//$note = $qq->getElementsByTagName('note')->item(0);
//$qq->removeChild($note);
//
//var_dump(  $doc->saveXML()  );



/**
 * Terceira forma
 * Remove fazendo referência exata ao item

 *
 */
//$qq = $doc->documentElement;
//
//$note1 = $qq->getElementsByTagName('note')->item(0);
//$note2 = $qq->getElementsByTagName('note')->item(1);
//
//$qq->removeChild($note1);
//$qq->removeChild($note2);
//
//var_dump(  $doc->saveXML()  );



/**
 * Quarta forma
 * Laço de repetição
 *
 * Obs: pelo foreach "não rola".
 */
//$qq = $doc->documentElement;
//
//$note = $qq->getElementsByTagName('note');
//$lacos = $note->length;
//
//# Obs: não pode colocar o length no lugar
//# de $lacos porque length é variável
//for($i = 0; $i < $lacos; $i++){
//    # deleta sempre o índice zero, pois
//    # a cada deleção ele apaga um item
//    $qq->removeChild($note->item(0));
//}
//var_dump(  $doc->saveXML()  );


?>