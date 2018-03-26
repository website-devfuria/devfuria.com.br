<?php
// Arquivo "form-action.php"
require "../inc-aux.php";

$_POST['bike'] = ( isset($_POST['bike']) ) ? true : null;
$_POST['car']  = ( isset($_POST['car']) )  ? true : null;

# Visualizando os dados
debug($_POST);

# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.
