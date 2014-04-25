<?php
require "../../../core/boot.php";
$href = "Location: " . LINKS_PATH . "/regexp/basico/preg-match-all";

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header($href);
?>