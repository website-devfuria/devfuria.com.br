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
        $local   = "localhost";
        $usuario = "devfuria_conexao";
        $senha   = "780lambda17";
        $base    = "devfuria_main";

        if (empty(self::$conn)) {
            self::$conn = new PDO("mysql:host=$local;dbname=$base", "$usuario", "$senha", array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                )
            );
        }

        return self::$conn;
    }
}
?>