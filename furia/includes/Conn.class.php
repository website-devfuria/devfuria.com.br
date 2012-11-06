<?php
/**
 * 
 */
/**
 * 
 */
abstract class Conn {

    /**
     *
     * @var type 
     */
    private static $conn;
    
    /**
     * 
     * @return \PDO
     */
    static function getConexao() {
        if ( ! self::$conn ) {
            return new PDO(
                "mysql:host=localhost;dbname=devfuria_main",
                "devfuria_conexao",
                "780lambda17",
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                )
            );            
        }
    }
}
?>