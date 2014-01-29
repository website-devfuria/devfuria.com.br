<?php

$imgDest = imagecreatetruecolor(600, 600);
imageFill($imgDest, 0, 0, ImageColorAllocate($imgDest, 250, 250, 200));

$tri    = imageCreateFromPng('tri.png');
$quadro = imageCreateFromPng('qua.png');

$dst_x = 30;
$dst_y = 30;
$src_x = 0;
$src_y = 0;
$src_w = 101;
$src_h = 101;
imageCopy($imgDest, $tri, $dst_x, $dst_y, $src_x,$src_y, $src_w, $src_h);

$dst_x = 10;
$dst_y = 10;
$src_x = 0;
$src_y = 0;
$src_w = 280;
$src_h = 280;
imageCopy($imgDest, $quadro, $dst_x, $dst_y, $src_x,$src_y, $src_w, $src_h);


header("Content-type: image/png");
imagepng($imgDest);

imageDestroy($imgDest);
imageDestroy($quadro);
imageDestroy($tri);
?>