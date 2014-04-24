<?php
require "../../../core/boot.php";
$href = "Location: " . LINKS_PATH . "/php/arrays-vetores-matrizes/";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header($href);
?>