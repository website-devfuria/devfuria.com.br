<?php

$config = parse_ini_file("config.ini");
//var_dump($config); die();


/*
 * Atribuição de variáveis
 */
$ftp_server = $config['ftp_server'];
$ftp_user   = $config['ftp_user'];
$ftp_pass   = $config['ftp_pass'];


/*
 * set up a connection or die
 */
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");


/*
 * login ftp
 */
$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);
if (   !$login_result   ) {
    echo "Couldn't connect as $ftp_user\n";
    die();
}


/*
 * Cria os objetos e atribue ao array arquivos
 */
require 'criarObjetos.php';
$arquivos = retObjetos();


/*
 * Tenta abrir e fazer o upload de cada arquivo
 */
while ($cad_arq = current($arquivos)) {

    # abrir
    $pathCompleto       = $config['local_leitura_arquivos'].$cad_arq->nome;
    $cad_arq->resource  = fopen($pathCompleto, 'r');


    # upload
    $fileDestino        = $config['local_escrita_arquivos'].$cad_arq->nome;
    $cad_arq->envio_ftp = ftp_fput($conn_id, $fileDestino, $cad_arq->resource, FTP_ASCII);

    next($arquivos);
}


/*
 * close the connection
 */
ftp_close($conn_id);



/*
 * Se der algum erro em algum arquivo as
 * propriedades 'resouce' e 'envio_ftp' estarão setadas
 * como false ou null.
 *
 * O sistema precisa dispara algum alerta.
 *
 */



/*
 * redirecionamento
 *
 * Como houve um 'corte' na execução
 * o procedimento abaixo simula
 * a continuação do processo.
 */
?>