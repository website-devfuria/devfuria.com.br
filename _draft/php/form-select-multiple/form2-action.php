<?php

var_dump($_POST);

$_POST['pais'] = isset($_POST['pais']) ? $_POST['pais'] : null;

if ($_POST['pais']) {
    foreach ($_POST['pais'] as $cadaPais) {
        var_dump("armazenar '$cadaPais'");
    }
} else {
    echo "armazenar 'null'";
}
