<?php
/**
 * Includes
 */
require "../furia/includes/bs.php";


/**
 * Autenticação
 */
if($_SESSION['chave'] != CHAVE) die();


$acao = isset($_POST['ac']) ? $_POST['ac'] : null ;

switch ($acao) {

    case "select":
        $materias = Materia::getObjects($where=null, $order="ORDER BY id");
        echo json_encode($materias);
        break;

    case "total":
        $total_regis = Materia::total_registros();
        echo (int)($total_regis);
        break;

    case "insert":
        $materia_request = isset($_POST['materia']) ? $_POST['materia'] : null ;
        $materia_request = json_decode($materia_request);

        $materia = new Materia();
        $materia->id             = $materia_request->id;
        $materia->url            = $materia_request->url;
        $materia->titulo         = $materia_request->titulo;
        $materia->resumo         = $materia_request->resumo;
        $materia->keywords       = $materia_request->keywords;
        $materia->nivel          = $materia_request->nivel;
        $materia->secao          = $materia_request->secao;
        $materia->autor          = $materia_request->autor;
        $materia->dt_atualizacao = FuncAux::data_converte_para_mysql($materia_request->dt_atualizacao);
        $materia->dt_criacao     = FuncAux::data_converte_para_mysql($materia_request->dt_criacao);
        $materia->ordem          = $materia_request->ordem;
        $materia->inserir();
        echo $materia->id;
        break;

    case "update":
        $materia_request = isset($_POST['materia']) ? $_POST['materia'] : null ;
        $materia_request = json_decode($materia_request);

        $materia = new Materia();
        $materia->id             = $materia_request->id;
        $materia->url            = $materia_request->url;
        $materia->titulo         = $materia_request->titulo;
        $materia->resumo         = $materia_request->resumo;
        $materia->keywords       = $materia_request->keywords;
        $materia->nivel          = $materia_request->nivel;
        $materia->secao          = $materia_request->secao;
        $materia->autor          = $materia_request->autor;
        $materia->dt_atualizacao = FuncAux::data_converte_para_mysql($materia_request->dt_atualizacao);
        $materia->dt_criacao     = FuncAux::data_converte_para_mysql($materia_request->dt_criacao);
        $materia->ordem          = $materia_request->ordem;
        $materia->update();
        break;

    case "delete":
        $id = isset($_POST['id']) ? $_POST['id'] : null ;
        $materia = new Materia();
        $materia->id = $id;
        $materia->deletar();
        break;

}



?>