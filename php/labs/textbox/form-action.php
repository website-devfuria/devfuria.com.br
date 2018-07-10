<?php
// Arquivo "form-action.php"
require "../inc-aux.php";

$_POST['author']   = ( isset($_POST['author']) )   ? $_POST['author']   : null;
$_POST['email']    = ( isset($_POST['email']) )    ? $_POST['email']    : null;
$_POST['pass']     = ( isset($_POST['pass']) )     ? $_POST['pass']     : null;
$_POST['comments'] = ( isset($_POST['comments']) ) ? $_POST['comments'] : null;

# Visualizando os dados
debug($_POST);

# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.
