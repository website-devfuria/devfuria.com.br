<?php

var_dump($_POST);

if (isset($_POST['bike'])) {
    var_dump("escolheu 'bike'");
} else {
    var_dump("não escolheu 'bike'");
}
if (isset($_POST['car'])) {
    var_dump("escolheu 'car'");
} else {
    var_dump("não escolheu 'car'");
}
?>
