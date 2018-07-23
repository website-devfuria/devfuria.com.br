<?php

/*

    Registra no banco de dados as aulas assistidas

*/

#
# dep
#
require dirname(__FILE__) . '/boot.php';
require Site::$path['api/'] . '/boot.php';


#
#  get dados
#
$aluno   = (isset($_GET['aluno']))  ? $_GET['aluno'] :  null;
$curso   = (isset($_GET['curso']))  ? $_GET['curso'] :  null;
$aula    = (isset($_GET['aula']))   ? $_GET['aula'] :   null;
$action  = (isset($_GET['action'])) ? $_GET['action'] : null;
// var_dump($aluno, $curso, $aula, $action);

#
# carregar as aulas
#
$arr_aulas = aulas_assistidas($aluno, $curso);
// var_dump($arr_aulas);


#
# remover ou adicionar
#
$arr = [];
if ($action == 'on') {
    $arr = aulas_assistidas_adicionar($aula, $arr_aulas);
} elseif ($action == 'off') {
    $arr = aulas_assistidas_remover($aula, $arr_aulas);
} else {
  # não faz nada, certo ?
}


# se tiver pelo menos uma...
if (count($arr)) {
    sort($arr);
    $assistidas = implode(" ", $arr);
} else {
    $assistidas = null;
}


// var_dump($assistidas);


#
# update
#
aulas_assistidas_update($aluno, $curso, $assistidas);

