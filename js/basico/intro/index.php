<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/includes/bs.php";


/**
 * Instancia a matéria correta
 */
$materia = new Materia(7);


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
