<?php

namespace oop;


#
# Sectino
#
class Section {

    #
    # os menus da seção
    #
    function setMenus($path_base, $secao) {
        $caminho_completo_do_arquivo_de_menus = $path_base . "/$secao/menus.php";

        if (!file_exists($caminho_completo_do_arquivo_de_menus)) {
            throw new Exception("Arquivode menus não localizado [$caminho_completo_do_arquivo_de_menus]");
        }

        $this->menus = require $caminho_completo_do_arquivo_de_menus;
    }

    #
    # o menu da página
    #
    function getMenu($capitulo) {
        return $this->menus[$capitulo];
    }


}

