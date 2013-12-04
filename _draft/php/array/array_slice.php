<?php

//$array = array("a", "b", "c", "d", "e", "f", "g", "h");
//var_dump($array);
//
//$arrayCorte = array_slice($array, 0, 2);
//var_dump($arrayCorte);
//var_dump($array);








$array[] = array("a", "b", "c", "d", "e", "f", "g", "h");
$array[] = array("a", "b", "c", "d", "e", "f", "g", "h");
$array[] = array("a", "b", "c", "d", "e", "f", "g", "h");
$array[] = array("a", "b", "c", "d", "e", "f", "g", "h");
$array[] = array("a", "b", "c", "d", "e", "f", "g", "h");

$arrayCorte = array_slice($array, 0, 2);
var_dump($arrayCorte);
var_dump($array);

?>
