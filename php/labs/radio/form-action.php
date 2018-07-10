<?php
// Arquivo "form-action.php"
require "../inc-aux.php";

$_POST['band-rock'] = ( isset($_POST['band-rock']) ) ? $_POST['band-rock'] : null;

# Visualizando os dados
debug($_POST);

# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.
