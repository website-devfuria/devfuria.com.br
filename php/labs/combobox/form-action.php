<?php
// Arquivo "form-action.php"

# Inicializando a variável $_POST['cidades']
$_POST['cidades'] = isset($_POST['cidades']) ? $_POST['cidades'] : null;

# Caso o valor de $_POST seja verdadeiro (diferente de "" ou null)
# executaremso o bloco if
if ($_POST['cidades']) {
    echo "persistir '{$_POST['cidades']}'";
} else {
    echo "não persistir nada!";
}