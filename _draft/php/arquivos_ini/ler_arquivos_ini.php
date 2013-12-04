<?php
# ler arquivos de configuração .ini

$nome_do_arquivo = "config.ini";

#forma 1
$res1 = parse_ini_file($nome_do_arquivo);
var_dump($res1);


# forma 2
$res2 = parse_ini_file($nome_do_arquivo, true);
var_dump($res2);

echo 'veja mais em http://php.net/manual/en/function.parse-ini-file.php';
?>
