<?php
/*****************************************************************
* Desenvolvido por:
*
* Antônio Norival Ribeiro Passos
* Contato:  tonhopassos@gmail.com
*           antonio.passos@comp.ufla.br
*
****************************************************************/

// pasta onde fica os modulos
$modulos = "modulos";

// verifica se alguma pagina foi solicitada
if ($_GET['pagina']) {

    // verifica a existencia do modulo
    if (file_exists($modulos . "/" . $_GET['pagina'] . ".php")) {
        $pagina = $modulos . "/" . $_GET['pagina'] . '.php';
    } else {
        // pagina de erro
        $pagina = $modulos . "/" . "bug.php";
    }
}
else
// pagina home caso nada for pedido
    $pagina = $modulos."/"."home.php";
?>

<?php require($pagina);?>