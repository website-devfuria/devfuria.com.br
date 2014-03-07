<?php

require "boot.php";



$res = $pdo->query("SELECT * FROM paginas ORDER BY secao, sub_secao, id");
$paginas = $res->fetchAll(\PDO::FETCH_OBJ);
//var_dump($paginas);

$arr = array();
foreach($paginas as $pagina) {
    $arr[$pagina->secao][$pagina->sub_secao][] = $pagina;
}
//var_dump($arr);


$core->lista->links = $arr[Core::SECAO_JS]['curso'];
//var_dump($core->lista->links);
foreach($core->lista->links as $pagSecao){
    var_dump($pagSecao);
}