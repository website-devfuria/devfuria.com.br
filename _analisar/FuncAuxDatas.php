<?php

/**
 * Classe para auxiliar com as datas
 */
class FuncAuxDatas {

    /**
     * A função dataConversor é responsavél por alterar o formato da data em dois tipos:
     *
     * 1.) Data de Visualização:
     * Recebe a data com o formato Americano (Y-m-d) e converte para o formato Brasileiro (d-m-Y)
     * Para isso é necessário utilizar a função data_converte_para_visualizar.
     *
     * Exemplo:
     * $date = FuncAux::data_converte_para_visualizar('2012-07-13');
     *
     * 2.) Data de Gravação:
     * Recebe a data com o formato Brasileiro (d-m-Y) e converte para o formato Americano (Y-m-d)
     * Para isso é necessário utilizar a função data_converte_para_mysql.
     *
     * Exemplo:
     * $date = FuncAux::data_converte_para_mysql('2012-07-13');
     *
     * @param type $formato_entrada
     * @param type $formato_saida
     * @param type $str_data
     * @return type
     */
    static function dataConversor($formato_entrada, $formato_saida, $str_data) {
        $date = \DateTime::createFromFormat($formato_entrada, $str_data);

        if ($date)
            return $date->format($formato_saida);
        else
            return null;
    }

    /**
     * É responsável pela conversão do formato americano para o brasileiro,
     *
     * @param type $data
     * @return type
     */
    static function data_converte_para_visualizar($data) {
        if ($data == "0000-00-00") {
            return null;
        }
        return self::dataConversor("Y-m-d", "d/m/Y", $data);
    }

    /**
     * É responsável pela conversão do formato brasileiro para o americano,
     *
     * @param type $data
     * @return type
     */
    static function data_converte_para_mysql($data) {
        if ($data == "")
            return null;

        return self::dataConversor("d/m/Y", "Y-m-d", $data);
    }

    /**
     * Retorna um array com o período atual no formato americano (mysql)
     *
     */
    static function retPeridoAtual($inicio_ou_termino=null) {
        $dia = "01";
        $mes = date("m");
        $ano = date("Y");

        $ultimo_dia = date("t", mktime(0, 0, 0, $mes, '01', $ano));

        $periodo = array(
            "inicio" => "$ano-$mes-$dia",
            "termino" => "$ano-$mes-$ultimo_dia"
        );

        if ($inicio_ou_termino) {
            return $periodo[$inicio_ou_termino];
        } else {
            return $periodo;
        }
    }

}

?>
