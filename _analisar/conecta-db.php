<?php

/**
 * Conecta com o DB
 */
//$pdo = new PDO("mysql:host=localhost", "conexaod_remoto", "alfa9876");# dialhost
$pdo = new PDO("mysql:host=localhost", "root", "alfa9876"); # local
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$pdo->exec("set names utf8");
$pdo->exec("USE devfuria_fulia");


/**
 * TRUNCATE;
 */
function limparBase(){
    $GLOBALS['pdo']->exec("TRUNCATE TABLE materias;");
}


/**
 * DROP;
 * CREATE;
 */
function criarTableMaterias(){
    # deleta a tabela
    $GLOBALS['pdo']->exec("DROP TABLE materias;");

    # criar a tabela
    $sql = <<<EOT
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL,
  `secao` varchar(50) NOT NULL,
  `codigo` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) DEFAULT NULL,
  `label_link` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `paginaTitulo` varchar(255) DEFAULT NULL,
  `paginaDescricao` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `dtCriacao` date DEFAULT NULL,
  `dtAtualizacao` date DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
EOT;
    $GLOBALS['pdo']->exec($sql);
}


