<?php
/**
 *
 */

/**
 *
 */
class FuncAux {

    /**
     * A função dataConversor é responsavél por alterar o formato da data em dois tipos:
     *
     * 1.) Data de Visualização:
     *     Recebe a data com o formato Americano (Y-m-d) e converte para o formato Brasileiro (d-m-Y)
     *     Para isso é necessário utilizar a função data_converte_para_visualizar.
     *
     *     Exemplo:
     *     $date = FuncAux::data_converte_para_visualizar('2012-07-13');
     *
     * 2.) Data de Gravação:
     *     Recebe a data com o formato Brasileiro (d-m-Y) e converte para o formato Americano (Y-m-d)
     *     Para isso é necessário utilizar a função data_converte_para_mysql.
     *
     *     Exemplo:
     *     $date = FuncAux::data_converte_para_mysql('2012-07-13');
     *
     * @param type $formato_entrada
     * @param type $formato_saida
     * @param type $str_data
     * @return type
     */
    static function dataConversor($formato_entrada, $formato_saida, $str_data){

        date_default_timezone_set('America/Sao_Paulo');
        $date = DateTime::createFromFormat($formato_entrada, $str_data);

        if($date)
            return $date->format($formato_saida);
        else
            return null;

    }

    /**
     * É responsável pela conversão do formato americano para o brasileiro,
     * essa instancia a função dataConversor lhe enviando todos os parametros
     * solicitados para a realização da função.
     *
     * @param type $data
     * @return type
     */
    static function data_converte_para_visualizar($data){
        return self::dataConversor("Y-m-j", "j/m/Y", $data);
    }

    /**
     * É responsável pela conversão do formato brasileiro para o americano,
     * essa instancia a função dataConversor lhe enviando todos os parametros
     * solicitados para a realização da função.
     *
     * @param type $data
     * @return type
     */
    static function data_converte_para_mysql($data){
        return self::dataConversor("j/m/Y", "Y-m-j", $data);
    }


}# end class

/*
 * Implementação
 *
 */

//# Func.data_converte_para_visualizar
//$date = FuncAux::data_converte_para_visualizar('2012-07-13');
//echo $date;
//
//# Func.data_converte_para_mysql
//$date = FuncAux::data_converte_para_mysql('13/07/2012');
//echo $date;
