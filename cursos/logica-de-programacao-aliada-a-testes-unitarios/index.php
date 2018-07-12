<?php

require "../../app/boot.php";
require Site::$path['api/'] . '/boot.php';


#
#
#
$modulos = fulia_log2();

#
# view
#
require "view-home.php";
