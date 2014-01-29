<?php
$fp = fopen('data.txt', 'w');

fwrite($fp, "1\r\n");
fwrite($fp, "2\r\n");
fwrite($fp, "3\r\n");

fclose($fp);
?>

