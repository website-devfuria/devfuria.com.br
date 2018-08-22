<?php

#
# Autoload para o sdd
#

spl_autoload_register(null, false);
spl_autoload_extensions('.php, .php');

function classLoader($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
    //var_dump($file);
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('classLoader');