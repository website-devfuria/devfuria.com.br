<?php

/*
 * Definição da classe arquivo
 */
class Arquivo{
    public $nome;
    public $resource;
    public $envio_ftp;

    function __construct($nome){
        $this->nome     = $nome;
    }
}


/*
 * Cria os objetos 'arquivos'
 */
function retObjetos(){
    $arquivos   = array();
    $arquivos[] = new Arquivo('Laudo nr 01 fem 3p.txt');
    $arquivos[] = new Arquivo('Laudo nr 01 fem 2p.txt');
    $arquivos[] = new Arquivo('Laudo nr 01 masc 3p.txt');
    $arquivos[] = new Arquivo('Laudo nr 01 masc 2p.txt');

   return $arquivos;
}

?>
