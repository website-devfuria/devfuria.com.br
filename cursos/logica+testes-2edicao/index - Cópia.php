<?php

require "../../app/boot.php";
require Site::$path['api/'] . '/boot.php';


#
# módulos do curso
#
$modulos = fulia_logica_2edicao();
// var_dump($modulos[12]);
// var_dump($modulos); die();


#
# token
#
if (isset($_GET['t'])) {
    $aluno = fulia_aluno_read_by_hash($_GET['t']);
    // var_dump($aluno); die();

    if($aluno) {
        $aluno->aulas = aulas_assistidas($aluno->id, $aluno->curso_id);
        // var_dump($aluno); die();
    }

}

#
# crio a sessão (visível em api)
#
$_SESSION['aluno'] = ($aluno) ? $aluno : null;
// var_dump($_SESSION); die();



$page = $GLOBALS['page'];

// $page->uri_arr = $pagina_arr;                                    # traz a parte após o domínio, no formato array.
// $page->uri_str = Site::$slim->request->getResourceUri();         # traz a parte após o domínio, no formato string.
$page->uri_str = "";
$page->url_str = Site::$dominio . $page->uri_str;
$page->front = [];
$page->front['title'] = "Curso de Lógica de Programação Aliada a Testes Unitários";


// var_dump($aluno); die();

#
# view
#
if ($aluno) {
    require "index-view.php";
} else {
    require "index-view-open.php";
}
