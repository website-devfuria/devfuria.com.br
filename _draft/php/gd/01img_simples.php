<?php
/**
 * Cria uma imagem simples
 */
$width = 150;
$heigth = $width*1.3;

$im = imagecreate($width, $heigth);

$background_color = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));

header("Content-type: image/png");
imagepng($im);

imagedestroy($im);

?>