<?php
require "../../../core/boot.php";
$href = "Location: " . LINKS_PATH . "/html-css/basico/html-intro/";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header($href);
?>