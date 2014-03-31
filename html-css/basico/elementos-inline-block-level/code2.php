<?php
require "../../../core/boot.php";
$href = "Location: " . LINKS_PATH . "/html-css/basico/elementos-inline-block-level/";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header($href);
?>