<?php

//var_dump($_POST);

$_POST['pais'] = isset($_POST['pais']) ? $_POST['pais'] : null;

if ($_POST['pais']) {
    echo "Voce escolheu o pais: " . $_POST['pais'];
} else {
    echo "Voce nao escolheu pais nenhum.";
}
