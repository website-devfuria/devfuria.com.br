<?php

//var_dump($_POST);

$_POST['pais'] = isset($_POST['pais']) ? $_POST['pais'] : null;

if ($_POST['pais']) {
    echo "armazenar '{$_POST['pais']}'";
} else {
    echo "armazenar 'null'";
}
