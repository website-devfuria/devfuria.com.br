<?php
require "../../../core/boot.php";
$href = "Location: " . LINKS_PATH . "/logica-de-programacao/basico/exercicios-operadores-atribuicao";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header($href);
?>