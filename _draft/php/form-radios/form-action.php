<?php

var_dump($_POST);

if (isset($_POST['band-rock'])) {
    var_dump("escolheu ". $_POST['band-rock']);
} else {
    var_dump("não escolheu nenhuma banda de rock");
}
?>
