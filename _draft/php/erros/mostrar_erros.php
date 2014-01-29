<?php
/**
 * Se o servidor está configurado para não mostrar erros, podemo
 * utilizar do ćodigo abaixo para forçar a apresnetação de erros.
 */

ini_set('display_errors', 'on');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL ^ E_NOTICE);

?>