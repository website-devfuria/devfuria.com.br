<?php
/**
 * Exercício com fontes true types
 */


# Criar a imgem
$width = 350;
$heigth = $width*0.4;
$im = imagecreate($width, $heigth);
$background_color = imagecolorallocate($im, 240, 240, 240);

# Cores
$black = imagecolorallocate($im, 0, 0, 0);


# Fontes true type

$image      = $im; # resource
$size       = 9; # float
$angle      = 0; # float
$x          = 10; # int
$y          = 10; # int
$color      = $black; # int
$text       = "Testando fontes true type"; # string


$fontfile   = "fontes/a_theme_for_murder.ttf"; # string
imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);

$fontfile   = "fontes/ajax_surreal_freak.ttf"; # string
imagettftext($image, $size, $angle, $x, $y+=20, $color, $fontfile, $text);

$fontfile   = "fontes/king668.ttf"; # string
imagettftext($image, $size, $angle, $x, $y+=20, $color, $fontfile, $text);

$fontfile   = "fontes/magnum.ttf"; # string
imagettftext($image, $size, $angle, $x, $y+=20, $color, $fontfile, $text);

$fontfile   = "fontes/verdana.ttf"; # string
imagettftext($image, $size, $angle, $x, $y+=20, $color, $fontfile, $text);


# Mostrar imagem
header("Content-type: image/png");
imagepng($im);
imagedestroy($im);

?>
