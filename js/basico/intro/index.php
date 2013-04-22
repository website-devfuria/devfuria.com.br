<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria correta
 */
define("INTRO", 0);
$materia = new Materia();
$materia->carregar(Materia::idXML_JS, INTRO);
$materia->setNivel(Materia::BASICO);

/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>

<script type="text/javascript">
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src="../../imagens/pic_bulboff.gif";
    } else {
        element.src="../../imagens/pic_bulbon.gif";
    }
};
</script>
